<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdvertRepository")
 */
class Advert
{
     /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Category", cascade={"persist"})
     */
     private $categories;


     /**
     * @ORM\OneToOne(targetEntity="App\Entity\Image", cascade={"persist"})
     * @Assert\Valid()
     */
    private $image;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=10)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=2)
     */
    private $author;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     */
    private $content;

    public function __construct()
    {
      $this->date       = new \Datetime();
      $this->categories = new ArrayCollection();
    }

    public function addCategory(Category $category)
    {
      $this->categories[] = $category;
    }

    public function removeCategory(Category $category)
    {
      $this->categories->removeElement($category);
    }

    public function getCategories()
    {
      return $this->categories;
    }

    public function setImage(Image $image = null)
    {
      $this->image = $image;
    }
  
    public function getImage()
    {
      return $this->image;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
