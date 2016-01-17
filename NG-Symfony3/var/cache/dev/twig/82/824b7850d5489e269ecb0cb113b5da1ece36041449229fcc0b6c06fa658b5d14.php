<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_596ee405eb46f141590525fc7a6d342b382b511a1ee903359593ed301e9f5e0e extends Twig_Template
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
        $__internal_2a6ad58a98f22a435471927356626ec84f85d788415d8e16ea798a5a4190113b = $this->env->getExtension("native_profiler");
        $__internal_2a6ad58a98f22a435471927356626ec84f85d788415d8e16ea798a5a4190113b->enter($__internal_2a6ad58a98f22a435471927356626ec84f85d788415d8e16ea798a5a4190113b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2a6ad58a98f22a435471927356626ec84f85d788415d8e16ea798a5a4190113b->leave($__internal_2a6ad58a98f22a435471927356626ec84f85d788415d8e16ea798a5a4190113b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
