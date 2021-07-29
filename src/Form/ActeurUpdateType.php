<?php

namespace App\Form;

use App\Entity\Acteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActeurUpdateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('nomPrenom', null, ['label' => 'Nom Prénom : '])
            ->add('dateNaissance', DateType::class, ['label' => 'Date de naissance : ', 'years' => range((new \DateTime())->format('1890'), (new \DateTime('now'))->format("Y"))])
            ->add('nationalite', TextType::class, ['label' => 'Nationalité : '])
            ->add('select', TextType::class, ['required'=>false, 'label'=>'---> Rechercher parmis les films : ','mapped'=>false,  'attr'   => ['class'   => 'select']])
            ->add('films', null, ['label'=>'Filmographie : ', 'expanded'=>true, 'by_reference' => false, 'attr' => ['class'   => 'selectable']])
            ->add('submit', SubmitType::class, ['label' => 'Modifier'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Acteur::class,
        ]);
    }
}
