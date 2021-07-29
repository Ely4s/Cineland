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
class __TwigTemplate_ba48efc6c8a01ea724cd8fb84bb88bd53a8173adbdc280405a8fe568af132b05 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTemplate/entitiesOneFieldResult.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTemplate/entitiesOneFieldResult.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pageTemplate/entitiesOneFieldResult.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_CONTENT($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "CONTENT"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "CONTENT"));

        // line 4
        echo "
    ";
        // line 5
        $context["linkCards"] = [];
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entitiesOneFieldResult"]) || array_key_exists("entitiesOneFieldResult", $context) ? $context["entitiesOneFieldResult"] : (function () { throw new RuntimeError('Variable "entitiesOneFieldResult" does not exist.', 6, $this->source); })()), "entities", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 7
            echo "        ";
            $context["linkCards"] = twig_array_merge((isset($context["linkCards"]) || array_key_exists("linkCards", $context) ? $context["linkCards"] : (function () { throw new RuntimeError('Variable "linkCards" does not exist.', 7, $this->source); })()), [0 => ["title" => twig_get_attribute($this->env, $this->source, $context["entity"], twig_get_attribute($this->env, $this->source, (isset($context["entitiesOneFieldResult"]) || array_key_exists("entitiesOneFieldResult", $context) ? $context["entitiesOneFieldResult"] : (function () { throw new RuntimeError('Variable "entitiesOneFieldResult" does not exist.', 7, $this->source); })()), "routeParam", [], "any", false, false, false, 7), [], "any", false, false, false, 7), "imageName" => null, "route" => twig_get_attribute($this->env, $this->source, (isset($context["entitiesOneFieldResult"]) || array_key_exists("entitiesOneFieldResult", $context) ? $context["entitiesOneFieldResult"] : (function () { throw new RuntimeError('Variable "entitiesOneFieldResult" does not exist.', 7, $this->source); })()), "route", [], "any", false, false, false, 7), "routeArgs" => [twig_get_attribute($this->env, $this->source, (isset($context["entitiesOneFieldResult"]) || array_key_exists("entitiesOneFieldResult", $context) ? $context["entitiesOneFieldResult"] : (function () { throw new RuntimeError('Variable "entitiesOneFieldResult" does not exist.', 7, $this->source); })()), "routeParam", [], "any", false, false, false, 7) => twig_get_attribute($this->env, $this->source, $context["entity"], twig_get_attribute($this->env, $this->source, (isset($context["entitiesOneFieldResult"]) || array_key_exists("entitiesOneFieldResult", $context) ? $context["entitiesOneFieldResult"] : (function () { throw new RuntimeError('Variable "entitiesOneFieldResult" does not exist.', 7, $this->source); })()), "routeParam", [], "any", false, false, false, 7), [], "any", false, false, false, 7)]]]);
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
        $context["form"] = ((array_key_exists("form", $context)) ? (_twig_default_filter((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), null)) : (null));
        // line 11
        echo "
    ";
        // line 12
        $this->loadTemplate("pageTemplate/entitiesOneFieldResult.html.twig", "pageTemplate/entitiesOneFieldResult.html.twig", 12, "1638098996")->display($context);
        // line 22
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  97 => 22,  95 => 12,  92 => 11,  90 => 10,  87 => 9,  81 => 8,  78 => 7,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block CONTENT %}

    {% set linkCards = [] %}
    {% for entity in entitiesOneFieldResult.entities %}
        {% set linkCards = linkCards|merge([{ 'title': (attribute(entity,entitiesOneFieldResult.routeParam)), 'imageName' : null, 'route' : (entitiesOneFieldResult.route), 'routeArgs' : { (entitiesOneFieldResult.routeParam) : (attribute(entity,entitiesOneFieldResult.routeParam)) } }]) %}
    {% endfor %}

    {% set form = form|default(null) %}

    {% embed 'blockTemplate/containerWithTitle.twig' %}
    {% block containerWithTitle_content %}

        {% if form is defined and form is not null %}{{ form(form) }}<br>{% endif %}

        {% if ( form is null and entitiesOneFieldResult.entities|length == 0 ) or ( form is not null and entitiesOneFieldResult.entities|length == 0 and form.vars.submitted == true ) %}{{ entitiesOneFieldResult.messageIfEmpty }}{% endif %}
        {% include 'blockTemplate/linkCards.twig' %}

    {% endblock %}
    {% endembed %}

