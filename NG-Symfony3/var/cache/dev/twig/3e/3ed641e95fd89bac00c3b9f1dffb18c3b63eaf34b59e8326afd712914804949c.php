<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_86fc74029cc6bb959585765cec1595b830248f74b6d791c8f24afc4c115c2cc9 extends Twig_Template
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
        $__internal_c3a81beaa9caa87f83d225483439c16f03e8a1905fb13e916e89e14546c5fe69 = $this->env->getExtension("native_profiler");
        $__internal_c3a81beaa9caa87f83d225483439c16f03e8a1905fb13e916e89e14546c5fe69->enter($__internal_c3a81beaa9caa87f83d225483439c16f03e8a1905fb13e916e89e14546c5fe69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c3a81beaa9caa87f83d225483439c16f03e8a1905fb13e916e89e14546c5fe69->leave($__internal_c3a81beaa9caa87f83d225483439c16f03e8a1905fb13e916e89e14546c5fe69_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
