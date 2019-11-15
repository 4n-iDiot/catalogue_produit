<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 * @UniqueEntity(fields={"ref"}, message="La référence existe déjà")
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
     * @Assert\Positive(
     *     message="La valeur doit être positive",
     * )
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(name="ref", type="string", length=255)
     * @Assert\Uuid(
     *     message="La valeur doit être un uuid valide",
     * )
     */
    private $ref;

    /**
     * @ORM\Column(type="date")
     * @Assert\LessThanOrEqual(
     *     "now",
     *     message="La date ne peut pas être ultérieure à aujourd'hui"
     * )
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
        if (is_float($prix))
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

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(string $ref): self
    {
        $this->ref = $ref;

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
