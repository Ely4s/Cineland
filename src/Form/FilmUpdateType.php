<?php

namespace App\Form;

use App\Entity\Film;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilmUpdateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', null, ['label' => 'Titre : '])
            ->add('duree', null, ['label' => 'Durée (en minute) : '])
            ->add('dateSortie', null, ['label' => 'Date de sortie : ', 'years' => range((new \DateTime())->format('1890'), date('Y')+15)])
            ->add('note', ChoiceType::class, ['label' => 'Note : ', 'choices'=>Film::getNoteType(), 'invalid_message'=>'La note saisie est invalide', 'multiple'=>false])
            ->add('ageMinimal', ChoiceType::class, ['label' => 'Âge minimal : ', 'choices'=>Film::getAgeMinimalType(), 'invalid_message'=>'La signalétique jeunesse saisie n\'existe pas', 'multiple'=>false])
            ->add('genre', null, ['label'=>'Genres : '])
            ->add('select', TextType::class, ['label'=>'---> Rechercher parmis les acteurs : ','mapped'=>false, 'required'=>false, 'attr'   => ['class'   => 'select']])
            ->add('acteurs', null, ['label'=>'Casting : ', 'expanded'=>true, 'by_reference' => false, 'attr' => ['class'   => 'selectable']])
            ->add('submit', SubmitType::class, ['label'=>'Modifier'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Film::class,
        ]);
    }
}
