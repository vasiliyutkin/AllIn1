<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6d2943e3f53374cbb1fdfd8cd1f86882c985aa2a1655ba267bdab0382fcd300b extends Twig_Template
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
        $__internal_dc853743a700d081834f40d28f99f0e4d4224c0ef60c8a46648e4c37a97c1e59 = $this->env->getExtension("native_profiler");
        $__internal_dc853743a700d081834f40d28f99f0e4d4224c0ef60c8a46648e4c37a97c1e59->enter($__internal_dc853743a700d081834f40d28f99f0e4d4224c0ef60c8a46648e4c37a97c1e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_dc853743a700d081834f40d28f99f0e4d4224c0ef60c8a46648e4c37a97c1e59->leave($__internal_dc853743a700d081834f40d28f99f0e4d4224c0ef60c8a46648e4c37a97c1e59_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
