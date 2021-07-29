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

/* blockTemplate/linkCards.twig */
class __TwigTemplate_2a9eacd516b80de5be89f5af1d9e166be02e182049f54d72fd6e1135be6459c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'linkCards' => [$this, 'block_linkCards'],
            'linkCards_link' => [$this, 'block_linkCards_link'],
            'linkCards_itemTitle' => [$this, 'block_linkCards_itemTitle'],
            'linkCards_Image' => [$this, 'block_linkCards_Image'],
            'linkCards_itemImageName' => [$this, 'block_linkCards_itemImageName'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('linkCards', $context, $blocks);
    }

    public function block_linkCards($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<div class=\"linkCards\">

    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["linkCards"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["linkCards_item"]) {
            // line 5
            echo "        <a href=\"";
            $this->displayBlock('linkCards_link', $context, $blocks);
            echo "\" class=\"linkCards_item\">
            <div class=\"linkCards_itemTitle\">";
            // line 6
            $this->displayBlock('linkCards_itemTitle', $context, $blocks);
            echo "</div>
            ";
            // line 7
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["linkCards_item"], "imageName", [], "any", false, false, false, 7), null))) {
                // line 8
                echo "            ";
                $this->displayBlock('linkCards_Image', $context, $blocks);
                // line 9
                echo "            ";
            }
            // line 10
            echo "        </a>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linkCards_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
</div>
";
    }

    // line 5
    public function block_linkCards_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getPathIfRouteExists(twig_get_attribute($this->env, $this->source, ($context["linkCards_item"] ?? null), "route", [], "any", false, false, false, 5), twig_get_attribute($this->env, $this->source, ($context["linkCards_item"] ?? null), "routeArgs", [], "any", false, false, false, 5)), "html", null, true);
    }

    // line 6
    public function block_linkCards_itemTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["linkCards_item"] ?? null), "title", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["linkCards_item"] ?? null), "title", [], "any", false, false, false, 6), "")) : ("")), "html", null, true);
    }

    // line 8
    public function block_linkCards_Image($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<div class=\"linkCards_itemImage\"><img src=\"/image/";
        $this->displayBlock('linkCards_itemImageName', $context, $blocks);
        echo "\" alt=\"\"/></div>";
    }

    public function block_linkCards_itemImageName($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["linkCards_item"] ?? null), "imageName", [], "any", false, false, false, 8), "html", null, true);
    }

    public function getTemplateName()
    {
        return "blockTemplate/linkCards.twig";
    }

    public function getDebugInfo()
    {
        return array (  122 => 8,  115 => 6,  108 => 5,  102 => 12,  87 => 10,  84 => 9,  81 => 8,  79 => 7,  75 => 6,  70 => 5,  53 => 4,  49 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blockTemplate/linkCards.twig", "/Users/elyas/Desktop/cineland/templates/blockTemplate/linkCards.twig");
    }
}
