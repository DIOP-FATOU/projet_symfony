<?php

namespace App\Entity;

use App\Repository\ChambreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChambreRepository::class)
 */
class Chambre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numero_chambre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numero_batiment;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroChambre(): ?string
    {
        return $this->numero_chambre;
    }

    public function setNumeroChambre(string $numero_chambre): self
    {
        $this->numero_chambre = $numero_chambre;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNumeroBatiment(): ?string
    {
        return $this->numero_batiment;
    }

    public function setNumeroBatiment(string $numero_batiment): self
    {
        $this->numero_batiment = $numero_batiment;

        return $this;
    }
}
