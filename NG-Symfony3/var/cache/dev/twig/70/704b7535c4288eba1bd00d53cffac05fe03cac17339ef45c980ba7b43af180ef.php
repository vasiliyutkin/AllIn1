<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_10655e313f0f270a66780553b73d6d0484f17a6cd19c6038dcc9c988af5d7f5c extends Twig_Template
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
        $__internal_d82064c982027d8fdf14dd9964425fd047305d0e08ca56f0d656d8e73d28048e = $this->env->getExtension("native_profiler");
        $__internal_d82064c982027d8fdf14dd9964425fd047305d0e08ca56f0d656d8e73d28048e->enter($__internal_d82064c982027d8fdf14dd9964425fd047305d0e08ca56f0d656d8e73d28048e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d82064c982027d8fdf14dd9964425fd047305d0e08ca56f0d656d8e73d28048e->leave($__internal_d82064c982027d8fdf14dd9964425fd047305d0e08ca56f0d656d8e73d28048e_prof);

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
