<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f8fa7a52228a2bb3aa732f0ab2cf110968e9b6559a53b237d96c8f3b20685ee9 extends Twig_Template
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
        $__internal_1c938f55e13aa6da0e1ef939b099a4e17a293637075ce26739f171d447d73b75 = $this->env->getExtension("native_profiler");
        $__internal_1c938f55e13aa6da0e1ef939b099a4e17a293637075ce26739f171d447d73b75->enter($__internal_1c938f55e13aa6da0e1ef939b099a4e17a293637075ce26739f171d447d73b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_1c938f55e13aa6da0e1ef939b099a4e17a293637075ce26739f171d447d73b75->leave($__internal_1c938f55e13aa6da0e1ef939b099a4e17a293637075ce26739f171d447d73b75_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
