<?php

/* blog/index.html.twig */
class __TwigTemplate_d03768899f64a003df592831bb971c65f399feec94202205283dff76cdb280d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
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
<<<<<<< HEAD
        $__internal_1ab68bb1678702e96bb77f8bf64d5c75f316e38712457e9d28b377824e239541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab68bb1678702e96bb77f8bf64d5c75f316e38712457e9d28b377824e239541->enter($__internal_1ab68bb1678702e96bb77f8bf64d5c75f316e38712457e9d28b377824e239541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ab68bb1678702e96bb77f8bf64d5c75f316e38712457e9d28b377824e239541->leave($__internal_1ab68bb1678702e96bb77f8bf64d5c75f316e38712457e9d28b377824e239541_prof);
=======
<<<<<<< HEAD
        $__internal_fe2e3fdad5944c3ab09e867267919c6cc01db3dcd3f7517f07f547aea794dfe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2e3fdad5944c3ab09e867267919c6cc01db3dcd3f7517f07f547aea794dfe4->enter($__internal_fe2e3fdad5944c3ab09e867267919c6cc01db3dcd3f7517f07f547aea794dfe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe2e3fdad5944c3ab09e867267919c6cc01db3dcd3f7517f07f547aea794dfe4->leave($__internal_fe2e3fdad5944c3ab09e867267919c6cc01db3dcd3f7517f07f547aea794dfe4_prof);
=======
        $__internal_ae8e68f25c5a4d2651880bfa8b1f8b371ac29825bb91dfee3d315f578064e5e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8e68f25c5a4d2651880bfa8b1f8b371ac29825bb91dfee3d315f578064e5e9->enter($__internal_ae8e68f25c5a4d2651880bfa8b1f8b371ac29825bb91dfee3d315f578064e5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae8e68f25c5a4d2651880bfa8b1f8b371ac29825bb91dfee3d315f578064e5e9->leave($__internal_ae8e68f25c5a4d2651880bfa8b1f8b371ac29825bb91dfee3d315f578064e5e9_prof);
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_88c2b5e24d4f430117b4bbbf2f784f05e36b3a085ffd4ae6c747730a4b574fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c2b5e24d4f430117b4bbbf2f784f05e36b3a085ffd4ae6c747730a4b574fec->enter($__internal_88c2b5e24d4f430117b4bbbf2f784f05e36b3a085ffd4ae6c747730a4b574fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));
=======
<<<<<<< HEAD
        $__internal_4d687ba3ec43ddac3600b81098e7e53da79ce4702a9969b80e74522bc0047d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d687ba3ec43ddac3600b81098e7e53da79ce4702a9969b80e74522bc0047d25->enter($__internal_4d687ba3ec43ddac3600b81098e7e53da79ce4702a9969b80e74522bc0047d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));
=======
        $__internal_0c7ee0ce01b60cbc5e2489912efa3071cdfe863af7ba3ef84f2e52aac778255f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c7ee0ce01b60cbc5e2489912efa3071cdfe863af7ba3ef84f2e52aac778255f->enter($__internal_0c7ee0ce01b60cbc5e2489912efa3071cdfe863af7ba3ef84f2e52aac778255f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\">
    <form class=\"register\">

    <div class=\"mainContent\">

        <div class=\"content\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 11
            echo "            <article class=\"topcontent\">
                <header>
                    <h2><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" title=\"First post\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a></h2>
                </header>

                <footer>
                    <p class=\"post-info\">This post is written by ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo "</p>
                </footer>
                <content>
                    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/articles/" . $this->getAttribute($context["article"], "coverPhoto", array()))), "html", null, true);
            echo "\" data-lightbox=\"gallery\">
                        <img style=\"display: block;width: 100%;height: auto;\"
                             src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/articles/" . $this->getAttribute($context["article"], "coverPhoto", array()))), "html", null, true);
            echo "\"/></a>

                    <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "summary", array()), "html", null, true);
            echo "</p>
                    ";
            // line 26
            echo "                </content>
            </article>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>


    <aside class=\"top-sidebar\">
        <article>
            <h2>Top sidebar</h2>
            <p>Класическото тесто за пица се приготвя от брашно, мая, захар, сол, </p>
        </article>
    </aside>

    <aside class=\"middle-sidebar\">
        <article>
            <h2>Middle sidebar</h2>
            <p>Класическото тесто за пица се приготвя от брашно, мая, захар, сол, </p>
        </article>
    </aside>

    <aside class=\"bottom-sidebar\">
        <article>
            <h2>Bottom sidebar</h2>
            <p>Класическото тесто за пица се приготвя от брашно, мая, захар, сол, </p>
        </article>
    </aside>
";
        
<<<<<<< HEAD
        $__internal_88c2b5e24d4f430117b4bbbf2f784f05e36b3a085ffd4ae6c747730a4b574fec->leave($__internal_88c2b5e24d4f430117b4bbbf2f784f05e36b3a085ffd4ae6c747730a4b574fec_prof);
=======
<<<<<<< HEAD
        $__internal_4d687ba3ec43ddac3600b81098e7e53da79ce4702a9969b80e74522bc0047d25->leave($__internal_4d687ba3ec43ddac3600b81098e7e53da79ce4702a9969b80e74522bc0047d25_prof);
=======
        $__internal_0c7ee0ce01b60cbc5e2489912efa3071cdfe863af7ba3ef84f2e52aac778255f->leave($__internal_0c7ee0ce01b60cbc5e2489912efa3071cdfe863af7ba3ef84f2e52aac778255f_prof);
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 29,  87 => 26,  83 => 24,  78 => 22,  73 => 20,  67 => 17,  58 => 13,  54 => 11,  50 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/lightbox.css') }}\">
    <form class=\"register\">

    <div class=\"mainContent\">

        <div class=\"content\">
            {% for article in articles %}
            <article class=\"topcontent\">
                <header>
                    <h2><a href=\"{{ path('article_view', {'id': article.id}) }}\" title=\"First post\">{{ article.title }}</a></h2>
                </header>

                <footer>
                    <p class=\"post-info\">This post is written by {{ article.author }}</p>
                </footer>
                <content>
                    <a href=\"{{ asset('uploads/articles/' ~ article.coverPhoto ) }}\" data-lightbox=\"gallery\">
                        <img style=\"display: block;width: 100%;height: auto;\"
                             src=\"{{ asset('uploads/articles/' ~ article.coverPhoto ) }}\"/></a>

                    <p>{{ article.summary }}</p>
                    {# може да се напише и {{ article.content }} за да покаже целия пост #}
                </content>
            </article>
            {% endfor %}
        </div>
    </div>


    <aside class=\"top-sidebar\">
        <article>
            <h2>Top sidebar</h2>
            <p>Класическото тесто за пица се приготвя от брашно, мая, захар, сол, </p>
        </article>
    </aside>

    <aside class=\"middle-sidebar\">
        <article>
            <h2>Middle sidebar</h2>
            <p>Класическото тесто за пица се приготвя от брашно, мая, захар, сол, </p>
        </article>
    </aside>

    <aside class=\"bottom-sidebar\">
        <article>
            <h2>Bottom sidebar</h2>
            <p>Класическото тесто за пица се приготвя от брашно, мая, захар, сол, </p>
        </article>
    </aside>
{% endblock %}

";
    }
}
