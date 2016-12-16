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
        $__internal_09e71b20b88b496e14b69c23adcc48c9787353be92098668dba1edc5f51c2f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e71b20b88b496e14b69c23adcc48c9787353be92098668dba1edc5f51c2f16->enter($__internal_09e71b20b88b496e14b69c23adcc48c9787353be92098668dba1edc5f51c2f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09e71b20b88b496e14b69c23adcc48c9787353be92098668dba1edc5f51c2f16->leave($__internal_09e71b20b88b496e14b69c23adcc48c9787353be92098668dba1edc5f51c2f16_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a89007687b8aa9549c468b76737b36d53c36578cd36bf15cdc8b3877185470c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89007687b8aa9549c468b76737b36d53c36578cd36bf15cdc8b3877185470c4->enter($__internal_a89007687b8aa9549c468b76737b36d53c36578cd36bf15cdc8b3877185470c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a89007687b8aa9549c468b76737b36d53c36578cd36bf15cdc8b3877185470c4->leave($__internal_a89007687b8aa9549c468b76737b36d53c36578cd36bf15cdc8b3877185470c4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5aee6a1457dfd4067e025aefd04073749167b8810e86d94f37e77377481d72e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aee6a1457dfd4067e025aefd04073749167b8810e86d94f37e77377481d72e9->enter($__internal_5aee6a1457dfd4067e025aefd04073749167b8810e86d94f37e77377481d72e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5aee6a1457dfd4067e025aefd04073749167b8810e86d94f37e77377481d72e9->leave($__internal_5aee6a1457dfd4067e025aefd04073749167b8810e86d94f37e77377481d72e9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_da9cd94f32d572812433a33aa56f72fc02eedab2f5baf23781c624762cbaf2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9cd94f32d572812433a33aa56f72fc02eedab2f5baf23781c624762cbaf2d8->enter($__internal_da9cd94f32d572812433a33aa56f72fc02eedab2f5baf23781c624762cbaf2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_da9cd94f32d572812433a33aa56f72fc02eedab2f5baf23781c624762cbaf2d8->leave($__internal_da9cd94f32d572812433a33aa56f72fc02eedab2f5baf23781c624762cbaf2d8_prof);

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
