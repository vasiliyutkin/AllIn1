<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_89dfe683917f2d5f9bc0c229fcb2845c27838967d4c3964ffdf33b35874953ae extends Twig_Template
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
        $__internal_5cb5717621a98317f232344d3d7a6f3837ea04424bee664d4e0f2b6a889c534b = $this->env->getExtension("native_profiler");
        $__internal_5cb5717621a98317f232344d3d7a6f3837ea04424bee664d4e0f2b6a889c534b->enter($__internal_5cb5717621a98317f232344d3d7a6f3837ea04424bee664d4e0f2b6a889c534b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5cb5717621a98317f232344d3d7a6f3837ea04424bee664d4e0f2b6a889c534b->leave($__internal_5cb5717621a98317f232344d3d7a6f3837ea04424bee664d4e0f2b6a889c534b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
