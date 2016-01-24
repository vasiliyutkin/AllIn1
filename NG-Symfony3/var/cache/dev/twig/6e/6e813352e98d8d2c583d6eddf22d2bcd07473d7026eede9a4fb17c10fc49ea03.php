<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a3e966c76e456ef10d69d73397686017148c58e9e538540f75d2ef980ff4f3c9 extends Twig_Template
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
        $__internal_e104175a935e082ef66c0c8d8655d16b07858308a4546f139bd2b90009471896 = $this->env->getExtension("native_profiler");
        $__internal_e104175a935e082ef66c0c8d8655d16b07858308a4546f139bd2b90009471896->enter($__internal_e104175a935e082ef66c0c8d8655d16b07858308a4546f139bd2b90009471896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e104175a935e082ef66c0c8d8655d16b07858308a4546f139bd2b90009471896->leave($__internal_e104175a935e082ef66c0c8d8655d16b07858308a4546f139bd2b90009471896_prof);

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
