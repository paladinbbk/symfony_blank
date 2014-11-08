<?php

namespace Site\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MainController extends Controller
{
    /**
     * @Route("/", name="index_page")
     */
    public function homepageAction()
    {   $recipes = $this->getDoctrine()->getManager()->getRepository('Site\FrontendBundle\Entity\Recipe')->findAll(array('is_active' => true));
        return $this->render('SiteFrontendBundle:Main:index.html.twig', array('recipes' => $recipes));
    }

    /**
     * @Route("/{slug}.html", name="static_page")
     */
    public function staticPageAction($slug) {
        $page = $this->getDoctrine()->getManager()->getRepository('Site\FrontendBundle\Entity\StaticPage')->findOneBy(array('slug' => $slug));
        
        if (is_null($page) || empty($page)) {
            throw $this->createNotFoundException('Запрашиваемая страница перемещена или удалена!');
        } else {
            return $this->render('SiteFrontendBundle:Main:static.html.twig', array('page' => $page)); 
        }
    }
    
}
