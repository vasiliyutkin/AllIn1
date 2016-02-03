<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a6b9aab814cbf92946cc44119c0e4c31a4917f20bbc5d600c2d00a669c20228e extends Twig_Template
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
        $__internal_d5bfadd3da6b8d50530c2087ad4c8392f7b6d2f49780318c00445ad3b5afe6c4 = $this->env->getExtension("native_profiler");
        $__internal_d5bfadd3da6b8d50530c2087ad4c8392f7b6d2f49780318c00445ad3b5afe6c4->enter($__internal_d5bfadd3da6b8d50530c2087ad4c8392f7b6d2f49780318c00445ad3b5afe6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d5bfadd3da6b8d50530c2087ad4c8392f7b6d2f49780318c00445ad3b5afe6c4->leave($__internal_d5bfadd3da6b8d50530c2087ad4c8392f7b6d2f49780318c00445ad3b5afe6c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
