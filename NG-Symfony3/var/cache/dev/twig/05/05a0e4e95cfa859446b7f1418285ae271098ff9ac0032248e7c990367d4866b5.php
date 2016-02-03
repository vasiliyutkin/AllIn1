<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a5b8e3da88abced267c3409b33e27983e7414e7bf9ee6dd8e07de95895d460bb extends Twig_Template
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
        $__internal_4459221c8cbcab7671f563b247f1d06a40f99129fa77d9b4a9a46db715e9f691 = $this->env->getExtension("native_profiler");
        $__internal_4459221c8cbcab7671f563b247f1d06a40f99129fa77d9b4a9a46db715e9f691->enter($__internal_4459221c8cbcab7671f563b247f1d06a40f99129fa77d9b4a9a46db715e9f691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_4459221c8cbcab7671f563b247f1d06a40f99129fa77d9b4a9a46db715e9f691->leave($__internal_4459221c8cbcab7671f563b247f1d06a40f99129fa77d9b4a9a46db715e9f691_prof);

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
