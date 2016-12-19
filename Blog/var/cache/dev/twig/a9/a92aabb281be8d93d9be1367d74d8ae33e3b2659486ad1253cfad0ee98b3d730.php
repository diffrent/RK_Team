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
        $__internal_a7cd3e39fc9a72068c469059184190d7a2e5cf07aa332fb83c296d76c0f9670c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7cd3e39fc9a72068c469059184190d7a2e5cf07aa332fb83c296d76c0f9670c->enter($__internal_a7cd3e39fc9a72068c469059184190d7a2e5cf07aa332fb83c296d76c0f9670c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7cd3e39fc9a72068c469059184190d7a2e5cf07aa332fb83c296d76c0f9670c->leave($__internal_a7cd3e39fc9a72068c469059184190d7a2e5cf07aa332fb83c296d76c0f9670c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_07940d4de86950841ddb7ac30ca950d22c2e9395d36409fd1b332b546ca92020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07940d4de86950841ddb7ac30ca950d22c2e9395d36409fd1b332b546ca92020->enter($__internal_07940d4de86950841ddb7ac30ca950d22c2e9395d36409fd1b332b546ca92020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_07940d4de86950841ddb7ac30ca950d22c2e9395d36409fd1b332b546ca92020->leave($__internal_07940d4de86950841ddb7ac30ca950d22c2e9395d36409fd1b332b546ca92020_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b87b014ace8c3c39f19f285094d41d1c792e4f51467e3ce7f3aaeb8fe2560bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87b014ace8c3c39f19f285094d41d1c792e4f51467e3ce7f3aaeb8fe2560bca->enter($__internal_b87b014ace8c3c39f19f285094d41d1c792e4f51467e3ce7f3aaeb8fe2560bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b87b014ace8c3c39f19f285094d41d1c792e4f51467e3ce7f3aaeb8fe2560bca->leave($__internal_b87b014ace8c3c39f19f285094d41d1c792e4f51467e3ce7f3aaeb8fe2560bca_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5de417bd476664e350a9fa3f56c7d1ee966e534f3d5a09399a76f535c72a1eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de417bd476664e350a9fa3f56c7d1ee966e534f3d5a09399a76f535c72a1eba->enter($__internal_5de417bd476664e350a9fa3f56c7d1ee966e534f3d5a09399a76f535c72a1eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5de417bd476664e350a9fa3f56c7d1ee966e534f3d5a09399a76f535c72a1eba->leave($__internal_5de417bd476664e350a9fa3f56c7d1ee966e534f3d5a09399a76f535c72a1eba_prof);

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
