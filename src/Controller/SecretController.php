<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SecretController extends AbstractController
{
    /**
     * @Route("/secret", name="secret")
     */
    public function index()
    {
        return $this->render('secret/index.html.twig', [
            'controller_name' => 'SecretController',
        ]);
    }
}
