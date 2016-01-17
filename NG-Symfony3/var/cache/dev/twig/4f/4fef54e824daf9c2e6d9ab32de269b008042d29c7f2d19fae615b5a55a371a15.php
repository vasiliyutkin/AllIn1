<?php

/* AppBundle:page:home.html.twig */
class __TwigTemplate_696ddb77a11ce714a1e1c55a12e8e008f324379255910f52fbc1620a72db60a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:page:home.html.twig", 1);
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
        $__internal_f4300126a003124600eefee01556cf36c7738621de159ce62e659b4c4d7fe91d = $this->env->getExtension("native_profiler");
        $__internal_f4300126a003124600eefee01556cf36c7738621de159ce62e659b4c4d7fe91d->enter($__internal_f4300126a003124600eefee01556cf36c7738621de159ce62e659b4c4d7fe91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:page:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4300126a003124600eefee01556cf36c7738621de159ce62e659b4c4d7fe91d->leave($__internal_f4300126a003124600eefee01556cf36c7738621de159ce62e659b4c4d7fe91d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_44158c1600332039ad041b3f9cd53210c54fd33aac15458c3da085a223b41472 = $this->env->getExtension("native_profiler");
        $__internal_44158c1600332039ad041b3f9cd53210c54fd33aac15458c3da085a223b41472->enter($__internal_44158c1600332039ad041b3f9cd53210c54fd33aac15458c3da085a223b41472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_44158c1600332039ad041b3f9cd53210c54fd33aac15458c3da085a223b41472->leave($__internal_44158c1600332039ad041b3f9cd53210c54fd33aac15458c3da085a223b41472_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_27ff4b6784459cd253aa9aa00fc6ae7ea783e51b83855dc6a5d891850c06bc2d = $this->env->getExtension("native_profiler");
        $__internal_27ff4b6784459cd253aa9aa00fc6ae7ea783e51b83855dc6a5d891850c06bc2d->enter($__internal_27ff4b6784459cd253aa9aa00fc6ae7ea783e51b83855dc6a5d891850c06bc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
\t<div class=\"container\">
\t\t";
        // line 8
        $this->loadTemplate("AppBundle::page/modules/slideA.html.twig", "AppBundle:page:home.html.twig", 8)->display($context);
        // line 9
        echo "\t\t";
        $this->loadTemplate("AppBundle::page/modules/slideB.html.twig", "AppBundle:page:home.html.twig", 9)->display($context);
        // line 10
        echo "    ";
        $this->loadTemplate("AppBundle::page/modules/slideC.html.twig", "AppBundle:page:home.html.twig", 10)->display($context);
        // line 11
        echo "    ";
        $this->loadTemplate("AppBundle::page/modules/slideD.html.twig", "AppBundle:page:home.html.twig", 11)->display($context);
        // line 12
        echo "
\t\t<div class=\"row\">
      <div class=\"col-xs-12\">
        <div class='btn-group pull-right'>
           <a class=\"btn btn-default btn-sm\" ng-click=\"gotoView('home/a')\">home/a</a>
           <a class=\"btn btn-default btn-sm\" ng-click=\"gotoView('home/b')\">home/b</a>
           <a class=\"btn btn-default btn-sm\" ng-click=\"gotoView('home/c')\">home/c</a>
           <a class=\"btn btn-default btn-sm\" ng-click=\"gotoView('home/d')\">home/d</a>
        </div>
      </div>
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<div ng-view></div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_27ff4b6784459cd253aa9aa00fc6ae7ea783e51b83855dc6a5d891850c06bc2d->leave($__internal_27ff4b6784459cd253aa9aa00fc6ae7ea783e51b83855dc6a5d891850c06bc2d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:page:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  64 => 11,  61 => 10,  58 => 9,  56 => 8,  52 => 6,  46 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* 	<div class="container">*/
/* 		{% include 'AppBundle::page/modules/slideA.html.twig' %}*/
/* 		{% include 'AppBundle::page/modules/slideB.html.twig' %}*/
/*     {% include 'AppBundle::page/modules/slideC.html.twig' %}*/
/*     {% include 'AppBundle::page/modules/slideD.html.twig' %}*/
/* */
/* 		<div class="row">*/
/*       <div class="col-xs-12">*/
/*         <div class='btn-group pull-right'>*/
/*            <a class="btn btn-default btn-sm" ng-click="gotoView('home/a')">home/a</a>*/
/*            <a class="btn btn-default btn-sm" ng-click="gotoView('home/b')">home/b</a>*/
/*            <a class="btn btn-default btn-sm" ng-click="gotoView('home/c')">home/c</a>*/
/*            <a class="btn btn-default btn-sm" ng-click="gotoView('home/d')">home/d</a>*/
/*         </div>*/
/*       </div>*/
/* 			<div class="col-xs-12">*/
/* 				<div ng-view></div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
