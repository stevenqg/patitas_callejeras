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
        $__internal_07753e37c4393972897d31b2787919c6fdfaf03047e41fc0f13c300ef953422a = $this->env->getExtension("native_profiler");
        $__internal_07753e37c4393972897d31b2787919c6fdfaf03047e41fc0f13c300ef953422a->enter($__internal_07753e37c4393972897d31b2787919c6fdfaf03047e41fc0f13c300ef953422a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07753e37c4393972897d31b2787919c6fdfaf03047e41fc0f13c300ef953422a->leave($__internal_07753e37c4393972897d31b2787919c6fdfaf03047e41fc0f13c300ef953422a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_802f095b81f78a71096f817f317421f9d19fdabc532d77fc81270bfe9598990e = $this->env->getExtension("native_profiler");
        $__internal_802f095b81f78a71096f817f317421f9d19fdabc532d77fc81270bfe9598990e->enter($__internal_802f095b81f78a71096f817f317421f9d19fdabc532d77fc81270bfe9598990e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_802f095b81f78a71096f817f317421f9d19fdabc532d77fc81270bfe9598990e->leave($__internal_802f095b81f78a71096f817f317421f9d19fdabc532d77fc81270bfe9598990e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3c251ad65563448e81610e7063d8aefd9228f034246876ce5a1aa257d639bc3 = $this->env->getExtension("native_profiler");
        $__internal_c3c251ad65563448e81610e7063d8aefd9228f034246876ce5a1aa257d639bc3->enter($__internal_c3c251ad65563448e81610e7063d8aefd9228f034246876ce5a1aa257d639bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c3c251ad65563448e81610e7063d8aefd9228f034246876ce5a1aa257d639bc3->leave($__internal_c3c251ad65563448e81610e7063d8aefd9228f034246876ce5a1aa257d639bc3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c803bd29a5e0d08248d4165a80e9a08534c68805e1a403ddecb4bc33915a355 = $this->env->getExtension("native_profiler");
        $__internal_5c803bd29a5e0d08248d4165a80e9a08534c68805e1a403ddecb4bc33915a355->enter($__internal_5c803bd29a5e0d08248d4165a80e9a08534c68805e1a403ddecb4bc33915a355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5c803bd29a5e0d08248d4165a80e9a08534c68805e1a403ddecb4bc33915a355->leave($__internal_5c803bd29a5e0d08248d4165a80e9a08534c68805e1a403ddecb4bc33915a355_prof);

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
