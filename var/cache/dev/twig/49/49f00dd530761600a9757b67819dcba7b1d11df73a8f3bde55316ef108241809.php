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
        $__internal_073234d0c09ffd8b78fb3e8cb0a5c383539f275256f8e1975ab42f60b29cba73 = $this->env->getExtension("native_profiler");
        $__internal_073234d0c09ffd8b78fb3e8cb0a5c383539f275256f8e1975ab42f60b29cba73->enter($__internal_073234d0c09ffd8b78fb3e8cb0a5c383539f275256f8e1975ab42f60b29cba73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_073234d0c09ffd8b78fb3e8cb0a5c383539f275256f8e1975ab42f60b29cba73->leave($__internal_073234d0c09ffd8b78fb3e8cb0a5c383539f275256f8e1975ab42f60b29cba73_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f8df90bf5bed5a8060916398a649a30273d59a38f6aeed8cd633ba8ffb55a235 = $this->env->getExtension("native_profiler");
        $__internal_f8df90bf5bed5a8060916398a649a30273d59a38f6aeed8cd633ba8ffb55a235->enter($__internal_f8df90bf5bed5a8060916398a649a30273d59a38f6aeed8cd633ba8ffb55a235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f8df90bf5bed5a8060916398a649a30273d59a38f6aeed8cd633ba8ffb55a235->leave($__internal_f8df90bf5bed5a8060916398a649a30273d59a38f6aeed8cd633ba8ffb55a235_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_094342e80f8d6b34b68983ce41890ea367412b10c2469eecf83e496038f66e3c = $this->env->getExtension("native_profiler");
        $__internal_094342e80f8d6b34b68983ce41890ea367412b10c2469eecf83e496038f66e3c->enter($__internal_094342e80f8d6b34b68983ce41890ea367412b10c2469eecf83e496038f66e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_094342e80f8d6b34b68983ce41890ea367412b10c2469eecf83e496038f66e3c->leave($__internal_094342e80f8d6b34b68983ce41890ea367412b10c2469eecf83e496038f66e3c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3348051dad136b05ab324e0656d0d149d11cb3b4470395f9dc4dd86cbad49cb5 = $this->env->getExtension("native_profiler");
        $__internal_3348051dad136b05ab324e0656d0d149d11cb3b4470395f9dc4dd86cbad49cb5->enter($__internal_3348051dad136b05ab324e0656d0d149d11cb3b4470395f9dc4dd86cbad49cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3348051dad136b05ab324e0656d0d149d11cb3b4470395f9dc4dd86cbad49cb5->leave($__internal_3348051dad136b05ab324e0656d0d149d11cb3b4470395f9dc4dd86cbad49cb5_prof);

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
