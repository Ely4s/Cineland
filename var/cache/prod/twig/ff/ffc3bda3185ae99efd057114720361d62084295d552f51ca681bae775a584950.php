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

/* base.html.twig */
class __TwigTemplate_ec44dcb08dea99dc4f59434fcd8593901b3e9c5a601d0c7fd2ab8ebfdec38d11 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'HEAD' => [$this, 'block_HEAD'],
            'STYLESHEETS' => [$this, 'block_STYLESHEETS'],
            'title' => [$this, 'block_title'],
            'BODY' => [$this, 'block_BODY'],
            'HEADER' => [$this, 'block_HEADER'],
            'CONTENT' => [$this, 'block_CONTENT'],
            'FOOTER' => [$this, 'block_FOOTER'],
            'JAVASCRIPTS' => [$this, 'block_JAVASCRIPTS'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

    <head>
    ";
        // line 5
        $this->displayBlock('HEAD', $context, $blocks);
        // line 17
        echo "    </head>

    <body>
    ";
        // line 20
        $this->displayBlock('BODY', $context, $blocks);
        // line 54
        echo "    </body>

</html>
";
    }

    // line 5
    public function block_HEAD($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
        <meta charset=\"UTF-8\">
        <meta name='viewport' content='width=600, user-scalable=no'/>
        ";
        // line 9
        $this->displayBlock('STYLESHEETS', $context, $blocks);
        // line 13
        echo "
        <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
    }

    // line 9
    public function block_STYLESHEETS($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/style.css"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, twig_random($this->env, 0, 10000000), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
        ";
    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["containerWithTitle"] ?? null), "title", [], "any", false, false, false, 14), "html", null, true);
    }

    // line 20
    public function block_BODY($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "
        <div id=\"CONTAINER\">

            <div id=\"HEADER\">
            ";
        // line 25
        $this->displayBlock('HEADER', $context, $blocks);
        // line 28
        echo "            </div>

            <div id=\"CONTENT\">

                <div class=\"sccss\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 33), "flashbag", [], "any", false, false, false, 33), "get", [0 => "success"], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 34
            echo "                    <div class=\"sccss_mssg\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </div>

            ";
        // line 38
        $this->displayBlock('CONTENT', $context, $blocks);
        // line 40
        echo "
            </div>

            <div id=\"FOOTER\">
            ";
        // line 44
        $this->displayBlock('FOOTER', $context, $blocks);
        // line 47
        echo "            </div>

        </div>

        ";
        // line 51
        $this->displayBlock('JAVASCRIPTS', $context, $blocks);
        // line 52
        echo "
    ";
    }

    // line 25
    public function block_HEADER($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                ";
        $this->loadTemplate("blockTemplate/header.twig", "base.html.twig", 26)->display($context);
        // line 27
        echo "            ";
    }

    // line 38
    public function block_CONTENT($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "            ";
    }

    // line 44
    public function block_FOOTER($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "                ";
        $this->loadTemplate("blockTemplate/footer.twig", "base.html.twig", 45)->display($context);
        // line 46
        echo "            ";
    }

    // line 51
    public function block_JAVASCRIPTS($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/script.js"), "html", null, true);
        echo "\"></script> ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  198 => 51,  194 => 46,  191 => 45,  187 => 44,  183 => 39,  179 => 38,  175 => 27,  172 => 26,  168 => 25,  163 => 52,  161 => 51,  155 => 47,  153 => 44,  147 => 40,  145 => 38,  141 => 36,  132 => 34,  128 => 33,  121 => 28,  119 => 25,  113 => 21,  109 => 20,  102 => 14,  92 => 10,  88 => 9,  81 => 14,  78 => 13,  76 => 9,  71 => 6,  67 => 5,  60 => 54,  58 => 20,  53 => 17,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/Users/elyas/Desktop/cineland/templates/base.html.twig");
    }
}
