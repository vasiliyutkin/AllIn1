<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0ff1dca418e397f9d0cb5eaf5a24a778ab35420811ed3174021ecf34d56dea15 extends Twig_Template
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
        $__internal_f1d16710411c6df5848d7f6fc1bfa4e6c9f684e2b8bd56c6a6aece189da6a53d = $this->env->getExtension("native_profiler");
        $__internal_f1d16710411c6df5848d7f6fc1bfa4e6c9f684e2b8bd56c6a6aece189da6a53d->enter($__internal_f1d16710411c6df5848d7f6fc1bfa4e6c9f684e2b8bd56c6a6aece189da6a53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_f1d16710411c6df5848d7f6fc1bfa4e6c9f684e2b8bd56c6a6aece189da6a53d->leave($__internal_f1d16710411c6df5848d7f6fc1bfa4e6c9f684e2b8bd56c6a6aece189da6a53d_prof);

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
