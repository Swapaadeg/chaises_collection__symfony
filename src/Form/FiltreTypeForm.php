<?php

namespace App\Form;

use App\Entity\Chaises;
use App\Entity\TypeDeChaise;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FiltreTypeForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('date_ajout')
            ->add('valeur_estimee')
            ->add('lastModifiedAt')
            ->add('imageName')
            ->add('updatedAt')
            ->add('modifiedBy', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
            ])
            ->add('type', EntityType::class, [
                'class' => TypeDeChaise::class,
                'choice_label' => 'id',
            ])
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Chaises::class,
        ]);
    }
}
