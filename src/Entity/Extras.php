<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExtrasRepository")
 */
class Extras
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
    private $kamerid;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $omschrijving;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $meerprijs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKamerid(): ?int
    {
        return $this->kamerid;
    }

    public function setKamerid(int $kamerid): self
    {
        $this->kamerid = $kamerid;

        return $this;
    }

    public function getOmschrijving(): ?string
    {
        return $this->omschrijving;
    }

    public function setOmschrijving(?string $omschrijving): self
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    public function getMeerprijs(): ?string
    {
        return $this->meerprijs;
    }

    public function setMeerprijs(?string $meerprijs): self
    {
        $this->meerprijs = $meerprijs;

        return $this;
    }
}
