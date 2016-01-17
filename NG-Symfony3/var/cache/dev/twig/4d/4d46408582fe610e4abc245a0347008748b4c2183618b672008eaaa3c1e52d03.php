<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_a827de4fabf7fca0792fbf700b808bd8d391241f29c5d0411c8dfece31a9a259 extends Twig_Template
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
        $__internal_c86d1938d1a3e9f21a5f6a206c7004fd10c25495d3718835c9465a2b70055705 = $this->env->getExtension("native_profiler");
        $__internal_c86d1938d1a3e9f21a5f6a206c7004fd10c25495d3718835c9465a2b70055705->enter($__internal_c86d1938d1a3e9f21a5f6a206c7004fd10c25495d3718835c9465a2b70055705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c86d1938d1a3e9f21a5f6a206c7004fd10c25495d3718835c9465a2b70055705->leave($__internal_c86d1938d1a3e9f21a5f6a206c7004fd10c25495d3718835c9465a2b70055705_prof);

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
