<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_caac7d2f075adcc7c7cf2372d00df3d01d1573989f2259c15ce5bf4317185551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0cd421845b60ca784a4d7ac35aee7ac995f75d4f8060e1bf809e0b43499ff4db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd421845b60ca784a4d7ac35aee7ac995f75d4f8060e1bf809e0b43499ff4db->enter($__internal_0cd421845b60ca784a4d7ac35aee7ac995f75d4f8060e1bf809e0b43499ff4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cd421845b60ca784a4d7ac35aee7ac995f75d4f8060e1bf809e0b43499ff4db->leave($__internal_0cd421845b60ca784a4d7ac35aee7ac995f75d4f8060e1bf809e0b43499ff4db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a43ef6b2741a5fe68f2ac30859cda1e96d24f705474a5f29920f0af2996f914f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43ef6b2741a5fe68f2ac30859cda1e96d24f705474a5f29920f0af2996f914f->enter($__internal_a43ef6b2741a5fe68f2ac30859cda1e96d24f705474a5f29920f0af2996f914f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a43ef6b2741a5fe68f2ac30859cda1e96d24f705474a5f29920f0af2996f914f->leave($__internal_a43ef6b2741a5fe68f2ac30859cda1e96d24f705474a5f29920f0af2996f914f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6658bf607668b2d84bc037497e01c269a598c3a5c8ec3e50e3cc13f05ca6e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6658bf607668b2d84bc037497e01c269a598c3a5c8ec3e50e3cc13f05ca6e31->enter($__internal_e6658bf607668b2d84bc037497e01c269a598c3a5c8ec3e50e3cc13f05ca6e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e6658bf607668b2d84bc037497e01c269a598c3a5c8ec3e50e3cc13f05ca6e31->leave($__internal_e6658bf607668b2d84bc037497e01c269a598c3a5c8ec3e50e3cc13f05ca6e31_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_edfc2c4d25d97c42ec2f568425b54f8c758d836690b275119ccc696dfd833885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edfc2c4d25d97c42ec2f568425b54f8c758d836690b275119ccc696dfd833885->enter($__internal_edfc2c4d25d97c42ec2f568425b54f8c758d836690b275119ccc696dfd833885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_edfc2c4d25d97c42ec2f568425b54f8c758d836690b275119ccc696dfd833885->leave($__internal_edfc2c4d25d97c42ec2f568425b54f8c758d836690b275119ccc696dfd833885_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
