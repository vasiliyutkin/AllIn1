<?php

/* AppBundle:page:description.html.twig */
class __TwigTemplate_7eacc895bf54a373b31512ca98d9e859d26b2a26ebf12b2b55da9bd6f4b2b396 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:page:description.html.twig", 1);
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
        $__internal_f41da90abf6f0ecce6d39add38608183f4e6b12f5822b6df79fc56c9e024c4a0 = $this->env->getExtension("native_profiler");
        $__internal_f41da90abf6f0ecce6d39add38608183f4e6b12f5822b6df79fc56c9e024c4a0->enter($__internal_f41da90abf6f0ecce6d39add38608183f4e6b12f5822b6df79fc56c9e024c4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:page:description.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f41da90abf6f0ecce6d39add38608183f4e6b12f5822b6df79fc56c9e024c4a0->leave($__internal_f41da90abf6f0ecce6d39add38608183f4e6b12f5822b6df79fc56c9e024c4a0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fd49c8ab542556237ed3acdafb0539d90a85c9d10e9bf504871f34774b19834 = $this->env->getExtension("native_profiler");
        $__internal_9fd49c8ab542556237ed3acdafb0539d90a85c9d10e9bf504871f34774b19834->enter($__internal_9fd49c8ab542556237ed3acdafb0539d90a85c9d10e9bf504871f34774b19834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9fd49c8ab542556237ed3acdafb0539d90a85c9d10e9bf504871f34774b19834->leave($__internal_9fd49c8ab542556237ed3acdafb0539d90a85c9d10e9bf504871f34774b19834_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_022189bad6d1ae374a90f2288989e148c88ab011084b0f8ad696a43b7db611b0 = $this->env->getExtension("native_profiler");
        $__internal_022189bad6d1ae374a90f2288989e148c88ab011084b0f8ad696a43b7db611b0->enter($__internal_022189bad6d1ae374a90f2288989e148c88ab011084b0f8ad696a43b7db611b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
\t<div class=\"container\">
\t\t<h1 class='label label-info'>Description page</h1>
\t</div>

";
        
        $__internal_022189bad6d1ae374a90f2288989e148c88ab011084b0f8ad696a43b7db611b0->leave($__internal_022189bad6d1ae374a90f2288989e148c88ab011084b0f8ad696a43b7db611b0_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:page:description.html.twig";
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
/* 		<h1 class='label label-info'>Description page</h1>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
