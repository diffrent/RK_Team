<?php

/* about/create.html.twig */
class __TwigTemplate_c19e82a74558a186953000dea76500b7b47280adfce09ae1985510a82ad4e293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "about/create.html.twig", 2);
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
        $__internal_ec228d161ff924e13f0429f470596b5c8568b2ffbefb8954782b16880ebaa098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec228d161ff924e13f0429f470596b5c8568b2ffbefb8954782b16880ebaa098->enter($__internal_ec228d161ff924e13f0429f470596b5c8568b2ffbefb8954782b16880ebaa098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec228d161ff924e13f0429f470596b5c8568b2ffbefb8954782b16880ebaa098->leave($__internal_ec228d161ff924e13f0429f470596b5c8568b2ffbefb8954782b16880ebaa098_prof);

    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        $__internal_3a6e9e9a5579e2ff9796ae80ee33dc48b1a87c5800ff8aedf7087a3aed5e2edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6e9e9a5579e2ff9796ae80ee33dc48b1a87c5800ff8aedf7087a3aed5e2edc->enter($__internal_3a6e9e9a5579e2ff9796ae80ee33dc48b1a87c5800ff8aedf7087a3aed5e2edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/articleCreate.css"), "html", null, true);
        echo "\">

    <div class=\"main\">
        <div class=\"one\">
            <form enctype=\"multipart/form-data\" class=\"register\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about_create");
        echo "\" method=\"POST\">
                <h3>Качване на ново За Нас</h3>

                <div>
                    <label class=\"col-sm-4 control-label\" for=\"about_content\">Съдържание</label>
                    <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"17\" id=\"about_content\"
                                      name=\"about[content]\"></textarea>
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
        
        $__internal_3a6e9e9a5579e2ff9796ae80ee33dc48b1a87c5800ff8aedf7087a3aed5e2edc->leave($__internal_3a6e9e9a5579e2ff9796ae80ee33dc48b1a87c5800ff8aedf7087a3aed5e2edc_prof);

    }

    public function getTemplateName()
    {
        return "about/create.html.twig";
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
            <form enctype=\"multipart/form-data\" class=\"register\" action=\"{{ path('about_create') }}\" method=\"POST\">
                <h3>Качване на ново За Нас</h3>

                <div>
                    <label class=\"col-sm-4 control-label\" for=\"about_content\">Съдържание</label>
                    <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"17\" id=\"about_content\"
                                      name=\"about[content]\"></textarea>
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
