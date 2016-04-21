<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_730bd54c72d0f008a52430b787001293fc2ed64099dd7fc29a4fb58d1b6bad78 extends Twig_Template
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
        $__internal_89ba0eed2257871222333cdcdc2ad33433770eeaaef2339fc890112666390276 = $this->env->getExtension("native_profiler");
        $__internal_89ba0eed2257871222333cdcdc2ad33433770eeaaef2339fc890112666390276->enter($__internal_89ba0eed2257871222333cdcdc2ad33433770eeaaef2339fc890112666390276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89ba0eed2257871222333cdcdc2ad33433770eeaaef2339fc890112666390276->leave($__internal_89ba0eed2257871222333cdcdc2ad33433770eeaaef2339fc890112666390276_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ef24d7ab645ff469e94d4ff0573c978e140c915e04287e64c4b5772f859704cf = $this->env->getExtension("native_profiler");
        $__internal_ef24d7ab645ff469e94d4ff0573c978e140c915e04287e64c4b5772f859704cf->enter($__internal_ef24d7ab645ff469e94d4ff0573c978e140c915e04287e64c4b5772f859704cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ef24d7ab645ff469e94d4ff0573c978e140c915e04287e64c4b5772f859704cf->leave($__internal_ef24d7ab645ff469e94d4ff0573c978e140c915e04287e64c4b5772f859704cf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4ebbf7a64f4fa635456bf08fd457958fe09ddb5f40e1463b7389a1e1ccabb81d = $this->env->getExtension("native_profiler");
        $__internal_4ebbf7a64f4fa635456bf08fd457958fe09ddb5f40e1463b7389a1e1ccabb81d->enter($__internal_4ebbf7a64f4fa635456bf08fd457958fe09ddb5f40e1463b7389a1e1ccabb81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4ebbf7a64f4fa635456bf08fd457958fe09ddb5f40e1463b7389a1e1ccabb81d->leave($__internal_4ebbf7a64f4fa635456bf08fd457958fe09ddb5f40e1463b7389a1e1ccabb81d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f4de8a7ed9bc0e1ff3e6e93f8b8bca3c78787ba11bf1d4c59ea262d9973050e = $this->env->getExtension("native_profiler");
        $__internal_8f4de8a7ed9bc0e1ff3e6e93f8b8bca3c78787ba11bf1d4c59ea262d9973050e->enter($__internal_8f4de8a7ed9bc0e1ff3e6e93f8b8bca3c78787ba11bf1d4c59ea262d9973050e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8f4de8a7ed9bc0e1ff3e6e93f8b8bca3c78787ba11bf1d4c59ea262d9973050e->leave($__internal_8f4de8a7ed9bc0e1ff3e6e93f8b8bca3c78787ba11bf1d4c59ea262d9973050e_prof);

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
