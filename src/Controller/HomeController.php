<?php

namespace App\Controller;

use App\Entity\ArticleSearch;
use App\Form\ArticleSearchType;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/actualites", name="actualites")
     */
    public function articles(ArticleRepository $articleRepository, Request $request): Response
    {
        $search = new ArticleSearch();
        $form = $this->createForm(ArticleSearchType::class,$search);
        $form->handleRequest($request);

        return $this->render('home/articles.html.twig', [
            'articles' => $articleRepository->findAllVisibleQuery($search),
            'form'  => $form->createView()
        ]);
    }
}
