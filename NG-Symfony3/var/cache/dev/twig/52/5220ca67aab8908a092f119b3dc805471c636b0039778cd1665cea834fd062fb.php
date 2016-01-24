<?php

/* AppBundle:page:home.html.twig */
class __TwigTemplate_8cf6ba3e1cfe355d7587156b56cfdb46cbdef1eac7f2d5b88a23854429eed716 extends Twig_Template
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
        $__internal_62f5947ff0f4bb750c1b221c5228fb7e0de7c7634726947a43b2b5a6d5cb1d9e = $this->env->getExtension("native_profiler");
        $__internal_62f5947ff0f4bb750c1b221c5228fb7e0de7c7634726947a43b2b5a6d5cb1d9e->enter($__internal_62f5947ff0f4bb750c1b221c5228fb7e0de7c7634726947a43b2b5a6d5cb1d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:page:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62f5947ff0f4bb750c1b221c5228fb7e0de7c7634726947a43b2b5a6d5cb1d9e->leave($__internal_62f5947ff0f4bb750c1b221c5228fb7e0de7c7634726947a43b2b5a6d5cb1d9e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_627a1289fd2f5ef51b0f813a7865e5e25d2993096b8cf2720ee30140acd8bfe3 = $this->env->getExtension("native_profiler");
        $__internal_627a1289fd2f5ef51b0f813a7865e5e25d2993096b8cf2720ee30140acd8bfe3->enter($__internal_627a1289fd2f5ef51b0f813a7865e5e25d2993096b8cf2720ee30140acd8bfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_627a1289fd2f5ef51b0f813a7865e5e25d2993096b8cf2720ee30140acd8bfe3->leave($__internal_627a1289fd2f5ef51b0f813a7865e5e25d2993096b8cf2720ee30140acd8bfe3_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_fec60a49f73c39880c77b05ae096dfddb5762e08f8d3a9d0914c0607065d2be8 = $this->env->getExtension("native_profiler");
        $__internal_fec60a49f73c39880c77b05ae096dfddb5762e08f8d3a9d0914c0607065d2be8->enter($__internal_fec60a49f73c39880c77b05ae096dfddb5762e08f8d3a9d0914c0607065d2be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_fec60a49f73c39880c77b05ae096dfddb5762e08f8d3a9d0914c0607065d2be8->leave($__internal_fec60a49f73c39880c77b05ae096dfddb5762e08f8d3a9d0914c0607065d2be8_prof);

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
