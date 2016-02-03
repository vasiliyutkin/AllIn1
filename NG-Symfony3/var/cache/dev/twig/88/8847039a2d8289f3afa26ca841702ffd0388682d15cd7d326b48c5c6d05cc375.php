<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a31aeedebd3baaf49f55a8149034d85b8e9c641f7874988863be9e0b468d15eb extends Twig_Template
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
        $__internal_452a7057c2bdf80fca3042fc716d76c43155f59d59257db726429d3ef43fdb02 = $this->env->getExtension("native_profiler");
        $__internal_452a7057c2bdf80fca3042fc716d76c43155f59d59257db726429d3ef43fdb02->enter($__internal_452a7057c2bdf80fca3042fc716d76c43155f59d59257db726429d3ef43fdb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_452a7057c2bdf80fca3042fc716d76c43155f59d59257db726429d3ef43fdb02->leave($__internal_452a7057c2bdf80fca3042fc716d76c43155f59d59257db726429d3ef43fdb02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
