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
                
            // $mark = new User();
            // $mark->setId(1);
            // $mark->setName("Mark");
                
            // $grace = new User();
            // $grace->setId(2);
            // $grace->setName("Grace");
                
            // $bill = new User();
            // $bill->setId(3);
            // $bill->setName("Bill");
                
            // $dennis = new User();
            // $dennis->setId(4);
            // $dennis->setName("Dennis");

            // $mark->addFriend($grace);
            // $mark->addFriend($bill);
            // $grace->addFriend($mark);
            // $bill->addFriend($mark);

            $user = $this->getDoctrine()->getRepository(UserProfile::class)->find($userId);
            // $users = [$mark, $grace, $bill, $dennis];

            $model = array('user' => $user);
            $view = 'profile.html.twig';
            // foreach ($users as $user) {
            //     if ($userId === $user->getId()) {
            //     $model['user'] = $user;
            //     }
            // }
            return $this->render($view, $model);
        }

        /**
        * @Route("/login", name="profile_new")
        */
        public function newProfile(Request $request) {

            $userProfile = new UserProfile();

            $form = $this->createForm(UserProfileType::class, $userProfile);

            $form->handleRequest($request);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                // $form->getData() holds the submitted values
                $userProfile = $form->getData();
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($userProfile);
                $entityManager->flush();

                return $this->redirectToRoute('profile_success');
            }

            $view = 'index.html.twig';
            $model = array('form' => $form->createView());

            return $this->render($view, $model);
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