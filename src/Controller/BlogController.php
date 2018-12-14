<?php
// src/Controller/BlogController.php
  
namespace App\Controller;
  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;  
/**
 * Blog controller.
 */
class BlogController extends AbstractController
{
    /**
     * Show a blog entry
     * @Route("/{id}", name="blog", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function show($id)
    {
        $em = $this->getDoctrine()->getManager();
  
        $blog = $em->getRepository('App:Blog')->find($id);
  
        if (!$blog) {
        throw $this->createNotFoundException('Unable to find Blog post.');
        }
  
        $comments = $em->getRepository('App:Comment')
                       ->getCommentsForBlog($blog->getId());
  
        return $this->render('blog/show.html.twig', array(
            'blog'      => $blog,
            'comments'  => $comments
        ));        
         
         
    }
     
}