<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6eb4927a7aedd06077fbd30e3451fda98b2c78593a0b97ddb32bb8853383f9b0 extends Twig_Template
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
        $__internal_45d4235cab8ab4c6a15643bd23129085109738863cc3e8df779e676fd8a1d423 = $this->env->getExtension("native_profiler");
        $__internal_45d4235cab8ab4c6a15643bd23129085109738863cc3e8df779e676fd8a1d423->enter($__internal_45d4235cab8ab4c6a15643bd23129085109738863cc3e8df779e676fd8a1d423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_45d4235cab8ab4c6a15643bd23129085109738863cc3e8df779e676fd8a1d423->leave($__internal_45d4235cab8ab4c6a15643bd23129085109738863cc3e8df779e676fd8a1d423_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
