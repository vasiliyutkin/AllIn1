<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_da3218718bd2bbbb93a3e13f778f8ab03d767e2656e1fd572d24cd84709447fc extends Twig_Template
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
        $__internal_13a39b01c2cc0053d5e924706ab81c298f8ce634928f7303617cd7ba50db4bf6 = $this->env->getExtension("native_profiler");
        $__internal_13a39b01c2cc0053d5e924706ab81c298f8ce634928f7303617cd7ba50db4bf6->enter($__internal_13a39b01c2cc0053d5e924706ab81c298f8ce634928f7303617cd7ba50db4bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_13a39b01c2cc0053d5e924706ab81c298f8ce634928f7303617cd7ba50db4bf6->leave($__internal_13a39b01c2cc0053d5e924706ab81c298f8ce634928f7303617cd7ba50db4bf6_prof);

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
