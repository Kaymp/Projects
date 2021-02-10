<?php

namespace App\Entity;

use App\Repository\BlogRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BlogRepository::class)
 */
class Blog
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetimetz")
     */
    private $datetimez;

    /**
     * @ORM\Column(type="text")
     */
    private $tekst;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Published;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatetimez(): ?\DateTimeInterface
    {
        return $this->datetimez;
    }

    public function setDatetimez(\DateTimeInterface $datetimez): self
    {
        $this->datetimez = $datetimez;

        return $this;
    }

    public function getTekst(): ?string
    {
        return $this->tekst;
    }

    public function setTekst(string $tekst): self
    {
        $this->tekst = $tekst;

        return $this;
    }

    public function getPublished(): ?bool
    {
        return $this->Published;
    }

    public function setPublished(bool $Published): self
    {
        $this->Published = $Published;

        return $this;
    }
}
