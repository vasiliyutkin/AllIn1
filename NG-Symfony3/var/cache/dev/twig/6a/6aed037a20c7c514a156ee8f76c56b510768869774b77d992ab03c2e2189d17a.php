<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_6061b8bf4bf8b112ae178a350de2d8ec1432492556ba7771dec313228c1e1986 extends Twig_Template
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
        $__internal_487077a0f2e787a5e482d128f21eaaa944d0955f6d43354fdd709d927430ab34 = $this->env->getExtension("native_profiler");
        $__internal_487077a0f2e787a5e482d128f21eaaa944d0955f6d43354fdd709d927430ab34->enter($__internal_487077a0f2e787a5e482d128f21eaaa944d0955f6d43354fdd709d927430ab34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_487077a0f2e787a5e482d128f21eaaa944d0955f6d43354fdd709d927430ab34->leave($__internal_487077a0f2e787a5e482d128f21eaaa944d0955f6d43354fdd709d927430ab34_prof);

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
