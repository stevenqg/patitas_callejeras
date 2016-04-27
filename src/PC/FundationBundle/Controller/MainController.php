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
        /**$pets = $this->getDoctrine()->getRepository('PCFundationBundle:Pet')->findAll();
        
        
        */
        
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT * FROM PCFundationBundle:Pet JOIN pa FROM PCFundationBundle:Pet pa JOIN PCFundationBundle:Adoption a WHERE pa.id=a.pet AND a.status != :status')->setParameter('status', 'APPROVED');
        $pets = $query->getResult();
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
