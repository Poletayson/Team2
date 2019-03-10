<?php

namespace App\Controller;

use App\Entity\Tovar;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class TovarController extends AbstractController{
    /**
     * @Route("/tovar", name="tovar")
     */
    public function index(){

//        $entityManager = $this->getDoctrine()->getManager();
//
//        $tovar = new Tovar();
//        $tovar ->setTitle('Stul');
//        $tovar ->setReturne('4 nojki');
//
//        $entityManager->persist($tovar);
//        $entityManager->flush();
//        $data['opisanieTovara'] = "asdasd";
        return $this->render('product.html.twig', ['opisanieTovara' => "sobakssssss sobakssssss sobakssssss sobakssssss sobakssssss sobakssssss"]);
//        return new Response('Saved new tovar with id '.$tovar->getId());
    }

    /**
     * @Route("/tovar/{id}", name="product_show")
     */
    public function show($id){

        $product = $this->getDoctrine()
            ->getRepository(Tovar::class)
            ->find($id);

        if (!$product) {

            throw $this->createNotFoundException(

                'No product found for id '.$id

            );

        }
        return $this->render('product.html.twig', ['opisanieTovara' => $product->getTitle()]);

//        return new Response('Check out this great product: '.));

        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['product' => $product]);

    }
}
