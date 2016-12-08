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
        $__internal_04b718fdcb1b2b66f1ce41b2b997e200d3e88f42576afed05c5735343a084143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b718fdcb1b2b66f1ce41b2b997e200d3e88f42576afed05c5735343a084143->enter($__internal_04b718fdcb1b2b66f1ce41b2b997e200d3e88f42576afed05c5735343a084143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04b718fdcb1b2b66f1ce41b2b997e200d3e88f42576afed05c5735343a084143->leave($__internal_04b718fdcb1b2b66f1ce41b2b997e200d3e88f42576afed05c5735343a084143_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_2aa92df5902bab2f3cfacaa0f2056cbfef1a448a12c6cebe3e4da0634ea25bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa92df5902bab2f3cfacaa0f2056cbfef1a448a12c6cebe3e4da0634ea25bd0->enter($__internal_2aa92df5902bab2f3cfacaa0f2056cbfef1a448a12c6cebe3e4da0634ea25bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "login";
        
        $__internal_2aa92df5902bab2f3cfacaa0f2056cbfef1a448a12c6cebe3e4da0634ea25bd0->leave($__internal_2aa92df5902bab2f3cfacaa0f2056cbfef1a448a12c6cebe3e4da0634ea25bd0_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_ebf946f604ff00994de2c5ad64db5409d69b45a457f16eafb07d50f1befc5556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf946f604ff00994de2c5ad64db5409d69b45a457f16eafb07d50f1befc5556->enter($__internal_ebf946f604ff00994de2c5ad64db5409d69b45a457f16eafb07d50f1befc5556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_ebf946f604ff00994de2c5ad64db5409d69b45a457f16eafb07d50f1befc5556->leave($__internal_ebf946f604ff00994de2c5ad64db5409d69b45a457f16eafb07d50f1befc5556_prof);

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
