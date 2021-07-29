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

/* pageTemplate/valueResult.html.twig */
class __TwigTemplate_a7ef3263fadbec484435471cde3cd9eb77809091605439720ab4fbdc2171efde extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pageTemplate/valueResult.html.twig", 1);
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
        $this->loadTemplate("pageTemplate/valueResult.html.twig", "pageTemplate/valueResult.html.twig", 5, "571605040")->display($context);
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "pageTemplate/valueResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pageTemplate/valueResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/valueResult.html.twig");
    }
}


/* pageTemplate/valueResult.html.twig */
class __TwigTemplate_a7ef3263fadbec484435471cde3cd9eb77809091605439720ab4fbdc2171efde___571605040 extends Template
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
        // line 5
        return "blockTemplate/containerWithTitle.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("blockTemplate/containerWithTitle.twig", "pageTemplate/valueResult.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_containerWithTitle_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
            ";
        // line 8
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "pageTemplate/valueResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 8,  116 => 7,  112 => 6,  101 => 5,  55 => 12,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pageTemplate/valueResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/valueResult.html.twig");
    }
}
