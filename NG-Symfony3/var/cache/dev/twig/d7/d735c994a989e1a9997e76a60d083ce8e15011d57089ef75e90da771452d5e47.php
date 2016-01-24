<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_15c376089ce2e7ccf066c0afaabeb7ced8a9f45289df87b98add11c5cf587c18 extends Twig_Template
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
        $__internal_ae1f2eeeda164ab314af9bfbeeb4b112ca1094775ee391341075cd45dbc2084f = $this->env->getExtension("native_profiler");
        $__internal_ae1f2eeeda164ab314af9bfbeeb4b112ca1094775ee391341075cd45dbc2084f->enter($__internal_ae1f2eeeda164ab314af9bfbeeb4b112ca1094775ee391341075cd45dbc2084f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ae1f2eeeda164ab314af9bfbeeb4b112ca1094775ee391341075cd45dbc2084f->leave($__internal_ae1f2eeeda164ab314af9bfbeeb4b112ca1094775ee391341075cd45dbc2084f_prof);

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
