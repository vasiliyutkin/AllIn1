<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e6e8f866d7ebaf60dfe69700591d544910abf3d272ca8498f744e2b4b969caf8 extends Twig_Template
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
        $__internal_0ec216981d6704a7fd7db91c5ed76a329711fe039ab36319fb327f9c8c1d9450 = $this->env->getExtension("native_profiler");
        $__internal_0ec216981d6704a7fd7db91c5ed76a329711fe039ab36319fb327f9c8c1d9450->enter($__internal_0ec216981d6704a7fd7db91c5ed76a329711fe039ab36319fb327f9c8c1d9450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ec216981d6704a7fd7db91c5ed76a329711fe039ab36319fb327f9c8c1d9450->leave($__internal_0ec216981d6704a7fd7db91c5ed76a329711fe039ab36319fb327f9c8c1d9450_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_99597f18e4b4c6b9cb389f4dda73520d62d132b465bc544fe2210993ad242938 = $this->env->getExtension("native_profiler");
        $__internal_99597f18e4b4c6b9cb389f4dda73520d62d132b465bc544fe2210993ad242938->enter($__internal_99597f18e4b4c6b9cb389f4dda73520d62d132b465bc544fe2210993ad242938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_99597f18e4b4c6b9cb389f4dda73520d62d132b465bc544fe2210993ad242938->leave($__internal_99597f18e4b4c6b9cb389f4dda73520d62d132b465bc544fe2210993ad242938_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_72c820b62886ee38e9e9290794626b4b15a2ed2e266e42e2b742b2faa58caf04 = $this->env->getExtension("native_profiler");
        $__internal_72c820b62886ee38e9e9290794626b4b15a2ed2e266e42e2b742b2faa58caf04->enter($__internal_72c820b62886ee38e9e9290794626b4b15a2ed2e266e42e2b742b2faa58caf04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_72c820b62886ee38e9e9290794626b4b15a2ed2e266e42e2b742b2faa58caf04->leave($__internal_72c820b62886ee38e9e9290794626b4b15a2ed2e266e42e2b742b2faa58caf04_prof);

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
