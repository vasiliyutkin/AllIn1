<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6094f5b3d29a53d0878427af1b597c5fef08481442778baf94cd205774151dda extends Twig_Template
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
        $__internal_3d5b5f07b653dbf21ce35a52cfa3e2e695928cb091430a2c43e57eddaf3913f0 = $this->env->getExtension("native_profiler");
        $__internal_3d5b5f07b653dbf21ce35a52cfa3e2e695928cb091430a2c43e57eddaf3913f0->enter($__internal_3d5b5f07b653dbf21ce35a52cfa3e2e695928cb091430a2c43e57eddaf3913f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3d5b5f07b653dbf21ce35a52cfa3e2e695928cb091430a2c43e57eddaf3913f0->leave($__internal_3d5b5f07b653dbf21ce35a52cfa3e2e695928cb091430a2c43e57eddaf3913f0_prof);

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
