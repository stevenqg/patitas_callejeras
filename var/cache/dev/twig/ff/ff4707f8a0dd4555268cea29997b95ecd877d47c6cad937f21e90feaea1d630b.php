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
        $__internal_c06248c8d64c51f3d41d368387a44f229c882e0e2a360dc1d8824132f8a9cf93 = $this->env->getExtension("native_profiler");
        $__internal_c06248c8d64c51f3d41d368387a44f229c882e0e2a360dc1d8824132f8a9cf93->enter($__internal_c06248c8d64c51f3d41d368387a44f229c882e0e2a360dc1d8824132f8a9cf93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 31
        echo "\t    
\t\t";
        // line 32
        $this->displayBlock('footer', $context, $blocks);
        // line 35
        echo "\t\t\t
\t</body>
</html>";
        
        $__internal_c06248c8d64c51f3d41d368387a44f229c882e0e2a360dc1d8824132f8a9cf93->leave($__internal_c06248c8d64c51f3d41d368387a44f229c882e0e2a360dc1d8824132f8a9cf93_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_828be8deb2f2ada3ba8607013f57fb34ff8b249a10f3fa8ab6086bad92376953 = $this->env->getExtension("native_profiler");
        $__internal_828be8deb2f2ada3ba8607013f57fb34ff8b249a10f3fa8ab6086bad92376953->enter($__internal_828be8deb2f2ada3ba8607013f57fb34ff8b249a10f3fa8ab6086bad92376953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Fundacion patitas callejeras";
        
        $__internal_828be8deb2f2ada3ba8607013f57fb34ff8b249a10f3fa8ab6086bad92376953->leave($__internal_828be8deb2f2ada3ba8607013f57fb34ff8b249a10f3fa8ab6086bad92376953_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9a0651a7418746f54eb137e2125f675b3a18abac1c664ca20ff6d2a185865e43 = $this->env->getExtension("native_profiler");
        $__internal_9a0651a7418746f54eb137e2125f675b3a18abac1c664ca20ff6d2a185865e43->enter($__internal_9a0651a7418746f54eb137e2125f675b3a18abac1c664ca20ff6d2a185865e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t<link rel=\"stylesheet\"  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" >
\t\t<link rel=\"stylesheet\"  href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/estile.css"), "html", null, true);
        echo "\" >
\t\t";
        
        $__internal_9a0651a7418746f54eb137e2125f675b3a18abac1c664ca20ff6d2a185865e43->leave($__internal_9a0651a7418746f54eb137e2125f675b3a18abac1c664ca20ff6d2a185865e43_prof);

    }

    // line 14
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_19da6a03b61125f4fda5fbf4b921c54cc8f8cc148126fa66d729d9f8738a738e = $this->env->getExtension("native_profiler");
        $__internal_19da6a03b61125f4fda5fbf4b921c54cc8f8cc148126fa66d729d9f8738a738e->enter($__internal_19da6a03b61125f4fda5fbf4b921c54cc8f8cc148126fa66d729d9f8738a738e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        // line 15
        echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/engine0/style.css"), "html", null, true);
        echo "\" />
\t\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/engine0/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_19da6a03b61125f4fda5fbf4b921c54cc8f8cc148126fa66d729d9f8738a738e->leave($__internal_19da6a03b61125f4fda5fbf4b921c54cc8f8cc148126fa66d729d9f8738a738e_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_32045e472b6fd9f17cf9365839bdb60bed0f58e266d039d716ba1fe7ef84b56f = $this->env->getExtension("native_profiler");
        $__internal_32045e472b6fd9f17cf9365839bdb60bed0f58e266d039d716ba1fe7ef84b56f->enter($__internal_32045e472b6fd9f17cf9365839bdb60bed0f58e266d039d716ba1fe7ef84b56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "\t        ";
        echo twig_include($this->env, $context, "nav.html.twig");
        echo "
\t    ";
        
        $__internal_32045e472b6fd9f17cf9365839bdb60bed0f58e266d039d716ba1fe7ef84b56f->leave($__internal_32045e472b6fd9f17cf9365839bdb60bed0f58e266d039d716ba1fe7ef84b56f_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8921335dbcaa16351ca295125d3d0dbc58008e4a62eeedccd33b6989992e1a42 = $this->env->getExtension("native_profiler");
        $__internal_8921335dbcaa16351ca295125d3d0dbc58008e4a62eeedccd33b6989992e1a42->enter($__internal_8921335dbcaa16351ca295125d3d0dbc58008e4a62eeedccd33b6989992e1a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
\t\t\t
\t    ";
        
        $__internal_8921335dbcaa16351ca295125d3d0dbc58008e4a62eeedccd33b6989992e1a42->leave($__internal_8921335dbcaa16351ca295125d3d0dbc58008e4a62eeedccd33b6989992e1a42_prof);

    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d3918b14120465df7767e87a0aa064c64c008d92354e47469b8af5ce61c87bca = $this->env->getExtension("native_profiler");
        $__internal_d3918b14120465df7767e87a0aa064c64c008d92354e47469b8af5ce61c87bca->enter($__internal_d3918b14120465df7767e87a0aa064c64c008d92354e47469b8af5ce61c87bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 33
        echo "\t\t    ";
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
\t\t";
        
        $__internal_d3918b14120465df7767e87a0aa064c64c008d92354e47469b8af5ce61c87bca->leave($__internal_d3918b14120465df7767e87a0aa064c64c008d92354e47469b8af5ce61c87bca_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  174 => 33,  168 => 32,  158 => 28,  154 => 27,  150 => 26,  147 => 25,  141 => 24,  131 => 21,  125 => 20,  116 => 16,  111 => 15,  105 => 14,  96 => 11,  91 => 10,  85 => 9,  73 => 8,  64 => 35,  62 => 32,  59 => 31,  57 => 24,  54 => 23,  52 => 20,  48 => 18,  46 => 14,  43 => 13,  41 => 9,  37 => 8,  28 => 1,);
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
/* 			*/
/* 	    {% endblock %}*/
/* 	    */
/* 		{% block footer %}*/
/* 		    {{ include("footer.html.twig") }}*/
/* 		{% endblock %}*/
/* 			*/
/* 	</body>*/
/* </html>*/
