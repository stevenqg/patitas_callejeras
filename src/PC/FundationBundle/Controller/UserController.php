<?php

namespace PC\FundationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PC\FundationBundle\Entity\User;

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
    
    public function addAction()
    {
        $user = new User();
        $form = $this->createCreateform($user);
        return $this->render('PCFundationBundle:fundation:encuestaUsuario.html.twig', array('form'=>$form->createview())); 
    }
    
    private function createCreateForm(User $entity)
    {
        $form= $this->createForm(UserType::class, $entity, array( 'action' => $this->generateUrl('pc_user_create'), 'method'=>'POST'));
        return $form;
    }
    
    public function createAction(request $request)
    {
        $user = new User();
        $form = $this->createCreateForm($user);
        $form->handlerequest($request);
        
        if($form->isvalid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            return $this->redirectToRoute('pc_fundation_encuesta');
        }
        
        return $this->render('PCFundationBundle:fundation:encuestaUsuario.html.twig', array('form'=>$form->createview())); 
    }
}
