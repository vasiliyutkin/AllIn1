<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_198f251504e8e655645f0e1eeaa15130ac3032aa585c85690816ce2d20f7404f extends Twig_Template
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
        $__internal_0e5109394b6dc1052f91f17d0b6f9c37c3e3c48386960161b564833296e69c30 = $this->env->getExtension("native_profiler");
        $__internal_0e5109394b6dc1052f91f17d0b6f9c37c3e3c48386960161b564833296e69c30->enter($__internal_0e5109394b6dc1052f91f17d0b6f9c37c3e3c48386960161b564833296e69c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0e5109394b6dc1052f91f17d0b6f9c37c3e3c48386960161b564833296e69c30->leave($__internal_0e5109394b6dc1052f91f17d0b6f9c37c3e3c48386960161b564833296e69c30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
