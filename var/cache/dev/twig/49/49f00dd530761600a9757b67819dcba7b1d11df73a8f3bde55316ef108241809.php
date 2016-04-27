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
        $__internal_2f8eb58336d5656ccfc4e678d0132e45ec2f8a58f4a93c352266a9b34259393a = $this->env->getExtension("native_profiler");
        $__internal_2f8eb58336d5656ccfc4e678d0132e45ec2f8a58f4a93c352266a9b34259393a->enter($__internal_2f8eb58336d5656ccfc4e678d0132e45ec2f8a58f4a93c352266a9b34259393a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f8eb58336d5656ccfc4e678d0132e45ec2f8a58f4a93c352266a9b34259393a->leave($__internal_2f8eb58336d5656ccfc4e678d0132e45ec2f8a58f4a93c352266a9b34259393a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9ccfdbb7f3f41746f890efd633756edc42d61efd090a744af5e7776bbbdfb8d8 = $this->env->getExtension("native_profiler");
        $__internal_9ccfdbb7f3f41746f890efd633756edc42d61efd090a744af5e7776bbbdfb8d8->enter($__internal_9ccfdbb7f3f41746f890efd633756edc42d61efd090a744af5e7776bbbdfb8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9ccfdbb7f3f41746f890efd633756edc42d61efd090a744af5e7776bbbdfb8d8->leave($__internal_9ccfdbb7f3f41746f890efd633756edc42d61efd090a744af5e7776bbbdfb8d8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30800a09a705a2caea4160a486fbc707c1168136501d7e8b86774ea5ebcdd2d8 = $this->env->getExtension("native_profiler");
        $__internal_30800a09a705a2caea4160a486fbc707c1168136501d7e8b86774ea5ebcdd2d8->enter($__internal_30800a09a705a2caea4160a486fbc707c1168136501d7e8b86774ea5ebcdd2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_30800a09a705a2caea4160a486fbc707c1168136501d7e8b86774ea5ebcdd2d8->leave($__internal_30800a09a705a2caea4160a486fbc707c1168136501d7e8b86774ea5ebcdd2d8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b8d4861aad7c02869b0e190556e1133617494fb62617a8425300cd1f4c19687 = $this->env->getExtension("native_profiler");
        $__internal_0b8d4861aad7c02869b0e190556e1133617494fb62617a8425300cd1f4c19687->enter($__internal_0b8d4861aad7c02869b0e190556e1133617494fb62617a8425300cd1f4c19687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0b8d4861aad7c02869b0e190556e1133617494fb62617a8425300cd1f4c19687->leave($__internal_0b8d4861aad7c02869b0e190556e1133617494fb62617a8425300cd1f4c19687_prof);

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
