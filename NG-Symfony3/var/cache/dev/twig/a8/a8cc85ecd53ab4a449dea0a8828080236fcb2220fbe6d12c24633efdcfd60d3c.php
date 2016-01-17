<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_13119e31cf654bb7ccc9da6ee01f8bfb0bc7d68015c3330a3b505970503c5b18 extends Twig_Template
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
        $__internal_c8d8e11ab2d45a07a0cdd2f23d931f4fd027c84ead964ff8ba5536ada316264a = $this->env->getExtension("native_profiler");
        $__internal_c8d8e11ab2d45a07a0cdd2f23d931f4fd027c84ead964ff8ba5536ada316264a->enter($__internal_c8d8e11ab2d45a07a0cdd2f23d931f4fd027c84ead964ff8ba5536ada316264a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c8d8e11ab2d45a07a0cdd2f23d931f4fd027c84ead964ff8ba5536ada316264a->leave($__internal_c8d8e11ab2d45a07a0cdd2f23d931f4fd027c84ead964ff8ba5536ada316264a_prof);

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
