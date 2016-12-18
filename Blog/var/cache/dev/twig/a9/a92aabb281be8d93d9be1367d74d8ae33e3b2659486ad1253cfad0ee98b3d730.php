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
        $__internal_addabb4d8180e3d2f5c2a8b6f4746749ec43a90c97f0fcdde73ef1936390c706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_addabb4d8180e3d2f5c2a8b6f4746749ec43a90c97f0fcdde73ef1936390c706->enter($__internal_addabb4d8180e3d2f5c2a8b6f4746749ec43a90c97f0fcdde73ef1936390c706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_addabb4d8180e3d2f5c2a8b6f4746749ec43a90c97f0fcdde73ef1936390c706->leave($__internal_addabb4d8180e3d2f5c2a8b6f4746749ec43a90c97f0fcdde73ef1936390c706_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_da1300ff84cf99490826230b680a47afa39352f54e1113ed2abaf512c5bc3382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1300ff84cf99490826230b680a47afa39352f54e1113ed2abaf512c5bc3382->enter($__internal_da1300ff84cf99490826230b680a47afa39352f54e1113ed2abaf512c5bc3382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_da1300ff84cf99490826230b680a47afa39352f54e1113ed2abaf512c5bc3382->leave($__internal_da1300ff84cf99490826230b680a47afa39352f54e1113ed2abaf512c5bc3382_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d79de3b5e4b1d5e802d2a6c9a6dfd3d9c55c8d779e58c329c1602838485a3dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79de3b5e4b1d5e802d2a6c9a6dfd3d9c55c8d779e58c329c1602838485a3dd7->enter($__internal_d79de3b5e4b1d5e802d2a6c9a6dfd3d9c55c8d779e58c329c1602838485a3dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d79de3b5e4b1d5e802d2a6c9a6dfd3d9c55c8d779e58c329c1602838485a3dd7->leave($__internal_d79de3b5e4b1d5e802d2a6c9a6dfd3d9c55c8d779e58c329c1602838485a3dd7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ff75e7c8d25650590694a0505220aa540d927ec5c1272e91ee359ba0fd0ffce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff75e7c8d25650590694a0505220aa540d927ec5c1272e91ee359ba0fd0ffce->enter($__internal_4ff75e7c8d25650590694a0505220aa540d927ec5c1272e91ee359ba0fd0ffce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4ff75e7c8d25650590694a0505220aa540d927ec5c1272e91ee359ba0fd0ffce->leave($__internal_4ff75e7c8d25650590694a0505220aa540d927ec5c1272e91ee359ba0fd0ffce_prof);

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
