<?php

namespace App\Controller;

use App\Entity\Material;
use App\Entity\Product;
use App\Entity\TechnologyMap;
use App\Entity\TechnologyMapPosition;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class ProductController extends AbstractController
{

    /**
     * @Route("/product/index", name="product_info")
     */
    public function index()
    {

        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->find(1);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '+'1'
            );
        }
//        Получаем технологическую карту по id и текущей дате
//        По тех.карте находим список ее полей и передаем в виде массива в twig, там в цикле выводим уже.
//        Навешиваем на кнопку "Применить" обработчик. Навешиваем обработчик на кнопку с материалами
//        (чтоб добавлял в тех.карту).

        return $this->render('test.html.twig');
    }

    /**
     * @Route("/product/{id}", name="show_change_page")
     */
    public function show($id){

        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $materials = $this->getDoctrine()
            ->getRepository( Material::class)
            ->findAll();

        if (empty($materials)) {
            throw $this->createNotFoundException(
                'No map'
            );
        }

        $map = $this->getDoctrine()
            ->getRepository( TechnologyMap::class)
            ->findBy(['product'=>$id, 'date_end'=>null]);

        if (empty($map)) {

            throw $this->createNotFoundException(
                'No map!'
            );

        }

        $positions = $this->getDoctrine()
            ->getRepository( TechnologyMapPosition::class)
            ->findBy(['technology_map'=>$map->getId()]);

        if (empty($positions)) {

            throw $this->createNotFoundException(
                'No positions on map!'
            );

        }

        return $this->render('test.html.twig', ['product'=>$product, 'materials'=>$materials]);
    }

    /**
     * @Route("/product/{id}/edit", name="editProduct")
     */
    public function save($id){

        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository(Product::class)->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $product->setTitle($_POST['title']);
        $product->setDescription($_POST['description']);
        $product->setCode($_POST['code']);
        $product->setBalance($_POST['balance']);

        $em->flush();

        return new Response("Success!");
//        return $this->redirectToRoute('product_show', [
//            'id' => $product->getId()
//        ]);

    }

}
