<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_132d4df0f0e248b10e86c8cba077e6a9ca8022f505fb8d9494a4b873cac73719 extends Twig_Template
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
        $__internal_4460233229ed2d502a54fe8c568877305aee2e4659fda23b15656dc1e3187bb8 = $this->env->getExtension("native_profiler");
        $__internal_4460233229ed2d502a54fe8c568877305aee2e4659fda23b15656dc1e3187bb8->enter($__internal_4460233229ed2d502a54fe8c568877305aee2e4659fda23b15656dc1e3187bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4460233229ed2d502a54fe8c568877305aee2e4659fda23b15656dc1e3187bb8->leave($__internal_4460233229ed2d502a54fe8c568877305aee2e4659fda23b15656dc1e3187bb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
