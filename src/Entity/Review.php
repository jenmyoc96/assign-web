<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Review
 * @ORM\Entity(repositoryClass="App\Repository\ReviewRepository")
 */
class Review
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $user;
    /**
     * @ORM\Column(type="string")
     */
    private $chocolateid;
    /**
     * @ORM\Column(type="string")
     */
    private $review;
    /**
     * @ORM\Column(type="string")
     */
    private $placeofpurchase;
    /**
     * @ORM\Column(type="integer")
     */
    private $pricepaid;
    /**
     * @ORM\Column(type="string")
     */
    private $numofstar;
    /**
     * @ORM\Column(type="datetime")
     */
    private $date;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Chocolate",inversedBy="productreview")
     */
    private $chocolate;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getChocolateid()
    {
        return $this->chocolateid;
    }

    /**
     * @param mixed $chocolateid
     */
    public function setChocolateid($chocolateid): void
    {
        $this->chocolateid = $chocolateid;
    }

    /**
     * @return mixed
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param mixed $review
     */
    public function setReview($review): void
    {
        $this->review = $review;
    }

    /**
     * @return mixed
     */
    public function getPlaceofpurchase()
    {
        return $this->placeofpurchase;
    }

    /**
     * @param mixed $placeofpurchase
     */
    public function setPlaceofpurchase($placeofpurchase): void
    {
        $this->placeofpurchase = $placeofpurchase;
    }

    /**
     * @return mixed
     */
    public function getPricepaid()
    {
        return $this->pricepaid;
    }

    /**
     * @param mixed $pricepaid
     */
    public function setPricepaid($pricepaid): void
    {
        $this->pricepaid = $pricepaid;
    }

    /**
     * @return mixed
     */
    public function getNumofstar()
    {
        return $this->numofstar;
    }

    /**
     * @param mixed $numofstar
     */
    public function setNumofstar($numofstar): void
    {
        $this->numofstar = $numofstar;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getChocolate()
    {
        return $this->chocolate;
    }

    /**
     * @param mixed $chocolate
     */
    public function setChocolate($chocolate): void
    {
        $this->chocolate = $chocolate;
    }



}