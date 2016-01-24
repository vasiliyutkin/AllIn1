<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_237a5ce2af0dc432f5deb6945b1711a57c7fce0b7c2b3295ea6cca1fb6133b65 extends Twig_Template
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
        $__internal_cc1e5181621fec0fc9bb4099b7ad577c631a5ef873e3b96f08631b396b6378ce = $this->env->getExtension("native_profiler");
        $__internal_cc1e5181621fec0fc9bb4099b7ad577c631a5ef873e3b96f08631b396b6378ce->enter($__internal_cc1e5181621fec0fc9bb4099b7ad577c631a5ef873e3b96f08631b396b6378ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_cc1e5181621fec0fc9bb4099b7ad577c631a5ef873e3b96f08631b396b6378ce->leave($__internal_cc1e5181621fec0fc9bb4099b7ad577c631a5ef873e3b96f08631b396b6378ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
