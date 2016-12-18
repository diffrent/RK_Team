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
        $__internal_d4256232cea6d0d6fbb5ee185a93765a72cd20b4481a4f08d16f9fd525843f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4256232cea6d0d6fbb5ee185a93765a72cd20b4481a4f08d16f9fd525843f59->enter($__internal_d4256232cea6d0d6fbb5ee185a93765a72cd20b4481a4f08d16f9fd525843f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4256232cea6d0d6fbb5ee185a93765a72cd20b4481a4f08d16f9fd525843f59->leave($__internal_d4256232cea6d0d6fbb5ee185a93765a72cd20b4481a4f08d16f9fd525843f59_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d658a672d9fefe3f994a439565b9924d1238be6463efcbd157e6a4088382f7e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d658a672d9fefe3f994a439565b9924d1238be6463efcbd157e6a4088382f7e6->enter($__internal_d658a672d9fefe3f994a439565b9924d1238be6463efcbd157e6a4088382f7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d658a672d9fefe3f994a439565b9924d1238be6463efcbd157e6a4088382f7e6->leave($__internal_d658a672d9fefe3f994a439565b9924d1238be6463efcbd157e6a4088382f7e6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7377353fc3e0f22ae9f6eb8f9c61bd4db173c33a6ed9e7a3a80feccedb74ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7377353fc3e0f22ae9f6eb8f9c61bd4db173c33a6ed9e7a3a80feccedb74ecb->enter($__internal_c7377353fc3e0f22ae9f6eb8f9c61bd4db173c33a6ed9e7a3a80feccedb74ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c7377353fc3e0f22ae9f6eb8f9c61bd4db173c33a6ed9e7a3a80feccedb74ecb->leave($__internal_c7377353fc3e0f22ae9f6eb8f9c61bd4db173c33a6ed9e7a3a80feccedb74ecb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_de4e838690c178b63c74893336a5cbf25d7836db04dbafa70d900592cef6e3d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4e838690c178b63c74893336a5cbf25d7836db04dbafa70d900592cef6e3d4->enter($__internal_de4e838690c178b63c74893336a5cbf25d7836db04dbafa70d900592cef6e3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_de4e838690c178b63c74893336a5cbf25d7836db04dbafa70d900592cef6e3d4->leave($__internal_de4e838690c178b63c74893336a5cbf25d7836db04dbafa70d900592cef6e3d4_prof);

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
