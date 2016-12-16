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
        $__internal_19b78776105eb88dfcebd491179ad1982ef6ba88c8a99966258c4ba534fcb89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b78776105eb88dfcebd491179ad1982ef6ba88c8a99966258c4ba534fcb89b->enter($__internal_19b78776105eb88dfcebd491179ad1982ef6ba88c8a99966258c4ba534fcb89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19b78776105eb88dfcebd491179ad1982ef6ba88c8a99966258c4ba534fcb89b->leave($__internal_19b78776105eb88dfcebd491179ad1982ef6ba88c8a99966258c4ba534fcb89b_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_5c0bdc28f0823658bc1b94fad2cfce54388fb66b2d5ab5ffaedb8c075839ff78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0bdc28f0823658bc1b94fad2cfce54388fb66b2d5ab5ffaedb8c075839ff78->enter($__internal_5c0bdc28f0823658bc1b94fad2cfce54388fb66b2d5ab5ffaedb8c075839ff78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_5c0bdc28f0823658bc1b94fad2cfce54388fb66b2d5ab5ffaedb8c075839ff78->leave($__internal_5c0bdc28f0823658bc1b94fad2cfce54388fb66b2d5ab5ffaedb8c075839ff78_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_578ca5f7f9d6caab2f4521e3fcd871eee8d8aa4f0afa13c38a4994258507c59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578ca5f7f9d6caab2f4521e3fcd871eee8d8aa4f0afa13c38a4994258507c59f->enter($__internal_578ca5f7f9d6caab2f4521e3fcd871eee8d8aa4f0afa13c38a4994258507c59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_578ca5f7f9d6caab2f4521e3fcd871eee8d8aa4f0afa13c38a4994258507c59f->leave($__internal_578ca5f7f9d6caab2f4521e3fcd871eee8d8aa4f0afa13c38a4994258507c59f_prof);

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
