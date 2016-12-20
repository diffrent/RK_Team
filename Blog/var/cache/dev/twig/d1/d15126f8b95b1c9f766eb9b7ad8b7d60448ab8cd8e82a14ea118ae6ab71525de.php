<?php

/* message/create.html.twig */
class __TwigTemplate_99381869b97fffa0615fc52032e0ecd6698d182175e57e0026e6ac17b5b8b59a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "message/create.html.twig", 1);
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
        $__internal_1b76ddf589042b44f70dc30032a1db9ca82fa97dff48597023cb2a0825aadba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b76ddf589042b44f70dc30032a1db9ca82fa97dff48597023cb2a0825aadba5->enter($__internal_1b76ddf589042b44f70dc30032a1db9ca82fa97dff48597023cb2a0825aadba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "message/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b76ddf589042b44f70dc30032a1db9ca82fa97dff48597023cb2a0825aadba5->leave($__internal_1b76ddf589042b44f70dc30032a1db9ca82fa97dff48597023cb2a0825aadba5_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_8951d8c103a6dbc9a8a9b2ce802461262e56f6c3aaa452ceba397dbd65df248c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8951d8c103a6dbc9a8a9b2ce802461262e56f6c3aaa452ceba397dbd65df248c->enter($__internal_8951d8c103a6dbc9a8a9b2ce802461262e56f6c3aaa452ceba397dbd65df248c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/articleCreate.css"), "html", null, true);
        echo "\">
    <div class=\"main\">
        <div class=\"one\">
            <form class=\"register\" action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_create");
        echo "\" method=\"POST\">
                <h3>Напиши Саобщение:</h3>

                <label for=\"message_email\">Емаил Адрес:</label>
                <input type=\"text\" style=\"margin-bottom: 4%\" class=\"form-control\"  id=\"message_email\"
                          name=\"message[email]\" required>

                <label for=\"message_name\">Твоето име:</label>
                <input type=\"text\" style=\"margin-bottom: 4%\" class=\"form-control\" rows=\"1\" id=\"message_name\"
                          name=\"message[name]\" required>

                <label for=\"message_content\">Съдържание:</label>
                <textarea style=\"margin-bottom: 40px\" class=\"form-control\" rows=\"6\" id=\"message_content\"
                          name=\"message[content]\" required></textarea>


                ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

                <div>
                    <div>
                        <label></label>
                        <a class=\"button\" style=\"float: right; padding: 14px;\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacts_view", array("id" => 1));
        echo "\">Отказ</a>
                        <button type=\"submit\" style=\"float: right;\" class=\"button\">Готово</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

";
        
        $__internal_8951d8c103a6dbc9a8a9b2ce802461262e56f6c3aaa452ceba397dbd65df248c->leave($__internal_8951d8c103a6dbc9a8a9b2ce802461262e56f6c3aaa452ceba397dbd65df248c_prof);

    }

    public function getTemplateName()
    {
        return "message/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  66 => 23,  47 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/articleCreate.css') }}\">
    <div class=\"main\">
        <div class=\"one\">
            <form class=\"register\" action=\"{{ path('message_create') }}\" method=\"POST\">
                <h3>Напиши Саобщение:</h3>

                <label for=\"message_email\">Емаил Адрес:</label>
                <input type=\"text\" style=\"margin-bottom: 4%\" class=\"form-control\"  id=\"message_email\"
                          name=\"message[email]\" required>

                <label for=\"message_name\">Твоето име:</label>
                <input type=\"text\" style=\"margin-bottom: 4%\" class=\"form-control\" rows=\"1\" id=\"message_name\"
                          name=\"message[name]\" required>

                <label for=\"message_content\">Съдържание:</label>
                <textarea style=\"margin-bottom: 40px\" class=\"form-control\" rows=\"6\" id=\"message_content\"
                          name=\"message[content]\" required></textarea>


                {{ form_row(form._token) }}

                <div>
                    <div>
                        <label></label>
                        <a class=\"button\" style=\"float: right; padding: 14px;\" href=\"{{ path('contacts_view',{id:1}) }}\">Отказ</a>
                        <button type=\"submit\" style=\"float: right;\" class=\"button\">Готово</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

{% endblock %}
";
    }
}
