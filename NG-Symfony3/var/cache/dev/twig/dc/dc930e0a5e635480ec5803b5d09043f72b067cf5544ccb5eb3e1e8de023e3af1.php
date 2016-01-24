<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8cfa493de27d99d8aac6f67504a6cb20c77cd552394cd67ead1b9a58cb2f2de1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_5a1455fc18adabf34f501043ef5605d39f8ce9e5c4b4ad7b9add47ce04d9d44e = $this->env->getExtension("native_profiler");
        $__internal_5a1455fc18adabf34f501043ef5605d39f8ce9e5c4b4ad7b9add47ce04d9d44e->enter($__internal_5a1455fc18adabf34f501043ef5605d39f8ce9e5c4b4ad7b9add47ce04d9d44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a1455fc18adabf34f501043ef5605d39f8ce9e5c4b4ad7b9add47ce04d9d44e->leave($__internal_5a1455fc18adabf34f501043ef5605d39f8ce9e5c4b4ad7b9add47ce04d9d44e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_59036211f16ecd54d026dafde2778cef24b984bf4ad6891e518d7fa28b73cf85 = $this->env->getExtension("native_profiler");
        $__internal_59036211f16ecd54d026dafde2778cef24b984bf4ad6891e518d7fa28b73cf85->enter($__internal_59036211f16ecd54d026dafde2778cef24b984bf4ad6891e518d7fa28b73cf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_59036211f16ecd54d026dafde2778cef24b984bf4ad6891e518d7fa28b73cf85->leave($__internal_59036211f16ecd54d026dafde2778cef24b984bf4ad6891e518d7fa28b73cf85_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7fa7c892636117cd982377e653fd01e1f7d214214017e5ebc0f37355d61a630 = $this->env->getExtension("native_profiler");
        $__internal_c7fa7c892636117cd982377e653fd01e1f7d214214017e5ebc0f37355d61a630->enter($__internal_c7fa7c892636117cd982377e653fd01e1f7d214214017e5ebc0f37355d61a630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c7fa7c892636117cd982377e653fd01e1f7d214214017e5ebc0f37355d61a630->leave($__internal_c7fa7c892636117cd982377e653fd01e1f7d214214017e5ebc0f37355d61a630_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
