<?php

namespace App\Controller;

use App\Entity\Marque;
use App\Entity\Produit;
use App\Form\ProduitType;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Controller\ValidatorInterface;
class CatalogueController extends AbstractController
{

    /**
     * @Route("/", name="homepage")
     */
    public function productList()
    {
        $products = $this->getDoctrine()->getRepository(Produit::class)->findAll();

        return $this->render('product/listProduct.html.twig', [
            'products' => $products,
        ]);
    }

    /**
     * @Route("/produit/{id}", name="product", requirements={"id"="\d+"})
     */
    public function showProduct($id)
    {
        $product = $this->getDoctrine()->getRepository(Produit::class)->find($id);

        return $this->render('product/showProduct.html.twig', [
            'product' => $product,
        ]);
    }

    /**
     * @Route("/produit/edit/{id}", requirements={"id"="\d+"})
     */
    public function editProduct($id, Request $request)
    {
        $product = $this->getDoctrine()->getRepository(Produit::class)->find($id);
        $form = $this->createForm(ProduitType::class, $product);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $product = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('product', array('id' => $id));
        }

        return $this->render('product/editProduct.html.twig', [
            'product' => $product,
            'productForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/produit/create")
     */
    public function createProduct(Request $request)
    {
        $product = new Produit();
        $form = $this->createForm(ProduitType::class, $product);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $product = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render('product/createProduct.html.twig', [
            'productForm' => $form->createView(),
        ]);
    }
}
