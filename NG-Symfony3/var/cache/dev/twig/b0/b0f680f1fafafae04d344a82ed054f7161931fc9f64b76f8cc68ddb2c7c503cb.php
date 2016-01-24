<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_b6e5f1551cd3183c3f807549c38610e2121744f41ac3385e52cfe47dfa1d6d32 extends Twig_Template
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
        $__internal_7e3fd2bd614a29ea91634458c9842c66427f2448611ecbe84534d437c9ee4d51 = $this->env->getExtension("native_profiler");
        $__internal_7e3fd2bd614a29ea91634458c9842c66427f2448611ecbe84534d437c9ee4d51->enter($__internal_7e3fd2bd614a29ea91634458c9842c66427f2448611ecbe84534d437c9ee4d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_7e3fd2bd614a29ea91634458c9842c66427f2448611ecbe84534d437c9ee4d51->leave($__internal_7e3fd2bd614a29ea91634458c9842c66427f2448611ecbe84534d437c9ee4d51_prof);

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
