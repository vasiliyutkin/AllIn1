<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_9c5e47e2ef90b97e59e79ea69e4d7fdc98fce2ca3ac76237bb49f6ad57538b92 extends Twig_Template
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
        $__internal_a207a4190583fe313ebfc5e7f6e02f6a482123694c4ab9c261fca4416004057c = $this->env->getExtension("native_profiler");
        $__internal_a207a4190583fe313ebfc5e7f6e02f6a482123694c4ab9c261fca4416004057c->enter($__internal_a207a4190583fe313ebfc5e7f6e02f6a482123694c4ab9c261fca4416004057c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a207a4190583fe313ebfc5e7f6e02f6a482123694c4ab9c261fca4416004057c->leave($__internal_a207a4190583fe313ebfc5e7f6e02f6a482123694c4ab9c261fca4416004057c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
