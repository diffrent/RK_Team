<?php

/* base.html.twig */
class __TwigTemplate_07cedef8e4752382bb90eadff45d53f762d875e07958665922ac4a6af164b75a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b4f844476a03a6648c9676e68436b6d470cac847c211bbd0c28c964158267f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b4f844476a03a6648c9676e68436b6d470cac847c211bbd0c28c964158267f6->enter($__internal_2b4f844476a03a6648c9676e68436b6d470cac847c211bbd0c28c964158267f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 79
        echo "
<div class=\"container body-container\">
    ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "</div>

";
        // line 90
        $this->displayBlock('footer', $context, $blocks);
        // line 97
        echo "
";
        // line 98
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
        echo "
</body>
</html>
";
        
        $__internal_2b4f844476a03a6648c9676e68436b6d470cac847c211bbd0c28c964158267f6->leave($__internal_2b4f844476a03a6648c9676e68436b6d470cac847c211bbd0c28c964158267f6_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_8eab62cc9753d9ee6a2dd14eefc4e5f0096701bc2ec8c733ab50063938b3b99a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eab62cc9753d9ee6a2dd14eefc4e5f0096701bc2ec8c733ab50063938b3b99a->enter($__internal_8eab62cc9753d9ee6a2dd14eefc4e5f0096701bc2ec8c733ab50063938b3b99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SoftUni Blog";
        
        $__internal_8eab62cc9753d9ee6a2dd14eefc4e5f0096701bc2ec8c733ab50063938b3b99a->leave($__internal_8eab62cc9753d9ee6a2dd14eefc4e5f0096701bc2ec8c733ab50063938b3b99a_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_85c16ee4377e4553498fcaaed95f9b2d56a896d833675b452d8c43c0824cd2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c16ee4377e4553498fcaaed95f9b2d56a896d833675b452d8c43c0824cd2e5->enter($__internal_85c16ee4377e4553498fcaaed95f9b2d56a896d833675b452d8c43c0824cd2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_85c16ee4377e4553498fcaaed95f9b2d56a896d833675b452d8c43c0824cd2e5->leave($__internal_85c16ee4377e4553498fcaaed95f9b2d56a896d833675b452d8c43c0824cd2e5_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_2a726807cb2c9666ab024151f6121d0588a21041d3f98647fe62e36ceaa5a29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a726807cb2c9666ab024151f6121d0588a21041d3f98647fe62e36ceaa5a29e->enter($__internal_2a726807cb2c9666ab024151f6121d0588a21041d3f98647fe62e36ceaa5a29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_2a726807cb2c9666ab024151f6121d0588a21041d3f98647fe62e36ceaa5a29e->leave($__internal_2a726807cb2c9666ab024151f6121d0588a21041d3f98647fe62e36ceaa5a29e_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_47b34a9284af4b905e3f4f0917d83da519fd11d571a51732b291903e9e4a41bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b34a9284af4b905e3f4f0917d83da519fd11d571a51732b291903e9e4a41bd->enter($__internal_47b34a9284af4b905e3f4f0917d83da519fd11d571a51732b291903e9e4a41bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\" class=\"navbar-brand\">SOFTUNI BLOG</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 36
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 37
            echo "                            ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
                // line 38
                echo "                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"true\">Admin<span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                        <li><a href=\"";
                // line 41
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_all");
                echo "\">Users</a></li>
                                        <li><a href=\"";
                // line 42
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_all");
                echo "\">Categories</a></li>
                                    </ul>
                                </li>
                            ";
            }
            // line 46
            echo "                            <li>
                                <a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_create");
            echo "\">
                                    Create Article
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
            echo "\">
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                    Logout
                                </a>
                            </li>
                        ";
        } else {
            // line 62
            echo "                            <li>
                                <a href=\"";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                                    LOGIN
                                </a>
                            </li>
                        ";
        }
        // line 73
        echo "                    </ul>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_47b34a9284af4b905e3f4f0917d83da519fd11d571a51732b291903e9e4a41bd->leave($__internal_47b34a9284af4b905e3f4f0917d83da519fd11d571a51732b291903e9e4a41bd_prof);

    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9dc5b535385a72460552f2d2e5bdc7769c212304d791f9fc500fa55a7fd1f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9dc5b535385a72460552f2d2e5bdc7769c212304d791f9fc500fa55a7fd1f0e->enter($__internal_d9dc5b535385a72460552f2d2e5bdc7769c212304d791f9fc500fa55a7fd1f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 82
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 84
        $this->displayBlock('main', $context, $blocks);
        // line 85
        echo "            </div>
        </div>
    ";
        
        $__internal_d9dc5b535385a72460552f2d2e5bdc7769c212304d791f9fc500fa55a7fd1f0e->leave($__internal_d9dc5b535385a72460552f2d2e5bdc7769c212304d791f9fc500fa55a7fd1f0e_prof);

    }

    // line 84
    public function block_main($context, array $blocks = array())
    {
        $__internal_34b20b8d70671c66ff8ec094a1ce892c5d94447742c8add6dd9ad8253ca5fc19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b20b8d70671c66ff8ec094a1ce892c5d94447742c8add6dd9ad8253ca5fc19->enter($__internal_34b20b8d70671c66ff8ec094a1ce892c5d94447742c8add6dd9ad8253ca5fc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_34b20b8d70671c66ff8ec094a1ce892c5d94447742c8add6dd9ad8253ca5fc19->leave($__internal_34b20b8d70671c66ff8ec094a1ce892c5d94447742c8add6dd9ad8253ca5fc19_prof);

    }

    // line 90
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4f89f560e438a68ede60eddae7f42a508e27525cc3d5f6acdfb0b94ad59a402b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f89f560e438a68ede60eddae7f42a508e27525cc3d5f6acdfb0b94ad59a402b->enter($__internal_4f89f560e438a68ede60eddae7f42a508e27525cc3d5f6acdfb0b94ad59a402b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 91
        echo "    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Software University Foundation</p>
        </div>
    </footer>
";
        
        $__internal_4f89f560e438a68ede60eddae7f42a508e27525cc3d5f6acdfb0b94ad59a402b->leave($__internal_4f89f560e438a68ede60eddae7f42a508e27525cc3d5f6acdfb0b94ad59a402b_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_122ad7fa1ca2cf2763c085ff50c819a0c6702aee044d6292df9cf85a50c05748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_122ad7fa1ca2cf2763c085ff50c819a0c6702aee044d6292df9cf85a50c05748->enter($__internal_122ad7fa1ca2cf2763c085ff50c819a0c6702aee044d6292df9cf85a50c05748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_122ad7fa1ca2cf2763c085ff50c819a0c6702aee044d6292df9cf85a50c05748->leave($__internal_122ad7fa1ca2cf2763c085ff50c819a0c6702aee044d6292df9cf85a50c05748_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 102,  296 => 101,  292 => 100,  287 => 99,  281 => 98,  269 => 91,  263 => 90,  252 => 84,  243 => 85,  241 => 84,  237 => 82,  231 => 81,  219 => 73,  211 => 68,  203 => 63,  200 => 62,  192 => 57,  184 => 52,  176 => 47,  173 => 46,  166 => 42,  162 => 41,  157 => 38,  154 => 37,  152 => 36,  139 => 26,  133 => 22,  127 => 21,  116 => 19,  107 => 14,  102 => 13,  96 => 12,  84 => 11,  74 => 104,  72 => 98,  69 => 97,  67 => 90,  63 => 88,  61 => 81,  57 => 79,  55 => 21,  50 => 19,  43 => 16,  41 => 12,  37 => 11,  30 => 6,);
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}SoftUni Blog{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('blog_index') }}\" class=\"navbar-brand\">SOFTUNI BLOG</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        {% if app.user %}
                            {% if app.user.isAdmin() %}
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"true\">Admin<span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                        <li><a href=\"{{ path('admin_users_all') }}\">Users</a></li>
                                        <li><a href=\"{{ path('admin_category_all') }}\">Categories</a></li>
                                    </ul>
                                </li>
                            {% endif %}
                            <li>
                                <a href=\"{{ path('article_create') }}\">
                                    Create Article
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('user_profile') }}\">
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('security_logout') }}\">
                                    Logout
                                </a>
                            </li>
                        {% else %}
                            <li>
                                <a href=\"{{ path('user_register') }}\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('security_login') }}\">
                                    LOGIN
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </div>
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
    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Software University Foundation</p>
        </div>
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
