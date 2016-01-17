<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_62954d6bbc417f27d08a166f3cff87fed4daaea2e11058aec9292b90da33e3f4 extends Twig_Template
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
        $__internal_884d9547ef6bccabbf7151e77e07dff662d1a3ba7e6f7ace9e5994ce1c9cce42 = $this->env->getExtension("native_profiler");
        $__internal_884d9547ef6bccabbf7151e77e07dff662d1a3ba7e6f7ace9e5994ce1c9cce42->enter($__internal_884d9547ef6bccabbf7151e77e07dff662d1a3ba7e6f7ace9e5994ce1c9cce42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_884d9547ef6bccabbf7151e77e07dff662d1a3ba7e6f7ace9e5994ce1c9cce42->leave($__internal_884d9547ef6bccabbf7151e77e07dff662d1a3ba7e6f7ace9e5994ce1c9cce42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
