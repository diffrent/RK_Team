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
        $__internal_26c486f5cb2509a0e058546c0ff20ff5c7a77255a54b7d7a02f9ead13d116c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c486f5cb2509a0e058546c0ff20ff5c7a77255a54b7d7a02f9ead13d116c06->enter($__internal_26c486f5cb2509a0e058546c0ff20ff5c7a77255a54b7d7a02f9ead13d116c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26c486f5cb2509a0e058546c0ff20ff5c7a77255a54b7d7a02f9ead13d116c06->leave($__internal_26c486f5cb2509a0e058546c0ff20ff5c7a77255a54b7d7a02f9ead13d116c06_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7ccba65f7e9f12e52088f82aea6cf5ea0115d8f71ac82293a680a656cbfa713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ccba65f7e9f12e52088f82aea6cf5ea0115d8f71ac82293a680a656cbfa713->enter($__internal_d7ccba65f7e9f12e52088f82aea6cf5ea0115d8f71ac82293a680a656cbfa713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d7ccba65f7e9f12e52088f82aea6cf5ea0115d8f71ac82293a680a656cbfa713->leave($__internal_d7ccba65f7e9f12e52088f82aea6cf5ea0115d8f71ac82293a680a656cbfa713_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1c6b05dcac4004aaa6653e53cf80b1c62dde66f9256123be2ebdb53dc6cbcec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c6b05dcac4004aaa6653e53cf80b1c62dde66f9256123be2ebdb53dc6cbcec->enter($__internal_b1c6b05dcac4004aaa6653e53cf80b1c62dde66f9256123be2ebdb53dc6cbcec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b1c6b05dcac4004aaa6653e53cf80b1c62dde66f9256123be2ebdb53dc6cbcec->leave($__internal_b1c6b05dcac4004aaa6653e53cf80b1c62dde66f9256123be2ebdb53dc6cbcec_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_919cdf54055ffae9a12e1d484177dc94c0775cbd8fa11815ccf4f889c75744ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_919cdf54055ffae9a12e1d484177dc94c0775cbd8fa11815ccf4f889c75744ef->enter($__internal_919cdf54055ffae9a12e1d484177dc94c0775cbd8fa11815ccf4f889c75744ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_919cdf54055ffae9a12e1d484177dc94c0775cbd8fa11815ccf4f889c75744ef->leave($__internal_919cdf54055ffae9a12e1d484177dc94c0775cbd8fa11815ccf4f889c75744ef_prof);

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
