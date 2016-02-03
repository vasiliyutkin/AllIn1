<?php

/* AppBundle:page:description.html.twig */
class __TwigTemplate_83807caa02b882983c7fda317fa885aa9b6adb9dc8aa6bae23313a0c990e63be extends Twig_Template
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
        $__internal_ccd062c041c368e88886c26aec419d405337b91e7c3632f07201e18d2559bf3b = $this->env->getExtension("native_profiler");
        $__internal_ccd062c041c368e88886c26aec419d405337b91e7c3632f07201e18d2559bf3b->enter($__internal_ccd062c041c368e88886c26aec419d405337b91e7c3632f07201e18d2559bf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:page:description.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccd062c041c368e88886c26aec419d405337b91e7c3632f07201e18d2559bf3b->leave($__internal_ccd062c041c368e88886c26aec419d405337b91e7c3632f07201e18d2559bf3b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_93fe4610551e09abceda52f5a075bca91a627685af0388db70bb5a09a01fb9a9 = $this->env->getExtension("native_profiler");
        $__internal_93fe4610551e09abceda52f5a075bca91a627685af0388db70bb5a09a01fb9a9->enter($__internal_93fe4610551e09abceda52f5a075bca91a627685af0388db70bb5a09a01fb9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_93fe4610551e09abceda52f5a075bca91a627685af0388db70bb5a09a01fb9a9->leave($__internal_93fe4610551e09abceda52f5a075bca91a627685af0388db70bb5a09a01fb9a9_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_16194c42b732eb8ef121e0c9c15aa64117cc53e333813540e6b0275138182de4 = $this->env->getExtension("native_profiler");
        $__internal_16194c42b732eb8ef121e0c9c15aa64117cc53e333813540e6b0275138182de4->enter($__internal_16194c42b732eb8ef121e0c9c15aa64117cc53e333813540e6b0275138182de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
\t<div class=\"container\">
\t\t<h1 class='label label-info'>Description page</h1>
\t</div>

";
        
        $__internal_16194c42b732eb8ef121e0c9c15aa64117cc53e333813540e6b0275138182de4->leave($__internal_16194c42b732eb8ef121e0c9c15aa64117cc53e333813540e6b0275138182de4_prof);

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
