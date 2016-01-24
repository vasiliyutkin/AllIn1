<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d841318b1e02c63482d1d4c64e98bc745b083ca1006379f248b4e77e7fe8a38c extends Twig_Template
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
        $__internal_8aa103c675dda787c6b5dff5c1331bffd7b2ef1dc4c385b14c54b61c1b0d6872 = $this->env->getExtension("native_profiler");
        $__internal_8aa103c675dda787c6b5dff5c1331bffd7b2ef1dc4c385b14c54b61c1b0d6872->enter($__internal_8aa103c675dda787c6b5dff5c1331bffd7b2ef1dc4c385b14c54b61c1b0d6872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8aa103c675dda787c6b5dff5c1331bffd7b2ef1dc4c385b14c54b61c1b0d6872->leave($__internal_8aa103c675dda787c6b5dff5c1331bffd7b2ef1dc4c385b14c54b61c1b0d6872_prof);

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
