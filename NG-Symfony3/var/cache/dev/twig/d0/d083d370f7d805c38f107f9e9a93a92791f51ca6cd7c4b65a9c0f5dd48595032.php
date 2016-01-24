<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3769ca11ab56a7f78edb35a0ee594ee7054844aa4aca53489d2fec7bc1a4908e extends Twig_Template
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
        $__internal_905e915787ec4e3f7a7e25c758a85580ecf4c6a749e320661cf87f58f065bfad = $this->env->getExtension("native_profiler");
        $__internal_905e915787ec4e3f7a7e25c758a85580ecf4c6a749e320661cf87f58f065bfad->enter($__internal_905e915787ec4e3f7a7e25c758a85580ecf4c6a749e320661cf87f58f065bfad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_905e915787ec4e3f7a7e25c758a85580ecf4c6a749e320661cf87f58f065bfad->leave($__internal_905e915787ec4e3f7a7e25c758a85580ecf4c6a749e320661cf87f58f065bfad_prof);

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
