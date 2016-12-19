<?php

/* comment/create.html.twig */
class __TwigTemplate_8349f92ddda21445e950b6730ec197e1da7cffc8fc08d499c06d7e36fbea40be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "comment/create.html.twig", 1);
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
        $__internal_bacf2c29c84014dc3075cba460a5ef4fd0dd4fa0c3430808d43200eded34541f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bacf2c29c84014dc3075cba460a5ef4fd0dd4fa0c3430808d43200eded34541f->enter($__internal_bacf2c29c84014dc3075cba460a5ef4fd0dd4fa0c3430808d43200eded34541f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comment/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bacf2c29c84014dc3075cba460a5ef4fd0dd4fa0c3430808d43200eded34541f->leave($__internal_bacf2c29c84014dc3075cba460a5ef4fd0dd4fa0c3430808d43200eded34541f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_5080f8dc6727962f12dcc221fdc58c2b0d3eb6e7a6c93ae8231b9e92f0a29d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5080f8dc6727962f12dcc221fdc58c2b0d3eb6e7a6c93ae8231b9e92f0a29d39->enter($__internal_5080f8dc6727962f12dcc221fdc58c2b0d3eb6e7a6c93ae8231b9e92f0a29d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/articleCreate.css"), "html", null, true);
        echo "\">

    <div class=\"main\">
        <div class=\"one\">
            <form class=\"register\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_create", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
                <h3>Напиши Коментар</h3>

                <label for=\"comment_content\">Съдържание</label>
                <textarea style=\"margin-bottom: 40px\" class=\"form-control\" rows=\"6\" id=\"comment_content\"
                          name=\"comment[content]\" required></textarea>


                ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                <div>
                    <div>
                        <label></label>
                        <a class=\"button\" style=\"float: right; padding: 14px; \" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Отказ</a>
                        <button type=\"submit\" style=\"float: right;\" class=\"button\">Готово</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

";
        
        $__internal_5080f8dc6727962f12dcc221fdc58c2b0d3eb6e7a6c93ae8231b9e92f0a29d39->leave($__internal_5080f8dc6727962f12dcc221fdc58c2b0d3eb6e7a6c93ae8231b9e92f0a29d39_prof);

    }

    public function getTemplateName()
    {
        return "comment/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 20,  59 => 16,  48 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/articleCreate.css') }}\">

    <div class=\"main\">
        <div class=\"one\">
            <form class=\"register\" action=\"{{ path('comment_create', {id: article.id}) }}\" method=\"POST\">
                <h3>Напиши Коментар</h3>

                <label for=\"comment_content\">Съдържание</label>
                <textarea style=\"margin-bottom: 40px\" class=\"form-control\" rows=\"6\" id=\"comment_content\"
                          name=\"comment[content]\" required></textarea>


                {{ form_row(form._token) }}
                <div>
                    <div>
                        <label></label>
                        <a class=\"button\" style=\"float: right; padding: 14px; \" href=\"{{ path('article_view', {id: article.id}) }}\">Отказ</a>
                        <button type=\"submit\" style=\"float: right;\" class=\"button\">Готово</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

{% endblock %}


";
    }
}
