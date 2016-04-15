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
        $__internal_f232ec748f0aa3fafb2e2d7a9560e423e381540066f0517b42f0d968f94e0df3 = $this->env->getExtension("native_profiler");
        $__internal_f232ec748f0aa3fafb2e2d7a9560e423e381540066f0517b42f0d968f94e0df3->enter($__internal_f232ec748f0aa3fafb2e2d7a9560e423e381540066f0517b42f0d968f94e0df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f232ec748f0aa3fafb2e2d7a9560e423e381540066f0517b42f0d968f94e0df3->leave($__internal_f232ec748f0aa3fafb2e2d7a9560e423e381540066f0517b42f0d968f94e0df3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e20098213f4e96cf63d049867ff8350843fd237c4bfd54dd9d145ac7eee3a7bc = $this->env->getExtension("native_profiler");
        $__internal_e20098213f4e96cf63d049867ff8350843fd237c4bfd54dd9d145ac7eee3a7bc->enter($__internal_e20098213f4e96cf63d049867ff8350843fd237c4bfd54dd9d145ac7eee3a7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e20098213f4e96cf63d049867ff8350843fd237c4bfd54dd9d145ac7eee3a7bc->leave($__internal_e20098213f4e96cf63d049867ff8350843fd237c4bfd54dd9d145ac7eee3a7bc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dce2177f83656ed2ba037f8f0646e29b99c816107ebb74c9700cf70dd67a888b = $this->env->getExtension("native_profiler");
        $__internal_dce2177f83656ed2ba037f8f0646e29b99c816107ebb74c9700cf70dd67a888b->enter($__internal_dce2177f83656ed2ba037f8f0646e29b99c816107ebb74c9700cf70dd67a888b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dce2177f83656ed2ba037f8f0646e29b99c816107ebb74c9700cf70dd67a888b->leave($__internal_dce2177f83656ed2ba037f8f0646e29b99c816107ebb74c9700cf70dd67a888b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b279dd83a21b732c6c8787b4e9b4411d1e65ee8aed4b32c0b6455da2f5825d7 = $this->env->getExtension("native_profiler");
        $__internal_2b279dd83a21b732c6c8787b4e9b4411d1e65ee8aed4b32c0b6455da2f5825d7->enter($__internal_2b279dd83a21b732c6c8787b4e9b4411d1e65ee8aed4b32c0b6455da2f5825d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2b279dd83a21b732c6c8787b4e9b4411d1e65ee8aed4b32c0b6455da2f5825d7->leave($__internal_2b279dd83a21b732c6c8787b4e9b4411d1e65ee8aed4b32c0b6455da2f5825d7_prof);

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
