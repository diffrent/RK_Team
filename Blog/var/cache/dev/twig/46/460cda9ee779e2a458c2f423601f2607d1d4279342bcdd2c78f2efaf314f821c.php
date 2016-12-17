<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_55e500c20696fd06ecbd3777332304c67b01169cd48d9c12510ebd6197154040 extends Twig_Template
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
        $__internal_103577d5695aa32393c62d944aee5e76572e34f1ca3cfa343a45ad45602db928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103577d5695aa32393c62d944aee5e76572e34f1ca3cfa343a45ad45602db928->enter($__internal_103577d5695aa32393c62d944aee5e76572e34f1ca3cfa343a45ad45602db928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));
=======
        $__internal_8b3a5d060611d107bd06e5646d4646f9d6cdde2c010872ad72c841e463489db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3a5d060611d107bd06e5646d4646f9d6cdde2c010872ad72c841e463489db7->enter($__internal_8b3a5d060611d107bd06e5646d4646f9d6cdde2c010872ad72c841e463489db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
<<<<<<< HEAD
        $__internal_103577d5695aa32393c62d944aee5e76572e34f1ca3cfa343a45ad45602db928->leave($__internal_103577d5695aa32393c62d944aee5e76572e34f1ca3cfa343a45ad45602db928_prof);
=======
        $__internal_8b3a5d060611d107bd06e5646d4646f9d6cdde2c010872ad72c841e463489db7->leave($__internal_8b3a5d060611d107bd06e5646d4646f9d6cdde2c010872ad72c841e463489db7_prof);
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
";
    }
}
