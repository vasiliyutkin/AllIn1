<?php

/* AppBundle:page:about.html.twig */
class __TwigTemplate_77420b668de6feb57f4983ccf2c3c471b82dd82d2eba689dcc8668ea4d6f1baf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:page:about.html.twig", 1);
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
        $__internal_16693e7adb3a7c71a04fb8de270192903664fc984ea94bba3ccf32cb1a4195f7 = $this->env->getExtension("native_profiler");
        $__internal_16693e7adb3a7c71a04fb8de270192903664fc984ea94bba3ccf32cb1a4195f7->enter($__internal_16693e7adb3a7c71a04fb8de270192903664fc984ea94bba3ccf32cb1a4195f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16693e7adb3a7c71a04fb8de270192903664fc984ea94bba3ccf32cb1a4195f7->leave($__internal_16693e7adb3a7c71a04fb8de270192903664fc984ea94bba3ccf32cb1a4195f7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7584c4280f3b5b084539fb8ffc897b029d08f7d6050ac5a9b438908f2d9cdddf = $this->env->getExtension("native_profiler");
        $__internal_7584c4280f3b5b084539fb8ffc897b029d08f7d6050ac5a9b438908f2d9cdddf->enter($__internal_7584c4280f3b5b084539fb8ffc897b029d08f7d6050ac5a9b438908f2d9cdddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7584c4280f3b5b084539fb8ffc897b029d08f7d6050ac5a9b438908f2d9cdddf->leave($__internal_7584c4280f3b5b084539fb8ffc897b029d08f7d6050ac5a9b438908f2d9cdddf_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_2c3c42cfbcdb19a4b5aac3ca2521be2b96b4a2e54e18821cdb8cf7d892d7d066 = $this->env->getExtension("native_profiler");
        $__internal_2c3c42cfbcdb19a4b5aac3ca2521be2b96b4a2e54e18821cdb8cf7d892d7d066->enter($__internal_2c3c42cfbcdb19a4b5aac3ca2521be2b96b4a2e54e18821cdb8cf7d892d7d066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
\t<div class=\"container\">
\t\t<h1 class='label label-default'>About page info</h1>
\t</div>

";
        
        $__internal_2c3c42cfbcdb19a4b5aac3ca2521be2b96b4a2e54e18821cdb8cf7d892d7d066->leave($__internal_2c3c42cfbcdb19a4b5aac3ca2521be2b96b4a2e54e18821cdb8cf7d892d7d066_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:page:about.html.twig";
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
/* 		<h1 class='label label-default'>About page info</h1>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
