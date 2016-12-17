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
        $__internal_77d77f046e0b8dd6c678c11ac818b9c1c921e41b89114a5636001ce750ea0a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d77f046e0b8dd6c678c11ac818b9c1c921e41b89114a5636001ce750ea0a79->enter($__internal_77d77f046e0b8dd6c678c11ac818b9c1c921e41b89114a5636001ce750ea0a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77d77f046e0b8dd6c678c11ac818b9c1c921e41b89114a5636001ce750ea0a79->leave($__internal_77d77f046e0b8dd6c678c11ac818b9c1c921e41b89114a5636001ce750ea0a79_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_27c9d8848a570b78c88135cc0f7d251555ecfac4f8325702ab99cb5221891cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c9d8848a570b78c88135cc0f7d251555ecfac4f8325702ab99cb5221891cb6->enter($__internal_27c9d8848a570b78c88135cc0f7d251555ecfac4f8325702ab99cb5221891cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_27c9d8848a570b78c88135cc0f7d251555ecfac4f8325702ab99cb5221891cb6->leave($__internal_27c9d8848a570b78c88135cc0f7d251555ecfac4f8325702ab99cb5221891cb6_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_3efac8f31069932741430a39c0455b7c4847bc9fb5d4d6c0ecdfb00a4f4ba03e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3efac8f31069932741430a39c0455b7c4847bc9fb5d4d6c0ecdfb00a4f4ba03e->enter($__internal_3efac8f31069932741430a39c0455b7c4847bc9fb5d4d6c0ecdfb00a4f4ba03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_3efac8f31069932741430a39c0455b7c4847bc9fb5d4d6c0ecdfb00a4f4ba03e->leave($__internal_3efac8f31069932741430a39c0455b7c4847bc9fb5d4d6c0ecdfb00a4f4ba03e_prof);

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
