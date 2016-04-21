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
        $__internal_47dec722d2f9ecb114b4c2c6b368f49373f33c775a6d1dbea3a036d19acd611f = $this->env->getExtension("native_profiler");
        $__internal_47dec722d2f9ecb114b4c2c6b368f49373f33c775a6d1dbea3a036d19acd611f->enter($__internal_47dec722d2f9ecb114b4c2c6b368f49373f33c775a6d1dbea3a036d19acd611f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47dec722d2f9ecb114b4c2c6b368f49373f33c775a6d1dbea3a036d19acd611f->leave($__internal_47dec722d2f9ecb114b4c2c6b368f49373f33c775a6d1dbea3a036d19acd611f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3c87dff6b71ff4c89f3502a6448a20f742330622f87f586ca655f1c4dafc3af = $this->env->getExtension("native_profiler");
        $__internal_a3c87dff6b71ff4c89f3502a6448a20f742330622f87f586ca655f1c4dafc3af->enter($__internal_a3c87dff6b71ff4c89f3502a6448a20f742330622f87f586ca655f1c4dafc3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a3c87dff6b71ff4c89f3502a6448a20f742330622f87f586ca655f1c4dafc3af->leave($__internal_a3c87dff6b71ff4c89f3502a6448a20f742330622f87f586ca655f1c4dafc3af_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6dbafb451840846e342f90c4c84b17e3b003fffdb67ba0413f7b3703d1f5bdd = $this->env->getExtension("native_profiler");
        $__internal_d6dbafb451840846e342f90c4c84b17e3b003fffdb67ba0413f7b3703d1f5bdd->enter($__internal_d6dbafb451840846e342f90c4c84b17e3b003fffdb67ba0413f7b3703d1f5bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d6dbafb451840846e342f90c4c84b17e3b003fffdb67ba0413f7b3703d1f5bdd->leave($__internal_d6dbafb451840846e342f90c4c84b17e3b003fffdb67ba0413f7b3703d1f5bdd_prof);

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
