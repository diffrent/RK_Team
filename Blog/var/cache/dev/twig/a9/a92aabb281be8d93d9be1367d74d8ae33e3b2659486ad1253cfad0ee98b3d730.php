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
        $__internal_2e9ef6cf9514915ee640b407234904d97b18e19a767442fb5b2f21da5fe7b160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9ef6cf9514915ee640b407234904d97b18e19a767442fb5b2f21da5fe7b160->enter($__internal_2e9ef6cf9514915ee640b407234904d97b18e19a767442fb5b2f21da5fe7b160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e9ef6cf9514915ee640b407234904d97b18e19a767442fb5b2f21da5fe7b160->leave($__internal_2e9ef6cf9514915ee640b407234904d97b18e19a767442fb5b2f21da5fe7b160_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_29ebee18d233dbf9364a35bb3aedb5454364c95cdd97492e161983d7998da80f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ebee18d233dbf9364a35bb3aedb5454364c95cdd97492e161983d7998da80f->enter($__internal_29ebee18d233dbf9364a35bb3aedb5454364c95cdd97492e161983d7998da80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_29ebee18d233dbf9364a35bb3aedb5454364c95cdd97492e161983d7998da80f->leave($__internal_29ebee18d233dbf9364a35bb3aedb5454364c95cdd97492e161983d7998da80f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1c633522ea582d344a42ca52fbd2723e4f905b961419dc80366c9d96219e5db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c633522ea582d344a42ca52fbd2723e4f905b961419dc80366c9d96219e5db1->enter($__internal_1c633522ea582d344a42ca52fbd2723e4f905b961419dc80366c9d96219e5db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1c633522ea582d344a42ca52fbd2723e4f905b961419dc80366c9d96219e5db1->leave($__internal_1c633522ea582d344a42ca52fbd2723e4f905b961419dc80366c9d96219e5db1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_18619ff15c21f2ba0b5393822dfe0466bd2cb374558aa5f883fec82e0471a86d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18619ff15c21f2ba0b5393822dfe0466bd2cb374558aa5f883fec82e0471a86d->enter($__internal_18619ff15c21f2ba0b5393822dfe0466bd2cb374558aa5f883fec82e0471a86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_18619ff15c21f2ba0b5393822dfe0466bd2cb374558aa5f883fec82e0471a86d->leave($__internal_18619ff15c21f2ba0b5393822dfe0466bd2cb374558aa5f883fec82e0471a86d_prof);

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
