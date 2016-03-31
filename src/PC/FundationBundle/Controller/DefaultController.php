<?php

namespace PC\FundationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PCFundationBundle:Default:index.html.twig');
    }
}
