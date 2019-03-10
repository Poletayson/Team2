<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TechonologyMapPositionController extends AbstractController
{
    /**
     * @Route("/techonology/map/position", name="techonology_map_position")
     */
    public function index()
    {
        return $this->render('techonology_map_position/index.html.twig', [
            'controller_name' => 'TechonologyMapPositionController',
        ]);
    }
}
