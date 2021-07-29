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
class __TwigTemplate_2bc186728d9e695653e8a4a8b3b4cc510192337838538d43e167b539b78b2e35 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTemplate/filmsAllFieldsResult.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTemplate/filmsAllFieldsResult.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pageTemplate/filmsAllFieldsResult.html.twig", 1);
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
        $this->loadTemplate("pageTemplate/filmsAllFieldsResult.html.twig", "pageTemplate/filmsAllFieldsResult.html.twig", 5, "107493296")->display($context);
        // line 64
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  73 => 64,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block CONTENT %}

    {% embed 'blockTemplate/containerWithTitle.twig' %}
        {% block containerWithTitle_content %}

            <div class=\"cntnr onChld-ntLst-mrgn-bttm\">
            {% for movie in movies %}
            <div class=\"fld_cntnr\">

                    <div class=\"fld_grp\">

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Titre :</div>
                            <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"{{ getPathIfRouteExists('filmActions',{ 'titre' : (movie.titre)}) }}\">{{ movie.titre }}</a></div>
                        </div>

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Durée (en minutes) :</div>
                            <div class=\"fld_otpt\">{{ movie.duree }}</div>
                        </div>

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Date de sorite :</div>
                            <div class=\"fld_otpt\">{{ movie.dateSortie|date('d/m/Y') }}</div>
                        </div>

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Note :</div>
                            <div class=\"fld_otpt\">{{ movie.note }}</div>
                        </div>

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Âge minimal :</div>
                            <div class=\"fld_otpt\">{{ movie.ageMinimal }}</div>
                        </div>

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Genre :</div>
                            <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"{{ getPathIfRouteExists('genreActions',{ 'nom' : (movie.genre)}) }}\">{{ movie.genre }}</a></div>
                        </div>

                        <div class=\"fld fld-mlt\">
                            <div class=\"fld_lbl\">Casting :</div>
                            <div class=\"fld_otpt fld_otpt-mlt\">
                            {% if movie.acteurs|length > 0 %}
                                {% for actor in movie.acteurs %}
                                    <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"{{ getPathIfRouteExists('acteurActions',{ 'nomPrenom' : (actor.nomPrenom)}) }}\">{{ actor.nomPrenom }}</a></div>
                                {% endfor %}
                            {% else %}
                                <div class=\"fld_otpt\">Aucun acteur dans le casting de ce film</div>
                            {% endif %}
                            </div>
                        </div>

                    </div>
            </div>
            {% endfor %}
            </div>

        {% endblock %}
    {% endembed %}

{% endblock %}", "pageTemplate/filmsAllFieldsResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/filmsAllFieldsResult.html.twig");
    }
}


/* pageTemplate/filmsAllFieldsResult.html.twig */
class __TwigTemplate_2bc186728d9e695653e8a4a8b3b4cc510192337838538d43e167b539b78b2e35___107493296 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTemplate/filmsAllFieldsResult.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTemplate/filmsAllFieldsResult.html.twig"));

        $this->parent = $this->loadTemplate("blockTemplate/containerWithTitle.twig", "pageTemplate/filmsAllFieldsResult.html.twig", 5);
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
            <div class=\"cntnr onChld-ntLst-mrgn-bttm\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 9, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  327 => 60,  316 => 54,  312 => 52,  309 => 51,  298 => 49,  293 => 48,  291 => 47,  280 => 41,  272 => 36,  264 => 31,  256 => 26,  248 => 21,  238 => 16,  230 => 10,  226 => 9,  222 => 7,  212 => 6,  189 => 5,  73 => 64,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block CONTENT %}

    {% embed 'blockTemplate/containerWithTitle.twig' %}
        {% block containerWithTitle_content %}

            <div class=\"cntnr onChld-ntLst-mrgn-bttm\">
            {% for movie in movies %}
            <div class=\"fld_cntnr\">

                    <div class=\"fld_grp\">

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Titre :</div>
                            <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"{{ getPathIfRouteExists('filmActions',{ 'titre' : (movie.titre)}) }}\">{{ movie.titre }}</a></div>
                        </div>

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Durée (en minutes) :</div>
                            <div class=\"fld_otpt\">{{ movie.duree }}</div>
                        </div>

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Date de sorite :</div>
                            <div class=\"fld_otpt\">{{ movie.dateSortie|date('d/m/Y') }}</div>
                        </div>

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Note :</div>
                            <div class=\"fld_otpt\">{{ movie.note }}</div>
                        </div>

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Âge minimal :</div>
                            <div class=\"fld_otpt\">{{ movie.ageMinimal }}</div>
                        </div>

                        <div class=\"fld fld-smpl fld-inln\">
                            <div class=\"fld_lbl\">Genre :</div>
                            <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"{{ getPathIfRouteExists('genreActions',{ 'nom' : (movie.genre)}) }}\">{{ movie.genre }}</a></div>
                        </div>

                        <div class=\"fld fld-mlt\">
                            <div class=\"fld_lbl\">Casting :</div>
                            <div class=\"fld_otpt fld_otpt-mlt\">
                            {% if movie.acteurs|length > 0 %}
                                {% for actor in movie.acteurs %}
                                    <div class=\"fld_otpt\"><a class=\"txt-lnk-clr txt-lnk-ndrln\" href=\"{{ getPathIfRouteExists('acteurActions',{ 'nomPrenom' : (actor.nomPrenom)}) }}\">{{ actor.nomPrenom }}</a></div>
                                {% endfor %}
                            {% else %}
                                <div class=\"fld_otpt\">Aucun acteur dans le casting de ce film</div>
                            {% endif %}
                            </div>
                        </div>

                    </div>
            </div>
            {% endfor %}
            </div>

        {% endblock %}
    {% endembed %}

{% endblock %}", "pageTemplate/filmsAllFieldsResult.html.twig", "/Users/elyas/Desktop/cineland/templates/pageTemplate/filmsAllFieldsResult.html.twig");
    }
}
