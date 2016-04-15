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
        $__internal_56bbacaab8b5fe5c30fa6f08a0d7144ef97f31fd2a32f872cd8406dde68e85aa = $this->env->getExtension("native_profiler");
        $__internal_56bbacaab8b5fe5c30fa6f08a0d7144ef97f31fd2a32f872cd8406dde68e85aa->enter($__internal_56bbacaab8b5fe5c30fa6f08a0d7144ef97f31fd2a32f872cd8406dde68e85aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56bbacaab8b5fe5c30fa6f08a0d7144ef97f31fd2a32f872cd8406dde68e85aa->leave($__internal_56bbacaab8b5fe5c30fa6f08a0d7144ef97f31fd2a32f872cd8406dde68e85aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9dd6861fa9f91b5eaa439c8afe2aea92d1c2ac3baf5ba0d5c1fea5f6fa886d4e = $this->env->getExtension("native_profiler");
        $__internal_9dd6861fa9f91b5eaa439c8afe2aea92d1c2ac3baf5ba0d5c1fea5f6fa886d4e->enter($__internal_9dd6861fa9f91b5eaa439c8afe2aea92d1c2ac3baf5ba0d5c1fea5f6fa886d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9dd6861fa9f91b5eaa439c8afe2aea92d1c2ac3baf5ba0d5c1fea5f6fa886d4e->leave($__internal_9dd6861fa9f91b5eaa439c8afe2aea92d1c2ac3baf5ba0d5c1fea5f6fa886d4e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ca56496b5f1b1ed8bd1ce63bd3fb0e495ba7b8e71a7307a62169b5821e2f8c1 = $this->env->getExtension("native_profiler");
        $__internal_1ca56496b5f1b1ed8bd1ce63bd3fb0e495ba7b8e71a7307a62169b5821e2f8c1->enter($__internal_1ca56496b5f1b1ed8bd1ce63bd3fb0e495ba7b8e71a7307a62169b5821e2f8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1ca56496b5f1b1ed8bd1ce63bd3fb0e495ba7b8e71a7307a62169b5821e2f8c1->leave($__internal_1ca56496b5f1b1ed8bd1ce63bd3fb0e495ba7b8e71a7307a62169b5821e2f8c1_prof);

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
