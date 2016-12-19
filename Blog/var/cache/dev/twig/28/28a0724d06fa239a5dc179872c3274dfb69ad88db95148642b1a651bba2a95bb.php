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
        $__internal_c57fdee9b89f2d01f2c5d8963d9a4783ba85d13a528438b8cab5032604294ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c57fdee9b89f2d01f2c5d8963d9a4783ba85d13a528438b8cab5032604294ea1->enter($__internal_c57fdee9b89f2d01f2c5d8963d9a4783ba85d13a528438b8cab5032604294ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c57fdee9b89f2d01f2c5d8963d9a4783ba85d13a528438b8cab5032604294ea1->leave($__internal_c57fdee9b89f2d01f2c5d8963d9a4783ba85d13a528438b8cab5032604294ea1_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_1771e83ff225f600fabd04a3d88d5fffd7f578936a7648a18bdaa1eecbe00ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1771e83ff225f600fabd04a3d88d5fffd7f578936a7648a18bdaa1eecbe00ce6->enter($__internal_1771e83ff225f600fabd04a3d88d5fffd7f578936a7648a18bdaa1eecbe00ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
                        <textarea class=\"form-control\" rows=\"12\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "</textarea>
                        <h1 style=\"font-family: 'Calibri Light';font-style: italic;
                         font-size: smaller\">Този пост бе написан от ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()), "html", null, true);
        echo "</h1>
                    </div>
                            <label></label>

                            ";
        // line 28
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAuthor", array(0 => (isset($context["article"]) ? $context["article"] : $this->getContext($context, "article"))), "method") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAdmin", array(), "method")))) {
            // line 29
            echo "                                <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\">Изтрий</a>
                                <a class=\"button\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\">Редактирай</a>
                            ";
        }
        // line 32
        echo "                                <a class=\"button\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Назад &raquo;</a>
            </div>



    <div class=\"mainDiv\">
        <header><h3>Коментари</h3></header>
       <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_create", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"button\">Напиши коментар</a>
        <br>
        <br>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 43
            echo "
            <div class=\"white-div\" style=\"margin-top: 5%; margin-bottom: -20px\">

            <p style=\"width: 100%\">
                ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array(), "method"), "html", null, true);
            echo "
            </p>

                <footer>
                    <p class=\"post-info\">Написано от ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "author", array()), "html", null, true);
            echo " на ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "dateAdded", array()), "d-m-Y H:i"), "html", null, true);
            echo " </p>
                </footer>
            </div>
            ";
            // line 54
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAdmin", array(), "method"))) {
                // line 55
                echo "            <a class=\"button\" style=\"padding: 5px\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_delete", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                echo "\">Изтрии</a>
            ";
            }
            // line 57
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </div>
";
        
        $__internal_1771e83ff225f600fabd04a3d88d5fffd7f578936a7648a18bdaa1eecbe00ce6->leave($__internal_1771e83ff225f600fabd04a3d88d5fffd7f578936a7648a18bdaa1eecbe00ce6_prof);

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
        return array (  154 => 58,  148 => 57,  142 => 55,  140 => 54,  132 => 51,  125 => 47,  119 => 43,  115 => 42,  109 => 39,  98 => 32,  93 => 30,  88 => 29,  86 => 28,  79 => 24,  74 => 22,  67 => 18,  62 => 16,  52 => 9,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
                        <textarea class=\"form-control\" rows=\"12\">{{ article.content }}</textarea>
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



    <div class=\"mainDiv\">
        <header><h3>Коментари</h3></header>
       <a href=\"{{ path('comment_create', {'id':article.id}) }}\" class=\"button\">Напиши коментар</a>
        <br>
        <br>
        {% for comment in comments %}

            <div class=\"white-div\" style=\"margin-top: 5%; margin-bottom: -20px\">

            <p style=\"width: 100%\">
                {{ comment.content() }}
            </p>

                <footer>
                    <p class=\"post-info\">Написано от {{ comment.author }} на {{ comment.dateAdded|date('d-m-Y H:i') }} </p>
                </footer>
            </div>
            {% if app.getUser() and app.getUser().isAdmin() %}
            <a class=\"button\" style=\"padding: 5px\" href=\"{{ path('comment_delete', {'id':comment.id}) }}\">Изтрии</a>
            {% endif %}
        {% endfor %}
    </div>
{% endblock %}";
    }
}
