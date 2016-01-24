<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_a3c4ea92fe62f9c0268b49e86b8c8cbc616385450bbda69327720f9dde686f50 extends Twig_Template
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
        $__internal_b8fdd8065a16bc32b70967d2b68bb707bf876d7627e60a27c28f9841e20099f2 = $this->env->getExtension("native_profiler");
        $__internal_b8fdd8065a16bc32b70967d2b68bb707bf876d7627e60a27c28f9841e20099f2->enter($__internal_b8fdd8065a16bc32b70967d2b68bb707bf876d7627e60a27c28f9841e20099f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b8fdd8065a16bc32b70967d2b68bb707bf876d7627e60a27c28f9841e20099f2->leave($__internal_b8fdd8065a16bc32b70967d2b68bb707bf876d7627e60a27c28f9841e20099f2_prof);

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
