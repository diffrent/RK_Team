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
        $__internal_a02b1ae5b1df4f8d087e148372eb1fe316e8a7aeb2512890760b56a0c0af85a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02b1ae5b1df4f8d087e148372eb1fe316e8a7aeb2512890760b56a0c0af85a2->enter($__internal_a02b1ae5b1df4f8d087e148372eb1fe316e8a7aeb2512890760b56a0c0af85a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a02b1ae5b1df4f8d087e148372eb1fe316e8a7aeb2512890760b56a0c0af85a2->leave($__internal_a02b1ae5b1df4f8d087e148372eb1fe316e8a7aeb2512890760b56a0c0af85a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7dc3b05cb802eb28b66dd82951b864879acb1578e7af8b41b58623f1c89a7605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc3b05cb802eb28b66dd82951b864879acb1578e7af8b41b58623f1c89a7605->enter($__internal_7dc3b05cb802eb28b66dd82951b864879acb1578e7af8b41b58623f1c89a7605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7dc3b05cb802eb28b66dd82951b864879acb1578e7af8b41b58623f1c89a7605->leave($__internal_7dc3b05cb802eb28b66dd82951b864879acb1578e7af8b41b58623f1c89a7605_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9381ae84073ddf432f686ee91bf9293e927a77c690e35f101978420f61a9ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9381ae84073ddf432f686ee91bf9293e927a77c690e35f101978420f61a9ca9->enter($__internal_e9381ae84073ddf432f686ee91bf9293e927a77c690e35f101978420f61a9ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e9381ae84073ddf432f686ee91bf9293e927a77c690e35f101978420f61a9ca9->leave($__internal_e9381ae84073ddf432f686ee91bf9293e927a77c690e35f101978420f61a9ca9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3116db7d8630c3eb9fb6d36981e5c73e4fb5c017641fd14290c5806c85849e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3116db7d8630c3eb9fb6d36981e5c73e4fb5c017641fd14290c5806c85849e6e->enter($__internal_3116db7d8630c3eb9fb6d36981e5c73e4fb5c017641fd14290c5806c85849e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3116db7d8630c3eb9fb6d36981e5c73e4fb5c017641fd14290c5806c85849e6e->leave($__internal_3116db7d8630c3eb9fb6d36981e5c73e4fb5c017641fd14290c5806c85849e6e_prof);

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
