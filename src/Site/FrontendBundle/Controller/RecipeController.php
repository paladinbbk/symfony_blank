<?php

namespace Site\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RecipeController extends Controller
{


    /**
     * @Route("recipe/{slug}", name="recipe_page")
     */
    public function recipeAction($slug) {
        $recipe = $this->getDoctrine()->getManager()->getRepository('Site\FrontendBundle\Entity\Recipe')->findOneBy(array('slug' => $slug));
        
        if (is_null($recipe) || empty($recipe)) {
            throw $this->createNotFoundException('Запрашиваемая страница перемещена или удалена!');
        } else {
            return $this->render('SiteFrontendBundle:Recipe:recipe.html.twig', array('recipe' => $recipe)); 
        }
    }
    
    /**
     * @Route("feature/{slug}", name="recipe_page")
     */
    public function featureAction($slug) {
        
        
        $feature = $this->getDoctrine()->getManager()->getRepository('Site\FrontendBundle\Entity\Feature')->findOneBy(array('slug' => $slug));
        
 //       var_dump($feature);
        
      //  $recipe = $this->getDoctrine()->getManager()->getRepository('Site\FrontendBundle\Entity\Recipe')->findOneBy(array('slug' => 'borsch'));
        
        $recipe = $this->getDoctrine()->getManager()->getRepository('Site\FrontendBundle\Entity\Recipe')->findByFeature($feature);      
        
        if (is_null($recipe) || empty($recipe)) {
            throw $this->createNotFoundException('Запрашиваемая страница перемещена или удалена!');
        } else {
            return $this->render('SiteFrontendBundle:Recipe:recipe2.html.twig', array('recipes' => $recipe)); 
        }
    }
    
}
