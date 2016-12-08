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
        $__internal_374ecc00caca9ac17e84f0ce83068edbf70d6f4990b8be4226f40e10476f7691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374ecc00caca9ac17e84f0ce83068edbf70d6f4990b8be4226f40e10476f7691->enter($__internal_374ecc00caca9ac17e84f0ce83068edbf70d6f4990b8be4226f40e10476f7691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_374ecc00caca9ac17e84f0ce83068edbf70d6f4990b8be4226f40e10476f7691->leave($__internal_374ecc00caca9ac17e84f0ce83068edbf70d6f4990b8be4226f40e10476f7691_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a10f2e680c038c19360130bfd281de72a2ad8331e456ab7ccfef18fe380f2051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10f2e680c038c19360130bfd281de72a2ad8331e456ab7ccfef18fe380f2051->enter($__internal_a10f2e680c038c19360130bfd281de72a2ad8331e456ab7ccfef18fe380f2051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "register";
        
        $__internal_a10f2e680c038c19360130bfd281de72a2ad8331e456ab7ccfef18fe380f2051->leave($__internal_a10f2e680c038c19360130bfd281de72a2ad8331e456ab7ccfef18fe380f2051_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_e8f333cae695546a9badbff20fd180aba3fde4578460808bb5f76db4da0415fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f333cae695546a9badbff20fd180aba3fde4578460808bb5f76db4da0415fe->enter($__internal_e8f333cae695546a9badbff20fd180aba3fde4578460808bb5f76db4da0415fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
                        <a class=\"button\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Отказ</a>
                        <a type=\"submit\" class=\"button\">Създай Профил</a>
                    </div>

                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
            </form>
        </div>
    </div>
";
        
        $__internal_e8f333cae695546a9badbff20fd180aba3fde4578460808bb5f76db4da0415fe->leave($__internal_e8f333cae695546a9badbff20fd180aba3fde4578460808bb5f76db4da0415fe_prof);

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
        return array (  91 => 34,  84 => 30,  61 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
                        <a class=\"button\" href=\"{{ path('blog_index') }}\">Отказ</a>
                        <a type=\"submit\" class=\"button\">Създай Профил</a>
                    </div>

                    {{  form_row(form._token) }}
            </form>
        </div>
    </div>
{% endblock %}";
    }
}
