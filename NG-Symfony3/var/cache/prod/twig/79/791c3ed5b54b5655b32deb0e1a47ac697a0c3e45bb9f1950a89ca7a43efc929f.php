<?php

/* AppBundle:page:home.html.twig */
class __TwigTemplate_8f0a4b8db565bfdf6956084f97c0e762388fd0f1db662e3740256e39109eb034 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
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
        return array (  52 => 12,  49 => 11,  46 => 10,  43 => 9,  41 => 8,  37 => 6,  34 => 5,  29 => 3,  11 => 1,);
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
