<?php

namespace Site\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recipe
 */
class Recipe
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $content;
    
    /**
     * @var boolean
     */
    private $is_active;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="recipes")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;
    
    private $features;
    
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
     * @return Recipe
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
     * Set slug
     *
     * @param string $slug
     * @return Recipe
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

    /**
     * Set image
     *
     * @param string $image
     * @return Recipe
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Recipe
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set is_active
     *
     * @param boolean $isActive
     * @return Recipe
     */
    public function setIsActive($isActive)
    {
        $this->is_active = $isActive;

        return $this;
    }

    /**
     * Get is_active
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->is_active;
    }
    
    function __toString()
    {
        return $this->title?$this->title:'New';
    }
    

    /**
     * Set category
     *
     * @param \entity $category
     * @return Recipe
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \entity 
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @var \Site\FrontendBundle\Entity\Category
     */
    private $product;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->features = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add features
     *
     * @param \Site\FrontendBundle\Entity\Feature $features
     * @return Recipe
     */
    public function addFeature(\Site\FrontendBundle\Entity\Feature $features)
    {
        $this->features[] = $features;

        return $this;
    }

    /**
     * Remove features
     *
     * @param \Site\FrontendBundle\Entity\Feature $features
     */
    public function removeFeature(\Site\FrontendBundle\Entity\Feature $features)
    {
        $this->features->removeElement($features);
    }

    /**
     * Get features
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Set product
     *
     * @param \Site\FrontendBundle\Entity\Category $product
     * @return Recipe
     */
    public function setProduct(\Site\FrontendBundle\Entity\Category $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Site\FrontendBundle\Entity\Category 
     */
    public function getProduct()
    {
        return $this->product;
    }
    
}
