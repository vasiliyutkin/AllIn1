<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9ca417c51e85cdb4cfd2d4a344bf76f5f3dbddf657a158a6ebd0e6c0c8c480c1 extends Twig_Template
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
        $__internal_4f1913008e2daa99b2ea58076045e16e570f603ff02ed32ee56cd33c41ae7b00 = $this->env->getExtension("native_profiler");
        $__internal_4f1913008e2daa99b2ea58076045e16e570f603ff02ed32ee56cd33c41ae7b00->enter($__internal_4f1913008e2daa99b2ea58076045e16e570f603ff02ed32ee56cd33c41ae7b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4f1913008e2daa99b2ea58076045e16e570f603ff02ed32ee56cd33c41ae7b00->leave($__internal_4f1913008e2daa99b2ea58076045e16e570f603ff02ed32ee56cd33c41ae7b00_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
