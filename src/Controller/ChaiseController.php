<?php

namespace App\Controller;



use App\Entity\Note;
use App\Entity\Chaises;
use App\Form\NoteTypeForm;
use App\Entity\Commentaires;
use App\Form\CommentaireTypeForm;
use App\Repository\NoteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class ChaiseController extends AbstractController
{
    #[Route('/chaise/{id}', name: 'chaise')]
    public function show(Chaises $chaise, Request $request, EntityManagerInterface $entityManager, NoteRepository $noteRepo): Response
    {
        // Form commentaire
        $commentaire = new Commentaires();
        $commentaireForm = $this->createForm(CommentaireTypeForm::class, $commentaire);
        $commentaireForm->handleRequest($request);

        if ($commentaireForm->isSubmitted() && $commentaireForm->isValid()) {
            $commentaire->setChaises($chaise);
            $commentaire->setUser($this->getUser());
            $commentaire->setDate(new \DateTime());

            $entityManager->persist($commentaire);
            $entityManager->flush();

            $this->addFlash('success', 'Commentaire ajouté avec succès !');
            return $this->redirectToRoute('chaise', ['id' => $chaise->getId()]);
        }

        // Form note
        $user = $this->getUser();
        $note = $noteRepo->findOneBy(['user' => $user, 'chaises' => $chaise]) ?? new Note();
        $noteForm = $this->createForm(NoteTypeForm::class, $note);
        $noteForm->handleRequest($request);

        if ($noteForm->isSubmitted()) {
            // Récupération manuelle de la note envoyée via le bouton
            $noteValue = $request->request->all('note')['note'] ?? null;

            if ($noteValue !== null) {
                $note->setNote((int)$noteValue);
            }

            if ($noteForm->isValid() && $note->getNote() !== null) {
                $note->setChaises($chaise);
                $note->setUser($this->getUser());

                $entityManager->persist($note);
                $entityManager->flush();

                $this->addFlash('success', 'Note enregistrée avec succès !');
                return $this->redirectToRoute('chaise', ['id' => $chaise->getId()]);
            } elseif ($note->getNote() === null) {
                $this->addFlash('danger', 'Veuillez sélectionner une note.');
            }
        }

        return $this->render('chaise/chaise.html.twig', [
            'chaise' => $chaise,
            'moyenne' => $chaise->getMoyenneNotes(),
            'commentaireForm' => $commentaireForm->createView(),
            'noteForm' => $noteForm->createView(),
            'commentaires' => $chaise->getCommentaires(),
        ]);
    }
}

