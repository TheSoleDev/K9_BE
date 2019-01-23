<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Class Character
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="characters")
 */
class Character
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */    
    private $id;

    /**
     * @ORM\Column(type="integer")
     */     
    private $char_id;

    /**
     * @ORM\Column(type="string")
     */     
    private $char_name;

    /**
     * @ORM\Column(type="text")
     */         
    private $char_description;

    /**
     * @ORM\Column(type="string")
     */         
    private $char_thumbnail;


}
