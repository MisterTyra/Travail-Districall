<?php

namespace App\Controller;

use SebastianBergmann\CodeCoverage\Report\Html\Renderer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController{
    #[Route('/', name: 'home')]
    public function index()
    {
        return $this->render('home/index.html.twig');
    }
    
}

// public function index(ArticleRepository $articleRepository): Response
//     {
//         $article = $articleRepository->findAll();
//         return $this->render('home/home.html.twig', [
//             'article' => $article,
//         ]);
//     }
// Ce controlleur permet d'envoyer les informations des produits à la page home, mais comme l'importation de la BDD n'est plus possible depuis 2019, j'ai mis en commentaire