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
        $__internal_51d36cb1e418a753678059fdd3254bbabb1c65b5df66faf8ba3be0efec7a24ce = $this->env->getExtension("native_profiler");
        $__internal_51d36cb1e418a753678059fdd3254bbabb1c65b5df66faf8ba3be0efec7a24ce->enter($__internal_51d36cb1e418a753678059fdd3254bbabb1c65b5df66faf8ba3be0efec7a24ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51d36cb1e418a753678059fdd3254bbabb1c65b5df66faf8ba3be0efec7a24ce->leave($__internal_51d36cb1e418a753678059fdd3254bbabb1c65b5df66faf8ba3be0efec7a24ce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a6b210b233fec79dd6994e7e987a7686ba72df280228dc11dce413508822ecf = $this->env->getExtension("native_profiler");
        $__internal_2a6b210b233fec79dd6994e7e987a7686ba72df280228dc11dce413508822ecf->enter($__internal_2a6b210b233fec79dd6994e7e987a7686ba72df280228dc11dce413508822ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2a6b210b233fec79dd6994e7e987a7686ba72df280228dc11dce413508822ecf->leave($__internal_2a6b210b233fec79dd6994e7e987a7686ba72df280228dc11dce413508822ecf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d98e14fff18b0672dc2dd9c1f0811f4290e88df864979cb9f3e750ff68641993 = $this->env->getExtension("native_profiler");
        $__internal_d98e14fff18b0672dc2dd9c1f0811f4290e88df864979cb9f3e750ff68641993->enter($__internal_d98e14fff18b0672dc2dd9c1f0811f4290e88df864979cb9f3e750ff68641993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d98e14fff18b0672dc2dd9c1f0811f4290e88df864979cb9f3e750ff68641993->leave($__internal_d98e14fff18b0672dc2dd9c1f0811f4290e88df864979cb9f3e750ff68641993_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_36f007d9ced62573749203ab4839fddaa79b274462c8ac7d28c151c721afe4bb = $this->env->getExtension("native_profiler");
        $__internal_36f007d9ced62573749203ab4839fddaa79b274462c8ac7d28c151c721afe4bb->enter($__internal_36f007d9ced62573749203ab4839fddaa79b274462c8ac7d28c151c721afe4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_36f007d9ced62573749203ab4839fddaa79b274462c8ac7d28c151c721afe4bb->leave($__internal_36f007d9ced62573749203ab4839fddaa79b274462c8ac7d28c151c721afe4bb_prof);

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
