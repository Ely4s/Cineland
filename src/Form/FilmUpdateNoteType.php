<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilmUpdateNoteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $entity = $builder->getData();

        $builder

            ->add('note', HiddenType::class)
            ->add('offset', IntegerType::class, ['mapped'=>false,'label'=>'Valeur à ajouter à la note (actuellement à '.$entity->getNote().') : ', 'empty_data'=>0,])
            ->add('submit', SubmitType::class, ['label'=>'Augmenter/diminuer'])
            ->addEventListener(FormEvents::SUBMIT, function(FormEvent $event)
            {
                $note = $event->getForm()->getData()->getNote();
                $offset = $event->getForm()->get('offset')->getData();
                $event->getForm()->getData()->setNote($note+$offset);
            })
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults
        ([
            'oldNote'=> null
        ]);
    }
}
