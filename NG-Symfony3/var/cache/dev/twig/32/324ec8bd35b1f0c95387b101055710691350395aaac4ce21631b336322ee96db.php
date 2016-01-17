<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_89435f67789dd22d5f4401fbd8a1c2094159db1fcefab8ae51e832b819cf47e2 extends Twig_Template
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
        $__internal_4004652b1c2b4354a4bfa06400569388202420763cc89a61d10454f4c07c0915 = $this->env->getExtension("native_profiler");
        $__internal_4004652b1c2b4354a4bfa06400569388202420763cc89a61d10454f4c07c0915->enter($__internal_4004652b1c2b4354a4bfa06400569388202420763cc89a61d10454f4c07c0915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4004652b1c2b4354a4bfa06400569388202420763cc89a61d10454f4c07c0915->leave($__internal_4004652b1c2b4354a4bfa06400569388202420763cc89a61d10454f4c07c0915_prof);

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
