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

/* pageTemplate/acteursFieldsGenreResult.html.twig */
class __TwigTemplate_795b2b11782d6e18ce33b7629efef74678371385524a4b5d637ba87753678523 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pageTemplate/acteursFieldsGenreResult.html.twig", 1);
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
        $this->loadTemplate("pageTemplate/acteursFieldsGenreResult.html.twig", "pageTemplate/acteursFieldsGenreResult.html.twig", 5, "1183756067")->display($context);
        // line 37
        echo "
";
    }

    public function getTemplateName()
    {
        return "pageTemplate/acteursFieldsGenreResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 37,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pageTemplate/acteursFieldsGenreResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/acteursFieldsGenreResult.html.twig");
    }
}


/* pageTemplate/acteursFieldsGenreResult.html.twig */
class __TwigTemplate_795b2b11782d6e18ce33b7629efef74678371385524a4b5d637ba87753678523___1183756067 extends Template
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
        $this->parent = $this->loadTemplate("blockTemplate/containerWithTitle.twig", "pageTemplate/acteursFieldsGenreResult.html.twig", 5);
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
        $context["onlyFilms"] = ((array_key_exists("onlyFilms", $context)) ? (_twig_default_filter(($context["onlyFilms"] ?? null), false)) : (false));
        // line 9
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 10
            echo "                <div class=\"fld_cntnr\">

                    <div class=\"fld_grp\">

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Nom Prénom :</div>
                            <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getPathIfRouteExists("acteurActions", ["nomPrenom" => twig_get_attribute($this->env, $this->source, $context["actor"], "nomPrenom", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "nomPrenom", [], "any", false, false, false, 16), "html", null, true);
            echo "</a></div>
                        </div>

                        <div class=\"fld fld-mlt\">
                            <div class=\"fld_lbl\">Genres :</div>
                            <div class=\"fld_otpt fld_otpt-mlt\">
                                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["actor"], "genres", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 23
                echo "                                    <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getPathIfRouteExists("genreActions", ["nom" => twig_get_attribute($this->env, $this->source, $context["genre"], "nom", [], "any", false, false, false, 23)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "nom", [], "any", false, false, false, 23), "html", null, true);
                echo "</a></div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                            </div>
                        </div>

                    </div>

                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            ";
        if (((0 === twig_compare(twig_length_filter($this->env, ($context["actors"] ?? null)), 0)) && array_key_exists("entitiesOneFieldResult", $context))) {
            // line 33
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entitiesOneFieldResult"] ?? null), "messageIfEmpty", [], "any", false, false, false, 33), "html", null, true);
            echo "
            ";
        }
        // line 35
        echo "        ";
    }

    public function getTemplateName()
    {
        return "pageTemplate/acteursFieldsGenreResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 35,  175 => 33,  172 => 32,  160 => 25,  149 => 23,  145 => 22,  134 => 16,  126 => 10,  121 => 9,  119 => 8,  116 => 7,  112 => 6,  101 => 5,  55 => 37,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pageTemplate/acteursFieldsGenreResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/acteursFieldsGenreResult.html.twig");
    }
}
