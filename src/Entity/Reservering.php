<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReserveringRepository")
 */
class Reservering
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Kamer")
     */
    private $kamerId;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userId;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $checkInDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $checkOutDate;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $betaalId;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $betaalMethode;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Betaal", inversedBy="betaalId")
     */
    private $betaal;

    public function __construct()
    {
        $this->kamerId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Kamer[]
     */
    public function getKamerId(): Collection
    {
        return $this->kamerId;
    }

    public function addKamerId(Kamer $kamerId): self
    {
        if (!$this->kamerId->contains($kamerId)) {
            $this->kamerId[] = $kamerId;
        }

        return $this;
    }

    public function removeKamerId(Kamer $kamerId): self
    {
        if ($this->kamerId->contains($kamerId)) {
            $this->kamerId->removeElement($kamerId);
        }

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->userId;
    }

    public function setUserId(?User $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getCheckInDate(): ?\DateTimeInterface
    {
        return $this->checkInDate;
    }

    public function setCheckInDate(?\DateTimeInterface $checkInDate): self
    {
        $this->checkInDate = $checkInDate;

        return $this;
    }

    public function getCheckOutDate(): ?\DateTimeInterface
    {
        return $this->checkOutDate;
    }

    public function setCheckOutDate(?\DateTimeInterface $checkOutDate): self
    {
        $this->checkOutDate = $checkOutDate;

        return $this;
    }

    public function getBetaalId(): ?int
    {
        return $this->betaalId;
    }

    public function setBetaalId(?int $betaalId): self
    {
        $this->betaalId = $betaalId;

        return $this;
    }

    public function getBetaalMethode(): ?string
    {
        return $this->betaalMethode;
    }

    public function setBetaalMethode(?string $betaalMethode): self
    {
        $this->betaalMethode = $betaalMethode;

        return $this;
    }

    public function getBetaal(): ?Betaal
    {
        return $this->betaal;
    }

    public function setBetaal(?Betaal $betaal): self
    {
        $this->betaal = $betaal;

        return $this;
    }
}
