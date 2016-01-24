<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d32cf0051578911ed9fd9d5198079d0d93c5514e2784a4885f3c5c9468d82da4 extends Twig_Template
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
        $__internal_02650797cb12a32c95f4bf76bd18ec20d037c2855cb473cc5a9649f9279b59b7 = $this->env->getExtension("native_profiler");
        $__internal_02650797cb12a32c95f4bf76bd18ec20d037c2855cb473cc5a9649f9279b59b7->enter($__internal_02650797cb12a32c95f4bf76bd18ec20d037c2855cb473cc5a9649f9279b59b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_02650797cb12a32c95f4bf76bd18ec20d037c2855cb473cc5a9649f9279b59b7->leave($__internal_02650797cb12a32c95f4bf76bd18ec20d037c2855cb473cc5a9649f9279b59b7_prof);

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
