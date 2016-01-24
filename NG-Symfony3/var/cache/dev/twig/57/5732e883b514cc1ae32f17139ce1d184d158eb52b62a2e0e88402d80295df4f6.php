<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_62d94e1453e944d750da73f87f5156cdb5fe20aa252ed02d7158cd19e07884ea extends Twig_Template
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
        $__internal_fcbf410dd6721122aa060a97eb8e962b3646c7986ae1c669ab120036890128d3 = $this->env->getExtension("native_profiler");
        $__internal_fcbf410dd6721122aa060a97eb8e962b3646c7986ae1c669ab120036890128d3->enter($__internal_fcbf410dd6721122aa060a97eb8e962b3646c7986ae1c669ab120036890128d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fcbf410dd6721122aa060a97eb8e962b3646c7986ae1c669ab120036890128d3->leave($__internal_fcbf410dd6721122aa060a97eb8e962b3646c7986ae1c669ab120036890128d3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8bccdb3ee04e51acfb6b00e0f5db48b64b3b9f0c0919467df3ea44c1c625e96a = $this->env->getExtension("native_profiler");
        $__internal_8bccdb3ee04e51acfb6b00e0f5db48b64b3b9f0c0919467df3ea44c1c625e96a->enter($__internal_8bccdb3ee04e51acfb6b00e0f5db48b64b3b9f0c0919467df3ea44c1c625e96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8bccdb3ee04e51acfb6b00e0f5db48b64b3b9f0c0919467df3ea44c1c625e96a->leave($__internal_8bccdb3ee04e51acfb6b00e0f5db48b64b3b9f0c0919467df3ea44c1c625e96a_prof);

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
