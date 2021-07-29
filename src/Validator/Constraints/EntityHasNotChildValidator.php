<?php

namespace App\Validator\Constraints;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

class EntityHasNotChildValidator extends ConstraintValidator
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof EntityHasNotChild)
        {
            throw new UnexpectedTypeException($constraint, EntityHasNotChild::class);
        }

        if (null === $value || '' === $value)
        {
            return;
        }

        $entity = $this->entityManager->getRepository('App\Entity\\'.$constraint->entity)->findOneBy([$constraint->findBy => $value]);

        $function = $constraint->function;
        $childs = $entity->$function();

        if($childs->count() != 0)
        {
            $array = explode('\\',get_class($childs[0]));
            $childClass = end($array);

            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ entity }}', strtolower($constraint->entity))
                ->setParameter('{{ child }}', strtolower($childClass))
                ->addViolation();
        }
    }
}
