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
        $__internal_95fa0fb21e6bffd6c3c83a3e9625e74408d11153206cff7bcd091c93dedc5ff2 = $this->env->getExtension("native_profiler");
        $__internal_95fa0fb21e6bffd6c3c83a3e9625e74408d11153206cff7bcd091c93dedc5ff2->enter($__internal_95fa0fb21e6bffd6c3c83a3e9625e74408d11153206cff7bcd091c93dedc5ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95fa0fb21e6bffd6c3c83a3e9625e74408d11153206cff7bcd091c93dedc5ff2->leave($__internal_95fa0fb21e6bffd6c3c83a3e9625e74408d11153206cff7bcd091c93dedc5ff2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_17698f0cfb82acf3ebeecd0f8e6a0c12e69d3b69c3f2537e7f44bb4e39f3eb39 = $this->env->getExtension("native_profiler");
        $__internal_17698f0cfb82acf3ebeecd0f8e6a0c12e69d3b69c3f2537e7f44bb4e39f3eb39->enter($__internal_17698f0cfb82acf3ebeecd0f8e6a0c12e69d3b69c3f2537e7f44bb4e39f3eb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_17698f0cfb82acf3ebeecd0f8e6a0c12e69d3b69c3f2537e7f44bb4e39f3eb39->leave($__internal_17698f0cfb82acf3ebeecd0f8e6a0c12e69d3b69c3f2537e7f44bb4e39f3eb39_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_11126f3525603a07631a626e5607ea88c99469d112f056f2da067beac15f72e2 = $this->env->getExtension("native_profiler");
        $__internal_11126f3525603a07631a626e5607ea88c99469d112f056f2da067beac15f72e2->enter($__internal_11126f3525603a07631a626e5607ea88c99469d112f056f2da067beac15f72e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_11126f3525603a07631a626e5607ea88c99469d112f056f2da067beac15f72e2->leave($__internal_11126f3525603a07631a626e5607ea88c99469d112f056f2da067beac15f72e2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c321f4130eccd1ba1cf6c513fb2257bdac2471ed32d485df393cbe853d3f075 = $this->env->getExtension("native_profiler");
        $__internal_6c321f4130eccd1ba1cf6c513fb2257bdac2471ed32d485df393cbe853d3f075->enter($__internal_6c321f4130eccd1ba1cf6c513fb2257bdac2471ed32d485df393cbe853d3f075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6c321f4130eccd1ba1cf6c513fb2257bdac2471ed32d485df393cbe853d3f075->leave($__internal_6c321f4130eccd1ba1cf6c513fb2257bdac2471ed32d485df393cbe853d3f075_prof);

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
