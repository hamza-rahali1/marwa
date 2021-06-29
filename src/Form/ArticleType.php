<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre' , TextType::class , [ 'label' => false])
            ->add('contenu', TextareaType::class , [ 'label' => false])
            ->add('categorie' ,  ChoiceType::class ,[
                'label' => false,
                'placeholder' => '- Choisir Catégorie -',
                'choices'  => [
                    'FAPE' => 'FAPE' ,
                    'Private Equity' => 'Private Equity' ,
                    'Finances alternative' => 'Finances alternative',
                    'Media bourse' => 'Media bourse' ]] )
            ->add('created_at', DateType::class , [ 'label' => false,
            'required' => false ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
