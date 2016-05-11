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
        $__internal_e9b18e09a2748e8900af7d29c8cbf5c317b3d34345f545cc43077c2a9b4c4810 = $this->env->getExtension("native_profiler");
        $__internal_e9b18e09a2748e8900af7d29c8cbf5c317b3d34345f545cc43077c2a9b4c4810->enter($__internal_e9b18e09a2748e8900af7d29c8cbf5c317b3d34345f545cc43077c2a9b4c4810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9b18e09a2748e8900af7d29c8cbf5c317b3d34345f545cc43077c2a9b4c4810->leave($__internal_e9b18e09a2748e8900af7d29c8cbf5c317b3d34345f545cc43077c2a9b4c4810_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05aa59b50ac6c8b007cd7f44b759a7f5c8affc16b0fe82391245060fc9ba1050 = $this->env->getExtension("native_profiler");
        $__internal_05aa59b50ac6c8b007cd7f44b759a7f5c8affc16b0fe82391245060fc9ba1050->enter($__internal_05aa59b50ac6c8b007cd7f44b759a7f5c8affc16b0fe82391245060fc9ba1050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_05aa59b50ac6c8b007cd7f44b759a7f5c8affc16b0fe82391245060fc9ba1050->leave($__internal_05aa59b50ac6c8b007cd7f44b759a7f5c8affc16b0fe82391245060fc9ba1050_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_02ac079f9ab187659afbd0f1e97742528f4bc5ccc1548d6eba05d0302fdcee6d = $this->env->getExtension("native_profiler");
        $__internal_02ac079f9ab187659afbd0f1e97742528f4bc5ccc1548d6eba05d0302fdcee6d->enter($__internal_02ac079f9ab187659afbd0f1e97742528f4bc5ccc1548d6eba05d0302fdcee6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_02ac079f9ab187659afbd0f1e97742528f4bc5ccc1548d6eba05d0302fdcee6d->leave($__internal_02ac079f9ab187659afbd0f1e97742528f4bc5ccc1548d6eba05d0302fdcee6d_prof);

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
