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
class __TwigTemplate_0240c97e15806ad272d74e91021446f8f47ecf24de237bda4ae2dd1299eb7b04 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTemplate/acteursFieldsGenreResult.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTemplate/acteursFieldsGenreResult.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pageTemplate/acteursFieldsGenreResult.html.twig", 1);
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
        $this->loadTemplate("pageTemplate/acteursFieldsGenreResult.html.twig", "pageTemplate/acteursFieldsGenreResult.html.twig", 5, "231368009")->display($context);
        // line 37
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  73 => 37,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block CONTENT %}

    {% embed 'blockTemplate/containerWithTitle.twig' %}
        {% block containerWithTitle_content %}

            {% set onlyFilms = onlyFilms|default(false) %}
            {% for actor in actors %}
                <div class=\"fld_cntnr\">

                    <div class=\"fld_grp\">

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Nom Prénom :</div>
                            <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"{{ getPathIfRouteExists('acteurActions',{ 'nomPrenom' : (actor.nomPrenom)}) }}\">{{ actor.nomPrenom }}</a></div>
                        </div>

                        <div class=\"fld fld-mlt\">
                            <div class=\"fld_lbl\">Genres :</div>
                            <div class=\"fld_otpt fld_otpt-mlt\">
                                {% for genre in actor.genres %}
                                    <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"{{ getPathIfRouteExists('genreActions',{ 'nom' : (genre.nom)}) }}\">{{ genre.nom }}</a></div>
                                {% endfor %}
                            </div>
                        </div>

                    </div>

                </div>
            {% endfor %}
            {% if actors|length == 0 and entitiesOneFieldResult is defined%}
                {{ entitiesOneFieldResult.messageIfEmpty }}
            {% endif %}
        {% endblock %}
    {% endembed %}

{% endblock %}", "pageTemplate/acteursFieldsGenreResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/acteursFieldsGenreResult.html.twig");
    }
}


/* pageTemplate/acteursFieldsGenreResult.html.twig */
class __TwigTemplate_0240c97e15806ad272d74e91021446f8f47ecf24de237bda4ae2dd1299eb7b04___231368009 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTemplate/acteursFieldsGenreResult.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTemplate/acteursFieldsGenreResult.html.twig"));

        $this->parent = $this->loadTemplate("blockTemplate/containerWithTitle.twig", "pageTemplate/acteursFieldsGenreResult.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_containerWithTitle_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "containerWithTitle_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "containerWithTitle_content"));

        // line 7
        echo "
            ";
        // line 8
        $context["onlyFilms"] = ((array_key_exists("onlyFilms", $context)) ? (_twig_default_filter((isset($context["onlyFilms"]) || array_key_exists("onlyFilms", $context) ? $context["onlyFilms"] : (function () { throw new RuntimeError('Variable "onlyFilms" does not exist.', 8, $this->source); })()), false)) : (false));
        // line 9
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actors"]) || array_key_exists("actors", $context) ? $context["actors"] : (function () { throw new RuntimeError('Variable "actors" does not exist.', 9, $this->source); })()));
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
        if (((0 === twig_compare(twig_length_filter($this->env, (isset($context["actors"]) || array_key_exists("actors", $context) ? $context["actors"] : (function () { throw new RuntimeError('Variable "actors" does not exist.', 32, $this->source); })())), 0)) && array_key_exists("entitiesOneFieldResult", $context))) {
            // line 33
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entitiesOneFieldResult"]) || array_key_exists("entitiesOneFieldResult", $context) ? $context["entitiesOneFieldResult"] : (function () { throw new RuntimeError('Variable "entitiesOneFieldResult" does not exist.', 33, $this->source); })()), "messageIfEmpty", [], "any", false, false, false, 33), "html", null, true);
            echo "
            ";
        }
        // line 35
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  260 => 35,  254 => 33,  251 => 32,  239 => 25,  228 => 23,  224 => 22,  213 => 16,  205 => 10,  200 => 9,  198 => 8,  195 => 7,  185 => 6,  162 => 5,  73 => 37,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block CONTENT %}

    {% embed 'blockTemplate/containerWithTitle.twig' %}
        {% block containerWithTitle_content %}

            {% set onlyFilms = onlyFilms|default(false) %}
            {% for actor in actors %}
                <div class=\"fld_cntnr\">

                    <div class=\"fld_grp\">

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Nom Prénom :</div>
                            <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"{{ getPathIfRouteExists('acteurActions',{ 'nomPrenom' : (actor.nomPrenom)}) }}\">{{ actor.nomPrenom }}</a></div>
                        </div>

                        <div class=\"fld fld-mlt\">
                            <div class=\"fld_lbl\">Genres :</div>
                            <div class=\"fld_otpt fld_otpt-mlt\">
                                {% for genre in actor.genres %}
                                    <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"{{ getPathIfRouteExists('genreActions',{ 'nom' : (genre.nom)}) }}\">{{ genre.nom }}</a></div>
                                {% endfor %}
                            </div>
                        </div>

                    </div>

                </div>
            {% endfor %}
            {% if actors|length == 0 and entitiesOneFieldResult is defined%}
                {{ entitiesOneFieldResult.messageIfEmpty }}
            {% endif %}
        {% endblock %}
    {% endembed %}

{% endblock %}", "pageTemplate/acteursFieldsGenreResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/acteursFieldsGenreResult.html.twig");
    }
}
