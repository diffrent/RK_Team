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
        $__internal_6026cfd2ed98c93d6aeffdf363dfe6c87fdaa5d3a4c25b0306dffd21fc920647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6026cfd2ed98c93d6aeffdf363dfe6c87fdaa5d3a4c25b0306dffd21fc920647->enter($__internal_6026cfd2ed98c93d6aeffdf363dfe6c87fdaa5d3a4c25b0306dffd21fc920647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6026cfd2ed98c93d6aeffdf363dfe6c87fdaa5d3a4c25b0306dffd21fc920647->leave($__internal_6026cfd2ed98c93d6aeffdf363dfe6c87fdaa5d3a4c25b0306dffd21fc920647_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_46cf0a526ef662756f48f26014b344b8019f927956e614e323558f17debef202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46cf0a526ef662756f48f26014b344b8019f927956e614e323558f17debef202->enter($__internal_46cf0a526ef662756f48f26014b344b8019f927956e614e323558f17debef202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Католическа Църква";
        
        $__internal_46cf0a526ef662756f48f26014b344b8019f927956e614e323558f17debef202->leave($__internal_46cf0a526ef662756f48f26014b344b8019f927956e614e323558f17debef202_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f66e45fcff0b9c3c36c2fb2ca33c3086d060122c633dc8b4dcaf971494f6bae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66e45fcff0b9c3c36c2fb2ca33c3086d060122c633dc8b4dcaf971494f6bae2->enter($__internal_f66e45fcff0b9c3c36c2fb2ca33c3086d060122c633dc8b4dcaf971494f6bae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_f66e45fcff0b9c3c36c2fb2ca33c3086d060122c633dc8b4dcaf971494f6bae2->leave($__internal_f66e45fcff0b9c3c36c2fb2ca33c3086d060122c633dc8b4dcaf971494f6bae2_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_322e247096ddc63956787daf795e12850f74f71e895df5e1d5f68be5aded3faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322e247096ddc63956787daf795e12850f74f71e895df5e1d5f68be5aded3faf->enter($__internal_322e247096ddc63956787daf795e12850f74f71e895df5e1d5f68be5aded3faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_322e247096ddc63956787daf795e12850f74f71e895df5e1d5f68be5aded3faf->leave($__internal_322e247096ddc63956787daf795e12850f74f71e895df5e1d5f68be5aded3faf_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_6908657b96786bbb90220a45ac64fd2e79a54bab809a85b9a615c1c0a7f845c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6908657b96786bbb90220a45ac64fd2e79a54bab809a85b9a615c1c0a7f845c6->enter($__internal_6908657b96786bbb90220a45ac64fd2e79a54bab809a85b9a615c1c0a7f845c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6908657b96786bbb90220a45ac64fd2e79a54bab809a85b9a615c1c0a7f845c6->leave($__internal_6908657b96786bbb90220a45ac64fd2e79a54bab809a85b9a615c1c0a7f845c6_prof);

    }

    // line 50
    public function block_main($context, array $blocks = array())
    {
        $__internal_816b2ca8a59a255db7580647958ab95cdd68ea27c4f41f63ac6b51db575e060b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816b2ca8a59a255db7580647958ab95cdd68ea27c4f41f63ac6b51db575e060b->enter($__internal_816b2ca8a59a255db7580647958ab95cdd68ea27c4f41f63ac6b51db575e060b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_816b2ca8a59a255db7580647958ab95cdd68ea27c4f41f63ac6b51db575e060b->leave($__internal_816b2ca8a59a255db7580647958ab95cdd68ea27c4f41f63ac6b51db575e060b_prof);

    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c320e512d73e727fa7a3da9002da1c5d857850f01f297127dc46a2074a5f3b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c320e512d73e727fa7a3da9002da1c5d857850f01f297127dc46a2074a5f3b1a->enter($__internal_c320e512d73e727fa7a3da9002da1c5d857850f01f297127dc46a2074a5f3b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 57
        echo "    <footer class=\"mainFooter\">
        <p>Copyright &copy; 2016<a href=\"#\"> RK_Team</a></p>
    </footer>
";
        
        $__internal_c320e512d73e727fa7a3da9002da1c5d857850f01f297127dc46a2074a5f3b1a->leave($__internal_c320e512d73e727fa7a3da9002da1c5d857850f01f297127dc46a2074a5f3b1a_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b9bbe972a25b310991d45597668b211e3e36099f6e372fd45a2fd699d9288e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9bbe972a25b310991d45597668b211e3e36099f6e372fd45a2fd699d9288e02->enter($__internal_b9bbe972a25b310991d45597668b211e3e36099f6e372fd45a2fd699d9288e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b9bbe972a25b310991d45597668b211e3e36099f6e372fd45a2fd699d9288e02->leave($__internal_b9bbe972a25b310991d45597668b211e3e36099f6e372fd45a2fd699d9288e02_prof);

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
