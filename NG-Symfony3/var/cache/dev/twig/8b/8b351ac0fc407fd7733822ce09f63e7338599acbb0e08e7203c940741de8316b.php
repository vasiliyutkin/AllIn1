<?php

/* AppBundle:page:description.html.twig */
class __TwigTemplate_cd947f8d184f4383d7e3a5eb8be4c42de6d0c0a344b1091088b26c959bb0198d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:page:description.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e731a94ab1835b30a50508364d69af630d5e6e27c1bafd29275804dc69856d21 = $this->env->getExtension("native_profiler");
        $__internal_e731a94ab1835b30a50508364d69af630d5e6e27c1bafd29275804dc69856d21->enter($__internal_e731a94ab1835b30a50508364d69af630d5e6e27c1bafd29275804dc69856d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:page:description.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e731a94ab1835b30a50508364d69af630d5e6e27c1bafd29275804dc69856d21->leave($__internal_e731a94ab1835b30a50508364d69af630d5e6e27c1bafd29275804dc69856d21_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_68328fabde441f5af37f83ad577f3f98b32c45c3c56c1f5e7c1e7f6eea2df210 = $this->env->getExtension("native_profiler");
        $__internal_68328fabde441f5af37f83ad577f3f98b32c45c3c56c1f5e7c1e7f6eea2df210->enter($__internal_68328fabde441f5af37f83ad577f3f98b32c45c3c56c1f5e7c1e7f6eea2df210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_68328fabde441f5af37f83ad577f3f98b32c45c3c56c1f5e7c1e7f6eea2df210->leave($__internal_68328fabde441f5af37f83ad577f3f98b32c45c3c56c1f5e7c1e7f6eea2df210_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_09a1f4d7c697ea2fb264ff6ebf76df0e9edca0ad754c220e03da12be9d3e0c18 = $this->env->getExtension("native_profiler");
        $__internal_09a1f4d7c697ea2fb264ff6ebf76df0e9edca0ad754c220e03da12be9d3e0c18->enter($__internal_09a1f4d7c697ea2fb264ff6ebf76df0e9edca0ad754c220e03da12be9d3e0c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
\t<div class=\"container\">
\t\t<h1 class='label label-info'>Description page</h1>
\t</div>

";
        
        $__internal_09a1f4d7c697ea2fb264ff6ebf76df0e9edca0ad754c220e03da12be9d3e0c18->leave($__internal_09a1f4d7c697ea2fb264ff6ebf76df0e9edca0ad754c220e03da12be9d3e0c18_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:page:description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 6,  46 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* 	<div class="container">*/
/* 		<h1 class='label label-info'>Description page</h1>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
