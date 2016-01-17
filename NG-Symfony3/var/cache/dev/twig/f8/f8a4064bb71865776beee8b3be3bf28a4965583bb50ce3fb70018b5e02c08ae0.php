<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_46c21415924d54767c350875add98305cf93a57a8e49ed1dc6101209473d0f42 extends Twig_Template
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
        $__internal_0d14a72163efaf7067ce6514f4c34ef15a4f13e291dd0b49781aa8280175af22 = $this->env->getExtension("native_profiler");
        $__internal_0d14a72163efaf7067ce6514f4c34ef15a4f13e291dd0b49781aa8280175af22->enter($__internal_0d14a72163efaf7067ce6514f4c34ef15a4f13e291dd0b49781aa8280175af22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0d14a72163efaf7067ce6514f4c34ef15a4f13e291dd0b49781aa8280175af22->leave($__internal_0d14a72163efaf7067ce6514f4c34ef15a4f13e291dd0b49781aa8280175af22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
