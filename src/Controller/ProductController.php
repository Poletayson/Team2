<?php

namespace App\Controller;

use App\Entity\Material;
use App\Entity\Product;
use App\Entity\TechnologyMap;
use App\Entity\TechnologyMapPosition;
use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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

        return $this->render('test.html.twig', ['product'=>$product, 'materials'=>$materials]);
    }

    /**
     * @Route("/product/{id}/edit", name="editProduct")
     */
    public function save($id){

//        $title = $_POST['title'];
        return "xyu";
    }

}
