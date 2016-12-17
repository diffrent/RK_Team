<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_2b7715d82940a7b782e8647bbe578770ea1f79c4d3a8ef29987ee7fde26e2a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_e24d2534a16c89abbf234a886c8e3ceea177ddaf1e3f6569222ac65a5ca7fd56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e24d2534a16c89abbf234a886c8e3ceea177ddaf1e3f6569222ac65a5ca7fd56->enter($__internal_e24d2534a16c89abbf234a886c8e3ceea177ddaf1e3f6569222ac65a5ca7fd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
=======
<<<<<<< HEAD
        $__internal_910d76cbac406820571129e45834c3b0bf15ee1119d3bed146e4f60e5172ecd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910d76cbac406820571129e45834c3b0bf15ee1119d3bed146e4f60e5172ecd8->enter($__internal_910d76cbac406820571129e45834c3b0bf15ee1119d3bed146e4f60e5172ecd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
=======
        $__internal_5ef437aeb641c0026bbb271529cb45e654782893cc1fdee82edd02a27e782f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef437aeb641c0026bbb271529cb45e654782893cc1fdee82edd02a27e782f17->enter($__internal_5ef437aeb641c0026bbb271529cb45e654782893cc1fdee82edd02a27e782f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

        // line 1
        echo "<div class=\"sf-toolbar-block sf-toolbar-block-";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " sf-toolbar-status-";
        echo twig_escape_filter($this->env, ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "normal")) : ("normal")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((array_key_exists("additional_classes", $context)) ? (_twig_default_filter((isset($context["additional_classes"]) ? $context["additional_classes"] : $this->getContext($context, "additional_classes")), "")) : ("")), "html", null, true);
        echo "\">
    ";
        // line 2
        if (( !array_key_exists("link", $context) || (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
        }
        // line 3
        echo "        <div class=\"sf-toolbar-icon\">";
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
    ";
        // line 4
        if (((array_key_exists("link", $context)) ? (_twig_default_filter((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), false)) : (false))) {
            echo "</a>";
        }
        // line 5
        echo "        <div class=\"sf-toolbar-info\">";
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
<<<<<<< HEAD
        $__internal_e24d2534a16c89abbf234a886c8e3ceea177ddaf1e3f6569222ac65a5ca7fd56->leave($__internal_e24d2534a16c89abbf234a886c8e3ceea177ddaf1e3f6569222ac65a5ca7fd56_prof);
=======
<<<<<<< HEAD
        $__internal_910d76cbac406820571129e45834c3b0bf15ee1119d3bed146e4f60e5172ecd8->leave($__internal_910d76cbac406820571129e45834c3b0bf15ee1119d3bed146e4f60e5172ecd8_prof);
=======
        $__internal_5ef437aeb641c0026bbb271529cb45e654782893cc1fdee82edd02a27e782f17->leave($__internal_5ef437aeb641c0026bbb271529cb45e654782893cc1fdee82edd02a27e782f17_prof);
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  42 => 4,  37 => 3,  31 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"sf-toolbar-block sf-toolbar-block-{{ name }} sf-toolbar-status-{{ status|default('normal') }} {{ additional_classes|default('') }}\">
    {% if link is not defined or link %}<a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{% endif %}
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
    {% if link|default(false) %}</a>{% endif %}
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
</div>
";
    }
}
