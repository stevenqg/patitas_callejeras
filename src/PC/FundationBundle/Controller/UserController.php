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

    public function encuestaAction()
    {
        return $this->render('PCFundationBundle:fundation:encuestaUsuario.html.twig');
    }
    
    public function addAction($petId)
    {
        $adoption = $this->getDoctrine()->getRepository('PCFundationBundle:Adoption')->findBy(array('pet'=> $petId));
        
        if ($adoption)
        {
            echo '<script language="javascript"> alert("la mascota ya ha sido solicitada en adopción. ") </script>';
            return $this->redirectToRoute('pc_fundation_adoptar');
        }
        else
        {
            $pet = $this->getDoctrine()->getRepository('PCFundationBundle:Pet')->find($petId);
            
            $user = new User();
            $form = $this->createCreateform($user, $petId);
            return $this->render('PCFundationBundle:fundation:encuestaUsuario.html.twig', array('form' => $form->createview())); 
        }
        
        
    }
    
    private function createCreateForm(User $entity, $petId)
    {
        
        $form= $this->createForm(UserType::class, $entity, array( 'action' => $this->generateUrl('pc_user_create', array('petId' => $petId) ), 'method'=>'POST'));
        return $form;
    }
    
    public function createAction($petId, request $request)
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
