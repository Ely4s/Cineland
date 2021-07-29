<?php

namespace App\Validator\Constraints;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

class EntityExistValidator extends ConstraintValidator
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof EntityExist)
        {
            throw new UnexpectedTypeException($constraint, EntityExist::class);
        }

        if (null === $value || '' === $value)
        {
            return;
        }

        if($this->entityManager->getRepository("App\Entity\\".$constraint->entity)->findOneBy([$constraint->findBy=>$value]) == null)
        {
            $this->context  ->buildViolation($constraint->message)
                ->setParameter('{{ entity }}', strtolower($constraint->entity))
                ->setParameter('{{ value }}', $value)
                ->addViolation();
        }
    }
}
