<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_851b161e67675a4a27535325a7c02ce246aec23c6624a3369e7236d71d7945dd extends Twig_Template
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
        $__internal_6dc37a33f7ccbf5835b1fb7a124d7abee4e68bae4fd53c06600dedb4930e997b = $this->env->getExtension("native_profiler");
        $__internal_6dc37a33f7ccbf5835b1fb7a124d7abee4e68bae4fd53c06600dedb4930e997b->enter($__internal_6dc37a33f7ccbf5835b1fb7a124d7abee4e68bae4fd53c06600dedb4930e997b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6dc37a33f7ccbf5835b1fb7a124d7abee4e68bae4fd53c06600dedb4930e997b->leave($__internal_6dc37a33f7ccbf5835b1fb7a124d7abee4e68bae4fd53c06600dedb4930e997b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
