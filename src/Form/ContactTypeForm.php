<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactTypeForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('username', TextType::class, [
            'label' => 'Pseudo',
            'label_attr' => ['class' => 'form-label'],
            'attr' => ['class' => 'form-input']
        ])
        ->add('email', EmailType::class, [
            'label' => 'Email',
            'label_attr' => ['class' => 'form-label'],
            'attr' => ['class' => 'form-input']
        ])
        ->add('message', TextareaType::class, [
            'label' => 'Votre message',
            'label_attr' => ['class' => 'form-label'],
            'attr' => ['class' => 'form-input', 'rows' => 6]
        ])
        ->add('submit', SubmitType::class, [
            'label' => 'Envoyer',
            'attr' => ['class' => 'btn']
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
        ]);
    }
}
