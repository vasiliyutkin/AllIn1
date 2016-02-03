<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3adc6982a80b7424ce615bb88692bd93c6f87d122072c4e7e415975f60520b2c extends Twig_Template
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
        $__internal_1fda3ed2876d57a8ea574f90b1bcb32ec4c7d5c7b55ffad2087c9f6022264067 = $this->env->getExtension("native_profiler");
        $__internal_1fda3ed2876d57a8ea574f90b1bcb32ec4c7d5c7b55ffad2087c9f6022264067->enter($__internal_1fda3ed2876d57a8ea574f90b1bcb32ec4c7d5c7b55ffad2087c9f6022264067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1fda3ed2876d57a8ea574f90b1bcb32ec4c7d5c7b55ffad2087c9f6022264067->leave($__internal_1fda3ed2876d57a8ea574f90b1bcb32ec4c7d5c7b55ffad2087c9f6022264067_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
