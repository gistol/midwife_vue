<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditTaskFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => [
                    'value' => $options['data']->title
                ]
            ])
            ->add('description', TextareaType::class, [
                'attr' => [
                    'value' => $options['data']->description
                ]
            ])
            ->add('start', DateTimeType::class, [
                'attr' => [
                    'value' => date("Y-m-d H:i:s", time($options['data']->start) )
                ]
            ])
            ->add('end', DateTimeType::class, [
                'attr' => [
                    'value' =>  date("Y-m-d H:i:s", time($options['data']->end) )
                ]
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
