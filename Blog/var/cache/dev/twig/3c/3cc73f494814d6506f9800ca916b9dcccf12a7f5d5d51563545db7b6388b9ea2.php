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
        $__internal_64d4f21f9aa417c45a700b677ee021f79830ec74add523b629983aa7b013254f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d4f21f9aa417c45a700b677ee021f79830ec74add523b629983aa7b013254f->enter($__internal_64d4f21f9aa417c45a700b677ee021f79830ec74add523b629983aa7b013254f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_64d4f21f9aa417c45a700b677ee021f79830ec74add523b629983aa7b013254f->leave($__internal_64d4f21f9aa417c45a700b677ee021f79830ec74add523b629983aa7b013254f_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_49d094dbd2369ae861bba1319fe8021966aeb746edca2fd4d129c254c68f2ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d094dbd2369ae861bba1319fe8021966aeb746edca2fd4d129c254c68f2ad6->enter($__internal_49d094dbd2369ae861bba1319fe8021966aeb746edca2fd4d129c254c68f2ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Католическа Църква";
        
        $__internal_49d094dbd2369ae861bba1319fe8021966aeb746edca2fd4d129c254c68f2ad6->leave($__internal_49d094dbd2369ae861bba1319fe8021966aeb746edca2fd4d129c254c68f2ad6_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_abb8be4f085ee6382a8ab65bf3efe3de3bc7d22887181b916b810bdce9af8aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb8be4f085ee6382a8ab65bf3efe3de3bc7d22887181b916b810bdce9af8aef->enter($__internal_abb8be4f085ee6382a8ab65bf3efe3de3bc7d22887181b916b810bdce9af8aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_abb8be4f085ee6382a8ab65bf3efe3de3bc7d22887181b916b810bdce9af8aef->leave($__internal_abb8be4f085ee6382a8ab65bf3efe3de3bc7d22887181b916b810bdce9af8aef_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_ac1a7a6e3360795273010e483b75c1aad20debab458da0696acd6bcdc98ab7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1a7a6e3360795273010e483b75c1aad20debab458da0696acd6bcdc98ab7cb->enter($__internal_ac1a7a6e3360795273010e483b75c1aad20debab458da0696acd6bcdc98ab7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
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
        
        $__internal_ac1a7a6e3360795273010e483b75c1aad20debab458da0696acd6bcdc98ab7cb->leave($__internal_ac1a7a6e3360795273010e483b75c1aad20debab458da0696acd6bcdc98ab7cb_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_2af4fa60d8816b5da00fa721de64a1796de2085bd62fca3e95ded22a926ccc76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af4fa60d8816b5da00fa721de64a1796de2085bd62fca3e95ded22a926ccc76->enter($__internal_2af4fa60d8816b5da00fa721de64a1796de2085bd62fca3e95ded22a926ccc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2af4fa60d8816b5da00fa721de64a1796de2085bd62fca3e95ded22a926ccc76->leave($__internal_2af4fa60d8816b5da00fa721de64a1796de2085bd62fca3e95ded22a926ccc76_prof);

    }

    // line 49
    public function block_main($context, array $blocks = array())
    {
        $__internal_bf07a3f25eb42ac32fc5709afe5c7e20ca7f700a3af74d79d728d3b6e03141f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf07a3f25eb42ac32fc5709afe5c7e20ca7f700a3af74d79d728d3b6e03141f8->enter($__internal_bf07a3f25eb42ac32fc5709afe5c7e20ca7f700a3af74d79d728d3b6e03141f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_bf07a3f25eb42ac32fc5709afe5c7e20ca7f700a3af74d79d728d3b6e03141f8->leave($__internal_bf07a3f25eb42ac32fc5709afe5c7e20ca7f700a3af74d79d728d3b6e03141f8_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b355aeed31332b249fef3f0188226d143320d110ee9ef918d8ef96b26c2fd496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b355aeed31332b249fef3f0188226d143320d110ee9ef918d8ef96b26c2fd496->enter($__internal_b355aeed31332b249fef3f0188226d143320d110ee9ef918d8ef96b26c2fd496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 56
        echo "    <footer class=\"mainFooter\">
        <p>Copyright &copy; 2016<a href=\"#\"> RK_Team</a></p>
    </footer>
";
        
        $__internal_b355aeed31332b249fef3f0188226d143320d110ee9ef918d8ef96b26c2fd496->leave($__internal_b355aeed31332b249fef3f0188226d143320d110ee9ef918d8ef96b26c2fd496_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c35cda657cfcb67a3dc60f3a20f2a962d672401e3b72cbc52c10191add4e5cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35cda657cfcb67a3dc60f3a20f2a962d672401e3b72cbc52c10191add4e5cf8->enter($__internal_c35cda657cfcb67a3dc60f3a20f2a962d672401e3b72cbc52c10191add4e5cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c35cda657cfcb67a3dc60f3a20f2a962d672401e3b72cbc52c10191add4e5cf8->leave($__internal_c35cda657cfcb67a3dc60f3a20f2a962d672401e3b72cbc52c10191add4e5cf8_prof);

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
