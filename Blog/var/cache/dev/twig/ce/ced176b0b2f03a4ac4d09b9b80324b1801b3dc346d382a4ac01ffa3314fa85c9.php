<?php

/* article/edit.html.twig */
class __TwigTemplate_045cb33c6e80e0494d8598ea74657a6914ff341a03c8077aa20f226f60ba69b2 extends Twig_Template
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
        $__internal_5aca91d1a683e5d9f922cab51bd6be4882195651c04c7134ab1b1035f8305343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aca91d1a683e5d9f922cab51bd6be4882195651c04c7134ab1b1035f8305343->enter($__internal_5aca91d1a683e5d9f922cab51bd6be4882195651c04c7134ab1b1035f8305343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aca91d1a683e5d9f922cab51bd6be4882195651c04c7134ab1b1035f8305343->leave($__internal_5aca91d1a683e5d9f922cab51bd6be4882195651c04c7134ab1b1035f8305343_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_ed66e4e3fbbd4926c57a36d3820b2a029adc116419252b378c19fe6499a8efa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed66e4e3fbbd4926c57a36d3820b2a029adc116419252b378c19fe6499a8efa8->enter($__internal_ed66e4e3fbbd4926c57a36d3820b2a029adc116419252b378c19fe6499a8efa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
                <fieldset>
                    <legend>Edit Post</legend>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_title\">Post Title</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_title\" placeholder=\"Post Title\"
                                   name=\"article[title]\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Content</label>
                        <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"6\" id=\"article_content\"
                                      name=\"article[content]\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_title\">Category</label>
                        <div class=\"col-sm-4 \">
                            <select class=\"form-control\" id=\"article_title\"
                                    name=\"article[category]\">
                                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 32
            echo "                                    ";
            if (($this->getAttribute($context["category"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "category", array()), "id", array()))) {
                // line 33
                echo "                                        <option selected=\"selected\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                echo "</option>
                                    ";
            } else {
                // line 35
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                echo "</option>
                                    ";
            }
            // line 37
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_tags\">Tags</label>
                        <div class=\"col-sm-4 \">
                            <input value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tags", array()), ", "), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" id=\"article_tags\" placeholder=\"Create tag\"
                                   name=\"tags\">
                        </div>

                    ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-success\">Edit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_ed66e4e3fbbd4926c57a36d3820b2a029adc116419252b378c19fe6499a8efa8->leave($__internal_ed66e4e3fbbd4926c57a36d3820b2a029adc116419252b378c19fe6499a8efa8_prof);

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
        return array (  131 => 54,  124 => 50,  117 => 46,  108 => 39,  101 => 37,  93 => 35,  85 => 33,  82 => 32,  78 => 31,  66 => 22,  55 => 14,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('article_edit', {id: article.id}) }}\" method=\"POST\">
                <fieldset>
                    <legend>Edit Post</legend>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_title\">Post Title</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_title\" placeholder=\"Post Title\"
                                   name=\"article[title]\" value=\"{{ article.title }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Content</label>
                        <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"6\" id=\"article_content\"
                                      name=\"article[content]\">{{ article.content }}</textarea>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_title\">Category</label>
                        <div class=\"col-sm-4 \">
                            <select class=\"form-control\" id=\"article_title\"
                                    name=\"article[category]\">
                                {% for category in categories%}
                                    {% if category.id == article.category.id %}
                                        <option selected=\"selected\" value=\"{{ category.id }}\">{{ category }}</option>
                                    {% else %}
                                            <option value=\"{{ category.id }}\">{{ category }}</option>
                                    {% endif %}

                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_tags\">Tags</label>
                        <div class=\"col-sm-4 \">
                            <input value=\"{{ article.tags | join(', ')}}\" type=\"text\" class=\"form-control\" id=\"article_tags\" placeholder=\"Create tag\"
                                   name=\"tags\">
                        </div>

                    {{ form_row(form._token) }}

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('article_view', {id: article.id}) }}\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-success\">Edit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
{% endblock %}

";
    }
}
