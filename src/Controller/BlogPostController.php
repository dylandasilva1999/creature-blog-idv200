<?php

namespace App\Controller;

use App\Entity\BlogPost;
use App\Form\PostType;
use App\Repository\BlogPostRepository;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogPostController extends AbstractController{

    /**
     * @Route("/blogs", name="blogs_view")
     */
    public function index(BlogPostRepository $blogPostRepository){

        $posts = $blogPostRepository->findAll();

        return $this->render('blogs.html.twig', [
            'posts' => $posts,
        ]);
    }

    /**
     * @Route("/blogs", name="blogs_view")
     * @return Response
     */
    public function create(Request $request){
        
        $form = $this->createForm(PostType::class);

        $form->handleRequest($request);

        if($form->isSubmitted()){

            $data = $form->getData();  

            $post = new BlogPost();

            $post->setAuthor($data->author);
            $post->setBlogTitle($data->blogTitle);
            $post->setBlogContent($data->blogContent);
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($post);
            $entityManager->flush();          

            return $this->redirectToRoute('post_success');
        }

        return $this->render('blogs.html.twig', [
            'form' => $form->createView()
        ]);

    }

    /**
    * @Route("/postSuccess", name="post_success")
    */
    public function successProfile(Request $request) {

        $view = 'blog-post-success.html.twig';
        $model = array();

        return $this->render($view, $model);
    }

}
