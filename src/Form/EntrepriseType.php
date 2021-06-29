<?php

namespace App\Form;

use App\Entity\Entreprise;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class EntrepriseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codeIcbGeneral', TextType::class , [ 'label' => false])
            ->add('secteurGeneral', TextType::class , [ 'label' => false])
            ->add('codeICB', TextType::class , [ 'label' => false])
            ->add('secteur', TextType::class , [ 'label' => false])
            ->add('codeISIN', TextType::class , [ 'label' => false])
            ->add('libelle', TextType::class , [ 'label' => false])
            ->add('titresAdmis', NumberType::class , [ 'label' => false])
            ->add('titresEmiss', NumberType::class , [ 'label' => false])
            ->add('score', NumberType::class , [ 'label' => false])
            ->add('rnpg', NumberType::class , [ 'label' => false])
            ->add('fpnds', NumberType::class , [ 'label' => false])
            ->add('divvv', NumberType::class , [ 'label' => false])
            ->add('coursAu', NumberType::class , [ 'label' => false])
            ->add('coursActuel', NumberType::class , [ 'label' => false])
            ->add('cours_at',  DateType::class , [ 'label' => false,
            'required' => false ] )
            ->add('ptForte', TextareaType::class , [ 'label' => false])
            ->add('ptFaible', TextareaType::class , [ 'label' => false])
            ->add('actualite', TextareaType::class , [ 'label' => false])
            ->add('analyse', TextareaType::class , [ 'label' => false])
            ->add('activite', TextareaType::class , [ 'label' => false])
            ->add('mecaDeProfit', TextareaType::class , [ 'label' => false])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Entreprise::class,
        ]);
    }
}
