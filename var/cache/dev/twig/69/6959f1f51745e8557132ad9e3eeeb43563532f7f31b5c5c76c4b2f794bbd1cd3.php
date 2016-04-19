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
        $__internal_9d9ebe90cd27710264089131518c8f06278b3245be039329f69a5b7051fda08c = $this->env->getExtension("native_profiler");
        $__internal_9d9ebe90cd27710264089131518c8f06278b3245be039329f69a5b7051fda08c->enter($__internal_9d9ebe90cd27710264089131518c8f06278b3245be039329f69a5b7051fda08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d9ebe90cd27710264089131518c8f06278b3245be039329f69a5b7051fda08c->leave($__internal_9d9ebe90cd27710264089131518c8f06278b3245be039329f69a5b7051fda08c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_509bd952397c4e1c3808f06fc353025b94cdc845e88e52930e3bdb614ba0d7da = $this->env->getExtension("native_profiler");
        $__internal_509bd952397c4e1c3808f06fc353025b94cdc845e88e52930e3bdb614ba0d7da->enter($__internal_509bd952397c4e1c3808f06fc353025b94cdc845e88e52930e3bdb614ba0d7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_509bd952397c4e1c3808f06fc353025b94cdc845e88e52930e3bdb614ba0d7da->leave($__internal_509bd952397c4e1c3808f06fc353025b94cdc845e88e52930e3bdb614ba0d7da_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0115b0bdcf55ffb92350b929ecfb633bbdf3bb1df8d9c1ff7a617628a6b15f07 = $this->env->getExtension("native_profiler");
        $__internal_0115b0bdcf55ffb92350b929ecfb633bbdf3bb1df8d9c1ff7a617628a6b15f07->enter($__internal_0115b0bdcf55ffb92350b929ecfb633bbdf3bb1df8d9c1ff7a617628a6b15f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0115b0bdcf55ffb92350b929ecfb633bbdf3bb1df8d9c1ff7a617628a6b15f07->leave($__internal_0115b0bdcf55ffb92350b929ecfb633bbdf3bb1df8d9c1ff7a617628a6b15f07_prof);

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
