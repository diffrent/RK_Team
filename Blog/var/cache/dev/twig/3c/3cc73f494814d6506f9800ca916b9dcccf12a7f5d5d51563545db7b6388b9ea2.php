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
        $__internal_0c21f95fbad472c22f0f5f384cbecd20cbb179995907c5b946147a7e338d44af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c21f95fbad472c22f0f5f384cbecd20cbb179995907c5b946147a7e338d44af->enter($__internal_0c21f95fbad472c22f0f5f384cbecd20cbb179995907c5b946147a7e338d44af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0c21f95fbad472c22f0f5f384cbecd20cbb179995907c5b946147a7e338d44af->leave($__internal_0c21f95fbad472c22f0f5f384cbecd20cbb179995907c5b946147a7e338d44af_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_c039e71f2057f322b12abbbafbdab884c9877c777370b677474b26e8a08d60d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c039e71f2057f322b12abbbafbdab884c9877c777370b677474b26e8a08d60d3->enter($__internal_c039e71f2057f322b12abbbafbdab884c9877c777370b677474b26e8a08d60d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Католическа Църква";
        
        $__internal_c039e71f2057f322b12abbbafbdab884c9877c777370b677474b26e8a08d60d3->leave($__internal_c039e71f2057f322b12abbbafbdab884c9877c777370b677474b26e8a08d60d3_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_63ede375a2552220b710d2d9a88649316ef6500f2b24ff48033229c5d2eb2bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ede375a2552220b710d2d9a88649316ef6500f2b24ff48033229c5d2eb2bc3->enter($__internal_63ede375a2552220b710d2d9a88649316ef6500f2b24ff48033229c5d2eb2bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_63ede375a2552220b710d2d9a88649316ef6500f2b24ff48033229c5d2eb2bc3->leave($__internal_63ede375a2552220b710d2d9a88649316ef6500f2b24ff48033229c5d2eb2bc3_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_7161a20252afeafd6c4cb924f01751370aa6d6e6456203e0d6de1f7a314339e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7161a20252afeafd6c4cb924f01751370aa6d6e6456203e0d6de1f7a314339e2->enter($__internal_7161a20252afeafd6c4cb924f01751370aa6d6e6456203e0d6de1f7a314339e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statistics_view", array("id" => 1));
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
        
        $__internal_7161a20252afeafd6c4cb924f01751370aa6d6e6456203e0d6de1f7a314339e2->leave($__internal_7161a20252afeafd6c4cb924f01751370aa6d6e6456203e0d6de1f7a314339e2_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b7e4ef48204456a79a8c6699e1cae22527681e52d1689921667519bcb8eafe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7e4ef48204456a79a8c6699e1cae22527681e52d1689921667519bcb8eafe6->enter($__internal_8b7e4ef48204456a79a8c6699e1cae22527681e52d1689921667519bcb8eafe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8b7e4ef48204456a79a8c6699e1cae22527681e52d1689921667519bcb8eafe6->leave($__internal_8b7e4ef48204456a79a8c6699e1cae22527681e52d1689921667519bcb8eafe6_prof);

    }

    // line 48
    public function block_main($context, array $blocks = array())
    {
        $__internal_04a42c4d86630b31894427c404d2cf989b427accf9cbcb63cffb643976684678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a42c4d86630b31894427c404d2cf989b427accf9cbcb63cffb643976684678->enter($__internal_04a42c4d86630b31894427c404d2cf989b427accf9cbcb63cffb643976684678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_04a42c4d86630b31894427c404d2cf989b427accf9cbcb63cffb643976684678->leave($__internal_04a42c4d86630b31894427c404d2cf989b427accf9cbcb63cffb643976684678_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_696107b46637d0453c6196b3b727fa9dfe654ab921cc2854c6ac9620d9597691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696107b46637d0453c6196b3b727fa9dfe654ab921cc2854c6ac9620d9597691->enter($__internal_696107b46637d0453c6196b3b727fa9dfe654ab921cc2854c6ac9620d9597691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "    <footer class=\"mainFooter\">
        <p>Copyright &copy; 2016<a href=\"#\"> RK_Team</a></p>
    </footer>
";
        
        $__internal_696107b46637d0453c6196b3b727fa9dfe654ab921cc2854c6ac9620d9597691->leave($__internal_696107b46637d0453c6196b3b727fa9dfe654ab921cc2854c6ac9620d9597691_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8c14fa171f097724121e5c2fb11f993b222a14340fd7a1274ed5e523ac8f027c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c14fa171f097724121e5c2fb11f993b222a14340fd7a1274ed5e523ac8f027c->enter($__internal_8c14fa171f097724121e5c2fb11f993b222a14340fd7a1274ed5e523ac8f027c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_8c14fa171f097724121e5c2fb11f993b222a14340fd7a1274ed5e523ac8f027c->leave($__internal_8c14fa171f097724121e5c2fb11f993b222a14340fd7a1274ed5e523ac8f027c_prof);

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
