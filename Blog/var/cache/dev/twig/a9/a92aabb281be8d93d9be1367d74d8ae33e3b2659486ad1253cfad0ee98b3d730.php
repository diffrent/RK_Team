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
        $__internal_7d1a0f342f3cafce32a780503ebf9fb849e4d023df66553ffdb0b5e0bc7aea5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1a0f342f3cafce32a780503ebf9fb849e4d023df66553ffdb0b5e0bc7aea5a->enter($__internal_7d1a0f342f3cafce32a780503ebf9fb849e4d023df66553ffdb0b5e0bc7aea5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d1a0f342f3cafce32a780503ebf9fb849e4d023df66553ffdb0b5e0bc7aea5a->leave($__internal_7d1a0f342f3cafce32a780503ebf9fb849e4d023df66553ffdb0b5e0bc7aea5a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b001fc23bf66392d931d4a602e0c4f4d9272aab7dc094ada716b32ba3489c26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b001fc23bf66392d931d4a602e0c4f4d9272aab7dc094ada716b32ba3489c26a->enter($__internal_b001fc23bf66392d931d4a602e0c4f4d9272aab7dc094ada716b32ba3489c26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b001fc23bf66392d931d4a602e0c4f4d9272aab7dc094ada716b32ba3489c26a->leave($__internal_b001fc23bf66392d931d4a602e0c4f4d9272aab7dc094ada716b32ba3489c26a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce203a3c5d79cb1fa972c2668e1313c897438c59ade030397dc0f5f1ca7f46a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce203a3c5d79cb1fa972c2668e1313c897438c59ade030397dc0f5f1ca7f46a3->enter($__internal_ce203a3c5d79cb1fa972c2668e1313c897438c59ade030397dc0f5f1ca7f46a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ce203a3c5d79cb1fa972c2668e1313c897438c59ade030397dc0f5f1ca7f46a3->leave($__internal_ce203a3c5d79cb1fa972c2668e1313c897438c59ade030397dc0f5f1ca7f46a3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7344eeec9b8265e0182d5b7953ae680c713c154ab6bddb267413c3edf30e89e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7344eeec9b8265e0182d5b7953ae680c713c154ab6bddb267413c3edf30e89e2->enter($__internal_7344eeec9b8265e0182d5b7953ae680c713c154ab6bddb267413c3edf30e89e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7344eeec9b8265e0182d5b7953ae680c713c154ab6bddb267413c3edf30e89e2->leave($__internal_7344eeec9b8265e0182d5b7953ae680c713c154ab6bddb267413c3edf30e89e2_prof);

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
