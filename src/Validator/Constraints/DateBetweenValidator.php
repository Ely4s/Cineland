<?php

namespace App\Validator\Constraints;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

class DateBetweenValidator extends ConstraintValidator
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof DateBetween)
        {
            throw new UnexpectedTypeException($constraint, DateBetween::class);
        }

        if (null === $value || '' === $value)
        {
            return;
        }

        if($constraint->dateMin[0] == '?')
        {
            $dateParam = substr($constraint->dateMin, 1);
            $dateMin = new \DateTime($dateParam);
        }
        else
        {
            $dateMin = \DateTime::createFromFormat('d/m/Y',$constraint->dateMin);
        }

        if($constraint->dateMax[0] == '?')
        {
            $dateParam = substr($constraint->dateMax, 1);
            $dateMax = new \DateTime($dateParam);
        }
        else
        {
            $dateMax = \DateTime::createFromFormat('d/m/Y',$constraint->dateMin);
        }

        $date = \DateTime::createFromFormat('d/m/Y', $value->format('d/m/Y'));

        if(!($date->getTimestamp() >= $dateMin->getTimestamp() && $date->getTimestamp() <= $dateMax->getTimestamp()))
        {
            $this->context  ->buildViolation($constraint->message)
                ->setParameter('{{ dateMin }}',$dateMin->format('d/m/Y'))
                ->setParameter('{{ dateMax }}',$dateMax->format('d/m/Y'))
                ->addViolation();
        }
    }
}
