<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3962d0f613a0e70d86ce721ce280a2884346c1d3025ef96667c197a2c86e4523 extends Twig_Template
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
        $__internal_f61ba2a76c698cc3623ca4e4325d50151f114fe7a7d8e8aeba57f5d7e57f22b7 = $this->env->getExtension("native_profiler");
        $__internal_f61ba2a76c698cc3623ca4e4325d50151f114fe7a7d8e8aeba57f5d7e57f22b7->enter($__internal_f61ba2a76c698cc3623ca4e4325d50151f114fe7a7d8e8aeba57f5d7e57f22b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f61ba2a76c698cc3623ca4e4325d50151f114fe7a7d8e8aeba57f5d7e57f22b7->leave($__internal_f61ba2a76c698cc3623ca4e4325d50151f114fe7a7d8e8aeba57f5d7e57f22b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
