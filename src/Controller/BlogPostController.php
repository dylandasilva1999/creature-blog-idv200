<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogPostController extends AbstractController
{
    /**
     * @Route("/blogs", name="blogs_view")
     */
    public function indexAction()
    {
        return $this->render('blogs.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}
