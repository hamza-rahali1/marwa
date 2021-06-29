<?php

namespace App\Form;

use App\Entity\OPCVM;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class OPCVMType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle' ,  TextType::class , [ 'label' => false])
            ->add('societe' ,  TextType::class , [ 'label' => false])
            ->add('categorie' ,  ChoiceType::class ,[
                'label' => false,
                'placeholder' => '- Choisir Catégorie -',
                'choices'  => [
                    'Obligatoire' => 'Obligatoire' ,
                    'Mixtes' => 'Mixtes' ,
                    'Actions' => 'Actions']] )
            ->add('type' ,  ChoiceType::class ,[
                'label' => false,
                'placeholder' => '- Choisir Type -',
                'choices'  => [
                    'Capitalisation' => 'Capitalisation' ,
                    'Distribution' => 'Distribution']] )
            ->add('orientation' ,  ChoiceType::class ,[
                'label' => false,
                'placeholder' => '- Choisir Orientation -',
                'choices'  => [
                    'Obligataire' => 'Obligataire' ,
                    'Dynamique' => 'Dynamique' ,
                    'Equilibré' => 'Equilibré' ,
                    'Prudent' => 'Prudent' ,
                    'CEA' => 'CEA' ]] )
            ->add('vlF' ,  NumberType::class , [ 'label' => false])
            ->add('vlAu' , NumberType::class , [ 'label' => false])
            ->add('an' , NumberType::class , [ 'label' => false])
            ->add('divvv' , NumberType::class , [ 'label' => false])
            ->add('_dateF' , DateType::class , [ 'label' => false ])
            ->add('_dateAu' , DateType::class , [ 'label' => false ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => OPCVM::class,
        ]);
    }
}
