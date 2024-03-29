<?php

namespace Site\FrontendBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * RecipeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RecipeRepository extends EntityRepository
{

    public function findByFeature($feature)
    { 
        return $this->createQueryBuilder('r')
     
                   ->andWhere(':feature MEMBER OF r.features')
                
        //        ->where('r.features IN (:feature)')
                
            ->setParameter('feature', $feature)
            ->getQuery()->getResult();
    }
      
    
}
