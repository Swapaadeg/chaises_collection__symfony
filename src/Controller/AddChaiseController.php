<?php

namespace App\Controller;

use App\Entity\Chaises;
use App\Form\AddChaiseTypeForm;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class AddChaiseController extends AbstractController
{
    #[Route('/add/chaise', name: 'add_chaise')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {

        $chaise = new Chaises();
        $form = $this->createForm(AddChaiseTypeForm::class, $chaise);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($chaise);
            $entityManager->flush();

            $this->addFlash('success', 'Chaise ajoutée avec succès !');

            return $this->redirectToRoute('gallerie');
        }

        return $this->render('add_chaise/AddChaise.html.twig', [
            'addChaiseForm' => $form->createView(),
        ]);
    }
}
