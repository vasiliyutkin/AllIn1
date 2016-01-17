<?php

/* AppBundle:page:about.html.twig */
class __TwigTemplate_94ddbd99d3be0cc9a3703968e667a76120d55305b29f3d034da839f4441388a3 extends Twig_Template
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
        $__internal_e6ffec53a983545cc6e43986b4266d6973918ef427458ff7bb9bca05f5529c18 = $this->env->getExtension("native_profiler");
        $__internal_e6ffec53a983545cc6e43986b4266d6973918ef427458ff7bb9bca05f5529c18->enter($__internal_e6ffec53a983545cc6e43986b4266d6973918ef427458ff7bb9bca05f5529c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6ffec53a983545cc6e43986b4266d6973918ef427458ff7bb9bca05f5529c18->leave($__internal_e6ffec53a983545cc6e43986b4266d6973918ef427458ff7bb9bca05f5529c18_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_327494c8bcfb87b356e54e8ab2f8e335cbcb2c6083d49400dae92b09106bbb4a = $this->env->getExtension("native_profiler");
        $__internal_327494c8bcfb87b356e54e8ab2f8e335cbcb2c6083d49400dae92b09106bbb4a->enter($__internal_327494c8bcfb87b356e54e8ab2f8e335cbcb2c6083d49400dae92b09106bbb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_327494c8bcfb87b356e54e8ab2f8e335cbcb2c6083d49400dae92b09106bbb4a->leave($__internal_327494c8bcfb87b356e54e8ab2f8e335cbcb2c6083d49400dae92b09106bbb4a_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_b9573c43dc598d6f4cddfde59acee8abd310cd0ffd1b49c70f63738eb857cb7f = $this->env->getExtension("native_profiler");
        $__internal_b9573c43dc598d6f4cddfde59acee8abd310cd0ffd1b49c70f63738eb857cb7f->enter($__internal_b9573c43dc598d6f4cddfde59acee8abd310cd0ffd1b49c70f63738eb857cb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
\t<div class=\"container\">
\t\t<h1 class='label label-default'>About page info</h1>
\t</div>

";
        
        $__internal_b9573c43dc598d6f4cddfde59acee8abd310cd0ffd1b49c70f63738eb857cb7f->leave($__internal_b9573c43dc598d6f4cddfde59acee8abd310cd0ffd1b49c70f63738eb857cb7f_prof);

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
