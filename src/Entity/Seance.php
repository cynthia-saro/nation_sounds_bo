<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SeanceRepository")
 */
class Seance
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="time")
     */
    private $beginning;

    /**
     * @ORM\Column(type="time")
     */
    private $ending;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Scene")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idScene;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Artist", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $artist;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBeginning(): ?\DateTimeInterface
    {
        return $this->beginning;
    }

    public function setBeginning(\DateTimeInterface $beginning): self
    {
        $this->beginning = $beginning;

        return $this;
    }

    public function getEnding(): ?\DateTimeInterface
    {
        return $this->ending;
    }

    public function setEnding(\DateTimeInterface $ending): self
    {
        $this->ending = $ending;

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

    public function getIdScene(): ?Scene
    {
        return $this->idScene;
    }

    public function setIdScene(?Scene $idScene): self
    {
        $this->idScene = $idScene;

        return $this;
    }

    public function getArtist(): ?Artist
    {
        return $this->artist;
    }

    public function setArtist(Artist $artist): self
    {
        $this->artist = $artist;

        return $this;
    }
}
