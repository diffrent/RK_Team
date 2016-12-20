<?php

/* about/edit.html.twig */
class __TwigTemplate_90aa7d28669b73e0f22a1055d70b03a79a88bb7fb799cf7d02bdbfd45d91295a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "about/edit.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56b366a842ab603d9ca8217b2251c265c805423dddde861aaa16f5d3ecdd377e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b366a842ab603d9ca8217b2251c265c805423dddde861aaa16f5d3ecdd377e->enter($__internal_56b366a842ab603d9ca8217b2251c265c805423dddde861aaa16f5d3ecdd377e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56b366a842ab603d9ca8217b2251c265c805423dddde861aaa16f5d3ecdd377e->leave($__internal_56b366a842ab603d9ca8217b2251c265c805423dddde861aaa16f5d3ecdd377e_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_cf6a897054320e97f94a5d799b8c3707422db4aedf99aa4ddbd437ad9c007cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf6a897054320e97f94a5d799b8c3707422db4aedf99aa4ddbd437ad9c007cb0->enter($__internal_cf6a897054320e97f94a5d799b8c3707422db4aedf99aa4ddbd437ad9c007cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/about.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\">

    <div class=\"mainDiv\">
        <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about_edit", array("id" => 1));
        echo "\" method=\"POST\">
            <header>
                <h3>Редактиране на За Нас</h3>
            </header>
            <div class=\"content\">
                <div class=\"conteiner\">
                    <div class=\"white-div\">
                        <p class=\"col-sm-4 control-label\" for=\"about_biography1\">Биография на първия отец:</p>
                        <textarea class=\"form-control\" rows=\"12\" id=\"about_biography1\"
                                  name=\"about[biography1]\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), "biography1", array()), "html", null, true);
        echo "</textarea>
                    </div>
                    <div class=\"white-div-right\">
                        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bebe.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery\">
                            <img style=\"display: block;width: 100%;height: auto;\"
                                 src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bebe.jpg"), "html", null, true);
        echo "\"/>
                        </a>
                    </div>
                </div>
                <div class=\"conteiner\">
                    <div class=\"white-div\">
                        <p class=\"col-sm-4 control-label\" for=\"about_biography2\">Биография на втория отец:</p>
                        <textarea class=\"form-control\" rows=\"12\" id=\"about_biography2\"
                                  name=\"about[biography2]\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), "biography2", array()), "html", null, true);
        echo "</textarea>
                    </div>
                    <div class=\"white-div-right\">
                        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bulka.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery\">
                            <img style=\"display: block;width: 100%;height: auto;\"
                                 src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bulka.jpg"), "html", null, true);
        echo "\"/>
                        </a>
                    </div>
                </div>
                <div class=\"conteiner\">
                    <div class=\"white-div\">
                        <p class=\"col-sm-4 control-label\" for=\"about_content\">Изтория на църквата:</p>
                        <textarea class=\"form-control\" rows=\"12\" id=\"about_content\"
                                  name=\"about[content]\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), "content", array()), "html", null, true);
        echo "</textarea>
                    </div>
                    <div class=\"white-div-right\">
                        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bebe.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery\">
                            <img style=\"display: block;width: 100%;height: auto;\"
                                 src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bebe.jpg"), "html", null, true);
        echo "\"/>
                        </a>
                    </div>
                </div>
            </div>

            ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
            ";
        // line 55
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAdmin", array(), "method")) {
            // line 56
            echo "                <label></label>
                <button type=\"submit\" class=\"button\">Готово</button>
                <a class=\"button\" href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about_view", array("id" => 1));
            echo "\">Отказ</a>
            ";
        }
        // line 60
        echo "        </form>
    </div>
";
        
        $__internal_cf6a897054320e97f94a5d799b8c3707422db4aedf99aa4ddbd437ad9c007cb0->leave($__internal_cf6a897054320e97f94a5d799b8c3707422db4aedf99aa4ddbd437ad9c007cb0_prof);

    }

    public function getTemplateName()
    {
        return "about/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 60,  137 => 58,  133 => 56,  131 => 55,  127 => 54,  118 => 48,  113 => 46,  107 => 43,  96 => 35,  91 => 33,  85 => 30,  74 => 22,  69 => 20,  63 => 17,  51 => 8,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/about.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/lightbox.css') }}\">

    <div class=\"mainDiv\">
        <form action=\"{{ path('about_edit', {id: 1}) }}\" method=\"POST\">
            <header>
                <h3>Редактиране на За Нас</h3>
            </header>
            <div class=\"content\">
                <div class=\"conteiner\">
                    <div class=\"white-div\">
                        <p class=\"col-sm-4 control-label\" for=\"about_biography1\">Биография на първия отец:</p>
                        <textarea class=\"form-control\" rows=\"12\" id=\"about_biography1\"
                                  name=\"about[biography1]\">{{ about.biography1 }}</textarea>
                    </div>
                    <div class=\"white-div-right\">
                        <a href=\"{{ asset('images/bebe.jpg') }}\" data-lightbox=\"gallery\">
                            <img style=\"display: block;width: 100%;height: auto;\"
                                 src=\"{{ asset('images/bebe.jpg') }}\"/>
                        </a>
                    </div>
                </div>
                <div class=\"conteiner\">
                    <div class=\"white-div\">
                        <p class=\"col-sm-4 control-label\" for=\"about_biography2\">Биография на втория отец:</p>
                        <textarea class=\"form-control\" rows=\"12\" id=\"about_biography2\"
                                  name=\"about[biography2]\">{{ about.biography2 }}</textarea>
                    </div>
                    <div class=\"white-div-right\">
                        <a href=\"{{ asset('images/bulka.jpg') }}\" data-lightbox=\"gallery\">
                            <img style=\"display: block;width: 100%;height: auto;\"
                                 src=\"{{ asset('images/bulka.jpg') }}\"/>
                        </a>
                    </div>
                </div>
                <div class=\"conteiner\">
                    <div class=\"white-div\">
                        <p class=\"col-sm-4 control-label\" for=\"about_content\">Изтория на църквата:</p>
                        <textarea class=\"form-control\" rows=\"12\" id=\"about_content\"
                                  name=\"about[content]\">{{ about.content }}</textarea>
                    </div>
                    <div class=\"white-div-right\">
                        <a href=\"{{ asset('images/bebe.jpg') }}\" data-lightbox=\"gallery\">
                            <img style=\"display: block;width: 100%;height: auto;\"
                                 src=\"{{ asset('images/bebe.jpg') }}\"/>
                        </a>
                    </div>
                </div>
            </div>

            {{ form_row(form._token) }}
            {% if app.getUser().isAdmin()  %}
                <label></label>
                <button type=\"submit\" class=\"button\">Готово</button>
                <a class=\"button\" href=\"{{ path('about_view', {id: 1}) }}\">Отказ</a>
            {% endif %}
        </form>
    </div>
{% endblock %}";
    }
}
