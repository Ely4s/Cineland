<?php

namespace App\Form;

use App\Validator\Constraints\EntityExist;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Expression;
use Symfony\Component\Validator\Constraints\NotBlank;

class FilmHaveTheseTwoActorsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomPrenom1', null, ['label'=>'Nom Prénom (1) : ', 'constraints'=>[new NotBlank(["message"=>"Le nom prenom (1) doit être renseigné"]), new EntityExist(["entity"=>"Acteur", "findBy"=>"nomPrenom"])]])
            ->add('nomPrenom2', null, ['label'=>'Nom Prénom (2) : ','constraints'=>[new NotBlank(["message"=>"Le nom prenom (2) doit être renseigné"]), new EntityExist(["entity"=>"Acteur", "findBy"=>"nomPrenom"])]])
            ->add('submit', SubmitType::class, ['label' => 'Rechercher'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'constraints' =>
                [
                    new Expression
                    ([
                        'expression' => '( this["nomPrenom1"].getData() != this["nomPrenom2"].getData() ) || ( this["nomPrenom1"].getData() == this["nomPrenom2"].getData() && this["nomPrenom2"].getData() == "" )',
                        'message' => 'Les deux saisies sont identiques'
                    ])
                ]
        ]);
    }
}
