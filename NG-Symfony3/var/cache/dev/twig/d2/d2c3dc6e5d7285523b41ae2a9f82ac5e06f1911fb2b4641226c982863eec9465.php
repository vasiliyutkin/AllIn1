<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c4e3ef83de62330da9b196b2760fe5cbe80587a9242585479d92f077c5bdc160 extends Twig_Template
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
        $__internal_931eedb70baaa50f7b748e6a73a8fa8f27e2d60194594dadb8cf5f84af210fd2 = $this->env->getExtension("native_profiler");
        $__internal_931eedb70baaa50f7b748e6a73a8fa8f27e2d60194594dadb8cf5f84af210fd2->enter($__internal_931eedb70baaa50f7b748e6a73a8fa8f27e2d60194594dadb8cf5f84af210fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_931eedb70baaa50f7b748e6a73a8fa8f27e2d60194594dadb8cf5f84af210fd2->leave($__internal_931eedb70baaa50f7b748e6a73a8fa8f27e2d60194594dadb8cf5f84af210fd2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
