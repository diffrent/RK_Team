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
        $__internal_c945d5f1ed1f98a5a62048195f722d6ce0bebc21b91bef6544109c1771c24a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c945d5f1ed1f98a5a62048195f722d6ce0bebc21b91bef6544109c1771c24a88->enter($__internal_c945d5f1ed1f98a5a62048195f722d6ce0bebc21b91bef6544109c1771c24a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c945d5f1ed1f98a5a62048195f722d6ce0bebc21b91bef6544109c1771c24a88->leave($__internal_c945d5f1ed1f98a5a62048195f722d6ce0bebc21b91bef6544109c1771c24a88_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f83fa0149c010327c9edd79f1877e1768a208e9cd1b47aefac2e8ead0ed45631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83fa0149c010327c9edd79f1877e1768a208e9cd1b47aefac2e8ead0ed45631->enter($__internal_f83fa0149c010327c9edd79f1877e1768a208e9cd1b47aefac2e8ead0ed45631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f83fa0149c010327c9edd79f1877e1768a208e9cd1b47aefac2e8ead0ed45631->leave($__internal_f83fa0149c010327c9edd79f1877e1768a208e9cd1b47aefac2e8ead0ed45631_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5466f97764e19def4bb8a2cdd9cd5c1863324daa91d7a81db2515b86923b0082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5466f97764e19def4bb8a2cdd9cd5c1863324daa91d7a81db2515b86923b0082->enter($__internal_5466f97764e19def4bb8a2cdd9cd5c1863324daa91d7a81db2515b86923b0082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5466f97764e19def4bb8a2cdd9cd5c1863324daa91d7a81db2515b86923b0082->leave($__internal_5466f97764e19def4bb8a2cdd9cd5c1863324daa91d7a81db2515b86923b0082_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9a1eb8fb331a3bcf7d0d3a11b71af30f4a6a079e0f41690110fc147716576b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a1eb8fb331a3bcf7d0d3a11b71af30f4a6a079e0f41690110fc147716576b9->enter($__internal_e9a1eb8fb331a3bcf7d0d3a11b71af30f4a6a079e0f41690110fc147716576b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e9a1eb8fb331a3bcf7d0d3a11b71af30f4a6a079e0f41690110fc147716576b9->leave($__internal_e9a1eb8fb331a3bcf7d0d3a11b71af30f4a6a079e0f41690110fc147716576b9_prof);

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
