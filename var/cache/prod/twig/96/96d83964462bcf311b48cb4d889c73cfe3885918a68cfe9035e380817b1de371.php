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

/* pageTemplate/filmsAllFieldsResult.html.twig */
class __TwigTemplate_a7691ecef385e575f2d9d01052f9e088005a3e2dbb8081456344d958f310ef96 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pageTemplate/filmsAllFieldsResult.html.twig", 1);
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
        $this->loadTemplate("pageTemplate/filmsAllFieldsResult.html.twig", "pageTemplate/filmsAllFieldsResult.html.twig", 5, "1237980343")->display($context);
        // line 64
        echo "
";
    }

    public function getTemplateName()
    {
        return "pageTemplate/filmsAllFieldsResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 64,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pageTemplate/filmsAllFieldsResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/filmsAllFieldsResult.html.twig");
    }
}


/* pageTemplate/filmsAllFieldsResult.html.twig */
class __TwigTemplate_a7691ecef385e575f2d9d01052f9e088005a3e2dbb8081456344d958f310ef96___1237980343 extends Template
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
        $this->parent = $this->loadTemplate("blockTemplate/containerWithTitle.twig", "pageTemplate/filmsAllFieldsResult.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_containerWithTitle_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
            <div class=\"cntnr onChld-ntLst-mrgn-bttm\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 10
            echo "            <div class=\"fld_cntnr\">

                    <div class=\"fld_grp\">

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Titre :</div>
                            <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getPathIfRouteExists("filmActions", ["titre" => twig_get_attribute($this->env, $this->source, $context["movie"], "titre", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "titre", [], "any", false, false, false, 16), "html", null, true);
            echo "</a></div>
                        </div>

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Durée (en minutes) :</div>
                            <div class=\"fld_otpt\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "duree", [], "any", false, false, false, 21), "html", null, true);
            echo "</div>
                        </div>

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Date de sorite :</div>
                            <div class=\"fld_otpt\">";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "dateSortie", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
            echo "</div>
                        </div>

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Note :</div>
                            <div class=\"fld_otpt\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "note", [], "any", false, false, false, 31), "html", null, true);
            echo "</div>
                        </div>

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Âge minimal :</div>
                            <div class=\"fld_otpt\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "ageMinimal", [], "any", false, false, false, 36), "html", null, true);
            echo "</div>
                        </div>

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Genre :</div>
                            <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getPathIfRouteExists("genreActions", ["nom" => twig_get_attribute($this->env, $this->source, $context["movie"], "genre", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "genre", [], "any", false, false, false, 41), "html", null, true);
            echo "</a></div>
                        </div>

                        <div class=\"fld fld-mlt\">
                            <div class=\"fld_lbl\">Casting :</div>
                            <div class=\"fld_otpt fld_otpt-mlt\">
                            ";
            // line 47
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "acteurs", [], "any", false, false, false, 47)), 0))) {
                // line 48
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["movie"], "acteurs", [], "any", false, false, false, 48));
                foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                    // line 49
                    echo "                                    <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getPathIfRouteExists("acteurActions", ["nomPrenom" => twig_get_attribute($this->env, $this->source, $context["actor"], "nomPrenom", [], "any", false, false, false, 49)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "nomPrenom", [], "any", false, false, false, 49), "html", null, true);
                    echo "</a></div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "                            ";
            } else {
                // line 52
                echo "                                <div class=\"fld_otpt\">Aucun acteur dans le casting de ce film</div>
                            ";
            }
            // line 54
            echo "                            </div>
                        </div>

                    </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </div>

        ";
    }

    public function getTemplateName()
    {
        return "pageTemplate/filmsAllFieldsResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 60,  210 => 54,  206 => 52,  203 => 51,  192 => 49,  187 => 48,  185 => 47,  174 => 41,  166 => 36,  158 => 31,  150 => 26,  142 => 21,  132 => 16,  124 => 10,  120 => 9,  116 => 7,  112 => 6,  101 => 5,  55 => 64,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pageTemplate/filmsAllFieldsResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/filmsAllFieldsResult.html.twig");
    }
}
