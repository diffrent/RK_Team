<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fc98db08460cec71c340d71cf8b6ca8f43c9cac9ed25c03f546bf6dba52be9a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f67a929994b8991ebacca92d3b14fdfc842f3182d942096dd414d3916bc610a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f67a929994b8991ebacca92d3b14fdfc842f3182d942096dd414d3916bc610a->enter($__internal_6f67a929994b8991ebacca92d3b14fdfc842f3182d942096dd414d3916bc610a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f67a929994b8991ebacca92d3b14fdfc842f3182d942096dd414d3916bc610a->leave($__internal_6f67a929994b8991ebacca92d3b14fdfc842f3182d942096dd414d3916bc610a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cbe8b024d582188453a3e3f4d94f98880ead237096426048981c3bb12d686b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe8b024d582188453a3e3f4d94f98880ead237096426048981c3bb12d686b13->enter($__internal_cbe8b024d582188453a3e3f4d94f98880ead237096426048981c3bb12d686b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cbe8b024d582188453a3e3f4d94f98880ead237096426048981c3bb12d686b13->leave($__internal_cbe8b024d582188453a3e3f4d94f98880ead237096426048981c3bb12d686b13_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_14942a2f8b1dff7bba6d2356095e710f30d3c98ae0a4c51e3869822d219cdc8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14942a2f8b1dff7bba6d2356095e710f30d3c98ae0a4c51e3869822d219cdc8f->enter($__internal_14942a2f8b1dff7bba6d2356095e710f30d3c98ae0a4c51e3869822d219cdc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_14942a2f8b1dff7bba6d2356095e710f30d3c98ae0a4c51e3869822d219cdc8f->leave($__internal_14942a2f8b1dff7bba6d2356095e710f30d3c98ae0a4c51e3869822d219cdc8f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_78f93b58c945b07dc331ce00ac479fd7c990d587902813c6937ef3bbd005737a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f93b58c945b07dc331ce00ac479fd7c990d587902813c6937ef3bbd005737a->enter($__internal_78f93b58c945b07dc331ce00ac479fd7c990d587902813c6937ef3bbd005737a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_78f93b58c945b07dc331ce00ac479fd7c990d587902813c6937ef3bbd005737a->leave($__internal_78f93b58c945b07dc331ce00ac479fd7c990d587902813c6937ef3bbd005737a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
