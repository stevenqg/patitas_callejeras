<?php

/* layout.html.twig */
class __TwigTemplate_f5205cb3457235c9bd859093ecefcbd2249d606bb3559c874b6eaba66f4a3b84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'scroll_nav' => array($this, 'block_scroll_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_901b32dcbd0b00e4cf7eb53ff05ae6baf31e788c95ed2a485b74fc1cc42d5014 = $this->env->getExtension("native_profiler");
        $__internal_901b32dcbd0b00e4cf7eb53ff05ae6baf31e788c95ed2a485b74fc1cc42d5014->enter($__internal_901b32dcbd0b00e4cf7eb53ff05ae6baf31e788c95ed2a485b74fc1cc42d5014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "\t\t
\t\t";
        // line 14
        $this->displayBlock('scroll_nav', $context, $blocks);
        // line 18
        echo "\t</head>
\t<body>
\t    ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "\t    
\t    ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "\t    
\t\t";
        // line 31
        $this->displayBlock('footer', $context, $blocks);
        // line 34
        echo "\t\t\t
\t</body>
</html>";
        
        $__internal_901b32dcbd0b00e4cf7eb53ff05ae6baf31e788c95ed2a485b74fc1cc42d5014->leave($__internal_901b32dcbd0b00e4cf7eb53ff05ae6baf31e788c95ed2a485b74fc1cc42d5014_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_164482dd5f47cc34ba60b517769b99ee6c7bf724be4453cf54d3cab62e77f4e9 = $this->env->getExtension("native_profiler");
        $__internal_164482dd5f47cc34ba60b517769b99ee6c7bf724be4453cf54d3cab62e77f4e9->enter($__internal_164482dd5f47cc34ba60b517769b99ee6c7bf724be4453cf54d3cab62e77f4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Fundacion patitas callejeras";
        
        $__internal_164482dd5f47cc34ba60b517769b99ee6c7bf724be4453cf54d3cab62e77f4e9->leave($__internal_164482dd5f47cc34ba60b517769b99ee6c7bf724be4453cf54d3cab62e77f4e9_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_644a85f64cd2cf9193e9e1e1673a2fde8db0b78d1426ed1e2d94a5dc6f4e9158 = $this->env->getExtension("native_profiler");
        $__internal_644a85f64cd2cf9193e9e1e1673a2fde8db0b78d1426ed1e2d94a5dc6f4e9158->enter($__internal_644a85f64cd2cf9193e9e1e1673a2fde8db0b78d1426ed1e2d94a5dc6f4e9158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t<link rel=\"stylesheet\"  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" >
\t\t<link rel=\"stylesheet\"  href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/estile.css"), "html", null, true);
        echo "\" >
\t\t";
        
        $__internal_644a85f64cd2cf9193e9e1e1673a2fde8db0b78d1426ed1e2d94a5dc6f4e9158->leave($__internal_644a85f64cd2cf9193e9e1e1673a2fde8db0b78d1426ed1e2d94a5dc6f4e9158_prof);

    }

    // line 14
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_c0ba09abc8c4981c03c6e958d520b8490d66f91bc05ca07199aa17686dbbd6ff = $this->env->getExtension("native_profiler");
        $__internal_c0ba09abc8c4981c03c6e958d520b8490d66f91bc05ca07199aa17686dbbd6ff->enter($__internal_c0ba09abc8c4981c03c6e958d520b8490d66f91bc05ca07199aa17686dbbd6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        // line 15
        echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/engine0/style.css"), "html", null, true);
        echo "\" />
\t\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/engine0/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_c0ba09abc8c4981c03c6e958d520b8490d66f91bc05ca07199aa17686dbbd6ff->leave($__internal_c0ba09abc8c4981c03c6e958d520b8490d66f91bc05ca07199aa17686dbbd6ff_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_a13f68ad63cdea15e349f3a2e328822356732f4b3e0b6ab7ba80f2d316371941 = $this->env->getExtension("native_profiler");
        $__internal_a13f68ad63cdea15e349f3a2e328822356732f4b3e0b6ab7ba80f2d316371941->enter($__internal_a13f68ad63cdea15e349f3a2e328822356732f4b3e0b6ab7ba80f2d316371941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "\t        ";
        echo twig_include($this->env, $context, "nav.html.twig");
        echo "
\t    ";
        
        $__internal_a13f68ad63cdea15e349f3a2e328822356732f4b3e0b6ab7ba80f2d316371941->leave($__internal_a13f68ad63cdea15e349f3a2e328822356732f4b3e0b6ab7ba80f2d316371941_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e68e42b15d25801515a1b140c01c663836f1cc78e7c2861807e636c2489892ce = $this->env->getExtension("native_profiler");
        $__internal_e68e42b15d25801515a1b140c01c663836f1cc78e7c2861807e636c2489892ce->enter($__internal_e68e42b15d25801515a1b140c01c663836f1cc78e7c2861807e636c2489892ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "\t    \t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.js"), "html", null, true);
        echo "\" ></script>
\t\t\t<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
\t\t\t<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1-12-2.min.js"), "html", null, true);
        echo "\"  ></script>
\t    ";
        
        $__internal_e68e42b15d25801515a1b140c01c663836f1cc78e7c2861807e636c2489892ce->leave($__internal_e68e42b15d25801515a1b140c01c663836f1cc78e7c2861807e636c2489892ce_prof);

    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        $__internal_920a017b1d4e4d69378b74ea039635e9bbfc027d651c7abb74e81b4582622854 = $this->env->getExtension("native_profiler");
        $__internal_920a017b1d4e4d69378b74ea039635e9bbfc027d651c7abb74e81b4582622854->enter($__internal_920a017b1d4e4d69378b74ea039635e9bbfc027d651c7abb74e81b4582622854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 32
        echo "\t\t    ";
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
\t\t";
        
        $__internal_920a017b1d4e4d69378b74ea039635e9bbfc027d651c7abb74e81b4582622854->leave($__internal_920a017b1d4e4d69378b74ea039635e9bbfc027d651c7abb74e81b4582622854_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  173 => 32,  167 => 31,  158 => 28,  154 => 27,  150 => 26,  147 => 25,  141 => 24,  131 => 21,  125 => 20,  116 => 16,  111 => 15,  105 => 14,  96 => 11,  91 => 10,  85 => 9,  73 => 8,  64 => 34,  62 => 31,  59 => 30,  57 => 24,  54 => 23,  52 => 20,  48 => 18,  46 => 14,  43 => 13,  41 => 9,  37 => 8,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* 	<head>*/
/* 		<meta charset="utf-8">*/
/* 	*/
/* 		<meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* 		<title>{% block title %}Fundacion patitas callejeras{% endblock %}</title>*/
/* 		{% block stylesheets %}*/
/* 		<link rel="stylesheet"  href="{{ asset('public/css/bootstrap.min.css') }}" >*/
/* 		<link rel="stylesheet"  href="{{ asset('public/css/estile.css') }}" >*/
/* 		{% endblock %}*/
/* 		*/
/* 		{% block scroll_nav %}*/
/* 		<link rel="stylesheet" type="text/css" href="{{ asset('public/engine0/style.css') }}" />*/
/* 		<script type="text/javascript" src="{{ asset('public/engine0/jquery.js') }}"></script>*/
/* 		{% endblock %}*/
/* 	</head>*/
/* 	<body>*/
/* 	    {% block body %}*/
/* 	        {{ include("nav.html.twig") }}*/
/* 	    {% endblock %}*/
/* 	    */
/* 	    {% block javascripts %}*/
/* 	    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* 			<script src="{{ asset('public/js/bootstrap.js') }}" ></script>*/
/* 			<script src="{{ asset('public/js/bootstrap.min.js') }}" ></script>*/
/* 			<script src="{{ asset('public/js/jquery-1-12-2.min.js') }}"  ></script>*/
/* 	    {% endblock %}*/
/* 	    */
/* 		{% block footer %}*/
/* 		    {{ include("footer.html.twig") }}*/
/* 		{% endblock %}*/
/* 			*/
/* 	</body>*/
/* </html>*/
