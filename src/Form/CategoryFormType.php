<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('semester', ChoiceType::class, array(
                'error_bubbling' => true,
                'required' => true,
                'placeholder' => 'Choose your semester',
                'choices'  => array(
                    '2' => '2',
                    '4' => '4',
                    '6' => '6'
                ),
            ))
            ->add('date', DateType::class, array(
                'widget' => 'choice',
                'label' => false,
                'required' => true,
                'placeholder' => [
                    'year' => 'Year',
                    'month' => 'Month',
                    'day' => 'Day'
                ]
            ))
            ->add('field1', ChoiceType::class, array(
                'error_bubbling' => true,
                'required' => true,
                'placeholder' => 'Graviditetsundersøgelser, hvor den studerende skal have haft hænderne på maven og varetaget dele af samtalen.',
                'choices'  => array(
                    'Yes' => true,
                    'No' => false
                ),
                ))

            ->add('field2', ChoiceType::class, array(
                'error_bubbling' => true,
                'required' => true,
                'placeholder' => 'Graviditetsundersøgelser på fødegangen, i jordemoderkonsultation, i klinikker, ambulatorium, svangreafdelinger, i hjemmet mm optælles.',
                'choices'  => array(
                    'Yes' => true,
                    'No' => false
                ),
                ))

            ->add('field3', ChoiceType::class, array(
                'error_bubbling' => true,
                'required' => true,
                'placeholder' => 'Graviditetsundersøgelser, hvor den studerende skal have haft hænderne på maven og varetaget dele af samtalen i undersøgelser med en af nedenstående komplikationer',
                'choices'  => array(
                    'Yes' => true,
                    'No' => false
                )
                ))

            ->add('field4', ChoiceType::class, array(
                'error_bubbling' => true,
                'required' => true,
                'placeholder' => 'Graviditetsundersøgelser på fødegangen, i jordemoderkonsultation, i klinikker, ambulatorium, svangreafdelinger, i hjemmet mm optælles',
                'choices'  => array(
                    'Yes' => true,
                    'No' => false
                )
                ))

            ->add('field5', ChoiceType::class, array(
                'error_bubbling' => true,
                'required' => true,
                'placeholder' => 'Graviditetsundersøgelser, hvor den studerende skal have haft hænderne på maven og varetaget dele af samtalen i undersøgelser med en af nedenstående komplikationer',
                'choices'  => array(
                    'Yes' => true,
                    'No' => false
                )
                ))

            ->add('field6', ChoiceType::class, array(
                'error_bubbling' => true,
                'required' => true,
                'placeholder' => 'Graviditetsundersøgelser på fødegangen, i jordemoderkonsultation, i klinikker, ambulatorium, svangreafdelinger, i hjemmet mm optælles.',
                'choices'  => array(
                    'Yes' => true,
                    'No' => false
                )
                ))

            ->add('field7', ChoiceType::class, array(
                'error_bubbling' => true,
                'required' => true,
                'placeholder' => 'Graviditetsundersøgelser på fødegangen, i jordemoderkonsultation, i klinikker, ambulatorium, svangreafdelinger, i hjemmet mm optælles.',
                'choices'  => array(
                    'Yes' => true,
                    'No' => false
                )
                ))

            ->add('field8', ChoiceType::class, array(
                'error_bubbling' => true,
                'required' => true,
                'placeholder' => 'Graviditetsundersøgelser på fødegangen, i jordemoderkonsultation, i klinikker, ambulatorium, svangreafdelinger, i hjemmet mm optælles.',
                'choices'  => array(
                    'Yes' => true,
                    'No' => false
                )
                ))

            ->add('field9', ChoiceType::class, array(
                'error_bubbling' => true,
                'required' => true,
                'placeholder' => 'Graviditetsundersøgelser på fødegangen, i jordemoderkonsultation, i klinikker, ambulatorium, svangreafdelinger, i hjemmet mm optælles.',
                'choices'  => array(
                    'Yes' => true,
                    'No' => false
                )
                ))

            ->add('field10', ChoiceType::class, array(
                'error_bubbling' => true,
                'required' => true,
                'placeholder' => 'Graviditetsundersøgelser på fødegangen, i jordemoderkonsultation, i klinikker, ambulatorium, svangreafdelinger, i hjemmet mm optælles.',
                'choices'  => array(
                    'Yes' => true,
                    'No' => false
                )
                ))
            ->add('submit', SubmitType::class, array(
                'label' => 'Create',
                'attr' => [
                    'class' => 'btn btn-success'
                ]
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