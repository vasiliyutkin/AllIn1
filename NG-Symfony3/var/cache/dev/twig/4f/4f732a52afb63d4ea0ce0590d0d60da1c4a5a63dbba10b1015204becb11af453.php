<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e97366af6afa951d7b7197608b2c2f3c368144820557ba464dc23cc5d369d697 extends Twig_Template
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
        $__internal_2cae85b0bd5cfd684423789e5dc2c08539177e60a73ef2203b95fe6952e2a9ad = $this->env->getExtension("native_profiler");
        $__internal_2cae85b0bd5cfd684423789e5dc2c08539177e60a73ef2203b95fe6952e2a9ad->enter($__internal_2cae85b0bd5cfd684423789e5dc2c08539177e60a73ef2203b95fe6952e2a9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_2cae85b0bd5cfd684423789e5dc2c08539177e60a73ef2203b95fe6952e2a9ad->leave($__internal_2cae85b0bd5cfd684423789e5dc2c08539177e60a73ef2203b95fe6952e2a9ad_prof);

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
