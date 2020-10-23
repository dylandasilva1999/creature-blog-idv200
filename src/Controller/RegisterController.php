<?php
    // src/Controller/ProfileController.php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    use App\Entity\UserProfile;
    use App\Form\UserProfileType;

    class RegisterController extends AbstractController {

        /**
        * @Route("/login", name="profile_new")
        */
        public function newProfile(Request $request) {

            $userProfile = new UserProfile();

            $form = $this->createForm(UserProfileType::class, $userProfile);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                // $form->getData() holds the submitted values
                $userProfile = $form->getData();
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($userProfile);
                $entityManager->flush();

                return $this->redirectToRoute('profile_success');
            }

            return $this->render('index.html.twig', [
                'form' =>  $form->createView()
            ]);
        }

        /**
        * @Route("/success", name="profile_success")
        */
        public function successProfile(Request $request) {

            $view = 'success.html.twig';
            $model = array();

            return $this->render($view, $model);
        }

    }

?>

