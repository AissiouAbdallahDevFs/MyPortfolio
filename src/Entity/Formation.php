<?php

namespace App\Entity;

use App\Repository\FormationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormationRepository::class)
 */
class Formation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DIplome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ECole;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDIplome(): ?string
    {
        return $this->DIplome;
    }

    public function setDIplome(string $DIplome): self
    {
        $this->DIplome = $DIplome;

        return $this;
    }

    public function getECole(): ?string
    {
        return $this->ECole;
    }

    public function setECole(string $ECole): self
    {
        $this->ECole = $ECole;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
