<?php

namespace App\Form;

use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('field1', ChoiceType::class, array('error_bubbling' => true,'required' => false,
                'choices'  => array("Yes"),
                ))

            ->add('field2', ChoiceType::class, array('error_bubbling' => true,'required' => false,
                'choices'  => array("Yes"),
                ))

            ->add('field3', ChoiceType::class, array('error_bubbling' => true,'required' => false,
                'choices'  => array("Yes"),
                'expanded' => true,
                ))

            ->add('field4', ChoiceType::class, array('error_bubbling' => true,'required' => false,
                'choices'  => array("Yes"),
                'expanded' => true,
                ))

            ->add('field5', ChoiceType::class, array('error_bubbling' => true,'required' => false,
                'choices'  => array("Yes"),
                'expanded' => true,
                ))

            ->add('field6', ChoiceType::class, array('error_bubbling' => true,'required' => false,
                'choices'  => array("Yes"),
                'expanded' => true,
                ))

            ->add('field7', ChoiceType::class, array('error_bubbling' => true,'required' => false,
                'choices'  => array("Yes"),
                'expanded' => true,
                ))

            ->add('field8', ChoiceType::class, array('error_bubbling' => true,'required' => false,
                'choices'  => array("Yes"),
                'expanded' => true,
                ))

            ->add('field9', ChoiceType::class, array('error_bubbling' => true,'required' => false,
                'choices'  => array("Yes"),
                'expanded' => true,
                ))

            ->add('field10', ChoiceType::class, array('error_bubbling' => true,'required' => false,
                'choices'  => array("Yes"),
                'expanded' => true,
                ))

//            ->add('field10', CheckboxType::class, array(
//                'required' => false,
//                'mapped' => true,
//                'data' => false,
//                'disabled' => false))
            ;
    }



    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'App\Entity\CategoryA'
        ]);
    }

}