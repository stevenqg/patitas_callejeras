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
use PC\FundationBundle\Entity\User;
use PC\FundationBundle\Entity\Census;
use PC\FundationBundle\Entity\Collaborator;
use PC\FundationBundle\Entity\Sterilization;
use PC\FundationBundle\Entity\Census_collaborator;
use PC\FundationBundle\Entity\Pet;
use PC\FundationBundle\Entity\Meeting;
use PC\FundationBundle\Entity\Event;
use PC\FundationBundle\Entity\Control;
use PC\FundationBundle\Entity\Donative;
use PC\FundationBundle\Entity\Credit;

use PC\FundationBundle\Form\CollaboratorType;
use PC\FundationBundle\Form\AdministratorType;
use PC\FundationBundle\Form\PetType;
use PC\FundationBundle\Form\MeetingType;
use PC\FundationBundle\Form\EventType;
use PC\FundationBundle\Form\ControlType;
use PC\FundationBundle\Form\DonativeType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;


class AdminController extends Controller
{
    /**
    * muestra los administradores registrados en la base de datos
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
    
    /**
    *permite ver la ventana login para el adminsitrador, realizar el login y crear la sesion.
    */
    public function loginAction(Request $request)
    {
        $session = $request->getSession();
        if($session->has("id") && $session->has("name"))
        {
            return $this->redirectToRoute('pc_administrator_index');
        }
        
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
    
    /**
     * permite recuperar el password
     */ 
    private function passwordRecovery($email)
    {
        $admin = $this->getDoctrine()->getRepository('PCFundationBundle:Administrator')->findByEmail($email);
        return $admin->getPassword(); 
        
    }
    
    
    /**
    * permite cerrar la sesion actual y redireccionar a la ventana de inicio publica   
    */
    public function logoutAction(Request $request)
    {
        $session = $request->getSession();
        $session->clear();
        echo '<script language="javascript">alert("ha cerrado sesión correctamente.");</script>';
        return $this->redirectToRoute('pc_fundation_homepage');
    }
    
    /**
    * muestra el formulario para ingreso de un nuevo admin
    */
    public function addAction()
    {
        $admin = new Administrator();
        $form = $this->createAdminForm($admin);
        return $this->render('PCFundationBundle:Admin:NewAdmin.html.twig', array('form'=>$form->createView()));
    }
    
    /**
    * crea el formulario para registro de admin
    */
    private function createAdminForm(Administrator $admin)
    {
        $form = $this->createForm(AdministratorType::class, $admin, array('action' => $this->generateUrl('pc_administrator_create'), 'method' => 'POST'));
        return $form;
    }
    
    /**
    * se encarga de registrar el admin en la base de datos
    */
    public function createAction(Request $request)
    {
        $admin = new Administrator();
        $form = $this->createAdminForm($admin);
        $form->handlerequest($request);
        
        if($form->isValid())
        {
            /*
            $password = $form->get('password')->getdata();
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($admin, $password);
            
            $admin->setPassword($encoded);
            */
            
            $em=$this->getDoctrine()->getManager();
    
            $em->persist($admin);
            $em->flush();
            
            return $this->redirectToRoute('pc_administrator_add');
        }
        return $this->render('PCFundationBundle:Admin:NewAdmin.html.twig', array('form'=>$form->createView()));
    }
    
    /**
    * muestra el formulario para editar el adminsitrador ---aún en construcción---
    */
    public function editAction($id)
    {
       $admin = $this->getDoctrine()->getRepository('PCFundationBundle:Administrator')->find($id);
       $form = $this->createAdminEditForm($admin);
       
       return $this->render('PCFundationBundle:Admin:edit_admin.html.twig', array('form' => $form->createview()));
    }
    
    /**
    * crea el formulario para registro de admin
    */
    private function createAdminEditForm(Administrator $admin)
    {
        $form = $this->createForm(AdministratorType::class, $admin, array('action' => $this->generateUrl('pc_administrator_update', array('id' => $admin->getId())), 'method' => 'PUT'));
        return $form;
    }
    
    
    public function updateAction(Request $request, $id)
    {
        $admin = $this->getDoctrine()->getRepository('PCFundationBundle:Administrator')->find($id);
        $form = $this->createAdminEditForm($admin);
        $form->handlerequest($request);
        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            
            $session = $request->getSession();
            
            $session->remove('name');
            $session->set("name", $admin->getName());
            
            return $this->redirectToRoute("pc_administrator_index");
        }
        
        return $this->render('PCFundationBundle:Admin:edit_admin.html.twig', array('form' => $form->createview()));
        
    }
    
    
    /**
    * muestra el formulario para ingreso de una mascota
    */
    public function addpetAction()
    {
        $pet = new Pet();
        $form = $this->createPetform($pet);
        return $this->render('PCFundationBundle:Admin:add_mascota.html.twig', array('form'=>$form->createview())); 
    }
    
    /**
    * crea el formularo para ingresar los datos de la mascota
    */
    private function createPetForm(Pet $entity)
    {
        $form = $this->createForm(PetType::class, $entity, array( 'action' => $this->generateUrl('pc_administrator_pet_create'), 'method'=>'POST'));
        return $form;
    }
    
