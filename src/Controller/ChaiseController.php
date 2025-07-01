<?php

namespace App\Controller;



use App\Entity\Chaises;
use App\Entity\Commentaires;
use App\Form\FiltresTypeForm;
use App\Form\CommentaireTypeForm;
use App\Repository\ChaisesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class ChaiseController extends AbstractController
{
    #[Route('/chaise/{id}', name: 'chaise')]
    public function show(Chaises $chaise, Request $request, EntityManagerInterface $entityManager): Response
    {
        $commentaire = new Commentaires();
        $form = $this->createForm(CommentaireTypeForm::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setChaises($chaise);
            $commentaire->setUser($this->getUser());
            $commentaire->setDate(new \DateTime());

            $entityManager->persist($commentaire);
            $entityManager->flush();

            $this->addFlash('success', 'Commentaire ajouté avec succès !');
            return $this->redirectToRoute('chaise', ['id' => $chaise->getId()]);
        }

        return $this->render('chaise/chaise.html.twig', [
            'chaise' => $chaise,
            'commentaireForm' => $form->createView(),
            'commentaires' => $chaise->getCommentaires(),
    ]);
    }
}
