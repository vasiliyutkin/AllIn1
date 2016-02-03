<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0fac49e601fcc7cb5da47f7f5e48084e5b54aeaafe7bdb9fa2d88bc780634a70 extends Twig_Template
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
        $__internal_2a48f7b741382b3463f647a3df561b4e5d4ff793ee0bd6c8eb0be1ad12f09439 = $this->env->getExtension("native_profiler");
        $__internal_2a48f7b741382b3463f647a3df561b4e5d4ff793ee0bd6c8eb0be1ad12f09439->enter($__internal_2a48f7b741382b3463f647a3df561b4e5d4ff793ee0bd6c8eb0be1ad12f09439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2a48f7b741382b3463f647a3df561b4e5d4ff793ee0bd6c8eb0be1ad12f09439->leave($__internal_2a48f7b741382b3463f647a3df561b4e5d4ff793ee0bd6c8eb0be1ad12f09439_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
