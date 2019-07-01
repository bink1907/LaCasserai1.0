<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BetaalRepository")
 */
class Betaal
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Reservering", mappedBy="betaal")
     */
    private $betaalId;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $soort;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $rekeningnr;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $betaaldate;

    public function __construct()
    {
        $this->betaalId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Reservering[]
     */
    public function getBetaalId(): Collection
    {
        return $this->betaalId;
    }

    public function addBetaalId(Reservering $betaalId): self
    {
        if (!$this->betaalId->contains($betaalId)) {
            $this->betaalId[] = $betaalId;
            $betaalId->setBetaal($this);
        }

        return $this;
    }

    public function removeBetaalId(Reservering $betaalId): self
    {
        if ($this->betaalId->contains($betaalId)) {
            $this->betaalId->removeElement($betaalId);
            // set the owning side to null (unless already changed)
            if ($betaalId->getBetaal() === $this) {
                $betaalId->setBetaal(null);
            }
        }

        return $this;
    }

    public function getSoort(): ?string
    {
        return $this->soort;
    }

    public function setSoort(?string $soort): self
    {
        $this->soort = $soort;

        return $this;
    }

    public function getRekeningnr(): ?string
    {
        return $this->rekeningnr;
    }

    public function setRekeningnr(?string $rekeningnr): self
    {
        $this->rekeningnr = $rekeningnr;

        return $this;
    }

    public function getBetaaldate(): ?\DateTimeInterface
    {
        return $this->betaaldate;
    }

    public function setBetaaldate(?\DateTimeInterface $betaaldate): self
    {
        $this->betaaldate = $betaaldate;

        return $this;
    }
}
