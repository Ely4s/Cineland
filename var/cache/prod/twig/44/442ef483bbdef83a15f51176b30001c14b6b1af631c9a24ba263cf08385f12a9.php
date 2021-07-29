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

/* pageTemplate/menu.html.twig */
class __TwigTemplate_79bf2f303a623279820707904526f0c2cfe7c59709f2f6a423f6c1fa40d8cd39 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pageTemplate/menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_CONTENT($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("pageTemplate/menu.html.twig", "pageTemplate/menu.html.twig", 4, "445075209")->display($context);
    }

    public function getTemplateName()
    {
        return "pageTemplate/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pageTemplate/menu.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/menu.html.twig");
    }
}


/* pageTemplate/menu.html.twig */
class __TwigTemplate_79bf2f303a623279820707904526f0c2cfe7c59709f2f6a423f6c1fa40d8cd39___445075209 extends Template
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
        return "blockTemplate/containerWithTitle.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("blockTemplate/containerWithTitle.twig", "pageTemplate/menu.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_containerWithTitle_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->loadTemplate("blockTemplate/linkCards.twig", "pageTemplate/menu.html.twig", 5)->display($context);
    }

    public function getTemplateName()
    {
        return "pageTemplate/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pageTemplate/menu.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/menu.html.twig");
    }
}
