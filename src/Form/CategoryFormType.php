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


//        in 'choices' there are no more "true" and "false" as false was creating "" ( null value ) which is not accepted by DB
        // so we have to keep that this way as it is in here
        // Here is also submit button created to not mess with a few forms on one webpage
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
                    'year' => date("Y", time()),
                    'month' => date("M", time()),
                    'day' => date("d", time())
                ]
            ))
            ->add('field1', ChoiceType::class, array(
                'error_bubbling' => true,
                'required' => true,
                'placeholder' => 'Graviditetsundersøgelser, hvor den studerende skal have haft hænderne på maven og varetaget dele af samtalen.',
                'choices'  => array(
                    'Yes' => 1,
                    'No' => 0
                ),
                ))

            ->add('field2', ChoiceType::class, array(
                'error_bubbling' => true,
                'required' => true,
                'placeholder' => 'Graviditetsundersøgelser på fødegangen, i jordemoderkonsultation, i klinikker, ambulatorium, svangreafdelinger, i hjemmet mm optælles.',
                'choices'  => array(
                    'Yes' => 1,
                    'No' => 0
                ),
                ))

            ->add('field3', ChoiceType::class, array(
                'error_bubbling' => true,
                'required' => true,
                'placeholder' => 'Graviditetsundersøgelser, hvor den studerende skal have haft hænderne på maven og varetaget dele af samtalen i undersøgelser med en af nedenstående komplikationer',
                'choices'  => array(
                    'Yes' => 1,
                    'No' => 0
                )
                ))

            ->add('field4', ChoiceType::class, array(
                'error_bubbling' => true,
                'required' => true,
                'placeholder' => 'Graviditetsundersøgelser på fødegangen, i jordemoderkonsultation, i klinikker, ambulatorium, svangreafdelinger, i hjemmet mm optælles',
                'choices'  => array(
                    'Yes' => 1,
                    'No' => 0
                )
                ))

            ->add('field5', ChoiceType::class, array(
                'error_bubbling' => true,
                'required' => true,
                'placeholder' => 'Graviditetsundersøgelser, hvor den studerende skal have haft hænderne på maven og varetaget dele af samtalen i undersøgelser med en af nedenstående komplikationer',
                'choices'  => array(
                    'Yes' => 1,
                    'No' => 0
                )
                ))

            ->add('field6', ChoiceType::class, array(
                'error_bubbling' => true,
                'required' => true,
                'placeholder' => 'Graviditetsundersøgelser på fødegangen, i jordemoderkonsultation, i klinikker, ambulatorium, svangreafdelinger, i hjemmet mm optælles.',
                'choices'  => array(
                    'Yes' => 1,
                    'No' => 0
                )
                ))

            ->add('field7', ChoiceType::class, array(
                'error_bubbling' => true,
                'required' => true,
                'placeholder' => 'Graviditetsundersøgelser på fødegangen, i jordemoderkonsultation, i klinikker, ambulatorium, svangreafdelinger, i hjemmet mm optælles.',
                'choices'  => array(
                    'Yes' => 1,
                    'No' => 0
                )
                ))

            ->add('field8', ChoiceType::class, array(
                'error_bubbling' => true,
                'required' => true,
                'placeholder' => 'Graviditetsundersøgelser på fødegangen, i jordemoderkonsultation, i klinikker, ambulatorium, svangreafdelinger, i hjemmet mm optælles.',
                'choices'  => array(
                    'Yes' => 1,
                    'No' => 0
                )
                ))

            ->add('field9', ChoiceType::class, array(
                'error_bubbling' => true,
                'required' => true,
                'placeholder' => 'Graviditetsundersøgelser på fødegangen, i jordemoderkonsultation, i klinikker, ambulatorium, svangreafdelinger, i hjemmet mm optælles.',
                'choices'  => array(
                    'Yes' => 1,
                    'No' => 0
                )
                ))

            ->add('field10', ChoiceType::class, array(
                'error_bubbling' => true,
                'required' => 1,
                'placeholder' => 'Graviditetsundersøgelser på fødegangen, i jordemoderkonsultation, i klinikker, ambulatorium, svangreafdelinger, i hjemmet mm optælles.',
                'choices'  => array(
                    'Yes' => true,
                    'No' => 0
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