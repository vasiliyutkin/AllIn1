<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_40c327ddb651bc87984a6ca94bbf782b39afb7b1da6d16eed08494b5eff3c3b7 extends Twig_Template
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
        $__internal_eb12c4e1e6436cec068c1dd90b6a120e2e02c331916515d50bad132808bbcfe1 = $this->env->getExtension("native_profiler");
        $__internal_eb12c4e1e6436cec068c1dd90b6a120e2e02c331916515d50bad132808bbcfe1->enter($__internal_eb12c4e1e6436cec068c1dd90b6a120e2e02c331916515d50bad132808bbcfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_eb12c4e1e6436cec068c1dd90b6a120e2e02c331916515d50bad132808bbcfe1->leave($__internal_eb12c4e1e6436cec068c1dd90b6a120e2e02c331916515d50bad132808bbcfe1_prof);

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
