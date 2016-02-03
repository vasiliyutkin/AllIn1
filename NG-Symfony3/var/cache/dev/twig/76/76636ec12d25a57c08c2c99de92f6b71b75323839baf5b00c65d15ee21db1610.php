<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5a00a8c7fa6273ecef2a283dcf9dbbfefe09259cabc303c2fa1f123bec83db3a extends Twig_Template
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
        $__internal_b48c3ed5180ebc6c25e10ea1742945cbfd38381239d9280e9de1750402fad400 = $this->env->getExtension("native_profiler");
        $__internal_b48c3ed5180ebc6c25e10ea1742945cbfd38381239d9280e9de1750402fad400->enter($__internal_b48c3ed5180ebc6c25e10ea1742945cbfd38381239d9280e9de1750402fad400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b48c3ed5180ebc6c25e10ea1742945cbfd38381239d9280e9de1750402fad400->leave($__internal_b48c3ed5180ebc6c25e10ea1742945cbfd38381239d9280e9de1750402fad400_prof);

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
