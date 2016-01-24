<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c5acba9105226ba8fee40700961c9fd89571399d5da59f7ad7e109878cdd1c74 extends Twig_Template
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
        $__internal_add31bb5b66217190f911a3011fcc08b69c92522805651eae9fba2bf2b010961 = $this->env->getExtension("native_profiler");
        $__internal_add31bb5b66217190f911a3011fcc08b69c92522805651eae9fba2bf2b010961->enter($__internal_add31bb5b66217190f911a3011fcc08b69c92522805651eae9fba2bf2b010961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_add31bb5b66217190f911a3011fcc08b69c92522805651eae9fba2bf2b010961->leave($__internal_add31bb5b66217190f911a3011fcc08b69c92522805651eae9fba2bf2b010961_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
