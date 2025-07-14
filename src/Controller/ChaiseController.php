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
    public function show(
        Chaises $chaise,
        Request $request,
        EntityManagerInterface $entityManager,
        NoteRepository $noteRepo
    ): Response {
        $user = $this->getUser();

        // ========== GESTION COMMENTAIRE ==========
        $commentaire = new Commentaires();
        $commentaireForm = $this->createForm(CommentaireTypeForm::class, $commentaire);
        $commentaireForm->handleRequest($request);

        if ($commentaireForm->isSubmitted() && $commentaireForm->isValid()) {
            $commentaire->setChaises($chaise);
            $commentaire->setUser($user);
            $commentaire->setDate(new \DateTime());

            $entityManager->persist($commentaire);
            $entityManager->flush();

            $this->addFlash('success', 'Commentaire ajouté avec succès !');
            return $this->redirectToRoute('chaise', ['id' => $chaise->getId()]);
        }

        // ========== GESTION NOTE ==========
        if ($user && $request->isMethod('POST') && $request->request->has('note')) {
            $noteValue = (int) $request->request->get('note');

            if ($noteValue < 1 || $noteValue > 5) {
                $this->addFlash('danger', 'Note invalide.');
                return $this->redirectToRoute('chaise', ['id' => $chaise->getId()]);
            }

            $note = $noteRepo->findOneBy(['user' => $user, 'chaises' => $chaise]) ?? new Note();

            $note->setNote($noteValue);
            $note->setUser($user);
            $note->setChaises($chaise);

            $entityManager->persist($note);
            $entityManager->flush();

            $this->addFlash('success', 'Note enregistrée avec succès !');
            return $this->redirectToRoute('chaise', ['id' => $chaise->getId()]);
        }

        // ========== CALCUL DE LA MOYENNE ==========
        $notes = $chaise->getNotes();
        $moyenne = 0;

        if (count($notes) > 0) {
            $total = array_reduce($notes->toArray(), fn($acc, $note) => $acc + $note->getNote(), 0);
            $moyenne = $total / count($notes);
        }

        return $this->render('chaise/chaise.html.twig', [
            'chaise' => $chaise,
            'moyenne' => $moyenne,
            'commentaireForm' => $commentaireForm->createView(),
            'commentaires' => $chaise->getCommentaires(),
        ]);
    }
}

