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
        $__internal_1117255d5336aa4c41148c24b90f7abc673c04d13a337963f5600720e83b3c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1117255d5336aa4c41148c24b90f7abc673c04d13a337963f5600720e83b3c64->enter($__internal_1117255d5336aa4c41148c24b90f7abc673c04d13a337963f5600720e83b3c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1117255d5336aa4c41148c24b90f7abc673c04d13a337963f5600720e83b3c64->leave($__internal_1117255d5336aa4c41148c24b90f7abc673c04d13a337963f5600720e83b3c64_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_9d0ad3ffd8f81c57403534e6e4cc6979df8624ee2bc1af9933697b0928fd8661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0ad3ffd8f81c57403534e6e4cc6979df8624ee2bc1af9933697b0928fd8661->enter($__internal_9d0ad3ffd8f81c57403534e6e4cc6979df8624ee2bc1af9933697b0928fd8661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "login";
        
        $__internal_9d0ad3ffd8f81c57403534e6e4cc6979df8624ee2bc1af9933697b0928fd8661->leave($__internal_9d0ad3ffd8f81c57403534e6e4cc6979df8624ee2bc1af9933697b0928fd8661_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_51d09866e397450f3591bb025551ff389b468888aacc2575225285bedc48ffa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d09866e397450f3591bb025551ff389b468888aacc2575225285bedc48ffa7->enter($__internal_51d09866e397450f3591bb025551ff389b468888aacc2575225285bedc48ffa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
                    <input type=\"email\" class=\"form-control\" id=\"user_email\" placeholder=\"Email\" name=\"_username\" required>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\" for=\"password\">Парола</label>
                    <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\" name=\"_password\" required>
                </div>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                <div>
                    <label></label>
                    <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\">Вход</button>
                    <a class=\"button\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Отказ</a>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_51d09866e397450f3591bb025551ff389b468888aacc2575225285bedc48ffa7->leave($__internal_51d09866e397450f3591bb025551ff389b468888aacc2575225285bedc48ffa7_prof);

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
        return array (  81 => 24,  74 => 20,  61 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
                    <input type=\"email\" class=\"form-control\" id=\"user_email\" placeholder=\"Email\" name=\"_username\" required>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\" for=\"password\">Парола</label>
                    <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\" name=\"_password\" required>
                </div>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                <div>
                    <label></label>
                    <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\">Вход</button>
                    <a class=\"button\" href=\"{{ path('blog_index') }}\">Отказ</a>
                </div>
            </form>
        </div>
    </div>
{% endblock %}
";
    }
}
