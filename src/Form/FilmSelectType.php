<?php

namespace App\Form;

use App\Validator\Constraints\EntityExist;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class FilmSelectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, ['label'=>'Titre : ', 'constraints'=>[new NotBlank(["message"=>"Le titre doit être renseigné"]), new EntityExist(["entity"=>"Film", "findBy"=>"titre"])]])
            ->add('submit', SubmitType::class, ['label' => 'Selectioner'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
        ]);
    }
}
