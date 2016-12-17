<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_173f926a4b9e944e090de89f73a98431a15e4c91884671d32ac33480a61dd8a3 extends Twig_Template
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
        $__internal_71e60c1e61d77743f17f5c4640a97ceb6e58d92a02b570aaba0c541f46309dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e60c1e61d77743f17f5c4640a97ceb6e58d92a02b570aaba0c541f46309dfc->enter($__internal_71e60c1e61d77743f17f5c4640a97ceb6e58d92a02b570aaba0c541f46309dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));
=======
<<<<<<< HEAD
        $__internal_b8fed9dd50c8a4fd1f81595023938b5d98579f4544269c5a9d3e993a331e7ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fed9dd50c8a4fd1f81595023938b5d98579f4544269c5a9d3e993a331e7ee5->enter($__internal_b8fed9dd50c8a4fd1f81595023938b5d98579f4544269c5a9d3e993a331e7ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));
=======
        $__internal_910f800d60c6905a4abeec358d5a80443ec4a83ef18fcf95476d8be6fcb306c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910f800d60c6905a4abeec358d5a80443ec4a83ef18fcf95476d8be6fcb306c3->enter($__internal_910f800d60c6905a4abeec358d5a80443ec4a83ef18fcf95476d8be6fcb306c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "message", array()), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
<<<<<<< HEAD
        $__internal_71e60c1e61d77743f17f5c4640a97ceb6e58d92a02b570aaba0c541f46309dfc->leave($__internal_71e60c1e61d77743f17f5c4640a97ceb6e58d92a02b570aaba0c541f46309dfc_prof);
=======
<<<<<<< HEAD
        $__internal_b8fed9dd50c8a4fd1f81595023938b5d98579f4544269c5a9d3e993a331e7ee5->leave($__internal_b8fed9dd50c8a4fd1f81595023938b5d98579f4544269c5a9d3e993a331e7ee5_prof);
=======
        $__internal_910f800d60c6905a4abeec358d5a80443ec4a83ef18fcf95476d8be6fcb306c3->leave($__internal_910f800d60c6905a4abeec358d5a80443ec4a83ef18fcf95476d8be6fcb306c3_prof);
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  38 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<ol class=\"traces logs\">
    {% for log in logs %}
        <li{% if log.priority >= 400 %} class=\"error\"{% elseif log.priority >= 300 %} class=\"warning\"{% endif %}>
            {{ log.priorityName }} - {{ log.message }}
        </li>
    {% endfor %}
</ol>
";
    }
}
