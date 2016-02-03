<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_541e06bb53065a23667af10059d5a8acc2f72436cd9e9c288b58761822b2d79f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a825223563c0069f9c0ba69230c2d9538b3ba6eaab9a5687acde9a45d5946087 = $this->env->getExtension("native_profiler");
        $__internal_a825223563c0069f9c0ba69230c2d9538b3ba6eaab9a5687acde9a45d5946087->enter($__internal_a825223563c0069f9c0ba69230c2d9538b3ba6eaab9a5687acde9a45d5946087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a825223563c0069f9c0ba69230c2d9538b3ba6eaab9a5687acde9a45d5946087->leave($__internal_a825223563c0069f9c0ba69230c2d9538b3ba6eaab9a5687acde9a45d5946087_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_07a1cdffe012c83c6c6e8c22da62db4aa51082e59a70f81def4bf35606916f2c = $this->env->getExtension("native_profiler");
        $__internal_07a1cdffe012c83c6c6e8c22da62db4aa51082e59a70f81def4bf35606916f2c->enter($__internal_07a1cdffe012c83c6c6e8c22da62db4aa51082e59a70f81def4bf35606916f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_07a1cdffe012c83c6c6e8c22da62db4aa51082e59a70f81def4bf35606916f2c->leave($__internal_07a1cdffe012c83c6c6e8c22da62db4aa51082e59a70f81def4bf35606916f2c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
