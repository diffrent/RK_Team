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
        $__internal_5cca8960e294a7d598faa849e36a13671e8c4f437c3af093dd7d94ee9973b339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cca8960e294a7d598faa849e36a13671e8c4f437c3af093dd7d94ee9973b339->enter($__internal_5cca8960e294a7d598faa849e36a13671e8c4f437c3af093dd7d94ee9973b339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cca8960e294a7d598faa849e36a13671e8c4f437c3af093dd7d94ee9973b339->leave($__internal_5cca8960e294a7d598faa849e36a13671e8c4f437c3af093dd7d94ee9973b339_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_86d19e97c49d02b937f5ae70ba3bae05372b0e268085af28b8109784a3858f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d19e97c49d02b937f5ae70ba3bae05372b0e268085af28b8109784a3858f5b->enter($__internal_86d19e97c49d02b937f5ae70ba3bae05372b0e268085af28b8109784a3858f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_86d19e97c49d02b937f5ae70ba3bae05372b0e268085af28b8109784a3858f5b->leave($__internal_86d19e97c49d02b937f5ae70ba3bae05372b0e268085af28b8109784a3858f5b_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_b16f1e6e6a90217a88677c764e898091b609a818413431fdc8b728eb41d20610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16f1e6e6a90217a88677c764e898091b609a818413431fdc8b728eb41d20610->enter($__internal_b16f1e6e6a90217a88677c764e898091b609a818413431fdc8b728eb41d20610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_b16f1e6e6a90217a88677c764e898091b609a818413431fdc8b728eb41d20610->leave($__internal_b16f1e6e6a90217a88677c764e898091b609a818413431fdc8b728eb41d20610_prof);

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
