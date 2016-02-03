<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_054c36ee5e47ee005e804347af3e85d609e87190aa2fafbdfe2c047c1782a74e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle::base.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'header_nav' => array($this, 'block_header_nav'),
            'content' => array($this, 'block_content'),
            'powered' => array($this, 'block_powered'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87de369be6329b48a32df0608df124fe9ee7c921429d2dbf4c736f51ed4fd821 = $this->env->getExtension("native_profiler");
        $__internal_87de369be6329b48a32df0608df124fe9ee7c921429d2dbf4c736f51ed4fd821->enter($__internal_87de369be6329b48a32df0608df124fe9ee7c921429d2dbf4c736f51ed4fd821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87de369be6329b48a32df0608df124fe9ee7c921429d2dbf4c736f51ed4fd821->leave($__internal_87de369be6329b48a32df0608df124fe9ee7c921429d2dbf4c736f51ed4fd821_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd87c8891858bfed74458ce4b7661d719a73167e80c0cfc12205af0053d4a74c = $this->env->getExtension("native_profiler");
        $__internal_dd87c8891858bfed74458ce4b7661d719a73167e80c0cfc12205af0053d4a74c->enter($__internal_dd87c8891858bfed74458ce4b7661d719a73167e80c0cfc12205af0053d4a74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/normalize.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/animate.min.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
\t";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3e7b5a2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e7b5a2_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3e7b5a2_part_1_styles_1.css");
            // line 8
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
            // asset "3e7b5a2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e7b5a2_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3e7b5a2_part_1_styles.css_2.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "3e7b5a2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e7b5a2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3e7b5a2.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
        
        $__internal_dd87c8891858bfed74458ce4b7661d719a73167e80c0cfc12205af0053d4a74c->leave($__internal_dd87c8891858bfed74458ce4b7661d719a73167e80c0cfc12205af0053d4a74c_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_363b3a794f603ebc70b5856afeaf82b8dade5913f18da28cc1e0e0b162c150e6 = $this->env->getExtension("native_profiler");
        $__internal_363b3a794f603ebc70b5856afeaf82b8dade5913f18da28cc1e0e0b162c150e6->enter($__internal_363b3a794f603ebc70b5856afeaf82b8dade5913f18da28cc1e0e0b162c150e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/require.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/angular.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/angular-route.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
\t";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bb54fd1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bb54fd1_part_1_init_1.js");
            // line 20
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "bb54fd1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bb54fd1.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        
        $__internal_363b3a794f603ebc70b5856afeaf82b8dade5913f18da28cc1e0e0b162c150e6->leave($__internal_363b3a794f603ebc70b5856afeaf82b8dade5913f18da28cc1e0e0b162c150e6_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0d9520bc62a0998b25ec7d32159dd80095d86d379df9e3345779d8dc46f3045 = $this->env->getExtension("native_profiler");
        $__internal_c0d9520bc62a0998b25ec7d32159dd80095d86d379df9e3345779d8dc46f3045->enter($__internal_c0d9520bc62a0998b25ec7d32159dd80095d86d379df9e3345779d8dc46f3045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "\t<div id=\"wrapper\">
    <header>
    ";
        // line 27
        $this->displayBlock('header_nav', $context, $blocks);
        // line 55
        echo "      <time />
\t\t</header>

\t\t<section id=\"content\">
      <br>
\t\t\t";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "\t\t</section>

\t\t<footer>
      ";
        // line 64
        $this->displayBlock('powered', $context, $blocks);
        // line 81
        echo "\t\t</footer>
\t</div>
";
        
        $__internal_c0d9520bc62a0998b25ec7d32159dd80095d86d379df9e3345779d8dc46f3045->leave($__internal_c0d9520bc62a0998b25ec7d32159dd80095d86d379df9e3345779d8dc46f3045_prof);

    }

    // line 27
    public function block_header_nav($context, array $blocks = array())
    {
        $__internal_ed818b9d8d6cf778be2fdbd514edc59442b28a7902e4df8ef9ff2ba21d50368e = $this->env->getExtension("native_profiler");
        $__internal_ed818b9d8d6cf778be2fdbd514edc59442b28a7902e4df8ef9ff2ba21d50368e->enter($__internal_ed818b9d8d6cf778be2fdbd514edc59442b28a7902e4df8ef9ff2ba21d50368e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_nav"));

        // line 28
        echo "    <nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
      <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav\">
          <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">Home</a>
          </li>
          <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("_about");
        echo "\">About</a>
          </li>
          <li>
              <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("_description");
        echo "\">Description</a>
          </li>
        </ul>
        <form class=\"navbar-form navbar-right\">
          <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Login\">
          </div>
          <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"password\">
          </div>
          <button type=\"submit\" class=\"btn btn-default\">Authorize</button>
        </form>
      </div>
    </div>
  </nav>
    ";
        
        $__internal_ed818b9d8d6cf778be2fdbd514edc59442b28a7902e4df8ef9ff2ba21d50368e->leave($__internal_ed818b9d8d6cf778be2fdbd514edc59442b28a7902e4df8ef9ff2ba21d50368e_prof);

    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
        $__internal_f947b94459535a9c591f94a9f33cbac2959453b273bada093d14ab3ee7288562 = $this->env->getExtension("native_profiler");
        $__internal_f947b94459535a9c591f94a9f33cbac2959453b273bada093d14ab3ee7288562->enter($__internal_f947b94459535a9c591f94a9f33cbac2959453b273bada093d14ab3ee7288562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_f947b94459535a9c591f94a9f33cbac2959453b273bada093d14ab3ee7288562->leave($__internal_f947b94459535a9c591f94a9f33cbac2959453b273bada093d14ab3ee7288562_prof);

    }

    // line 64
    public function block_powered($context, array $blocks = array())
    {
        $__internal_7979ff91cdb0422b06ab98e8cc7654adb353d536f5cd3ceb090499f9329b13f1 = $this->env->getExtension("native_profiler");
        $__internal_7979ff91cdb0422b06ab98e8cc7654adb353d536f5cd3ceb090499f9329b13f1->enter($__internal_7979ff91cdb0422b06ab98e8cc7654adb353d536f5cd3ceb090499f9329b13f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "powered"));

        // line 65
        echo "      <div class=\"powered-text\">
        <h3>Powered by <span style='color: #fafafa; text-transform: capitalize; border-bottom: 2px solid #a55;'>Andrew Blinoff</span> on listed Technlogies &darr;</h3>
      </div>
          <div id='powered-by'>
            <div class='powered-item'><img style=\"height: 50px; height: 50px;\" alt=\"Brand\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/powered/ng.png"), "html", null, true);
        echo "\"></div>
            <div class='powered-item'><img style=\"height: 50px; height: 50px;\" alt=\"Brand\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/powered/html.svg"), "html", null, true);
        echo "\"></div>
            <div class='powered-item'><img style=\"height: 50px; height: 50px;\" alt=\"Brand\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/powered/css.png"), "html", null, true);
        echo "\"></div>
            <div class='powered-item'><img style=\"width: 50px; height: 50px;\" alt=\"Brand\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/powered/sf.png"), "html", null, true);
        echo "\"></div>
            <div class='powered-item'><img style=\"width: 50px; height: 50px;\" alt=\"Brand\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/powered/sql.png"), "html", null, true);
        echo "\"></div>
            <div class='powered-item'><img style=\"height: 50px; height: 50px;\" alt=\"Brand\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/powered/unity.png"), "html", null, true);
        echo "\"></div>
            <div class='powered-item'><img style=\"height: 50px; height: 50px;\" alt=\"Brand\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/powered/gulp.png"), "html", null, true);
        echo "\"></div>
          </div>
        <div class='feedback'>
          <p>You could leave me feedback on <a href=\"http://vk.com/and1_ray\" target='_blank'>Vkontakte</a> <span>&rArr;</span> <a href=\"https://www.facebook.com/andrey.blinov.33\" target='_blank'>Facebook</a> <span>&rArr;</span> <a href=\"https://github.com/vasiliyutkin\" target='_blank'>Github</a></p>
        </div>
      ";
        
        $__internal_7979ff91cdb0422b06ab98e8cc7654adb353d536f5cd3ceb090499f9329b13f1->leave($__internal_7979ff91cdb0422b06ab98e8cc7654adb353d536f5cd3ceb090499f9329b13f1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 75,  269 => 74,  265 => 73,  261 => 72,  257 => 71,  253 => 70,  249 => 69,  243 => 65,  237 => 64,  226 => 60,  203 => 39,  197 => 36,  191 => 33,  184 => 28,  178 => 27,  169 => 81,  167 => 64,  162 => 61,  160 => 60,  153 => 55,  151 => 27,  147 => 25,  141 => 24,  122 => 20,  118 => 19,  114 => 18,  110 => 17,  106 => 16,  102 => 15,  98 => 14,  93 => 13,  87 => 12,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* 	<link rel="stylesheet" href="{{ asset('lib/css/normalize.css') }}"/>*/
/* 	<link rel="stylesheet" href="{{ asset('lib/css/animate.min.css') }}"/>*/
/* 	<link rel="stylesheet" href="{{ asset('lib/css/bootstrap.min.css') }}"/>*/
/* 	{% stylesheets '@AppBundle/Resources/public/css/*' filter='cssrewrite' %}*/
/* 	<link rel="stylesheet" href="{{ asset_url }}" />*/
/* 	{% endstylesheets %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	<script src="{{ asset('lib/scripts/require.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/jquery.min.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/angular.min.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/angular-route.min.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/bootstrap.min.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/html5shiv.min.js') }}"></script>*/
/* 	{% javascripts '@AppBundle/Resources/public/js/*' %}*/
/* 	<script src="{{ asset_url }}"></script>*/
/* 	{% endjavascripts %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<div id="wrapper">*/
/*     <header>*/
/*     {% block header_nav %}*/
/*     <nav class="navbar navbar-inverse">*/
/*     <div class="container-fluid">*/
/*       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*         <ul class="nav navbar-nav">*/
/*           <li>*/
/*             <a href="{{ path('_home') }}">Home</a>*/
/*           </li>*/
/*           <li>*/
/*             <a href="{{ path('_about') }}">About</a>*/
/*           </li>*/
/*           <li>*/
/*               <a href="{{ path('_description') }}">Description</a>*/
/*           </li>*/
/*         </ul>*/
/*         <form class="navbar-form navbar-right">*/
/*           <div class="form-group">*/
/*             <input type="text" class="form-control" placeholder="Login">*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <input type="text" class="form-control" placeholder="password">*/
/*           </div>*/
/*           <button type="submit" class="btn btn-default">Authorize</button>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </nav>*/
/*     {% endblock %}*/
/*       <time />*/
/* 		</header>*/
/* */
/* 		<section id="content">*/
/*       <br>*/
/* 			{% block content %}{% endblock %}*/
/* 		</section>*/
/* */
/* 		<footer>*/
/*       {% block powered %}*/
/*       <div class="powered-text">*/
/*         <h3>Powered by <span style='color: #fafafa; text-transform: capitalize; border-bottom: 2px solid #a55;'>Andrew Blinoff</span> on listed Technlogies &darr;</h3>*/
/*       </div>*/
/*           <div id='powered-by'>*/
/*             <div class='powered-item'><img style="height: 50px; height: 50px;" alt="Brand" src="{{asset('images/powered/ng.png')}}"></div>*/
/*             <div class='powered-item'><img style="height: 50px; height: 50px;" alt="Brand" src="{{asset('images/powered/html.svg')}}"></div>*/
/*             <div class='powered-item'><img style="height: 50px; height: 50px;" alt="Brand" src="{{asset('images/powered/css.png')}}"></div>*/
/*             <div class='powered-item'><img style="width: 50px; height: 50px;" alt="Brand" src="{{asset('images/powered/sf.png')}}"></div>*/
/*             <div class='powered-item'><img style="width: 50px; height: 50px;" alt="Brand" src="{{asset('images/powered/sql.png')}}"></div>*/
/*             <div class='powered-item'><img style="height: 50px; height: 50px;" alt="Brand" src="{{asset('images/powered/unity.png')}}"></div>*/
/*             <div class='powered-item'><img style="height: 50px; height: 50px;" alt="Brand" src="{{asset('images/powered/gulp.png')}}"></div>*/
/*           </div>*/
/*         <div class='feedback'>*/
/*           <p>You could leave me feedback on <a href="http://vk.com/and1_ray" target='_blank'>Vkontakte</a> <span>&rArr;</span> <a href="https://www.facebook.com/andrey.blinov.33" target='_blank'>Facebook</a> <span>&rArr;</span> <a href="https://github.com/vasiliyutkin" target='_blank'>Github</a></p>*/
/*         </div>*/
/*       {% endblock %}*/
/* 		</footer>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
