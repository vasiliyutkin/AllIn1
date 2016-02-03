<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_314849eefa7cce590a91983c3a0d0499daa4a9191b91b434ff25c1e617b53461 extends Twig_Template
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
        $__internal_25f6245a6391acf3b7e2ed03952c1cf4428e2546fe0d6989a93490481a9b4763 = $this->env->getExtension("native_profiler");
        $__internal_25f6245a6391acf3b7e2ed03952c1cf4428e2546fe0d6989a93490481a9b4763->enter($__internal_25f6245a6391acf3b7e2ed03952c1cf4428e2546fe0d6989a93490481a9b4763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_25f6245a6391acf3b7e2ed03952c1cf4428e2546fe0d6989a93490481a9b4763->leave($__internal_25f6245a6391acf3b7e2ed03952c1cf4428e2546fe0d6989a93490481a9b4763_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
