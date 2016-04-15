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
        $__internal_9479292d6face1b6c0651092d8409c9366602a86f767a7478ccdffc2cb07d6b7 = $this->env->getExtension("native_profiler");
        $__internal_9479292d6face1b6c0651092d8409c9366602a86f767a7478ccdffc2cb07d6b7->enter($__internal_9479292d6face1b6c0651092d8409c9366602a86f767a7478ccdffc2cb07d6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9479292d6face1b6c0651092d8409c9366602a86f767a7478ccdffc2cb07d6b7->leave($__internal_9479292d6face1b6c0651092d8409c9366602a86f767a7478ccdffc2cb07d6b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec93030b7b400f68db01c66fad795919d8a0f82089ba52b3df2a64ac9f804480 = $this->env->getExtension("native_profiler");
        $__internal_ec93030b7b400f68db01c66fad795919d8a0f82089ba52b3df2a64ac9f804480->enter($__internal_ec93030b7b400f68db01c66fad795919d8a0f82089ba52b3df2a64ac9f804480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ec93030b7b400f68db01c66fad795919d8a0f82089ba52b3df2a64ac9f804480->leave($__internal_ec93030b7b400f68db01c66fad795919d8a0f82089ba52b3df2a64ac9f804480_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_921e10c5fa561de6be345351797818b7e6db3ec77f4fc902ba1b1169619acb76 = $this->env->getExtension("native_profiler");
        $__internal_921e10c5fa561de6be345351797818b7e6db3ec77f4fc902ba1b1169619acb76->enter($__internal_921e10c5fa561de6be345351797818b7e6db3ec77f4fc902ba1b1169619acb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_921e10c5fa561de6be345351797818b7e6db3ec77f4fc902ba1b1169619acb76->leave($__internal_921e10c5fa561de6be345351797818b7e6db3ec77f4fc902ba1b1169619acb76_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_12716d8bf46e87c8e528acca50b6d8d4d30e18761db573e548ae02ca2a0f1c39 = $this->env->getExtension("native_profiler");
        $__internal_12716d8bf46e87c8e528acca50b6d8d4d30e18761db573e548ae02ca2a0f1c39->enter($__internal_12716d8bf46e87c8e528acca50b6d8d4d30e18761db573e548ae02ca2a0f1c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_12716d8bf46e87c8e528acca50b6d8d4d30e18761db573e548ae02ca2a0f1c39->leave($__internal_12716d8bf46e87c8e528acca50b6d8d4d30e18761db573e548ae02ca2a0f1c39_prof);

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
