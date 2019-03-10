<?php
/**
 * Created by PhpStorm.
 * User: mihail
 * Date: 07.03.2019
 * Time: 17:28
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class Dudos extends AbstractController{


    function asd(){

        return $this->render('product.html.twig' );
    }

}
