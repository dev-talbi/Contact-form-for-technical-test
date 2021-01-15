<?php

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'txt'
                ]

            ])
            ->add('lastname', TextType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'txt'
                ]

            ])
            ->add('address', TextType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'txt'
                ]

            ])
            ->add('city', TextType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'txt'
                ]

            ])
            ->add('zip', NumberType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'txt',
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
