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
        $__internal_670bb80d0591abc9422dbb80dc9607c5367511c78525a1760f2489289dfaa756 = $this->env->getExtension("native_profiler");
        $__internal_670bb80d0591abc9422dbb80dc9607c5367511c78525a1760f2489289dfaa756->enter($__internal_670bb80d0591abc9422dbb80dc9607c5367511c78525a1760f2489289dfaa756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_670bb80d0591abc9422dbb80dc9607c5367511c78525a1760f2489289dfaa756->leave($__internal_670bb80d0591abc9422dbb80dc9607c5367511c78525a1760f2489289dfaa756_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_99623dc8ec4a1f88ff521478dd4be97e337b4e09a6bbd81b173e5cf7599d3a25 = $this->env->getExtension("native_profiler");
        $__internal_99623dc8ec4a1f88ff521478dd4be97e337b4e09a6bbd81b173e5cf7599d3a25->enter($__internal_99623dc8ec4a1f88ff521478dd4be97e337b4e09a6bbd81b173e5cf7599d3a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_99623dc8ec4a1f88ff521478dd4be97e337b4e09a6bbd81b173e5cf7599d3a25->leave($__internal_99623dc8ec4a1f88ff521478dd4be97e337b4e09a6bbd81b173e5cf7599d3a25_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_977ff70744197930a1e024b04d35ab59013e61f4d0e70f3f6f2e8115ba25ca33 = $this->env->getExtension("native_profiler");
        $__internal_977ff70744197930a1e024b04d35ab59013e61f4d0e70f3f6f2e8115ba25ca33->enter($__internal_977ff70744197930a1e024b04d35ab59013e61f4d0e70f3f6f2e8115ba25ca33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_977ff70744197930a1e024b04d35ab59013e61f4d0e70f3f6f2e8115ba25ca33->leave($__internal_977ff70744197930a1e024b04d35ab59013e61f4d0e70f3f6f2e8115ba25ca33_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_22349270720b3ef78563e00b216b0d68efae82493ff6c21f2d677a6b42dcb70f = $this->env->getExtension("native_profiler");
        $__internal_22349270720b3ef78563e00b216b0d68efae82493ff6c21f2d677a6b42dcb70f->enter($__internal_22349270720b3ef78563e00b216b0d68efae82493ff6c21f2d677a6b42dcb70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_22349270720b3ef78563e00b216b0d68efae82493ff6c21f2d677a6b42dcb70f->leave($__internal_22349270720b3ef78563e00b216b0d68efae82493ff6c21f2d677a6b42dcb70f_prof);

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
