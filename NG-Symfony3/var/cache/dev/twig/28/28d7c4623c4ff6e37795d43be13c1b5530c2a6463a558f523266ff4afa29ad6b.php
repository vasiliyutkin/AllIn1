<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0f968680ef87a48afe8c3c8f9d0860c2fdebe89b4b2e4d507139be3c7726c0b7 extends Twig_Template
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
        $__internal_bac2b7636bd5a07a713bee51c4782648ba3cec7827a4d9ae53bfed6c2145d58a = $this->env->getExtension("native_profiler");
        $__internal_bac2b7636bd5a07a713bee51c4782648ba3cec7827a4d9ae53bfed6c2145d58a->enter($__internal_bac2b7636bd5a07a713bee51c4782648ba3cec7827a4d9ae53bfed6c2145d58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bac2b7636bd5a07a713bee51c4782648ba3cec7827a4d9ae53bfed6c2145d58a->leave($__internal_bac2b7636bd5a07a713bee51c4782648ba3cec7827a4d9ae53bfed6c2145d58a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
