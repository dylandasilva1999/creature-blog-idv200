<?php

    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    class AboutUsController extends AbstractController {

        /**
         * @Route("/about-us", name="about_view")
         */
        public function aboutUs() {

            $view = 'about-us.html.twig';

            return $this->render($view);

        }
    }
?>