<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_b68e5bb186b314779ab7411c07b41184c7796bd94ba0076aa61d30c673ad3477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_9caff063649213d80d78b963061f709dde9d43d1669ac12165cd81f6c9568479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9caff063649213d80d78b963061f709dde9d43d1669ac12165cd81f6c9568479->enter($__internal_9caff063649213d80d78b963061f709dde9d43d1669ac12165cd81f6c9568479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9caff063649213d80d78b963061f709dde9d43d1669ac12165cd81f6c9568479->leave($__internal_9caff063649213d80d78b963061f709dde9d43d1669ac12165cd81f6c9568479_prof);
=======
<<<<<<< HEAD
        $__internal_6eb9e252547cc44029374a9e7efeea2639345ff072084b45450722066323ef63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb9e252547cc44029374a9e7efeea2639345ff072084b45450722066323ef63->enter($__internal_6eb9e252547cc44029374a9e7efeea2639345ff072084b45450722066323ef63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eb9e252547cc44029374a9e7efeea2639345ff072084b45450722066323ef63->leave($__internal_6eb9e252547cc44029374a9e7efeea2639345ff072084b45450722066323ef63_prof);
=======
        $__internal_42586a783bba1121de8a66d293db6b0d8ef733c7d354103e0b952106043f747c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42586a783bba1121de8a66d293db6b0d8ef733c7d354103e0b952106043f747c->enter($__internal_42586a783bba1121de8a66d293db6b0d8ef733c7d354103e0b952106043f747c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42586a783bba1121de8a66d293db6b0d8ef733c7d354103e0b952106043f747c->leave($__internal_42586a783bba1121de8a66d293db6b0d8ef733c7d354103e0b952106043f747c_prof);
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_5f9f59065f7720d7123ad0f4c56d17f19125219be1b30eda1d355d6c9abcc122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9f59065f7720d7123ad0f4c56d17f19125219be1b30eda1d355d6c9abcc122->enter($__internal_5f9f59065f7720d7123ad0f4c56d17f19125219be1b30eda1d355d6c9abcc122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
=======
<<<<<<< HEAD
        $__internal_a0ca919bbef47807186975180fe37c231262ee5ff9dec3651488ee40ecc80368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ca919bbef47807186975180fe37c231262ee5ff9dec3651488ee40ecc80368->enter($__internal_a0ca919bbef47807186975180fe37c231262ee5ff9dec3651488ee40ecc80368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
=======
        $__internal_073be3a910d998e9fcacf04798e135e91082168f8513533c3bb2601f0abe5d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073be3a910d998e9fcacf04798e135e91082168f8513533c3bb2601f0abe5d43->enter($__internal_073be3a910d998e9fcacf04798e135e91082168f8513533c3bb2601f0abe5d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "
    ";
        // line 29
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
<<<<<<< HEAD
        $__internal_5f9f59065f7720d7123ad0f4c56d17f19125219be1b30eda1d355d6c9abcc122->leave($__internal_5f9f59065f7720d7123ad0f4c56d17f19125219be1b30eda1d355d6c9abcc122_prof);
=======
<<<<<<< HEAD
        $__internal_a0ca919bbef47807186975180fe37c231262ee5ff9dec3651488ee40ecc80368->leave($__internal_a0ca919bbef47807186975180fe37c231262ee5ff9dec3651488ee40ecc80368_prof);
=======
        $__internal_073be3a910d998e9fcacf04798e135e91082168f8513533c3bb2601f0abe5d43->leave($__internal_073be3a910d998e9fcacf04798e135e91082168f8513533c3bb2601f0abe5d43_prof);
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 29,  72 => 28,  53 => 9,  50 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
";
    }
}
