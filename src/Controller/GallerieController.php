<?php

namespace App\Controller;

use App\Form\FiltreTypeForm;
use App\Repository\ChaisesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class GallerieController extends AbstractController
{
    #[Route('/gallerie', name: 'gallerie')]
        //FILTRE
    public function index(ChaisesRepository $repository, Request $request): Response
    {
        $form = $this->createForm(FiltreTypeForm::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $type = $form->get('type') ->getData();

            $chaises = $type
                        ? $repository->filterType($type->getNom())
                        : $repository->findAll();
        } else {
            $chaises = $repository->findAll();
        }

        return $this->render('gallerie/gallerie.html.twig', [
            'chaises' => $chaises,
            'filtreform' => $form->createView(),
        ]);
    }
}
