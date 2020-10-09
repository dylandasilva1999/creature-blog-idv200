<?php
    // src/Controller/HomeController.php
    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    class IndividualBlogController extends AbstractController {

        /**
         * @Route("/blog", name="blog_view")
         */
        public function individualBlog() {

            $view = 'individual-blog.html.twig';

            return $this->render($view);

        }
    }
?>