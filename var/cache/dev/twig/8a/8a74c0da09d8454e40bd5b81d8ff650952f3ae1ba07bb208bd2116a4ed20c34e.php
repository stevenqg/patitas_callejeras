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
        $__internal_9e84cae11f81943fe61c3e7b81d93f2ffadc81dc41fbc002d6250164532e4147 = $this->env->getExtension("native_profiler");
        $__internal_9e84cae11f81943fe61c3e7b81d93f2ffadc81dc41fbc002d6250164532e4147->enter($__internal_9e84cae11f81943fe61c3e7b81d93f2ffadc81dc41fbc002d6250164532e4147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e84cae11f81943fe61c3e7b81d93f2ffadc81dc41fbc002d6250164532e4147->leave($__internal_9e84cae11f81943fe61c3e7b81d93f2ffadc81dc41fbc002d6250164532e4147_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_45574fbcf38c5f9af670b05541cb07a5b9e2f745af818df8ab50b35d61d5ab47 = $this->env->getExtension("native_profiler");
        $__internal_45574fbcf38c5f9af670b05541cb07a5b9e2f745af818df8ab50b35d61d5ab47->enter($__internal_45574fbcf38c5f9af670b05541cb07a5b9e2f745af818df8ab50b35d61d5ab47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_45574fbcf38c5f9af670b05541cb07a5b9e2f745af818df8ab50b35d61d5ab47->leave($__internal_45574fbcf38c5f9af670b05541cb07a5b9e2f745af818df8ab50b35d61d5ab47_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b46d51e12c7523b7c97328ff4bf568dab11967dee5626227e7cdbf5c8b172ae = $this->env->getExtension("native_profiler");
        $__internal_4b46d51e12c7523b7c97328ff4bf568dab11967dee5626227e7cdbf5c8b172ae->enter($__internal_4b46d51e12c7523b7c97328ff4bf568dab11967dee5626227e7cdbf5c8b172ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b46d51e12c7523b7c97328ff4bf568dab11967dee5626227e7cdbf5c8b172ae->leave($__internal_4b46d51e12c7523b7c97328ff4bf568dab11967dee5626227e7cdbf5c8b172ae_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_559389b51b9b6fca9171ec12ed3cb5e0750c62ff18829189fb1ff3d21e084b1d = $this->env->getExtension("native_profiler");
        $__internal_559389b51b9b6fca9171ec12ed3cb5e0750c62ff18829189fb1ff3d21e084b1d->enter($__internal_559389b51b9b6fca9171ec12ed3cb5e0750c62ff18829189fb1ff3d21e084b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_559389b51b9b6fca9171ec12ed3cb5e0750c62ff18829189fb1ff3d21e084b1d->leave($__internal_559389b51b9b6fca9171ec12ed3cb5e0750c62ff18829189fb1ff3d21e084b1d_prof);

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
