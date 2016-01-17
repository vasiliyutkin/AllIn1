<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f1a68886bad99e8b05d1220fdddc1dff7516fb566eb9c4d33bd7d0cc4d1e8d61 extends Twig_Template
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
        $__internal_411b30504eaa91b003047cbd19513b340f5a2fdafb30ac59814f25e1f5ee79d9 = $this->env->getExtension("native_profiler");
        $__internal_411b30504eaa91b003047cbd19513b340f5a2fdafb30ac59814f25e1f5ee79d9->enter($__internal_411b30504eaa91b003047cbd19513b340f5a2fdafb30ac59814f25e1f5ee79d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_411b30504eaa91b003047cbd19513b340f5a2fdafb30ac59814f25e1f5ee79d9->leave($__internal_411b30504eaa91b003047cbd19513b340f5a2fdafb30ac59814f25e1f5ee79d9_prof);

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
