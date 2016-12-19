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
        $__internal_952f5ca46b24d65e1650364229e295c37e30ab3a0cc4483fd5cd717b0a664652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952f5ca46b24d65e1650364229e295c37e30ab3a0cc4483fd5cd717b0a664652->enter($__internal_952f5ca46b24d65e1650364229e295c37e30ab3a0cc4483fd5cd717b0a664652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_952f5ca46b24d65e1650364229e295c37e30ab3a0cc4483fd5cd717b0a664652->leave($__internal_952f5ca46b24d65e1650364229e295c37e30ab3a0cc4483fd5cd717b0a664652_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9312d3f575aa5e5ef2b4b2866bf4275948072d6411686967b89f09b6a8e4b945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9312d3f575aa5e5ef2b4b2866bf4275948072d6411686967b89f09b6a8e4b945->enter($__internal_9312d3f575aa5e5ef2b4b2866bf4275948072d6411686967b89f09b6a8e4b945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9312d3f575aa5e5ef2b4b2866bf4275948072d6411686967b89f09b6a8e4b945->leave($__internal_9312d3f575aa5e5ef2b4b2866bf4275948072d6411686967b89f09b6a8e4b945_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d392481cad460cc601be53d6860dd81dcd420d68db9cc23f3914351b8d2d7138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d392481cad460cc601be53d6860dd81dcd420d68db9cc23f3914351b8d2d7138->enter($__internal_d392481cad460cc601be53d6860dd81dcd420d68db9cc23f3914351b8d2d7138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d392481cad460cc601be53d6860dd81dcd420d68db9cc23f3914351b8d2d7138->leave($__internal_d392481cad460cc601be53d6860dd81dcd420d68db9cc23f3914351b8d2d7138_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fcb319e64bc6543b8fc6cddb5becfad7692d4d16bfd74e7c52a15f3a3c422fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fcb319e64bc6543b8fc6cddb5becfad7692d4d16bfd74e7c52a15f3a3c422fa->enter($__internal_0fcb319e64bc6543b8fc6cddb5becfad7692d4d16bfd74e7c52a15f3a3c422fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0fcb319e64bc6543b8fc6cddb5becfad7692d4d16bfd74e7c52a15f3a3c422fa->leave($__internal_0fcb319e64bc6543b8fc6cddb5becfad7692d4d16bfd74e7c52a15f3a3c422fa_prof);

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
