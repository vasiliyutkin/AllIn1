<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_202d46dd0aabf3d8e5cb8e4902cbf68b47722b2faa494f91b3d973438ac8d01b extends Twig_Template
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
        $__internal_6d6ca4632e3bac690a14dbf89d97ad0ad00fdc5cc3b45651dcf39dee6c3a6734 = $this->env->getExtension("native_profiler");
        $__internal_6d6ca4632e3bac690a14dbf89d97ad0ad00fdc5cc3b45651dcf39dee6c3a6734->enter($__internal_6d6ca4632e3bac690a14dbf89d97ad0ad00fdc5cc3b45651dcf39dee6c3a6734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_6d6ca4632e3bac690a14dbf89d97ad0ad00fdc5cc3b45651dcf39dee6c3a6734->leave($__internal_6d6ca4632e3bac690a14dbf89d97ad0ad00fdc5cc3b45651dcf39dee6c3a6734_prof);

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
