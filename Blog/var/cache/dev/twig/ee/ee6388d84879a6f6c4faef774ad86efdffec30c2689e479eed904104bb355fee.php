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
        $__internal_72bb3b342db8eea97210164922fb09c18f08fa66486583d0ae8487f1e6093e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72bb3b342db8eea97210164922fb09c18f08fa66486583d0ae8487f1e6093e99->enter($__internal_72bb3b342db8eea97210164922fb09c18f08fa66486583d0ae8487f1e6093e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72bb3b342db8eea97210164922fb09c18f08fa66486583d0ae8487f1e6093e99->leave($__internal_72bb3b342db8eea97210164922fb09c18f08fa66486583d0ae8487f1e6093e99_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b278ad2d6786b9a560ec1b6fa2cda7bbb5caff1d624485c37145c826f2b64b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b278ad2d6786b9a560ec1b6fa2cda7bbb5caff1d624485c37145c826f2b64b92->enter($__internal_b278ad2d6786b9a560ec1b6fa2cda7bbb5caff1d624485c37145c826f2b64b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_b278ad2d6786b9a560ec1b6fa2cda7bbb5caff1d624485c37145c826f2b64b92->leave($__internal_b278ad2d6786b9a560ec1b6fa2cda7bbb5caff1d624485c37145c826f2b64b92_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_534999880314d969d599e63463f7f71e07147250c77e2013a143d93d4720f997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534999880314d969d599e63463f7f71e07147250c77e2013a143d93d4720f997->enter($__internal_534999880314d969d599e63463f7f71e07147250c77e2013a143d93d4720f997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_534999880314d969d599e63463f7f71e07147250c77e2013a143d93d4720f997->leave($__internal_534999880314d969d599e63463f7f71e07147250c77e2013a143d93d4720f997_prof);

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
