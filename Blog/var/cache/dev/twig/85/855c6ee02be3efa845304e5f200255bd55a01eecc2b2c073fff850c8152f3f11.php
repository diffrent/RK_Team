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
        $__internal_ba88f934f624555710f28bc37df57c8504e8d2e0e28420f2d74ca3a18f5c820d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba88f934f624555710f28bc37df57c8504e8d2e0e28420f2d74ca3a18f5c820d->enter($__internal_ba88f934f624555710f28bc37df57c8504e8d2e0e28420f2d74ca3a18f5c820d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba88f934f624555710f28bc37df57c8504e8d2e0e28420f2d74ca3a18f5c820d->leave($__internal_ba88f934f624555710f28bc37df57c8504e8d2e0e28420f2d74ca3a18f5c820d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4f5084ff261bd386d9f5afcf6002c020ef180230984740c0e3fc48915d9b44df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5084ff261bd386d9f5afcf6002c020ef180230984740c0e3fc48915d9b44df->enter($__internal_4f5084ff261bd386d9f5afcf6002c020ef180230984740c0e3fc48915d9b44df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4f5084ff261bd386d9f5afcf6002c020ef180230984740c0e3fc48915d9b44df->leave($__internal_4f5084ff261bd386d9f5afcf6002c020ef180230984740c0e3fc48915d9b44df_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_93410ffb5cd27aac1b93302ec75ff5cb7f50532b72edf0dd6024f09c47c0ca8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93410ffb5cd27aac1b93302ec75ff5cb7f50532b72edf0dd6024f09c47c0ca8b->enter($__internal_93410ffb5cd27aac1b93302ec75ff5cb7f50532b72edf0dd6024f09c47c0ca8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_93410ffb5cd27aac1b93302ec75ff5cb7f50532b72edf0dd6024f09c47c0ca8b->leave($__internal_93410ffb5cd27aac1b93302ec75ff5cb7f50532b72edf0dd6024f09c47c0ca8b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b670bd3602857caf9adcf9441318d105381e6ba2b88766a6ffa1d1c566561ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b670bd3602857caf9adcf9441318d105381e6ba2b88766a6ffa1d1c566561ee->enter($__internal_9b670bd3602857caf9adcf9441318d105381e6ba2b88766a6ffa1d1c566561ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9b670bd3602857caf9adcf9441318d105381e6ba2b88766a6ffa1d1c566561ee->leave($__internal_9b670bd3602857caf9adcf9441318d105381e6ba2b88766a6ffa1d1c566561ee_prof);

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
