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
        $__internal_d3e3da8670661840e7ad4e855ac882aa9ab2508e8305d966472fa050abc4f8fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e3da8670661840e7ad4e855ac882aa9ab2508e8305d966472fa050abc4f8fb->enter($__internal_d3e3da8670661840e7ad4e855ac882aa9ab2508e8305d966472fa050abc4f8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3e3da8670661840e7ad4e855ac882aa9ab2508e8305d966472fa050abc4f8fb->leave($__internal_d3e3da8670661840e7ad4e855ac882aa9ab2508e8305d966472fa050abc4f8fb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f76ce9e7eeb23903d2ab544d680d549872346510168b05c29488fc70a87c46b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76ce9e7eeb23903d2ab544d680d549872346510168b05c29488fc70a87c46b9->enter($__internal_f76ce9e7eeb23903d2ab544d680d549872346510168b05c29488fc70a87c46b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f76ce9e7eeb23903d2ab544d680d549872346510168b05c29488fc70a87c46b9->leave($__internal_f76ce9e7eeb23903d2ab544d680d549872346510168b05c29488fc70a87c46b9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_28c8c0e940f90e745cb4801d19e9a88a8aaca6bcca32396bc0c6a08ffce9203c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c8c0e940f90e745cb4801d19e9a88a8aaca6bcca32396bc0c6a08ffce9203c->enter($__internal_28c8c0e940f90e745cb4801d19e9a88a8aaca6bcca32396bc0c6a08ffce9203c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_28c8c0e940f90e745cb4801d19e9a88a8aaca6bcca32396bc0c6a08ffce9203c->leave($__internal_28c8c0e940f90e745cb4801d19e9a88a8aaca6bcca32396bc0c6a08ffce9203c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_17f80935a399c738272955af1aeb388f869654b3af30378903080bdf431736c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f80935a399c738272955af1aeb388f869654b3af30378903080bdf431736c9->enter($__internal_17f80935a399c738272955af1aeb388f869654b3af30378903080bdf431736c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_17f80935a399c738272955af1aeb388f869654b3af30378903080bdf431736c9->leave($__internal_17f80935a399c738272955af1aeb388f869654b3af30378903080bdf431736c9_prof);

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
