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
        $__internal_c4770d39f207785fce353922f678ce32999281f9768d44a63c841d0b7c1b863e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4770d39f207785fce353922f678ce32999281f9768d44a63c841d0b7c1b863e->enter($__internal_c4770d39f207785fce353922f678ce32999281f9768d44a63c841d0b7c1b863e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comment/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4770d39f207785fce353922f678ce32999281f9768d44a63c841d0b7c1b863e->leave($__internal_c4770d39f207785fce353922f678ce32999281f9768d44a63c841d0b7c1b863e_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_1af69192438527fe5b69c06c8a4b2302b971938b837c2bf8fecd5973030cb497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af69192438527fe5b69c06c8a4b2302b971938b837c2bf8fecd5973030cb497->enter($__internal_1af69192438527fe5b69c06c8a4b2302b971938b837c2bf8fecd5973030cb497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/articleCreate.css"), "html", null, true);
        echo "\">

    <div class=\"main\">
        <div class=\"one\">
            <form class=\"register\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_delete", array("id" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
                <h3>Изтрии коментар</h3>

                <label class=\"col-sm-4 control-label\" for=\"comment_content\">Съдържание</label>
                <textarea style=\"margin: 40px\" class=\"form-control\" rows=\"6\" id=\"comment_content\"
                          name=\"comment[content]\" disabled>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "content", array()), "html", null, true);
        echo "</textarea>

                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

                <div>
                    <div>
                        <label></label>
                        <a class=\"button\" style=\"float: right; padding: 14px; margin: -4% 3% 5% 0%;\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Отказ</a>
                        <button type=\"submit\" style=\"float: right;\" class=\"button\">Изтрии!!!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_1af69192438527fe5b69c06c8a4b2302b971938b837c2bf8fecd5973030cb497->leave($__internal_1af69192438527fe5b69c06c8a4b2302b971938b837c2bf8fecd5973030cb497_prof);

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
        return array (  69 => 20,  61 => 15,  56 => 13,  48 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/articleCreate.css') }}\">

    <div class=\"main\">
        <div class=\"one\">
            <form class=\"register\" action=\"{{ path('comment_delete', {id: comment.id}) }}\" method=\"POST\">
                <h3>Изтрии коментар</h3>

                <label class=\"col-sm-4 control-label\" for=\"comment_content\">Съдържание</label>
                <textarea style=\"margin: 40px\" class=\"form-control\" rows=\"6\" id=\"comment_content\"
                          name=\"comment[content]\" disabled>{{ comment.content }}</textarea>

                {{ form_row(form._token) }}

                <div>
                    <div>
                        <label></label>
                        <a class=\"button\" style=\"float: right; padding: 14px; margin: -4% 3% 5% 0%;\" href=\"{{ path('article_view', {id: article.id}) }}\">Отказ</a>
                        <button type=\"submit\" style=\"float: right;\" class=\"button\">Изтрии!!!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
{% endblock %}

";
    }
}
