<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_fb1e9b4f2947afd8b4d254422416c044a4b03bb4a44d7af9bfe3ddc95dd7a5c1 extends Twig_Template
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
        $__internal_e2bbaed08ab69bb119557758c98fb24e85508f6924aa4eb3a63d0682e097473b = $this->env->getExtension("native_profiler");
        $__internal_e2bbaed08ab69bb119557758c98fb24e85508f6924aa4eb3a63d0682e097473b->enter($__internal_e2bbaed08ab69bb119557758c98fb24e85508f6924aa4eb3a63d0682e097473b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e2bbaed08ab69bb119557758c98fb24e85508f6924aa4eb3a63d0682e097473b->leave($__internal_e2bbaed08ab69bb119557758c98fb24e85508f6924aa4eb3a63d0682e097473b_prof);

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