{% endblock %}", "pageTemplate/entitiesOneFieldResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/entitiesOneFieldResult.html.twig");
    }
}


/* pageTemplate/entitiesOneFieldResult.html.twig */
class __TwigTemplate_ba48efc6c8a01ea724cd8fb84bb88bd53a8173adbdc280405a8fe568af132b05___1638098996 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTemplate/entitiesOneFieldResult.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTemplate/entitiesOneFieldResult.html.twig"));

        $this->parent = $this->loadTemplate("blockTemplate/containerWithTitle.twig", "pageTemplate/entitiesOneFieldResult.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_containerWithTitle_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "containerWithTitle_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "containerWithTitle_content"));

        // line 14
        echo "
        ";
        // line 15
        if ((array_key_exists("form", $context) &&  !(null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })())))) {
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form');
            echo "<br>";
        }
        // line 16
        echo "
        ";
        // line 17
        if ((((null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })())) && (0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entitiesOneFieldResult"]) || array_key_exists("entitiesOneFieldResult", $context) ? $context["entitiesOneFieldResult"] : (function () { throw new RuntimeError('Variable "entitiesOneFieldResult" does not exist.', 17, $this->source); })()), "entities", [], "any", false, false, false, 17)), 0))) || (( !(null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })())) && (0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entitiesOneFieldResult"]) || array_key_exists("entitiesOneFieldResult", $context) ? $context["entitiesOneFieldResult"] : (function () { throw new RuntimeError('Variable "entitiesOneFieldResult" does not exist.', 17, $this->source); })()), "entities", [], "any", false, false, false, 17)), 0))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "submitted", [], "any", false, false, false, 17), true))))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entitiesOneFieldResult"]) || array_key_exists("entitiesOneFieldResult", $context) ? $context["entitiesOneFieldResult"] : (function () { throw new RuntimeError('Variable "entitiesOneFieldResult" does not exist.', 17, $this->source); })()), "messageIfEmpty", [], "any", false, false, false, 17), "html", null, true);
        }
        // line 18
        echo "        ";
        $this->loadTemplate("blockTemplate/linkCards.twig", "pageTemplate/entitiesOneFieldResult.html.twig", 18)->display($context);
        // line 19
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  222 => 19,  219 => 18,  215 => 17,  212 => 16,  207 => 15,  204 => 14,  194 => 13,  171 => 12,  97 => 22,  95 => 12,  92 => 11,  90 => 10,  87 => 9,  81 => 8,  78 => 7,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block CONTENT %}

    {% set linkCards = [] %}
    {% for entity in entitiesOneFieldResult.entities %}
        {% set linkCards = linkCards|merge([{ 'title': (attribute(entity,entitiesOneFieldResult.routeParam)), 'imageName' : null, 'route' : (entitiesOneFieldResult.route), 'routeArgs' : { (entitiesOneFieldResult.routeParam) : (attribute(entity,entitiesOneFieldResult.routeParam)) } }]) %}
    {% endfor %}

    {% set form = form|default(null) %}

    {% embed 'blockTemplate/containerWithTitle.twig' %}
    {% block containerWithTitle_content %}

        {% if form is defined and form is not null %}{{ form(form) }}<br>{% endif %}

        {% if ( form is null and entitiesOneFieldResult.entities|length == 0 ) or ( form is not null and entitiesOneFieldResult.entities|length == 0 and form.vars.submitted == true ) %}{{ entitiesOneFieldResult.messageIfEmpty }}{% endif %}
        {% include 'blockTemplate/linkCards.twig' %}

    {% endblock %}
    {% endembed %}

{% endblock %}", "pageTemplate/entitiesOneFieldResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/entitiesOneFieldResult.html.twig");
    }
}
