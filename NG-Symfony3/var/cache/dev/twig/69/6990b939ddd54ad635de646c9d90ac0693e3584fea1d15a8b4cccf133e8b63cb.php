<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0fb290afd8343a4123d9d19ed3a90998bb1f51899ef59b5f682fad691adf569c extends Twig_Template
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
        $__internal_029972f99a78c2e5c68265a2c8cb0020d31c8dc281553da6f9cfa606c317fbfb = $this->env->getExtension("native_profiler");
        $__internal_029972f99a78c2e5c68265a2c8cb0020d31c8dc281553da6f9cfa606c317fbfb->enter($__internal_029972f99a78c2e5c68265a2c8cb0020d31c8dc281553da6f9cfa606c317fbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_029972f99a78c2e5c68265a2c8cb0020d31c8dc281553da6f9cfa606c317fbfb->leave($__internal_029972f99a78c2e5c68265a2c8cb0020d31c8dc281553da6f9cfa606c317fbfb_prof);

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
