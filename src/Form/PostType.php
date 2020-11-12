<?php

namespace App\Form;

use App\Entity\BlogPost;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

        ->add('author', TextType::class, [
            'attr' => [
                    'placeholder' => 'Enter your name'
            ]
        ])

        ->add('blogTitle', TextType::class, [
            'attr' => [
                    'placeholder' => 'Enter your blog title'
            ]
        ])

        ->add('blogContent', TextType::class, [
            'attr' => [
                    'placeholder' => 'Enter your blog content'
            ]
        ])

        ->add('submit', SubmitType::class, 
            [
                'attr' => ['class' => 'form-control btn-primary pull-right create-post-btn'],
                'label' => 'Create Post' 
            ]
        );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => BlogPost::class,
            'validation_groups' => false,
        ]);
    }
}