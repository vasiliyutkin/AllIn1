<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d97499a439f055500f1be823f94904bd4c6c3b92c42c6c341ea52dbd9c4599f4 extends Twig_Template
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
        $__internal_1201efe31da22bbdd74c0154f2fa56ebf0937a7c72f080836c74aebd802adc07 = $this->env->getExtension("native_profiler");
        $__internal_1201efe31da22bbdd74c0154f2fa56ebf0937a7c72f080836c74aebd802adc07->enter($__internal_1201efe31da22bbdd74c0154f2fa56ebf0937a7c72f080836c74aebd802adc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1201efe31da22bbdd74c0154f2fa56ebf0937a7c72f080836c74aebd802adc07->leave($__internal_1201efe31da22bbdd74c0154f2fa56ebf0937a7c72f080836c74aebd802adc07_prof);

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
