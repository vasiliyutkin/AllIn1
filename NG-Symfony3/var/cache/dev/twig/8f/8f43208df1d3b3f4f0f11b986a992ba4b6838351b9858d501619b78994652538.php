<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_73f1c2afa2d59de22dc542246faafd77d2865ede63193164624f2ac8ba5c32ed extends Twig_Template
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
        $__internal_d368892be1a835b33e955bc97fcb9cf86ec599ad422513bc70e2aa04bccd32fe = $this->env->getExtension("native_profiler");
        $__internal_d368892be1a835b33e955bc97fcb9cf86ec599ad422513bc70e2aa04bccd32fe->enter($__internal_d368892be1a835b33e955bc97fcb9cf86ec599ad422513bc70e2aa04bccd32fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d368892be1a835b33e955bc97fcb9cf86ec599ad422513bc70e2aa04bccd32fe->leave($__internal_d368892be1a835b33e955bc97fcb9cf86ec599ad422513bc70e2aa04bccd32fe_prof);

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
