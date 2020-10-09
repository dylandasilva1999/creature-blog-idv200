<?php
    // src/Controller/HomeController.php
    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    class BlogController extends AbstractController {

        /**
         * @Route("/blogs", name="blogs_view")
         */
        public function blogs() {

            $view = 'blogs.html.twig';

            return $this->render($view);

        }
    }
?>