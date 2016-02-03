<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3c4b931a750ad17720db7f859d88a1159f9abf6de5b47090983ea11c39f121be extends Twig_Template
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
        $__internal_062f61103373789d944dcbb962551b4de9f971b2a7df81a8f2313777328e3b16 = $this->env->getExtension("native_profiler");
        $__internal_062f61103373789d944dcbb962551b4de9f971b2a7df81a8f2313777328e3b16->enter($__internal_062f61103373789d944dcbb962551b4de9f971b2a7df81a8f2313777328e3b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_062f61103373789d944dcbb962551b4de9f971b2a7df81a8f2313777328e3b16->leave($__internal_062f61103373789d944dcbb962551b4de9f971b2a7df81a8f2313777328e3b16_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
