<?php

namespace PC\FundationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
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
    
    public function adoptarAction()
    {
        return $this->render('PCFundationBundle:fundation:adopcion.html.twig');
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
