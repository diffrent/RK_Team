<?php

/* article/delete.html.twig */
class __TwigTemplate_7579acd3335d581f6ed591bfeb44fe233f7c94409d0b123a33514030d112fb59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/delete.html.twig", 1);
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
        $__internal_f6190c36a3b68c47cc905f3700cb73f17120766a32094d911f18390ebc43c9c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6190c36a3b68c47cc905f3700cb73f17120766a32094d911f18390ebc43c9c6->enter($__internal_f6190c36a3b68c47cc905f3700cb73f17120766a32094d911f18390ebc43c9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6190c36a3b68c47cc905f3700cb73f17120766a32094d911f18390ebc43c9c6->leave($__internal_f6190c36a3b68c47cc905f3700cb73f17120766a32094d911f18390ebc43c9c6_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_1792063f4fedc72fba234b87b1a635ee3d73256af7e40eb9f973c13c7fe281d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1792063f4fedc72fba234b87b1a635ee3d73256af7e40eb9f973c13c7fe281d7->enter($__internal_1792063f4fedc72fba234b87b1a635ee3d73256af7e40eb9f973c13c7fe281d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/articleView.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\">


    <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
        <div class=\"mainDiv\">
            <header>
                <h2>Изтрии Статия</h2>
            </header>

            <div class=\"white-div\">
                <div class=\"photo-container\">
                    <div class=\"photoDiv\">
                        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/articles/" . $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "coverPhoto", array()))), "html", null, true);
        echo "\" data-lightbox=\"gallery\">
                            <img style=\"display: block;width: 100%;height: auto;\"
                                 src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/articles/" . $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "coverPhoto", array()))), "html", null, true);
        echo "\"/>
                        </a>
                    </div>
                </div>
                <p for=\"article_title\">Заглавие</p>
                <input type=\"text\" class=\"form-control\" id=\"article_title\" placeholder=\"Post Title\"
                       name=\"article[title]\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "\" disabled>

                <p for=\"article_content\">Content</p>
                <textarea class=\"form-control\" rows=\"16\" id=\"article_content\"
                          name=\"article[content]\" disabled>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "</textarea>

                ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
            </div>
            <label></label>
            <a class=\"button\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Cancel</a>
            <button type=\"submit\" class=\"button\">Delete</button>
        </div>
    </form>
";
        
        $__internal_1792063f4fedc72fba234b87b1a635ee3d73256af7e40eb9f973c13c7fe281d7->leave($__internal_1792063f4fedc72fba234b87b1a635ee3d73256af7e40eb9f973c13c7fe281d7_prof);

    }

    public function getTemplateName()
    {
        return "article/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 34,  89 => 31,  84 => 29,  77 => 25,  68 => 19,  63 => 17,  51 => 8,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/articleView.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/lightbox.css') }}\">


    <form action=\"{{ path('article_delete', {id: article.id}) }}\" method=\"POST\">
        <div class=\"mainDiv\">
            <header>
                <h2>Изтрии Статия</h2>
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
                <input type=\"text\" class=\"form-control\" id=\"article_title\" placeholder=\"Post Title\"
                       name=\"article[title]\" value=\"{{ article.title }}\" disabled>

                <p for=\"article_content\">Content</p>
                <textarea class=\"form-control\" rows=\"16\" id=\"article_content\"
                          name=\"article[content]\" disabled>{{ article.content }}</textarea>

                {{ form_row(form._token) }}
            </div>
            <label></label>
            <a class=\"button\" href=\"{{ path('article_view', {id: article.id}) }}\">Cancel</a>
            <button type=\"submit\" class=\"button\">Delete</button>
        </div>
    </form>
{% endblock %}

";
    }
}
