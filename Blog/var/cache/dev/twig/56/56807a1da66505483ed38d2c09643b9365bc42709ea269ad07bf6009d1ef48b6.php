<?php

/* about/show.html.twig */
class __TwigTemplate_0ee207fbd7d873a06dde07f56ac2635bcdf50ff888064df18244cb5e2140cead extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "about/show.html.twig", 1);
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
        $__internal_decf73ce007263b1ba54e23767507d55821ff764b96823ee9f07a2ecf49b7d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_decf73ce007263b1ba54e23767507d55821ff764b96823ee9f07a2ecf49b7d03->enter($__internal_decf73ce007263b1ba54e23767507d55821ff764b96823ee9f07a2ecf49b7d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_decf73ce007263b1ba54e23767507d55821ff764b96823ee9f07a2ecf49b7d03->leave($__internal_decf73ce007263b1ba54e23767507d55821ff764b96823ee9f07a2ecf49b7d03_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_03a64d18d0bf7c75245e0261e0832b14cea209aa8c5a4a5dae9cc1d9835357f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a64d18d0bf7c75245e0261e0832b14cea209aa8c5a4a5dae9cc1d9835357f4->enter($__internal_03a64d18d0bf7c75245e0261e0832b14cea209aa8c5a4a5dae9cc1d9835357f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/articleView.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\">


    <div class=\"mainDiv\">
        <header>
            <h3>За нас</h3>
        </header>

        <div class=\"white-div\">

            <textarea class=\"form-control\" rows=\"12\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), "content", array()), "html", null, true);
        echo "</textarea>
        </div>
        <label></label>
        <a class=\"button\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Назад &raquo;</a>
        ";
        // line 19
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAdmin", array(), "method"))) {
            // line 20
            echo "            <a class=\"button\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about_edit", array("id" => 1));
            echo "\">Редактирай</a>
        ";
        }
        // line 22
        echo "

    </div>
";
        
        $__internal_03a64d18d0bf7c75245e0261e0832b14cea209aa8c5a4a5dae9cc1d9835357f4->leave($__internal_03a64d18d0bf7c75245e0261e0832b14cea209aa8c5a4a5dae9cc1d9835357f4_prof);

    }

    public function getTemplateName()
    {
        return "about/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  70 => 20,  68 => 19,  64 => 18,  58 => 15,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/articleView.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/lightbox.css') }}\">


    <div class=\"mainDiv\">
        <header>
            <h3>За нас</h3>
        </header>

        <div class=\"white-div\">

            <textarea class=\"form-control\" rows=\"12\">{{ about.content }}</textarea>
        </div>
        <label></label>
        <a class=\"button\" href=\"{{ path('blog_index') }}\">Назад &raquo;</a>
        {% if app.getUser() and app.getUser().isAdmin()  %}
            <a class=\"button\" href=\"{{ path('about_edit', {'id': 1}) }}\">Редактирай</a>
        {% endif %}


    </div>
{% endblock %}";
    }
}
