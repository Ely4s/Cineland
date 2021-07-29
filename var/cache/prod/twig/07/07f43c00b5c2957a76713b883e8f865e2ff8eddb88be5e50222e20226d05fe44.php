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

/* pageTemplate/acteursAllFieldsResult.html.twig */
class __TwigTemplate_c72ebb027aa0822e5f2ac6850ce8b0e33eb113d58efb87f3b4a1990278387104 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pageTemplate/acteursAllFieldsResult.html.twig", 1);
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
        $this->loadTemplate("pageTemplate/acteursAllFieldsResult.html.twig", "pageTemplate/acteursAllFieldsResult.html.twig", 5, "2099639182")->display($context);
        // line 53
        echo "
";
    }

    public function getTemplateName()
    {
        return "pageTemplate/acteursAllFieldsResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 53,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pageTemplate/acteursAllFieldsResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/acteursAllFieldsResult.html.twig");
    }
}


/* pageTemplate/acteursAllFieldsResult.html.twig */
class __TwigTemplate_c72ebb027aa0822e5f2ac6850ce8b0e33eb113d58efb87f3b4a1990278387104___2099639182 extends Template
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
        $this->parent = $this->loadTemplate("blockTemplate/containerWithTitle.twig", "pageTemplate/acteursAllFieldsResult.html.twig", 5);
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 10
            echo "    <div class=\"fld_cntnr\">

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

                ";
            // line 19
            if ((0 !== twig_compare(($context["onlyFilms"] ?? null), true))) {
                // line 20
                echo "                <div class=\"fld fld-smpl fld-inln\">
                    <div class=\"fld_lbl\">Date de naissance :</div>
                    <div class=\"fld_otpt\">";
                // line 22
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "dateNaissance", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true);
                echo "</div>
                </div>

                <div class=\"fld fld-smpl fld-inln\">
                    <div class=\"fld_lbl\">Nationalité :</div>
                    <div class=\"fld_otpt\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "nationalite", [], "any", false, false, false, 27), "html", null, true);
                echo "</div>
                </div>
                ";
            }
            // line 30
            echo "                <div class=\"fld fld-mlt\">
                    <div class=\"fld_lbl\">Filmographie :</div>
                    <div class=\"fld_otpt fld_otpt-mlt\">
                    ";
            // line 33
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "films", [], "any", false, false, false, 33)), 0))) {
                // line 34
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["actor"], "films", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                    // line 35
                    echo "                            <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getPathIfRouteExists("filmActions", ["titre" => twig_get_attribute($this->env, $this->source, $context["movie"], "titre", [], "any", false, false, false, 35)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "titre", [], "any", false, false, false, 35), "html", null, true);
                    echo "</a></div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "                    ";
            } else {
                // line 38
                echo "                        <div class=\"fld_otpt\">Aucun film dans la filmographie de cet acteur</div>
                    ";
            }
            // line 40
            echo "                    </div>
                </div>

            </div>

    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    ";
        if ((0 === twig_compare(twig_length_filter($this->env, ($context["actors"] ?? null)), 0))) {
            // line 48
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entitiesOneFieldResult"] ?? null), "messageIfEmpty", [], "any", false, false, false, 48), "html", null, true);
            echo "
    ";
        }
        // line 50
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "pageTemplate/acteursAllFieldsResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 50,  207 => 48,  204 => 47,  192 => 40,  188 => 38,  185 => 37,  174 => 35,  169 => 34,  167 => 33,  162 => 30,  156 => 27,  148 => 22,  144 => 20,  142 => 19,  134 => 16,  126 => 10,  121 => 9,  119 => 8,  116 => 7,  112 => 6,  101 => 5,  55 => 53,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pageTemplate/acteursAllFieldsResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/acteursAllFieldsResult.html.twig");
    }
}
