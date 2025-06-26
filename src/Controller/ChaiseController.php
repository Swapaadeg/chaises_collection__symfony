<?php

namespace App\Controller;

use App\Entity\Chaises;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class ChaiseController extends AbstractController
{
    #[Route('/chaise/{id}', name: 'chaise')]
    public function show(Chaises $chaise): Response
    {
        return $this->render('chaise/chaise.html.twig', [
            'chaise' => $chaise,
        ]);
    }
}
