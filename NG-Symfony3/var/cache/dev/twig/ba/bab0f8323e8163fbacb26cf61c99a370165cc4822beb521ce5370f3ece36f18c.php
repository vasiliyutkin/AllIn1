<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_864d624735057144b6aceff71685179fb85ac8a012411aaeebd30fa5f6b4705d extends Twig_Template
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
        $__internal_6c040252e1a6ba517828388c4268b5867e23cc82c0fc8d798937789ab6ec3c9d = $this->env->getExtension("native_profiler");
        $__internal_6c040252e1a6ba517828388c4268b5867e23cc82c0fc8d798937789ab6ec3c9d->enter($__internal_6c040252e1a6ba517828388c4268b5867e23cc82c0fc8d798937789ab6ec3c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6c040252e1a6ba517828388c4268b5867e23cc82c0fc8d798937789ab6ec3c9d->leave($__internal_6c040252e1a6ba517828388c4268b5867e23cc82c0fc8d798937789ab6ec3c9d_prof);

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
