<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_addf9dfe9b99c2d37e661e426bd2c5ba8b6e2b8161e4e79dc56597929c403664 extends Twig_Template
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
        $__internal_fecf64bd0e663fbeb6a40cdd9ba70e1a5a856727c3ae5a09f9cda40443294b20 = $this->env->getExtension("native_profiler");
        $__internal_fecf64bd0e663fbeb6a40cdd9ba70e1a5a856727c3ae5a09f9cda40443294b20->enter($__internal_fecf64bd0e663fbeb6a40cdd9ba70e1a5a856727c3ae5a09f9cda40443294b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_fecf64bd0e663fbeb6a40cdd9ba70e1a5a856727c3ae5a09f9cda40443294b20->leave($__internal_fecf64bd0e663fbeb6a40cdd9ba70e1a5a856727c3ae5a09f9cda40443294b20_prof);

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
