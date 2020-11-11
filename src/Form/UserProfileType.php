<?php
    // src/Form/UserProfileType.php
    namespace App\Form;

    use App\Entity\UserProfile;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolver;

    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\Extension\Core\Type\EmailType;
    use Symfony\Component\Form\Extension\Core\Type\PasswordType;
    use Symfony\Component\Form\Extension\Core\Type\FileType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;

    class UserProfileType extends AbstractType

    {
        public function buildForm(FormBuilderInterface $builder, array $options) {

            $builder
            ->add('username', TextType::class, [
                'attr' => [
                        'placeholder' => 'Username'
                ]
            ])

            ->add('email', EmailType::class, [
                'attr' => [
                        'placeholder' => 'Email address'
                ]
            ])

            ->add('password', PasswordType::class, [
                'attr' => [
                        'placeholder' => 'Password'
                ]
            ])

            ->add('image', FileType::class, [
                'attr' => [
                    'placeholder' => 'Upload An Image'
                ]
                
            ])

            ->add(
                'submit',
                SubmitType::class,
                [
                    'attr' => ['class' => 'form-control btn-primary pull-right'],
                    'label' => 'SIGN UP'
                ]
            );

        }

        public function configureOptions(OptionsResolver $resolver)
        {
        $resolver->setDefaults([
            'data_class' => UserProfile::class,
        ]);
    }

    }
    
?>