<?php

/* user/register.html.twig */
class __TwigTemplate_b005523ee0f47e1622aeadfaffd1de50d43a419818fea21d2f79842f1a84a25a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/register.html.twig", 1);
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
        $__internal_ae3972bb2240690e7976709a3f42d871aede067f4c8b13d7d4c6ba19dd162d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3972bb2240690e7976709a3f42d871aede067f4c8b13d7d4c6ba19dd162d04->enter($__internal_ae3972bb2240690e7976709a3f42d871aede067f4c8b13d7d4c6ba19dd162d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae3972bb2240690e7976709a3f42d871aede067f4c8b13d7d4c6ba19dd162d04->leave($__internal_ae3972bb2240690e7976709a3f42d871aede067f4c8b13d7d4c6ba19dd162d04_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a2a5f03e639a5bb63e33c53151169e8b22ec70ebe492ed4c9cfb6b9807e38db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a5f03e639a5bb63e33c53151169e8b22ec70ebe492ed4c9cfb6b9807e38db3->enter($__internal_a2a5f03e639a5bb63e33c53151169e8b22ec70ebe492ed4c9cfb6b9807e38db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "register";
        
        $__internal_a2a5f03e639a5bb63e33c53151169e8b22ec70ebe492ed4c9cfb6b9807e38db3->leave($__internal_a2a5f03e639a5bb63e33c53151169e8b22ec70ebe492ed4c9cfb6b9807e38db3_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_57170724d07945d4f9cdc069d000f787f34c1373e15944d1bc4d438801c35db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57170724d07945d4f9cdc069d000f787f34c1373e15944d1bc4d438801c35db1->enter($__internal_57170724d07945d4f9cdc069d000f787f34c1373e15944d1bc4d438801c35db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/register.css"), "html", null, true);
        echo "\">

    <div class=\"main\">
        <div class=\"one\">
            <form class=\"register\" action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
        echo "\" method=\"post\">
                    <h3>Регистрация</h3>
                    <div>
                        <label class=\"col-sm-4 control-label\" for=\"user_email\">E-mail</label>
                        <input class=\"form-control\" id=\"user_email\" placeholder=\"E-mail\" name=\"user[email]\" required type=\"text\">
                    </div>
                    <div>
                        <label class=\"col-sm-4 control-label\" for=\"user_fullName\">Потребителско Име</label>
                        <input type=\"text\" class=\"form-control\" id=\"user_fullName\" placeholder=\"Nick Name\" name=\"user[fullName]\" required>
                    </div>
                    <div>
                        <label class=\"col-sm-4 control-label\" for=\"user_password_first\">Парола</label>
                        <input type=\"password\" class=\"form-control\" id=\"user_password_first\" placeholder=\"Password\" name=\"user[password][first]\" required>
                    </div>
                    <div>
                        <label class=\"col-sm-4 control-label\" for=\"user_password_second\">Потвърди Парола</label>
                        <input type=\"password\" class=\"form-control\" id=\"user_password_second\" placeholder=\"Password\" name=\"user[password][second]\" required>
                    </div>
                    <div>
                        <label></label>
                        <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\">Създай Профил</button>
                        <a class=\"button\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Отказ</a>
                    </div>

                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
            </form>
        </div>
    </div>
";
        
        $__internal_57170724d07945d4f9cdc069d000f787f34c1373e15944d1bc4d438801c35db1->leave($__internal_57170724d07945d4f9cdc069d000f787f34c1373e15944d1bc4d438801c35db1_prof);

    }

    public function getTemplateName()
    {
        return "user/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 34,  85 => 31,  61 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'register' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/register.css') }}\">

    <div class=\"main\">
        <div class=\"one\">
            <form class=\"register\" action=\"{{ path('user_register') }}\" method=\"post\">
                    <h3>Регистрация</h3>
                    <div>
                        <label class=\"col-sm-4 control-label\" for=\"user_email\">E-mail</label>
                        <input class=\"form-control\" id=\"user_email\" placeholder=\"E-mail\" name=\"user[email]\" required type=\"text\">
                    </div>
                    <div>
                        <label class=\"col-sm-4 control-label\" for=\"user_fullName\">Потребителско Име</label>
                        <input type=\"text\" class=\"form-control\" id=\"user_fullName\" placeholder=\"Nick Name\" name=\"user[fullName]\" required>
                    </div>
                    <div>
                        <label class=\"col-sm-4 control-label\" for=\"user_password_first\">Парола</label>
                        <input type=\"password\" class=\"form-control\" id=\"user_password_first\" placeholder=\"Password\" name=\"user[password][first]\" required>
                    </div>
                    <div>
                        <label class=\"col-sm-4 control-label\" for=\"user_password_second\">Потвърди Парола</label>
                        <input type=\"password\" class=\"form-control\" id=\"user_password_second\" placeholder=\"Password\" name=\"user[password][second]\" required>
                    </div>
                    <div>
                        <label></label>
                        <button type=\"submit\" class=\"button\" style=\"margin: 0% 2% 0% 0%;\">Създай Профил</button>
                        <a class=\"button\" href=\"{{ path('blog_index') }}\">Отказ</a>
                    </div>

                    {{  form_row(form._token) }}
            </form>
        </div>
    </div>
{% endblock %}";
    }
}
