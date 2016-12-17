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
        $__internal_8bd98f20f49a0f1da9473f35308af8b2e8dcd5b24f921ba9c0a16f90584e63ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd98f20f49a0f1da9473f35308af8b2e8dcd5b24f921ba9c0a16f90584e63ae->enter($__internal_8bd98f20f49a0f1da9473f35308af8b2e8dcd5b24f921ba9c0a16f90584e63ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bd98f20f49a0f1da9473f35308af8b2e8dcd5b24f921ba9c0a16f90584e63ae->leave($__internal_8bd98f20f49a0f1da9473f35308af8b2e8dcd5b24f921ba9c0a16f90584e63ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c03cc58626832c9bf55d15fea7eba435d2e33552e26a3d4800e0f3441bcb817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c03cc58626832c9bf55d15fea7eba435d2e33552e26a3d4800e0f3441bcb817->enter($__internal_7c03cc58626832c9bf55d15fea7eba435d2e33552e26a3d4800e0f3441bcb817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7c03cc58626832c9bf55d15fea7eba435d2e33552e26a3d4800e0f3441bcb817->leave($__internal_7c03cc58626832c9bf55d15fea7eba435d2e33552e26a3d4800e0f3441bcb817_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ec436ce1712624d7997331d268d36480e6495c927aeb3334196d88fa3b20e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec436ce1712624d7997331d268d36480e6495c927aeb3334196d88fa3b20e61->enter($__internal_2ec436ce1712624d7997331d268d36480e6495c927aeb3334196d88fa3b20e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2ec436ce1712624d7997331d268d36480e6495c927aeb3334196d88fa3b20e61->leave($__internal_2ec436ce1712624d7997331d268d36480e6495c927aeb3334196d88fa3b20e61_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a43062d151a4a5c48c87ec55d5315bb8739b15dbd4c0fcb9fcfde79438c5218e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43062d151a4a5c48c87ec55d5315bb8739b15dbd4c0fcb9fcfde79438c5218e->enter($__internal_a43062d151a4a5c48c87ec55d5315bb8739b15dbd4c0fcb9fcfde79438c5218e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a43062d151a4a5c48c87ec55d5315bb8739b15dbd4c0fcb9fcfde79438c5218e->leave($__internal_a43062d151a4a5c48c87ec55d5315bb8739b15dbd4c0fcb9fcfde79438c5218e_prof);

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
