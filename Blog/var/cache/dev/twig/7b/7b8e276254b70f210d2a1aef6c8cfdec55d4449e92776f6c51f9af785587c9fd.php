<?php

/* message/delete.html.twig */
class __TwigTemplate_0482f967761c2592bf8367fc16a3b0f58946e418c8bf40f2b4c39430941cc694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "message/delete.html.twig", 1);
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
        $__internal_8ec9f43a627d89f49a1ebeae9ba1c903733a24ee2673f9f0dc48f457c5e401cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec9f43a627d89f49a1ebeae9ba1c903733a24ee2673f9f0dc48f457c5e401cb->enter($__internal_8ec9f43a627d89f49a1ebeae9ba1c903733a24ee2673f9f0dc48f457c5e401cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "message/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ec9f43a627d89f49a1ebeae9ba1c903733a24ee2673f9f0dc48f457c5e401cb->leave($__internal_8ec9f43a627d89f49a1ebeae9ba1c903733a24ee2673f9f0dc48f457c5e401cb_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_5b2f4817cdcaa05bbee200afcce593a97f70e52de357317eade76994ec724656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2f4817cdcaa05bbee200afcce593a97f70e52de357317eade76994ec724656->enter($__internal_5b2f4817cdcaa05bbee200afcce593a97f70e52de357317eade76994ec724656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/articleCreate.css"), "html", null, true);
        echo "\">
    <div class=\"main\">
        <div class=\"one\">
            <form class=\"register\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_delete", array("id" => $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
                <h3>Изтрии Съобщение:</h3>

                <label for=\"message_email\">Емаил Адрес на автора:</label>
                <input type=\"text\" style=\"margin-bottom: 4%\" class=\"form-control\"  id=\"message_email\"
                       name=\"message[email]\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "email", array()), "html", null, true);
        echo "\" disabled>

                <label for=\"message_name\">Име на автора:</label>
                <input type=\"text\" style=\"margin-bottom: 4%\" class=\"form-control\"  id=\"message_name\"
                       name=\"message[name]\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "name", array()), "html", null, true);
        echo "\" disabled>

                <label for=\"message_content\">Съдържание:</label>
                <textarea style=\"margin-bottom: 40px\" class=\"form-control\" rows=\"6\" id=\"message_content\"
                          name=\"message[content]\" disabled>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "content", array()), "html", null, true);
        echo "</textarea>

                ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

                <div>
                    <div>
                        <label></label>
                        <a class=\"button\" style=\"float: right; padding: 14px;\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
        echo "\">Отказ</a>
                        <button type=\"submit\" style=\"float: right;\" class=\"button\">Изтрии!!!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_5b2f4817cdcaa05bbee200afcce593a97f70e52de357317eade76994ec724656->leave($__internal_5b2f4817cdcaa05bbee200afcce593a97f70e52de357317eade76994ec724656_prof);

    }

    public function getTemplateName()
    {
        return "message/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  74 => 22,  69 => 20,  62 => 16,  55 => 12,  47 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/articleCreate.css') }}\">
    <div class=\"main\">
        <div class=\"one\">
            <form class=\"register\" action=\"{{ path('message_delete', {id: message.id}) }}\" method=\"POST\">
                <h3>Изтрии Съобщение:</h3>

                <label for=\"message_email\">Емаил Адрес на автора:</label>
                <input type=\"text\" style=\"margin-bottom: 4%\" class=\"form-control\"  id=\"message_email\"
                       name=\"message[email]\" value=\"{{ message.email }}\" disabled>

                <label for=\"message_name\">Име на автора:</label>
                <input type=\"text\" style=\"margin-bottom: 4%\" class=\"form-control\"  id=\"message_name\"
                       name=\"message[name]\" value=\"{{ message.name }}\" disabled>

                <label for=\"message_content\">Съдържание:</label>
                <textarea style=\"margin-bottom: 40px\" class=\"form-control\" rows=\"6\" id=\"message_content\"
                          name=\"message[content]\" disabled>{{ message.content}}</textarea>

                {{ form_row(form._token) }}

                <div>
                    <div>
                        <label></label>
                        <a class=\"button\" style=\"float: right; padding: 14px;\" href=\"{{ path('user_profile') }}\">Отказ</a>
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
