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

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_d0a06c263601addffa35966d46665776315731c0551a74c9b8da7d35fbc0910b extends Template
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
        // line 3
        $context["containerWithTitle"] = ["title" => "Oups !"];
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error404.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_CONTENT($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    ";
        // line 6
        $this->loadTemplate("@Twig/Exception/error404.html.twig", "@Twig/Exception/error404.html.twig", 6, "820953616")->display($context);
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  56 => 6,  53 => 5,  49 => 4,  44 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error404.html.twig", "/Users/elyas/Desktop/cineland/templates/bundles/TwigBundle/Exception/error404.html.twig");
    }
}


/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_d0a06c263601addffa35966d46665776315731c0551a74c9b8da7d35fbc0910b___820953616 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'containerWithTitle_title' => [$this, 'block_containerWithTitle_title'],
            'containerWithTitle_content' => [$this, 'block_containerWithTitle_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return "blockTemplate/containerWithTitle.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("blockTemplate/containerWithTitle.twig", "@Twig/Exception/error404.html.twig", 6);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_containerWithTitle_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "            Erreur 404 : Oups ! Cette page n'a pas l'air d'exister ...
        ";
    }

    // line 10
    public function block_containerWithTitle_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "            Pour revenir à l'accueil cliquez <a class=\"txt-lnk-clr\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getPathIfRouteExists("index"), "html", null, true);
        echo "\">ici</a>
        ";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 11,  125 => 10,  120 => 8,  116 => 7,  105 => 6,  58 => 14,  56 => 6,  53 => 5,  49 => 4,  44 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error404.html.twig", "/Users/elyas/Desktop/cineland/templates/bundles/TwigBundle/Exception/error404.html.twig");
    }
}
