<?php

namespace PC\FundationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PetType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('age', IntegerType::class)
            ->add('species', ChoiceType::class, array('choices' => array('canino'=>'CANINE', 'felino'=>'FELINE'), 'placeholder' => 'especie de la mascota'))
            ->add('race', TextType::class)
            ->add('colour', TextType::class)
            ->add('gender', ChoiceType::class, array('choices' => array('macho'=>'MALE', 'hembra'=>'FEMALE'), 'placeholder' => 'genero de la mascota'))
            ->add('isVacunated', CheckboxType::class)
            ->add('isSterilized', CheckboxType::class)
            ->add('save', SubmitType::class, array('label' => 'save pet'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PC\FundationBundle\Entity\Pet'
        ));
    }
}
