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
        $__internal_980a54533aea053cc4d9e149a672df1ce47ed7dfe10c300295300e75055bdf6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980a54533aea053cc4d9e149a672df1ce47ed7dfe10c300295300e75055bdf6a->enter($__internal_980a54533aea053cc4d9e149a672df1ce47ed7dfe10c300295300e75055bdf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_980a54533aea053cc4d9e149a672df1ce47ed7dfe10c300295300e75055bdf6a->leave($__internal_980a54533aea053cc4d9e149a672df1ce47ed7dfe10c300295300e75055bdf6a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0aeb7ce7a8cb79160149f02d61ad4e79a22e940a9ebdbea1cea12d4d4a4a4a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aeb7ce7a8cb79160149f02d61ad4e79a22e940a9ebdbea1cea12d4d4a4a4a59->enter($__internal_0aeb7ce7a8cb79160149f02d61ad4e79a22e940a9ebdbea1cea12d4d4a4a4a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0aeb7ce7a8cb79160149f02d61ad4e79a22e940a9ebdbea1cea12d4d4a4a4a59->leave($__internal_0aeb7ce7a8cb79160149f02d61ad4e79a22e940a9ebdbea1cea12d4d4a4a4a59_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_408640f99597243b1c974d82a0c87a4720844fe1770ed6c7acdd64d53b28555b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408640f99597243b1c974d82a0c87a4720844fe1770ed6c7acdd64d53b28555b->enter($__internal_408640f99597243b1c974d82a0c87a4720844fe1770ed6c7acdd64d53b28555b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_408640f99597243b1c974d82a0c87a4720844fe1770ed6c7acdd64d53b28555b->leave($__internal_408640f99597243b1c974d82a0c87a4720844fe1770ed6c7acdd64d53b28555b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c9c2d8ff533fa23d7e2d84132178cf0017749f50dfdf9770d1432942a530023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9c2d8ff533fa23d7e2d84132178cf0017749f50dfdf9770d1432942a530023->enter($__internal_5c9c2d8ff533fa23d7e2d84132178cf0017749f50dfdf9770d1432942a530023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5c9c2d8ff533fa23d7e2d84132178cf0017749f50dfdf9770d1432942a530023->leave($__internal_5c9c2d8ff533fa23d7e2d84132178cf0017749f50dfdf9770d1432942a530023_prof);

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
