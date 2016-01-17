<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_5fdd5b38743e9b03eb87b1f07ff81f83a25097948127e2bac8ae6e4b9e46ba4c extends Twig_Template
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
        $__internal_28c453ad435ca91c91f6c7340d5bb128924c1f83b9e423d74ed256cb54eb5924 = $this->env->getExtension("native_profiler");
        $__internal_28c453ad435ca91c91f6c7340d5bb128924c1f83b9e423d74ed256cb54eb5924->enter($__internal_28c453ad435ca91c91f6c7340d5bb128924c1f83b9e423d74ed256cb54eb5924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_28c453ad435ca91c91f6c7340d5bb128924c1f83b9e423d74ed256cb54eb5924->leave($__internal_28c453ad435ca91c91f6c7340d5bb128924c1f83b9e423d74ed256cb54eb5924_prof);

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
