<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_69331a07d4c2d4fe14c08788a21cf28f648cb64b7cdf83d9cd3fb51e343ca15b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fffe0ceef2168072a06b7ae2c8f97f753f7fd8d5fa3a03f627a462f699c2c58b = $this->env->getExtension("native_profiler");
        $__internal_fffe0ceef2168072a06b7ae2c8f97f753f7fd8d5fa3a03f627a462f699c2c58b->enter($__internal_fffe0ceef2168072a06b7ae2c8f97f753f7fd8d5fa3a03f627a462f699c2c58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_fffe0ceef2168072a06b7ae2c8f97f753f7fd8d5fa3a03f627a462f699c2c58b->leave($__internal_fffe0ceef2168072a06b7ae2c8f97f753f7fd8d5fa3a03f627a462f699c2c58b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
