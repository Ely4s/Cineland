<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class EntityExist extends Constraint
{
    public $message = "\"{{ value }}\" ne correspond à aucun {{ entity }}";
    public $entity;
    public $findBy;

    public function validatedBy()
    {
        return EntityExistValidator::class;
    }
}