<?php

namespace App\Form;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class StringToDateTimeTransformer implements DataTransformerInterface
{
    function reverseTransform ($string) : ?\DateTimeInterface
    {
        if($string == null || !isset($string))
        {
            return null;
        }

        $datetime = \DateTime::createFromFormat('d/m/Y',$string);

        if ($datetime == false || !preg_match('/^(0[1-9]|[12][0-9]|3[01])[\/](0[1-9]|1[012])[\/]((189[0-9])|((19|20)[0-9][0-9]))$/', $string))
        {
            $failure = new TransformationFailedException();

            $failure->setInvalidMessage('La date saisie ({{ value }}) est invalide. Entrez une date sous la forme : jj/mm/aaaa', [
                '{{ value }}' => $string,
            ]);

            throw $failure;
        }
        else
        {
            return $datetime;
        }
    }

    function transform ($datetime) : string
    {
        if ($datetime == null || !isset($datetime)) return "";

        if (\DateTime::createFromFormat('d/m/Y', $datetime->format('d/m/Y')) == false)
        {
            return "";
        }

        return $datetime->format('d/m/Y');

    }
}
