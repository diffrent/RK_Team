<?php

/* admin/user/all.html.twig */
class __TwigTemplate_6ea6bf3533b9c9e5fa3e6ce78777284e06dfb478e2c1397661062db38cffbf81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/user/all.html.twig", 1);
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
        $__internal_2c0d4f2603e91b105e35211684d7f6b8329a545b53d70c5351d86a6c7e9edd61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0d4f2603e91b105e35211684d7f6b8329a545b53d70c5351d86a6c7e9edd61->enter($__internal_2c0d4f2603e91b105e35211684d7f6b8329a545b53d70c5351d86a6c7e9edd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c0d4f2603e91b105e35211684d7f6b8329a545b53d70c5351d86a6c7e9edd61->leave($__internal_2c0d4f2603e91b105e35211684d7f6b8329a545b53d70c5351d86a6c7e9edd61_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_001115e47478918a575b660b61c83235e23d5096e2282bead2ad64d576e926ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001115e47478918a575b660b61c83235e23d5096e2282bead2ad64d576e926ee->enter($__internal_001115e47478918a575b660b61c83235e23d5096e2282bead2ad64d576e926ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>Full Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 16
            echo "        <tr>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "fullName", array()), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\">Edit</a></td>
            <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-danger\">Delete</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>
    </table>

";
        
        $__internal_001115e47478918a575b660b61c83235e23d5096e2282bead2ad64d576e926ee->leave($__internal_001115e47478918a575b660b61c83235e23d5096e2282bead2ad64d576e926ee_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>Full Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        {% for user in users %}
        <tr>
            <td>{{ user.id }}</td>
            <td>{{ user.email }}</td>
            <td>{{ user.fullName }}</td>
            <td><a href=\"{{ path(\"admin_user_edit\", {id: user.id}) }}\" class=\"btn btn-xs btn-success\">Edit</a></td>
            <td><a href=\"{{ path(\"admin_user_delete\", {id: user.id}) }}\" class=\"btn btn-xs btn-danger\">Delete</a></td>
        </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}";
    }
}
