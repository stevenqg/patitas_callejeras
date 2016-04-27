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
        $__internal_5e2b26b6c9d8b76b770867d439038fa09e1f172eba7a2490c3fda82595b9ffbf = $this->env->getExtension("native_profiler");
        $__internal_5e2b26b6c9d8b76b770867d439038fa09e1f172eba7a2490c3fda82595b9ffbf->enter($__internal_5e2b26b6c9d8b76b770867d439038fa09e1f172eba7a2490c3fda82595b9ffbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e2b26b6c9d8b76b770867d439038fa09e1f172eba7a2490c3fda82595b9ffbf->leave($__internal_5e2b26b6c9d8b76b770867d439038fa09e1f172eba7a2490c3fda82595b9ffbf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9aa59c3dd673196849c34cf933e420d854b6712df43a85d09c094e8f4fe8e574 = $this->env->getExtension("native_profiler");
        $__internal_9aa59c3dd673196849c34cf933e420d854b6712df43a85d09c094e8f4fe8e574->enter($__internal_9aa59c3dd673196849c34cf933e420d854b6712df43a85d09c094e8f4fe8e574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9aa59c3dd673196849c34cf933e420d854b6712df43a85d09c094e8f4fe8e574->leave($__internal_9aa59c3dd673196849c34cf933e420d854b6712df43a85d09c094e8f4fe8e574_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_79ede7a47d7290e3d0a09f28984be947e6abcac15ae4c8ec5a460bf9e76edc9a = $this->env->getExtension("native_profiler");
        $__internal_79ede7a47d7290e3d0a09f28984be947e6abcac15ae4c8ec5a460bf9e76edc9a->enter($__internal_79ede7a47d7290e3d0a09f28984be947e6abcac15ae4c8ec5a460bf9e76edc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_79ede7a47d7290e3d0a09f28984be947e6abcac15ae4c8ec5a460bf9e76edc9a->leave($__internal_79ede7a47d7290e3d0a09f28984be947e6abcac15ae4c8ec5a460bf9e76edc9a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c5202e13082a98effa218fa871f6a66be9c0b20b829e66a271ce5006a485242 = $this->env->getExtension("native_profiler");
        $__internal_0c5202e13082a98effa218fa871f6a66be9c0b20b829e66a271ce5006a485242->enter($__internal_0c5202e13082a98effa218fa871f6a66be9c0b20b829e66a271ce5006a485242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0c5202e13082a98effa218fa871f6a66be9c0b20b829e66a271ce5006a485242->leave($__internal_0c5202e13082a98effa218fa871f6a66be9c0b20b829e66a271ce5006a485242_prof);

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
