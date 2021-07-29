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
class __TwigTemplate_62c6a2f89eee6c89597632cec6327016c482dc6587cbdc5a74df7f9fd5cce214 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTemplate/acteursAllFieldsResult.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTemplate/acteursAllFieldsResult.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pageTemplate/acteursAllFieldsResult.html.twig", 1);
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
        $this->loadTemplate("pageTemplate/acteursAllFieldsResult.html.twig", "pageTemplate/acteursAllFieldsResult.html.twig", 5, "2043746267")->display($context);
        // line 53
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  73 => 53,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
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

                {% if onlyFilms != true %}
                <div class=\"fld fld-smpl fld-inln\">
                    <div class=\"fld_lbl\">Date de naissance :</div>
                    <div class=\"fld_otpt\">{{ actor.dateNaissance|date('d/m/Y') }}</div>
                </div>

                <div class=\"fld fld-smpl fld-inln\">
                    <div class=\"fld_lbl\">Nationalité :</div>
                    <div class=\"fld_otpt\">{{ actor.nationalite }}</div>
                </div>
                {% endif %}
                <div class=\"fld fld-mlt\">
                    <div class=\"fld_lbl\">Filmographie :</div>
                    <div class=\"fld_otpt fld_otpt-mlt\">
                    {% if actor.films|length > 0 %}
                        {% for movie in actor.films %}
                            <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"{{ getPathIfRouteExists('filmActions',{ 'titre' : (movie.titre)}) }}\">{{ movie.titre }}</a></div>
                        {% endfor %}
                    {% else %}
                        <div class=\"fld_otpt\">Aucun film dans la filmographie de cet acteur</div>
                    {% endif %}
                    </div>
                </div>

            </div>

    </div>
    {% endfor %}
    {% if actors|length == 0 %}
        {{ entitiesOneFieldResult.messageIfEmpty }}
    {% endif %}

    {% endblock %}
    {% endembed %}

{% endblock %}", "pageTemplate/acteursAllFieldsResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/acteursAllFieldsResult.html.twig");
    }
}


/* pageTemplate/acteursAllFieldsResult.html.twig */
class __TwigTemplate_62c6a2f89eee6c89597632cec6327016c482dc6587cbdc5a74df7f9fd5cce214___2043746267 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTemplate/acteursAllFieldsResult.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTemplate/acteursAllFieldsResult.html.twig"));

        $this->parent = $this->loadTemplate("blockTemplate/containerWithTitle.twig", "pageTemplate/acteursAllFieldsResult.html.twig", 5);
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actors"]) || array_key_exists("actors", $context) ? $context["actors"] : (function () { throw new RuntimeError('Variable "actors" does not exist.', 9, $this->source); })()));
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
            if ((0 !== twig_compare((isset($context["onlyFilms"]) || array_key_exists("onlyFilms", $context) ? $context["onlyFilms"] : (function () { throw new RuntimeError('Variable "onlyFilms" does not exist.', 19, $this->source); })()), true))) {
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
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["actors"]) || array_key_exists("actors", $context) ? $context["actors"] : (function () { throw new RuntimeError('Variable "actors" does not exist.', 47, $this->source); })())), 0))) {
            // line 48
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entitiesOneFieldResult"]) || array_key_exists("entitiesOneFieldResult", $context) ? $context["entitiesOneFieldResult"] : (function () { throw new RuntimeError('Variable "entitiesOneFieldResult" does not exist.', 48, $this->source); })()), "messageIfEmpty", [], "any", false, false, false, 48), "html", null, true);
            echo "
    ";
        }
        // line 50
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  308 => 50,  302 => 48,  299 => 47,  287 => 40,  283 => 38,  280 => 37,  269 => 35,  264 => 34,  262 => 33,  257 => 30,  251 => 27,  243 => 22,  239 => 20,  237 => 19,  229 => 16,  221 => 10,  216 => 9,  214 => 8,  211 => 7,  201 => 6,  178 => 5,  73 => 53,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
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

                {% if onlyFilms != true %}
                <div class=\"fld fld-smpl fld-inln\">
                    <div class=\"fld_lbl\">Date de naissance :</div>
                    <div class=\"fld_otpt\">{{ actor.dateNaissance|date('d/m/Y') }}</div>
                </div>

                <div class=\"fld fld-smpl fld-inln\">
                    <div class=\"fld_lbl\">Nationalité :</div>
                    <div class=\"fld_otpt\">{{ actor.nationalite }}</div>
                </div>
                {% endif %}
                <div class=\"fld fld-mlt\">
                    <div class=\"fld_lbl\">Filmographie :</div>
                    <div class=\"fld_otpt fld_otpt-mlt\">
                    {% if actor.films|length > 0 %}
                        {% for movie in actor.films %}
                            <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"{{ getPathIfRouteExists('filmActions',{ 'titre' : (movie.titre)}) }}\">{{ movie.titre }}</a></div>
                        {% endfor %}
                    {% else %}
                        <div class=\"fld_otpt\">Aucun film dans la filmographie de cet acteur</div>
                    {% endif %}
                    </div>
                </div>

            </div>

    </div>
    {% endfor %}
    {% if actors|length == 0 %}
        {{ entitiesOneFieldResult.messageIfEmpty }}
    {% endif %}

    {% endblock %}
    {% endembed %}

{% endblock %}", "pageTemplate/acteursAllFieldsResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/acteursAllFieldsResult.html.twig");
    }
}
