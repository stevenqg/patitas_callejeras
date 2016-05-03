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
        $__internal_7536f14ecfe2284ec384ea4d61988e9842724a94b86dafebdbde50f9c2a762e2 = $this->env->getExtension("native_profiler");
        $__internal_7536f14ecfe2284ec384ea4d61988e9842724a94b86dafebdbde50f9c2a762e2->enter($__internal_7536f14ecfe2284ec384ea4d61988e9842724a94b86dafebdbde50f9c2a762e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7536f14ecfe2284ec384ea4d61988e9842724a94b86dafebdbde50f9c2a762e2->leave($__internal_7536f14ecfe2284ec384ea4d61988e9842724a94b86dafebdbde50f9c2a762e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3103fdaf42e017f2f2243b773c7a5dac2be34c79ffed1b6faad5b8066770d44 = $this->env->getExtension("native_profiler");
        $__internal_a3103fdaf42e017f2f2243b773c7a5dac2be34c79ffed1b6faad5b8066770d44->enter($__internal_a3103fdaf42e017f2f2243b773c7a5dac2be34c79ffed1b6faad5b8066770d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a3103fdaf42e017f2f2243b773c7a5dac2be34c79ffed1b6faad5b8066770d44->leave($__internal_a3103fdaf42e017f2f2243b773c7a5dac2be34c79ffed1b6faad5b8066770d44_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d481fc50fa7483e509e8e567f6e1f70dcc2f365e6ea25558c0df58fe6448f7cc = $this->env->getExtension("native_profiler");
        $__internal_d481fc50fa7483e509e8e567f6e1f70dcc2f365e6ea25558c0df58fe6448f7cc->enter($__internal_d481fc50fa7483e509e8e567f6e1f70dcc2f365e6ea25558c0df58fe6448f7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d481fc50fa7483e509e8e567f6e1f70dcc2f365e6ea25558c0df58fe6448f7cc->leave($__internal_d481fc50fa7483e509e8e567f6e1f70dcc2f365e6ea25558c0df58fe6448f7cc_prof);

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
