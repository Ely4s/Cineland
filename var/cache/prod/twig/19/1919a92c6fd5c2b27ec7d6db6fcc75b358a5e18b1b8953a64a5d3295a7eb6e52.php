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

/* pageTemplate/entitiesOneFieldResult.html.twig */
class __TwigTemplate_46ad06eff1d98827ed31362a7b894476ba78232ce2a478a44adcc93f5d406349 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'CONTENT' => [$this, 'block_CONTENT'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "pageTemplate/entitiesOneFieldResult.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_CONTENT($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    ";
        // line 5
        $context["linkCards"] = [];
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entitiesOneFieldResult"] ?? null), "entities", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 7
            echo "        ";
            $context["linkCards"] = twig_array_merge(($context["linkCards"] ?? null), [0 => ["title" => twig_get_attribute($this->env, $this->source, $context["entity"], twig_get_attribute($this->env, $this->source, ($context["entitiesOneFieldResult"] ?? null), "routeParam", [], "any", false, false, false, 7), [], "any", false, false, false, 7), "imageName" => null, "route" => twig_get_attribute($this->env, $this->source, ($context["entitiesOneFieldResult"] ?? null), "route", [], "any", false, false, false, 7), "routeArgs" => [twig_get_attribute($this->env, $this->source, ($context["entitiesOneFieldResult"] ?? null), "routeParam", [], "any", false, false, false, 7) => twig_get_attribute($this->env, $this->source, $context["entity"], twig_get_attribute($this->env, $this->source, ($context["entitiesOneFieldResult"] ?? null), "routeParam", [], "any", false, false, false, 7), [], "any", false, false, false, 7)]]]);
            // line 8
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
    ";
        // line 10
        $context["form"] = ((array_key_exists("form", $context)) ? (_twig_default_filter(($context["form"] ?? null), null)) : (null));
        // line 11
        echo "
    ";
        // line 12
        $this->loadTemplate("pageTemplate/entitiesOneFieldResult.html.twig", "pageTemplate/entitiesOneFieldResult.html.twig", 12, "1427049908")->display($context);
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "pageTemplate/entitiesOneFieldResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  77 => 12,  74 => 11,  72 => 10,  69 => 9,  63 => 8,  60 => 7,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pageTemplate/entitiesOneFieldResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/entitiesOneFieldResult.html.twig");
    }
}


/* pageTemplate/entitiesOneFieldResult.html.twig */
class __TwigTemplate_46ad06eff1d98827ed31362a7b894476ba78232ce2a478a44adcc93f5d406349___1427049908 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'containerWithTitle_content' => [$this, 'block_containerWithTitle_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "blockTemplate/containerWithTitle.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("blockTemplate/containerWithTitle.twig", "pageTemplate/entitiesOneFieldResult.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_containerWithTitle_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "
        ";
        // line 15
        if ((array_key_exists("form", $context) &&  !(null === ($context["form"] ?? null)))) {
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
            echo "<br>";
        }
        // line 16
        echo "
        ";
        // line 17
        if ((((null === ($context["form"] ?? null)) && (0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entitiesOneFieldResult"] ?? null), "entities", [], "any", false, false, false, 17)), 0))) || (( !(null === ($context["form"] ?? null)) && (0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entitiesOneFieldResult"] ?? null), "entities", [], "any", false, false, false, 17)), 0))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 17), "submitted", [], "any", false, false, false, 17), true))))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entitiesOneFieldResult"] ?? null), "messageIfEmpty", [], "any", false, false, false, 17), "html", null, true);
        }
        // line 18
        echo "        ";
        $this->loadTemplate("blockTemplate/linkCards.twig", "pageTemplate/entitiesOneFieldResult.html.twig", 18)->display($context);
        // line 19
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "pageTemplate/entitiesOneFieldResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 19,  155 => 18,  151 => 17,  148 => 16,  143 => 15,  140 => 14,  136 => 13,  125 => 12,  79 => 22,  77 => 12,  74 => 11,  72 => 10,  69 => 9,  63 => 8,  60 => 7,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pageTemplate/entitiesOneFieldResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/entitiesOneFieldResult.html.twig");
    }
}
