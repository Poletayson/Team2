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
            ->findBy(['technology_map'=>$map[0]->getId()]);

        if (empty($positions)) {

            throw $this->createNotFoundException(
                'No positions on map!'
            );

        }

        return $this->render('test.html.twig', ['product'=>$product,
            'materials'=>$materials, 'positions'=>$positions]);
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

    /**
     * @Route("/product/1/editPosition", name="editPosition")
     */
    public function editPosition(){

        $em = $this->getDoctrine()->getManager();

        if( isset($_POST['id']))
            $id = intval($_POST['id']);

        if( isset($_POST['amount']))
            $amount = $_POST['amount'];

        $position = $em->getRepository(TechnologyMapPosition::class);
        $position = $position->find($id);

        if( $amount > 0 ){

            if (!$position) {

                throw $this->createNotFoundException(
                    'No position found for id '.$_POST['id']
                );

            }

            $position->setAmount($_POST['amount']);
            $em->flush();

        } else {

            return $this->deletePosition( $position );

        }


        return new Response("Success!");
    }

    public function deletePosition( $position ){

        $em = $this->getDoctrine()->getManager();
        $em->remove($position);
        $em->flush();

        return new Response("Element deleted!");
    }

    /**
     * @Route("/product/materials/addMaterialInTechnologyMap", name="addMaterialInTechnologyMap")
     */
    public function addMaterialInTechnologyMap(){

        // Получаем доступ к базе данных
        $em = $this->getDoctrine()->getManager();
        $amount = 1;

        // Проверка, что параметры переданы
        if(isset($_POST['idMaterial']))
            $material_id = $_POST['idMaterial'];

        if( isset($_POST['idMap']) )
            $technology_map_id = $_POST['idMap'];

        // Создаем и заполняем данными запись в технологической карте
        $technology_map_position = new TechnologyMapPosition();
        // Норма расхода
        $technology_map_position->setAmount($amount);
        // Ссылка на используемый материал
        $tmp = $this->getDoctrine()->getManager()->getRepository(Material::class)->find( $material_id );
        $technology_map_position->setMaterial($tmp);
        // Ссылка на технологическую карту
        $tmp = $this->getDoctrine()->getManager()->getRepository(TechnologyMap::class)->find($technology_map_id);
        $technology_map_position->setTechnologyMap($tmp);

        // Подготовка к добавлению новой записи
        $em->persist($technology_map_position);

        // Выполняем добавление
        $em->flush();

        // Вернем в product.js li, в котором содержится информация по добавленной записи
        return $this->render('onePositionMap.html.twig',
            ['positionMap'=>$technology_map_position]);

    }


}
