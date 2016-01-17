<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a14237e4df3674b68ea785b2116bbd60a34adecbb0f1ba8bdb56bfbfaaa79104 extends Twig_Template
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
        $__internal_2d6c93a88df5ea7a30957d177993cfba87709e76dda8606e874cf74b30df2cd5 = $this->env->getExtension("native_profiler");
        $__internal_2d6c93a88df5ea7a30957d177993cfba87709e76dda8606e874cf74b30df2cd5->enter($__internal_2d6c93a88df5ea7a30957d177993cfba87709e76dda8606e874cf74b30df2cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2d6c93a88df5ea7a30957d177993cfba87709e76dda8606e874cf74b30df2cd5->leave($__internal_2d6c93a88df5ea7a30957d177993cfba87709e76dda8606e874cf74b30df2cd5_prof);

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
