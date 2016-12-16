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
        $__internal_50889e4d9042417b48d92d31ca65b458f3d8d59aece8df8e3b430d1468a8e1bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50889e4d9042417b48d92d31ca65b458f3d8d59aece8df8e3b430d1468a8e1bf->enter($__internal_50889e4d9042417b48d92d31ca65b458f3d8d59aece8df8e3b430d1468a8e1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 20
        $this->displayBlock('header', $context, $blocks);
        // line 43
        echo "
<div class=\"container body-container\">
    ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "</div>

";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "
</body>
</html>

";
        
        $__internal_50889e4d9042417b48d92d31ca65b458f3d8d59aece8df8e3b430d1468a8e1bf->leave($__internal_50889e4d9042417b48d92d31ca65b458f3d8d59aece8df8e3b430d1468a8e1bf_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_b01edebb4b594ef51b5bdecf57affe28e0e4bf31afd5c493bbf411fd19227e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b01edebb4b594ef51b5bdecf57affe28e0e4bf31afd5c493bbf411fd19227e0d->enter($__internal_b01edebb4b594ef51b5bdecf57affe28e0e4bf31afd5c493bbf411fd19227e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Католическа Църква";
        
        $__internal_b01edebb4b594ef51b5bdecf57affe28e0e4bf31afd5c493bbf411fd19227e0d->leave($__internal_b01edebb4b594ef51b5bdecf57affe28e0e4bf31afd5c493bbf411fd19227e0d_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_311056175a7aa286f85869b011e2943cea9f249eb27ea39273aa0bbea09dfb79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311056175a7aa286f85869b011e2943cea9f249eb27ea39273aa0bbea09dfb79->enter($__internal_311056175a7aa286f85869b011e2943cea9f249eb27ea39273aa0bbea09dfb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_311056175a7aa286f85869b011e2943cea9f249eb27ea39273aa0bbea09dfb79->leave($__internal_311056175a7aa286f85869b011e2943cea9f249eb27ea39273aa0bbea09dfb79_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_92a51073520f54a04218fccb55e7df71aa0797326ea158e1c263991eb4938ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a51073520f54a04218fccb55e7df71aa0797326ea158e1c263991eb4938ecc->enter($__internal_92a51073520f54a04218fccb55e7df71aa0797326ea158e1c263991eb4938ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "    <header class=\"mainheader\">
        <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\"/>
        <nav>
            <ul>
                <li><a class=\"active\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Начало</a></li>
                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("church_gallery");
        echo "\">Галерия</a></li>
                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
        echo "\">Статистика</a></li>
                <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
        echo "\">За Нас</a></li>
                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
        echo "\">Контакти</a></li>
                ";
        // line 30
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 31
            echo "                    ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
                // line 32
                echo "                        <li style=\"float: right\"><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_create");
                echo "\">Добави Статия</a></li>
                    ";
            }
            // line 34
            echo "                    <li style=\"float: right\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">Изход</a></li>
                ";
        } else {
            // line 36
            echo "                    <li style=\"float: right\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">Регистрация</a></li>
                    <li style=\"float: right\"><a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">Вход</a></li>
                ";
        }
        // line 39
        echo "            </ul>
        </nav>
    </header>
";
        
        $__internal_92a51073520f54a04218fccb55e7df71aa0797326ea158e1c263991eb4938ecc->leave($__internal_92a51073520f54a04218fccb55e7df71aa0797326ea158e1c263991eb4938ecc_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_74ad9afe9048a07defbf38b029b08baeff35c93bba2904902bd067744c8d6091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ad9afe9048a07defbf38b029b08baeff35c93bba2904902bd067744c8d6091->enter($__internal_74ad9afe9048a07defbf38b029b08baeff35c93bba2904902bd067744c8d6091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 46
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 48
        $this->displayBlock('main', $context, $blocks);
        // line 49
        echo "            </div>
        </div>
    ";
        
        $__internal_74ad9afe9048a07defbf38b029b08baeff35c93bba2904902bd067744c8d6091->leave($__internal_74ad9afe9048a07defbf38b029b08baeff35c93bba2904902bd067744c8d6091_prof);

    }

    // line 48
    public function block_main($context, array $blocks = array())
    {
        $__internal_ba88a38b5cbefd228987c2fe7471d5073cdec4611de71eba76eea686f84f96de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba88a38b5cbefd228987c2fe7471d5073cdec4611de71eba76eea686f84f96de->enter($__internal_ba88a38b5cbefd228987c2fe7471d5073cdec4611de71eba76eea686f84f96de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_ba88a38b5cbefd228987c2fe7471d5073cdec4611de71eba76eea686f84f96de->leave($__internal_ba88a38b5cbefd228987c2fe7471d5073cdec4611de71eba76eea686f84f96de_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1486f985363be32176e0d0bd402e75e1fd57f2b511816d1d5bd27b339e7288c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1486f985363be32176e0d0bd402e75e1fd57f2b511816d1d5bd27b339e7288c8->enter($__internal_1486f985363be32176e0d0bd402e75e1fd57f2b511816d1d5bd27b339e7288c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "    <footer class=\"mainFooter\">
        <p>Copyright &copy; 2016<a href=\"#\"> RK_Team</a></p>
    </footer>
";
        
        $__internal_1486f985363be32176e0d0bd402e75e1fd57f2b511816d1d5bd27b339e7288c8->leave($__internal_1486f985363be32176e0d0bd402e75e1fd57f2b511816d1d5bd27b339e7288c8_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d59cb7eb92259e3f4593b6fc1f687805d6ab3566bdcaabee48698bc213e14f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59cb7eb92259e3f4593b6fc1f687805d6ab3566bdcaabee48698bc213e14f18->enter($__internal_d59cb7eb92259e3f4593b6fc1f687805d6ab3566bdcaabee48698bc213e14f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lightbox.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d59cb7eb92259e3f4593b6fc1f687805d6ab3566bdcaabee48698bc213e14f18->leave($__internal_d59cb7eb92259e3f4593b6fc1f687805d6ab3566bdcaabee48698bc213e14f18_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  253 => 65,  249 => 64,  245 => 63,  241 => 62,  236 => 61,  230 => 60,  220 => 55,  214 => 54,  203 => 48,  194 => 49,  192 => 48,  188 => 46,  182 => 45,  172 => 39,  167 => 37,  162 => 36,  156 => 34,  150 => 32,  147 => 31,  145 => 30,  141 => 29,  137 => 28,  133 => 27,  129 => 26,  125 => 25,  119 => 22,  116 => 21,  110 => 20,  101 => 14,  96 => 13,  90 => 12,  78 => 11,  67 => 67,  65 => 60,  62 => 59,  60 => 54,  56 => 52,  54 => 45,  50 => 43,  48 => 20,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
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
                <li><a href=\"{{ path('user_profile') }}\">Статистика</a></li>
                <li><a href=\"{{ path('user_profile') }}\">За Нас</a></li>
                <li><a href=\"{{ path('user_profile') }}\">Контакти</a></li>
                {% if app.user %}
                    {% if app.user.isAdmin() %}
                        <li style=\"float: right\"><a href=\"{{ path('article_create') }}\">Добави Статия</a></li>
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
