<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImageRepository")
 */
class Image
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $kamerid;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imagefile;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKamerid(): ?string
    {
        return $this->kamerid;
    }

    public function setKamerid(?string $kamerid): self
    {
        $this->kamerid = $kamerid;

        return $this;
    }

    public function getImagefile(): ?string
    {
        return $this->imagefile;
    }

    public function setImagefile(?string $imagefile): self
    {
        $this->imagefile = $imagefile;

        return $this;
    }
}
