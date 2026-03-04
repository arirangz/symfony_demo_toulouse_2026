<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PageController extends AbstractController
{
    #[Route('/', name: 'app_page')]
    public function index(): Response
    {
        $username =  "John";
        $age = 20;
        $movies = [
            ["name" => "Inception", "year" => "2009"],
            ["name" => "Matrix", "year" => "2003"],
            ["name" => "Tenet", "year" => "2015"],
        ];
        return $this->render('page/index.html.twig', [
            'username' => $username,
            'age' => $age,
            'movies' => $movies,
        ]);
    }

    #[Route('/about', name:'app_about')]
    public function about(): Response
    {
        return $this->render('page/about.html.twig');
    }
}
