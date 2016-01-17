<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_7d3c066b9b6fe08689331f490be058ed76b9eb12f6714ef08153297630c5e252 extends Twig_Template
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
        $__internal_a8cd35917bcde8bc2af15600fae61dc3800771753d137034804f53c978b4449e = $this->env->getExtension("native_profiler");
        $__internal_a8cd35917bcde8bc2af15600fae61dc3800771753d137034804f53c978b4449e->enter($__internal_a8cd35917bcde8bc2af15600fae61dc3800771753d137034804f53c978b4449e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a8cd35917bcde8bc2af15600fae61dc3800771753d137034804f53c978b4449e->leave($__internal_a8cd35917bcde8bc2af15600fae61dc3800771753d137034804f53c978b4449e_prof);

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
