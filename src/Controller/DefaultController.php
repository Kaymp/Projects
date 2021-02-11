<?php


namespace App\Controller;

use App\Repository\BlogRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Blog;
use App\Form\BlogType;
use Symfony\Component\HttpFoundation\Request;



class DefaultController extends AbstractController


{
    private $em;

/**
* DefaultController constructor.
* @param EntityManagerInterface $entityManager
*/
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;

    }


/**
*@Route("/", name="default")
*/
    public function index( EntityManagerInterface $entityManager): Response
    {

        $blog = $entityManager->getRepository(Blog::class)->findAll();



        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'blogs' => $blog,
        ]);
    }


}






