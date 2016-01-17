<?php

/* ::base.html.twig */
class __TwigTemplate_d1a72d35362a2189bd28747efc3a312e14ebf8bcd51239bb3cd7cf8acae0a8c2 extends Twig_Template
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
        $__internal_667fca9aed6273da67f8bf8c45f549053f70c43d585686c1d82e0d9f0a142077 = $this->env->getExtension("native_profiler");
        $__internal_667fca9aed6273da67f8bf8c45f549053f70c43d585686c1d82e0d9f0a142077->enter($__internal_667fca9aed6273da67f8bf8c45f549053f70c43d585686c1d82e0d9f0a142077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_667fca9aed6273da67f8bf8c45f549053f70c43d585686c1d82e0d9f0a142077->leave($__internal_667fca9aed6273da67f8bf8c45f549053f70c43d585686c1d82e0d9f0a142077_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_813379559b09708a99e19476a5de8bfa6c6d32d07b01ea012ea14c5402b923ba = $this->env->getExtension("native_profiler");
        $__internal_813379559b09708a99e19476a5de8bfa6c6d32d07b01ea012ea14c5402b923ba->enter($__internal_813379559b09708a99e19476a5de8bfa6c6d32d07b01ea012ea14c5402b923ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_813379559b09708a99e19476a5de8bfa6c6d32d07b01ea012ea14c5402b923ba->leave($__internal_813379559b09708a99e19476a5de8bfa6c6d32d07b01ea012ea14c5402b923ba_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_210ac81f355df0e658a392ae70bfb63f554adc7ba51c063da0d27f9fc4614d53 = $this->env->getExtension("native_profiler");
        $__internal_210ac81f355df0e658a392ae70bfb63f554adc7ba51c063da0d27f9fc4614d53->enter($__internal_210ac81f355df0e658a392ae70bfb63f554adc7ba51c063da0d27f9fc4614d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_210ac81f355df0e658a392ae70bfb63f554adc7ba51c063da0d27f9fc4614d53->leave($__internal_210ac81f355df0e658a392ae70bfb63f554adc7ba51c063da0d27f9fc4614d53_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_0290dd42dae23bdea494397166ddb7c53e23c080d1ee879691f4fbc254de93a6 = $this->env->getExtension("native_profiler");
        $__internal_0290dd42dae23bdea494397166ddb7c53e23c080d1ee879691f4fbc254de93a6->enter($__internal_0290dd42dae23bdea494397166ddb7c53e23c080d1ee879691f4fbc254de93a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0290dd42dae23bdea494397166ddb7c53e23c080d1ee879691f4fbc254de93a6->leave($__internal_0290dd42dae23bdea494397166ddb7c53e23c080d1ee879691f4fbc254de93a6_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_33010bba09a18bf13ff02d751bf381ddc097f86617a29fd8011ad181a75a7434 = $this->env->getExtension("native_profiler");
        $__internal_33010bba09a18bf13ff02d751bf381ddc097f86617a29fd8011ad181a75a7434->enter($__internal_33010bba09a18bf13ff02d751bf381ddc097f86617a29fd8011ad181a75a7434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_33010bba09a18bf13ff02d751bf381ddc097f86617a29fd8011ad181a75a7434->leave($__internal_33010bba09a18bf13ff02d751bf381ddc097f86617a29fd8011ad181a75a7434_prof);

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
