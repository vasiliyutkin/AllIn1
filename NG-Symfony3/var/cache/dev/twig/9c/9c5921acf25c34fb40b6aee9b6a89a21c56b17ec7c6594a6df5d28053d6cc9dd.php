<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c861fb53b45ea5f5722ef6967866574af3950f6860d9a7ccfdde813061b24474 extends Twig_Template
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
        $__internal_b1df7330fd79d1fc4a467a9115ae3b4ee956a32df98b6d47c520ebb2b3080e26 = $this->env->getExtension("native_profiler");
        $__internal_b1df7330fd79d1fc4a467a9115ae3b4ee956a32df98b6d47c520ebb2b3080e26->enter($__internal_b1df7330fd79d1fc4a467a9115ae3b4ee956a32df98b6d47c520ebb2b3080e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1df7330fd79d1fc4a467a9115ae3b4ee956a32df98b6d47c520ebb2b3080e26->leave($__internal_b1df7330fd79d1fc4a467a9115ae3b4ee956a32df98b6d47c520ebb2b3080e26_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_df8c4197aab85b4dfc7e5e811918fee56c25e315bf786e659b6572582450ceab = $this->env->getExtension("native_profiler");
        $__internal_df8c4197aab85b4dfc7e5e811918fee56c25e315bf786e659b6572582450ceab->enter($__internal_df8c4197aab85b4dfc7e5e811918fee56c25e315bf786e659b6572582450ceab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_df8c4197aab85b4dfc7e5e811918fee56c25e315bf786e659b6572582450ceab->leave($__internal_df8c4197aab85b4dfc7e5e811918fee56c25e315bf786e659b6572582450ceab_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_264ec9be4c22813b680e8cb85330d5c70a466df486e620c1347631045da2463b = $this->env->getExtension("native_profiler");
        $__internal_264ec9be4c22813b680e8cb85330d5c70a466df486e620c1347631045da2463b->enter($__internal_264ec9be4c22813b680e8cb85330d5c70a466df486e620c1347631045da2463b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_264ec9be4c22813b680e8cb85330d5c70a466df486e620c1347631045da2463b->leave($__internal_264ec9be4c22813b680e8cb85330d5c70a466df486e620c1347631045da2463b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4befd592fa5cb37429517bdaf881d3d2c5cfe261884ea87f6baeb8b8ba1ea327 = $this->env->getExtension("native_profiler");
        $__internal_4befd592fa5cb37429517bdaf881d3d2c5cfe261884ea87f6baeb8b8ba1ea327->enter($__internal_4befd592fa5cb37429517bdaf881d3d2c5cfe261884ea87f6baeb8b8ba1ea327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4befd592fa5cb37429517bdaf881d3d2c5cfe261884ea87f6baeb8b8ba1ea327->leave($__internal_4befd592fa5cb37429517bdaf881d3d2c5cfe261884ea87f6baeb8b8ba1ea327_prof);

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
