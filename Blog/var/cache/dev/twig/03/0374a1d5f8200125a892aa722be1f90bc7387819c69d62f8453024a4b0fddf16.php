<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_86d0878cbf326c79a98aee5c3305b342cc4f0c7045f45a85224f2cd8aafbc3a9 extends Twig_Template
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
        $__internal_f01aec39578017749ab4c4fc91849260a66e6da064abeea12eb0f3260b6b5749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01aec39578017749ab4c4fc91849260a66e6da064abeea12eb0f3260b6b5749->enter($__internal_f01aec39578017749ab4c4fc91849260a66e6da064abeea12eb0f3260b6b5749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));
=======
<<<<<<< HEAD
        $__internal_469e903e1d0d8f664bbd489143922f1f6c3c8738476ffdb27373a76a3b4a4b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469e903e1d0d8f664bbd489143922f1f6c3c8738476ffdb27373a76a3b4a4b66->enter($__internal_469e903e1d0d8f664bbd489143922f1f6c3c8738476ffdb27373a76a3b4a4b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));
=======
        $__internal_fb693a5054f2d1e8779047f91f00220df5e15a7323f671f5ea0c3df32add9eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb693a5054f2d1e8779047f91f00220df5e15a7323f671f5ea0c3df32add9eac->enter($__internal_fb693a5054f2d1e8779047f91f00220df5e15a7323f671f5ea0c3df32add9eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

        // line 1
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class", array()) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type", array())) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array());
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array());
            echo "
";
        }
        
<<<<<<< HEAD
        $__internal_f01aec39578017749ab4c4fc91849260a66e6da064abeea12eb0f3260b6b5749->leave($__internal_f01aec39578017749ab4c4fc91849260a66e6da064abeea12eb0f3260b6b5749_prof);
=======
<<<<<<< HEAD
        $__internal_469e903e1d0d8f664bbd489143922f1f6c3c8738476ffdb27373a76a3b4a4b66->leave($__internal_469e903e1d0d8f664bbd489143922f1f6c3c8738476ffdb27373a76a3b4a4b66_prof);
=======
        $__internal_fb693a5054f2d1e8779047f91f00220df5e15a7323f671f5ea0c3df32add9eac->leave($__internal_fb693a5054f2d1e8779047f91f00220df5e15a7323f671f5ea0c3df32add9eac_prof);
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  36 => 6,  32 => 4,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if trace.function %}
    at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{% else %}
    at n/a
{% endif %}
{% if trace.file is defined and trace.line is defined %}
        in {{ trace.file }} line {{ trace.line }}
{% endif %}
";
    }
}
