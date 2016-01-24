<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5544c7d5e54d1ba6b99d7cd0b114384af7e631e0b967a87b3e5653a63d5ae3bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6838529c3a326f0bfb3850db08744b924adc7395acc45e54a34653cb4d8576ec = $this->env->getExtension("native_profiler");
        $__internal_6838529c3a326f0bfb3850db08744b924adc7395acc45e54a34653cb4d8576ec->enter($__internal_6838529c3a326f0bfb3850db08744b924adc7395acc45e54a34653cb4d8576ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6838529c3a326f0bfb3850db08744b924adc7395acc45e54a34653cb4d8576ec->leave($__internal_6838529c3a326f0bfb3850db08744b924adc7395acc45e54a34653cb4d8576ec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_31f750136dbf158504fea186969ffc0ac2d6ae316601a93933cc905bff2c3240 = $this->env->getExtension("native_profiler");
        $__internal_31f750136dbf158504fea186969ffc0ac2d6ae316601a93933cc905bff2c3240->enter($__internal_31f750136dbf158504fea186969ffc0ac2d6ae316601a93933cc905bff2c3240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_31f750136dbf158504fea186969ffc0ac2d6ae316601a93933cc905bff2c3240->leave($__internal_31f750136dbf158504fea186969ffc0ac2d6ae316601a93933cc905bff2c3240_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f110968922f46ac689f288151905df9c8b2aabcefa408c0252bb603f0dd3773f = $this->env->getExtension("native_profiler");
        $__internal_f110968922f46ac689f288151905df9c8b2aabcefa408c0252bb603f0dd3773f->enter($__internal_f110968922f46ac689f288151905df9c8b2aabcefa408c0252bb603f0dd3773f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f110968922f46ac689f288151905df9c8b2aabcefa408c0252bb603f0dd3773f->leave($__internal_f110968922f46ac689f288151905df9c8b2aabcefa408c0252bb603f0dd3773f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_50197d5f282ba8068607c036ec37d9b8f405f3103f3d7cc31b83cc14ace6fd73 = $this->env->getExtension("native_profiler");
        $__internal_50197d5f282ba8068607c036ec37d9b8f405f3103f3d7cc31b83cc14ace6fd73->enter($__internal_50197d5f282ba8068607c036ec37d9b8f405f3103f3d7cc31b83cc14ace6fd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_50197d5f282ba8068607c036ec37d9b8f405f3103f3d7cc31b83cc14ace6fd73->leave($__internal_50197d5f282ba8068607c036ec37d9b8f405f3103f3d7cc31b83cc14ace6fd73_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
