<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_feefa0bccdb3e8bb0445efc8380a5f2ce947feaa124c77d5d3e4c9aba7354c44 extends Twig_Template
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
        $__internal_60add26fa9c9438da0a35faff28f0dabf73de201f8713475d2cf33e412ead3c8 = $this->env->getExtension("native_profiler");
        $__internal_60add26fa9c9438da0a35faff28f0dabf73de201f8713475d2cf33e412ead3c8->enter($__internal_60add26fa9c9438da0a35faff28f0dabf73de201f8713475d2cf33e412ead3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_60add26fa9c9438da0a35faff28f0dabf73de201f8713475d2cf33e412ead3c8->leave($__internal_60add26fa9c9438da0a35faff28f0dabf73de201f8713475d2cf33e412ead3c8_prof);

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
