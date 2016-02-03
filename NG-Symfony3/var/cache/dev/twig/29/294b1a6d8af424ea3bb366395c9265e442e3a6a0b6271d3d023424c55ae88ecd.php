<?php

/* ::base.html.twig */
class __TwigTemplate_d744d4ca348b4eff2167f8d74b5b4511b9a534c950a6ae54d2543121328e2d15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ee69f0f39b3398507929893e30ee125a0efd48ebdc60f38f3a6f33a31d3b27a = $this->env->getExtension("native_profiler");
        $__internal_2ee69f0f39b3398507929893e30ee125a0efd48ebdc60f38f3a6f33a31d3b27a->enter($__internal_2ee69f0f39b3398507929893e30ee125a0efd48ebdc60f38f3a6f33a31d3b27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html ng-app=\"App\">

<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>

<body ng-controller=\"appController\">
\t";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "</body>

</html>
";
        
        $__internal_2ee69f0f39b3398507929893e30ee125a0efd48ebdc60f38f3a6f33a31d3b27a->leave($__internal_2ee69f0f39b3398507929893e30ee125a0efd48ebdc60f38f3a6f33a31d3b27a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_360493be337b2601ab5b787edbb906e5fcbe655c5102cc30f33a1ef95a9e3342 = $this->env->getExtension("native_profiler");
        $__internal_360493be337b2601ab5b787edbb906e5fcbe655c5102cc30f33a1ef95a9e3342->enter($__internal_360493be337b2601ab5b787edbb906e5fcbe655c5102cc30f33a1ef95a9e3342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_360493be337b2601ab5b787edbb906e5fcbe655c5102cc30f33a1ef95a9e3342->leave($__internal_360493be337b2601ab5b787edbb906e5fcbe655c5102cc30f33a1ef95a9e3342_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c7b748beb493768ff395efb86d9ea5da2d56378f1faeab22d1be9435821bbfd7 = $this->env->getExtension("native_profiler");
        $__internal_c7b748beb493768ff395efb86d9ea5da2d56378f1faeab22d1be9435821bbfd7->enter($__internal_c7b748beb493768ff395efb86d9ea5da2d56378f1faeab22d1be9435821bbfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c7b748beb493768ff395efb86d9ea5da2d56378f1faeab22d1be9435821bbfd7->leave($__internal_c7b748beb493768ff395efb86d9ea5da2d56378f1faeab22d1be9435821bbfd7_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_822b8b4b222a1c7f21857ecf77946b5c40a059ba6db301856cc2fa92a5f3942e = $this->env->getExtension("native_profiler");
        $__internal_822b8b4b222a1c7f21857ecf77946b5c40a059ba6db301856cc2fa92a5f3942e->enter($__internal_822b8b4b222a1c7f21857ecf77946b5c40a059ba6db301856cc2fa92a5f3942e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_822b8b4b222a1c7f21857ecf77946b5c40a059ba6db301856cc2fa92a5f3942e->leave($__internal_822b8b4b222a1c7f21857ecf77946b5c40a059ba6db301856cc2fa92a5f3942e_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b1ab89c1f2a319499e2e39c4e2882b05ba89093f9517302a23ea8f6976c55b4b = $this->env->getExtension("native_profiler");
        $__internal_b1ab89c1f2a319499e2e39c4e2882b05ba89093f9517302a23ea8f6976c55b4b->enter($__internal_b1ab89c1f2a319499e2e39c4e2882b05ba89093f9517302a23ea8f6976c55b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b1ab89c1f2a319499e2e39c4e2882b05ba89093f9517302a23ea8f6976c55b4b->leave($__internal_b1ab89c1f2a319499e2e39c4e2882b05ba89093f9517302a23ea8f6976c55b4b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 14,  85 => 13,  74 => 8,  63 => 7,  53 => 15,  50 => 14,  48 => 13,  40 => 9,  38 => 8,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html ng-app="App">*/
/* */
/* <head>*/
/* 	<meta charset="UTF-8" />*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">*/
/* 	<title>{% block title %}{% endblock %}</title>*/
/* 	{% block stylesheets %}{% endblock %}*/
/* 	<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* */
/* <body ng-controller="appController">*/
/* 	{% block body %}{% endblock %}*/
/* 	{% block javascripts %}{% endblock %}*/
/* </body>*/
/* */
/* </html>*/
/* */
