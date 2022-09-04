<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'blog_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('base.html.twig');
    }

    #[Route('/article/{slug}', name: 'blog_post')]
    public function show(string $slug): Response
    {
        return $this->render('blog/single.html.twig');
    }
}