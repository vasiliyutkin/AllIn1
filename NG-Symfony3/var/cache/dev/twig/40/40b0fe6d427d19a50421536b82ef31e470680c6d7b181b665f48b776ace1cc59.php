<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_34bbfe3d0fc3ba4f82a9cf227eadfe6266b1b6f49cb5bba47af2e6d4f3d4a658 extends Twig_Template
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
        $__internal_f7b582731238da49eec129d2b5b45c203075d98204eef9a7728ff87751386f32 = $this->env->getExtension("native_profiler");
        $__internal_f7b582731238da49eec129d2b5b45c203075d98204eef9a7728ff87751386f32->enter($__internal_f7b582731238da49eec129d2b5b45c203075d98204eef9a7728ff87751386f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f7b582731238da49eec129d2b5b45c203075d98204eef9a7728ff87751386f32->leave($__internal_f7b582731238da49eec129d2b5b45c203075d98204eef9a7728ff87751386f32_prof);

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
