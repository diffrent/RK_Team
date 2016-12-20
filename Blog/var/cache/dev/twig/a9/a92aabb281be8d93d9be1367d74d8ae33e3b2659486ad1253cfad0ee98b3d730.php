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
        $__internal_5ba4dda5c27be662812d885c6f7a804cc1b6f15fdd259a28129d9c063a08cac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba4dda5c27be662812d885c6f7a804cc1b6f15fdd259a28129d9c063a08cac9->enter($__internal_5ba4dda5c27be662812d885c6f7a804cc1b6f15fdd259a28129d9c063a08cac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ba4dda5c27be662812d885c6f7a804cc1b6f15fdd259a28129d9c063a08cac9->leave($__internal_5ba4dda5c27be662812d885c6f7a804cc1b6f15fdd259a28129d9c063a08cac9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cd97c04d56778034b4a197ecbe22823b11d2f191aa7ca76d6431c212e17c0495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd97c04d56778034b4a197ecbe22823b11d2f191aa7ca76d6431c212e17c0495->enter($__internal_cd97c04d56778034b4a197ecbe22823b11d2f191aa7ca76d6431c212e17c0495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cd97c04d56778034b4a197ecbe22823b11d2f191aa7ca76d6431c212e17c0495->leave($__internal_cd97c04d56778034b4a197ecbe22823b11d2f191aa7ca76d6431c212e17c0495_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1f3f98d8760b2f48d50571432ce65041ebc29f20be46d981385483a5649ba57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f3f98d8760b2f48d50571432ce65041ebc29f20be46d981385483a5649ba57f->enter($__internal_1f3f98d8760b2f48d50571432ce65041ebc29f20be46d981385483a5649ba57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1f3f98d8760b2f48d50571432ce65041ebc29f20be46d981385483a5649ba57f->leave($__internal_1f3f98d8760b2f48d50571432ce65041ebc29f20be46d981385483a5649ba57f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_14462e93e4620be478ac03cf272867860fb80ce4f9dd3731fb4002ad6737b18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14462e93e4620be478ac03cf272867860fb80ce4f9dd3731fb4002ad6737b18f->enter($__internal_14462e93e4620be478ac03cf272867860fb80ce4f9dd3731fb4002ad6737b18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_14462e93e4620be478ac03cf272867860fb80ce4f9dd3731fb4002ad6737b18f->leave($__internal_14462e93e4620be478ac03cf272867860fb80ce4f9dd3731fb4002ad6737b18f_prof);

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
