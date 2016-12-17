<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_85275d914271e22e279f5061a3e05817bd3742a88151550f2da378cd799f7770 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_ba88f934f624555710f28bc37df57c8504e8d2e0e28420f2d74ca3a18f5c820d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba88f934f624555710f28bc37df57c8504e8d2e0e28420f2d74ca3a18f5c820d->enter($__internal_ba88f934f624555710f28bc37df57c8504e8d2e0e28420f2d74ca3a18f5c820d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba88f934f624555710f28bc37df57c8504e8d2e0e28420f2d74ca3a18f5c820d->leave($__internal_ba88f934f624555710f28bc37df57c8504e8d2e0e28420f2d74ca3a18f5c820d_prof);
=======
<<<<<<< HEAD
        $__internal_980a54533aea053cc4d9e149a672df1ce47ed7dfe10c300295300e75055bdf6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980a54533aea053cc4d9e149a672df1ce47ed7dfe10c300295300e75055bdf6a->enter($__internal_980a54533aea053cc4d9e149a672df1ce47ed7dfe10c300295300e75055bdf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_980a54533aea053cc4d9e149a672df1ce47ed7dfe10c300295300e75055bdf6a->leave($__internal_980a54533aea053cc4d9e149a672df1ce47ed7dfe10c300295300e75055bdf6a_prof);
=======
        $__internal_8bd98f20f49a0f1da9473f35308af8b2e8dcd5b24f921ba9c0a16f90584e63ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd98f20f49a0f1da9473f35308af8b2e8dcd5b24f921ba9c0a16f90584e63ae->enter($__internal_8bd98f20f49a0f1da9473f35308af8b2e8dcd5b24f921ba9c0a16f90584e63ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bd98f20f49a0f1da9473f35308af8b2e8dcd5b24f921ba9c0a16f90584e63ae->leave($__internal_8bd98f20f49a0f1da9473f35308af8b2e8dcd5b24f921ba9c0a16f90584e63ae_prof);
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_4f5084ff261bd386d9f5afcf6002c020ef180230984740c0e3fc48915d9b44df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5084ff261bd386d9f5afcf6002c020ef180230984740c0e3fc48915d9b44df->enter($__internal_4f5084ff261bd386d9f5afcf6002c020ef180230984740c0e3fc48915d9b44df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));
=======
<<<<<<< HEAD
        $__internal_0aeb7ce7a8cb79160149f02d61ad4e79a22e940a9ebdbea1cea12d4d4a4a4a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aeb7ce7a8cb79160149f02d61ad4e79a22e940a9ebdbea1cea12d4d4a4a4a59->enter($__internal_0aeb7ce7a8cb79160149f02d61ad4e79a22e940a9ebdbea1cea12d4d4a4a4a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));
=======
        $__internal_7c03cc58626832c9bf55d15fea7eba435d2e33552e26a3d4800e0f3441bcb817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c03cc58626832c9bf55d15fea7eba435d2e33552e26a3d4800e0f3441bcb817->enter($__internal_7c03cc58626832c9bf55d15fea7eba435d2e33552e26a3d4800e0f3441bcb817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
<<<<<<< HEAD
        $__internal_4f5084ff261bd386d9f5afcf6002c020ef180230984740c0e3fc48915d9b44df->leave($__internal_4f5084ff261bd386d9f5afcf6002c020ef180230984740c0e3fc48915d9b44df_prof);
=======
<<<<<<< HEAD
        $__internal_0aeb7ce7a8cb79160149f02d61ad4e79a22e940a9ebdbea1cea12d4d4a4a4a59->leave($__internal_0aeb7ce7a8cb79160149f02d61ad4e79a22e940a9ebdbea1cea12d4d4a4a4a59_prof);
=======
        $__internal_7c03cc58626832c9bf55d15fea7eba435d2e33552e26a3d4800e0f3441bcb817->leave($__internal_7c03cc58626832c9bf55d15fea7eba435d2e33552e26a3d4800e0f3441bcb817_prof);
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_93410ffb5cd27aac1b93302ec75ff5cb7f50532b72edf0dd6024f09c47c0ca8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93410ffb5cd27aac1b93302ec75ff5cb7f50532b72edf0dd6024f09c47c0ca8b->enter($__internal_93410ffb5cd27aac1b93302ec75ff5cb7f50532b72edf0dd6024f09c47c0ca8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));
=======
<<<<<<< HEAD
        $__internal_408640f99597243b1c974d82a0c87a4720844fe1770ed6c7acdd64d53b28555b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408640f99597243b1c974d82a0c87a4720844fe1770ed6c7acdd64d53b28555b->enter($__internal_408640f99597243b1c974d82a0c87a4720844fe1770ed6c7acdd64d53b28555b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));
