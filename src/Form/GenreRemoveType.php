<?php

namespace App\Form;

use App\Validator\Constraints\EntityHasNotChild;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GenreRemoveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('nom', HiddenType::class, ['constraints'=>[new EntityHasNotChild(['entity'=>'Genre', "findBy"=>'nom', 'function'=>'getFilms'])]])
            ->add('submit', SubmitType::class, ['label' => 'Supprimer'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
        ]);
    }
}
