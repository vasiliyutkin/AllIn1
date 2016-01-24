<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_71303a4bd45db7096d946ded8d98ef5bb79f9772ecf471033bfb4db344b12e4a extends Twig_Template
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
        $__internal_20ddaeaa4403dee0c13d316ea3ae84db78b9d855482d9833b1cac8caba37fc6a = $this->env->getExtension("native_profiler");
        $__internal_20ddaeaa4403dee0c13d316ea3ae84db78b9d855482d9833b1cac8caba37fc6a->enter($__internal_20ddaeaa4403dee0c13d316ea3ae84db78b9d855482d9833b1cac8caba37fc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_20ddaeaa4403dee0c13d316ea3ae84db78b9d855482d9833b1cac8caba37fc6a->leave($__internal_20ddaeaa4403dee0c13d316ea3ae84db78b9d855482d9833b1cac8caba37fc6a_prof);

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
