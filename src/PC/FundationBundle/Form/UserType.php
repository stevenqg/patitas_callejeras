<?php

namespace PC\FundationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('lastName', TextType::class)
            ->add('age', IntegerType::class)
            ->add('identificationNumber', textType::class)
            ->add('address', textType::class)
            ->add('phone_number', textType::class)
            ->add('email', textType::class)
           /** ->add('petid', textType::class, array('mapped' => false)) */
            ->add('save', SubmitType::class, array('label' => 'save user'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PC\FundationBundle\Entity\User'
        ));
    }
}
