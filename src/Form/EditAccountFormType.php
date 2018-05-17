<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditAccountFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('username', TextType::class, array(
                'label' => false,
                'attr' => array (
                    'placeholder' => 'Username'
                )
            ))
            ->add('email', EmailType::class, array(
                'label' => false,
                'attr' => array (
                    'placeholder' => 'Email'
                )
            ))
            ->add('password', PasswordType::class, array(
                'label' => false,
                'attr' => array (
                    'placeholder' => 'Password'
                )
            ))
            ->add('confirmPassword', PasswordType::class, array(
                'label' => false,
                'attr' => array (
                    'placeholder' => 'Confirm Password'
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
