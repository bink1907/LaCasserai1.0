<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KamerRepository")
 */
class Kamer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $soortId;

    /**
     * @ORM\Column(type="integer")
     */
    private $prijs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSoortId(): ?int
    {
        return $this->soortId;
    }

    public function setSoortId(int $soortId): self
    {
        $this->soortId = $soortId;

        return $this;
    }

    public function getPrijs(): ?int
    {
        return $this->prijs;
    }

    public function setPrijs(int $prijs): self
    {
        $this->prijs = $prijs;

        return $this;
    }
}
