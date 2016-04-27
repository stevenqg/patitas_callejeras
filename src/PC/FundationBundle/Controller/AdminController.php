<?php

namespace PC\FundationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use PC\FundationBundle\Models\Document;
use PC\FundationBundle\Entity\Photo;
use PC\FundationBundle\Entity\Administrator;
use PC\FundationBundle\Form\AdministratorType;
use PC\FundationBundle\Entity\Pet;
use PC\FundationBundle\Form\PetType;
use PC\FundationBundle\Entity\Meeting;
use PC\FundationBundle\Form\MeetingType;


class AdminController extends Controller
{
    /*
    muestra los administradores registrados en la base de datos
    */
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        if($session->has("id"))
        {
            return $this->render('PCFundationBundle:Admin:admin.html.twig');    
        }
        else
        {
            echo '<script language="javascript">alert("debe estar logueado para acceder a este contenido.");</script>'; 
            return $this->render('PCFundationBundle:Admin:login.html.twig');
        }
    }
    
    /*
    permite ver la ventana login para el adminsitrador, realizar el login y crear la sesion.
    */
    public function loginAction(Request $request)
    {
        if($request->getMethod()=="POST")
        {
            $email = $request->get("email");
            $password =$request->get("password");
            
            $admin = $this->getDoctrine()->getRepository('PCFundationBundle:Administrator')->findOneBy(array("email" => $email, "password" => $password));
            if($admin)
            {
                $session = $request->getSession();
                $session->set("id", $admin->getId());
                $session->set("name", $admin->getName());
            
                return $this->redirectToRoute('pc_administrator_index');
            }
            else
            {
                echo '<script language="javascript">alert("credenciales incorrectas, intentelo de nuevo.");</script>'; 
                return $this->render('PCFundationBundle:Admin:login.html.twig');
            }
        }
        
        return $this->render('PCFundationBundle:Admin:login.html.twig');
    }
    
    /*
    permite cerrar la sesion actual y redireccionar a la ventana de inicio publica   
    */
    public function logoutAction(Request $request)
    {
        $session = $request->getSession();
        $session->clear();
        echo '<script language="javascript">alert("ha cerrado sesión correctamente.");</script>';
        return $this->redirectToRoute('pc_fundation_homepage');
    }
    
    /*
    muestra el formulario para ingreso de un nuevo admin
    */
    public function addAction()
    {
        $admin = new Administrator();
        $form = $this->createAdminForm($admin);
        return $this->render('PCFundationBundle:Admin:NewAdmin.html.twig', array('form'=>$form->createView()));
    }
    
    /*
    crea el formulario para registro de admin
    */
    private function createAdminForm(Administrator $admin)
    {
        $form = $this->createForm(AdministratorType::class, $admin, array('action' => $this->generateUrl('pc_administrator_create'), 'method' => 'POST'));
        return $form;
    }
    
    /*
    se encarga de registrar el admin en la base de datos
    */
    public function createAction(Request $request)
    {
        $admin = new Administrator();
        $form = $this->createAdminForm($admin);
        $form->handlerequest($request);
        
        if($form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($admin);
            $em->flush();
            
            return $this->redirectToRoute('pc_administrator_add');
        }
        return $this->render('PCFundationBundle:Admin:NewAdmin.html.twig', array('form'=>$form->createView()));
    }
    
    /*
    muestra el formulario para editar el adminsitrador ---aún en construcción---
    */
    public function editAction()
    {
       return $this->render('PCFundationBundle:Admin:edit_admin.html.twig');
    }
    
    
    
    /*
    muestra el formulario para ingreso de una mascota
    */
    public function addpetAction()
    {
        $pet = new Pet();
        $form = $this->createPetform($pet);
        return $this->render('PCFundationBundle:Admin:add_mascota.html.twig', array('form'=>$form->createview())); 
    }
    
    /*
    crea el formularo para ingresar los datos de la mascota
    */
    private function createPetForm(Pet $entity)
    {
        $form = $this->createForm(PetType::class, $entity, array( 'action' => $this->generateUrl('pc_administrator_pet_create'), 'method'=>'POST'));
        return $form;
    }
    
    /*
    registra la mascota en la base de datos
    */
    public function createpetAction(request $request)
    {
        $pet = new Pet();
        $form = $this->createPetForm($pet);
        $form->handlerequest($request);
        
        if($form->isvalid())
        {
            $session = $request->getSession();
            $session->set("petId", $pet->getId());
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($pet);
            $em->flush();
            
            return $this->redirectToRoute('pc_admin_pet_photo');
        }
        
        return $this->render('PCFundationBundle:Admin:add_mascota.html.twig', array('form'=>$form->createview())); 
    }
    
    /*
    carga la imagen de la mascota
    */
    public function uploadAction(request $request)
    {
        if($request->getMethod()=='POST')
        {
            $image = $request->files->get('file');
            
            if(($image instanceof UploadedFile) && ($image->getError() == '0'))
            {
                $originalName = $image->getClientOriginalName();
                $name_array = explode('.', $originalName);
                $file_type = $name_array[sizeof($name_array)-1];
                $valid_filetypes = array('jpg', 'jpeg', 'png', 'gif');
                if(in_array(strtolower($file_type), $valid_filetypes))
                {
                    $document = new Document();
                    $document->setFile($image);
                    $document->setSubDirectory('pets');
                    $document->processFile();
                    
                    $photo = new Photo();
                    $route = $document->getUploadDirectory() . DIRECTORY_SEPARATOR . $document->getSubDirectory() . DIRECTORY_SEPARATOR . $image->getBaseName();
                    $photo->setRoute($route);
                    $pet = $this->getDoctrine()->getRepository('PCFundationBundle:Pet')->find($session->get("petId"));
                    $photo->setPet($pet);
                    
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($photo);
                    $em->flush();
                    
                    $session = $request->getSession();
                    $session->remove("petId");
                    
                    return $this->redirectToRoute('pc_admin_adopt_pet');
                }
            }
        }
       return $this->render('PCFundationBundle:Admin:add_photo_mascota.html.twig');
    }
    
    /*
    permite ver, agregar y gestionar las jornadas de censo en el area de trabajo - bloque capa
    */
    public function jornadacensoaddAction()
    {
        $meeting = new Meeting();
        $form = $this->createMeetingForm($meeting);
        return $this->render('PCFundationBundle:Admin:nuevocenso.html.twig', array('form'=>$form->createView()));
    }
    
    /*
    crea el formularo para ingresar los datos de la jornada de censo
    */
    private function createMeetingForm(Meeting $entity)
    {
        $form = $this->createForm(MeetingType::class, $entity, array( 'action' => $this->generateUrl('pc_admin_jornada_censo_create'), 'method'=>'POST'));
        return $form;
    }
    
    /*
    registra la jornada de censo en la base de datos
    */
    public function jornadacensocreateAction(request $request)
    {
        $session = $request->getSession();
        $meeting = new Meeting();
        $form = $this->createMeetingForm($meeting);
        $form->handlerequest($request);
        if($form->isvalid())
        {
            $em = $this->getDoctrine()->getManager();
            $admin = $this->getDoctrine()->getRepository('PCFundationBundle:Administrator')->find($session->get("id"));
            $meeting->setAdministrator($admin);
            $em->persist($meeting);
            $em->flush();
            
            return $this->redirectToRoute('pc_admin_jornada_censo');
        }
        return $this->render('PCFundationBundle:fundation:nuevocenso.html.twig', array('form'=>$form->createview())); 
    }
    
    /*
    permite ver y gestionar las jornadas de censo en el area de trabajo - bloque capa
    */
    public function jornadacensoAction(Request $request)
    {
        $meetings = $this->getDoctrine()->getRepository('PCFundationBundle:Meeting')->findBy(array('meetingType' => 'CENSUS'));
        
        return $this->render('PCFundationBundle:Admin:jornadascenso.html.twig', array('meetings' => $meetings));
    }
    
    
    /*
    permite ver y gestionar las mascotas en espera de adopción en el area de trabajo - bloque capa
    */
    public function adopcionviewAction(Request $request)
    {
        $pets = $this->getDoctrine()->getRepository('PCFundationBundle:Pet')->findAll();
        
        return $this->render('PCFundationBundle:Admin:Masct_adopcion.html.twig', array('pets' => $pets));
    }
    
    
    
   
    public function solicitudesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT u FROM PCFundationBundle:User u JOIN PCFundationBundle:Adoption a WHERE u.id=a.user');
        $users = $query->getResult();
        
        return $this->render('PCFundationBundle:Admin:solicitudes.html.twig', array( 'users' => $users ));
    }
    
    public function solicituddateAction($userId)
    {
        $user = $this->getDoctrine()->getRepository('PCFundationBundle:User')->find($userId);
        $adoption = $this->getDoctrine()->getRepository('PCFundationBundle:Adoption')->findOneBy(array('user'=>$userId));
        $pet = $this->getDoctrine()->getRepository('PCFundationBundle:Pet')->find($adoption->getPet()->getId());
        
        /**die("".$adoption->getId());*/
        
        return $this->render('PCFundationBundle:Admin:solicitud_adopcion.html.twig', array('user'=>$user, 'pet'=>$pet, 'adoption' => $adoption));
    }
    
    
    
    
    
    
    
    
    
    public function solaceptarAction($solicitudId)
    {
        $em = $this->getDoctrine()->getManager();
        $adoption = $em->getRepository('PCFundationBundle:Adoption')->find($solicitudId);
    
        if (!$adoption) {
            throw $this->createNotFoundException(
                'No adoption found for id '.$solicitudId
            );
        }
    
        $adoption->setStatus('APPROVED');
        $em->flush();
        
        
    
        return $this->redirectToRoute('pc_admin_pet_solicitudes');
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function solpendienteAction($solicitudId)
    {
        $em = $this->getDoctrine()->getManager();
        $adoption = $em->getRepository('PCFundationBundle:Adoption')->find($solicitudId);
    
        if (!$adoption) {
            throw $this->createNotFoundException(
                'No adoption found for id '.$solicitudId
            );
        }
    
        $adoption->setStatus('PENDING');
        $em->flush();
    
        return $this->redirectToRoute('pc_admin_pet_solicitudes');
    }
    
    public function solrechazarAction($solicitudId)
    {
        $em = $this->getDoctrine()->getManager();
        $adoption = $em->getRepository('PCFundationBundle:Adoption')->find($solicitudId);
    
        if (!$adoption) {
            throw $this->createNotFoundException(
                'No adoption found for id '.$solicitudId
            );
        }
    
        $adoption->setStatus('DISAPPROVED');
        $em->flush();
    
        return $this->redirectToRoute('pc_admin_pet_solicitudes');
    }
    
    
    
    
    
    
    public function mascotadoptadaAction()
    {
        return $this->render('PCFundationBundle:Admin:masc_adopatada.html.twig');
    }
    
     /*
    permite ver mas información del censo
    */
    public function jornadacensomasAction()
    {
        return $this->render('PCFundationBundle:Admin:censo.html.twig');
    }
    
    /*
    permite ver mas información del censo
    */
    public function jornadacensoeditAction()
    {
        return $this->render('PCFundationBundle:Admin:editdatos.html.twig');
    }
    
    /*
    
    */
    public function jornadacensodatosAction()
    {
        return $this->render('PCFundationBundle:Admin:agregardatos.html.twig');
    }
    public function jornadaesterilizaAction()
    {
        return $this->render('PCFundationBundle:Admin:jornada_esteriliza.html.twig');
    }
    public function esterilizacionAction()
    {
        return $this->render('PCFundationBundle:Admin:esterilizacio.html.twig');
    }
     public function esterilizacionAddAction()
    {
        return $this->render('PCFundationBundle:Admin:esteriliza_add.html.twig');
    }
}
