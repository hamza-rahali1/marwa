<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom' ,TextType::class , [ 'label' => false])
            ->add('prenom' ,TextType::class , [ 'label' => false])
            ->add('email' ,TextType::class , [ 'label' => false])
            ->add('tel' ,TextType::class , [ 'label' => false])
            ->add('password' , PasswordType::class , [ 'label' => false])
            ->add('role' , ChoiceType::class ,[
                'label' => false,
                'placeholder' => '- Choisir Rôle -',
                'choices'  => [
                    'Admin' => 'ROLE_ADMIN' ,
                    'Client' => 'ROLE_USER']] )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
