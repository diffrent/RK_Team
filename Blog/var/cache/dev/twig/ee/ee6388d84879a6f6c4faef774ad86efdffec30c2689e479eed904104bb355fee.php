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
        $__internal_f008a926f5ca934fef545f2283e40aa32aba6d217e5c16b3bae591615ff2d4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f008a926f5ca934fef545f2283e40aa32aba6d217e5c16b3bae591615ff2d4b7->enter($__internal_f008a926f5ca934fef545f2283e40aa32aba6d217e5c16b3bae591615ff2d4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f008a926f5ca934fef545f2283e40aa32aba6d217e5c16b3bae591615ff2d4b7->leave($__internal_f008a926f5ca934fef545f2283e40aa32aba6d217e5c16b3bae591615ff2d4b7_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_7926359f9aa65c8d959bfc62befb135b228f6f038c5e79fbfa41552925f7e9f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7926359f9aa65c8d959bfc62befb135b228f6f038c5e79fbfa41552925f7e9f9->enter($__internal_7926359f9aa65c8d959bfc62befb135b228f6f038c5e79fbfa41552925f7e9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_7926359f9aa65c8d959bfc62befb135b228f6f038c5e79fbfa41552925f7e9f9->leave($__internal_7926359f9aa65c8d959bfc62befb135b228f6f038c5e79fbfa41552925f7e9f9_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_7527c11b47da0efc668181d7331897820ab28f8107814566e028ed58f3b6aab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7527c11b47da0efc668181d7331897820ab28f8107814566e028ed58f3b6aab3->enter($__internal_7527c11b47da0efc668181d7331897820ab28f8107814566e028ed58f3b6aab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
";
        
        $__internal_7527c11b47da0efc668181d7331897820ab28f8107814566e028ed58f3b6aab3->leave($__internal_7527c11b47da0efc668181d7331897820ab28f8107814566e028ed58f3b6aab3_prof);

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
        return array (  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
{% endblock %}
";
    }
}
