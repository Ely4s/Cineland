<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class FilmDateInfToType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateSortie', DateType::class, ['label'=>'Date de sortie : ','constraints'=>[new NotBlank(["message"=>"La date de sortie doit être renseigné"])], 'data'=>(new \DateTime('now')), 'years' => range((new \DateTime())->format('1890'), date('Y')+15)])
            ->add('submit', SubmitType::class, ['label'=>'Afficher'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
        ]);
    }
}
