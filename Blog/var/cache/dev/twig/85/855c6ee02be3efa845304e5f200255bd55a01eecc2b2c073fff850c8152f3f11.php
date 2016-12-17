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
        $__internal_42239791e14d25513ac24188a46949a532d454bcda83e468a93fa46123d6f83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42239791e14d25513ac24188a46949a532d454bcda83e468a93fa46123d6f83b->enter($__internal_42239791e14d25513ac24188a46949a532d454bcda83e468a93fa46123d6f83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42239791e14d25513ac24188a46949a532d454bcda83e468a93fa46123d6f83b->leave($__internal_42239791e14d25513ac24188a46949a532d454bcda83e468a93fa46123d6f83b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_52dc36925b6caeedc5a608454f8ed383e4d0422d25f4f5ee8cdfeb7a442c8ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52dc36925b6caeedc5a608454f8ed383e4d0422d25f4f5ee8cdfeb7a442c8ccc->enter($__internal_52dc36925b6caeedc5a608454f8ed383e4d0422d25f4f5ee8cdfeb7a442c8ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_52dc36925b6caeedc5a608454f8ed383e4d0422d25f4f5ee8cdfeb7a442c8ccc->leave($__internal_52dc36925b6caeedc5a608454f8ed383e4d0422d25f4f5ee8cdfeb7a442c8ccc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef02d006f37ed49ce8db9be829051e5784b2aab7016ba26b48b6f039e6ce3faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef02d006f37ed49ce8db9be829051e5784b2aab7016ba26b48b6f039e6ce3faa->enter($__internal_ef02d006f37ed49ce8db9be829051e5784b2aab7016ba26b48b6f039e6ce3faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ef02d006f37ed49ce8db9be829051e5784b2aab7016ba26b48b6f039e6ce3faa->leave($__internal_ef02d006f37ed49ce8db9be829051e5784b2aab7016ba26b48b6f039e6ce3faa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2367b0ce004ff844913ea5f137e0b66ef57667f980c4ffc84b956300df02b80a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2367b0ce004ff844913ea5f137e0b66ef57667f980c4ffc84b956300df02b80a->enter($__internal_2367b0ce004ff844913ea5f137e0b66ef57667f980c4ffc84b956300df02b80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2367b0ce004ff844913ea5f137e0b66ef57667f980c4ffc84b956300df02b80a->leave($__internal_2367b0ce004ff844913ea5f137e0b66ef57667f980c4ffc84b956300df02b80a_prof);

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
