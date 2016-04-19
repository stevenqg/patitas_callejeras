<?php

namespace PC\FundationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;

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
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $admins = $em->getRepository('PCFundationBundle:Administrator')->findAll();
        return $this->render('PCFundationBundle:Admin:admin.html.twig', array('admins'=>$admins));
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
       return $this->render('PCFundationBundle:Admin:admin.html.twig');
    }
    
    
    
    /*
    muestra el formulario para ingreso de una mascota
    */
    public function addpetAction()
    {
        $pet = new Pet();
        $form = $this->createPetform($pet);
        return $this->render('PCFundationBundle:fundation:registroMascota.html.twig', array('form'=>$form->createview())); 
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
            $em = $this->getDoctrine()->getManager();
            $em->persist($pet);
            $em->flush();
            
            return $this->redirectToRoute('pc_administrator_index');
        }
        
        return $this->render('PCFundationBundle:fundation:registromascota.html.twig', array('form'=>$form->createview())); 
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
        $meeting = new Meeting();
        $form = $this->createMeetingForm($meeting);
        $form->handlerequest($request);
        if($form->isvalid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($meeting);
            $em->flush();
            
            return $this->redirectToRoute('pc_admin_jornada_censo');
        }
        return $this->render('PCFundationBundle:fundation:nuevocenso.html.twig', array('form'=>$form->createview())); 
    }
    
    /*
    permite ver y gestionar las jornadas de censo en el area de trabajo - bloque capa
    */
    public function jornadacensoAction()
    {
        return $this->render('PCFundationBundle:Admin:jornadascenso.html.twig');
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
    
}
