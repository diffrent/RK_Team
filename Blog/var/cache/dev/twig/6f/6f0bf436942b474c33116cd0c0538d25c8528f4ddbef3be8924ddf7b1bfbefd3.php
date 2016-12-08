<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6c9cc5ecb0c699557b7b919a9addad5530f57316ff7606305dff1c2a1025a337 extends Twig_Template
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
        $__internal_24d2cd9942e7ca52a0e8bfe69c34a75db9e7ad21dc0f7b3670b59214a1a4e838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d2cd9942e7ca52a0e8bfe69c34a75db9e7ad21dc0f7b3670b59214a1a4e838->enter($__internal_24d2cd9942e7ca52a0e8bfe69c34a75db9e7ad21dc0f7b3670b59214a1a4e838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24d2cd9942e7ca52a0e8bfe69c34a75db9e7ad21dc0f7b3670b59214a1a4e838->leave($__internal_24d2cd9942e7ca52a0e8bfe69c34a75db9e7ad21dc0f7b3670b59214a1a4e838_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9813d388ab0eaa045d6950936925a5d8b47eb8bec8126b4dd868202911c4ead9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9813d388ab0eaa045d6950936925a5d8b47eb8bec8126b4dd868202911c4ead9->enter($__internal_9813d388ab0eaa045d6950936925a5d8b47eb8bec8126b4dd868202911c4ead9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9813d388ab0eaa045d6950936925a5d8b47eb8bec8126b4dd868202911c4ead9->leave($__internal_9813d388ab0eaa045d6950936925a5d8b47eb8bec8126b4dd868202911c4ead9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_17171e56edbb46c174cddeb61024e2ff8f147c621ecf40910ce45eb87b2dc343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17171e56edbb46c174cddeb61024e2ff8f147c621ecf40910ce45eb87b2dc343->enter($__internal_17171e56edbb46c174cddeb61024e2ff8f147c621ecf40910ce45eb87b2dc343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_17171e56edbb46c174cddeb61024e2ff8f147c621ecf40910ce45eb87b2dc343->leave($__internal_17171e56edbb46c174cddeb61024e2ff8f147c621ecf40910ce45eb87b2dc343_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_25abc63cbaec2cd021ad2a605e68786e6a684420da51d86ef6e03d26c33eca5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25abc63cbaec2cd021ad2a605e68786e6a684420da51d86ef6e03d26c33eca5a->enter($__internal_25abc63cbaec2cd021ad2a605e68786e6a684420da51d86ef6e03d26c33eca5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_25abc63cbaec2cd021ad2a605e68786e6a684420da51d86ef6e03d26c33eca5a->leave($__internal_25abc63cbaec2cd021ad2a605e68786e6a684420da51d86ef6e03d26c33eca5a_prof);

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
