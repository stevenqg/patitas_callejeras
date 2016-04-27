<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5316f0474a8a1c6e8ed6a962b5da6cc1e10b84287361511ab3cdc672261bdb6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8fa48552d0779d4351ed21d0b997bd11955de3fa41abb6a1a15fe449a6e8167 = $this->env->getExtension("native_profiler");
        $__internal_b8fa48552d0779d4351ed21d0b997bd11955de3fa41abb6a1a15fe449a6e8167->enter($__internal_b8fa48552d0779d4351ed21d0b997bd11955de3fa41abb6a1a15fe449a6e8167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8fa48552d0779d4351ed21d0b997bd11955de3fa41abb6a1a15fe449a6e8167->leave($__internal_b8fa48552d0779d4351ed21d0b997bd11955de3fa41abb6a1a15fe449a6e8167_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_841f22b79e03b04cab8a5bb132e624f3831633e6d392428af47124bc229d2074 = $this->env->getExtension("native_profiler");
        $__internal_841f22b79e03b04cab8a5bb132e624f3831633e6d392428af47124bc229d2074->enter($__internal_841f22b79e03b04cab8a5bb132e624f3831633e6d392428af47124bc229d2074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_841f22b79e03b04cab8a5bb132e624f3831633e6d392428af47124bc229d2074->leave($__internal_841f22b79e03b04cab8a5bb132e624f3831633e6d392428af47124bc229d2074_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_32a9f5007830c51c47d33ba34ca23480ece934eb581597e0e3ea3473d05fb8d8 = $this->env->getExtension("native_profiler");
        $__internal_32a9f5007830c51c47d33ba34ca23480ece934eb581597e0e3ea3473d05fb8d8->enter($__internal_32a9f5007830c51c47d33ba34ca23480ece934eb581597e0e3ea3473d05fb8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_32a9f5007830c51c47d33ba34ca23480ece934eb581597e0e3ea3473d05fb8d8->leave($__internal_32a9f5007830c51c47d33ba34ca23480ece934eb581597e0e3ea3473d05fb8d8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
