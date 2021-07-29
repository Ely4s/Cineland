<?php

namespace App\Factory;

class ContainerWithTitleFactory
{
    const titleLabel = "title";

    public static function new(&$containerWithTitle, $title)
    {
        return $containerWithTitle[self::titleLabel] = $title;
    }
}