<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_07813448b4f8f08d5242ea50122da51da5916806d3b36e94c5e6cfc020c3697f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_f25a82ec240eb4640694d172bb4583204f6b59ff579d09c30c2f2b320ea8027b = $this->env->getExtension("native_profiler");
        $__internal_f25a82ec240eb4640694d172bb4583204f6b59ff579d09c30c2f2b320ea8027b->enter($__internal_f25a82ec240eb4640694d172bb4583204f6b59ff579d09c30c2f2b320ea8027b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f25a82ec240eb4640694d172bb4583204f6b59ff579d09c30c2f2b320ea8027b->leave($__internal_f25a82ec240eb4640694d172bb4583204f6b59ff579d09c30c2f2b320ea8027b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_18b528e92a1c8148c3f363d6313c6574f75f979183140226fe177ee59b7bfd10 = $this->env->getExtension("native_profiler");
        $__internal_18b528e92a1c8148c3f363d6313c6574f75f979183140226fe177ee59b7bfd10->enter($__internal_18b528e92a1c8148c3f363d6313c6574f75f979183140226fe177ee59b7bfd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_18b528e92a1c8148c3f363d6313c6574f75f979183140226fe177ee59b7bfd10->leave($__internal_18b528e92a1c8148c3f363d6313c6574f75f979183140226fe177ee59b7bfd10_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dfae57e29076b6c90155c60e49245ea90ee9758f8295259a0adf96c99ad990fa = $this->env->getExtension("native_profiler");
        $__internal_dfae57e29076b6c90155c60e49245ea90ee9758f8295259a0adf96c99ad990fa->enter($__internal_dfae57e29076b6c90155c60e49245ea90ee9758f8295259a0adf96c99ad990fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dfae57e29076b6c90155c60e49245ea90ee9758f8295259a0adf96c99ad990fa->leave($__internal_dfae57e29076b6c90155c60e49245ea90ee9758f8295259a0adf96c99ad990fa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_64557475fc20b1166a99b54b1cac157be1ccfe28f298c0279a133d7a70c2e712 = $this->env->getExtension("native_profiler");
        $__internal_64557475fc20b1166a99b54b1cac157be1ccfe28f298c0279a133d7a70c2e712->enter($__internal_64557475fc20b1166a99b54b1cac157be1ccfe28f298c0279a133d7a70c2e712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_64557475fc20b1166a99b54b1cac157be1ccfe28f298c0279a133d7a70c2e712->leave($__internal_64557475fc20b1166a99b54b1cac157be1ccfe28f298c0279a133d7a70c2e712_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
