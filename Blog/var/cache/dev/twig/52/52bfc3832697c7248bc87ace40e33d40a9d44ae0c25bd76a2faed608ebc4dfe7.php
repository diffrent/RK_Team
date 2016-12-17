<?php

/* contacts/show.html.twig */
class __TwigTemplate_74789bf8fa1e5de6d7994ed2fd18b037718c7a0bf1c0f63b820bcb484535d54f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contacts/show.html.twig", 1);
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
        $__internal_9a75202172b9b6dd29045bfd800b699ff56396d9af65f01e8578b33287c8c7a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a75202172b9b6dd29045bfd800b699ff56396d9af65f01e8578b33287c8c7a6->enter($__internal_9a75202172b9b6dd29045bfd800b699ff56396d9af65f01e8578b33287c8c7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contacts/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a75202172b9b6dd29045bfd800b699ff56396d9af65f01e8578b33287c8c7a6->leave($__internal_9a75202172b9b6dd29045bfd800b699ff56396d9af65f01e8578b33287c8c7a6_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_091006cbea3c2fd9154e0a0a19447748c0415bd85837b6cbef753c201128468f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091006cbea3c2fd9154e0a0a19447748c0415bd85837b6cbef753c201128468f->enter($__internal_091006cbea3c2fd9154e0a0a19447748c0415bd85837b6cbef753c201128468f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
            <h3>Свържи се с нас!!</h3>
        </header>

        <div class=\"white-div\">

            <textarea class=\"form-control\" rows=\"12\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")), "content", array()), "html", null, true);
        echo "</textarea>
        </div>
        <label></label>

        <a class=\"button\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Назад &raquo;</a>
        ";
        // line 20
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAdmin", array(), "method"))) {
            // line 21
            echo "            <a class=\"button\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacts_edit", array("id" => 1));
            echo "\">Редактирай</a>
        ";
        }
        // line 23
        echo "
    </div>
";
        
        $__internal_091006cbea3c2fd9154e0a0a19447748c0415bd85837b6cbef753c201128468f->leave($__internal_091006cbea3c2fd9154e0a0a19447748c0415bd85837b6cbef753c201128468f_prof);

    }

    public function getTemplateName()
    {
        return "contacts/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  71 => 21,  69 => 20,  65 => 19,  58 => 15,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/articleView.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/lightbox.css') }}\">


    <div class=\"mainDiv\">
        <header>
            <h3>Свържи се с нас!!</h3>
        </header>

        <div class=\"white-div\">

            <textarea class=\"form-control\" rows=\"12\">{{ contacts.content }}</textarea>
        </div>
        <label></label>

        <a class=\"button\" href=\"{{ path('blog_index') }}\">Назад &raquo;</a>
        {% if app.getUser() and app.getUser().isAdmin()  %}
            <a class=\"button\" href=\"{{ path('contacts_edit', {'id': 1}) }}\">Редактирай</a>
        {% endif %}

    </div>
{% endblock %}";
    }
}
