<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2f684e975989d996819f922c9eaba4f95ba6b5a78d5cb98cb32037e05daf2490 extends Twig_Template
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
        $__internal_54cb951350cc688f6f99adf046fa8fd24b7dfbe976453e9b8247ebdea7a13982 = $this->env->getExtension("native_profiler");
        $__internal_54cb951350cc688f6f99adf046fa8fd24b7dfbe976453e9b8247ebdea7a13982->enter($__internal_54cb951350cc688f6f99adf046fa8fd24b7dfbe976453e9b8247ebdea7a13982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_54cb951350cc688f6f99adf046fa8fd24b7dfbe976453e9b8247ebdea7a13982->leave($__internal_54cb951350cc688f6f99adf046fa8fd24b7dfbe976453e9b8247ebdea7a13982_prof);

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
