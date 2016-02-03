<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_d1240bcf62ef528b7c7647c57fa802154ee4f55c8dc758e3b1c3a8f8f3d19975 extends Twig_Template
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
        $__internal_c38b1dbbd031d77803b8157dcff482cf0cf30c8a745a18b00095e3ace10440ba = $this->env->getExtension("native_profiler");
        $__internal_c38b1dbbd031d77803b8157dcff482cf0cf30c8a745a18b00095e3ace10440ba->enter($__internal_c38b1dbbd031d77803b8157dcff482cf0cf30c8a745a18b00095e3ace10440ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c38b1dbbd031d77803b8157dcff482cf0cf30c8a745a18b00095e3ace10440ba->leave($__internal_c38b1dbbd031d77803b8157dcff482cf0cf30c8a745a18b00095e3ace10440ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
