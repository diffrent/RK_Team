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
        $__internal_d7fb8f0bd06761f514ad5a572e224e1954b93a46ced1ee31bb738674e922a31d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fb8f0bd06761f514ad5a572e224e1954b93a46ced1ee31bb738674e922a31d->enter($__internal_d7fb8f0bd06761f514ad5a572e224e1954b93a46ced1ee31bb738674e922a31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7fb8f0bd06761f514ad5a572e224e1954b93a46ced1ee31bb738674e922a31d->leave($__internal_d7fb8f0bd06761f514ad5a572e224e1954b93a46ced1ee31bb738674e922a31d_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_2970dc4bd1851afe631932f7a0ed9f6ea551bb928a69c7c282585b737c077c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2970dc4bd1851afe631932f7a0ed9f6ea551bb928a69c7c282585b737c077c36->enter($__internal_2970dc4bd1851afe631932f7a0ed9f6ea551bb928a69c7c282585b737c077c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "register";
        
        $__internal_2970dc4bd1851afe631932f7a0ed9f6ea551bb928a69c7c282585b737c077c36->leave($__internal_2970dc4bd1851afe631932f7a0ed9f6ea551bb928a69c7c282585b737c077c36_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_206a96541bcde28669f1831510a15257d9582831280ffa37cd75481e42858da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206a96541bcde28669f1831510a15257d9582831280ffa37cd75481e42858da6->enter($__internal_206a96541bcde28669f1831510a15257d9582831280ffa37cd75481e42858da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_206a96541bcde28669f1831510a15257d9582831280ffa37cd75481e42858da6->leave($__internal_206a96541bcde28669f1831510a15257d9582831280ffa37cd75481e42858da6_prof);

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
