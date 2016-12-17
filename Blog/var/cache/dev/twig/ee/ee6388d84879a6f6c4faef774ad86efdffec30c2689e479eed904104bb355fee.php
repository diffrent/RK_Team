<?php

/* user/profile.html.twig */
class __TwigTemplate_ffaafad65f0151a0f7835ddc97fa34e047f0930484cdfd35b5d545861a8c6e24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d479879f5f32279785754781c6f96278820263c0bd7003cda760b4f5334bc01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d479879f5f32279785754781c6f96278820263c0bd7003cda760b4f5334bc01->enter($__internal_7d479879f5f32279785754781c6f96278820263c0bd7003cda760b4f5334bc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d479879f5f32279785754781c6f96278820263c0bd7003cda760b4f5334bc01->leave($__internal_7d479879f5f32279785754781c6f96278820263c0bd7003cda760b4f5334bc01_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_7bc7a3e1ca407d1722ddafefec167f2c75d803bda4b6916d15d276e217bdbfcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc7a3e1ca407d1722ddafefec167f2c75d803bda4b6916d15d276e217bdbfcd->enter($__internal_7bc7a3e1ca407d1722ddafefec167f2c75d803bda4b6916d15d276e217bdbfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_7bc7a3e1ca407d1722ddafefec167f2c75d803bda4b6916d15d276e217bdbfcd->leave($__internal_7bc7a3e1ca407d1722ddafefec167f2c75d803bda4b6916d15d276e217bdbfcd_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_5299e5a1f67f074734b72807b734fac019a9c9c06ecf10cd899826b035b2f61b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5299e5a1f67f074734b72807b734fac019a9c9c06ecf10cd899826b035b2f61b->enter($__internal_5299e5a1f67f074734b72807b734fac019a9c9c06ecf10cd899826b035b2f61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div>
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "
        <br>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "
    </div>
    <div>
        <label>
        <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\"><a class=\"button\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacts_create");
        echo "\">Нов Контакт</a></button>

            </label>
    </div>
";
        
        $__internal_5299e5a1f67f074734b72807b734fac019a9c9c06ecf10cd899826b035b2f61b->leave($__internal_5299e5a1f67f074734b72807b734fac019a9c9c06ecf10cd899826b035b2f61b_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'profile' %}

{% block main %}
    <div>
        {{ user.email }}
        <br>
        {{ user.fullName }}
    </div>
    <div>
        <label>
        <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\"><a class=\"button\" href=\"{{ path('contacts_create') }}\">Нов Контакт</a></button>

            </label>
    </div>
{% endblock %}
";
    }
}
