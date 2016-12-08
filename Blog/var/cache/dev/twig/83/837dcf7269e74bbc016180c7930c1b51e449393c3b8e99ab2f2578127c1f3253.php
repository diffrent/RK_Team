<?php

/* admin/category/edit.html.twig */
class __TwigTemplate_1a70dc1fe49f41a619a1b1140b400bab769fe5e50f1533c7038f8524bbaa003b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/category/edit.html.twig", 1);
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
        $__internal_3423514fb2f389ae086aad9695527a95dcfd15900cbe0f8ae2ba26f0fdc1140e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3423514fb2f389ae086aad9695527a95dcfd15900cbe0f8ae2ba26f0fdc1140e->enter($__internal_3423514fb2f389ae086aad9695527a95dcfd15900cbe0f8ae2ba26f0fdc1140e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/category/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3423514fb2f389ae086aad9695527a95dcfd15900cbe0f8ae2ba26f0fdc1140e->leave($__internal_3423514fb2f389ae086aad9695527a95dcfd15900cbe0f8ae2ba26f0fdc1140e_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_0910e56740548a812c84251efdd445e72b942e1386f5de28376f776830d4791a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0910e56740548a812c84251efdd445e72b942e1386f5de28376f776830d4791a->enter($__internal_0910e56740548a812c84251efdd445e72b942e1386f5de28376f776830d4791a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_edit", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                <fieldset>
                    <legend>Edit category</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"category_name\">Name</label>
                        <div class=\"col-sm-4 \">
                            <input value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"category_name\" name=\"category[name]\" required type=\"text\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_all");
        echo "\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Save chages</button>
                        </div>
                    </div>
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_0910e56740548a812c84251efdd445e72b942e1386f5de28376f776830d4791a->leave($__internal_0910e56740548a812c84251efdd445e72b942e1386f5de28376f776830d4791a_prof);

    }

    public function getTemplateName()
    {
        return "admin/category/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  61 => 17,  53 => 12,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('admin_category_edit', {id: category.id}) }}\" method=\"post\">
                <fieldset>
                    <legend>Edit category</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"category_name\">Name</label>
                        <div class=\"col-sm-4 \">
                            <input value=\"{{ category.name }}\" class=\"form-control\" id=\"category_name\" name=\"category[name]\" required type=\"text\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('admin_category_all') }}\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Save chages</button>
                        </div>
                    </div>
                    {{  form_row(form._token) }}
                </fieldset>
            </form>
        </div>
    </div>
{% endblock %}

";
    }
}
