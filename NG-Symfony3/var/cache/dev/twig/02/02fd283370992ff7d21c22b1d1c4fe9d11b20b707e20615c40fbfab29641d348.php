<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_fa831a3d6c0f2c7056a9a1e16ee76c458a90154e9802673c53a2ac316f46902b extends Twig_Template
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
        $__internal_0cd836ce16c26d1f93bbf93409105fd77005df3503e36c2078c9aa96508c40a3 = $this->env->getExtension("native_profiler");
        $__internal_0cd836ce16c26d1f93bbf93409105fd77005df3503e36c2078c9aa96508c40a3->enter($__internal_0cd836ce16c26d1f93bbf93409105fd77005df3503e36c2078c9aa96508c40a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_0cd836ce16c26d1f93bbf93409105fd77005df3503e36c2078c9aa96508c40a3->leave($__internal_0cd836ce16c26d1f93bbf93409105fd77005df3503e36c2078c9aa96508c40a3_prof);

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
