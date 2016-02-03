<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_244c1a72c4e281134601c0306569e3dd972a924e6c39245e0b5a1879840eafce extends Twig_Template
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
        $__internal_56a037d7117199ed1aa6a802d7606edbeaff0f4cf9a40a7ad8cbe6617d0ebfc8 = $this->env->getExtension("native_profiler");
        $__internal_56a037d7117199ed1aa6a802d7606edbeaff0f4cf9a40a7ad8cbe6617d0ebfc8->enter($__internal_56a037d7117199ed1aa6a802d7606edbeaff0f4cf9a40a7ad8cbe6617d0ebfc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_56a037d7117199ed1aa6a802d7606edbeaff0f4cf9a40a7ad8cbe6617d0ebfc8->leave($__internal_56a037d7117199ed1aa6a802d7606edbeaff0f4cf9a40a7ad8cbe6617d0ebfc8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
