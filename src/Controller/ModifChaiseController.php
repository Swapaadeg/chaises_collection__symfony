<?php

namespace App\Controller;

use App\Entity\Chaises;
use App\Form\AddChaiseTypeForm;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class ModifChaiseController extends AbstractController
{
    #[Route('/modif/chaise/{id}', name: 'modif_chaise')]
    public function index(?Chaises $chaise, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérification si l'objet existe via l'injection de dependance
        // Si injection de dependance = On est en Modification
        // Sinon, on est un Creation et on créé l'objet
        if(!$chaise){
            $chaise = new Chaises;
        }
        

        // Récupération du formulaire et association avec l'objet
        $form = $this->createForm(AddChaiseTypeForm::class,$chaise);

        // Récupération des données POST du formulaire
        $form->handleRequest($request);
        // Vérification si le formulaire est soumis et Valide
        if($form->isSubmitted() && $form->isValid()){

            $chaise->setLastModifiedAt(new \DateTime());
            $chaise->setModifiedBy($this->getUser());
            // Persistance des données
            $entityManager->persist($chaise);
            // Envoi en BDD
            $entityManager->flush();
            $this->addFlash('success', 'Chaise modifiée avec succès !');
            // Redirection de l'utilisateur
            return $this->redirectToRoute('chaise', ['id' => $chaise->getId()]);
        }

        return $this->render('modif_chaise/modif_chaise.html.twig', [
            'chaiseForm' => $form->createView(), //envoie du formulaire en VUE
            'isModification' => $chaise->getId() !== null //Envoie d'un variable pour définir si on est en Modif ou Créa
        ]);
    }

    #[Route('/chaise/remove/{id}', name: 'delete_chaise')]
    public function remove(Chaises $chaise, Request $request, EntityManagerInterface $entityManager)
    {
        
        

        if($this->isCsrfTokenValid('SUP'.$chaise->getId(),$request->get('_token'))){
            $entityManager->remove($chaise);
            $entityManager->flush();
            $this->addFlash('success','La suppression de la chaise à été effectuée');
            return $this->redirectToRoute('gallerie');

        }
    }
}
