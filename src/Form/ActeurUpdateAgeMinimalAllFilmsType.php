<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Positive;

class ActeurUpdateAgeMinimalAllFilmsType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('offset', NumberType::class, ['required'=>false, 'invalid_message'=>'La valeur doit être un nombre postif', 'label'=>'Valeur à ajouter à tous les âges minimums des films où l\'acteur apparait : ', 'empty_data'=>"1", 'constraints'=>new Positive(["message"=>"La valeur doit être positive"])])
            ->add('submit', SubmitType::class, ['label'=>'Augmenter/diminuer'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults
        ([
        ]);
    }
}
