<?php

namespace PC\FundationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;

class AdminController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $admins = $em->getRepository('PCFundationBundle:Administrator')->findAll();
        return $this->render('PCFundationBundle:fundation:indexAdmin.html.twig', array('admins'=>$admins));
    }
    
}
