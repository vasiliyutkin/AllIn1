<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ec63261f7046a6a71c32a9af82750d50e8332171d0728c3c5ad8d1b1623ea33d extends Twig_Template
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
        $__internal_0ed57bf4d976c6bb2a7bddcf534a1e2967a285c4937b495e3b5e9f1c24e2b965 = $this->env->getExtension("native_profiler");
        $__internal_0ed57bf4d976c6bb2a7bddcf534a1e2967a285c4937b495e3b5e9f1c24e2b965->enter($__internal_0ed57bf4d976c6bb2a7bddcf534a1e2967a285c4937b495e3b5e9f1c24e2b965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0ed57bf4d976c6bb2a7bddcf534a1e2967a285c4937b495e3b5e9f1c24e2b965->leave($__internal_0ed57bf4d976c6bb2a7bddcf534a1e2967a285c4937b495e3b5e9f1c24e2b965_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
