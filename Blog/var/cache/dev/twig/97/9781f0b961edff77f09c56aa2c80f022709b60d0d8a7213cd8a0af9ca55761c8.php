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
        $__internal_40c59623a0567746c2bc9d00225be0a380708c3087d2b6bbfd098f04eca9f1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c59623a0567746c2bc9d00225be0a380708c3087d2b6bbfd098f04eca9f1e5->enter($__internal_40c59623a0567746c2bc9d00225be0a380708c3087d2b6bbfd098f04eca9f1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comment/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40c59623a0567746c2bc9d00225be0a380708c3087d2b6bbfd098f04eca9f1e5->leave($__internal_40c59623a0567746c2bc9d00225be0a380708c3087d2b6bbfd098f04eca9f1e5_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_a159662fa21523e06bd8e02da8992361b55141446a3df80a04fe329f2f1396f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a159662fa21523e06bd8e02da8992361b55141446a3df80a04fe329f2f1396f8->enter($__internal_a159662fa21523e06bd8e02da8992361b55141446a3df80a04fe329f2f1396f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_a159662fa21523e06bd8e02da8992361b55141446a3df80a04fe329f2f1396f8->leave($__internal_a159662fa21523e06bd8e02da8992361b55141446a3df80a04fe329f2f1396f8_prof);

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
