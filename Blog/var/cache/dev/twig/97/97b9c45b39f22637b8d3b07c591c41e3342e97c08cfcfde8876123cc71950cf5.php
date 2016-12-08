<?php

/* admin/category/delete.html.twig */
class __TwigTemplate_9e1c2252ae14f51a3d4b792a29a57e6c182a02d1959abcc4cb08bbacbb2ce153 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/category/delete.html.twig", 1);
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
        $__internal_43dd265ec035fee4fa509ed141f3d5cadc5d0c480c6424bc7ebd131594ba959c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43dd265ec035fee4fa509ed141f3d5cadc5d0c480c6424bc7ebd131594ba959c->enter($__internal_43dd265ec035fee4fa509ed141f3d5cadc5d0c480c6424bc7ebd131594ba959c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/category/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43dd265ec035fee4fa509ed141f3d5cadc5d0c480c6424bc7ebd131594ba959c->leave($__internal_43dd265ec035fee4fa509ed141f3d5cadc5d0c480c6424bc7ebd131594ba959c_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_579521e3a003263dc729a139e026852b283a05090da7abb2fa6cea2e0fc54bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579521e3a003263dc729a139e026852b283a05090da7abb2fa6cea2e0fc54bc0->enter($__internal_579521e3a003263dc729a139e026852b283a05090da7abb2fa6cea2e0fc54bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_delete", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                <fieldset>
                    <legend>Delete category!!!</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"category_name\">Name</label>
                        <div class=\"col-sm-4 \">
                            <input disabled=\"disabled\" value=\"";
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
                            <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
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
        
        $__internal_579521e3a003263dc729a139e026852b283a05090da7abb2fa6cea2e0fc54bc0->leave($__internal_579521e3a003263dc729a139e026852b283a05090da7abb2fa6cea2e0fc54bc0_prof);

    }

    public function getTemplateName()
    {
        return "admin/category/delete.html.twig";
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
            <form class=\"form-horizontal\" action=\"{{ path('admin_category_delete', {id: category.id}) }}\" method=\"post\">
                <fieldset>
                    <legend>Delete category!!!</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"category_name\">Name</label>
                        <div class=\"col-sm-4 \">
                            <input disabled=\"disabled\" value=\"{{ category.name }}\" class=\"form-control\" id=\"category_name\" name=\"category[name]\" required type=\"text\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('admin_category_all') }}\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
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
