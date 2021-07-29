<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* blockTemplate/header.twig */
class __TwigTemplate_5d21e9556e14dca27a9c5464622e5883f6cec41990263e1ffc8abde579e103a7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'header_icons' => [$this, 'block_header_icons'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<div class=\"header\">

    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getPathIfRouteExists("index"), "html", null, true);
        echo "\"><div class=\"header_title\">Cineland</div></a>

    ";
        // line 6
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 6), "attributes", [], "any", false, false, false, 6), "get", [0 => "_route"], "method", false, false, false, 6), "index"))) {
            // line 7
            echo "    ";
            $this->displayBlock('header_icons', $context, $blocks);
            // line 14
            echo "    ";
        }
        // line 15
        echo "
</div>
";
    }

    // line 7
    public function block_header_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <div class=\"header_icons\">
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getPathIfRouteExists("filmsMenu"), "html", null, true);
        echo "\"><img class=\"header_icon\" src=\"/image/film-solid.svg\"/></a>
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getPathIfRouteExists("genresMenu"), "html", null, true);
        echo "\"> <img class=\"header_icon\" src=\"/image/theater-masks-solid.svg\"/></a>
            <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getPathIfRouteExists("acteursMenu"), "html", null, true);
        echo "\"><img class=\"header_icon\" src=\"/image/user-tie-solid.svg\"/></a>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "blockTemplate/header.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 11,  80 => 10,  76 => 9,  73 => 8,  69 => 7,  63 => 15,  60 => 14,  57 => 7,  55 => 6,  50 => 4,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blockTemplate/header.twig", "/Users/elyas/Desktop/cineland/templates/blockTemplate/header.twig");
    }
}
