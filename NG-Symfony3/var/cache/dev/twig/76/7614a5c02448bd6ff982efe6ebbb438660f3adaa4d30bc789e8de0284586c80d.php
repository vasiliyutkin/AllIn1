<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_e1f23424933c76d7e9b6efc562240195d43f8bc909d96dc98dabf702678fa4c4 extends Twig_Template
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
        $__internal_cbc246ab4fe60ff7315d48f4445aade3330544079312b686cd6a3686cffc249d = $this->env->getExtension("native_profiler");
        $__internal_cbc246ab4fe60ff7315d48f4445aade3330544079312b686cd6a3686cffc249d->enter($__internal_cbc246ab4fe60ff7315d48f4445aade3330544079312b686cd6a3686cffc249d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_cbc246ab4fe60ff7315d48f4445aade3330544079312b686cd6a3686cffc249d->leave($__internal_cbc246ab4fe60ff7315d48f4445aade3330544079312b686cd6a3686cffc249d_prof);

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
