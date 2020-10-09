<?php

    // src/Controller/HomeController.php
    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    class HomeController extends AbstractController {

        /**
         * @Route("/home", name="home_view")
         */
        public function home() {
            return new Response(
            '<html><body><h1>Hello World</h1></body></html>'
            );

        }
    }
?>