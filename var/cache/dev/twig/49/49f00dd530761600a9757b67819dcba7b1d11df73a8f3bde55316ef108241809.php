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
        $__internal_6afbfe288307eebc3dca1f7eb863a72004da7430b580d16fecd6c8a13567b6e5 = $this->env->getExtension("native_profiler");
        $__internal_6afbfe288307eebc3dca1f7eb863a72004da7430b580d16fecd6c8a13567b6e5->enter($__internal_6afbfe288307eebc3dca1f7eb863a72004da7430b580d16fecd6c8a13567b6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6afbfe288307eebc3dca1f7eb863a72004da7430b580d16fecd6c8a13567b6e5->leave($__internal_6afbfe288307eebc3dca1f7eb863a72004da7430b580d16fecd6c8a13567b6e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_242e74465292566789b96c55e165ab64f9d8d36c45f394d8678f63aa697a12e2 = $this->env->getExtension("native_profiler");
        $__internal_242e74465292566789b96c55e165ab64f9d8d36c45f394d8678f63aa697a12e2->enter($__internal_242e74465292566789b96c55e165ab64f9d8d36c45f394d8678f63aa697a12e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_242e74465292566789b96c55e165ab64f9d8d36c45f394d8678f63aa697a12e2->leave($__internal_242e74465292566789b96c55e165ab64f9d8d36c45f394d8678f63aa697a12e2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eb852e00ef29832a6d9bb96098e969f8c7585b4f40c86c0a9628161f0513c634 = $this->env->getExtension("native_profiler");
        $__internal_eb852e00ef29832a6d9bb96098e969f8c7585b4f40c86c0a9628161f0513c634->enter($__internal_eb852e00ef29832a6d9bb96098e969f8c7585b4f40c86c0a9628161f0513c634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eb852e00ef29832a6d9bb96098e969f8c7585b4f40c86c0a9628161f0513c634->leave($__internal_eb852e00ef29832a6d9bb96098e969f8c7585b4f40c86c0a9628161f0513c634_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58e37ce8bad4826aab68214c386e4bbcdf7e6c8f6edfef960f3de6736d65ce1d = $this->env->getExtension("native_profiler");
        $__internal_58e37ce8bad4826aab68214c386e4bbcdf7e6c8f6edfef960f3de6736d65ce1d->enter($__internal_58e37ce8bad4826aab68214c386e4bbcdf7e6c8f6edfef960f3de6736d65ce1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_58e37ce8bad4826aab68214c386e4bbcdf7e6c8f6edfef960f3de6736d65ce1d->leave($__internal_58e37ce8bad4826aab68214c386e4bbcdf7e6c8f6edfef960f3de6736d65ce1d_prof);

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
