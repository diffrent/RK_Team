<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c35efbd38b284f57a3ea8e74e02b85fde9a57fb563a321641908ef5a986bede9 extends Twig_Template
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
<<<<<<< HEAD
        $__internal_f988ca6a663d5975d2c2e344f14c920a6010d76f11bc78b142aaa1a61820d1a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f988ca6a663d5975d2c2e344f14c920a6010d76f11bc78b142aaa1a61820d1a2->enter($__internal_f988ca6a663d5975d2c2e344f14c920a6010d76f11bc78b142aaa1a61820d1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f988ca6a663d5975d2c2e344f14c920a6010d76f11bc78b142aaa1a61820d1a2->leave($__internal_f988ca6a663d5975d2c2e344f14c920a6010d76f11bc78b142aaa1a61820d1a2_prof);
=======
<<<<<<< HEAD
        $__internal_82df7341eccab0b5755e2b3e08ab0562df6956d677c8ca0e9cd519194af4931a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82df7341eccab0b5755e2b3e08ab0562df6956d677c8ca0e9cd519194af4931a->enter($__internal_82df7341eccab0b5755e2b3e08ab0562df6956d677c8ca0e9cd519194af4931a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82df7341eccab0b5755e2b3e08ab0562df6956d677c8ca0e9cd519194af4931a->leave($__internal_82df7341eccab0b5755e2b3e08ab0562df6956d677c8ca0e9cd519194af4931a_prof);
=======
        $__internal_0a301326aa78c176d26c6c65fb81007a695e20dcc95eb7998978b1cb1ffc1b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a301326aa78c176d26c6c65fb81007a695e20dcc95eb7998978b1cb1ffc1b1b->enter($__internal_0a301326aa78c176d26c6c65fb81007a695e20dcc95eb7998978b1cb1ffc1b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a301326aa78c176d26c6c65fb81007a695e20dcc95eb7998978b1cb1ffc1b1b->leave($__internal_0a301326aa78c176d26c6c65fb81007a695e20dcc95eb7998978b1cb1ffc1b1b_prof);
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_22332baed4b7ef9863f6d73c5e8070d8256150c7771e146b1efd00115bda1d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22332baed4b7ef9863f6d73c5e8070d8256150c7771e146b1efd00115bda1d3b->enter($__internal_22332baed4b7ef9863f6d73c5e8070d8256150c7771e146b1efd00115bda1d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));
=======
<<<<<<< HEAD
        $__internal_0d57b583198dc7666abefaf4537eff2843532ddcff0b7c2759d043b4d0ca693b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d57b583198dc7666abefaf4537eff2843532ddcff0b7c2759d043b4d0ca693b->enter($__internal_0d57b583198dc7666abefaf4537eff2843532ddcff0b7c2759d043b4d0ca693b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));
=======
        $__internal_9bfca16c49d5c02de39e89d597db2be0d2385bb69110455364145a9e0be60d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bfca16c49d5c02de39e89d597db2be0d2385bb69110455364145a9e0be60d2a->enter($__internal_9bfca16c49d5c02de39e89d597db2be0d2385bb69110455364145a9e0be60d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

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
        
<<<<<<< HEAD
        $__internal_22332baed4b7ef9863f6d73c5e8070d8256150c7771e146b1efd00115bda1d3b->leave($__internal_22332baed4b7ef9863f6d73c5e8070d8256150c7771e146b1efd00115bda1d3b_prof);
=======
<<<<<<< HEAD
        $__internal_0d57b583198dc7666abefaf4537eff2843532ddcff0b7c2759d043b4d0ca693b->leave($__internal_0d57b583198dc7666abefaf4537eff2843532ddcff0b7c2759d043b4d0ca693b_prof);
=======
        $__internal_9bfca16c49d5c02de39e89d597db2be0d2385bb69110455364145a9e0be60d2a->leave($__internal_9bfca16c49d5c02de39e89d597db2be0d2385bb69110455364145a9e0be60d2a_prof);
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_98fe78457057756a023a5b3ad00d7d78e699fed9b66ffd8f7912d1eac550831a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98fe78457057756a023a5b3ad00d7d78e699fed9b66ffd8f7912d1eac550831a->enter($__internal_98fe78457057756a023a5b3ad00d7d78e699fed9b66ffd8f7912d1eac550831a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));
=======
<<<<<<< HEAD
        $__internal_04725a41187aa7577670db00796272abfc0022057a308cbff2267f2c8f5d7387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04725a41187aa7577670db00796272abfc0022057a308cbff2267f2c8f5d7387->enter($__internal_04725a41187aa7577670db00796272abfc0022057a308cbff2267f2c8f5d7387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));
