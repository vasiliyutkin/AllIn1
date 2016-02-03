<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_71e8732baf2b5703066e01a1251382c7de9aca9db2c32c2f80a35b5ccdce6a0d extends Twig_Template
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
        $__internal_e2ee6153488ec573e5404625c914d2886c057370fb4ded2ce0c2a4a82feb8f82 = $this->env->getExtension("native_profiler");
        $__internal_e2ee6153488ec573e5404625c914d2886c057370fb4ded2ce0c2a4a82feb8f82->enter($__internal_e2ee6153488ec573e5404625c914d2886c057370fb4ded2ce0c2a4a82feb8f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e2ee6153488ec573e5404625c914d2886c057370fb4ded2ce0c2a4a82feb8f82->leave($__internal_e2ee6153488ec573e5404625c914d2886c057370fb4ded2ce0c2a4a82feb8f82_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
