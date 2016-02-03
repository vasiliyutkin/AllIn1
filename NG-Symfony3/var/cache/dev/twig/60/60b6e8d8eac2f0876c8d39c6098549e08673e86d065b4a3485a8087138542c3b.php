<?php

/* AppBundle:page:home.html.twig */
class __TwigTemplate_d5a62d68ac65809e04cedfa5bb4ac8948b2f55810273212a06086961c590f5ec extends Twig_Template
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
        $__internal_ca78fc9f07529e3336aee0c95d0c1c50128c159a18fb52f39fa31fc694f1adb3 = $this->env->getExtension("native_profiler");
        $__internal_ca78fc9f07529e3336aee0c95d0c1c50128c159a18fb52f39fa31fc694f1adb3->enter($__internal_ca78fc9f07529e3336aee0c95d0c1c50128c159a18fb52f39fa31fc694f1adb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:page:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca78fc9f07529e3336aee0c95d0c1c50128c159a18fb52f39fa31fc694f1adb3->leave($__internal_ca78fc9f07529e3336aee0c95d0c1c50128c159a18fb52f39fa31fc694f1adb3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf18ac6cd9b57e3bc0feaeb625ae9c8cde9f135c8a6118e92009d75252fb36f7 = $this->env->getExtension("native_profiler");
        $__internal_bf18ac6cd9b57e3bc0feaeb625ae9c8cde9f135c8a6118e92009d75252fb36f7->enter($__internal_bf18ac6cd9b57e3bc0feaeb625ae9c8cde9f135c8a6118e92009d75252fb36f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bf18ac6cd9b57e3bc0feaeb625ae9c8cde9f135c8a6118e92009d75252fb36f7->leave($__internal_bf18ac6cd9b57e3bc0feaeb625ae9c8cde9f135c8a6118e92009d75252fb36f7_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_ab34a1beef1eacb711af91c135b242b90942fd7b839be157b2751f051521a314 = $this->env->getExtension("native_profiler");
        $__internal_ab34a1beef1eacb711af91c135b242b90942fd7b839be157b2751f051521a314->enter($__internal_ab34a1beef1eacb711af91c135b242b90942fd7b839be157b2751f051521a314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ab34a1beef1eacb711af91c135b242b90942fd7b839be157b2751f051521a314->leave($__internal_ab34a1beef1eacb711af91c135b242b90942fd7b839be157b2751f051521a314_prof);

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
