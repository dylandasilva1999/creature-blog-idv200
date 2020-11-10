<?php
    // src/Controller/ProfileController.php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    use App\Entity\UserProfile;
    use App\Form\UserProfileType;

    class ProfileController extends AbstractController {
        /**
         * @Route("/profile/{id}", name="profile_view")
         */
        public function viewProfile($id = "1") {

            $userId = (int) $id;
            $user = $this->getDoctrine()->getRepository(UserProfile::class)->find($userId);

            $model = array('user' => $user);
            $view = 'user-profile-page.html.twig';

            return $this->render($view, $model);
        }

    }
?>