    /**
    * registra la mascota en la base de datos
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
            $pet->setStatus("UNADOPTED");
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($pet);
            $em->flush();
            
            return $this->redirectToRoute('pc_admin_pet_photo');
        }
        
        return $this->render('PCFundationBundle:Admin:add_mascota.html.twig', array('form'=>$form->createview())); 
    }
    
    /**
    * carga la imagen de la mascota
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
    
    /**
    * permite ver, agregar y gestionar las jornadas de censo en el area de trabajo - bloque capa
    */
    public function jornadacensoaddAction()
    {
        $meeting = new Meeting();
        $form = $this->createMeetingForm($meeting);
        return $this->render('PCFundationBundle:Admin:nuevocenso.html.twig', array('form'=>$form->createView()));
    }
    
    /**
    * crea el formularo para ingresar los datos de la jornada de censo
    */
    private function createMeetingForm(Meeting $entity)
    {
        $form = $this->createForm(MeetingType::class, $entity, array( 'action' => $this->generateUrl('pc_admin_jornada_censo_create'), 'method'=>'POST'));
        return $form;
    }
    
    /**
    * registra la jornada de censo en la base de datos
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
    
    /**
    * permite ver y gestionar las jornadas de censo en el area de trabajo - bloque capa
    */
    public function jornadacensoAction(Request $request)
    {
        $meetings = $this->getDoctrine()->getRepository('PCFundationBundle:Meeting')->findBy(array('meetingType' => 'CENSUS'));
        return $this->render('PCFundationBundle:Admin:jornadascenso.html.twig', array('meetings' => $meetings));
    }
    
    
    /**
    / permite ver y gestionar las mascotas en espera de adopción en el area de trabajo - bloque capa
    */
    public function adopcionviewAction(Request $request)
    {
        $pets = $this->getDoctrine()->getRepository('PCFundationBundle:Pet')->findAll();
        
        return $this->render('PCFundationBundle:Admin:Masct_adopcion.html.twig', array('pets' => $pets));
    }
    
    
    
    /**
     * muestra las solicitudes de adopción que han sido aprovadas
     */ 
    public function solicitudesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT u FROM PCFundationBundle:User u JOIN PCFundationBundle:Adoption a WHERE u.id=a.user AND a.status!=:status')->setParameter('status', 'APPROVED');
        $users = $query->getResult();
        
