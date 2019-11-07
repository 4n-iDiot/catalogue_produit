<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $référence;

    /**
     * @ORM\Column(type="date")
     */
    private $date_mise_en_vente;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Marque", inversedBy="produits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $marque;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

   public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getRéférence(): ?string
    {
        return $this->référence;
    }

    public function setRéférence(string $référence): self
    {
        $this->référence = $référence;

        return $this;
    }

    public function getDateMiseEnVente(): ?\DateTimeInterface
    {
        return $this->date_mise_en_vente;
    }

    public function setDateMiseEnVente(\DateTimeInterface $date_mise_en_vente): self
    {
        $this->date_mise_en_vente = $date_mise_en_vente;

        return $this;
    }

    public function getMarque(): ?Marque
    {
        return $this->marque;
    }

    public function setMarque(?Marque $marque): self
    {
        $this->marque = $marque;

        return $this;
    }
}
