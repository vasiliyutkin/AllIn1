<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c566691552f6455c0a6679dcb81399b92ed0e9efa4ecf50b0f7e02ee9b5985e9 extends Twig_Template
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
        $__internal_7f85429ec21934434e1a5a0c3af6ed239a63f0a26e351cdfdcbbaae2aca4c0d1 = $this->env->getExtension("native_profiler");
        $__internal_7f85429ec21934434e1a5a0c3af6ed239a63f0a26e351cdfdcbbaae2aca4c0d1->enter($__internal_7f85429ec21934434e1a5a0c3af6ed239a63f0a26e351cdfdcbbaae2aca4c0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7f85429ec21934434e1a5a0c3af6ed239a63f0a26e351cdfdcbbaae2aca4c0d1->leave($__internal_7f85429ec21934434e1a5a0c3af6ed239a63f0a26e351cdfdcbbaae2aca4c0d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
