<?php

namespace App\Controller\Admin;

use App\Entity\Chaises;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ChaisesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Chaises::class;
    }
    public function configureFields(string $pageName): iterable
    {
        
        return [
            TextField::new('nom'),
            TextEditorField::new('description'),
            IntegerField::new('valeur_estimee', 'Valeur estimée (€)'),
            DateField::new('date_ajout', 'Date d\'ajout'),

            //Configuration pour l'image en 2 partie, une pour l'affichage et une pour le formulaire
            TextField::new('imageFile', 'Image')
            ->setFormType(VichImageType::class)
            ->onlyOnForms(), //On spécifie que ce champs sera uniquement pour le formulaire
            ImageField::new('imageName', 'Image')
                ->setBasePath('images/upload') // Chemin public vers les images
                ->onlyOnIndex(),//On spécifie que ce champs sera uniquement pour l'affichage de l'image'

            //Relation ManyToOne
            AssociationField::new('type', 'Type de chaise')
            ->setFormTypeOptions([
                'choice_label'=>'nom',
            ]),
            
        ];
    }
}
