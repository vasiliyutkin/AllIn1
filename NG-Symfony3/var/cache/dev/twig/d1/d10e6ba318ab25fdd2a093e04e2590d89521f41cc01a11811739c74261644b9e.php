<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_132322e6acb47203f5d18ae81abc0e6ec9ade17b31e6cd2ba11154b2f2953852 extends Twig_Template
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
        $__internal_590f33cddaf20cc384e76de7d02ce9f7b81fec97aea3d4cbddc1c3c99e7f7e87 = $this->env->getExtension("native_profiler");
        $__internal_590f33cddaf20cc384e76de7d02ce9f7b81fec97aea3d4cbddc1c3c99e7f7e87->enter($__internal_590f33cddaf20cc384e76de7d02ce9f7b81fec97aea3d4cbddc1c3c99e7f7e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_590f33cddaf20cc384e76de7d02ce9f7b81fec97aea3d4cbddc1c3c99e7f7e87->leave($__internal_590f33cddaf20cc384e76de7d02ce9f7b81fec97aea3d4cbddc1c3c99e7f7e87_prof);

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
