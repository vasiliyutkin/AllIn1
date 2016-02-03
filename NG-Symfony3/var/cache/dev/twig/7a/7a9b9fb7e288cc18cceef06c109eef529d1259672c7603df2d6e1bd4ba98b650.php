<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_cd8353c55dedfcd77a3e241a85809cdb5237680a067cd4c2704557bbcf9c3f85 extends Twig_Template
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
        $__internal_00a08ad12a85255cb0c83a806b222c57b9d61212bdcbfcbf9cf35e9b4211880f = $this->env->getExtension("native_profiler");
        $__internal_00a08ad12a85255cb0c83a806b222c57b9d61212bdcbfcbf9cf35e9b4211880f->enter($__internal_00a08ad12a85255cb0c83a806b222c57b9d61212bdcbfcbf9cf35e9b4211880f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_00a08ad12a85255cb0c83a806b222c57b9d61212bdcbfcbf9cf35e9b4211880f->leave($__internal_00a08ad12a85255cb0c83a806b222c57b9d61212bdcbfcbf9cf35e9b4211880f_prof);

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
