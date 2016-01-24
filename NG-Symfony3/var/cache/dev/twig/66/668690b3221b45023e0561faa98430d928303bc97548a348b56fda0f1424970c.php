<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_4c3297725b3180941f9b2fcd6643adbb7e461a5f0826d06d044907b0a8c9381e extends Twig_Template
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
        $__internal_30eb2f707c85745efbabc1e6726feef1025f533102f02a83be3948538b78f7b0 = $this->env->getExtension("native_profiler");
        $__internal_30eb2f707c85745efbabc1e6726feef1025f533102f02a83be3948538b78f7b0->enter($__internal_30eb2f707c85745efbabc1e6726feef1025f533102f02a83be3948538b78f7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
        
        $__internal_30eb2f707c85745efbabc1e6726feef1025f533102f02a83be3948538b78f7b0->leave($__internal_30eb2f707c85745efbabc1e6726feef1025f533102f02a83be3948538b78f7b0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="{{ _charset }}" />*/
/*         <title>An Error Occurred: {{ status_text }}</title>*/
/*     </head>*/
/*     <body>*/
/*         <h1>Oops! An Error Occurred</h1>*/
/*         <h2>The server returned a "{{ status_code }} {{ status_text }}".</h2>*/
/* */
/*         <div>*/
/*             Something is broken. Please let us know what you were doing when this error occurred.*/
/*             We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
