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
        $__internal_e85945c32ed8a48b1bc36e295d385bc6345075242b0d40331973833becbf5806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85945c32ed8a48b1bc36e295d385bc6345075242b0d40331973833becbf5806->enter($__internal_e85945c32ed8a48b1bc36e295d385bc6345075242b0d40331973833becbf5806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e85945c32ed8a48b1bc36e295d385bc6345075242b0d40331973833becbf5806->leave($__internal_e85945c32ed8a48b1bc36e295d385bc6345075242b0d40331973833becbf5806_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_40628a11047c1fc172f0069256569193efe602f7096da5df1faa26c0956a2eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40628a11047c1fc172f0069256569193efe602f7096da5df1faa26c0956a2eec->enter($__internal_40628a11047c1fc172f0069256569193efe602f7096da5df1faa26c0956a2eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_40628a11047c1fc172f0069256569193efe602f7096da5df1faa26c0956a2eec->leave($__internal_40628a11047c1fc172f0069256569193efe602f7096da5df1faa26c0956a2eec_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4f50da04dcb0aa5cb2f93b442756bc15fdc7651790735c3084cd3187b791086c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f50da04dcb0aa5cb2f93b442756bc15fdc7651790735c3084cd3187b791086c->enter($__internal_4f50da04dcb0aa5cb2f93b442756bc15fdc7651790735c3084cd3187b791086c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4f50da04dcb0aa5cb2f93b442756bc15fdc7651790735c3084cd3187b791086c->leave($__internal_4f50da04dcb0aa5cb2f93b442756bc15fdc7651790735c3084cd3187b791086c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4508a24d1c1e390f10dfdb9af96f4652571471fa1f835e6740ee12a23f045fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4508a24d1c1e390f10dfdb9af96f4652571471fa1f835e6740ee12a23f045fe1->enter($__internal_4508a24d1c1e390f10dfdb9af96f4652571471fa1f835e6740ee12a23f045fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4508a24d1c1e390f10dfdb9af96f4652571471fa1f835e6740ee12a23f045fe1->leave($__internal_4508a24d1c1e390f10dfdb9af96f4652571471fa1f835e6740ee12a23f045fe1_prof);

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
