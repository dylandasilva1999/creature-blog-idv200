<?php
    // src/Controller/ProfileController.php
    namespace App\Controller;

    use App\Entity\UserProfile;
    use App\Form\UserProfileType;

    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

    class RegisterController extends AbstractController {

        private $passwordEncoder;

        public function __construct(UserPasswordEncoderInterface $passwordEncoder)
        {
            $this->passwordEncoder = $passwordEncoder;
        }

        /**
        * @Route("/login", name="profile_new")
        */
        public function newProfile(Request $request) {

            $form = $this->createForm(UserProfileType::class);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $data = $form->getData();         

                $user = new UserProfile();

                $user->setUsername($data->username);
                $user->setEmail($data->email);
                $user->setPassword($data->password);
        
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
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

