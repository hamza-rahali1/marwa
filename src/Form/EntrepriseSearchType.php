<?php

namespace App\Form;

use App\Entity\EntrepriseSearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class EntrepriseSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle', TextType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'Libellé']])
            ->add('codeIcbGeneral', TextType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'Code ICB Général']])
            ->add('secteurGeneral', TextType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'Secteur Général']])
            ->add('codeICB', TextType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'Code ICB']])
            ->add('secteur', TextType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'Secteur']])
            ->add('codeISIN', TextType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'Code ISIN']])
            ->add('cbAdmise', NumberType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'CB Admise']])
            ->add('cbTotale', NumberType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'CB Totale']])
            ->add('score', NumberType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'Score']])
            ->add('coursAu', NumberType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'Cours Au']])
            ->add('coursActuel', NumberType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'Cours Actuel']])
            ->add('per', NumberType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'PER']])
            ->add('pbv', NumberType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'PBV']])
            ->add('divYield', NumberType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'Div Yield']])
            ->add('performance', NumberType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'Performance']])
            ->add('option', ChoiceType::class ,[
                'label' => false,
                'required' => false ,
                'placeholder' => '- Choisir Option -',
                'choices'  => [
                    'Achat' => 'Achat' ,
                    'Accumuler' => 'Accumuler' ,
                    'Alléger' => 'Alléger']])



        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => EntrepriseSearch::class,
            'method' => 'GET' ,
            'csrf_protection' => false 
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}
