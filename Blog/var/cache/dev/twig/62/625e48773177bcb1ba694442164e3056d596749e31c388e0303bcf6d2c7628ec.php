<?php

/* statistics/show.html.twig */
class __TwigTemplate_fe33de6fe28ca32f9ef601f1bf274038c68614af17ea2541a0cbce7e6dacb5d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "statistics/show.html.twig", 1);
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
        $__internal_823de0cc7f04109f0c5a79ff9964e375f7c86d91abd903701e9d15fb37d1cdaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823de0cc7f04109f0c5a79ff9964e375f7c86d91abd903701e9d15fb37d1cdaf->enter($__internal_823de0cc7f04109f0c5a79ff9964e375f7c86d91abd903701e9d15fb37d1cdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "statistics/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_823de0cc7f04109f0c5a79ff9964e375f7c86d91abd903701e9d15fb37d1cdaf->leave($__internal_823de0cc7f04109f0c5a79ff9964e375f7c86d91abd903701e9d15fb37d1cdaf_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_2a8a80a9fbd5c39c30b80612c983cdbce13b4d9399032144e389e4b62e397bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8a80a9fbd5c39c30b80612c983cdbce13b4d9399032144e389e4b62e397bf1->enter($__internal_2a8a80a9fbd5c39c30b80612c983cdbce13b4d9399032144e389e4b62e397bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/statistics.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\">

    <div class=\"mainDiv\">
        <header>
            <h3>Статистика</h3>
        </header>
        <div class=\"content\">
                <div class=\"white-div\">
                    <textarea class=\"form-control\" rows=\"25\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "content", array()), "html", null, true);
        echo "</textarea>
                 </div>

                <div class=\"white-div-right\">
                     <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bulka.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery\">
                     <img style=\"display: block;width: 100%;height: auto;\"
                         src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bulka.jpg"), "html", null, true);
        echo "\"/>
                     </a>
                </div>

                <div class=\"white-div-right\">
                    <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bebe.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery\">
                    <img style=\"display: block;width: 100%;height: auto;\"
                    src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bebe.jpg"), "html", null, true);
        echo "\"/>
                    </a>
                </div>
        </div>

            <label></label>
            ";
        // line 32
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAdmin", array(), "method"))) {
            // line 33
            echo "                <a class=\"button\" style=\"padding: 15px\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statistics_edit", array("id" => 1));
            echo "\">Редактирай</a>
            ";
        }
        // line 35
        echo "                <a class=\"button\" style=\"padding: 15px\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Назад &raquo;</a>
    </div>
";
        
        $__internal_2a8a80a9fbd5c39c30b80612c983cdbce13b4d9399032144e389e4b62e397bf1->leave($__internal_2a8a80a9fbd5c39c30b80612c983cdbce13b4d9399032144e389e4b62e397bf1_prof);

    }

    public function getTemplateName()
    {
        return "statistics/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 35,  92 => 33,  90 => 32,  81 => 26,  76 => 24,  68 => 19,  63 => 17,  56 => 13,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/statistics.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/lightbox.css') }}\">

    <div class=\"mainDiv\">
        <header>
            <h3>Статистика</h3>
        </header>
        <div class=\"content\">
                <div class=\"white-div\">
                    <textarea class=\"form-control\" rows=\"25\">{{ statistics.content }}</textarea>
                 </div>

                <div class=\"white-div-right\">
                     <a href=\"{{ asset('images/bulka.jpg') }}\" data-lightbox=\"gallery\">
                     <img style=\"display: block;width: 100%;height: auto;\"
                         src=\"{{ asset('images/bulka.jpg') }}\"/>
                     </a>
                </div>

                <div class=\"white-div-right\">
                    <a href=\"{{ asset('images/bebe.jpg') }}\" data-lightbox=\"gallery\">
                    <img style=\"display: block;width: 100%;height: auto;\"
                    src=\"{{ asset('images/bebe.jpg') }}\"/>
                    </a>
                </div>
        </div>

            <label></label>
            {% if app.getUser() and app.getUser().isAdmin()  %}
                <a class=\"button\" style=\"padding: 15px\" href=\"{{ path('statistics_edit', {'id': 1}) }}\">Редактирай</a>
            {% endif %}
                <a class=\"button\" style=\"padding: 15px\" href=\"{{ path('blog_index') }}\">Назад &raquo;</a>
    </div>
{% endblock %}";
    }
}
