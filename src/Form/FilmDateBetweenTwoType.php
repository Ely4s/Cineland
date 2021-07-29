<?php

namespace App\Form;

use App\Validator\Constraints\DateBetween;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Expression;
use Symfony\Component\Validator\Constraints\NotBlank;

class FilmDateBetweenTwoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateSortieInf', DateType::class, ['label'=>'Date de sortie (inférieure) : ','constraints'=>[new NotBlank(["message"=>"La date de sortie inférieure doit être renseigné"])], 'data'=>(new \DateTime('now'))->setDate(1890,1,1), 'years' => range((new \DateTime())->format('1890'), date('Y')+15)])
            ->add('dateSortieSup', DateType::class, ['label'=>'Date de sortie (supérieure) : ', 'constraints'=>[new NotBlank(["message"=>"La date de sortie supérieure doit être renseigné"])], 'data'=>new \DateTime('now'), 'years' => range((new \DateTime())->format('1890'), date('Y')+15)])
            ->add('submit', SubmitType::class, ['label'=>'Afficher'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'constraints' =>
                [
                    new Expression
                    ([
                        'expression' => 'this["dateSortieInf"].getData() < this["dateSortieSup"].getData()',
                        'message' => 'La première date doit être inférieure à la seconde'
                    ])
                ]
        ]);
    }
}
