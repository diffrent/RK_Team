<?php

/* message/show.html.twig */
class __TwigTemplate_3c9b9df70f2d5a6dd8ab351b36faed4c70e1129bffa603398cfb66eee05de494 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "message/show.html.twig", 1);
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
        $__internal_82f4f81e664f86321ee98f763e1c692a3515a4c388e4717ac0bcd4659b3218bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f4f81e664f86321ee98f763e1c692a3515a4c388e4717ac0bcd4659b3218bf->enter($__internal_82f4f81e664f86321ee98f763e1c692a3515a4c388e4717ac0bcd4659b3218bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "message/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82f4f81e664f86321ee98f763e1c692a3515a4c388e4717ac0bcd4659b3218bf->leave($__internal_82f4f81e664f86321ee98f763e1c692a3515a4c388e4717ac0bcd4659b3218bf_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_81dba037a28a29d898ac3c6d1ee53809d22617b436a337658717122248bc4711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81dba037a28a29d898ac3c6d1ee53809d22617b436a337658717122248bc4711->enter($__internal_81dba037a28a29d898ac3c6d1ee53809d22617b436a337658717122248bc4711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/articleView.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\">

    <div class=\"mainDiv\">
        <h3>Съобщения</h3>


        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "            <div class=\"white-div\" style=\"margin-top: 5%; margin-bottom: -20px\">

                <p style=\"width: 100%\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "content", array(), "method"), "html", null, true);
            echo "
                </p>

                <footer>
                    <p class=\"post-info\">Написано от \"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "name", array()), "html", null, true);
            echo "\" с Емаил \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "email", array()), "html", null, true);
            echo "\" на \"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "dateAdded", array()), "d-m-Y H:i"), "html", null, true);
            echo "\" </p>
                </footer>
            </div>
            ";
            // line 22
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAdmin", array(), "method"))) {
                // line 23
                echo "                <a class=\"button\" style=\"padding: 5px\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_delete", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\">Изтрии</a>
            ";
            }
            // line 25
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>
";
        
        $__internal_81dba037a28a29d898ac3c6d1ee53809d22617b436a337658717122248bc4711->leave($__internal_81dba037a28a29d898ac3c6d1ee53809d22617b436a337658717122248bc4711_prof);

    }

    public function getTemplateName()
    {
        return "message/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 26,  88 => 25,  82 => 23,  80 => 22,  70 => 19,  63 => 15,  58 => 12,  54 => 11,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/articleView.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/lightbox.css') }}\">

    <div class=\"mainDiv\">
        <h3>Съобщения</h3>


        {% for message in messages %}
            <div class=\"white-div\" style=\"margin-top: 5%; margin-bottom: -20px\">

                <p style=\"width: 100%\">
                    {{ message.content() }}
                </p>

                <footer>
                    <p class=\"post-info\">Написано от \"{{ message.name }}\" с Емаил \"{{ message.email }}\" на \"{{ message.dateAdded|date('d-m-Y H:i') }}\" </p>
                </footer>
            </div>
            {% if app.getUser() and app.getUser().isAdmin() %}
                <a class=\"button\" style=\"padding: 5px\"  href=\"{{ path('message_delete', {'id':message.id}) }}\">Изтрии</a>
            {% endif %}
        {% endfor %}
    </div>
{% endblock %}";
    }
}
