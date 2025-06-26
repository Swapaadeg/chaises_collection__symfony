<?php

namespace App\Controller;

use App\Repository\ChaisesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ChaisesRepository $chaisesRepository): Response
    {
        $lastChaises = $chaisesRepository->findLast4();

        return $this->render('home/index.html.twig', [
            'lastChaises' => $lastChaises,
        ]);
    }
}
