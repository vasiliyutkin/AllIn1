<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_15e12b29dee9b6cb19b1529e335308a5dcfafa767dd5ebc80121af68b88e97ae extends Twig_Template
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
        $__internal_495f4288ce7cde0225baf55299566033704bfa8cf1f82fc6146ce0ec06452334 = $this->env->getExtension("native_profiler");
        $__internal_495f4288ce7cde0225baf55299566033704bfa8cf1f82fc6146ce0ec06452334->enter($__internal_495f4288ce7cde0225baf55299566033704bfa8cf1f82fc6146ce0ec06452334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_495f4288ce7cde0225baf55299566033704bfa8cf1f82fc6146ce0ec06452334->leave($__internal_495f4288ce7cde0225baf55299566033704bfa8cf1f82fc6146ce0ec06452334_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
