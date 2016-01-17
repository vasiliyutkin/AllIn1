<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_45acda7b12358816c45e776235f73ba7adcea524f8e46108ba255a2e334add66 extends Twig_Template
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
        $__internal_a2ca3b44502c36b5282c764fa3eb1e6518d80b9c91dcb5809c971567925c84d9 = $this->env->getExtension("native_profiler");
        $__internal_a2ca3b44502c36b5282c764fa3eb1e6518d80b9c91dcb5809c971567925c84d9->enter($__internal_a2ca3b44502c36b5282c764fa3eb1e6518d80b9c91dcb5809c971567925c84d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a2ca3b44502c36b5282c764fa3eb1e6518d80b9c91dcb5809c971567925c84d9->leave($__internal_a2ca3b44502c36b5282c764fa3eb1e6518d80b9c91dcb5809c971567925c84d9_prof);

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
