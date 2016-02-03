<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ca240080923422b7c730c0d644a1f056fe7bbf65e4290dd23e7915834fe091d2 extends Twig_Template
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
        $__internal_6a157c9f3939c7f67c879d0837768d86f4060d0af59e96a770202d9dfa1b3f61 = $this->env->getExtension("native_profiler");
        $__internal_6a157c9f3939c7f67c879d0837768d86f4060d0af59e96a770202d9dfa1b3f61->enter($__internal_6a157c9f3939c7f67c879d0837768d86f4060d0af59e96a770202d9dfa1b3f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a157c9f3939c7f67c879d0837768d86f4060d0af59e96a770202d9dfa1b3f61->leave($__internal_6a157c9f3939c7f67c879d0837768d86f4060d0af59e96a770202d9dfa1b3f61_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccfb8854a76651ff1331361558f04cc78c828af5b6d0a656045b94ce88ffabea = $this->env->getExtension("native_profiler");
        $__internal_ccfb8854a76651ff1331361558f04cc78c828af5b6d0a656045b94ce88ffabea->enter($__internal_ccfb8854a76651ff1331361558f04cc78c828af5b6d0a656045b94ce88ffabea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ccfb8854a76651ff1331361558f04cc78c828af5b6d0a656045b94ce88ffabea->leave($__internal_ccfb8854a76651ff1331361558f04cc78c828af5b6d0a656045b94ce88ffabea_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec2247256dba60b146e81aa8a4a67e098008199d7030420bf7585c9e4e276d7d = $this->env->getExtension("native_profiler");
        $__internal_ec2247256dba60b146e81aa8a4a67e098008199d7030420bf7585c9e4e276d7d->enter($__internal_ec2247256dba60b146e81aa8a4a67e098008199d7030420bf7585c9e4e276d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ec2247256dba60b146e81aa8a4a67e098008199d7030420bf7585c9e4e276d7d->leave($__internal_ec2247256dba60b146e81aa8a4a67e098008199d7030420bf7585c9e4e276d7d_prof);

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
