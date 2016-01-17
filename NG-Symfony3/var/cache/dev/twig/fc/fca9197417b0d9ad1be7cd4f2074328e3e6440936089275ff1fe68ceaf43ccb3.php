<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a5769d01f23a6f803dcf0147663a929fe00a8f1e0570a10ca7964df28e29e520 extends Twig_Template
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
        $__internal_1d00319cc89a1543b802e9c42c6330880301532c13bcfa0a733999a80f631c18 = $this->env->getExtension("native_profiler");
        $__internal_1d00319cc89a1543b802e9c42c6330880301532c13bcfa0a733999a80f631c18->enter($__internal_1d00319cc89a1543b802e9c42c6330880301532c13bcfa0a733999a80f631c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1d00319cc89a1543b802e9c42c6330880301532c13bcfa0a733999a80f631c18->leave($__internal_1d00319cc89a1543b802e9c42c6330880301532c13bcfa0a733999a80f631c18_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
