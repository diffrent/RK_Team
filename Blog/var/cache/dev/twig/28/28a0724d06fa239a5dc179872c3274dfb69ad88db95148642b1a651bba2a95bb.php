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
        $__internal_d1c58cfa9517d4c44a6904b42d084fb4430dce4a9654b28d9a38419d6ffcbd7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c58cfa9517d4c44a6904b42d084fb4430dce4a9654b28d9a38419d6ffcbd7f->enter($__internal_d1c58cfa9517d4c44a6904b42d084fb4430dce4a9654b28d9a38419d6ffcbd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1c58cfa9517d4c44a6904b42d084fb4430dce4a9654b28d9a38419d6ffcbd7f->leave($__internal_d1c58cfa9517d4c44a6904b42d084fb4430dce4a9654b28d9a38419d6ffcbd7f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_40464fb3e0f12d0df1cf2ca85f0fce4871187187c8138146180da8fecc627cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40464fb3e0f12d0df1cf2ca85f0fce4871187187c8138146180da8fecc627cbc->enter($__internal_40464fb3e0f12d0df1cf2ca85f0fce4871187187c8138146180da8fecc627cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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



    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_create", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\">Create Comment</a>

    <hr>
    <hr>
    <div class=\"container body-content\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h3>Comments</h3>
                <table class=\"table table-striped table-hover \">

                    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 50
            echo "
                    <thead>
                    <tr class=\"info\">
                        <th>Name</th>
                        <th>Comment</th>
                        <th>Date</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                    <tr class=\"active\">
                        <td>
                            ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "author", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array(), "method"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "dateAdded", array()), "d-m-Y H:i"), "html", null, true);
            echo "
                            ";
            // line 70
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAdmin", array(), "method"))) {
                // line 71
                echo "                                <a class=\"btn btn-danger btn-xs\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_delete", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                echo "\">Delete</a>
                            ";
            }
            // line 73
            echo "                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                    </tbody>
                </table>

            </div>
        </div>
    </div>


";
        
        $__internal_40464fb3e0f12d0df1cf2ca85f0fce4871187187c8138146180da8fecc627cbc->leave($__internal_40464fb3e0f12d0df1cf2ca85f0fce4871187187c8138146180da8fecc627cbc_prof);

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
        return array (  173 => 76,  165 => 73,  159 => 71,  157 => 70,  153 => 69,  147 => 66,  141 => 63,  126 => 50,  122 => 49,  109 => 39,  100 => 34,  95 => 32,  90 => 31,  88 => 30,  81 => 26,  75 => 23,  67 => 18,  62 => 16,  52 => 9,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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



    <a href=\"{{ path('comment_create', {'id':article.id}) }}\" class=\"btn btn-warning\">Create Comment</a>

    <hr>
    <hr>
    <div class=\"container body-content\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h3>Comments</h3>
                <table class=\"table table-striped table-hover \">

                    {% for comment in comments %}

                    <thead>
                    <tr class=\"info\">
                        <th>Name</th>
                        <th>Comment</th>
                        <th>Date</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                    <tr class=\"active\">
                        <td>
                            {{ comment.author }}
                        </td>
                        <td>
                            {{ comment.content() }}
                        </td>
                        <td>
                            {{ comment.dateAdded|date('d-m-Y H:i') }}
                            {% if app.getUser() and app.getUser().isAdmin() %}
                                <a class=\"btn btn-danger btn-xs\" href=\"{{ path('comment_delete', {'id':comment.id}) }}\">Delete</a>
                            {% endif %}
                        </td>
                    </tr>
                    {% endfor %}
                    </tbody>
                </table>

            </div>
        </div>
    </div>


{% endblock %}";
    }
}
