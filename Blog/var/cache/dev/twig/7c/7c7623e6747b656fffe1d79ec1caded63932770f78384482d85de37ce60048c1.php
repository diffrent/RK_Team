<?php

/* admin/category/all.html.twig */
class __TwigTemplate_9d070e1e41aea5df6e4f32225fb2cc76858edeffcd8e627b28823006139ec89c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/category/all.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad942623ec91e28310696e540144a1f168b36857fe49472ae7c120614b6cf171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad942623ec91e28310696e540144a1f168b36857fe49472ae7c120614b6cf171->enter($__internal_ad942623ec91e28310696e540144a1f168b36857fe49472ae7c120614b6cf171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/category/all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad942623ec91e28310696e540144a1f168b36857fe49472ae7c120614b6cf171->leave($__internal_ad942623ec91e28310696e540144a1f168b36857fe49472ae7c120614b6cf171_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f22717f09923508d810725afdaa707d5086bb475356987d96bbc001906c63362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22717f09923508d810725afdaa707d5086bb475356987d96bbc001906c63362->enter($__internal_f22717f09923508d810725afdaa707d5086bb475356987d96bbc001906c63362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_create");
        echo "\" class=\"btn btn-success\">Create Category</a>
    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\">Edit</a></td>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_delete", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-danger\">Delete</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </tbody>
    </table>

";
        
        $__internal_f22717f09923508d810725afdaa707d5086bb475356987d96bbc001906c63362->leave($__internal_f22717f09923508d810725afdaa707d5086bb475356987d96bbc001906c63362_prof);

    }

    public function getTemplateName()
    {
        return "admin/category/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  74 => 20,  70 => 19,  66 => 18,  62 => 17,  59 => 16,  55 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <a href=\"{{ path(\"admin_category_create\") }}\" class=\"btn btn-success\">Create Category</a>
    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        {% for category in categories %}
            <tr>
                <td>{{ category.id }}</td>
                <td>{{ category.name }}</td>
                <td><a href=\"{{ path(\"admin_category_edit\", {id: category.id}) }}\" class=\"btn btn-xs btn-success\">Edit</a></td>
                <td><a href=\"{{ path(\"admin_category_delete\", {id: category.id}) }}\" class=\"btn btn-xs btn-danger\">Delete</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}";
    }
}
