<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class EntityHasNotChild extends Constraint
{
    public $message = 'Ce {{ entity }} est encore en relation avec au moins un {{ child }}';
    public $entity;
    public $findBy;
    public $function;

    public function validatedBy()
    {
        return EntityHasNotChildValidator::class;
    }
}
