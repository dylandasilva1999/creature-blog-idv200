<?php

    // src/Controller/ProfileController.php
    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    class ProfileController extends AbstractController {
        
        /*@Route("/profile/{id}", name="profile_view")*/
        public function viewProfile($id = "1") {

            $userId = (int) $id;

            $users = [
            array("id" => 1, "name" => "Mark"),
            array("id" => 2, "name" => "Grace"),
            array("id" => 3, "name" => "Bill")
            ];

            $model = array();

            $view = 'profile.html.twig';

            foreach ($users as $user) {
                if ($userId === $user['id']) {
                    $model['user'] = $user;
                }
            }

            return $this->render($view, $model);
        }
    }
?>