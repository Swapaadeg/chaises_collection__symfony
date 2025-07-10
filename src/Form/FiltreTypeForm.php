<?php

namespace App\Form;

use App\Entity\Chaises;
use App\Entity\Couleurs;
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
            ->add('type', EntityType::class, [
                'class' => TypeDeChaise::class,
                'choice_label' => 'nom',
                'placeholder' => '-- Tous les types --',
                'required' => false,
                'mapped' => false,

            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
        ]);
    }
}
