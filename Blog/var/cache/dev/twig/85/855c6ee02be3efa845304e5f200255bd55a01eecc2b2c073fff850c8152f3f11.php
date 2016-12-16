<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_85275d914271e22e279f5061a3e05817bd3742a88151550f2da378cd799f7770 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52f4ccbbf95f6b257a9aa0251dc2235376cef3b474d835992e0fd2193bd9e553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f4ccbbf95f6b257a9aa0251dc2235376cef3b474d835992e0fd2193bd9e553->enter($__internal_52f4ccbbf95f6b257a9aa0251dc2235376cef3b474d835992e0fd2193bd9e553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52f4ccbbf95f6b257a9aa0251dc2235376cef3b474d835992e0fd2193bd9e553->leave($__internal_52f4ccbbf95f6b257a9aa0251dc2235376cef3b474d835992e0fd2193bd9e553_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_08b8836abfb6918e525c78821237c3c69d07f451dc743a236eb273a3d78ded28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b8836abfb6918e525c78821237c3c69d07f451dc743a236eb273a3d78ded28->enter($__internal_08b8836abfb6918e525c78821237c3c69d07f451dc743a236eb273a3d78ded28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_08b8836abfb6918e525c78821237c3c69d07f451dc743a236eb273a3d78ded28->leave($__internal_08b8836abfb6918e525c78821237c3c69d07f451dc743a236eb273a3d78ded28_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdc38a5ea83180afa896266ed7a8183178f376fab0708d98e8c93be5e52f9e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdc38a5ea83180afa896266ed7a8183178f376fab0708d98e8c93be5e52f9e61->enter($__internal_bdc38a5ea83180afa896266ed7a8183178f376fab0708d98e8c93be5e52f9e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bdc38a5ea83180afa896266ed7a8183178f376fab0708d98e8c93be5e52f9e61->leave($__internal_bdc38a5ea83180afa896266ed7a8183178f376fab0708d98e8c93be5e52f9e61_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d3655897cd3ac9611d5eaaf68e0de48bdef237854fc68e6c9a80ce5a59d3e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3655897cd3ac9611d5eaaf68e0de48bdef237854fc68e6c9a80ce5a59d3e7b->enter($__internal_6d3655897cd3ac9611d5eaaf68e0de48bdef237854fc68e6c9a80ce5a59d3e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6d3655897cd3ac9611d5eaaf68e0de48bdef237854fc68e6c9a80ce5a59d3e7b->leave($__internal_6d3655897cd3ac9611d5eaaf68e0de48bdef237854fc68e6c9a80ce5a59d3e7b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
