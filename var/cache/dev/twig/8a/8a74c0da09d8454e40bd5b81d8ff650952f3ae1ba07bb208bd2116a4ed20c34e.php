<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0a16629f25521703f316af498cf562816b115516a2e2a7746ee72f4b850de7f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5e4d34924621cd5b2eba4e98420b10773d32405c722e265b61b51c81ff627dfc = $this->env->getExtension("native_profiler");
        $__internal_5e4d34924621cd5b2eba4e98420b10773d32405c722e265b61b51c81ff627dfc->enter($__internal_5e4d34924621cd5b2eba4e98420b10773d32405c722e265b61b51c81ff627dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e4d34924621cd5b2eba4e98420b10773d32405c722e265b61b51c81ff627dfc->leave($__internal_5e4d34924621cd5b2eba4e98420b10773d32405c722e265b61b51c81ff627dfc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e1d71c5cd320a2eb3db5410665f480e0435bedd209e53295e2c9cbd762acdf6 = $this->env->getExtension("native_profiler");
        $__internal_3e1d71c5cd320a2eb3db5410665f480e0435bedd209e53295e2c9cbd762acdf6->enter($__internal_3e1d71c5cd320a2eb3db5410665f480e0435bedd209e53295e2c9cbd762acdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3e1d71c5cd320a2eb3db5410665f480e0435bedd209e53295e2c9cbd762acdf6->leave($__internal_3e1d71c5cd320a2eb3db5410665f480e0435bedd209e53295e2c9cbd762acdf6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_31964ad394f5240b2fb9650331b08775d002fc56edfc50b222208fa285f641df = $this->env->getExtension("native_profiler");
        $__internal_31964ad394f5240b2fb9650331b08775d002fc56edfc50b222208fa285f641df->enter($__internal_31964ad394f5240b2fb9650331b08775d002fc56edfc50b222208fa285f641df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_31964ad394f5240b2fb9650331b08775d002fc56edfc50b222208fa285f641df->leave($__internal_31964ad394f5240b2fb9650331b08775d002fc56edfc50b222208fa285f641df_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_67646fdc2678ca4cef1e527f565ce28e885a718f064d7996d1986dc8ce56d3a0 = $this->env->getExtension("native_profiler");
        $__internal_67646fdc2678ca4cef1e527f565ce28e885a718f064d7996d1986dc8ce56d3a0->enter($__internal_67646fdc2678ca4cef1e527f565ce28e885a718f064d7996d1986dc8ce56d3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_67646fdc2678ca4cef1e527f565ce28e885a718f064d7996d1986dc8ce56d3a0->leave($__internal_67646fdc2678ca4cef1e527f565ce28e885a718f064d7996d1986dc8ce56d3a0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
