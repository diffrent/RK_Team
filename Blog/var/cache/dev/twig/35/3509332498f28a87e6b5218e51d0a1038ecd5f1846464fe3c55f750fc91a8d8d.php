<?php

/* article/article.html.twig */
class __TwigTemplate_ac5e81b95b4e7fcc80e506405ba606e096c58e3b80da7ea6275bdec84ec2586a extends Twig_Template
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
        $__internal_2286ea46c505cc877239069b659bedcada96d8f98be60e2a388d4d2fdab1d267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2286ea46c505cc877239069b659bedcada96d8f98be60e2a388d4d2fdab1d267->enter($__internal_2286ea46c505cc877239069b659bedcada96d8f98be60e2a388d4d2fdab1d267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2286ea46c505cc877239069b659bedcada96d8f98be60e2a388d4d2fdab1d267->leave($__internal_2286ea46c505cc877239069b659bedcada96d8f98be60e2a388d4d2fdab1d267_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_b91d50f6da9f4ef964bd73dca043d2f75f807d3b21419c7ff17b630fc4ca86e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91d50f6da9f4ef964bd73dca043d2f75f807d3b21419c7ff17b630fc4ca86e7->enter($__internal_b91d50f6da9f4ef964bd73dca043d2f75f807d3b21419c7ff17b630fc4ca86e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <article>
                    <header>
                        <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h2>
                    </header>
                    <p>
                        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/articles/" . $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "coverPhoto", array()))), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/articles/" . $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "coverPhoto", array()))), "html", null, true);
        echo "\"/>
                        </a>
                    </p>

                    <p>
                        ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "
                    </p>

                    <small class=\"author\">
                        ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()), "html", null, true);
        echo "
                    </small>
                    <p>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 26
            echo "                            <a class=\"btn btn-default btn-xs\"
                               href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles_in_tag", array("name" => $this->getAttribute($context["tag"], "name", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </p>
                    <footer>
                        <div class=\"pull-right\">

                            ";
        // line 33
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAuthor", array(0 => (isset($context["article"]) ? $context["article"] : $this->getContext($context, "article"))), "method") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAdmin", array(), "method")))) {
            // line 34
            echo "                            <a class=\"btn btn-success btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\">Edit</a>
                            <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\">Delete</a>
                            ";
        }
        // line 37
        echo "
                            <a class=\"btn btn-default btn-xs\" href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">back &raquo;</a>
                        </div>
                    </footer>
                </article>
            </div>
        </div>
    </div>
";
        
        $__internal_b91d50f6da9f4ef964bd73dca043d2f75f807d3b21419c7ff17b630fc4ca86e7->leave($__internal_b91d50f6da9f4ef964bd73dca043d2f75f807d3b21419c7ff17b630fc4ca86e7_prof);

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
        return array (  116 => 38,  113 => 37,  108 => 35,  103 => 34,  101 => 33,  95 => 29,  85 => 27,  82 => 26,  78 => 25,  72 => 22,  65 => 18,  57 => 13,  53 => 12,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container body-content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <article>
                    <header>
                        <h2>{{ article.title }}</h2>
                    </header>
                    <p>
                        <a href=\"{{ asset('uploads/articles/' ~ article.coverPhoto ) }}\">
                            <img src=\"{{ asset('uploads/articles/' ~ article.coverPhoto ) }}\"/>
                        </a>
                    </p>

                    <p>
                        {{ article.content }}
                    </p>

                    <small class=\"author\">
                        {{ article.author }}
                    </small>
                    <p>
                        {% for tag in article.tags %}
                            <a class=\"btn btn-default btn-xs\"
                               href=\"{{ path('articles_in_tag', {'name': tag.name}) }}\">{{ tag.name }}</a>
                        {% endfor %}
                    </p>
                    <footer>
                        <div class=\"pull-right\">

                            {% if app.getUser() and (app.getUser().isAuthor(article) or app.getUser().isAdmin())  %}
                            <a class=\"btn btn-success btn-xs\" href=\"{{ path('article_edit', {'id': article.id}) }}\">Edit</a>
                            <a class=\"btn btn-danger btn-xs\" href=\"{{ path('article_delete', {'id': article.id}) }}\">Delete</a>
                            {% endif %}

                            <a class=\"btn btn-default btn-xs\" href=\"{{ path('blog_index') }}\">back &raquo;</a>
                        </div>
                    </footer>
                </article>
            </div>
        </div>
    </div>
{% endblock %}

";
    }
}