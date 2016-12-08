<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d620b1556726083bdb8ab5f2b82603002941e8051d77bed2ae239cebb01f4702 extends Twig_Template
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
        $__internal_ab99b6e58eb0c499e93ba945b7426c31d3ecf7d673cf582bb2759e5fc91f7cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab99b6e58eb0c499e93ba945b7426c31d3ecf7d673cf582bb2759e5fc91f7cf5->enter($__internal_ab99b6e58eb0c499e93ba945b7426c31d3ecf7d673cf582bb2759e5fc91f7cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab99b6e58eb0c499e93ba945b7426c31d3ecf7d673cf582bb2759e5fc91f7cf5->leave($__internal_ab99b6e58eb0c499e93ba945b7426c31d3ecf7d673cf582bb2759e5fc91f7cf5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a2ecc291ebd8a55df8d9cfc884dc51392a80eace2fd10fc468ccdb0667f96af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ecc291ebd8a55df8d9cfc884dc51392a80eace2fd10fc468ccdb0667f96af6->enter($__internal_a2ecc291ebd8a55df8d9cfc884dc51392a80eace2fd10fc468ccdb0667f96af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a2ecc291ebd8a55df8d9cfc884dc51392a80eace2fd10fc468ccdb0667f96af6->leave($__internal_a2ecc291ebd8a55df8d9cfc884dc51392a80eace2fd10fc468ccdb0667f96af6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_60e5b5305bf814bab651981c2d153e30d8179fe6129548b89863fdcf560db4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e5b5305bf814bab651981c2d153e30d8179fe6129548b89863fdcf560db4e5->enter($__internal_60e5b5305bf814bab651981c2d153e30d8179fe6129548b89863fdcf560db4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_60e5b5305bf814bab651981c2d153e30d8179fe6129548b89863fdcf560db4e5->leave($__internal_60e5b5305bf814bab651981c2d153e30d8179fe6129548b89863fdcf560db4e5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96a3f1ea1fed0e6791f70b8eaf6a68cd0fc9bc25331ea30895e41912dfededae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a3f1ea1fed0e6791f70b8eaf6a68cd0fc9bc25331ea30895e41912dfededae->enter($__internal_96a3f1ea1fed0e6791f70b8eaf6a68cd0fc9bc25331ea30895e41912dfededae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_96a3f1ea1fed0e6791f70b8eaf6a68cd0fc9bc25331ea30895e41912dfededae->leave($__internal_96a3f1ea1fed0e6791f70b8eaf6a68cd0fc9bc25331ea30895e41912dfededae_prof);

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
