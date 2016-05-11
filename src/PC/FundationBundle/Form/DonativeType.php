<?php

namespace PC\FundationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DonativeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', ChoiceType::class, array('choices' => array('monetaria'=>'MONETARY', 'alimentos'=>'FOOD', 'otros'=>'OTHERS'), 'placeholder' => 'seleccione el tipo de donativo'))
            ->add('quantity', IntegerType::class)
            ->add('description', TextareaType::class)
            ->add('donor', TextType::class, array('required' => false))
            ->add('receivedAt', DateTimeType::class)
            ->add('save', SubmitType::class, array('label' => 'save donative'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PC\FundationBundle\Entity\Donative'
        ));
    }
}
