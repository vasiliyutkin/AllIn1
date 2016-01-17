<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_6e46a33c08ff0cdc7e669d1d1be80b76c6b99949724ba871f8bf561b80c312df extends Twig_Template
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
        $__internal_bb8be93c51367f88065719a459a8d158f8975cf5636bebd63346dae8d230b59a = $this->env->getExtension("native_profiler");
        $__internal_bb8be93c51367f88065719a459a8d158f8975cf5636bebd63346dae8d230b59a->enter($__internal_bb8be93c51367f88065719a459a8d158f8975cf5636bebd63346dae8d230b59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bb8be93c51367f88065719a459a8d158f8975cf5636bebd63346dae8d230b59a->leave($__internal_bb8be93c51367f88065719a459a8d158f8975cf5636bebd63346dae8d230b59a_prof);

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
