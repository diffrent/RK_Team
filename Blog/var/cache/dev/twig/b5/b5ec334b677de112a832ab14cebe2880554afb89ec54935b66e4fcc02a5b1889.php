<?php

/* security/login.html.twig */
class __TwigTemplate_248cefbee6d3d5d5df2dae08df8a07a2fe3fb260f374d5c6b238342dd09fdf70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f6aebdfbc9b76bd09c2be22c36fba5c6ed81c7cc797cf13f40df7883cfff6c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6aebdfbc9b76bd09c2be22c36fba5c6ed81c7cc797cf13f40df7883cfff6c5->enter($__internal_2f6aebdfbc9b76bd09c2be22c36fba5c6ed81c7cc797cf13f40df7883cfff6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f6aebdfbc9b76bd09c2be22c36fba5c6ed81c7cc797cf13f40df7883cfff6c5->leave($__internal_2f6aebdfbc9b76bd09c2be22c36fba5c6ed81c7cc797cf13f40df7883cfff6c5_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b8db9183abfb5302d489fa3fa0a6801f2b5560f281481b3178a22a1d18996b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8db9183abfb5302d489fa3fa0a6801f2b5560f281481b3178a22a1d18996b95->enter($__internal_b8db9183abfb5302d489fa3fa0a6801f2b5560f281481b3178a22a1d18996b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "login";
        
        $__internal_b8db9183abfb5302d489fa3fa0a6801f2b5560f281481b3178a22a1d18996b95->leave($__internal_b8db9183abfb5302d489fa3fa0a6801f2b5560f281481b3178a22a1d18996b95_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_3d20a73607ba3212a34f13cc4fc47164d65931050a407d9b40c1cff75fa3b4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d20a73607ba3212a34f13cc4fc47164d65931050a407d9b40c1cff75fa3b4be->enter($__internal_3d20a73607ba3212a34f13cc4fc47164d65931050a407d9b40c1cff75fa3b4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/register.css"), "html", null, true);
        echo "\">

    <div class=\"main\">
        <div class=\"one\">
            <form class=\"register\" action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo "\" method=\"post\">
                <h3>Вход</h3>
                <div>
                    <label class=\"col-sm-4 control-label\" for=\"user_email\">E-mail</label>
                    <input type=\"text\" class=\"form-control\" id=\"user_email\" placeholder=\"Email\" name=\"_username\">
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\" for=\"password\">Парола</label>
                    <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\" name=\"_password\">
                </div>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                <div>
                    <label></label>
                    <a class=\"button\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Отказ</a>
                    <button type=\"submit\" class=\"button\">Вход</button>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_3d20a73607ba3212a34f13cc4fc47164d65931050a407d9b40c1cff75fa3b4be->leave($__internal_3d20a73607ba3212a34f13cc4fc47164d65931050a407d9b40c1cff75fa3b4be_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  74 => 20,  61 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'login' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/register.css') }}\">

    <div class=\"main\">
        <div class=\"one\">
            <form class=\"register\" action=\"{{ path('security_login') }}\" method=\"post\">
                <h3>Вход</h3>
                <div>
                    <label class=\"col-sm-4 control-label\" for=\"user_email\">E-mail</label>
                    <input type=\"text\" class=\"form-control\" id=\"user_email\" placeholder=\"Email\" name=\"_username\">
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\" for=\"password\">Парола</label>
                    <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\" name=\"_password\">
                </div>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                <div>
                    <label></label>
                    <a class=\"button\" href=\"{{ path('blog_index') }}\">Отказ</a>
                    <button type=\"submit\" class=\"button\">Вход</button>
                </div>
            </form>
        </div>
    </div>
{% endblock %}
";
    }
}