=======
        $__internal_2ec436ce1712624d7997331d268d36480e6495c927aeb3334196d88fa3b20e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec436ce1712624d7997331d268d36480e6495c927aeb3334196d88fa3b20e61->enter($__internal_2ec436ce1712624d7997331d268d36480e6495c927aeb3334196d88fa3b20e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
<<<<<<< HEAD
        $__internal_93410ffb5cd27aac1b93302ec75ff5cb7f50532b72edf0dd6024f09c47c0ca8b->leave($__internal_93410ffb5cd27aac1b93302ec75ff5cb7f50532b72edf0dd6024f09c47c0ca8b_prof);
=======
<<<<<<< HEAD
        $__internal_408640f99597243b1c974d82a0c87a4720844fe1770ed6c7acdd64d53b28555b->leave($__internal_408640f99597243b1c974d82a0c87a4720844fe1770ed6c7acdd64d53b28555b_prof);
=======
        $__internal_2ec436ce1712624d7997331d268d36480e6495c927aeb3334196d88fa3b20e61->leave($__internal_2ec436ce1712624d7997331d268d36480e6495c927aeb3334196d88fa3b20e61_prof);
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_9b670bd3602857caf9adcf9441318d105381e6ba2b88766a6ffa1d1c566561ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b670bd3602857caf9adcf9441318d105381e6ba2b88766a6ffa1d1c566561ee->enter($__internal_9b670bd3602857caf9adcf9441318d105381e6ba2b88766a6ffa1d1c566561ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));
=======
<<<<<<< HEAD
        $__internal_5c9c2d8ff533fa23d7e2d84132178cf0017749f50dfdf9770d1432942a530023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9c2d8ff533fa23d7e2d84132178cf0017749f50dfdf9770d1432942a530023->enter($__internal_5c9c2d8ff533fa23d7e2d84132178cf0017749f50dfdf9770d1432942a530023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));
=======
        $__internal_a43062d151a4a5c48c87ec55d5315bb8739b15dbd4c0fcb9fcfde79438c5218e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43062d151a4a5c48c87ec55d5315bb8739b15dbd4c0fcb9fcfde79438c5218e->enter($__internal_a43062d151a4a5c48c87ec55d5315bb8739b15dbd4c0fcb9fcfde79438c5218e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
<<<<<<< HEAD
        $__internal_9b670bd3602857caf9adcf9441318d105381e6ba2b88766a6ffa1d1c566561ee->leave($__internal_9b670bd3602857caf9adcf9441318d105381e6ba2b88766a6ffa1d1c566561ee_prof);
=======
<<<<<<< HEAD
        $__internal_5c9c2d8ff533fa23d7e2d84132178cf0017749f50dfdf9770d1432942a530023->leave($__internal_5c9c2d8ff533fa23d7e2d84132178cf0017749f50dfdf9770d1432942a530023_prof);
=======
        $__internal_a43062d151a4a5c48c87ec55d5315bb8739b15dbd4c0fcb9fcfde79438c5218e->leave($__internal_a43062d151a4a5c48c87ec55d5315bb8739b15dbd4c0fcb9fcfde79438c5218e_prof);
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
