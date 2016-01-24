<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_8fc949fc94873dd8ba883d09f4a9d2b562cda488499ab540156212dd1e7d27d0 extends Twig_Template
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
        $__internal_df6f43fe067e0d6d9f93bb947a6bc6cc21f36213484fc3fea2afc9a945807d7e = $this->env->getExtension("native_profiler");
        $__internal_df6f43fe067e0d6d9f93bb947a6bc6cc21f36213484fc3fea2afc9a945807d7e->enter($__internal_df6f43fe067e0d6d9f93bb947a6bc6cc21f36213484fc3fea2afc9a945807d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_df6f43fe067e0d6d9f93bb947a6bc6cc21f36213484fc3fea2afc9a945807d7e->leave($__internal_df6f43fe067e0d6d9f93bb947a6bc6cc21f36213484fc3fea2afc9a945807d7e_prof);

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
