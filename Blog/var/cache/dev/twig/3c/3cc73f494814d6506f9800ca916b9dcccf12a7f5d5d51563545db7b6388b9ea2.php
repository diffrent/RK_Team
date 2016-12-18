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
        $__internal_f9de324a020075da2638d7bb38191c5f97db55298ed7f0ec9257656cf538202d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9de324a020075da2638d7bb38191c5f97db55298ed7f0ec9257656cf538202d->enter($__internal_f9de324a020075da2638d7bb38191c5f97db55298ed7f0ec9257656cf538202d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 45
        echo "
<div class=\"container body-container\">
    ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "</div>

";
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "
</body>
</html>

";
        
        $__internal_f9de324a020075da2638d7bb38191c5f97db55298ed7f0ec9257656cf538202d->leave($__internal_f9de324a020075da2638d7bb38191c5f97db55298ed7f0ec9257656cf538202d_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_da7c4850454ef058a82c38803cb4a02503fd181f6ecece10306bbc4de04733d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7c4850454ef058a82c38803cb4a02503fd181f6ecece10306bbc4de04733d2->enter($__internal_da7c4850454ef058a82c38803cb4a02503fd181f6ecece10306bbc4de04733d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Католическа Църква";
        
        $__internal_da7c4850454ef058a82c38803cb4a02503fd181f6ecece10306bbc4de04733d2->leave($__internal_da7c4850454ef058a82c38803cb4a02503fd181f6ecece10306bbc4de04733d2_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4e875aa6d264fe5f4247a07f88609b5b39e441c651c5b6e7296859add2131788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e875aa6d264fe5f4247a07f88609b5b39e441c651c5b6e7296859add2131788->enter($__internal_4e875aa6d264fe5f4247a07f88609b5b39e441c651c5b6e7296859add2131788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_4e875aa6d264fe5f4247a07f88609b5b39e441c651c5b6e7296859add2131788->leave($__internal_4e875aa6d264fe5f4247a07f88609b5b39e441c651c5b6e7296859add2131788_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_eb016659ef7103d594e348acb3c0ba641942c332d20d0bb5deba5a6e0f9ceecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb016659ef7103d594e348acb3c0ba641942c332d20d0bb5deba5a6e0f9ceecc->enter($__internal_eb016659ef7103d594e348acb3c0ba641942c332d20d0bb5deba5a6e0f9ceecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
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
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_create");
                echo "\">Добави Статия</a></li>
                        <li style=\"float: right\"><a href=\"";
                // line 34
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
                echo "\">Профил</a></li>
                    ";
            }
            // line 36
            echo "                    <li style=\"float: right\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">Изход</a></li>
                ";
        } else {
            // line 38
            echo "                    <li style=\"float: right\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">Регистрация</a></li>
                    <li style=\"float: right\"><a href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">Вход</a></li>
                ";
        }
        // line 41
        echo "            </ul>
        </nav>
    </header>
";
        
        $__internal_eb016659ef7103d594e348acb3c0ba641942c332d20d0bb5deba5a6e0f9ceecc->leave($__internal_eb016659ef7103d594e348acb3c0ba641942c332d20d0bb5deba5a6e0f9ceecc_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9b7ca09a8dc2a82ad906de02bb7ba1f56153d5db68c6674cdc3552e4be3eedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b7ca09a8dc2a82ad906de02bb7ba1f56153d5db68c6674cdc3552e4be3eedf->enter($__internal_f9b7ca09a8dc2a82ad906de02bb7ba1f56153d5db68c6674cdc3552e4be3eedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 50
        $this->displayBlock('main', $context, $blocks);
        // line 51
        echo "            </div>
        </div>
    ";
        
        $__internal_f9b7ca09a8dc2a82ad906de02bb7ba1f56153d5db68c6674cdc3552e4be3eedf->leave($__internal_f9b7ca09a8dc2a82ad906de02bb7ba1f56153d5db68c6674cdc3552e4be3eedf_prof);

    }

    // line 50
    public function block_main($context, array $blocks = array())
    {
        $__internal_347da7f899fa0a3a38e8f6c193f46d48602a37078faa323dfefe1731647ffec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347da7f899fa0a3a38e8f6c193f46d48602a37078faa323dfefe1731647ffec5->enter($__internal_347da7f899fa0a3a38e8f6c193f46d48602a37078faa323dfefe1731647ffec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_347da7f899fa0a3a38e8f6c193f46d48602a37078faa323dfefe1731647ffec5->leave($__internal_347da7f899fa0a3a38e8f6c193f46d48602a37078faa323dfefe1731647ffec5_prof);

    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        $__internal_818dec92d93c7f7213f21f6fc9e230ef1016228ac598f0ace21f450a4e1a9375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818dec92d93c7f7213f21f6fc9e230ef1016228ac598f0ace21f450a4e1a9375->enter($__internal_818dec92d93c7f7213f21f6fc9e230ef1016228ac598f0ace21f450a4e1a9375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 57
        echo "    <footer class=\"mainFooter\">
        <p>Copyright &copy; 2016<a href=\"#\"> RK_Team</a></p>
    </footer>
";
        
        $__internal_818dec92d93c7f7213f21f6fc9e230ef1016228ac598f0ace21f450a4e1a9375->leave($__internal_818dec92d93c7f7213f21f6fc9e230ef1016228ac598f0ace21f450a4e1a9375_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79423c030e5c2069f3371424a89cf3edf80865abd9d67d3304c4d96736dd2e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79423c030e5c2069f3371424a89cf3edf80865abd9d67d3304c4d96736dd2e9a->enter($__internal_79423c030e5c2069f3371424a89cf3edf80865abd9d67d3304c4d96736dd2e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lightbox.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_79423c030e5c2069f3371424a89cf3edf80865abd9d67d3304c4d96736dd2e9a->leave($__internal_79423c030e5c2069f3371424a89cf3edf80865abd9d67d3304c4d96736dd2e9a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  258 => 67,  254 => 66,  250 => 65,  246 => 64,  241 => 63,  235 => 62,  225 => 57,  219 => 56,  208 => 50,  199 => 51,  197 => 50,  193 => 48,  187 => 47,  177 => 41,  172 => 39,  167 => 38,  161 => 36,  156 => 34,  151 => 33,  148 => 32,  146 => 31,  142 => 30,  138 => 29,  134 => 28,  130 => 27,  126 => 26,  120 => 23,  117 => 22,  111 => 21,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  68 => 69,  66 => 62,  63 => 61,  61 => 56,  57 => 54,  55 => 47,  51 => 45,  49 => 21,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
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
                <li><a href=\"{{ path('user_profile') }}\">За Нас</a></li>
                <li><a href=\"{{ path('contacts_view',{id:1}) }}\">Контакти</a></li>
                {% if app.user %}
                    {% if app.user.isAdmin() %}
                        <li style=\"float: right\"><a href=\"{{ path('article_create') }}\">Добави Статия</a></li>
                        <li style=\"float: right\"><a href=\"{{ path('user_profile') }}\">Профил</a></li>
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
