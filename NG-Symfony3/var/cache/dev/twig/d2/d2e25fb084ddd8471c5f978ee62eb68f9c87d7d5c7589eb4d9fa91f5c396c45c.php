<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_49032bc1399fbe70aee67219f2bc9f62a77b8a4a0d36b6c102b7b5fea518f003 extends Twig_Template
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
        $__internal_c197cb50f4c063a62e69af512f3f3487d84074d097b8ada9b2568e55edd67ee1 = $this->env->getExtension("native_profiler");
        $__internal_c197cb50f4c063a62e69af512f3f3487d84074d097b8ada9b2568e55edd67ee1->enter($__internal_c197cb50f4c063a62e69af512f3f3487d84074d097b8ada9b2568e55edd67ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c197cb50f4c063a62e69af512f3f3487d84074d097b8ada9b2568e55edd67ee1->leave($__internal_c197cb50f4c063a62e69af512f3f3487d84074d097b8ada9b2568e55edd67ee1_prof);

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
