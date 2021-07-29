<?php

namespace App\Factory;

class EntitiesOnFieldResultFactory
{
    const entitiesLabel = "entities";
    const routeLabel = "route";
    const routeParamLabel = "routeParam";
    const messageIfEmptyLabel = "messageIfEmpty";

    public static function new (&$array, $entities, $route, $routeParam, $messageIfEmpty) : array
    {
        $array[self::entitiesLabel] = $entities;
        $array[self::routeLabel] = $route;
        $array[self::routeParamLabel] = $routeParam;
        $array[self::messageIfEmptyLabel] = $messageIfEmpty;

        return $array;
    }
}