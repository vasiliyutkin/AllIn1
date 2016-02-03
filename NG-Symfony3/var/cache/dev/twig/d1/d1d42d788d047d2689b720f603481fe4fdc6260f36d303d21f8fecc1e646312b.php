<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_af4705847149aec026c39ff45263f5af8b0961eb729122f4ef3f990e61f8c440 extends Twig_Template
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
        $__internal_cbd0b8dbcf216deca6d75032b032b79504ba53a59c0d530f2689ebc128034882 = $this->env->getExtension("native_profiler");
        $__internal_cbd0b8dbcf216deca6d75032b032b79504ba53a59c0d530f2689ebc128034882->enter($__internal_cbd0b8dbcf216deca6d75032b032b79504ba53a59c0d530f2689ebc128034882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cbd0b8dbcf216deca6d75032b032b79504ba53a59c0d530f2689ebc128034882->leave($__internal_cbd0b8dbcf216deca6d75032b032b79504ba53a59c0d530f2689ebc128034882_prof);

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
