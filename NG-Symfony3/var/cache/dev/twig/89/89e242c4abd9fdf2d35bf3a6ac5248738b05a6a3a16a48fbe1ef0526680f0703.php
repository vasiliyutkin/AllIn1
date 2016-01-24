<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_553ffbea01bedc10e6f2d82befa69d902fa0383234c38a79ae7fb8b6446484ee extends Twig_Template
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
        $__internal_c05a0577a7c56a7d45b40683cfc9c69d5be37fc419e408e7a238ae6abce15e1f = $this->env->getExtension("native_profiler");
        $__internal_c05a0577a7c56a7d45b40683cfc9c69d5be37fc419e408e7a238ae6abce15e1f->enter($__internal_c05a0577a7c56a7d45b40683cfc9c69d5be37fc419e408e7a238ae6abce15e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c05a0577a7c56a7d45b40683cfc9c69d5be37fc419e408e7a238ae6abce15e1f->leave($__internal_c05a0577a7c56a7d45b40683cfc9c69d5be37fc419e408e7a238ae6abce15e1f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
