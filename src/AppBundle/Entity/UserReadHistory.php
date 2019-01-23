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


    /**
     * Set user_id
     *
     * @param integer $userId
     *
     * @return UserReadHistory
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }



    /**
     * Set comic_id
     *
     * @param integer $comicId
     *
     * @return UserReadHistory
     */
    public function setComicId($comicId)
    {
        $this->comic_id = $comicId;

        return $this;
    }



    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     *
     * @return UserAddOnEmail
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = new \DateTime($createdAt);

        return $this;
    }



}
