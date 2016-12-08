<?php

/* article/create.html.twig */
class __TwigTemplate_36a0f544f4db15635067e01ccf255c79d71104ed2ca5b7eca3997e9811681e45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "article/create.html.twig", 2);
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
        $__internal_0592145f7510174c34ecb2a3947f06abf78a9b8f31ea19beea3ab0c9b4e58d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0592145f7510174c34ecb2a3947f06abf78a9b8f31ea19beea3ab0c9b4e58d75->enter($__internal_0592145f7510174c34ecb2a3947f06abf78a9b8f31ea19beea3ab0c9b4e58d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0592145f7510174c34ecb2a3947f06abf78a9b8f31ea19beea3ab0c9b4e58d75->leave($__internal_0592145f7510174c34ecb2a3947f06abf78a9b8f31ea19beea3ab0c9b4e58d75_prof);

    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        $__internal_68d1456c74abfb823b46fd71f34beee3e0da06b6228c6295842f2a157c09a0fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d1456c74abfb823b46fd71f34beee3e0da06b6228c6295842f2a157c09a0fb->enter($__internal_68d1456c74abfb823b46fd71f34beee3e0da06b6228c6295842f2a157c09a0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/articleCreate.css"), "html", null, true);
        echo "\">

    <div class=\"main\">
        <div class=\"one\">
            <form enctype=\"multipart/form-data\" class=\"register\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_create");
        echo "\" method=\"POST\">
                <h3>Нова Статия</h3>

                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\" for=\"article_title\">Заглавие</label>
                    <div class=\"col-sm-4 \">
                        <input type=\"text\" class=\"form-control\" id=\"article_title\" placeholder=\"Post Title\"
                               name=\"article[title]\">
                    </div>
                </div>

                <div>
                    <label class=\"col-sm-4 control-label\" for=\"article_content\">Съдържание</label>
                    <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"17\" id=\"article_content\"
                                      name=\"article[content]\"></textarea>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\" for=\"article_title\">Category</label>
                    <div class=\"col-sm-4 \">
                        <select class=\"form-control\" id=\"article_title\"
                                name=\"article[category]\">
                            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 33
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</option>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                        </select>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\" for=\"article_tags\">Tags</label>
                    <div class=\"col-sm-4 \">
                        <input type=\"text\" class=\"form-control\" id=\"article_tags\" placeholder=\"Create tag\"
                               name=\"tags\">
                    </div>
                </div>

                ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coverPhoto", array()), 'row');
        echo "
                ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "


                <div>
                    <div>
                        <label></label>
                        <button style=\"float: right;\" type=\"submit\" class=\"button\">Изпрати</button>
                        <a style=\"float: right; padding: 14px; margin: -4% 3% 5% 0%; background-color: tomato;\" class=\"button\" href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Отказ</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_68d1456c74abfb823b46fd71f34beee3e0da06b6228c6295842f2a157c09a0fb->leave($__internal_68d1456c74abfb823b46fd71f34beee3e0da06b6228c6295842f2a157c09a0fb_prof);

    }

    public function getTemplateName()
    {
        return "article/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 55,  107 => 48,  103 => 47,  90 => 36,  78 => 33,  74 => 32,  48 => 9,  40 => 5,  34 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/articleCreate.css') }}\">

    <div class=\"main\">
        <div class=\"one\">
            <form enctype=\"multipart/form-data\" class=\"register\" action=\"{{ path('article_create') }}\" method=\"POST\">
                <h3>Нова Статия</h3>

                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\" for=\"article_title\">Заглавие</label>
                    <div class=\"col-sm-4 \">
                        <input type=\"text\" class=\"form-control\" id=\"article_title\" placeholder=\"Post Title\"
                               name=\"article[title]\">
                    </div>
                </div>

                <div>
                    <label class=\"col-sm-4 control-label\" for=\"article_content\">Съдържание</label>
                    <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"17\" id=\"article_content\"
                                      name=\"article[content]\"></textarea>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\" for=\"article_title\">Category</label>
                    <div class=\"col-sm-4 \">
                        <select class=\"form-control\" id=\"article_title\"
                                name=\"article[category]\">
                            {% for category in categories%}
                                <option value=\"{{ category.id }}\">{{ category }}</option>

                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\" for=\"article_tags\">Tags</label>
                    <div class=\"col-sm-4 \">
                        <input type=\"text\" class=\"form-control\" id=\"article_tags\" placeholder=\"Create tag\"
                               name=\"tags\">
                    </div>
                </div>

                {{ form_row(form.coverPhoto) }}
                {{ form_row(form._token) }}


                <div>
                    <div>
                        <label></label>
                        <button style=\"float: right;\" type=\"submit\" class=\"button\">Изпрати</button>
                        <a style=\"float: right; padding: 14px; margin: -4% 3% 5% 0%; background-color: tomato;\" class=\"button\" href=\"{{ path('blog_index') }}\">Отказ</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
{% endblock %}
";
    }
}
