<?php

/* ::base.html.twig */
class __TwigTemplate_8b6db15a63557388e32efb52184831f881d4700488a750f2aa2531439a9eb8be extends Twig_Template
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
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  72 => 14,  67 => 13,  62 => 8,  57 => 7,  50 => 15,  47 => 14,  45 => 13,  37 => 9,  35 => 8,  31 => 7,  23 => 1,);
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
