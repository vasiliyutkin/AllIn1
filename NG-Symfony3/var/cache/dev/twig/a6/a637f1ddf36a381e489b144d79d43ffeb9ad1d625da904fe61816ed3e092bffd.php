<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9329ecdbc1c04bd054d00771bd41de59363c50ae00ee277be4eba5dd6469ba51 extends Twig_Template
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
        $__internal_879c8b7cb5d9eed351d18da092bc0738aaf86264d5d57f57336e19de00f4660a = $this->env->getExtension("native_profiler");
        $__internal_879c8b7cb5d9eed351d18da092bc0738aaf86264d5d57f57336e19de00f4660a->enter($__internal_879c8b7cb5d9eed351d18da092bc0738aaf86264d5d57f57336e19de00f4660a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_879c8b7cb5d9eed351d18da092bc0738aaf86264d5d57f57336e19de00f4660a->leave($__internal_879c8b7cb5d9eed351d18da092bc0738aaf86264d5d57f57336e19de00f4660a_prof);

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
