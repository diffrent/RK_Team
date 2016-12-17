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
        $__internal_ab5db3407b7c861851e19ddb608110424a63b28edf937f46605646e5f61ea487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab5db3407b7c861851e19ddb608110424a63b28edf937f46605646e5f61ea487->enter($__internal_ab5db3407b7c861851e19ddb608110424a63b28edf937f46605646e5f61ea487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "statistics/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab5db3407b7c861851e19ddb608110424a63b28edf937f46605646e5f61ea487->leave($__internal_ab5db3407b7c861851e19ddb608110424a63b28edf937f46605646e5f61ea487_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_441c650b1a181a9d6e1fbdd87a6965f2e22ddeceddb1ff1a46a1be33f82ad4f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441c650b1a181a9d6e1fbdd87a6965f2e22ddeceddb1ff1a46a1be33f82ad4f7->enter($__internal_441c650b1a181a9d6e1fbdd87a6965f2e22ddeceddb1ff1a46a1be33f82ad4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
            <h3>Статистика</h3>
        </header>

        <div class=\"white-div\">

            <textarea class=\"form-control\" rows=\"12\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "content", array()), "html", null, true);
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statistics_edit", array("id" => 1));
            echo "\">Редактирай</a>
        ";
        }
        // line 22
        echo "
    </div>
";
        
        $__internal_441c650b1a181a9d6e1fbdd87a6965f2e22ddeceddb1ff1a46a1be33f82ad4f7->leave($__internal_441c650b1a181a9d6e1fbdd87a6965f2e22ddeceddb1ff1a46a1be33f82ad4f7_prof);

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
            <h3>Статистика</h3>
        </header>

        <div class=\"white-div\">

            <textarea class=\"form-control\" rows=\"12\">{{ statistics.content }}</textarea>
        </div>
        <label></label>
        <a class=\"button\" href=\"{{ path('blog_index') }}\">Назад &raquo;</a>
        {% if app.getUser() and app.getUser().isAdmin()  %}
            <a class=\"button\" href=\"{{ path('statistics_edit', {'id': 1}) }}\">Редактирай</a>
        {% endif %}

    </div>
{% endblock %}";
    }
}
