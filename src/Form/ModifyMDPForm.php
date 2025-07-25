<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ModifyMDPForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('plainPassword', RepeatedType::class, [
            'type' => PasswordType::class,
            'first_options' => [
                'label' => 'Nouveau mot de passe',
            ],
            'second_options' => [
                'label' => 'Confirmez le mot de passe',
            ],
            'invalid_message' => 'Les mots de passe doivent correspondre',
            'constraints' => [
                new Assert\NotBlank([
                    'message' => 'Le mot de passe est requis'
                ]),
                new Assert\Length([
                    'min' => 6,
                    'minMessage' => 'Le mot de passe doit contenir au moins {{ limit }} caractères',
                ])
            ],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
