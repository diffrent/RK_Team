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
        $__internal_75bd719900876359443cd536093352295a6432b7edff3de959dadfb2fecdbaf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75bd719900876359443cd536093352295a6432b7edff3de959dadfb2fecdbaf2->enter($__internal_75bd719900876359443cd536093352295a6432b7edff3de959dadfb2fecdbaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75bd719900876359443cd536093352295a6432b7edff3de959dadfb2fecdbaf2->leave($__internal_75bd719900876359443cd536093352295a6432b7edff3de959dadfb2fecdbaf2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_627cc78a61bfe0c95f65a2092173fa1a5cc2250ff3d283d58b64d9c75fa9ec9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627cc78a61bfe0c95f65a2092173fa1a5cc2250ff3d283d58b64d9c75fa9ec9c->enter($__internal_627cc78a61bfe0c95f65a2092173fa1a5cc2250ff3d283d58b64d9c75fa9ec9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_627cc78a61bfe0c95f65a2092173fa1a5cc2250ff3d283d58b64d9c75fa9ec9c->leave($__internal_627cc78a61bfe0c95f65a2092173fa1a5cc2250ff3d283d58b64d9c75fa9ec9c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04d0207bf503b9b6ed8daa823d60096b55e75365c45d570b37950d683673071d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d0207bf503b9b6ed8daa823d60096b55e75365c45d570b37950d683673071d->enter($__internal_04d0207bf503b9b6ed8daa823d60096b55e75365c45d570b37950d683673071d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_04d0207bf503b9b6ed8daa823d60096b55e75365c45d570b37950d683673071d->leave($__internal_04d0207bf503b9b6ed8daa823d60096b55e75365c45d570b37950d683673071d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_41dbe21d6bd33eab34d2257e0fede2bf13b59ef513d89ec378a20fde718aa8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41dbe21d6bd33eab34d2257e0fede2bf13b59ef513d89ec378a20fde718aa8c7->enter($__internal_41dbe21d6bd33eab34d2257e0fede2bf13b59ef513d89ec378a20fde718aa8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_41dbe21d6bd33eab34d2257e0fede2bf13b59ef513d89ec378a20fde718aa8c7->leave($__internal_41dbe21d6bd33eab34d2257e0fede2bf13b59ef513d89ec378a20fde718aa8c7_prof);

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
