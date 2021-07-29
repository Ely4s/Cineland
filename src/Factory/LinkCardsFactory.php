<?php

namespace App\Factory;

class LinkCardsFactory
{
    const titleLabel = "title";
    const imageNameLabel = "imageName";
    const routeLabel = "route";
    const routeArgsLabel = "routeArgs";

    public static function add(&$linkCards, $title, $imageName, $route, $routeArgs=null)
    {
        $linkCards[] = [self::titleLabel=>$title, self::imageNameLabel=>$imageName, self::routeLabel=>$route, self::routeArgsLabel=>$routeArgs];
    }
}
