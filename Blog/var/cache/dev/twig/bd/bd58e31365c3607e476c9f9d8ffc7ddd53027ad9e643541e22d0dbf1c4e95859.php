<?php

/* form/fields.html.twig */
class __TwigTemplate_2d6857e36a028602cb626e0901e81591a031fa3fb8d855c30990a96577366c0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bea42f94d44e7276cacccb1a58feb86faa2699b438330c37bf50ab48f768145d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea42f94d44e7276cacccb1a58feb86faa2699b438330c37bf50ab48f768145d->enter($__internal_bea42f94d44e7276cacccb1a58feb86faa2699b438330c37bf50ab48f768145d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_bea42f94d44e7276cacccb1a58feb86faa2699b438330c37bf50ab48f768145d->leave($__internal_bea42f94d44e7276cacccb1a58feb86faa2699b438330c37bf50ab48f768145d_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_9a46c4c41fdb750c6606cff68e1cbd60509d37ef2dc0ab4cac3d8379c802490b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a46c4c41fdb750c6606cff68e1cbd60509d37ef2dc0ab4cac3d8379c802490b->enter($__internal_9a46c4c41fdb750c6606cff68e1cbd60509d37ef2dc0ab4cac3d8379c802490b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9a46c4c41fdb750c6606cff68e1cbd60509d37ef2dc0ab4cac3d8379c802490b->leave($__internal_9a46c4c41fdb750c6606cff68e1cbd60509d37ef2dc0ab4cac3d8379c802490b_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
