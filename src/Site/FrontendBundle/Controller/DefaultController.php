<?php

namespace Site\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SiteFrontendBundle:Default:index.html.twig', array('name' => $name));
    }
}