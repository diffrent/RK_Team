<?php

/* @Twig/Exception/traces_text.html.twig */
class __TwigTemplate_cea8485575efbe8dc59cadb2248f2c1d7436f6d30dc84d6ab539e6eef89e5042 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_1c4d8866eb972a73e648cb8e09073b7175037c8b0849f33f17001538668ed078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4d8866eb972a73e648cb8e09073b7175037c8b0849f33f17001538668ed078->enter($__internal_1c4d8866eb972a73e648cb8e09073b7175037c8b0849f33f17001538668ed078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));
=======
<<<<<<< HEAD
        $__internal_203764509429d12bfa80eb0bf6692e5127388f93192ffc29bb70befd6d495b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203764509429d12bfa80eb0bf6692e5127388f93192ffc29bb70befd6d495b99->enter($__internal_203764509429d12bfa80eb0bf6692e5127388f93192ffc29bb70befd6d495b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));
=======
        $__internal_693330c4909b74abb02806777698b878504d7fb413841e31f4c68a4adeeae494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693330c4909b74abb02806777698b878504d7fb413841e31f4c68a4adeeae494->enter($__internal_693330c4909b74abb02806777698b878504d7fb413841e31f4c68a4adeeae494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

        // line 1
        echo "<div class=\"block\">
    <h2>
        Stack Trace (Plain Text)&nbsp;
        ";
        // line 4
        ob_start();
        // line 5
        echo "        <a href=\"#\" onclick=\"toggle('traces-text'); switchIcons('icon-traces-text-open', 'icon-traces-text-close'); return false;\">
            <img class=\"toggle\" id=\"icon-traces-text-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: none\" />
            <img class=\"toggle\" id=\"icon-traces-text-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: inline\" />
        </a>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 10
        echo "    </h2>

    <div id=\"traces-text\" class=\"trace\" style=\"display: none;\">
<pre>";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 14
            echo "[";
            echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
            echo "] ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "class", array()), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "message", array()), "html", null, true);
            echo "
";
            // line 15
            $this->loadTemplate("@Twig/Exception/traces.txt.twig", "@Twig/Exception/traces_text.html.twig", 15)->display(array("exception" => $context["e"]));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</pre>
    </div>
</div>
";
        
<<<<<<< HEAD
        $__internal_1c4d8866eb972a73e648cb8e09073b7175037c8b0849f33f17001538668ed078->leave($__internal_1c4d8866eb972a73e648cb8e09073b7175037c8b0849f33f17001538668ed078_prof);
=======
<<<<<<< HEAD
        $__internal_203764509429d12bfa80eb0bf6692e5127388f93192ffc29bb70befd6d495b99->leave($__internal_203764509429d12bfa80eb0bf6692e5127388f93192ffc29bb70befd6d495b99_prof);
=======
        $__internal_693330c4909b74abb02806777698b878504d7fb413841e31f4c68a4adeeae494->leave($__internal_693330c4909b74abb02806777698b878504d7fb413841e31f4c68a4adeeae494_prof);
>>>>>>> 616e38a3edb6686d43fd48167124353bf7147417
>>>>>>> origin/master

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  54 => 15,  45 => 14,  41 => 13,  36 => 10,  29 => 5,  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"block\">
    <h2>
        Stack Trace (Plain Text)&nbsp;
        {% spaceless %}
        <a href=\"#\" onclick=\"toggle('traces-text'); switchIcons('icon-traces-text-open', 'icon-traces-text-close'); return false;\">
            <img class=\"toggle\" id=\"icon-traces-text-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: none\" />
            <img class=\"toggle\" id=\"icon-traces-text-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: inline\" />
        </a>
        {% endspaceless %}
    </h2>

    <div id=\"traces-text\" class=\"trace\" style=\"display: none;\">
<pre>{% for i, e in exception.toarray %}
[{{ i + 1 }}] {{ e.class }}: {{ e.message }}
{% include '@Twig/Exception/traces.txt.twig' with { 'exception': e } only %}
{% endfor %}</pre>
    </div>
</div>
";
    }
}
