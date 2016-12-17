<?php

/* article/create.html.twig */
class __TwigTemplate_36a0f544f4db15635067e01ccf255c79d71104ed2ca5b7eca3997e9811681e45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "article/create.html.twig", 2);
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
        $__internal_96bc0f81db380675987d16d8fc231b5eafcea8b5d329309e4ef231da9df3b780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96bc0f81db380675987d16d8fc231b5eafcea8b5d329309e4ef231da9df3b780->enter($__internal_96bc0f81db380675987d16d8fc231b5eafcea8b5d329309e4ef231da9df3b780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96bc0f81db380675987d16d8fc231b5eafcea8b5d329309e4ef231da9df3b780->leave($__internal_96bc0f81db380675987d16d8fc231b5eafcea8b5d329309e4ef231da9df3b780_prof);

    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        $__internal_3d18240df37f4fcec3a0f6b10fca2bf8fb5a3bdb9b786f262b67e8a032ceda17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d18240df37f4fcec3a0f6b10fca2bf8fb5a3bdb9b786f262b67e8a032ceda17->enter($__internal_3d18240df37f4fcec3a0f6b10fca2bf8fb5a3bdb9b786f262b67e8a032ceda17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/articleCreate.css"), "html", null, true);
        echo "\">

    <div class=\"main\">
        <div class=\"one\">
            <form enctype=\"multipart/form-data\" class=\"register\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_create");
        echo "\" method=\"POST\">
                <h3>Нова Статия</h3>

                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\" for=\"article_title\">Заглавие</label>
                    <div class=\"col-sm-4 \">
                        <input type=\"text\" class=\"form-control\" id=\"article_title\" placeholder=\"Post Title\"
                               name=\"article[title]\">
                    </div>
                </div>

                <div>
                    <label class=\"col-sm-4 control-label\" for=\"article_content\">Съдържание</label>
                    <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"17\" id=\"article_content\"
                                      name=\"article[content]\"></textarea>
                    </div>
                </div>

                ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coverPhoto", array()), 'row');
        echo "
                ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "


                <div>
                    <div>
                        <label></label>
                        <button style=\"float: right;\" type=\"submit\" class=\"button\">Изпрати</button>
                        <a style=\"float: right; padding: 14px; margin: -4% 3% 5% 0%; background-color: tomato;\" class=\"button\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Отказ</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_3d18240df37f4fcec3a0f6b10fca2bf8fb5a3bdb9b786f262b67e8a032ceda17->leave($__internal_3d18240df37f4fcec3a0f6b10fca2bf8fb5a3bdb9b786f262b67e8a032ceda17_prof);

    }

    public function getTemplateName()
    {
        return "article/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 36,  74 => 29,  70 => 28,  48 => 9,  40 => 5,  34 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/articleCreate.css') }}\">

    <div class=\"main\">
        <div class=\"one\">
            <form enctype=\"multipart/form-data\" class=\"register\" action=\"{{ path('article_create') }}\" method=\"POST\">
                <h3>Нова Статия</h3>

                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\" for=\"article_title\">Заглавие</label>
                    <div class=\"col-sm-4 \">
                        <input type=\"text\" class=\"form-control\" id=\"article_title\" placeholder=\"Post Title\"
                               name=\"article[title]\">
                    </div>
                </div>

                <div>
                    <label class=\"col-sm-4 control-label\" for=\"article_content\">Съдържание</label>
                    <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"17\" id=\"article_content\"
                                      name=\"article[content]\"></textarea>
                    </div>
                </div>

                {{ form_row(form.coverPhoto) }}
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
