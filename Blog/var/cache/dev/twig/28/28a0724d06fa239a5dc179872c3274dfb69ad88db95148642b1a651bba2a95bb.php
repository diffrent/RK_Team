<?php

/* article/article.html.twig */
class __TwigTemplate_d1270af036a329894d26f9e53697a22fb47856d615934f92941b6d013247cd6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/article.html.twig", 1);
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
        $__internal_a78e588c88a695de361e79ee0683dd03aa4f13d9c93c4443478a5efde0d27504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78e588c88a695de361e79ee0683dd03aa4f13d9c93c4443478a5efde0d27504->enter($__internal_a78e588c88a695de361e79ee0683dd03aa4f13d9c93c4443478a5efde0d27504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a78e588c88a695de361e79ee0683dd03aa4f13d9c93c4443478a5efde0d27504->leave($__internal_a78e588c88a695de361e79ee0683dd03aa4f13d9c93c4443478a5efde0d27504_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_a50d5aabadb5d27590f17bc9490f565694579d67c29ba19b3a4a74ed6440b897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50d5aabadb5d27590f17bc9490f565694579d67c29ba19b3a4a74ed6440b897->enter($__internal_a50d5aabadb5d27590f17bc9490f565694579d67c29ba19b3a4a74ed6440b897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/articleView.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\">

            <div class=\"mainDiv\">
                    <header>
                        <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h2>
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
                        <textarea class=\"form-control\" rows=\"12\">
                        ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "
                            </textarea>
                        <h1 style=\"font-family: 'Calibri Light';font-style: italic;
                         font-size: smaller\">Този пост бе написан от ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()), "html", null, true);
        echo "</h1>
                    </div>
                            <label></label>

                            ";
        // line 30
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAuthor", array(0 => (isset($context["article"]) ? $context["article"] : $this->getContext($context, "article"))), "method") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAdmin", array(), "method")))) {
            // line 31
            echo "                                <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\">Изтрий</a>
                                <a class=\"button\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\">Редактирай</a>
                            ";
        }
        // line 34
        echo "                                <a class=\"button\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Назад &raquo;</a>
            </div>
";
        
        $__internal_a50d5aabadb5d27590f17bc9490f565694579d67c29ba19b3a4a74ed6440b897->leave($__internal_a50d5aabadb5d27590f17bc9490f565694579d67c29ba19b3a4a74ed6440b897_prof);

    }

    public function getTemplateName()
    {
        return "article/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  95 => 32,  90 => 31,  88 => 30,  81 => 26,  75 => 23,  67 => 18,  62 => 16,  52 => 9,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/articleView.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/lightbox.css') }}\">

            <div class=\"mainDiv\">
                    <header>
                        <h2>{{ article.title }}</h2>
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
                        <textarea class=\"form-control\" rows=\"12\">
                        {{ article.content }}
                            </textarea>
                        <h1 style=\"font-family: 'Calibri Light';font-style: italic;
                         font-size: smaller\">Този пост бе написан от {{ article.author }}</h1>
                    </div>
                            <label></label>

                            {% if app.getUser() and (app.getUser().isAuthor(article) or app.getUser().isAdmin())  %}
                                <a class=\"button\" href=\"{{ path('article_delete', {'id': article.id}) }}\">Изтрий</a>
                                <a class=\"button\" href=\"{{ path('article_edit', {'id': article.id}) }}\">Редактирай</a>
                            {% endif %}
                                <a class=\"button\" href=\"{{ path('blog_index') }}\">Назад &raquo;</a>
            </div>
{% endblock %}";
    }
}
