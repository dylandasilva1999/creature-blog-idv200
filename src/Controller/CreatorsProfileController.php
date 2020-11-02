<?php

    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    class CreatorsProfileController extends AbstractController {

        /**
         * @Route("/profile", name="creators_profile_view")
         */
        public function creatorsProfile() {

            $view = 'author-profile-page.html.twig';

            return $this->render($view);

        }
    }
?>