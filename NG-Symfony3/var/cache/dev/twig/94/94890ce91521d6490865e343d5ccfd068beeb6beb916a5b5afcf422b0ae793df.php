<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_927626ae6d82419d76b4f6986660cf079bbb6be13c49c8038724c65a1617335a extends Twig_Template
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
        $__internal_a98f86e0352b8bb084b6f5979faf17fe759b5cd5164d173a4a093e1e3c6538f6 = $this->env->getExtension("native_profiler");
        $__internal_a98f86e0352b8bb084b6f5979faf17fe759b5cd5164d173a4a093e1e3c6538f6->enter($__internal_a98f86e0352b8bb084b6f5979faf17fe759b5cd5164d173a4a093e1e3c6538f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a98f86e0352b8bb084b6f5979faf17fe759b5cd5164d173a4a093e1e3c6538f6->leave($__internal_a98f86e0352b8bb084b6f5979faf17fe759b5cd5164d173a4a093e1e3c6538f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
