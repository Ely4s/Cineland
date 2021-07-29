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
class __TwigTemplate_719243329165458623c0cd098a5060dd7312c920903c128e464741f6dd2d9149 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTemplate/genresAllFieldsResult.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTemplate/genresAllFieldsResult.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pageTemplate/genresAllFieldsResult.html.twig", 1);
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
        $this->loadTemplate("pageTemplate/genresAllFieldsResult.html.twig", "pageTemplate/genresAllFieldsResult.html.twig", 5, "1327830439")->display($context);
        // line 41
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  73 => 41,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block CONTENT %}

    {% embed 'blockTemplate/containerWithTitle.twig' %}
        {% block containerWithTitle_content %}

            {% for genre in genres %}
                <div class=\"fld_cntnr\">

                    <div class=\"fld_grp\">

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Nom :</div>
                            <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"{{ getPathIfRouteExists('genreActions',{ 'nom' : (genre.nom)}) }}\">{{ genre.nom }}</a></div>
                        </div>

                        <div class=\"fld fld-mlt\">
                            <div class=\"fld_lbl\">Films du genre :</div>
                            <div class=\"fld_otpt fld_otpt-mlt\">
                                {% if genre.films|length > 0 %}
                                {% for movie in genre.films %}
                                    <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"{{ getPathIfRouteExists('filmActions',{ 'titre' : (movie.titre)}) }}\">{{ movie.titre }}</a></div>
                                {% endfor %}
                                {% else %}
                                    <div class=\"fld_otpt\">Aucun film dans ce genre</div>
                                {% endif %}
                            </div>
                        </div>

                    </div>

                </div>
            {% endfor %}
            {% if genres|length == 0 %}
                {{ entitiesOneFieldResult.messageIfEmpty }}
            {% endif %}

        {% endblock %}
    {% endembed %}

{% endblock %}", "pageTemplate/genresAllFieldsResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/genresAllFieldsResult.html.twig");
    }
}


/* pageTemplate/genresAllFieldsResult.html.twig */
class __TwigTemplate_719243329165458623c0cd098a5060dd7312c920903c128e464741f6dd2d9149___1327830439 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTemplate/genresAllFieldsResult.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTemplate/genresAllFieldsResult.html.twig"));

        $this->parent = $this->loadTemplate("blockTemplate/containerWithTitle.twig", "pageTemplate/genresAllFieldsResult.html.twig", 5);
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 8, $this->source); })()));
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
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 35, $this->source); })())), 0))) {
            // line 36
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entitiesOneFieldResult"]) || array_key_exists("entitiesOneFieldResult", $context) ? $context["entitiesOneFieldResult"] : (function () { throw new RuntimeError('Variable "entitiesOneFieldResult" does not exist.', 36, $this->source); })()), "messageIfEmpty", [], "any", false, false, false, 36), "html", null, true);
            echo "
            ";
        }
        // line 38
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  271 => 38,  265 => 36,  262 => 35,  250 => 28,  246 => 26,  243 => 25,  232 => 23,  227 => 22,  225 => 21,  214 => 15,  206 => 9,  202 => 8,  199 => 7,  189 => 6,  166 => 5,  73 => 41,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block CONTENT %}

    {% embed 'blockTemplate/containerWithTitle.twig' %}
        {% block containerWithTitle_content %}

            {% for genre in genres %}
                <div class=\"fld_cntnr\">

                    <div class=\"fld_grp\">

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Nom :</div>
                            <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"{{ getPathIfRouteExists('genreActions',{ 'nom' : (genre.nom)}) }}\">{{ genre.nom }}</a></div>
                        </div>

                        <div class=\"fld fld-mlt\">
                            <div class=\"fld_lbl\">Films du genre :</div>
                            <div class=\"fld_otpt fld_otpt-mlt\">
                                {% if genre.films|length > 0 %}
                                {% for movie in genre.films %}
                                    <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"{{ getPathIfRouteExists('filmActions',{ 'titre' : (movie.titre)}) }}\">{{ movie.titre }}</a></div>
                                {% endfor %}
                                {% else %}
                                    <div class=\"fld_otpt\">Aucun film dans ce genre</div>
                                {% endif %}
                            </div>
                        </div>

                    </div>

                </div>
            {% endfor %}
            {% if genres|length == 0 %}
                {{ entitiesOneFieldResult.messageIfEmpty }}
            {% endif %}

        {% endblock %}
    {% endembed %}

{% endblock %}", "pageTemplate/genresAllFieldsResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/genresAllFieldsResult.html.twig");
    }
}
