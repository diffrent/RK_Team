<?php

/* user/profile.html.twig */
class __TwigTemplate_ffaafad65f0151a0f7835ddc97fa34e047f0930484cdfd35b5d545861a8c6e24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e99a9048252df75620bc0a541652e39662ef45528b14b8ca47488c47f8a11b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99a9048252df75620bc0a541652e39662ef45528b14b8ca47488c47f8a11b36->enter($__internal_e99a9048252df75620bc0a541652e39662ef45528b14b8ca47488c47f8a11b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e99a9048252df75620bc0a541652e39662ef45528b14b8ca47488c47f8a11b36->leave($__internal_e99a9048252df75620bc0a541652e39662ef45528b14b8ca47488c47f8a11b36_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a03f55bea66fda9bab0b20df9ff9b7202979e1cd3b61a09efcc41fb1790f5dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03f55bea66fda9bab0b20df9ff9b7202979e1cd3b61a09efcc41fb1790f5dc3->enter($__internal_a03f55bea66fda9bab0b20df9ff9b7202979e1cd3b61a09efcc41fb1790f5dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_a03f55bea66fda9bab0b20df9ff9b7202979e1cd3b61a09efcc41fb1790f5dc3->leave($__internal_a03f55bea66fda9bab0b20df9ff9b7202979e1cd3b61a09efcc41fb1790f5dc3_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_d455dc654ad312f3c6c02eb3ec30246ed1337cab63698b37ff2166de782b3014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d455dc654ad312f3c6c02eb3ec30246ed1337cab63698b37ff2166de782b3014->enter($__internal_d455dc654ad312f3c6c02eb3ec30246ed1337cab63698b37ff2166de782b3014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/profile.css"), "html", null, true);
        echo "\">
    <div class=\"mainDiv\" style=\"height: auto\">
        <header><h3>Потребителски емаил: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</h3></header>
        <header><h3>Потребителско име: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "</h3></header>
        <div class=\"conteiner\">
            <div class=\"white-div-right\">
                ";
        // line 12
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAdmin", array(), "method"))) {
            // line 13
            echo "
                    <a class=\"button\" href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_create");
            echo "\">Добави Статия</a>
                    <a class=\"button\" href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messages_index");
            echo "\">Четене на поща</a>
                    <a class=\"button\" href=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_all");
            echo "\">Потребители</a>
                    <a class=\"button\" href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacts_edit", array("id" => 1));
            echo "\">Редакция Контакти</a>
                    <a class=\"button\" href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statistics_edit", array("id" => 1));
            echo "\">Редакция Статистика</a>
                    <a class=\"button\" href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about_edit", array("id" => 1));
            echo "\">Редакция За Нас</a>
            </div>
                ";
        }
        // line 22
        echo "        </div>
    </div>
";
        
        $__internal_d455dc654ad312f3c6c02eb3ec30246ed1337cab63698b37ff2166de782b3014->leave($__internal_d455dc654ad312f3c6c02eb3ec30246ed1337cab63698b37ff2166de782b3014_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 22,  94 => 19,  90 => 18,  86 => 17,  82 => 16,  78 => 15,  74 => 14,  71 => 13,  69 => 12,  63 => 9,  59 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'profile' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/profile.css') }}\">
    <div class=\"mainDiv\" style=\"height: auto\">
        <header><h3>Потребителски емаил: {{ user.email }}</h3></header>
        <header><h3>Потребителско име: {{ user.fullName }}</h3></header>
        <div class=\"conteiner\">
            <div class=\"white-div-right\">
                {% if app.getUser() and app.getUser().isAdmin()  %}

                    <a class=\"button\" href=\"{{ path('article_create') }}\">Добави Статия</a>
                    <a class=\"button\" href=\"{{ path('messages_index') }}\">Четене на поща</a>
                    <a class=\"button\" href=\"{{ path('admin_users_all') }}\">Потребители</a>
                    <a class=\"button\" href=\"{{ path('contacts_edit',{'id': 1}) }}\">Редакция Контакти</a>
                    <a class=\"button\" href=\"{{ path('statistics_edit',{'id': 1}) }}\">Редакция Статистика</a>
                    <a class=\"button\" href=\"{{ path('about_edit',{'id': 1}) }}\">Редакция За Нас</a>
            </div>
                {% endif %}
        </div>
    </div>
{% endblock %}
";
    }
}
