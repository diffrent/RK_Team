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
        $__internal_437485aaf2b128fd12f144a053f652fe1fab8a29fe4f8f56d61bf872ac31748b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437485aaf2b128fd12f144a053f652fe1fab8a29fe4f8f56d61bf872ac31748b->enter($__internal_437485aaf2b128fd12f144a053f652fe1fab8a29fe4f8f56d61bf872ac31748b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_437485aaf2b128fd12f144a053f652fe1fab8a29fe4f8f56d61bf872ac31748b->leave($__internal_437485aaf2b128fd12f144a053f652fe1fab8a29fe4f8f56d61bf872ac31748b_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_dc0e5be1fa2c0a3f73751b834b28df9c2e9a3ccd6c31fdd6550268412faa864c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0e5be1fa2c0a3f73751b834b28df9c2e9a3ccd6c31fdd6550268412faa864c->enter($__internal_dc0e5be1fa2c0a3f73751b834b28df9c2e9a3ccd6c31fdd6550268412faa864c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_dc0e5be1fa2c0a3f73751b834b28df9c2e9a3ccd6c31fdd6550268412faa864c->leave($__internal_dc0e5be1fa2c0a3f73751b834b28df9c2e9a3ccd6c31fdd6550268412faa864c_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_408a702c6d6a3ce8f827a901ccb90bdd1dc137230fa7ad0674341b0c30c3e8ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408a702c6d6a3ce8f827a901ccb90bdd1dc137230fa7ad0674341b0c30c3e8ba->enter($__internal_408a702c6d6a3ce8f827a901ccb90bdd1dc137230fa7ad0674341b0c30c3e8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_all");
        echo "\">Потребители</a></button>
        <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\"><a class=\"button\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacts_create");
        echo "\">Нов Контакт</a></button>

            </label>
    </div>
";
        
        $__internal_408a702c6d6a3ce8f827a901ccb90bdd1dc137230fa7ad0674341b0c30c3e8ba->leave($__internal_408a702c6d6a3ce8f827a901ccb90bdd1dc137230fa7ad0674341b0c30c3e8ba_prof);

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
        return array (  72 => 14,  68 => 13,  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
            <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\"><a class=\"button\" href=\"{{ path('admin_users_all') }}\">Потребители</a></button>
        <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\"><a class=\"button\" href=\"{{ path('contacts_create') }}\">Нов Контакт</a></button>

            </label>
    </div>
{% endblock %}
";
    }
}
