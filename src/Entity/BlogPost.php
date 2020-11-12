<?php

namespace App\Entity;

use App\Repository\BlogPostRepository;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=BlogPostRepository::class)
 */
class BlogPost
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank()
     */
    public $author;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    public $blogTitle;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    public $blogContent;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getBlogTitle(): ?string
    {
        return $this->blogTitle;
    }

    public function setBlogTitle(string $blogTitle): self
    {
        $this->blogTitle = $blogTitle;

        return $this;
    }

    public function getBlogContent(): ?string
    {
        return $this->blogContent;
    }

    public function setBlogContent(string $blogContent): self
    {
        $this->blogContent = $blogContent;

        return $this;
    }
}
