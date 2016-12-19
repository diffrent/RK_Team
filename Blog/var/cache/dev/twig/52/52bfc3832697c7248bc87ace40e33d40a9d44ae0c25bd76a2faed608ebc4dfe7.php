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
        $__internal_d35cf6c0387843d58c89d8484ad7e5265d50ea338023e0c64217d4b2aafc3dcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35cf6c0387843d58c89d8484ad7e5265d50ea338023e0c64217d4b2aafc3dcd->enter($__internal_d35cf6c0387843d58c89d8484ad7e5265d50ea338023e0c64217d4b2aafc3dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contacts/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d35cf6c0387843d58c89d8484ad7e5265d50ea338023e0c64217d4b2aafc3dcd->leave($__internal_d35cf6c0387843d58c89d8484ad7e5265d50ea338023e0c64217d4b2aafc3dcd_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_7e318b65c30a898360ae65b7d999a9a45e17f7546321236136c49642cbfb770a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e318b65c30a898360ae65b7d999a9a45e17f7546321236136c49642cbfb770a->enter($__internal_7e318b65c30a898360ae65b7d999a9a45e17f7546321236136c49642cbfb770a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_7e318b65c30a898360ae65b7d999a9a45e17f7546321236136c49642cbfb770a->leave($__internal_7e318b65c30a898360ae65b7d999a9a45e17f7546321236136c49642cbfb770a_prof);

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
