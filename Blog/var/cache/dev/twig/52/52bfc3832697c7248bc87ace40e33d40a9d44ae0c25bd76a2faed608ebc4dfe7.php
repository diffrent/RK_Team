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
        $__internal_4e8e12d95c3b0eb4093df8207a25172c877e158c814de61258467e67bfe1e40a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8e12d95c3b0eb4093df8207a25172c877e158c814de61258467e67bfe1e40a->enter($__internal_4e8e12d95c3b0eb4093df8207a25172c877e158c814de61258467e67bfe1e40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contacts/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e8e12d95c3b0eb4093df8207a25172c877e158c814de61258467e67bfe1e40a->leave($__internal_4e8e12d95c3b0eb4093df8207a25172c877e158c814de61258467e67bfe1e40a_prof);

    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        $__internal_a93062568f13797837cf9e00c523e58318684d119ad6c9c37ba09c0586bc3244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93062568f13797837cf9e00c523e58318684d119ad6c9c37ba09c0586bc3244->enter($__internal_a93062568f13797837cf9e00c523e58318684d119ad6c9c37ba09c0586bc3244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/about.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\">


    <div class=\"mainDiv\">
        <header>
            <h3>Свържи се с нас!!</h3>
        </header>
        <div class=\"content\">
            <div class=\"conteiner\">
                <div class=\"white-div\">
                    <textarea class=\"form-control\" rows=\"12\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")), "content", array()), "html", null, true);
        echo "</textarea>
                </div>
                <div class=\"white-div-right\">
                    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bebe.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery\">
                        <img style=\"display: block;width: 100%;height: auto;\"
                             src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bebe.jpg"), "html", null, true);
        echo "\"/>
                    </a>
                </div>
            </div>
            <div class=\"conteiner\">
                <div class=\"white-div\">
                    <p style=\"width: 100%\">За всички ваши въпроси,съвети, коментари към нас, от тук може да ни пишете.
                        Ще ви бъде одговорено на вашия емаил, възможно най скоро!!</p>
                    <a class=\"button\" style=\"margin-left: 60%; margin-bottom: 5%\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_create");
        echo "\">Пиши ни!</a>
                </div>
            </div>
        </div>

        <label></label>
        ";
        // line 35
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAdmin", array(), "method"))) {
            // line 36
            echo "            <a class=\"button\" style=\"padding: 15px\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacts_edit", array("id" => 1));
            echo "\">Редактирай</a>
        ";
        }
        // line 38
        echo "        <a class=\"button\" style=\"padding: 15px\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Назад &raquo;</a>
    </div>
";
        
        $__internal_a93062568f13797837cf9e00c523e58318684d119ad6c9c37ba09c0586bc3244->leave($__internal_a93062568f13797837cf9e00c523e58318684d119ad6c9c37ba09c0586bc3244_prof);

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
        return array (  97 => 38,  91 => 36,  89 => 35,  80 => 29,  69 => 21,  64 => 19,  58 => 16,  45 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}


{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/about.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/lightbox.css') }}\">


    <div class=\"mainDiv\">
        <header>
            <h3>Свържи се с нас!!</h3>
        </header>
        <div class=\"content\">
            <div class=\"conteiner\">
                <div class=\"white-div\">
                    <textarea class=\"form-control\" rows=\"12\">{{ contacts.content }}</textarea>
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
                    <p style=\"width: 100%\">За всички ваши въпроси,съвети, коментари към нас, от тук може да ни пишете.
                        Ще ви бъде одговорено на вашия емаил, възможно най скоро!!</p>
                    <a class=\"button\" style=\"margin-left: 60%; margin-bottom: 5%\" href=\"{{ path('message_create') }}\">Пиши ни!</a>
                </div>
            </div>
        </div>

        <label></label>
        {% if app.getUser() and app.getUser().isAdmin()  %}
            <a class=\"button\" style=\"padding: 15px\" href=\"{{ path('contacts_edit', {'id': 1}) }}\">Редактирай</a>
        {% endif %}
        <a class=\"button\" style=\"padding: 15px\" href=\"{{ path('blog_index') }}\">Назад &raquo;</a>
    </div>
{% endblock %}
";
    }
}
