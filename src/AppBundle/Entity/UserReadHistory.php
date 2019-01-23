<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Class UserReadHistory
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="user_read_history")
 */
class UserReadHistory
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
    private $user_id;

    /**
     * @ORM\Column(type="integer")
     */     
    private $comic_id;

    /**
     * @ORM\Column(type="datetime")
     */    
    private $created_at;




}
