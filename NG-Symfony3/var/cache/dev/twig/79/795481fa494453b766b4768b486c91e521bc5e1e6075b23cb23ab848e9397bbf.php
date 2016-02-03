<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5d6b97ab9897ede29b4d151a81b1b3a8e28234c148d172083a9fae632febf549 extends Twig_Template
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
        $__internal_f4419c614fde936205987252d22ec0a67748cb7c455dfaf8066407a4137097e0 = $this->env->getExtension("native_profiler");
        $__internal_f4419c614fde936205987252d22ec0a67748cb7c455dfaf8066407a4137097e0->enter($__internal_f4419c614fde936205987252d22ec0a67748cb7c455dfaf8066407a4137097e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4419c614fde936205987252d22ec0a67748cb7c455dfaf8066407a4137097e0->leave($__internal_f4419c614fde936205987252d22ec0a67748cb7c455dfaf8066407a4137097e0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fea07fcc425a88f0e418ff5bbfa55e812edf804518c6cd2dde92cc617d056837 = $this->env->getExtension("native_profiler");
        $__internal_fea07fcc425a88f0e418ff5bbfa55e812edf804518c6cd2dde92cc617d056837->enter($__internal_fea07fcc425a88f0e418ff5bbfa55e812edf804518c6cd2dde92cc617d056837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fea07fcc425a88f0e418ff5bbfa55e812edf804518c6cd2dde92cc617d056837->leave($__internal_fea07fcc425a88f0e418ff5bbfa55e812edf804518c6cd2dde92cc617d056837_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_98ac4d067886600757c92312363f85728c23d991d30d49d3d1d13ac6fddf6e53 = $this->env->getExtension("native_profiler");
        $__internal_98ac4d067886600757c92312363f85728c23d991d30d49d3d1d13ac6fddf6e53->enter($__internal_98ac4d067886600757c92312363f85728c23d991d30d49d3d1d13ac6fddf6e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_98ac4d067886600757c92312363f85728c23d991d30d49d3d1d13ac6fddf6e53->leave($__internal_98ac4d067886600757c92312363f85728c23d991d30d49d3d1d13ac6fddf6e53_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_282ca8e5b96efacccc293ef0f9c47be8f2035e4870ef5f9fc16f377e055090b2 = $this->env->getExtension("native_profiler");
        $__internal_282ca8e5b96efacccc293ef0f9c47be8f2035e4870ef5f9fc16f377e055090b2->enter($__internal_282ca8e5b96efacccc293ef0f9c47be8f2035e4870ef5f9fc16f377e055090b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_282ca8e5b96efacccc293ef0f9c47be8f2035e4870ef5f9fc16f377e055090b2->leave($__internal_282ca8e5b96efacccc293ef0f9c47be8f2035e4870ef5f9fc16f377e055090b2_prof);

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
