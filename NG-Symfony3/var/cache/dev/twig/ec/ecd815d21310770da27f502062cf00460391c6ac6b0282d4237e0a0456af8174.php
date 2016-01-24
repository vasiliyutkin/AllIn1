<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_254eae5020f3016a7c77238040b46b9af4083f20a5a8d431f774025676aa3864 extends Twig_Template
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
        $__internal_5d32ee9815ed9f50ffa21782a2105b7df83b12491211fd0256d199cfbea06193 = $this->env->getExtension("native_profiler");
        $__internal_5d32ee9815ed9f50ffa21782a2105b7df83b12491211fd0256d199cfbea06193->enter($__internal_5d32ee9815ed9f50ffa21782a2105b7df83b12491211fd0256d199cfbea06193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5d32ee9815ed9f50ffa21782a2105b7df83b12491211fd0256d199cfbea06193->leave($__internal_5d32ee9815ed9f50ffa21782a2105b7df83b12491211fd0256d199cfbea06193_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
