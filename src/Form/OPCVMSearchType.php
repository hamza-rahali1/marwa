<?php

namespace App\Form;

use App\Entity\OPCVMSearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class OPCVMSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle' , TextType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'Libellé']])
            ->add('societe' ,TextType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'Société de gestion']])
            ->add('categorie',  ChoiceType::class ,[
                'required' => false ,
                'label' => false,
                'placeholder' => '- Choisir Catégorie -',
                'choices'  => [
                    'Obligatoire' => 'Obligatoire' ,
                    'Mixtes' => 'Mixtes' ,
                    'Actions' => 'Actions']] )
            ->add('type',  ChoiceType::class ,[
                'label' => false,
                'required' => false ,
                'placeholder' => '- Choisir Type -',
                'choices'  => [
                    'Capitalisation' => 'Capitalisation' ,
                    'Distribution' => 'Distribution']] )
            ->add('orientation',  ChoiceType::class ,[
                'label' => false,
                'required' => false ,
                'placeholder' => '- Choisir Orientation -',
                'choices'  => [
                    'Obligataire' => 'Obligataire' ,
                    'Dynamique' => 'Dynamique' ,
                    'Equilibré' => 'Equilibré' ,
                    'Prudent' => 'Prudent' ,
                    'CEA' => 'CEA' ]] )
            ->add('vlF', NumberType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'VL au fin année']])
            ->add('vlAu' , NumberType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'VL']])
            ->add('an', NumberType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'AN']])
            ->add('divvv', NumberType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'Div']])
            ->add('perf', NumberType::class , [ 'label' => false,
            'required' => false ,
            'attr' => [ 'placeholder' => 'Performance YTD']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => OPCVMSearch::class,
            'method' => 'GET' ,
            'csrf_protection' => false 
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}
