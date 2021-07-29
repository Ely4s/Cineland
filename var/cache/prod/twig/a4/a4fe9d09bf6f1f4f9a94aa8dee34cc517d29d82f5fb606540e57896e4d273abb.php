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

/* pageTemplate/genresAllFieldsResult.html.twig */
class __TwigTemplate_eb9c3c6f65993d0cf450c7ae4cb26b42a5a0645a04bb8d7eecbf2a7776dc4da9 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pageTemplate/genresAllFieldsResult.html.twig", 1);
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
        $this->loadTemplate("pageTemplate/genresAllFieldsResult.html.twig", "pageTemplate/genresAllFieldsResult.html.twig", 5, "508359709")->display($context);
        // line 41
        echo "
";
    }

    public function getTemplateName()
    {
        return "pageTemplate/genresAllFieldsResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 41,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pageTemplate/genresAllFieldsResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/genresAllFieldsResult.html.twig");
    }
}


/* pageTemplate/genresAllFieldsResult.html.twig */
class __TwigTemplate_eb9c3c6f65993d0cf450c7ae4cb26b42a5a0645a04bb8d7eecbf2a7776dc4da9___508359709 extends Template
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
        $this->parent = $this->loadTemplate("blockTemplate/containerWithTitle.twig", "pageTemplate/genresAllFieldsResult.html.twig", 5);
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["genres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 9
            echo "                <div class=\"fld_cntnr\">

                    <div class=\"fld_grp\">

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Nom :</div>
                            <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getPathIfRouteExists("genreActions", ["nom" => twig_get_attribute($this->env, $this->source, $context["genre"], "nom", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "nom", [], "any", false, false, false, 15), "html", null, true);
            echo "</a></div>
                        </div>

                        <div class=\"fld fld-mlt\">
                            <div class=\"fld_lbl\">Films du genre :</div>
                            <div class=\"fld_otpt fld_otpt-mlt\">
                                ";
            // line 21
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "films", [], "any", false, false, false, 21)), 0))) {
                // line 22
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["genre"], "films", [], "any", false, false, false, 22));
                foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                    // line 23
                    echo "                                    <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getPathIfRouteExists("filmActions", ["titre" => twig_get_attribute($this->env, $this->source, $context["movie"], "titre", [], "any", false, false, false, 23)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "titre", [], "any", false, false, false, 23), "html", null, true);
                    echo "</a></div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                                ";
            } else {
                // line 26
                echo "                                    <div class=\"fld_otpt\">Aucun film dans ce genre</div>
                                ";
            }
            // line 28
            echo "                            </div>
                        </div>

                    </div>

                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            ";
        if ((0 === twig_compare(twig_length_filter($this->env, ($context["genres"] ?? null)), 0))) {
            // line 36
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entitiesOneFieldResult"] ?? null), "messageIfEmpty", [], "any", false, false, false, 36), "html", null, true);
            echo "
            ";
        }
        // line 38
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "pageTemplate/genresAllFieldsResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 38,  182 => 36,  179 => 35,  167 => 28,  163 => 26,  160 => 25,  149 => 23,  144 => 22,  142 => 21,  131 => 15,  123 => 9,  119 => 8,  116 => 7,  112 => 6,  101 => 5,  55 => 41,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pageTemplate/genresAllFieldsResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/genresAllFieldsResult.html.twig");
    }
}
