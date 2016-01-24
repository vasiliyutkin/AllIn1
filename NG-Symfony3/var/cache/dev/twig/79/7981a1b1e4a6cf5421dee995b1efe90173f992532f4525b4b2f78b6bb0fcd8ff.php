<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2bff21c380777c679d386466db896b4b429d4973537786c73429b7c1b4ead0e2 extends Twig_Template
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
        $__internal_3af1a427d60b522fee430ab45affd033a56030f095610324d9959f5ed724f967 = $this->env->getExtension("native_profiler");
        $__internal_3af1a427d60b522fee430ab45affd033a56030f095610324d9959f5ed724f967->enter($__internal_3af1a427d60b522fee430ab45affd033a56030f095610324d9959f5ed724f967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_3af1a427d60b522fee430ab45affd033a56030f095610324d9959f5ed724f967->leave($__internal_3af1a427d60b522fee430ab45affd033a56030f095610324d9959f5ed724f967_prof);

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
