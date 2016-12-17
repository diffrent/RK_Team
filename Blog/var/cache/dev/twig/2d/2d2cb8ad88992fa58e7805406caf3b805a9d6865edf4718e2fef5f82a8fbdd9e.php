<?php

/* @WebProfiler/Collector/memory.html.twig */
class __TwigTemplate_b034e7960b5d7be2cedddf325b108bd2d3e7b240af593ab270b3c868a9ecb6dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/memory.html.twig", 1);
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
        $__internal_bd16d1955237dbd8c293a1fd6a8349c33e6409a92507e004c0ff4d2b7d862708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd16d1955237dbd8c293a1fd6a8349c33e6409a92507e004c0ff4d2b7d862708->enter($__internal_bd16d1955237dbd8c293a1fd6a8349c33e6409a92507e004c0ff4d2b7d862708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd16d1955237dbd8c293a1fd6a8349c33e6409a92507e004c0ff4d2b7d862708->leave($__internal_bd16d1955237dbd8c293a1fd6a8349c33e6409a92507e004c0ff4d2b7d862708_prof);
=======
        $__internal_941f6e0a7ff76580baa6cc0061923dc35f31087ce0b30446602552f00812526e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_941f6e0a7ff76580baa6cc0061923dc35f31087ce0b30446602552f00812526e->enter($__internal_941f6e0a7ff76580baa6cc0061923dc35f31087ce0b30446602552f00812526e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_941f6e0a7ff76580baa6cc0061923dc35f31087ce0b30446602552f00812526e->leave($__internal_941f6e0a7ff76580baa6cc0061923dc35f31087ce0b30446602552f00812526e_prof);
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_14ad8ddb89e687fc604bc483edcf58274d9fcdb206ff4f4b7247af41e845d0b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ad8ddb89e687fc604bc483edcf58274d9fcdb206ff4f4b7247af41e845d0b3->enter($__internal_14ad8ddb89e687fc604bc483edcf58274d9fcdb206ff4f4b7247af41e845d0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
=======
        $__internal_e5d7fd5b7d408057204b9a4011ca88fc708cf6051439be90799ec6ed98208dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d7fd5b7d408057204b9a4011ca88fc708cf6051439be90799ec6ed98208dbd->enter($__internal_e5d7fd5b7d408057204b9a4011ca88fc708cf6051439be90799ec6ed98208dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        $context["status_color"] = ((((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024) > 50)) ? ("yellow") : (""));
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/memory.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">MB</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>";
        // line 19
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit", array()) ==  -1)) ? ("Unlimited") : (sprintf("%.0f MB", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit", array()) / 1024) / 1024)))), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
    ";
        // line 23
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "name" => "time", "status" => (isset($context["status_color"]) ? $context["status_color"] : $this->getContext($context, "status_color"))));
        echo "
";
        
<<<<<<< HEAD
        $__internal_14ad8ddb89e687fc604bc483edcf58274d9fcdb206ff4f4b7247af41e845d0b3->leave($__internal_14ad8ddb89e687fc604bc483edcf58274d9fcdb206ff4f4b7247af41e845d0b3_prof);
=======
        $__internal_e5d7fd5b7d408057204b9a4011ca88fc708cf6051439be90799ec6ed98208dbd->leave($__internal_e5d7fd5b7d408057204b9a4011ca88fc708cf6051439be90799ec6ed98208dbd_prof);
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  80 => 22,  74 => 19,  66 => 14,  62 => 12,  60 => 11,  57 => 10,  51 => 7,  46 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {% set status_color = (collector.memory / 1024 / 1024) > 50 ? 'yellow' : '' %}
        {{ include('@WebProfiler/Icon/memory.svg') }}
        <span class=\"sf-toolbar-value\">{{ '%.1f'|format(collector.memory / 1024 / 1024) }}</span>
        <span class=\"sf-toolbar-label\">MB</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>{{ '%.1f'|format(collector.memory / 1024 / 1024) }} MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>{{ collector.memoryLimit == -1 ? 'Unlimited' : '%.0f MB'|format(collector.memoryLimit / 1024 / 1024) }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, name: 'time', status: status_color }) }}
{% endblock %}
";
    }
}
