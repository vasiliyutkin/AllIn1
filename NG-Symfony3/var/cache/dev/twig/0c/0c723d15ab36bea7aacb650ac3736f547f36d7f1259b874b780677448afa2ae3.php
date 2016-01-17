<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4ede90ee947a42281408475f8558d02cc8f8d58a76d336b7372aa677844bc927 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b2c126067e76772fb80d343bf8388554ec12eff3dbd56d4ef99631c13539da1 = $this->env->getExtension("native_profiler");
        $__internal_2b2c126067e76772fb80d343bf8388554ec12eff3dbd56d4ef99631c13539da1->enter($__internal_2b2c126067e76772fb80d343bf8388554ec12eff3dbd56d4ef99631c13539da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b2c126067e76772fb80d343bf8388554ec12eff3dbd56d4ef99631c13539da1->leave($__internal_2b2c126067e76772fb80d343bf8388554ec12eff3dbd56d4ef99631c13539da1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9a71fafb2dae51f506137269f3bc354da031809dea65ae2caa8c94743c056ab = $this->env->getExtension("native_profiler");
        $__internal_f9a71fafb2dae51f506137269f3bc354da031809dea65ae2caa8c94743c056ab->enter($__internal_f9a71fafb2dae51f506137269f3bc354da031809dea65ae2caa8c94743c056ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f9a71fafb2dae51f506137269f3bc354da031809dea65ae2caa8c94743c056ab->leave($__internal_f9a71fafb2dae51f506137269f3bc354da031809dea65ae2caa8c94743c056ab_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d22922833cac42d86a0ea67c05f45e7a9abbfa285a20e1359d71451ad903cc2 = $this->env->getExtension("native_profiler");
        $__internal_7d22922833cac42d86a0ea67c05f45e7a9abbfa285a20e1359d71451ad903cc2->enter($__internal_7d22922833cac42d86a0ea67c05f45e7a9abbfa285a20e1359d71451ad903cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7d22922833cac42d86a0ea67c05f45e7a9abbfa285a20e1359d71451ad903cc2->leave($__internal_7d22922833cac42d86a0ea67c05f45e7a9abbfa285a20e1359d71451ad903cc2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f351331842097b6f2717f506a723af011163d3ad3f2ac18b60460c9517d51dce = $this->env->getExtension("native_profiler");
        $__internal_f351331842097b6f2717f506a723af011163d3ad3f2ac18b60460c9517d51dce->enter($__internal_f351331842097b6f2717f506a723af011163d3ad3f2ac18b60460c9517d51dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f351331842097b6f2717f506a723af011163d3ad3f2ac18b60460c9517d51dce->leave($__internal_f351331842097b6f2717f506a723af011163d3ad3f2ac18b60460c9517d51dce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
