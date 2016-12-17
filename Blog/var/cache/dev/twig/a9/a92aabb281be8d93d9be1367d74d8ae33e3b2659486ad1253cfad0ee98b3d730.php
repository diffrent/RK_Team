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
        $__internal_15dbf59effc925321dcaa2a0cff052f48a90924ac75078b8cb90020e1a278b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15dbf59effc925321dcaa2a0cff052f48a90924ac75078b8cb90020e1a278b94->enter($__internal_15dbf59effc925321dcaa2a0cff052f48a90924ac75078b8cb90020e1a278b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15dbf59effc925321dcaa2a0cff052f48a90924ac75078b8cb90020e1a278b94->leave($__internal_15dbf59effc925321dcaa2a0cff052f48a90924ac75078b8cb90020e1a278b94_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_075291e7b1d1f3fb8b3e840668202346ca8e94dfb1d223eae44f9cd5dc79cc81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075291e7b1d1f3fb8b3e840668202346ca8e94dfb1d223eae44f9cd5dc79cc81->enter($__internal_075291e7b1d1f3fb8b3e840668202346ca8e94dfb1d223eae44f9cd5dc79cc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_075291e7b1d1f3fb8b3e840668202346ca8e94dfb1d223eae44f9cd5dc79cc81->leave($__internal_075291e7b1d1f3fb8b3e840668202346ca8e94dfb1d223eae44f9cd5dc79cc81_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b8f561f658f38c48969bea75daccfb8d3c947c22c9d27d22e1fb8fd373892cd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f561f658f38c48969bea75daccfb8d3c947c22c9d27d22e1fb8fd373892cd2->enter($__internal_b8f561f658f38c48969bea75daccfb8d3c947c22c9d27d22e1fb8fd373892cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b8f561f658f38c48969bea75daccfb8d3c947c22c9d27d22e1fb8fd373892cd2->leave($__internal_b8f561f658f38c48969bea75daccfb8d3c947c22c9d27d22e1fb8fd373892cd2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33c01e107842ddae8bac24531b539d8a1bca84cfbec2e13b820eaa65fb48c615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c01e107842ddae8bac24531b539d8a1bca84cfbec2e13b820eaa65fb48c615->enter($__internal_33c01e107842ddae8bac24531b539d8a1bca84cfbec2e13b820eaa65fb48c615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_33c01e107842ddae8bac24531b539d8a1bca84cfbec2e13b820eaa65fb48c615->leave($__internal_33c01e107842ddae8bac24531b539d8a1bca84cfbec2e13b820eaa65fb48c615_prof);

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
