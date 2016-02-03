<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9d1a9cfb01253d80381bea6f462fc05b79b377459c8e5781a0c2d72189c4aa28 extends Twig_Template
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
        $__internal_c71eb9dd9d28771510e71bc0bbe4de4bfa1d694586624742b2a1213773242080 = $this->env->getExtension("native_profiler");
        $__internal_c71eb9dd9d28771510e71bc0bbe4de4bfa1d694586624742b2a1213773242080->enter($__internal_c71eb9dd9d28771510e71bc0bbe4de4bfa1d694586624742b2a1213773242080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c71eb9dd9d28771510e71bc0bbe4de4bfa1d694586624742b2a1213773242080->leave($__internal_c71eb9dd9d28771510e71bc0bbe4de4bfa1d694586624742b2a1213773242080_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
