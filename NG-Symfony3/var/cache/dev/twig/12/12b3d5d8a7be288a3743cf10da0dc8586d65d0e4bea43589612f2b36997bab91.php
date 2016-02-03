<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7a6bf379e5da39193948843c503c3d95e867a8f42dc7fcefab5549b2b2bed778 extends Twig_Template
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
        $__internal_e6cedc444a15120b888e50253335e9ae25184bd23dc83655a1fa048e650e2430 = $this->env->getExtension("native_profiler");
        $__internal_e6cedc444a15120b888e50253335e9ae25184bd23dc83655a1fa048e650e2430->enter($__internal_e6cedc444a15120b888e50253335e9ae25184bd23dc83655a1fa048e650e2430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e6cedc444a15120b888e50253335e9ae25184bd23dc83655a1fa048e650e2430->leave($__internal_e6cedc444a15120b888e50253335e9ae25184bd23dc83655a1fa048e650e2430_prof);

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
