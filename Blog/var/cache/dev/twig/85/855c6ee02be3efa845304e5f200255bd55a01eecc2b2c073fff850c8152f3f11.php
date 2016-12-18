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
        $__internal_cedf66adc2b897b19d54bb10e336d40c339bd56ae8b67e84058e092192ccffe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cedf66adc2b897b19d54bb10e336d40c339bd56ae8b67e84058e092192ccffe2->enter($__internal_cedf66adc2b897b19d54bb10e336d40c339bd56ae8b67e84058e092192ccffe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cedf66adc2b897b19d54bb10e336d40c339bd56ae8b67e84058e092192ccffe2->leave($__internal_cedf66adc2b897b19d54bb10e336d40c339bd56ae8b67e84058e092192ccffe2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2bfba7016f44b2e72b47561f28bb20937e576f3d2856ed81f514d959a183f85f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bfba7016f44b2e72b47561f28bb20937e576f3d2856ed81f514d959a183f85f->enter($__internal_2bfba7016f44b2e72b47561f28bb20937e576f3d2856ed81f514d959a183f85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2bfba7016f44b2e72b47561f28bb20937e576f3d2856ed81f514d959a183f85f->leave($__internal_2bfba7016f44b2e72b47561f28bb20937e576f3d2856ed81f514d959a183f85f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c05c6b48661179e2aa1f9185456ac6ffb51c5efa00881144de0208818014e34c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05c6b48661179e2aa1f9185456ac6ffb51c5efa00881144de0208818014e34c->enter($__internal_c05c6b48661179e2aa1f9185456ac6ffb51c5efa00881144de0208818014e34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c05c6b48661179e2aa1f9185456ac6ffb51c5efa00881144de0208818014e34c->leave($__internal_c05c6b48661179e2aa1f9185456ac6ffb51c5efa00881144de0208818014e34c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1e8a505ff9e57b973b28b66a4f5dbec5b348245934981e884940632cef83441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e8a505ff9e57b973b28b66a4f5dbec5b348245934981e884940632cef83441->enter($__internal_a1e8a505ff9e57b973b28b66a4f5dbec5b348245934981e884940632cef83441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a1e8a505ff9e57b973b28b66a4f5dbec5b348245934981e884940632cef83441->leave($__internal_a1e8a505ff9e57b973b28b66a4f5dbec5b348245934981e884940632cef83441_prof);

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
