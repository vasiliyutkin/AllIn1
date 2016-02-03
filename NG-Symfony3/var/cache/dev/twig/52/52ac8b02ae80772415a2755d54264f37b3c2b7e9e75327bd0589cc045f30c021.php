<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a27ed358a7b64258bb2414b737750ab29c8561d6843ae232c4f298dad9f7b5a7 extends Twig_Template
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
        $__internal_92b26788ef83c9a0bff793fd92cd529d0e16acfa3ab5adf609fb8fe10f6d2e88 = $this->env->getExtension("native_profiler");
        $__internal_92b26788ef83c9a0bff793fd92cd529d0e16acfa3ab5adf609fb8fe10f6d2e88->enter($__internal_92b26788ef83c9a0bff793fd92cd529d0e16acfa3ab5adf609fb8fe10f6d2e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_92b26788ef83c9a0bff793fd92cd529d0e16acfa3ab5adf609fb8fe10f6d2e88->leave($__internal_92b26788ef83c9a0bff793fd92cd529d0e16acfa3ab5adf609fb8fe10f6d2e88_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
