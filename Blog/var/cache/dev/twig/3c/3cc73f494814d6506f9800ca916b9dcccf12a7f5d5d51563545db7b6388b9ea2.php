<?php

/* base.html.twig */
class __TwigTemplate_13bc67fdc8fdefb598874b2a2d3d2768411a6e0c5c08542e5f1198925ec01f13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f6ecde7771b9f9a38a940b165de87b8a6e59d7ed95fc8b106b3ffa51d4f6ad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6ecde7771b9f9a38a940b165de87b8a6e59d7ed95fc8b106b3ffa51d4f6ad3->enter($__internal_7f6ecde7771b9f9a38a940b165de87b8a6e59d7ed95fc8b106b3ffa51d4f6ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "</head>


<body class=\"body\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 44
        echo "
<div class=\"container body-container\">
    ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "</div>

";
        // line 55
        $this->displayBlock('footer', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "
</body>
</html>

";
        
        $__internal_7f6ecde7771b9f9a38a940b165de87b8a6e59d7ed95fc8b106b3ffa51d4f6ad3->leave($__internal_7f6ecde7771b9f9a38a940b165de87b8a6e59d7ed95fc8b106b3ffa51d4f6ad3_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bedc42b851aa053a310c3521a7e5fbe8a34b230b3268d163aed51e9d9d4600f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bedc42b851aa053a310c3521a7e5fbe8a34b230b3268d163aed51e9d9d4600f->enter($__internal_2bedc42b851aa053a310c3521a7e5fbe8a34b230b3268d163aed51e9d9d4600f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Католическа Църква";
        
        $__internal_2bedc42b851aa053a310c3521a7e5fbe8a34b230b3268d163aed51e9d9d4600f->leave($__internal_2bedc42b851aa053a310c3521a7e5fbe8a34b230b3268d163aed51e9d9d4600f_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1ff91b51b7a8f2908f669053d169801264faee7fbb9d43a56c543404f97c20af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff91b51b7a8f2908f669053d169801264faee7fbb9d43a56c543404f97c20af->enter($__internal_1ff91b51b7a8f2908f669053d169801264faee7fbb9d43a56c543404f97c20af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_1ff91b51b7a8f2908f669053d169801264faee7fbb9d43a56c543404f97c20af->leave($__internal_1ff91b51b7a8f2908f669053d169801264faee7fbb9d43a56c543404f97c20af_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_4570e53a9a64967a6bdcc4e3c539ef46496321f2c0ebccd8555510df59226869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4570e53a9a64967a6bdcc4e3c539ef46496321f2c0ebccd8555510df59226869->enter($__internal_4570e53a9a64967a6bdcc4e3c539ef46496321f2c0ebccd8555510df59226869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header class=\"mainheader\">
        <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\"/>
        <nav>
            <ul>
                <li><a class=\"active\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Начало</a></li>
                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("church_gallery");
        echo "\">Галерия</a></li>
                <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statistics_view", array("id" => 1));
        echo "\">Статистика</a></li>
                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about_view", array("id" => 1));
        echo "\">За Нас</a></li>
                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacts_view", array("id" => 1));
        echo "\">Контакти</a></li>
                ";
        // line 31
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 32
            echo "                    ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
                // line 33
                echo "                        <li style=\"float: right\"><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
                echo "\">Админ</a></li>
                    ";
            }
            // line 35
            echo "                    <li style=\"float: right\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">Изход</a></li>
                ";
        } else {
            // line 37
            echo "                    <li style=\"float: right\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">Регистрация</a></li>
                    <li style=\"float: right\"><a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">Вход</a></li>
                ";
        }
        // line 40
        echo "            </ul>
        </nav>
    </header>
";
        
        $__internal_4570e53a9a64967a6bdcc4e3c539ef46496321f2c0ebccd8555510df59226869->leave($__internal_4570e53a9a64967a6bdcc4e3c539ef46496321f2c0ebccd8555510df59226869_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_d536894dff61bf1cacd498216fb5eba77da50e8c98322c3d8319ed13d1123138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d536894dff61bf1cacd498216fb5eba77da50e8c98322c3d8319ed13d1123138->enter($__internal_d536894dff61bf1cacd498216fb5eba77da50e8c98322c3d8319ed13d1123138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 49
        $this->displayBlock('main', $context, $blocks);
        // line 50
        echo "            </div>
        </div>
    ";
        
        $__internal_d536894dff61bf1cacd498216fb5eba77da50e8c98322c3d8319ed13d1123138->leave($__internal_d536894dff61bf1cacd498216fb5eba77da50e8c98322c3d8319ed13d1123138_prof);

    }

    // line 49
    public function block_main($context, array $blocks = array())
    {
        $__internal_5d024531a70b169c16143df85696e2ebb1f68eee942842ecf52db26fe0015809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d024531a70b169c16143df85696e2ebb1f68eee942842ecf52db26fe0015809->enter($__internal_5d024531a70b169c16143df85696e2ebb1f68eee942842ecf52db26fe0015809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_5d024531a70b169c16143df85696e2ebb1f68eee942842ecf52db26fe0015809->leave($__internal_5d024531a70b169c16143df85696e2ebb1f68eee942842ecf52db26fe0015809_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4d844e68ad833e968934a0fda4d423794baa35d7b37ee47d26f073fd31171b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d844e68ad833e968934a0fda4d423794baa35d7b37ee47d26f073fd31171b9c->enter($__internal_4d844e68ad833e968934a0fda4d423794baa35d7b37ee47d26f073fd31171b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 56
        echo "    <footer class=\"mainFooter\">
        <p>Copyright &copy; 2016<a href=\"#\"> RK_Team</a></p>
    </footer>
";
        
        $__internal_4d844e68ad833e968934a0fda4d423794baa35d7b37ee47d26f073fd31171b9c->leave($__internal_4d844e68ad833e968934a0fda4d423794baa35d7b37ee47d26f073fd31171b9c_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f372e36969e33095d4133171476946b817e836391f344d71c4311756e6a4629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f372e36969e33095d4133171476946b817e836391f344d71c4311756e6a4629->enter($__internal_6f372e36969e33095d4133171476946b817e836391f344d71c4311756e6a4629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lightbox.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f372e36969e33095d4133171476946b817e836391f344d71c4311756e6a4629->leave($__internal_6f372e36969e33095d4133171476946b817e836391f344d71c4311756e6a4629_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  254 => 66,  250 => 65,  246 => 64,  242 => 63,  237 => 62,  231 => 61,  221 => 56,  215 => 55,  204 => 49,  195 => 50,  193 => 49,  189 => 47,  183 => 46,  173 => 40,  168 => 38,  163 => 37,  157 => 35,  151 => 33,  148 => 32,  146 => 31,  142 => 30,  138 => 29,  134 => 28,  130 => 27,  126 => 26,  120 => 23,  117 => 22,  111 => 21,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  68 => 68,  66 => 61,  63 => 60,  61 => 55,  57 => 53,  55 => 46,  51 => 44,  49 => 21,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
This is the base template used as the application layout which contains the
common elements and decorates all the other templates.
See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Католическа Църква{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/index.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
</head>


<body class=\"body\">

{% block header %}
    <header class=\"mainheader\">
        <img src=\"{{ asset('images/logo.jpg') }}\"/>
        <nav>
            <ul>
                <li><a class=\"active\" href=\"{{ path('blog_index') }}\">Начало</a></li>
                <li><a href=\"{{ path('church_gallery') }}\">Галерия</a></li>
                <li><a href=\"{{ path('statistics_view',{'id': 1}) }}\">Статистика</a></li>
                <li><a href=\"{{ path('about_view',{'id':1}) }}\">За Нас</a></li>
                <li><a href=\"{{ path('contacts_view',{id:1}) }}\">Контакти</a></li>
                {% if app.user %}
                    {% if app.user.isAdmin() %}
                        <li style=\"float: right\"><a href=\"{{ path('user_profile') }}\">Админ</a></li>
                    {% endif %}
                    <li style=\"float: right\"><a href=\"{{ path('security_logout') }}\">Изход</a></li>
                {% else %}
                    <li style=\"float: right\"><a href=\"{{ path('user_register') }}\">Регистрация</a></li>
                    <li style=\"float: right\"><a href=\"{{ path('security_login') }}\">Вход</a></li>
                {% endif %}
            </ul>
        </nav>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>

{% block footer %}
    <footer class=\"mainFooter\">
        <p>Copyright &copy; 2016<a href=\"#\"> RK_Team</a></p>
    </footer>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
    <script src=\"{{ asset('js/lightbox.min.js') }}\"></script>
{% endblock %}

</body>
</html>

";
    }
}
