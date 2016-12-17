<?php

/* statistics/create.html.twig */
class __TwigTemplate_8de01a58d8f87a9f4aa02e2992f0618c2803486dbd0b1713d23b7bec4c200dd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "statistics/create.html.twig", 2);
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
        $__internal_db69daa25f23746fa2bec9d3471c49423e5f7c19ff350819363f990ff75b175d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db69daa25f23746fa2bec9d3471c49423e5f7c19ff350819363f990ff75b175d->enter($__internal_db69daa25f23746fa2bec9d3471c49423e5f7c19ff350819363f990ff75b175d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "statistics/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db69daa25f23746fa2bec9d3471c49423e5f7c19ff350819363f990ff75b175d->leave($__internal_db69daa25f23746fa2bec9d3471c49423e5f7c19ff350819363f990ff75b175d_prof);

    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        $__internal_5b87dc8f7b893baa80d526432cfbe16e0790b90823f17fb85102734fcd417b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b87dc8f7b893baa80d526432cfbe16e0790b90823f17fb85102734fcd417b69->enter($__internal_5b87dc8f7b893baa80d526432cfbe16e0790b90823f17fb85102734fcd417b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/articleCreate.css"), "html", null, true);
        echo "\">

    <div class=\"main\">
        <div class=\"one\">
            <form enctype=\"multipart/form-data\" class=\"register\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statistics_create");
        echo "\" method=\"POST\">
                <h3>Качване на нова Статистика</h3>

                <div>
                    <label class=\"col-sm-4 control-label\" for=\"statistics_content\">Съдържание</label>
                    <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"17\" id=\"statistics_content\"
                                      name=\"statistics[content]\"></textarea>
                    </div>
                </div>
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

                <div>
                    <div>
                        <label></label>
                        <button style=\"float: right;\" type=\"submit\" class=\"button\">Изпрати</button>
                        <a style=\"float: right; padding: 14px; margin: -4% 3% 5% 0%; background-color: tomato;\" class=\"button\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Отказ</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_5b87dc8f7b893baa80d526432cfbe16e0790b90823f17fb85102734fcd417b69->leave($__internal_5b87dc8f7b893baa80d526432cfbe16e0790b90823f17fb85102734fcd417b69_prof);

    }

    public function getTemplateName()
    {
        return "statistics/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  61 => 19,  48 => 9,  40 => 5,  34 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/articleCreate.css') }}\">

    <div class=\"main\">
        <div class=\"one\">
            <form enctype=\"multipart/form-data\" class=\"register\" action=\"{{ path('statistics_create') }}\" method=\"POST\">
                <h3>Качване на нова Статистика</h3>

                <div>
                    <label class=\"col-sm-4 control-label\" for=\"statistics_content\">Съдържание</label>
                    <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"17\" id=\"statistics_content\"
                                      name=\"statistics[content]\"></textarea>
                    </div>
                </div>
                {{ form_row(form._token) }}

                <div>
                    <div>
                        <label></label>
                        <button style=\"float: right;\" type=\"submit\" class=\"button\">Изпрати</button>
                        <a style=\"float: right; padding: 14px; margin: -4% 3% 5% 0%; background-color: tomato;\" class=\"button\" href=\"{{ path('blog_index') }}\">Отказ</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
{% endblock %}
";
    }
}
