<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a9a7372bdc04beafdaaa73c833b7cfffeaf3c61e1b8ec365b36c6495403c00b8 extends Twig_Template
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
        $__internal_ee777378251614ab1b16176f1c61084a09b0ad30ac8baa279ac1a94a4b513e6b = $this->env->getExtension("native_profiler");
        $__internal_ee777378251614ab1b16176f1c61084a09b0ad30ac8baa279ac1a94a4b513e6b->enter($__internal_ee777378251614ab1b16176f1c61084a09b0ad30ac8baa279ac1a94a4b513e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ee777378251614ab1b16176f1c61084a09b0ad30ac8baa279ac1a94a4b513e6b->leave($__internal_ee777378251614ab1b16176f1c61084a09b0ad30ac8baa279ac1a94a4b513e6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
