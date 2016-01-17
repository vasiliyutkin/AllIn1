<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4a8838bfffb389028dc7e636969917a19e882053051f779ca9429bc3ee9f9cd4 extends Twig_Template
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
        $__internal_44cb6da340ffd4f5e7c7cc69adf1b254b4b668b542df46350a83360b04af6308 = $this->env->getExtension("native_profiler");
        $__internal_44cb6da340ffd4f5e7c7cc69adf1b254b4b668b542df46350a83360b04af6308->enter($__internal_44cb6da340ffd4f5e7c7cc69adf1b254b4b668b542df46350a83360b04af6308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_44cb6da340ffd4f5e7c7cc69adf1b254b4b668b542df46350a83360b04af6308->leave($__internal_44cb6da340ffd4f5e7c7cc69adf1b254b4b668b542df46350a83360b04af6308_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc421f7858168e0b944b98be4606c732b30f3d691e2fdc7a293f30c196862d8b = $this->env->getExtension("native_profiler");
        $__internal_cc421f7858168e0b944b98be4606c732b30f3d691e2fdc7a293f30c196862d8b->enter($__internal_cc421f7858168e0b944b98be4606c732b30f3d691e2fdc7a293f30c196862d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cc421f7858168e0b944b98be4606c732b30f3d691e2fdc7a293f30c196862d8b->leave($__internal_cc421f7858168e0b944b98be4606c732b30f3d691e2fdc7a293f30c196862d8b_prof);

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
