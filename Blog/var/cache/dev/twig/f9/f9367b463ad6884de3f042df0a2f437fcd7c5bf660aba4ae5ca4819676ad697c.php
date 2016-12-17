<?php

/* contacts/create.html.twig */
class __TwigTemplate_d9fbc97d07897e34e2ba9b89d81c81db20c88f4524dd5aec38dca0790856a510 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "contacts/create.html.twig", 2);
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
        $__internal_46bb2117e117390563847db82911474b5a022d900f38d762c7f4b40c737c6a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46bb2117e117390563847db82911474b5a022d900f38d762c7f4b40c737c6a41->enter($__internal_46bb2117e117390563847db82911474b5a022d900f38d762c7f4b40c737c6a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contacts/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46bb2117e117390563847db82911474b5a022d900f38d762c7f4b40c737c6a41->leave($__internal_46bb2117e117390563847db82911474b5a022d900f38d762c7f4b40c737c6a41_prof);

    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        $__internal_b96ac2810d98f9f1252b0133fe48d7c280ece4a970bf1eb4147c87490d784e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96ac2810d98f9f1252b0133fe48d7c280ece4a970bf1eb4147c87490d784e24->enter($__internal_b96ac2810d98f9f1252b0133fe48d7c280ece4a970bf1eb4147c87490d784e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/articleCreate.css"), "html", null, true);
        echo "\">

    <div class=\"main\">
        <div class=\"one\">
            <form enctype=\"multipart/form-data\" class=\"register\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacts_create");
        echo "\" method=\"POST\">
                <h3>Качване на нова Контакти</h3>

                <div>
                    <label class=\"col-sm-4 control-label\" for=\"contacts_content\">Съдържание</label>
                    <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"17\" id=\"contacts_content\"
                                      name=\"contacts[content]\"></textarea>
                    </div>
                </div>

                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

                <div>
                    <div>
                        <label></label>
                        <button style=\"float: right;\" type=\"submit\" class=\"button\">Изпрати</button>
                        <a style=\"float: right; padding: 14px; margin: -4% 3% 5% 0%; background-color: tomato;\" class=\"button\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Отказ</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_b96ac2810d98f9f1252b0133fe48d7c280ece4a970bf1eb4147c87490d784e24->leave($__internal_b96ac2810d98f9f1252b0133fe48d7c280ece4a970bf1eb4147c87490d784e24_prof);

    }

    public function getTemplateName()
    {
        return "contacts/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 26,  62 => 20,  48 => 9,  40 => 5,  34 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/articleCreate.css') }}\">

    <div class=\"main\">
        <div class=\"one\">
            <form enctype=\"multipart/form-data\" class=\"register\" action=\"{{ path('contacts_create') }}\" method=\"POST\">
                <h3>Качване на нова Контакти</h3>

                <div>
                    <label class=\"col-sm-4 control-label\" for=\"contacts_content\">Съдържание</label>
                    <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"17\" id=\"contacts_content\"
                                      name=\"contacts[content]\"></textarea>
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
