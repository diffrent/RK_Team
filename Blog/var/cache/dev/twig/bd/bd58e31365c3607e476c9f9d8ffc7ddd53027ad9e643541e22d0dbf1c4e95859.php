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
        $__internal_0d6212996485a51daf32090f02017a1cb9bee6508c2b97f4d2143160abd35b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6212996485a51daf32090f02017a1cb9bee6508c2b97f4d2143160abd35b66->enter($__internal_0d6212996485a51daf32090f02017a1cb9bee6508c2b97f4d2143160abd35b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_0d6212996485a51daf32090f02017a1cb9bee6508c2b97f4d2143160abd35b66->leave($__internal_0d6212996485a51daf32090f02017a1cb9bee6508c2b97f4d2143160abd35b66_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_2660cae74c2cab80bd44b1cf9fb1c8bfc62b4f0fd3d3930d21acec85dcc71efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2660cae74c2cab80bd44b1cf9fb1c8bfc62b4f0fd3d3930d21acec85dcc71efd->enter($__internal_2660cae74c2cab80bd44b1cf9fb1c8bfc62b4f0fd3d3930d21acec85dcc71efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

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
        
        $__internal_2660cae74c2cab80bd44b1cf9fb1c8bfc62b4f0fd3d3930d21acec85dcc71efd->leave($__internal_2660cae74c2cab80bd44b1cf9fb1c8bfc62b4f0fd3d3930d21acec85dcc71efd_prof);

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
