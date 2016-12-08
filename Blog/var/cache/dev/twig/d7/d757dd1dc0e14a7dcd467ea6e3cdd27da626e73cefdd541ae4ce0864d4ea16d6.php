<?php

/* admin/category/create.html.twig */
class __TwigTemplate_a73fafd87954a306ffefd87a7e4cab2890fe73b5907b09ea13cc5154e2ea7e1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/category/create.html.twig", 1);
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
        $__internal_32dce08c01b02ba522ad43a41e9ddc51d51f35970ce9f46d08f9116f97f07084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32dce08c01b02ba522ad43a41e9ddc51d51f35970ce9f46d08f9116f97f07084->enter($__internal_32dce08c01b02ba522ad43a41e9ddc51d51f35970ce9f46d08f9116f97f07084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/category/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32dce08c01b02ba522ad43a41e9ddc51d51f35970ce9f46d08f9116f97f07084->leave($__internal_32dce08c01b02ba522ad43a41e9ddc51d51f35970ce9f46d08f9116f97f07084_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_102df935bc1deab346645b17313fdc790f23cffd2b839347fcf216858a4a5457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_102df935bc1deab346645b17313fdc790f23cffd2b839347fcf216858a4a5457->enter($__internal_102df935bc1deab346645b17313fdc790f23cffd2b839347fcf216858a4a5457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_create");
        echo "\" method=\"post\">
                <fieldset>
                    <legend>Create category</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"category_name\">Name</label>
                        <div class=\"col-sm-4 \">
                            <input class=\"form-control\" id=\"category_name\" placeholder=\"Category name\" name=\"category[name]\" required type=\"text\">
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
        
        $__internal_102df935bc1deab346645b17313fdc790f23cffd2b839347fcf216858a4a5457->leave($__internal_102df935bc1deab346645b17313fdc790f23cffd2b839347fcf216858a4a5457_prof);

    }

    public function getTemplateName()
    {
        return "admin/category/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  58 => 17,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('admin_category_create') }}\" method=\"post\">
                <fieldset>
                    <legend>Create category</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"category_name\">Name</label>
                        <div class=\"col-sm-4 \">
                            <input class=\"form-control\" id=\"category_name\" placeholder=\"Category name\" name=\"category[name]\" required type=\"text\">
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
