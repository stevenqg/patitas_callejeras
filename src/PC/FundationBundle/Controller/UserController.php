<?php

namespace PC\FundationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PC\FundationBundle\Entity\User;
use PC\FundationBundle\Entity\Adoption;
use PC\FundationBundle\Entity\Pet;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use PC\FundationBundle\Form\UserType;

class UserController extends Controller
{

    /**
     * Muestra el formulario para la encuesta del solicitante de adopción.
     */ 
    public function encuestaAction()
    {
        return $this->render('PCFundationBundle:fundation:encuestaUsuario.html.twig');
    }
    
    /**
     * Muestra el formulario de adopción. 
     */ 
    public function addAction($petId)
    {
        $pet = $this->getDoctrine()->getRepository('PCFundationBundle:Pet')->find($petId);
        
        $user = new User();
        $form = $this->createCreateform($user, $petId);
        return $this->render('PCFundationBundle:fundation:encuestaUsuario.html.twig', array('form' => $form->createview())); 
    }
    
    /**
     * Crea el formulario para diligenciar la solicitud de adopción.
     */ 
    private function createCreateForm(User $entity, $petId)
    {
        
        $form= $this->createForm(UserType::class, $entity, array( 'action' => $this->generateUrl('pc_user_create', array('petId' => $petId) ), 'method'=>'POST'));
        return $form;
    }
    
    /**
     * Registra la solicitud de adopción y cambia el estado de la mascota a pendiente.
     */ 
    public function createAction($petId, Request $request)
    {
        $pet = $this->getDoctrine()->getRepository('PCFundationBundle:Pet')->find($petId);
       
        $user = new User();
        $form = $this->createCreateForm($user, $pet->getId());
        
        $form->handlerequest($request);
        
        if($form->isvalid())
        {   
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            $pet->setStatus('PENDING');
            $em->persist($pet);
            $em->flush();
            
            $adoption = new Adoption();
            $adoption->setUser($user);
            $adoption->setPet($pet);
            $adoption->setStatus('PENDING');
            
            $em->persist($adoption);
            $em->flush();
            
            
            return $this->redirectToRoute('pc_fundation_encuesta');
        }
        
        return $this->render('PCFundationBundle:fundation:encuestaUsuario.html.twig', array('form'=>$form->createview())); 
    }
}
