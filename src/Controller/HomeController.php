<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'posts' => $em->getRepository(Post::class)->findAll()
        ]);
    }
}
