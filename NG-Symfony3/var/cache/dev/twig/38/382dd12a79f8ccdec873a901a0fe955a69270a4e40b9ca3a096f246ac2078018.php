<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f9ca50428eb73ad75939cd2aac7b01b576a6fe4f5dd81a9f1b3d56a412d641ba extends Twig_Template
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
        $__internal_4ceee0670c22054dd0d1e9d7c91b12bc6a68f8b26c270044f1946af96a346e97 = $this->env->getExtension("native_profiler");
        $__internal_4ceee0670c22054dd0d1e9d7c91b12bc6a68f8b26c270044f1946af96a346e97->enter($__internal_4ceee0670c22054dd0d1e9d7c91b12bc6a68f8b26c270044f1946af96a346e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4ceee0670c22054dd0d1e9d7c91b12bc6a68f8b26c270044f1946af96a346e97->leave($__internal_4ceee0670c22054dd0d1e9d7c91b12bc6a68f8b26c270044f1946af96a346e97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
