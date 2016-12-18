<?php

/* statistics/edit.html.twig */
class __TwigTemplate_6f3d561ed10f811be40a3d5c146867cd02c51f4f467f7c44c2ca385f3905a10f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "statistics/edit.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80489e27d3d0745000de4a8cf9b45f1f36a5bfc7e69c106cf35be0e3fc06b3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80489e27d3d0745000de4a8cf9b45f1f36a5bfc7e69c106cf35be0e3fc06b3d2->enter($__internal_80489e27d3d0745000de4a8cf9b45f1f36a5bfc7e69c106cf35be0e3fc06b3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "statistics/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80489e27d3d0745000de4a8cf9b45f1f36a5bfc7e69c106cf35be0e3fc06b3d2->leave($__internal_80489e27d3d0745000de4a8cf9b45f1f36a5bfc7e69c106cf35be0e3fc06b3d2_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_46d9929a7ab10997faff56db2892c9347bb3d4c9ef5802583e3aafce889150c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d9929a7ab10997faff56db2892c9347bb3d4c9ef5802583e3aafce889150c8->enter($__internal_46d9929a7ab10997faff56db2892c9347bb3d4c9ef5802583e3aafce889150c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/statistics.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\">

    <div class=\"mainDiv\">
        <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statistics_edit", array("id" => 1));
        echo "\" method=\"POST\">
            <header>
                <h3>Редактиране на Статистика</h3>
            </header>
            <div class=\"content\">
                <div class=\"white-div\">
                    <textarea class=\"form-control\" rows=\"25\" id=\"statistics_content\"
                    name=\"statistics[content]\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")), "content", array()), "html", null, true);
        echo "</textarea>
                </div>

                <div class=\"white-div-right\">
                    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bulka.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery\">
                        <img style=\"display: block;width: 100%;height: auto;\"
                             src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bulka.jpg"), "html", null, true);
        echo "\"/>
                    </a>
                </div>

                <div class=\"white-div-right\">
                    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bebe.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery\">
                        <img style=\"display: block;width: 100%;height: auto;\"
                             src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bebe.jpg"), "html", null, true);
        echo "\"/>
                    </a>
                </div>
            </div>

                ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                ";
        // line 34
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAdmin", array(), "method")) {
            // line 35
            echo "                <label></label>
                <button type=\"submit\" class=\"button\">Готово</button>
                <a class=\"button\" href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statistics_view", array("id" => 1));
            echo "\">Отказ</a>
                ";
        }
        // line 39
        echo "        </form>
    </div>
";
        
        $__internal_46d9929a7ab10997faff56db2892c9347bb3d4c9ef5802583e3aafce889150c8->leave($__internal_46d9929a7ab10997faff56db2892c9347bb3d4c9ef5802583e3aafce889150c8_prof);

    }

    public function getTemplateName()
    {
        return "statistics/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 39,  104 => 37,  100 => 35,  98 => 34,  94 => 33,  86 => 28,  81 => 26,  73 => 21,  68 => 19,  61 => 15,  51 => 8,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/statistics.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/lightbox.css') }}\">

    <div class=\"mainDiv\">
        <form action=\"{{ path('statistics_edit', {id: 1}) }}\" method=\"POST\">
            <header>
                <h3>Редактиране на Статистика</h3>
            </header>
            <div class=\"content\">
                <div class=\"white-div\">
                    <textarea class=\"form-control\" rows=\"25\" id=\"statistics_content\"
                    name=\"statistics[content]\">{{ statistics.content }}</textarea>
                </div>

                <div class=\"white-div-right\">
                    <a href=\"{{ asset('images/bulka.jpg') }}\" data-lightbox=\"gallery\">
                        <img style=\"display: block;width: 100%;height: auto;\"
                             src=\"{{ asset('images/bulka.jpg') }}\"/>
                    </a>
                </div>

                <div class=\"white-div-right\">
                    <a href=\"{{ asset('images/bebe.jpg') }}\" data-lightbox=\"gallery\">
                        <img style=\"display: block;width: 100%;height: auto;\"
                             src=\"{{ asset('images/bebe.jpg') }}\"/>
                    </a>
                </div>
            </div>

                {{ form_row(form._token) }}
                {% if app.getUser().isAdmin()  %}
                <label></label>
                <button type=\"submit\" class=\"button\">Готово</button>
                <a class=\"button\" href=\"{{ path('statistics_view', {id: 1}) }}\">Отказ</a>
                {% endif %}
        </form>
    </div>
{% endblock %}



";
    }
}
