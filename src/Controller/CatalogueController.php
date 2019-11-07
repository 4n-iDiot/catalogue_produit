<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CatalogueController extends AbstractController
{

    /**
     * @Route("/")
     */
    public function productList()
    {
        $productNames = ['I', 'am', 'a', 'product'];
        $productDescriptions = ["Le produit 1", "Le produit 2", "Le produit 3", "Le produit 4"];

        return $this->render('product/listProduct.html.twig', [
            'productNames' => $productNames,
            'productDescriptions' => $productDescriptions,
        ]);
    }

    /**
     * @Route("/produit/{slug}")
     */
    public function showProduct($slug)
    {
        return $this->render('product/showProduct.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
        ]);
    }
}
