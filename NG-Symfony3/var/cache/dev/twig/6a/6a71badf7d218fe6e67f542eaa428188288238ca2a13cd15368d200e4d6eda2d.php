<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_cc7a2a759585cf548293191ff9a8d71dff0c402028f0ecd0c3335d8770a566c2 extends Twig_Template
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
        $__internal_2ece77930dcaf90ecc975d9035cf3245c6a1d59a1f1318490d278e7807236d14 = $this->env->getExtension("native_profiler");
        $__internal_2ece77930dcaf90ecc975d9035cf3245c6a1d59a1f1318490d278e7807236d14->enter($__internal_2ece77930dcaf90ecc975d9035cf3245c6a1d59a1f1318490d278e7807236d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_2ece77930dcaf90ecc975d9035cf3245c6a1d59a1f1318490d278e7807236d14->leave($__internal_2ece77930dcaf90ecc975d9035cf3245c6a1d59a1f1318490d278e7807236d14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
