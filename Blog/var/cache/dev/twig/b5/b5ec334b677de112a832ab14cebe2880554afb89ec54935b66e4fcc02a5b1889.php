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
        $__internal_fc9297f92df70aa8f2f849d23ae438c9c35b793a68660081089848643ee46bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9297f92df70aa8f2f849d23ae438c9c35b793a68660081089848643ee46bbe->enter($__internal_fc9297f92df70aa8f2f849d23ae438c9c35b793a68660081089848643ee46bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc9297f92df70aa8f2f849d23ae438c9c35b793a68660081089848643ee46bbe->leave($__internal_fc9297f92df70aa8f2f849d23ae438c9c35b793a68660081089848643ee46bbe_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_283f6866cf49d28de5b3cdaff1a29161bc16866e6147ba2e48e8c3aa44d7166d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283f6866cf49d28de5b3cdaff1a29161bc16866e6147ba2e48e8c3aa44d7166d->enter($__internal_283f6866cf49d28de5b3cdaff1a29161bc16866e6147ba2e48e8c3aa44d7166d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "login";
        
        $__internal_283f6866cf49d28de5b3cdaff1a29161bc16866e6147ba2e48e8c3aa44d7166d->leave($__internal_283f6866cf49d28de5b3cdaff1a29161bc16866e6147ba2e48e8c3aa44d7166d_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_a07acb822ac39945d11236ce8a0fbb4031c5fa7898ba6cad44cc1587a9f84a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07acb822ac39945d11236ce8a0fbb4031c5fa7898ba6cad44cc1587a9f84a8d->enter($__internal_a07acb822ac39945d11236ce8a0fbb4031c5fa7898ba6cad44cc1587a9f84a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_a07acb822ac39945d11236ce8a0fbb4031c5fa7898ba6cad44cc1587a9f84a8d->leave($__internal_a07acb822ac39945d11236ce8a0fbb4031c5fa7898ba6cad44cc1587a9f84a8d_prof);

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
