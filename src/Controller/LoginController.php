<?php

    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    class LoginController extends AbstractController {

        /**
         * @Route("/", name="login_view")
         */
        public function index() {

            $view = 'index.html.twig';

            return $this->render($view);

        }
    }
?>