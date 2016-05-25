<?php

namespace PC\FundationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    /**
     * Muestra la interfaz inicial de la página.
     */ 
    public function indexAction()
    {
        return $this->render('PCFundationBundle:fundation:index.html.twig');
    }
    
    /**
     * Muestra la ventana con el mapa y la ubicación de los comedogs.
     */ 
    public function comedogsAction()
    {
        return $this->render('PCFundationBundle:fundation:comedogs.html.twig');
    }
    
    /**
     * Muestra la ventana con el mapa y la ubicacion de los puntos de recolección de tapitas.
     */ 
    public function tapitasAction()
    {
        return $this->render('PCFundationBundle:fundation:tapitas.html.twig');
    }
    
    /**
     * Muestra el catálogo de mascotas que estan listas para entregarse en adopción. 
     */ 
    public function adoptarAction(Request $request)
    {
        $pets = $this->getDoctrine()->getRepository('PCFundationBundle:Pet')->findAll();
        
        return $this->render('PCFundationBundle:fundation:adopcion.html.twig', array('pets' => $pets));
        
    }
    
    /**
     * Muestra la ventana con la información de la fundación.
     */ 
    public function nosotrosAction()
    {
        return $this->render('PCFundationBundle:fundation:nosotros.html.twig');
    }
    
    /**
     * Muestra la ventana con una lista de los eventos a realizarse.
     */ 
    public function eventosAction()
    {   
        $events = $this->getDoctrine()->getRepository('PCFundationBundle:Event')->findAll();
        return $this->render('PCFundationBundle:fundation:eventos.html.twig', array('events' => $events));
    }
    
    /**
     * Muestra la ventana donde se realiza la encuesta para la solicitud de adopción.
     */ 
    public function encuestaAction()
    {
        return $this->render('PCFundationBundle:fundation:encuesta.html.twig');
    }
    
}
