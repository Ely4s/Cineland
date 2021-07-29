<?php

namespace App\Twig;

use Symfony\Component\Routing\RouterInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    /**
     * @var RouterInterface
     */
    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            //new TwigFilter('filter_name', [$this, 'doSomething']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('getPathIfRouteExists', [$this, 'getPathIfRouteExists']),
        ];
    }

    function getPathIfRouteExists($name, $param=null)
    {
        //path()
        if($this->router->getRouteCollection()->get($name))
        {
            if($param) return $this->router->generate($name, $param);
            else return $this->router->generate($name);
        }
        else
        {
            return "";
        }
    }
}
