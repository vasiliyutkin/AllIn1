<?php

/* ::base.html.twig */
class __TwigTemplate_f19eea33563794f41b997617c4adc8970c1c21bb6091af077b53ec3730d0f632 extends Twig_Template
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
        $__internal_0bf1ea941a66898b2ca546ea204d1ec4d4f3610d889964db4114d7615da9aaba = $this->env->getExtension("native_profiler");
        $__internal_0bf1ea941a66898b2ca546ea204d1ec4d4f3610d889964db4114d7615da9aaba->enter($__internal_0bf1ea941a66898b2ca546ea204d1ec4d4f3610d889964db4114d7615da9aaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_0bf1ea941a66898b2ca546ea204d1ec4d4f3610d889964db4114d7615da9aaba->leave($__internal_0bf1ea941a66898b2ca546ea204d1ec4d4f3610d889964db4114d7615da9aaba_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7da00bde8d0519c1cf1e8e1685d09198a45b49205fc6ffb664d7b3393ccf499a = $this->env->getExtension("native_profiler");
        $__internal_7da00bde8d0519c1cf1e8e1685d09198a45b49205fc6ffb664d7b3393ccf499a->enter($__internal_7da00bde8d0519c1cf1e8e1685d09198a45b49205fc6ffb664d7b3393ccf499a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7da00bde8d0519c1cf1e8e1685d09198a45b49205fc6ffb664d7b3393ccf499a->leave($__internal_7da00bde8d0519c1cf1e8e1685d09198a45b49205fc6ffb664d7b3393ccf499a_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e657cf06e99ea885326577551219059c6c81eed05d149343e68f2b5243a7742 = $this->env->getExtension("native_profiler");
        $__internal_3e657cf06e99ea885326577551219059c6c81eed05d149343e68f2b5243a7742->enter($__internal_3e657cf06e99ea885326577551219059c6c81eed05d149343e68f2b5243a7742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3e657cf06e99ea885326577551219059c6c81eed05d149343e68f2b5243a7742->leave($__internal_3e657cf06e99ea885326577551219059c6c81eed05d149343e68f2b5243a7742_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_b72e7b50c7968937b3062d99936969c7b17aa49ff0d440244ae58b56d451cb7d = $this->env->getExtension("native_profiler");
        $__internal_b72e7b50c7968937b3062d99936969c7b17aa49ff0d440244ae58b56d451cb7d->enter($__internal_b72e7b50c7968937b3062d99936969c7b17aa49ff0d440244ae58b56d451cb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b72e7b50c7968937b3062d99936969c7b17aa49ff0d440244ae58b56d451cb7d->leave($__internal_b72e7b50c7968937b3062d99936969c7b17aa49ff0d440244ae58b56d451cb7d_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_792f6b1c5a70dbe86cb0b3cd1831956e9c5fa194917eca82db31cbae93c1346f = $this->env->getExtension("native_profiler");
        $__internal_792f6b1c5a70dbe86cb0b3cd1831956e9c5fa194917eca82db31cbae93c1346f->enter($__internal_792f6b1c5a70dbe86cb0b3cd1831956e9c5fa194917eca82db31cbae93c1346f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_792f6b1c5a70dbe86cb0b3cd1831956e9c5fa194917eca82db31cbae93c1346f->leave($__internal_792f6b1c5a70dbe86cb0b3cd1831956e9c5fa194917eca82db31cbae93c1346f_prof);

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
