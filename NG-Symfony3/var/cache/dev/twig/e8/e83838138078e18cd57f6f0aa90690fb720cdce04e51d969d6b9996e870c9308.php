<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_752083db283e1fec71c890a193075502a6f1b4455bf421a74f9dd1723cced34e extends Twig_Template
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
        $__internal_e48fa293f28cd7f8b6a3cce7598281bea852760a2737953f25fe8d5c2dd95cd1 = $this->env->getExtension("native_profiler");
        $__internal_e48fa293f28cd7f8b6a3cce7598281bea852760a2737953f25fe8d5c2dd95cd1->enter($__internal_e48fa293f28cd7f8b6a3cce7598281bea852760a2737953f25fe8d5c2dd95cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e48fa293f28cd7f8b6a3cce7598281bea852760a2737953f25fe8d5c2dd95cd1->leave($__internal_e48fa293f28cd7f8b6a3cce7598281bea852760a2737953f25fe8d5c2dd95cd1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
