<?php

namespace Site\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Feature
 */
class Feature
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;
    
    public function __construct() {
        $this->recipe = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Feature
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * @var \Site\FrontendBundle\Entity\Recipe
     */
    private $recipe;


    /**
     * Set recipe
     *
     * @param \Site\FrontendBundle\Entity\Recipe $recipe
     * @return Feature
     */
    public function setRecipe(\Site\FrontendBundle\Entity\Recipe $recipe = null)
    {
        $this->recipe = $recipe;

        return $this;
    }

    /**
     * Get recipe
     *
     * @return \Site\FrontendBundle\Entity\Recipe 
     */
    public function getRecipe()
    {
        return $this->recipe;
    }

    /**
     * Add recipe
     *
     * @param \Site\FrontendBundle\Entity\recipe $recipe
     * @return Feature
     */
    public function addRecipe(\Site\FrontendBundle\Entity\recipe $recipe)
    {
        $this->recipe[] = $recipe;

        return $this;
    }

    /**
     * Remove recipe
     *
     * @param \Site\FrontendBundle\Entity\recipe $recipe
     */
    public function removeRecipe(\Site\FrontendBundle\Entity\recipe $recipe)
    {
        $this->recipe->removeElement($recipe);
    }
    
    function __toString()
    {
        return $this->title?$this->title:'New';
    }
    /**
     * @var string
     */
    private $slug;


    /**
     * Set slug
     *
     * @param string $slug
     * @return Feature
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
}
