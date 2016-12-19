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
        $__internal_fd4c648878dd36ea0a59f9cfb3a24c4dcb3ce63d24f33436296616ec60e7857b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4c648878dd36ea0a59f9cfb3a24c4dcb3ce63d24f33436296616ec60e7857b->enter($__internal_fd4c648878dd36ea0a59f9cfb3a24c4dcb3ce63d24f33436296616ec60e7857b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd4c648878dd36ea0a59f9cfb3a24c4dcb3ce63d24f33436296616ec60e7857b->leave($__internal_fd4c648878dd36ea0a59f9cfb3a24c4dcb3ce63d24f33436296616ec60e7857b_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_ba3eb7812a62c8dde0e284053ab353604339e52fa59d87d6156909476d56dfc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3eb7812a62c8dde0e284053ab353604339e52fa59d87d6156909476d56dfc3->enter($__internal_ba3eb7812a62c8dde0e284053ab353604339e52fa59d87d6156909476d56dfc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_ba3eb7812a62c8dde0e284053ab353604339e52fa59d87d6156909476d56dfc3->leave($__internal_ba3eb7812a62c8dde0e284053ab353604339e52fa59d87d6156909476d56dfc3_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_e081d8605d98c62fffa9e09940772403df8bcb7698940baae3881f99000acece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e081d8605d98c62fffa9e09940772403df8bcb7698940baae3881f99000acece->enter($__internal_e081d8605d98c62fffa9e09940772403df8bcb7698940baae3881f99000acece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div>
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "
        <br>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "
    </div>
    <div>
        <label>
            <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\">
                <a class=\"button\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_create");
        echo "\">Добави Статия</a>
                </button>

            <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\">
                <a class=\"button\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_all");
        echo "\">Потребители</a>
            </button>
        <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\">
                <a class=\"button\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacts_create");
        echo "\">Нов Контакт</a>
            </button>
            <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\">
                <a class=\"button\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statistics_create");
        echo "\">Нова Статистика</a>
            </button>
            <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\">
                <a class=\"button\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about_create");
        echo "\">Добави за Нас</a>
            </button>
            </label>
    </div>
";
        
        $__internal_e081d8605d98c62fffa9e09940772403df8bcb7698940baae3881f99000acece->leave($__internal_e081d8605d98c62fffa9e09940772403df8bcb7698940baae3881f99000acece_prof);

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
        return array (  94 => 27,  88 => 24,  82 => 21,  76 => 18,  69 => 14,  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'profile' %}

{% block main %}
    <div>
        {{ user.email }}
        <br>
        {{ user.fullName }}
    </div>
    <div>
        <label>
            <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\">
                <a class=\"button\" href=\"{{ path('article_create') }}\">Добави Статия</a>
                </button>

            <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\">
                <a class=\"button\" href=\"{{ path('admin_users_all') }}\">Потребители</a>
            </button>
        <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\">
                <a class=\"button\" href=\"{{ path('contacts_create') }}\">Нов Контакт</a>
            </button>
            <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\">
                <a class=\"button\" href=\"{{ path('statistics_create') }}\">Нова Статистика</a>
            </button>
            <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\">
                <a class=\"button\" href=\"{{ path('about_create') }}\">Добави за Нас</a>
            </button>
            </label>
    </div>
{% endblock %}
";
    }
}
