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
        $__internal_49c9b651bad1366b3ed49a9233f3c5d5badb2bff6247ea28c4ab383ce15e58ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c9b651bad1366b3ed49a9233f3c5d5badb2bff6247ea28c4ab383ce15e58ab->enter($__internal_49c9b651bad1366b3ed49a9233f3c5d5badb2bff6247ea28c4ab383ce15e58ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49c9b651bad1366b3ed49a9233f3c5d5badb2bff6247ea28c4ab383ce15e58ab->leave($__internal_49c9b651bad1366b3ed49a9233f3c5d5badb2bff6247ea28c4ab383ce15e58ab_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_73d96f019bb29ebe382830c62cbf9fb8f23e0d2bff0345d7443645bc3e44fb16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d96f019bb29ebe382830c62cbf9fb8f23e0d2bff0345d7443645bc3e44fb16->enter($__internal_73d96f019bb29ebe382830c62cbf9fb8f23e0d2bff0345d7443645bc3e44fb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_73d96f019bb29ebe382830c62cbf9fb8f23e0d2bff0345d7443645bc3e44fb16->leave($__internal_73d96f019bb29ebe382830c62cbf9fb8f23e0d2bff0345d7443645bc3e44fb16_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_59f44a20ec1fce76ba00efe115c5278ed91181da3ebabf1f7dbc3207c7392c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f44a20ec1fce76ba00efe115c5278ed91181da3ebabf1f7dbc3207c7392c5c->enter($__internal_59f44a20ec1fce76ba00efe115c5278ed91181da3ebabf1f7dbc3207c7392c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
            <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\"><a class=\"button\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_all");
        echo "\">Потребители</a></button>
        <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\"><a class=\"button\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacts_create");
        echo "\">Нов Контакт</a></button>

            </label>
    </div>
";
        
        $__internal_59f44a20ec1fce76ba00efe115c5278ed91181da3ebabf1f7dbc3207c7392c5c->leave($__internal_59f44a20ec1fce76ba00efe115c5278ed91181da3ebabf1f7dbc3207c7392c5c_prof);

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
        return array (  72 => 14,  68 => 13,  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
            <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\"><a class=\"button\" href=\"{{ path('admin_users_all') }}\">Потребители</a></button>
        <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\"><a class=\"button\" href=\"{{ path('contacts_create') }}\">Нов Контакт</a></button>

            </label>
    </div>
{% endblock %}
";
    }
}
