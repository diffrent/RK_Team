<?php

/* article/edit.html.twig */
class __TwigTemplate_1a92ec694823bd1381132fbf28e7c4e2346f3292d6e7f254cfda36e9013b2388 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/edit.html.twig", 1);
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
        $__internal_bee77610cb5776b805f3fd18b8eafe4f15803ae9afb49c130c8cde6463531232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee77610cb5776b805f3fd18b8eafe4f15803ae9afb49c130c8cde6463531232->enter($__internal_bee77610cb5776b805f3fd18b8eafe4f15803ae9afb49c130c8cde6463531232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bee77610cb5776b805f3fd18b8eafe4f15803ae9afb49c130c8cde6463531232->leave($__internal_bee77610cb5776b805f3fd18b8eafe4f15803ae9afb49c130c8cde6463531232_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_2e3721f5350b7dc2e7402d362019b05e4cac9c81b7c597304f9df3b7e25f3a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3721f5350b7dc2e7402d362019b05e4cac9c81b7c597304f9df3b7e25f3a95->enter($__internal_2e3721f5350b7dc2e7402d362019b05e4cac9c81b7c597304f9df3b7e25f3a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/articleView.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\">

    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
        <div class=\"mainDiv\">
            <header>
                <h2>Редакция на статия</h2>
            </header>

            <div class=\"white-div\">
                <div class=\"photo-container\">
                    <div class=\"photoDiv\">
                        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/articles/" . $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "coverPhoto", array()))), "html", null, true);
        echo "\" data-lightbox=\"gallery\">
                            <img style=\"display: block;width: 100%;height: auto;\"
                                 src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/articles/" . $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "coverPhoto", array()))), "html", null, true);
        echo "\"/>
                        </a>
                    </div>
                </div>
                    <p for=\"article_title\">Заглавие</p>
                        <input type=\"text\" class=\"form-control\" id=\"article_title\"
                               name=\"article[title]\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "\">

                    <p for=\"article_content\">Съдържание</p>
                        <textarea class=\"form-control\" rows=\"16\" id=\"article_content\"
                                name=\"article[content]\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "</textarea>
                    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
            </div>

                <label></label>
                <div class=\"form-group\">
                    <div class=\"col-sm-4 col-sm-offset-4\">
                        <a class=\"button\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Отказ</a>
                        <button type=\"submit\" class=\"button\">Готово</button>
                    </div>
                </div>
        </div>
    </form>

";
        
        $__internal_2e3721f5350b7dc2e7402d362019b05e4cac9c81b7c597304f9df3b7e25f3a95->leave($__internal_2e3721f5350b7dc2e7402d362019b05e4cac9c81b7c597304f9df3b7e25f3a95_prof);

    }

    public function getTemplateName()
    {
        return "article/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 35,  87 => 29,  83 => 28,  76 => 24,  67 => 18,  62 => 16,  50 => 7,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/articleView.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/lightbox.css') }}\">

    <form action=\"{{ path('article_edit', {id: article.id}) }}\" method=\"POST\">
        <div class=\"mainDiv\">
            <header>
                <h2>Редакция на статия</h2>
            </header>

            <div class=\"white-div\">
                <div class=\"photo-container\">
                    <div class=\"photoDiv\">
                        <a href=\"{{ asset('uploads/articles/' ~ article.coverPhoto ) }}\" data-lightbox=\"gallery\">
                            <img style=\"display: block;width: 100%;height: auto;\"
                                 src=\"{{ asset('uploads/articles/' ~ article.coverPhoto ) }}\"/>
                        </a>
                    </div>
                </div>
                    <p for=\"article_title\">Заглавие</p>
                        <input type=\"text\" class=\"form-control\" id=\"article_title\"
                               name=\"article[title]\" value=\"{{ article.title }}\">

                    <p for=\"article_content\">Съдържание</p>
                        <textarea class=\"form-control\" rows=\"16\" id=\"article_content\"
                                name=\"article[content]\">{{ article.content }}</textarea>
                    {{ form_row(form._token) }}
            </div>

                <label></label>
                <div class=\"form-group\">
                    <div class=\"col-sm-4 col-sm-offset-4\">
                        <a class=\"button\" href=\"{{ path('article_view', {id: article.id}) }}\">Отказ</a>
                        <button type=\"submit\" class=\"button\">Готово</button>
                    </div>
                </div>
        </div>
    </form>

{% endblock %}

";
    }
}
