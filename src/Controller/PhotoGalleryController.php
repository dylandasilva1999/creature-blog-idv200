<?php

    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    class PhotoGalleryController extends AbstractController {

        /**
         * @Route("/photo-gallery", name="photo_gallery_view")
         */
        public function aboutUs() {

            $view = 'photo-gallery.html.twig';

            return $this->render($view);

        }
    }
?>