        return $this->render('PCFundationBundle:Admin:solicitudes.html.twig', array( 'users' => $users ));
    }
    
    
    public function solicituddateAction($userId)
    {
        $user = $this->getDoctrine()->getRepository('PCFundationBundle:User')->find($userId);
        $adoption = $this->getDoctrine()->getRepository('PCFundationBundle:Adoption')->findOneBy(array('user'=>$userId));
        $pet = $this->getDoctrine()->getRepository('PCFundationBundle:Pet')->find($adoption->getPet()->getId());
        
        return $this->render('PCFundationBundle:Admin:solicitud_adopcion.html.twig', array('user'=>$user, 'pet'=>$pet, 'adoption' => $adoption));
    }
    
    /**
     * cambia el estado de la solicitud a aprobado y el de la mascota a adoptada 
     */
    public function solaceptarAction($solicitudId)
    {
        $em = $this->getDoctrine()->getManager();
        $adoption = $em->getRepository('PCFundationBundle:Adoption')->find($solicitudId);
    
        if (!$adoption) {
            throw $this->createNotFoundException(
                'No adoption found for id '.$solicitudId
            );
        }
        
        $pet = $adoption->getPet();
        
        $adoption->setStatus('APPROVED');
        $em->persist($adoption);
        $em->flush();
        
        $pet->setStatus('ADOPTED');
        $em->persist($pet);
        $em->flush();
        $adoptionId = $adoption->getId();
        
        $adoptions = $this->getDoctrine()->getRepository('PCFundationBundle:Adoption')->findByPet($pet);
        
        foreach ($adoptions as $adoption) 
        {
            if($adoption->getId()!=$adoptionId)
            {
            $adoption->setStatus('DISAPPROVED');
            $em->flush();
            }
        }
    
        return $this->redirectToRoute('pc_admin_pet_solicitudes');
    }
    
    /**
     * cambia el estado de la solicitud a pendiente
     */
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
        $em->persist($adoption);
        $em->flush();
    
        return $this->redirectToRoute('pc_admin_pet_solicitudes');
    }
    
    /**
     * cambia el estado de la solicitud a rechazado y el de la mascota a no adoptada
     */
    public function solrechazarAction($solicitudId)
    {
        $em = $this->getDoctrine()->getManager();
        $adoption = $em->getRepository('PCFundationBundle:Adoption')->find($solicitudId);
    
        if (!$adoption) {
            throw $this->createNotFoundException(
                'No adoption found for id '.$solicitudId
            );
        }
        
        $pet = $adoption->getPet();
        $userId = $adoption->getUser()->getid();
        
        $em->remove($adoption);
        $em->flush();
        
        
        $user = $this->getDoctrine()->getRepository('PCFundationBundle:User')->find($userId);
        $em->remove($user);
        $em->flush();
        
        
        $pet->setStatus('UNADOPTED');
        $em->persist($pet);
        $em->flush();
    
        return $this->redirectToRoute('pc_admin_pet_solicitudes');
    }
    
    /**
     * muestra la lista de las solicitudes de mascotas aprobadas
     */ 
    public function mascotadoptadaAction()
    {
        $adoptions = $this->getDoctrine()->getRepository('PCFundationBundle:Adoption')->findByStatus('APPROVED');
        return $this->render('PCFundationBundle:Admin:masc_adoptada.html.twig', array( 'adoptions' => $adoptions ));
    }
    
    
    /**
     * permite agregar información de cada censo asociado a la jornada actual
     */
    public function jornadacensodatosAction($meetingId)
    {
        $defaultData = array('message' => 'Type your message here');
        $form = $this->crearFormularioCenso($defaultData);
        return $this->render('PCFundationBundle:Admin:agregardatos.html.twig', array('form'=>$form->createview(), 'meetingId' => $meetingId));
    }
    
    /**
     * permite crear el formulario para registrar tanto la mascota como el usuario realcionados en la jornada de esterilización 
     */
    public function crearformularioCenso($defaultData)
    {
        $form = $this->createFormBuilder($defaultData)
            ->setAction($this->generateUrl('pc_admin_jornada_censo_registrar'))
            ->setMethod('POST')
            ->add('meetingId', Integertype::class, array( 'attr'=>array('style'=>'display:none;')))
            ->add('petName', TextType::class)
            ->add('petAge', IntegerType::class)
            ->add('species', ChoiceType::class, array('choices' => array('canino'=>'CANINE', 'felino'=>'FELINE'), 'placeholder' => 'especie de la mascota'))
            ->add('race', TextType::class)
            ->add('colour', TextType::class)
            ->add('gender', ChoiceType::class, array('choices' => array('macho'=>'MALE', 'hembra'=>'FEMALE'), 'placeholder' => 'genero de la mascota'))
            ->add('isVacunated', CheckboxType::class, array('required' => false))
            ->add('isSterilized', CheckboxType::class, array('required' => false))
            ->add('isStray', CheckboxType::class, array('required' => false))
            ->add('isNeedSurgery', CheckboxType::class, array('required' => false))
            ->add('userName', TextType::class)
            ->add('lastName', TextType::class)
            ->add('userAge', IntegerType::class)
            ->add('identificationNumber', textType::class)
            ->add('address', textType::class)
            ->add('phone_number', textType::class)
            ->add('email', textType::class)
            ->add('save', SubmitType::class, array('label' => 'save pet'))
            ->getForm();
        
        return $form;
    }
    
    /**
     * permite registrar el censo realizado en determinada jornada.
     * recibe mediante un formulario "genérico" los datos de la mascota, el administrador, el id de la 
     * jornada y los demás campos requeridos para registrar el censo. 
     */ 
    public function registrarcensoAction(Request $request)
    {
        $defaultData = array('message' => 'Type your message here');
        $form = $this->crearformularioCenso($defaultData);
        $form->handlerequest($request);
        if($form->isvalid())
        {   
            $em = $this->getDoctrine()->getManager();
            
            //recuperamos el id de la jornada
            $meetingId = $form->get("meetingId")->getData();
            
            //set de las variables que componen el censo
            $user = new User();
            $pet = new Pet();
            $meeting = $this->getDoctrine()->getRepository("PCFundationBundle:Meeting")->find($meetingId);
            $census = new Census();

            
            //creación del usuario
            $user->setName($form->get("userName")->getData());
            $user->setLastName($form->get("lastName")->getData());
            $user->setAge($form->get("userAge")->getData());
            $user->setIdentificationNumber($form->get("identificationNumber")->getData());
            $user->setAddress($form->get("address")->getData());
            $user->setPhone_number($form->get("phone_number")->getData());
            $user->setEmail($form->get("email")->getData());
            
            $em->persist($user);
            $em->flush();
            
            //creación de la mascota
            $pet->setName($form->get("petName")->getData());
            $pet->setAge($form->get("petAge")->getData());
            $pet->setSpecies($form->get("species")->getData());
            $pet->setrace($form->get("race")->getData());
            $pet->setColour($form->get("colour")->getData());
            $pet->setGender($form->get("gender")->getData());
            $pet->setIsVacunated($form->get("isVacunated")->getData());
            $pet->setIsSterilized($form->get("isSterilized")->getData());
            $pet->setStatus("EXTERNAL");
            
            $em->persist($pet);
            $em->flush();
            
            //creación del registro de censo
            $census->setUser($user);
            $census->setPet($pet);
            $census->setMeeting($meeting);
            $census->setIsNeedSurgery($form->get('isNeedSurgery')->getData());
            $census->setIsStrayDog($form->get('isStray')->getData());
            
            $em->persist($census);
            $em->flush();
            
            return $this->redirectToRoute('pc_admin_jornada_censo_mas', array('meetingId' => $meetingId));
            
        }
        return $this->render('PCFundationBundle:Admin:agregardatos.html.twig', array('form'=>$form->createview(), 'meetingId' => $meetingId));
    }
    
    /**
     * permite ver en la interface de administrador los eventos actualmente registrados en la base de datos
     */
    public function eventosAction()
    {
        $events = $this->getDoctrine()->getRepository('PCFundationBundle:Event')->findAll();
        return $this->render('PCFundationBundle:Admin:eventos.html.twig', array('events' => $events));
    }
    
    /**
     * dirige a la interface destinada al registro de eventos
     */ 
    public function eventosaddAction()
    {
        $event = new Event();
        $form = $this->eventForm($event);
        return $this->render('PCFundationBundle:Admin:evento_add.html.twig', array('form'=>$form->createView()));
    }
    
    /**
     * crea el formulario que se muestra para la adición de eventos a la base de datos
     */ 
    private function eventForm(Event $entity)
    {
        $form = $this->createForm(EventType::class, $entity, array( 'action' => $this->generateUrl('pc_administrator_eventos_create'), 'method'=>'POST'));
        return $form;
    }
    
    /**
     * registra el evento en la base de datos y redirige a la ventana de eventos general ( function eventosAction() )
     */
    public function eventocreateAction(request $request)
    {
        $session = $request->getSession();
        $event = new Event();
        $form = $this->eventForm($event);
        $form->handlerequest($request);
        if($form->isvalid())
        {
            if($form->get('name')->getdata()=="recepción de donativos" || $form->get('name')->getdata()==null || $form->get('name')->getdata()=="")
            {
                $em = $this->getDoctrine()->getManager();
                $admin = $this->getDoctrine()->getRepository('PCFundationBundle:Administrator')->find($session->get("id"));
                $event->setAdministrator($admin);
                $event->setName('recepción de donativos');
                $em->persist($event);
                $em->flush();
                
                return $this->redirectToRoute('pc_admin_donativ_recepcion');
            }
            else
            {
            $em = $this->getDoctrine()->getManager();
            $admin = $this->getDoctrine()->getRepository('PCFundationBundle:Administrator')->find($session->get("id"));
            $event->setAdministrator($admin);
            $em->persist($event);
            $em->flush();
            
            return $this->redirectToRoute('pc_administrator_eventos');
            }
            
        }
        return $this->render('PCFundationBundle:Admin:evento_add.html.twig', array('form'=>$form->craeteView()));
    }
    
    /**
     * permite editar un evento en específico
     */ 
     public function eventoeditAction($eventId)
    {
        $event = $this->getDoctrine()->getRepository('PCFundationBundle:Event')->find($eventId);
        $form = $this->eventEditForm($event);
        return $this->render('PCFundationBundle:Admin:evento_edit.html.twig', array('form' => $form->createview()));
    }
    
    /**
     * crea el formulario que se muestra para la edición de eventos 
     */ 
    private function eventEditForm(Event $entity)
    {
        $form = $this->createForm(EventType::class, $entity, array( 'action' => $this->generateUrl('pc_administrator_evento_update', array('eventId' => $entity->getId())), 'method'=>'PUT'));
        return $form;
    }
    
    
    public function eventUpdateAction(Request $request, $eventId)
    {
        $event = $this->getDoctrine()->getRepository('PCFundationBundle:Event')->find($eventId);
        $form = $this->eventEditForm($event);
        $form->handlerequest($request);
        
        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            
            return $this->redirectToRoute('pc_administrator_eventos');
        }
        
        return $this->render('PCFundationBundle:Admin:evento_edit.html.twig', array('form' => $form->createview()));
    }
    
    
    /**
     * permite eliminar un evento que ya se realizó
     */ 
     public function eventoDeleteAction($eventId)
     {
         $em = $this->getDoctrine()->getManager();
         $event = $this->getDoctrine()->getrepository('PCFundationBundle:Event')->find($eventId);
         
         $em->remove($event);
         $em->flush();
         
         return $this->redirectToRoute('pc_administrator_eventos');
         
     }
    

    /**
     ********************************************************************************************************* 
     *********************************************************************************************************
     ********************************************************************************************************* 
     ********************************************************************************************************* 
     **********  PROCESOS PARA GESTIONAR LA INCERCIÓN DE LOS COLABORADORES EN LA BASE DE DATOS  **************
     **************************************  POR AHORA INCOMPLETOS  ****************************************** 
     ********************************************************************************************************* 
     *********************************************************************************************************
     ********************************************************************************************************* 
     */ 

    /**
    * permite ver mas información del censo y mostrar el formulario de registro para los
    * colaboradores (entidad Collaborator).
    */
    public function jornadacensomasAction($meetingId)
    {
        
        $meeting = $this->getDoctrine()->getRepository('PCFundationBundle:Meeting')->find($meetingId);
        $censuses = $this->getDoctrine()->getRepository('PCFundationBundle:Census')->findByMeeting($meeting);
        $census_collaborators = $this->getDoctrine()->getRepository('PCFundationBundle:Census_collaborator')->findByMeeting($meeting);
        
        return $this->render('PCFundationBundle:Admin:censo.html.twig', array( 'meeting' => $meeting, 'censuses' => $censuses, 'census_collaborators' => $census_collaborators ));
    }
 
    
    /**
     * redirige a la ventana donde se agrega el colaborador
     */
     public function addcollaboratorAction($meetingId)
    {
        $collaborator = new Collaborator();
        $form = $this->collaboratorForm($collaborator, $meetingId);
        return $this->render('PCFundationBundle:Admin:colaborador.html.twig', array('form' => $form->createview())); 
    }
    
    /**
     * muestra el formulario para la creación del colaborador
     */ 
    private function collaboratorForm(Collaborator $entity, $meetingId)
    {
        $form = $this->createForm(CollaboratorType::class, $entity, array( 'action' => $this->generateUrl('pc_admin_jornada_censo_create_collaborator', array('meetingId' => $meetingId)), 'method'=>'POST'));
        return $form;
    }
    
    /**
     * procesa el formulario para registrar el colaborador en la base de datos
     */ 
    public function createCollabAction(Request $request, $meetingId)
    {
        die("entró al createcollaboratorAction");
        $meeting = $this->getDoctrine()->getRepository('PCFundationBundle:Meeting')->find($meetingId);
        $collaborator = new Collaborator();
        $form = $this->collaboratorForm($collaborator, $meetingId);
        $form->handleRequest($request);
        
        if($form->isValid())
        {   
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($collaborator);
            $em->flush();
            
            $census_collaborator = new Census_collaborator();
            $census_collaborator->setMeeting($meeting);
            $census_collaborator->setCollaborator($collaborator);
            $em->persist($census_collaborator);
            $em->flush();
            
            
            return $this->redirectToRoute('pc_admin_jornada_censo_mas', array('meetingId'=>$metting->getId()));
        }
        return $this->render('PCFundationBundle:Admin:colaborador.html.twig', array('form' => $form->createview())); 
    }
    
    
    /**
     ********************************************************************************************************* 
     *********************************************************************************************************
     ********************************************************************************************************* 
     ********************************************************************************************************* 
     *********************************************************************************************************
     ********************************************************************************************************* 
     ********************************************************************************************************* 
     *********************************************************************************************************
     ********************************************************************************************************* 
     */  

    /*
    * permite ver mas información del censo
    */
    public function jornadacensoeditAction()
    {
        return $this->render('PCFundationBundle:Admin:editdatos.html.twig');
    }
    
    
    /**
     ********************************************************************************************************* 
     *********************************************************************************************************
     ********************************************************************************************************* 
     ****************************** ADMINISTRAR JORNADAS DE ESTERILIZACIÓN *********************************** 
     *********************************************************************************************************
     ********************************************************************************************************* 
     ********************************************************************************************************* 
     *********************************************************************************************************
     ********************************************************************************************************* 
     */
    
    /**
     * muestra la ventana donde se ingresan los datos básicos de la jornada de esterilización
     */ 
    public function esterilizacionAddAction($meetingId)
    {
        $defaultData = array('message' => 'Type your message here');
        $meeting = $this->getDoctrine()->getRepository('PCFundationBundle:Meeting')->find($meetingId);
        $form = $this->crearFormularioEsterilizacion($defaultData);
        return $this->render('PCFundationBundle:Admin:esteriliza_add.html.twig', array('form'=>$form->createview(), 'meeting' => $meeting));
    }
    
    /**
     * permite crear el formulario para registrar los datos básicos de la jornada de esterilización
     */
    public function crearFormularioEsterilizacion($defaultData)
    {
        $form = $this->createFormBuilder($defaultData)
            ->setAction($this->generateUrl('pc_admin_esterilizacion_create'))
            ->setMethod('POST')
            ->add('meetingId', Integertype::class, array( 'attr'=>array('style'=>'display:none;')))
            ->add('address', TextType::class)
            ->add('control_at', DateTimeType::class)
            ->add('amount', IntegerType::class)
            ->add('save', SubmitType::class, array('label' => 'save sterilization'))
            ->getForm();
        
        return $form;
    }
    
    /**
     * permite registrar la esterilización a realizar para determinada jornada de censo.
     * recibe mediante un formulario "genérico" los datos básicos de la jornada de esterilización. 
     */ 
    public function createesterilizacionAction(Request $request)
    {
        $defaultData = array('message' => 'Type your message here');
        $form = $this->crearFormularioEsterilizacion($defaultData);
        $form->handlerequest($request);
        if($form->isvalid())
        {   
            $em = $this->getDoctrine()->getManager();
            
            //recuperamos los datos básicos de la jornada de esterilización.
            $meetingId = $form->get("meetingId")->getData();
            $amount = $form->get("amount")->getData();
            $control_at = $form->get("control_at")->getData();
            
            
            //recuperamos la jornada con el id enviado en el formulario.
            $meeting = $this->getDoctrine()->getRepository("PCFundationBundle:Meeting")->find($meetingId);
            
            //recuperamos los censos asociados a dicha jornada.
            $censuses = $this->getDoctrine()->getRepository("PCFundationBundle:Census")->findByMeeting($meeting);
            
            //procedemos a perisistir los datos de cada censo asociado a al jornada donde se necesite
            //esterilizar la mascota.
            foreach ($censuses as $census) 
            {
                if($census->getIsNeedSurgery()=="1")
                {
                    $pet = $census->getPet();
                    $user = $census->getUser();
                    
                    $sterilization = new Sterilization();
                    $sterilization->setUser($user);
                    $sterilization->setPet($pet);
                    $sterilization->setMeeting($meeting);
                    $sterilization->setAmount($amount);
                    $sterilization->setControlAt($control_at);
                    
                    $em->persist($sterilization);
                    $em->flush();
                }
            }
            
            return $this->redirectToRoute('pc_admin_jornada_censo_mas', array('meetingId' => $meetingId));
            
        }
         return $this->render('PCFundationBundle:Admin:esteriliza_add.html.twig', array('form'=>$form->createview(), 'meeting' => $meeting));
    }
    
    public function jornadaesterilizaAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT DISTINCT m FROM PCFundationBundle:Sterilization s JOIN PCFundationBundle:Meeting m WHERE s.meeting = m.id');
        $results = $query->getResult();
        
        $meetings = $this->listarEsterilizaciones($results);
        
        return $this->render('PCFundationBundle:Admin:jornada_esteriliza.html.twig', array('meetings' => $meetings));
    }
    
    private function listarEsterilizaciones($meetings)
    {
        $dataList = array();
        
        foreach ($meetings as $meeting) 
        {
            $meetingInfo = array();
            $sterilizations = $this->getDoctrine()->getRepository('PCFundationBundle:Sterilization')->findByMeeting($meeting);
            $totalAmount = 0;
            $control_at = "";
            foreach ($sterilizations as $sterilization) 
            {
               $totalAmount += $sterilization->getAmount();
               $control_at = $sterilization->getControlAt();
            }
            $meetingInfo['meeting'] = $meeting;
            $meetingInfo['totalAmount'] = $totalAmount;
            $meetingInfo['control_at'] = $control_at;
            array_push($dataList, $meetingInfo);
        }
        return $dataList;
    }
    
    public function esterilizacionAction($meetingId, $controlAt, $amount)
    {
        $meeting = $this->getDoctrine()->getRepository("PCFundationBundle:Meeting")->find($meetingId);
        $sterilizations = $this->getDoctrine()->getRepository("PCFundationBundle:Sterilization")->findByMeeting($meeting);
        
        return $this->render('PCFundationBundle:Admin:esterilizacio.html.twig', array('meeting' => $meeting, 'controlAt' => $controlAt, 'amount' => $amount, 'sterilizations' => $sterilizations ));
    }
    
    
    public function esterilizacionUpdateAction($petId, $meetingId, $controlAt, $amount)
    {
        $em = $this->getDoctrine()->getManager();
        $pet = $this->getDoctrine()->getRepository('PCFundationBundle:Pet')->find($petId);
        $isEsterilized = $pet->getIsSterilized();
        if ($isEsterilized == 0 ) 
        {
            $pet->setIsSterilized(1);
            $em->flush();
            return $this->redirectToRoute('pc_admin_esterilizacion', array('meetingId' => $meetingId, 'controlAt' => $controlAt, 'amount' => $amount));
        }
        else
        {
            $pet->setIsSterilized(0);
            $em->flush();
            return $this->redirectToRoute('pc_admin_esterilizacion', array('meetingId' => $meetingId, 'controlAt' => $controlAt, 'amount' => $amount));
        }
    }
    
    /**
     ********************************************************************************************************* 
     *********************************************************************************************************
     ********************************************************************************************************* 
     ********************************************************************************************************* 
     *********************************************************************************************************
     ********************************************************************************************************* 
     ********************************************************************************************************* 
     *********************************************************************************************************
     ********************************************************************************************************* 
     */
    
    
    

      public function controlAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT DISTINCT m FROM PCFundationBundle:Sterilization s JOIN PCFundationBundle:Meeting m WHERE s.meeting = m.id');
        $results = $query->getResult();
        
        $meetings = $this->listarEsterilizaciones($results);
        $sterilizations = $this->getDoctrine()->getRepository('PCFundationBundle:Sterilization')->findAll();
        $controls = $this->getDoctrine()->getRepository('PCFundationBundle:Control')->findAll();
        
        return $this->render('PCFundationBundle:Admin:cotrol.html.twig', array('meetings' => $meetings, 'sterilizations'=> $sterilizations, 'controls' => $controls));
    }
    
    
    public function controladdAction($sterilizationId)
    {   
        $control = new Control();
        $form = $this->createControlForm($control, $sterilizationId);
        
        return $this->render('PCFundationBundle:Admin:control_add.html.twig', array('form'=>$form->createview()));
    }
    
    
    private function createControlForm(Control $entity, $sterilizationId)
    {
        $form = $this->createForm(ControlType::class, $entity, array( 'action' => $this->generateUrl('pc_admininstrator_control_create', array('sterilizationId' => $sterilizationId)), 'method'=>'POST'));
        return $form;
    }
    
    
    public function createControlAction(Request $request, $sterilizationId)
    {
        $control = new Control();
        $form = $this->createControlform($control, $sterilizationId);
        $form->handlerequest($request);
        
        if($form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $sterilization = $this->getDoctrine()->getRepository('PCFundationBundle:Sterilization')->find($sterilizationId);
            $control->setSterilization($sterilization);
            $em->persist($control);
            $em->flush();
            
            return $this->redirectToRoute('pc_administrator_control');
        }
        return $this->render('PCFundationBundle:Admin:control_add.html.twig', array('form'=>$form->createView()));
        
    }
    /**
     ********************************************************************************************************* 
     *********************************************************************************************************
     ********************************************************************************************************* 
     ********************************************************************************************************* 
     *********************************************************************************************************
     ********************************************************************************************************* 
     ********************************************************************************************************* 
     *********************************************************************************************************
     ********************************************************************************************************* 
     */
    
    public function donativosAction()
    {
        $donatives = $this->getDoctrine()->getRepository('PCFundationBundle:Donative')->findAll();
        return $this->render('PCFundationBundle:Admin:donativ_info.html.twig', array('donatives' => $donatives));
    }
     
    public function donativoaddAction()
    {
        $donative = new Donative();
        $form = $this->createDonativeForm($donative);
        return $this->render('PCFundationBundle:Admin:donativ_add.html.twig', array('form' => $form->createview()));
    }
    
    private function createDonativeForm(Donative $entity)
    {
        $form = $this->createForm(DonativeType::class, $entity, array( 'action' => $this->generateUrl('pc_admin_donativ_create'), 'method'=>'POST'));
        return $form;
    }
    
    public function createDonativeAction(Request $request)
    {
        $session = $request->getSession();
        $donative = new Donative();
        $form = $this->createDonativeForm($donative);
        $form->handlerequest($request);
        if($form->isValid())
        {
            if($form->get('donor')->getData()== null || $form->get('donor')->getData()== "")
            {
                $em = $this->getDoctrine()->getManager();
                $admin = $this->getDoctrine()->getRepository('PCFundationBundle:Administrator')->find($session->get("id"));
                $donative->setAdministrator($admin);
                $donative->setDonor("anónimo");
                $em->persist($donative);
                $em->flush();
                
                return $this->redirectToRoute('pc_admin_donativ');
                
            }else
            {
                $em = $this->getDoctrine()->getManager();
                $admin = $this->getDoctrine()->getRepository('PCFundationBundle:Administrator')->find($session->get("id"));
                $donative->setAdministrator($admin);
                $em->persist($donative);
                $em->flush();
                
                return $this->redirectToRoute('pc_admin_donativ');
            }
            
        }
        return $this->render('PCFundationBundle:Admin:donativ_add.html.twig', array('form' => $form->createview()));
    }
    
    
    public function recepcionAction()
    {
        $donativeMeetings = $this->getDoctrine()->getRepository("PCFundationBundle:Event")->findByName('recepción de donativos'); 
        return $this->render('PCFundationBundle:Admin:recepcion.html.twig', array('donativeMeetings' => $donativeMeetings));
    }
    
    
    public function recepcionaddAction()
    {
        $event = new Event();
        $form = $this->eventForm($event);
        return $this->render('PCFundationBundle:Admin:recepcion_add.html.twig', array('form'=>$form->createView()));
    }
    
    
    /**
     ********************************************************************************************************* 
     *********************************************************************************************************
     ********************************************************************************************************* 
     ********************************************************************************************************* 
     *********************************************************************************************************
     ********************************************************************************************************* 
     ********************************************************************************************************* 
     *********************************************************************************************************
     ********************************************************************************************************* 
     */
    
    public function creditoaddAction()
    {
        $fondos = $this->revisarFondos();
        echo '<script language="javascript">alert("actualmente la fundación cuenta con $'.$fondos.' disponibles, tengalo presente a la hora de realizar creditos o cualquier otra gestión que requiera el uso de estos.");</script>'; 
        $defaultData = array('message' => 'Type your message here');
        $form = $this->crearFormularioCredito($defaultData);
        return $this->render('PCFundationBundle:Admin:credito_add.html.twig', array('form'=>$form->createview()));
    }
    
    /**
     * permite crear el formulario para registrar el credito de emergencia 
     */
    public function crearFormularioCredito($defaultData)
    {
        //faltan los campos para el estado del credito y el de la mascota
        $form = $this->createFormBuilder($defaultData)
            ->setAction($this->generateUrl('pc_administrator_credito_create'))
            ->setMethod('POST')
            ->add('amount', IntegerType::class)
            ->add('responsible', TextType::class)
            ->add('reference', TextType::class)
            ->add('destiny', TextType::class)
            ->add('petName', TextType::class)
            ->add('petAge', IntegerType::class)
            ->add('species', ChoiceType::class, array('choices' => array('canino'=>'CANINE', 'felino'=>'FELINE'), 'placeholder' => 'especie de la mascota'))
            ->add('race', TextType::class)
            ->add('colour', TextType::class)
            ->add('gender', ChoiceType::class, array('choices' => array('macho'=>'MALE', 'hembra'=>'FEMALE'), 'placeholder' => 'genero de la mascota'))
            ->add('isVacunated', CheckboxType::class, array('required' => false))
            ->add('isSterilized', CheckboxType::class, array('required' => false))
            ->add('userName', TextType::class)
            ->add('lastName', TextType::class)
            ->add('userAge', IntegerType::class)
            ->add('identificationNumber', textType::class)
            ->add('address', textType::class)
            ->add('phone_number', textType::class)
            ->add('email', textType::class)
            ->add('save', SubmitType::class, array('label' => 'save credit'))
            ->getForm();
        
        return $form;
    }
    
    
    /**
     * permite registrar el censo realizado en determinada jornada.
     * recibe mediante un formulario "genérico" los datos de la mascota, el usuario y los demás campos requeridos para registrar el credito. 
     */ 
    public function registrarCreditoAction(Request $request)
    {
        $defaultData = array('message' => 'Type your message here');
        $form = $this->crearFormularioCredito($defaultData);
        $form->handlerequest($request);
        if($form->isvalid())
        {   
            
            $fondos = $this->revisarFondos(); 
            if ($fondos >= $form->get('amount')->getdata()) 
            {
                echo '<script language="javascript">alert("no se cuentan con fondos suficientes para realizar el crédito.");</script>'; 
                return $this->render('PCFundationBundle:Admin:credito_add.html.twig', array('form'=>$form->createview()));
            }
            
            $em = $this->getDoctrine()->getManager();
            
            
            //set de las variables que componen el crédito
            $user = new User();
            $pet = new Pet();
            $credit = new Credit();

            
            //creación del usuario
            $user->setName($form->get("userName")->getData());
            $user->setLastName($form->get("lastName")->getData());
            $user->setAge($form->get("userAge")->getData());
            $user->setIdentificationNumber($form->get("identificationNumber")->getData());
            $user->setAddress($form->get("address")->getData());
            $user->setPhone_number($form->get("phone_number")->getData());
            $user->setEmail($form->get("email")->getData());
            
            $em->persist($user);
            $em->flush();
            
            //creación de la mascota
            $pet->setName($form->get("petName")->getData());
            $pet->setAge($form->get("petAge")->getData());
            $pet->setSpecies($form->get("species")->getData());
            $pet->setrace($form->get("race")->getData());
            $pet->setColour($form->get("colour")->getData());
            $pet->setGender($form->get("gender")->getData());
            $pet->setIsVacunated($form->get("isVacunated")->getData());
            $pet->setIsSterilized($form->get("isSterilized")->getData());
            $pet->setStatus("EXTERNAL");
            
            $em->persist($pet);
            $em->flush();
            
            //creación del credito
            $credit->setAmount($form->get("amount")->getData());
            $credit->setResponsible($form->get("responsible")->getData());
            $credit->setReference($form->get("reference")->getData());
            $credit->setDestiny($form->get("destiny")->getData());
            $credit->setStatus('APPROVED');
            $credit->setPet($pet);
            $credit->setUser($user);
            
            $em->persist($credit);
            $em->flush();
            
            return $this->redirectToRoute('pc_administrator_creditos');
            
        }
        
        return $this->render('PCFundationBundle:Admin:credito_add.html.twig', array('form'=>$form->createview()));
    }
    
    /**
     * devuelve los fondos con los que cuneta la fundación. es usado a al hora de validar un credito de emergencia.
     */ 
    private function revisarFondos()
    {
        $em = $this->getDoctrine()->getManager();
        
        $first_query = $em->createQuery("SELECT SUM(d.quantity) AS s FROM PCFundationBundle:Donative d WHERE d.type = 'MONETARY'");
        $fondosRecibidos = $first_query->getResult();

        $second_query = $em->createQuery("SELECT SUM(c.amount) AS s FROM PCFundationBundle:Credit c WHERE c.status = 'APPROVED'");
        $fondosGastados = $second_query->getResult();
        
        $fr = 0;
        $fg = 0;
        
        foreach ($fondosRecibidos as $fondRec) 
        {
            $fr= $fr+intval($fondRec['s']);
        }
        
        foreach ($fondosGastados as $fondGast)
        {
            $fg = $fg+intval($fondGast['s']);
        }
        
        $totalDisponible = $fr - $fg;
        
        return $totalDisponible;
    }
    
    
    public function creditoinfoAction()
    {
        $credits = $this->getDoctrine()->getRepository('PCFundationBundle:Credit')->findByStatus('APPROVED');
        return $this->render ('PCFundationBundle:Admin:creditos.html.twig', array('credits' => $credits));
    }
    
    public function creditofinAction()
    {
        $credits = $this->getDoctrine()->getRepository('PCFundationBundle:Credit')->findByStatus('DISAPPROVED');
        return $this->render ('PCFundationBundle:Admin:credito_fin.html.twig', array('credits' => $credits));
    }
    
    public function cancelarCreditoAction($creditId)
    {
        $em = $this->getDoctrine()->getManager();
        $credit = $this->getDoctrine()->getRepository('PCFundationBundle:Credit')->find($creditId);
        
        $credit->setStatus('DISAPPROVED');
        $em->flush();
        
        return $this->redirectToRoute('pc_administrator_creditos');
        
    }
    
    /**
     ********************************************************************************************************* 
     *********************************************************************************************************
     ********************************************************************************************************* 
     ********************************************************************************************************* 
     *********************************************************************************************************
     ********************************************************************************************************* 
     ********************************************************************************************************* 
     *********************************************************************************************************
     ********************************************************************************************************* 
     */
    
    
    
       public function adopcioninfoAction()
    {
        return $this->render('PCFundationBundle:Admin:masc_adopcion_info.html.twig');
    }
       public function adopcioneditAction()
    {
        return $this->render('PCFundationBundle:Admin:masc_adopcion_edit.html.twig');
    }
    
    
    
}
