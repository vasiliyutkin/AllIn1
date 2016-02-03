<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_472937b9ddc9d5b070fad02e39d054f5dd1c6a63eef72c71123ddeab50b868d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29b821e0c47dea473464aec58c918aed42477c27aafe7999ebfd38b771421216 = $this->env->getExtension("native_profiler");
        $__internal_29b821e0c47dea473464aec58c918aed42477c27aafe7999ebfd38b771421216->enter($__internal_29b821e0c47dea473464aec58c918aed42477c27aafe7999ebfd38b771421216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29b821e0c47dea473464aec58c918aed42477c27aafe7999ebfd38b771421216->leave($__internal_29b821e0c47dea473464aec58c918aed42477c27aafe7999ebfd38b771421216_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc700df713f956e14d457d57a99ec4f502accb99a02ec593d2321857149938f2 = $this->env->getExtension("native_profiler");
        $__internal_fc700df713f956e14d457d57a99ec4f502accb99a02ec593d2321857149938f2->enter($__internal_fc700df713f956e14d457d57a99ec4f502accb99a02ec593d2321857149938f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fc700df713f956e14d457d57a99ec4f502accb99a02ec593d2321857149938f2->leave($__internal_fc700df713f956e14d457d57a99ec4f502accb99a02ec593d2321857149938f2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_25e0ca4fde6a87dc4a919fe72c87147d70c4695eab5113b0b9f36f8d455028ff = $this->env->getExtension("native_profiler");
        $__internal_25e0ca4fde6a87dc4a919fe72c87147d70c4695eab5113b0b9f36f8d455028ff->enter($__internal_25e0ca4fde6a87dc4a919fe72c87147d70c4695eab5113b0b9f36f8d455028ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_25e0ca4fde6a87dc4a919fe72c87147d70c4695eab5113b0b9f36f8d455028ff->leave($__internal_25e0ca4fde6a87dc4a919fe72c87147d70c4695eab5113b0b9f36f8d455028ff_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8a186d504032406584ec719a3a097f686ae31890fd983853ad9d50186d9c8d1 = $this->env->getExtension("native_profiler");
        $__internal_f8a186d504032406584ec719a3a097f686ae31890fd983853ad9d50186d9c8d1->enter($__internal_f8a186d504032406584ec719a3a097f686ae31890fd983853ad9d50186d9c8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f8a186d504032406584ec719a3a097f686ae31890fd983853ad9d50186d9c8d1->leave($__internal_f8a186d504032406584ec719a3a097f686ae31890fd983853ad9d50186d9c8d1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
