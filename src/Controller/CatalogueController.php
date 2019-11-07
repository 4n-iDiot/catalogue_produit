<?php

namespace App\Controller;

use App\Entity\Produit;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CatalogueController extends AbstractController
{

    /**
     * @Route("/")
     */
    public function productList()
    {
        $products = $this->getDoctrine()->getRepository(Produit::class)->findAll();

        return $this->render('product/listProduct.html.twig', [
            'products' => $products,
        ]);
    }

    /**
     * @Route("/produit/{id}")
     */
    public function showProduct($id)
    {
        $product = $this->getDoctrine()->getRepository(Produit::class)->find($id);

        return $this->render('product/showProduct.html.twig', [
            'product' => $product,
        ]);
    }
}
