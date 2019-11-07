<?php

class Produit {

    private $marque;
    private $prix;
    private $nom;
    private $ref;
    private $dateVente;

    public function __construct (string $marque, float $prix, string $nom, string $ref, string $dateVente) {
        $this->marque = new Marque($marque);
        $this->prix = $prix;
        $this->nom = $nom;
        $this->ref = $ref;
        $this->dateVente = $dateVente;
    }
}
