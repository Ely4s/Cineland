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

/* blockTemplate/containerWithTitle.twig */
class __TwigTemplate_07ebbe65e8ca9635a055f3626ab383ff1a54813882496c002bc1c60d9f8f1326 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'containerWithTitle' => [$this, 'block_containerWithTitle'],
            'containerWithTitle_title' => [$this, 'block_containerWithTitle_title'],
            'containerWithTitle_content' => [$this, 'block_containerWithTitle_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('containerWithTitle', $context, $blocks);
    }

    public function block_containerWithTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<div class=\"containerWithTitle\">
    <div class=\"containerWithTitle_title\">";
        // line 3
        $this->displayBlock('containerWithTitle_title', $context, $blocks);
        echo "</div>
    <div class=\"containerWithTitle_content\">";
        // line 4
        $this->displayBlock('containerWithTitle_content', $context, $blocks);
        echo "</div>
</div>
";
    }

    // line 3
    public function block_containerWithTitle_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["containerWithTitle"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 4
    public function block_containerWithTitle_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "blockTemplate/containerWithTitle.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  61 => 3,  54 => 4,  50 => 3,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blockTemplate/containerWithTitle.twig", "/Users/elyas/Desktop/cineland/templates/blockTemplate/containerWithTitle.twig");
    }
}
