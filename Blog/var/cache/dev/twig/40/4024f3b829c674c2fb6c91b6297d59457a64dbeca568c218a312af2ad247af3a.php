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
        $__internal_8fed97080543d077f921029e355aa76e3ffc1ab6880d5321fb8c68cba1fdab23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fed97080543d077f921029e355aa76e3ffc1ab6880d5321fb8c68cba1fdab23->enter($__internal_8fed97080543d077f921029e355aa76e3ffc1ab6880d5321fb8c68cba1fdab23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fed97080543d077f921029e355aa76e3ffc1ab6880d5321fb8c68cba1fdab23->leave($__internal_8fed97080543d077f921029e355aa76e3ffc1ab6880d5321fb8c68cba1fdab23_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_6a05ae218f8f8021ccf8a00cd92d226e5ba35e9cbee63c8afdfb05fde5dbc68c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a05ae218f8f8021ccf8a00cd92d226e5ba35e9cbee63c8afdfb05fde5dbc68c->enter($__internal_6a05ae218f8f8021ccf8a00cd92d226e5ba35e9cbee63c8afdfb05fde5dbc68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <form class=\"register\">

    <div class=\"mainContent\">

        <div class=\"content\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 10
            echo "            <article class=\"topcontent\">
                <header>
                    <h2><a href=\"#\"title=\"First post\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "t</a></h2>
                </header>

                <footer>
                    <p class=\"post-info\">This post is written by ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo "</p>
                </footer>
                <content>
                    <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
            echo "</p>
                </content>
            </article>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "

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
    </form>
";
        
        $__internal_6a05ae218f8f8021ccf8a00cd92d226e5ba35e9cbee63c8afdfb05fde5dbc68c->leave($__internal_6a05ae218f8f8021ccf8a00cd92d226e5ba35e9cbee63c8afdfb05fde5dbc68c_prof);

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
        return array (  78 => 23,  68 => 19,  62 => 16,  55 => 12,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <form class=\"register\">

    <div class=\"mainContent\">

        <div class=\"content\">
            {% for article in articles %}
            <article class=\"topcontent\">
                <header>
                    <h2><a href=\"#\"title=\"First post\">{{ article.title }}t</a></h2>
                </header>

                <footer>
                    <p class=\"post-info\">This post is written by {{ article.author }}</p>
                </footer>
                <content>
                    <p>{{ article.content }}</p>
                </content>
            </article>
            {% endfor %}


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
    </form>
{% endblock %}

";
    }
}
