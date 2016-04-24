<?php

namespace PC\FundationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('PCFundationBundle:fundation:index.html.twig');
    }
    
    public function comedogsAction()
    {
        return $this->render('PCFundationBundle:fundation:comedogs.html.twig');
    }
    
    public function tapitasAction()
    {
        return $this->render('PCFundationBundle:fundation:tapitas.html.twig');
    }
    
    public function adoptarAction(Request $request)
    {
        $pets = $this->getDoctrine()->getRepository('PCFundationBundle:Pet')->findAll();
        return $this->render('PCFundationBundle:fundation:adopcion.html.twig', array('pets' => $pets));
    }
    
    public function nosotrosAction()
    {
        return $this->render('PCFundationBundle:fundation:nosotros.html.twig');
    }
    
    public function encuestaAction()
    {
        return $this->render('PCFundationBundle:fundation:encuesta.html.twig');
    }
    
}
