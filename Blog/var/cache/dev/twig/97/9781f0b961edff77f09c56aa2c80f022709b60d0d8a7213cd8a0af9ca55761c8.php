<?php

/* comment/create.html.twig */
class __TwigTemplate_8349f92ddda21445e950b6730ec197e1da7cffc8fc08d499c06d7e36fbea40be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "comment/create.html.twig", 1);
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
        $__internal_367222630052d567d777a4a4d63be0fb98dbd7659864e43399c68045fe35fd83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367222630052d567d777a4a4d63be0fb98dbd7659864e43399c68045fe35fd83->enter($__internal_367222630052d567d777a4a4d63be0fb98dbd7659864e43399c68045fe35fd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comment/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_367222630052d567d777a4a4d63be0fb98dbd7659864e43399c68045fe35fd83->leave($__internal_367222630052d567d777a4a4d63be0fb98dbd7659864e43399c68045fe35fd83_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_57159c7e98c2fd3415f91b7ba39dd96871903e1ca0584dec1956721cbb99f303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57159c7e98c2fd3415f91b7ba39dd96871903e1ca0584dec1956721cbb99f303->enter($__internal_57159c7e98c2fd3415f91b7ba39dd96871903e1ca0584dec1956721cbb99f303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_create", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
                <fieldset>
                    <legend>New Comment</legend>


                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"comment_content\">Comment*</label>
                        <div class=\"col-sm-6\">
                        <textarea class=\"form-control\" rows=\"6\" id=\"comment_content\"
                                  name=\"comment[content]\"></textarea>
                        </div>
                    </div>

                    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-success\">Comment</button>
                        </div>
                    </div>
                    <p>* Requred fields</p>
                </fieldset>
            </form>
        </div>
    </div>

";
        
        $__internal_57159c7e98c2fd3415f91b7ba39dd96871903e1ca0584dec1956721cbb99f303->leave($__internal_57159c7e98c2fd3415f91b7ba39dd96871903e1ca0584dec1956721cbb99f303_prof);

    }

    public function getTemplateName()
    {
        return "comment/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  61 => 20,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}

    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('comment_create', {id: article.id}) }}\" method=\"POST\">
                <fieldset>
                    <legend>New Comment</legend>


                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"comment_content\">Comment*</label>
                        <div class=\"col-sm-6\">
                        <textarea class=\"form-control\" rows=\"6\" id=\"comment_content\"
                                  name=\"comment[content]\"></textarea>
                        </div>
                    </div>

                    {{ form_row(form._token) }}

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('article_view', {id: article.id}) }}\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-success\">Comment</button>
                        </div>
                    </div>
                    <p>* Requred fields</p>
                </fieldset>
            </form>
        </div>
    </div>

{% endblock %}";
    }
}
