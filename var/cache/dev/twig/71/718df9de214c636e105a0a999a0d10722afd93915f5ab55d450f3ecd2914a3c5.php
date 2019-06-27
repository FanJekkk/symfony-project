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

/* home/index.html.twig */
class __TwigTemplate_787894702cb0dd2e900efbe6d1807949e6431bd913ef93354b115396daf7644d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Добро пожаловать!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <nav class=\"navigation navbar navbar-expand-lg navbar-dark text-white fixed-top\">
        <a class=\"navbar-brand\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Blog</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\"
                aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
            <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Главная<span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_index");
        echo "\">Новости</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#contacts\">Контакты</a>
                </li>
            </ul>
        </div>
    </nav>
    <section class=\"first\">
        <div class=\"container\">
            <div class=\"row h-100 justify-content-center align-items-center\">
                <h1 class=\"blog mx-auto text-white\">Blog by FanJek</h1>
            </div>
        </div>
    </section>
    <section id=\"main2\">
        <div class=\"container text-center\">
            <h2>Новости</h2>
            <div class=\"row text-center\">
                <a name=\"news\" class=\"new mx-auto\">
                    <div class=\"col\"><img src=\"https://img.icons8.com/ios/50/000000/topic.png\"></div>
                    <div class=\"col\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "get", [0 => "comment"], "method", false, false, false, 41), "html", null, true);
        echo "</div>
                </a>
            </div>
        </div>
    </section>
    <section id=\"postadd\">
        <div class=\"container text-center\">
            <form class=\"post mx-auto\" name=\"post1\" method=\"get\">
                <div class=\"form-group\">
                    <label for=\"exampleFormControlTextarea1\">Что расскажете?)</label>
                    <input type=\"text\" name=\"comment\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"/>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Добавить</button>
            </form>
        </div>
    </section>
    <section id=\"top2\">
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["viewposts"]) || array_key_exists("viewposts", $context) ? $context["viewposts"] : (function () { throw new RuntimeError('Variable "viewposts" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 59
            echo "            <div class=\"col-sm-12 col-md-12 col-lg-12 text-center\">
                <h2>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 60), "html", null, true);
            echo "</h2>
                <p>Опубликовано: ";
            // line 61
            ((twig_get_attribute($this->env, $this->source, $context["post"], "publicated", [], "any", false, false, false, 61)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "publicated", [], "any", false, false, false, 61), "d.m.Y H:i"), "html", null, true))) : (print ("")));
            echo "</p>
                <div class=\"postik col rounded\">
                    <h3><br>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 63), "html", null, true);
            echo "</h3>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 67,  169 => 63,  164 => 61,  160 => 60,  157 => 59,  153 => 58,  133 => 41,  109 => 20,  103 => 17,  91 => 8,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Добро пожаловать!{% endblock %}


{% block body %}
    <nav class=\"navigation navbar navbar-expand-lg navbar-dark text-white fixed-top\">
        <a class=\"navbar-brand\" href=\"{{ path('home') }}\">Blog</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\"
                aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
            <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('home') }}\">Главная<span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('post_index') }}\">Новости</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#contacts\">Контакты</a>
                </li>
            </ul>
        </div>
    </nav>
    <section class=\"first\">
        <div class=\"container\">
            <div class=\"row h-100 justify-content-center align-items-center\">
                <h1 class=\"blog mx-auto text-white\">Blog by FanJek</h1>
            </div>
        </div>
    </section>
    <section id=\"main2\">
        <div class=\"container text-center\">
            <h2>Новости</h2>
            <div class=\"row text-center\">
                <a name=\"news\" class=\"new mx-auto\">
                    <div class=\"col\"><img src=\"https://img.icons8.com/ios/50/000000/topic.png\"></div>
                    <div class=\"col\">{{ app.request.get('comment')}}</div>
                </a>
            </div>
        </div>
    </section>
    <section id=\"postadd\">
        <div class=\"container text-center\">
            <form class=\"post mx-auto\" name=\"post1\" method=\"get\">
                <div class=\"form-group\">
                    <label for=\"exampleFormControlTextarea1\">Что расскажете?)</label>
                    <input type=\"text\" name=\"comment\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"/>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Добавить</button>
            </form>
        </div>
    </section>
    <section id=\"top2\">
        {% for post in viewposts %}
            <div class=\"col-sm-12 col-md-12 col-lg-12 text-center\">
                <h2>{{ post.title }}</h2>
                <p>Опубликовано: {{ post.publicated ? post.publicated|date('d.m.Y H:i') : '' }}</p>
                <div class=\"postik col rounded\">
                    <h3><br>{{ post.content }}</h3>
                </div>
            </div>
        {% endfor %}
    </section>
{% endblock %}
", "home/index.html.twig", "/var/www/html/symfony-project/templates/home/index.html.twig");
    }
}
