<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class DateBetween extends Constraint
{
    public $message = "La date doit être comprise entre le {{ dateMin }} et le {{ dateMax }}";
    public $dateMin;
    public $dateMax;

    public function validatedBy()
    {
        return DateBetweenValidator::class;
    }
}