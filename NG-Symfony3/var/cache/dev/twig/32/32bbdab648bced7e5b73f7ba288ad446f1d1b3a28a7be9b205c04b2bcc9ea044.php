<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_af994977a66e666f12d0ce7fe677fcfbfb94188650e200cf161e1b4c785d23c6 extends Twig_Template
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
        $__internal_a0a09b95fb25228d8c21bb53d559d3d833572f5f484c77d2ac14063325b4d45d = $this->env->getExtension("native_profiler");
        $__internal_a0a09b95fb25228d8c21bb53d559d3d833572f5f484c77d2ac14063325b4d45d->enter($__internal_a0a09b95fb25228d8c21bb53d559d3d833572f5f484c77d2ac14063325b4d45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a0a09b95fb25228d8c21bb53d559d3d833572f5f484c77d2ac14063325b4d45d->leave($__internal_a0a09b95fb25228d8c21bb53d559d3d833572f5f484c77d2ac14063325b4d45d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