=======
        $__internal_73d10ff5253ddd2fa7360003a4ef67c890f4eaa2490782cf40d89001c4167654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d10ff5253ddd2fa7360003a4ef67c890f4eaa2490782cf40d89001c4167654->enter($__internal_73d10ff5253ddd2fa7360003a4ef67c890f4eaa2490782cf40d89001c4167654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

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
        
<<<<<<< HEAD
        $__internal_98fe78457057756a023a5b3ad00d7d78e699fed9b66ffd8f7912d1eac550831a->leave($__internal_98fe78457057756a023a5b3ad00d7d78e699fed9b66ffd8f7912d1eac550831a_prof);
=======
<<<<<<< HEAD
        $__internal_04725a41187aa7577670db00796272abfc0022057a308cbff2267f2c8f5d7387->leave($__internal_04725a41187aa7577670db00796272abfc0022057a308cbff2267f2c8f5d7387_prof);
=======
        $__internal_73d10ff5253ddd2fa7360003a4ef67c890f4eaa2490782cf40d89001c4167654->leave($__internal_73d10ff5253ddd2fa7360003a4ef67c890f4eaa2490782cf40d89001c4167654_prof);
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_3cee01946c5eb7879f5e47d0cddce827f76c16a00bc5a480090d718d7cf724d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cee01946c5eb7879f5e47d0cddce827f76c16a00bc5a480090d718d7cf724d6->enter($__internal_3cee01946c5eb7879f5e47d0cddce827f76c16a00bc5a480090d718d7cf724d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));
=======
<<<<<<< HEAD
        $__internal_5dee393441d10e690b06c33db86eb6ca87d86e51c060e037ffce1f8feb9b00b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dee393441d10e690b06c33db86eb6ca87d86e51c060e037ffce1f8feb9b00b7->enter($__internal_5dee393441d10e690b06c33db86eb6ca87d86e51c060e037ffce1f8feb9b00b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));
=======
        $__internal_a28879d45f7d762db054ba75b7addee7fb2da27aa331dcbb7f67701cfbbc02a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28879d45f7d762db054ba75b7addee7fb2da27aa331dcbb7f67701cfbbc02a2->enter($__internal_a28879d45f7d762db054ba75b7addee7fb2da27aa331dcbb7f67701cfbbc02a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

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
        
<<<<<<< HEAD
        $__internal_3cee01946c5eb7879f5e47d0cddce827f76c16a00bc5a480090d718d7cf724d6->leave($__internal_3cee01946c5eb7879f5e47d0cddce827f76c16a00bc5a480090d718d7cf724d6_prof);
=======
<<<<<<< HEAD
        $__internal_5dee393441d10e690b06c33db86eb6ca87d86e51c060e037ffce1f8feb9b00b7->leave($__internal_5dee393441d10e690b06c33db86eb6ca87d86e51c060e037ffce1f8feb9b00b7_prof);
=======
        $__internal_a28879d45f7d762db054ba75b7addee7fb2da27aa331dcbb7f67701cfbbc02a2->leave($__internal_a28879d45f7d762db054ba75b7addee7fb2da27aa331dcbb7f67701cfbbc02a2_prof);
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

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
