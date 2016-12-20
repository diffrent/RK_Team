<?php

/* about/show.html.twig */
class __TwigTemplate_0ee207fbd7d873a06dde07f56ac2635bcdf50ff888064df18244cb5e2140cead extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "about/show.html.twig", 1);
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
        $__internal_b5f9da3b6914d36a9fc2aac32bc47f0db95792bcdc3eb0aa29761994a59f1034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f9da3b6914d36a9fc2aac32bc47f0db95792bcdc3eb0aa29761994a59f1034->enter($__internal_b5f9da3b6914d36a9fc2aac32bc47f0db95792bcdc3eb0aa29761994a59f1034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5f9da3b6914d36a9fc2aac32bc47f0db95792bcdc3eb0aa29761994a59f1034->leave($__internal_b5f9da3b6914d36a9fc2aac32bc47f0db95792bcdc3eb0aa29761994a59f1034_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_070e8eaff7488d6fe742e0f6c24575a48c23f56769b65ac3dc64e75bc9a3cd21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070e8eaff7488d6fe742e0f6c24575a48c23f56769b65ac3dc64e75bc9a3cd21->enter($__internal_070e8eaff7488d6fe742e0f6c24575a48c23f56769b65ac3dc64e75bc9a3cd21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/about.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\">


    <div class=\"mainDiv\">
        <header>
            <h3>За нас</h3>
        </header>
        <div class=\"content\">
            <div class=\"conteiner\">
                <div class=\"white-div\">
                    <textarea class=\"form-control\" rows=\"12\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), "biography1", array()), "html", null, true);
        echo "</textarea>
                </div>
                   <div class=\"white-div-right\">
                       <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bebe.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery\">
                       <img style=\"display: block;width: 100%;height: auto;\"
                       src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bebe.jpg"), "html", null, true);
        echo "\"/>
                       </a>
                   </div>
            </div>
            <div class=\"conteiner\">
                <div class=\"white-div\">
                    <textarea class=\"form-control\" rows=\"12\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), "biography2", array()), "html", null, true);
        echo "</textarea>
                </div>
                   <div class=\"white-div-right\">
                        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bulka.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery\">
                        <img style=\"display: block;width: 100%;height: auto;\"
                        src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bulka.jpg"), "html", null, true);
        echo "\"/>
                        </a>
                   </div>
            </div>
            <div class=\"conteiner\">
                <div class=\"white-div\">
                    <textarea class=\"form-control\" rows=\"12\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), "content", array()), "html", null, true);
        echo "</textarea>
                </div>
                    <div class=\"white-div-right\">
                        <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bebe.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery\">
                        <img style=\"display: block;width: 100%;height: auto;\"
                        src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bebe.jpg"), "html", null, true);
        echo "\"/>
                        </a>
                    </div>
            </div>
        </div>

        <label></label>
        ";
        // line 49
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAdmin", array(), "method"))) {
            // line 50
            echo "            <a class=\"button\" style=\"padding: 15px\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about_edit", array("id" => 1));
            echo "\">Редактирай</a>
        ";
        }
        // line 52
        echo "        <a class=\"button\" style=\"padding: 15px\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Назад &raquo;</a>
    </div>
";
        
        $__internal_070e8eaff7488d6fe742e0f6c24575a48c23f56769b65ac3dc64e75bc9a3cd21->leave($__internal_070e8eaff7488d6fe742e0f6c24575a48c23f56769b65ac3dc64e75bc9a3cd21_prof);

    }

    public function getTemplateName()
    {
        return "about/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 52,  121 => 50,  119 => 49,  109 => 42,  104 => 40,  98 => 37,  89 => 31,  84 => 29,  78 => 26,  69 => 20,  64 => 18,  58 => 15,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/about.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/lightbox.css') }}\">


    <div class=\"mainDiv\">
        <header>
            <h3>За нас</h3>
        </header>
        <div class=\"content\">
            <div class=\"conteiner\">
                <div class=\"white-div\">
                    <textarea class=\"form-control\" rows=\"12\">{{ about.biography1 }}</textarea>
                </div>
                   <div class=\"white-div-right\">
                       <a href=\"{{ asset('images/bebe.jpg') }}\" data-lightbox=\"gallery\">
                       <img style=\"display: block;width: 100%;height: auto;\"
                       src=\"{{ asset('images/bebe.jpg') }}\"/>
                       </a>
                   </div>
            </div>
            <div class=\"conteiner\">
                <div class=\"white-div\">
                    <textarea class=\"form-control\" rows=\"12\">{{ about.biography2 }}</textarea>
                </div>
                   <div class=\"white-div-right\">
                        <a href=\"{{ asset('images/bulka.jpg') }}\" data-lightbox=\"gallery\">
                        <img style=\"display: block;width: 100%;height: auto;\"
                        src=\"{{ asset('images/bulka.jpg') }}\"/>
                        </a>
                   </div>
            </div>
            <div class=\"conteiner\">
                <div class=\"white-div\">
                    <textarea class=\"form-control\" rows=\"12\">{{ about.content }}</textarea>
                </div>
                    <div class=\"white-div-right\">
                        <a href=\"{{ asset('images/bebe.jpg') }}\" data-lightbox=\"gallery\">
                        <img style=\"display: block;width: 100%;height: auto;\"
                        src=\"{{ asset('images/bebe.jpg') }}\"/>
                        </a>
                    </div>
            </div>
        </div>

        <label></label>
        {% if app.getUser() and app.getUser().isAdmin()  %}
            <a class=\"button\" style=\"padding: 15px\" href=\"{{ path('about_edit', {'id': 1}) }}\">Редактирай</a>
        {% endif %}
        <a class=\"button\" style=\"padding: 15px\" href=\"{{ path('blog_index') }}\">Назад &raquo;</a>
    </div>
{% endblock %}

";
    }
}
