<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Category;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ChocolateRepository")
 */
class Chocolate
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
    private $productName;

    /**
     * @ORM\Column(type="string")
     */
    private $ingrediants;

    /**
     * @ORM\Column(type="string")
     */
    private $description;

    /**
     * @ORM\Column(type="string")
     */
    private $photo;
    /**
     * @ORM\Column(type="integer")
     */
    private $price;
    /**
     * @ORM\Column(type="string")
     */
    private $reviewby;
    /**
     * @ORM\Column(type="datetime")
     */
    private $date;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Review",mappedBy="chocolate")
     *
     */
    private $productreview;
    /**
     * @ORM\JoinColumn(nullable=true)
     */
    private $category;

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory( Category $category )
    {
        $this->category = $category;
    }

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
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     */
    public function setProductName($productName): void
    {
        $this->productName = $productName;
    }

    /**
     * @return mixed
     */
    public function getIngrediants()
    {
        return $this->ingrediants;
    }

    /**
     * @param mixed $ingrediants
     */
    public function setIngrediants($ingrediants): void
    {
        $this->ingrediants = $ingrediants;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $image
     */
    public function setPhoto($photo): void
    {
        $this->image = $photo;
    }




    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getReviewby()
    {
        return $this->reviewby;
    }

    /**
     * @param mixed $reviewby
     */
    public function setReviewby($reviewby): void
    {
        $this->reviewby = $reviewby;
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
    public function getProductreview()
    {
        return $this->productreview;
    }

    /**
     * @param mixed $productreview
     */
    public function setProductreview($productreview): void
    {
        $this->productreview = $productreview;
    }

}
