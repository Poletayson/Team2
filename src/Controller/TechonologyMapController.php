<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TechonologyMapController extends AbstractController
{
    /**
     * @Route("/techonology/map", name="techonology_map")
     */
    public function index()
    {
        return $this->render('techonology_map/index.html.twig', [
            'controller_name' => 'TechonologyMapController',
        ]);
    }
}
