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
        $__internal_46c6602f4c8a508764efeecad2bb348d87cd75ef7e69709786dce15ba3b66d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c6602f4c8a508764efeecad2bb348d87cd75ef7e69709786dce15ba3b66d1a->enter($__internal_46c6602f4c8a508764efeecad2bb348d87cd75ef7e69709786dce15ba3b66d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46c6602f4c8a508764efeecad2bb348d87cd75ef7e69709786dce15ba3b66d1a->leave($__internal_46c6602f4c8a508764efeecad2bb348d87cd75ef7e69709786dce15ba3b66d1a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fafd62405b945dbad7f76e5c22be4e48e2fd57c77e8be6eb2b1fcf6e67a3534a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fafd62405b945dbad7f76e5c22be4e48e2fd57c77e8be6eb2b1fcf6e67a3534a->enter($__internal_fafd62405b945dbad7f76e5c22be4e48e2fd57c77e8be6eb2b1fcf6e67a3534a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fafd62405b945dbad7f76e5c22be4e48e2fd57c77e8be6eb2b1fcf6e67a3534a->leave($__internal_fafd62405b945dbad7f76e5c22be4e48e2fd57c77e8be6eb2b1fcf6e67a3534a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_38fc81bff252bfa721c41f528b92c4c9edf1c2df68bf4752934ef158dc229cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38fc81bff252bfa721c41f528b92c4c9edf1c2df68bf4752934ef158dc229cb9->enter($__internal_38fc81bff252bfa721c41f528b92c4c9edf1c2df68bf4752934ef158dc229cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_38fc81bff252bfa721c41f528b92c4c9edf1c2df68bf4752934ef158dc229cb9->leave($__internal_38fc81bff252bfa721c41f528b92c4c9edf1c2df68bf4752934ef158dc229cb9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_60bdcb56778271404915f559867773cef7a88062476060cc43b034432109254b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60bdcb56778271404915f559867773cef7a88062476060cc43b034432109254b->enter($__internal_60bdcb56778271404915f559867773cef7a88062476060cc43b034432109254b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_60bdcb56778271404915f559867773cef7a88062476060cc43b034432109254b->leave($__internal_60bdcb56778271404915f559867773cef7a88062476060cc43b034432109254b_prof);

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
