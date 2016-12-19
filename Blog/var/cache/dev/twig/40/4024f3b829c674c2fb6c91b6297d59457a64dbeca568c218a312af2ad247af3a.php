<?php

/* blog/index.html.twig */
class __TwigTemplate_d03768899f64a003df592831bb971c65f399feec94202205283dff76cdb280d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
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
        $__internal_f8e56e2ad14fa73273d909c2440b8e38da6bd5981cdea618f556ecb3095b0740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e56e2ad14fa73273d909c2440b8e38da6bd5981cdea618f556ecb3095b0740->enter($__internal_f8e56e2ad14fa73273d909c2440b8e38da6bd5981cdea618f556ecb3095b0740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8e56e2ad14fa73273d909c2440b8e38da6bd5981cdea618f556ecb3095b0740->leave($__internal_f8e56e2ad14fa73273d909c2440b8e38da6bd5981cdea618f556ecb3095b0740_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_b9f26f9e023e208ca4f704da78143c57e99023b3c73fc97eba472cb4756e84ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f26f9e023e208ca4f704da78143c57e99023b3c73fc97eba472cb4756e84ba->enter($__internal_b9f26f9e023e208ca4f704da78143c57e99023b3c73fc97eba472cb4756e84ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\">
    <form class=\"register\">

    <div class=\"mainContent\">

        <div class=\"content\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 11
            echo "            <article class=\"topcontent\">
                <header>
                    <h2><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" title=\"First post\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a></h2>
                </header>

                <footer>
                    <p class=\"post-info\">This post is written by ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo "</p>
                </footer>
                <content>
                    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/articles/" . $this->getAttribute($context["article"], "coverPhoto", array()))), "html", null, true);
            echo "\" data-lightbox=\"gallery\">
                        <img style=\"display: block;width: 100%;height: auto;\"
                             src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/articles/" . $this->getAttribute($context["article"], "coverPhoto", array()))), "html", null, true);
            echo "\"/></a>

                    <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "summary", array()), "html", null, true);
            echo "</p>
                    ";
            // line 26
            echo "                </content>
            </article>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>


    <aside class=\"top-sidebar\">
        <article>
            <h2>Top sidebar</h2>
            <p>Класическото тесто за пица се приготвя от брашно, мая, захар, сол, </p>
        </article>
    </aside>

    <aside class=\"middle-sidebar\">
        <article>
            <h2>Middle sidebar</h2>
            <p>Класическото тесто за пица се приготвя от брашно, мая, захар, сол, </p>
        </article>
    </aside>

    <aside class=\"bottom-sidebar\">
        <article>
            <h2>Bottom sidebar</h2>
            <p>Класическото тесто за пица се приготвя от брашно, мая, захар, сол, </p>
        </article>
    </aside>
";
        
        $__internal_b9f26f9e023e208ca4f704da78143c57e99023b3c73fc97eba472cb4756e84ba->leave($__internal_b9f26f9e023e208ca4f704da78143c57e99023b3c73fc97eba472cb4756e84ba_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 29,  87 => 26,  83 => 24,  78 => 22,  73 => 20,  67 => 17,  58 => 13,  54 => 11,  50 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/lightbox.css') }}\">
    <form class=\"register\">

    <div class=\"mainContent\">

        <div class=\"content\">
            {% for article in articles %}
            <article class=\"topcontent\">
                <header>
                    <h2><a href=\"{{ path('article_view', {'id': article.id}) }}\" title=\"First post\">{{ article.title }}</a></h2>
                </header>

                <footer>
                    <p class=\"post-info\">This post is written by {{ article.author }}</p>
                </footer>
                <content>
                    <a href=\"{{ asset('uploads/articles/' ~ article.coverPhoto ) }}\" data-lightbox=\"gallery\">
                        <img style=\"display: block;width: 100%;height: auto;\"
                             src=\"{{ asset('uploads/articles/' ~ article.coverPhoto ) }}\"/></a>

                    <p>{{ article.summary }}</p>
                    {# може да се напише и {{ article.content }} за да покаже целия пост #}
                </content>
            </article>
            {% endfor %}
        </div>
    </div>


    <aside class=\"top-sidebar\">
        <article>
            <h2>Top sidebar</h2>
            <p>Класическото тесто за пица се приготвя от брашно, мая, захар, сол, </p>
        </article>
    </aside>

    <aside class=\"middle-sidebar\">
        <article>
            <h2>Middle sidebar</h2>
            <p>Класическото тесто за пица се приготвя от брашно, мая, захар, сол, </p>
        </article>
    </aside>

    <aside class=\"bottom-sidebar\">
        <article>
            <h2>Bottom sidebar</h2>
            <p>Класическото тесто за пица се приготвя от брашно, мая, захар, сол, </p>
        </article>
    </aside>
{% endblock %}

";
    }
}
