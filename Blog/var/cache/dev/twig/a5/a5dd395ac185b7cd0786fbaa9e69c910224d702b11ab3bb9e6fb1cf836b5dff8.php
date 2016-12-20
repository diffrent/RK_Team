<?php

/* contacts/edit.html.twig */
class __TwigTemplate_e313d61c75cd81d7a18ec9ae40bc513a2d1df1df14102e1831a791801afa559b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contacts/edit.html.twig", 1);
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
        $__internal_cf4cb2b9b40c43dd0779b32e930de0fffe6a78d4bff0cb404b9a3a334c7d0d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4cb2b9b40c43dd0779b32e930de0fffe6a78d4bff0cb404b9a3a334c7d0d03->enter($__internal_cf4cb2b9b40c43dd0779b32e930de0fffe6a78d4bff0cb404b9a3a334c7d0d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contacts/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf4cb2b9b40c43dd0779b32e930de0fffe6a78d4bff0cb404b9a3a334c7d0d03->leave($__internal_cf4cb2b9b40c43dd0779b32e930de0fffe6a78d4bff0cb404b9a3a334c7d0d03_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_292c87ac6b72a665330ccfe785726fc77aedd6c9ffec23c1aa93bf69d3ed121d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292c87ac6b72a665330ccfe785726fc77aedd6c9ffec23c1aa93bf69d3ed121d->enter($__internal_292c87ac6b72a665330ccfe785726fc77aedd6c9ffec23c1aa93bf69d3ed121d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacts_edit", array("id" => 1));
        echo "\" method=\"POST\">
            <header>
                <h3>Редактиране на Контакти</h3>
            </header>
            <div class=\"content\">
                <div class=\"conteiner\">
                    <div class=\"white-div\">
                        <p class=\"col-sm-4 control-label\" for=\"contacts_content\">Задаване на нов адрес:</p>
                        <textarea class=\"form-control\" rows=\"12\" id=\"contacts_content\"
                                  name=\"contacts[content]\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")), "content", array()), "html", null, true);
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
            </div>
            ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
            ";
        // line 28
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAdmin", array(), "method")) {
            // line 29
            echo "                <label></label>
                <button type=\"submit\" style=\"padding: 15px\" class=\"button\">Готово</button>
                <a class=\"button\" style=\"padding: 15px\" href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacts_view", array("id" => 1));
            echo "\">Отказ</a>
            ";
        }
        // line 33
        echo "        </form>
    </div>
";
        
        $__internal_292c87ac6b72a665330ccfe785726fc77aedd6c9ffec23c1aa93bf69d3ed121d->leave($__internal_292c87ac6b72a665330ccfe785726fc77aedd6c9ffec23c1aa93bf69d3ed121d_prof);

    }

    public function getTemplateName()
    {
        return "contacts/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  92 => 31,  88 => 29,  86 => 28,  82 => 27,  74 => 22,  69 => 20,  63 => 17,  51 => 8,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/about.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/lightbox.css') }}\">

    <div class=\"mainDiv\">
        <form action=\"{{ path('contacts_edit', {id: 1}) }}\" method=\"POST\">
            <header>
                <h3>Редактиране на Контакти</h3>
            </header>
            <div class=\"content\">
                <div class=\"conteiner\">
                    <div class=\"white-div\">
                        <p class=\"col-sm-4 control-label\" for=\"contacts_content\">Задаване на нов адрес:</p>
                        <textarea class=\"form-control\" rows=\"12\" id=\"contacts_content\"
                                  name=\"contacts[content]\">{{ contacts.content }}</textarea>
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
                <button type=\"submit\" style=\"padding: 15px\" class=\"button\">Готово</button>
                <a class=\"button\" style=\"padding: 15px\" href=\"{{ path('contacts_view', {id: 1}) }}\">Отказ</a>
            {% endif %}
        </form>
    </div>
{% endblock %}";
    }
}
