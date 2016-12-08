<?php

/* blog/index.html.twig */
class __TwigTemplate_14d3418c233bebb7fa82323d129c02ff2a9799bc6751cdb2f51d103160793cef extends Twig_Template
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
        $__internal_2684c2e5dd30ff1b89762cdb3a67b46dea522e9b9663061e72dfdc81fe759c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2684c2e5dd30ff1b89762cdb3a67b46dea522e9b9663061e72dfdc81fe759c35->enter($__internal_2684c2e5dd30ff1b89762cdb3a67b46dea522e9b9663061e72dfdc81fe759c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2684c2e5dd30ff1b89762cdb3a67b46dea522e9b9663061e72dfdc81fe759c35->leave($__internal_2684c2e5dd30ff1b89762cdb3a67b46dea522e9b9663061e72dfdc81fe759c35_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_061a55542329f212b45b1cc61f5399c1322b94641d4cafd1efdab4c6c59f2f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061a55542329f212b45b1cc61f5399c1322b94641d4cafd1efdab4c6c59f2f18->enter($__internal_061a55542329f212b45b1cc61f5399c1322b94641d4cafd1efdab4c6c59f2f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content\">
        <div class=\"row\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "                <div class=\"col-md-6\">
                    <article>
                        <header>
                            <h2><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles_in_category", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["category"], "articles", array()), "count", array()), "html", null, true);
            echo ")</a></h2>
                        </header>

                    </article>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </div>
    </div>
";
        
        $__internal_061a55542329f212b45b1cc61f5399c1322b94641d4cafd1efdab4c6c59f2f18->leave($__internal_061a55542329f212b45b1cc61f5399c1322b94641d4cafd1efdab4c6c59f2f18_prof);

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
        return array (  69 => 16,  53 => 10,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container body-content\">
        <div class=\"row\">
            {% for category in categories %}
                <div class=\"col-md-6\">
                    <article>
                        <header>
                            <h2><a href=\"{{ path('articles_in_category', {id:category.id}) }}\">{{ category.name }} ({{ category.articles.count }})</a></h2>
                        </header>

                    </article>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}

";
    }
}
