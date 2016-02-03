<?php

/* AppBundle:page:about.html.twig */
class __TwigTemplate_2e5da29281bf876e9e79bcacd3fb2fcaebf624312b193e711c67b95914aeb4dd extends Twig_Template
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
        $__internal_0b61c4da644613cc235e27637d852a4d5d94d210c3c49c0abdfe4dc2be3ed677 = $this->env->getExtension("native_profiler");
        $__internal_0b61c4da644613cc235e27637d852a4d5d94d210c3c49c0abdfe4dc2be3ed677->enter($__internal_0b61c4da644613cc235e27637d852a4d5d94d210c3c49c0abdfe4dc2be3ed677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b61c4da644613cc235e27637d852a4d5d94d210c3c49c0abdfe4dc2be3ed677->leave($__internal_0b61c4da644613cc235e27637d852a4d5d94d210c3c49c0abdfe4dc2be3ed677_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2cc0e87052da3cbb1f334fdd617e5e9ff0b9e8908cf485af63105a0f6c65f52 = $this->env->getExtension("native_profiler");
        $__internal_a2cc0e87052da3cbb1f334fdd617e5e9ff0b9e8908cf485af63105a0f6c65f52->enter($__internal_a2cc0e87052da3cbb1f334fdd617e5e9ff0b9e8908cf485af63105a0f6c65f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a2cc0e87052da3cbb1f334fdd617e5e9ff0b9e8908cf485af63105a0f6c65f52->leave($__internal_a2cc0e87052da3cbb1f334fdd617e5e9ff0b9e8908cf485af63105a0f6c65f52_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_c97aade200eb0c0de85a47ef3a61aa4d1cea310ac9dc59de30426390489a49a9 = $this->env->getExtension("native_profiler");
        $__internal_c97aade200eb0c0de85a47ef3a61aa4d1cea310ac9dc59de30426390489a49a9->enter($__internal_c97aade200eb0c0de85a47ef3a61aa4d1cea310ac9dc59de30426390489a49a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
\t<div class=\"container\">
\t\t<h1 class='label label-default'>About page info</h1>
\t</div>

";
        
        $__internal_c97aade200eb0c0de85a47ef3a61aa4d1cea310ac9dc59de30426390489a49a9->leave($__internal_c97aade200eb0c0de85a47ef3a61aa4d1cea310ac9dc59de30426390489a49a9_prof);

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
