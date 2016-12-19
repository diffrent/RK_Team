<?php

/* comment/delete.html.twig */
class __TwigTemplate_c82931ca8c39b44d1dd7b6265b705af67ac2b4c27f8efaeecbaabe81e0ddde8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "comment/delete.html.twig", 1);
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
        $__internal_472b99ab01d9a4252289a6141fb7eb01e544357bc96e4f99ad59ebfe513e36ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472b99ab01d9a4252289a6141fb7eb01e544357bc96e4f99ad59ebfe513e36ee->enter($__internal_472b99ab01d9a4252289a6141fb7eb01e544357bc96e4f99ad59ebfe513e36ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comment/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_472b99ab01d9a4252289a6141fb7eb01e544357bc96e4f99ad59ebfe513e36ee->leave($__internal_472b99ab01d9a4252289a6141fb7eb01e544357bc96e4f99ad59ebfe513e36ee_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_452c1d396459099c89ba272c2b89b1c532acdb3579e4f3f96c3f655f464ec1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452c1d396459099c89ba272c2b89b1c532acdb3579e4f3f96c3f655f464ec1a8->enter($__internal_452c1d396459099c89ba272c2b89b1c532acdb3579e4f3f96c3f655f464ec1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_delete", array("id" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
                <fieldset>
                    <legend>Delete Comment</legend>


                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"comment_content\">Content</label>
                        <div class=\"col-sm-6\">
                        <textarea class=\"form-control\" rows=\"6\" id=\"comment_content\"
                                  name=\"comment[content]\" disabled>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "content", array()), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>

                    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_452c1d396459099c89ba272c2b89b1c532acdb3579e4f3f96c3f655f464ec1a8->leave($__internal_452c1d396459099c89ba272c2b89b1c532acdb3579e4f3f96c3f655f464ec1a8_prof);

    }

    public function getTemplateName()
    {
        return "comment/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  63 => 19,  56 => 15,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('comment_delete', {id: comment.id}) }}\" method=\"POST\">
                <fieldset>
                    <legend>Delete Comment</legend>


                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"comment_content\">Content</label>
                        <div class=\"col-sm-6\">
                        <textarea class=\"form-control\" rows=\"6\" id=\"comment_content\"
                                  name=\"comment[content]\" disabled>{{ comment.content }}</textarea>
                        </div>
                    </div>

                    {{ form_row(form._token) }}

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('article_view', {id: article.id}) }}\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
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
