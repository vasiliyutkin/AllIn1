<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7ebf9b84c05b6e15e74ff7a7c2fe78b671c2f7e1107998f5ce7ab401c943d75c extends Twig_Template
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
        $__internal_bbe85d6b27a64ce70df01ebb98b999f438bcfb0749d6f1e978b083dd1b674c09 = $this->env->getExtension("native_profiler");
        $__internal_bbe85d6b27a64ce70df01ebb98b999f438bcfb0749d6f1e978b083dd1b674c09->enter($__internal_bbe85d6b27a64ce70df01ebb98b999f438bcfb0749d6f1e978b083dd1b674c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bbe85d6b27a64ce70df01ebb98b999f438bcfb0749d6f1e978b083dd1b674c09->leave($__internal_bbe85d6b27a64ce70df01ebb98b999f438bcfb0749d6f1e978b083dd1b674c09_prof);

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
