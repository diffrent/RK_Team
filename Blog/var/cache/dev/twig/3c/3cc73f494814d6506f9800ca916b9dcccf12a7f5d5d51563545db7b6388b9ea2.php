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
        $__internal_fca3ff157affebaa1978e32c5fa0af1cbb5a58b9d0739ed0f3ddbf0b26612f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca3ff157affebaa1978e32c5fa0af1cbb5a58b9d0739ed0f3ddbf0b26612f69->enter($__internal_fca3ff157affebaa1978e32c5fa0af1cbb5a58b9d0739ed0f3ddbf0b26612f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 66
        echo "
</body>
</html>

";
        
        $__internal_fca3ff157affebaa1978e32c5fa0af1cbb5a58b9d0739ed0f3ddbf0b26612f69->leave($__internal_fca3ff157affebaa1978e32c5fa0af1cbb5a58b9d0739ed0f3ddbf0b26612f69_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_b17ec7fd5c56c4e88c422a5da134c79b153ef7a67dbef743674c66079d259e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b17ec7fd5c56c4e88c422a5da134c79b153ef7a67dbef743674c66079d259e6d->enter($__internal_b17ec7fd5c56c4e88c422a5da134c79b153ef7a67dbef743674c66079d259e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Католическа Църква";
        
        $__internal_b17ec7fd5c56c4e88c422a5da134c79b153ef7a67dbef743674c66079d259e6d->leave($__internal_b17ec7fd5c56c4e88c422a5da134c79b153ef7a67dbef743674c66079d259e6d_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fb98517d3bcac931ebe1c322cd8d238104b2d521e1fb859891f01d65c19e7f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb98517d3bcac931ebe1c322cd8d238104b2d521e1fb859891f01d65c19e7f85->enter($__internal_fb98517d3bcac931ebe1c322cd8d238104b2d521e1fb859891f01d65c19e7f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_fb98517d3bcac931ebe1c322cd8d238104b2d521e1fb859891f01d65c19e7f85->leave($__internal_fb98517d3bcac931ebe1c322cd8d238104b2d521e1fb859891f01d65c19e7f85_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_900bbd1a742aac5f851f1658df051c0a412695e9c5a0d3aa9c1173e90c229e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900bbd1a742aac5f851f1658df051c0a412695e9c5a0d3aa9c1173e90c229e41->enter($__internal_900bbd1a742aac5f851f1658df051c0a412695e9c5a0d3aa9c1173e90c229e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        echo "\">Родословно дърво</a></li>
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
        
        $__internal_900bbd1a742aac5f851f1658df051c0a412695e9c5a0d3aa9c1173e90c229e41->leave($__internal_900bbd1a742aac5f851f1658df051c0a412695e9c5a0d3aa9c1173e90c229e41_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_e95715f719e1bc15c12ff425623e3ffe6230f131fcc86be9ee45008f0ddaa974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95715f719e1bc15c12ff425623e3ffe6230f131fcc86be9ee45008f0ddaa974->enter($__internal_e95715f719e1bc15c12ff425623e3ffe6230f131fcc86be9ee45008f0ddaa974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e95715f719e1bc15c12ff425623e3ffe6230f131fcc86be9ee45008f0ddaa974->leave($__internal_e95715f719e1bc15c12ff425623e3ffe6230f131fcc86be9ee45008f0ddaa974_prof);

    }

    // line 48
    public function block_main($context, array $blocks = array())
    {
        $__internal_88168fa013610f1999dbcf2ad62e3638891b09444df0bddcf681104be25d8ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88168fa013610f1999dbcf2ad62e3638891b09444df0bddcf681104be25d8ef0->enter($__internal_88168fa013610f1999dbcf2ad62e3638891b09444df0bddcf681104be25d8ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_88168fa013610f1999dbcf2ad62e3638891b09444df0bddcf681104be25d8ef0->leave($__internal_88168fa013610f1999dbcf2ad62e3638891b09444df0bddcf681104be25d8ef0_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2ac255d26864fd8e98695cfa6e7a914e9bf3d707e841fdfc2d943a0d1303b4d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac255d26864fd8e98695cfa6e7a914e9bf3d707e841fdfc2d943a0d1303b4d5->enter($__internal_2ac255d26864fd8e98695cfa6e7a914e9bf3d707e841fdfc2d943a0d1303b4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "    <footer class=\"mainFooter\">
        <p>Copyright &copy; 2016<a href=\"#\"> RK_Team</a></p>
    </footer>
";
        
        $__internal_2ac255d26864fd8e98695cfa6e7a914e9bf3d707e841fdfc2d943a0d1303b4d5->leave($__internal_2ac255d26864fd8e98695cfa6e7a914e9bf3d707e841fdfc2d943a0d1303b4d5_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f5c50d33621dc9a8f589474ff5c7e5ceb77fdf40a47c4236fe02812a1ced3b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c50d33621dc9a8f589474ff5c7e5ceb77fdf40a47c4236fe02812a1ced3b86->enter($__internal_f5c50d33621dc9a8f589474ff5c7e5ceb77fdf40a47c4236fe02812a1ced3b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
";
        
        $__internal_f5c50d33621dc9a8f589474ff5c7e5ceb77fdf40a47c4236fe02812a1ced3b86->leave($__internal_f5c50d33621dc9a8f589474ff5c7e5ceb77fdf40a47c4236fe02812a1ced3b86_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  249 => 64,  245 => 63,  241 => 62,  236 => 61,  230 => 60,  220 => 55,  214 => 54,  203 => 48,  194 => 49,  192 => 48,  188 => 46,  182 => 45,  172 => 39,  167 => 37,  162 => 36,  156 => 34,  150 => 32,  147 => 31,  145 => 30,  141 => 29,  137 => 28,  133 => 27,  129 => 26,  125 => 25,  119 => 22,  116 => 21,  110 => 20,  101 => 14,  96 => 13,  90 => 12,  78 => 11,  67 => 66,  65 => 60,  62 => 59,  60 => 54,  56 => 52,  54 => 45,  50 => 43,  48 => 20,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
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
                <li><a href=\"{{ path('user_profile') }}\">Родословно дърво</a></li>
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
{% endblock %}

</body>
</html>

";
    }
}
