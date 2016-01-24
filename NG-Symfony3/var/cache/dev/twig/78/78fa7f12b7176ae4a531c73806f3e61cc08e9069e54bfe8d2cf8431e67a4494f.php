<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0497958402e65829348b35d9214523870c8d25b9ce2f5986f32fd72dad68bb5a extends Twig_Template
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
        $__internal_1ea0f47d482453cf0ba0d528e3018322e9e65b75ae95fd4617c158e42433f3a6 = $this->env->getExtension("native_profiler");
        $__internal_1ea0f47d482453cf0ba0d528e3018322e9e65b75ae95fd4617c158e42433f3a6->enter($__internal_1ea0f47d482453cf0ba0d528e3018322e9e65b75ae95fd4617c158e42433f3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1ea0f47d482453cf0ba0d528e3018322e9e65b75ae95fd4617c158e42433f3a6->leave($__internal_1ea0f47d482453cf0ba0d528e3018322e9e65b75ae95fd4617c158e42433f3a6_prof);

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
