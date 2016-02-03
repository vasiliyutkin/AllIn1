<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_0b8adb1169fc08d7a0290067089f8f4a52c563e6dc07c0a8ee9b8cabedee4fc3 extends Twig_Template
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
        $__internal_6aa96e4f2decdef87301073686268e7162af2eaabb5fa85736316d19224bb415 = $this->env->getExtension("native_profiler");
        $__internal_6aa96e4f2decdef87301073686268e7162af2eaabb5fa85736316d19224bb415->enter($__internal_6aa96e4f2decdef87301073686268e7162af2eaabb5fa85736316d19224bb415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6aa96e4f2decdef87301073686268e7162af2eaabb5fa85736316d19224bb415->leave($__internal_6aa96e4f2decdef87301073686268e7162af2eaabb5fa85736316d19224bb415_prof);

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
