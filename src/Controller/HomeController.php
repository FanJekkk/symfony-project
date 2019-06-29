<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\post;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */

    public function index(Request $request)
    {
        $q = $request->query->get('comments');
        $post = $this->getDoctrine()
            ->getRepository('App:Post')
            ->findAll();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'viewposts' => $post,
        ]);
    }

    /**
     * @Route("/api", name="api1")
     */


    public function show(Connection $connection)
    {
        $pdofleks = $connection -> executeQuery('SELECT * FROM post ORDER BY publicated ASC;');
        $posts = $pdofleks->fetchAll();
        return $result = $this->json($posts);
    }

}
