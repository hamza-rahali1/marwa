<?php

namespace App\Form;

use App\Entity\UtilisateurSearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UtilisateurSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom' ,TextType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'Nom']])
            ->add('prenom' ,TextType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'Prénom']])
            ->add('email' ,TextType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'Email']])
            ->add('tel' ,TextType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'Téléphone']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => UtilisateurSearch::class,
            'method' => 'GET' ,
            'csrf_protection' => false 
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
        
    
}
