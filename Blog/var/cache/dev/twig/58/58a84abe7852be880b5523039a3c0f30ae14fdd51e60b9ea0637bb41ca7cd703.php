<?php

/* about/create.html.twig */
class __TwigTemplate_c19e82a74558a186953000dea76500b7b47280adfce09ae1985510a82ad4e293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "about/create.html.twig", 2);
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
        $__internal_4d078f5b4d6b37cc856c50e3d9a0e708393d84cf73cc703df9008dc1423fe310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d078f5b4d6b37cc856c50e3d9a0e708393d84cf73cc703df9008dc1423fe310->enter($__internal_4d078f5b4d6b37cc856c50e3d9a0e708393d84cf73cc703df9008dc1423fe310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d078f5b4d6b37cc856c50e3d9a0e708393d84cf73cc703df9008dc1423fe310->leave($__internal_4d078f5b4d6b37cc856c50e3d9a0e708393d84cf73cc703df9008dc1423fe310_prof);

    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        $__internal_6a5d30cc142ff16aee34163e3de820b5fd9d5ef0cf2ec7e2975b4771a896e20d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5d30cc142ff16aee34163e3de820b5fd9d5ef0cf2ec7e2975b4771a896e20d->enter($__internal_6a5d30cc142ff16aee34163e3de820b5fd9d5ef0cf2ec7e2975b4771a896e20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/articleCreate.css"), "html", null, true);
        echo "\">

    <div class=\"main\">
        <div class=\"one\">
            <form enctype=\"multipart/form-data\" class=\"register\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about_create");
        echo "\" method=\"POST\">
                <h3>Качване на ново За Нас</h3>

                <div>
                    <label class=\"col-sm-4 control-label\" for=\"about_biography1\">Биография на първия отец:</label>
                    <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"7\" id=\"about_biography1\"
                                      name=\"about[biography1]\"></textarea>
                    </div>
                </div>

                <div>
                    <label class=\"col-sm-4 control-label\" for=\"about_biography2\">Биография на втория отец:</label>
                    <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"7\" id=\"about_biography2\"
                                      name=\"about[biography2]\"></textarea>
                    </div>
                </div>

                <div>
                    <label class=\"col-sm-4 control-label\" for=\"about_content\">Кратка история на църквата:</label>
                    <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"17\" id=\"about_content\"
                                      name=\"about[content]\"></textarea>
                    </div>
                </div>
                ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

                <div>
                    <div>
                        <label></label>
                        <button style=\"float: right;\" type=\"submit\" class=\"button\">Изпрати</button>
                        <a style=\"float: right; padding: 14px; margin: -4% 3% 5% 0%; background-color: tomato;\" class=\"button\" href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Отказ</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_6a5d30cc142ff16aee34163e3de820b5fd9d5ef0cf2ec7e2975b4771a896e20d->leave($__internal_6a5d30cc142ff16aee34163e3de820b5fd9d5ef0cf2ec7e2975b4771a896e20d_prof);

    }

    public function getTemplateName()
    {
        return "about/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 41,  77 => 35,  48 => 9,  40 => 5,  34 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/articleCreate.css') }}\">

    <div class=\"main\">
        <div class=\"one\">
            <form enctype=\"multipart/form-data\" class=\"register\" action=\"{{ path('about_create') }}\" method=\"POST\">
                <h3>Качване на ново За Нас</h3>

                <div>
                    <label class=\"col-sm-4 control-label\" for=\"about_biography1\">Биография на първия отец:</label>
                    <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"7\" id=\"about_biography1\"
                                      name=\"about[biography1]\"></textarea>
                    </div>
                </div>

                <div>
                    <label class=\"col-sm-4 control-label\" for=\"about_biography2\">Биография на втория отец:</label>
                    <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"7\" id=\"about_biography2\"
                                      name=\"about[biography2]\"></textarea>
                    </div>
                </div>

                <div>
                    <label class=\"col-sm-4 control-label\" for=\"about_content\">Кратка история на църквата:</label>
                    <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"17\" id=\"about_content\"
                                      name=\"about[content]\"></textarea>
                    </div>
                </div>
                {{ form_row(form._token) }}

                <div>
                    <div>
                        <label></label>
                        <button style=\"float: right;\" type=\"submit\" class=\"button\">Изпрати</button>
                        <a style=\"float: right; padding: 14px; margin: -4% 3% 5% 0%; background-color: tomato;\" class=\"button\" href=\"{{ path('blog_index') }}\">Отказ</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
{% endblock %}
";
    }
}
