<?php

namespace App\Form;

use App\Entity\ArticleSearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ArticleSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre' , TextType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'Titre']])
            ->add('categorie' , ChoiceType::class ,[
                'label' => false,
                'required' => false ,
                'placeholder' => '- Choisir Catégorie -',
                'choices'  => [
                    'FAPE' => 'FAPE' ,
                    'Private Equity' => 'Private Equity' ,
                    'Finances alternative' => 'Finances alternative',
                    'Media bourse' => 'Media bourse' ]] )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ArticleSearch::class,
            'method' => 'GET' ,
            'csrf_protection' => false 
        ]);
    }

        public function getBlockPrefix()
    {
        return '';
    }
}
