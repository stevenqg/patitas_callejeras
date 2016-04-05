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
}
