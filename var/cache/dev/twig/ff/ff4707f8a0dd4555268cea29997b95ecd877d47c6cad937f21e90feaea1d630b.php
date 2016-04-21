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
        $__internal_755860ef6e35001cf28baa4fe9b643a19bce9c1a2051807c309666fe5c641864 = $this->env->getExtension("native_profiler");
        $__internal_755860ef6e35001cf28baa4fe9b643a19bce9c1a2051807c309666fe5c641864->enter($__internal_755860ef6e35001cf28baa4fe9b643a19bce9c1a2051807c309666fe5c641864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_755860ef6e35001cf28baa4fe9b643a19bce9c1a2051807c309666fe5c641864->leave($__internal_755860ef6e35001cf28baa4fe9b643a19bce9c1a2051807c309666fe5c641864_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a2aba300edd9fb81baa135bbe36e12bd235e7eef7c8e757f0b0cd2f437243ac = $this->env->getExtension("native_profiler");
        $__internal_3a2aba300edd9fb81baa135bbe36e12bd235e7eef7c8e757f0b0cd2f437243ac->enter($__internal_3a2aba300edd9fb81baa135bbe36e12bd235e7eef7c8e757f0b0cd2f437243ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Fundacion patitas callejeras";
        
        $__internal_3a2aba300edd9fb81baa135bbe36e12bd235e7eef7c8e757f0b0cd2f437243ac->leave($__internal_3a2aba300edd9fb81baa135bbe36e12bd235e7eef7c8e757f0b0cd2f437243ac_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a49f40b2b7f66b24d409c7b00610974251de37bacaa44a2246bab3699de867f2 = $this->env->getExtension("native_profiler");
        $__internal_a49f40b2b7f66b24d409c7b00610974251de37bacaa44a2246bab3699de867f2->enter($__internal_a49f40b2b7f66b24d409c7b00610974251de37bacaa44a2246bab3699de867f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t<link rel=\"stylesheet\"  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" >
\t\t<link rel=\"stylesheet\"  href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/estile.css"), "html", null, true);
        echo "\" >
\t\t";
        
        $__internal_a49f40b2b7f66b24d409c7b00610974251de37bacaa44a2246bab3699de867f2->leave($__internal_a49f40b2b7f66b24d409c7b00610974251de37bacaa44a2246bab3699de867f2_prof);

    }

    // line 14
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_3cdde735f141312d60eb3d893b54f41e7185fc3001bfb1718dd6ab3fcd8edcc1 = $this->env->getExtension("native_profiler");
        $__internal_3cdde735f141312d60eb3d893b54f41e7185fc3001bfb1718dd6ab3fcd8edcc1->enter($__internal_3cdde735f141312d60eb3d893b54f41e7185fc3001bfb1718dd6ab3fcd8edcc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        // line 15
        echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/engine0/style.css"), "html", null, true);
        echo "\" />
\t\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/engine0/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_3cdde735f141312d60eb3d893b54f41e7185fc3001bfb1718dd6ab3fcd8edcc1->leave($__internal_3cdde735f141312d60eb3d893b54f41e7185fc3001bfb1718dd6ab3fcd8edcc1_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_806ad33f4e7ae17587e319200368283f480142287484aa4751cfa19cb6f5cbe8 = $this->env->getExtension("native_profiler");
        $__internal_806ad33f4e7ae17587e319200368283f480142287484aa4751cfa19cb6f5cbe8->enter($__internal_806ad33f4e7ae17587e319200368283f480142287484aa4751cfa19cb6f5cbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "\t        ";
        echo twig_include($this->env, $context, "nav.html.twig");
        echo "
\t    ";
        
        $__internal_806ad33f4e7ae17587e319200368283f480142287484aa4751cfa19cb6f5cbe8->leave($__internal_806ad33f4e7ae17587e319200368283f480142287484aa4751cfa19cb6f5cbe8_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d848dd84319fe83af1daa0abb1923f4c548afc31df6b33541f67f85dd520334d = $this->env->getExtension("native_profiler");
        $__internal_d848dd84319fe83af1daa0abb1923f4c548afc31df6b33541f67f85dd520334d->enter($__internal_d848dd84319fe83af1daa0abb1923f4c548afc31df6b33541f67f85dd520334d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "\t    \t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
\t\t\t<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://code.jquery.com/jquery-latest.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/functJquery.js"), "html", null, true);
        echo "\"></script>
\t    ";
        
        $__internal_d848dd84319fe83af1daa0abb1923f4c548afc31df6b33541f67f85dd520334d->leave($__internal_d848dd84319fe83af1daa0abb1923f4c548afc31df6b33541f67f85dd520334d_prof);

    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6e0963b60c88fc5081db23d3c04db2219926da5003d26e50c42c7c19d39fd394 = $this->env->getExtension("native_profiler");
        $__internal_6e0963b60c88fc5081db23d3c04db2219926da5003d26e50c42c7c19d39fd394->enter($__internal_6e0963b60c88fc5081db23d3c04db2219926da5003d26e50c42c7c19d39fd394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 32
        echo "\t\t    ";
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
\t\t";
        
        $__internal_6e0963b60c88fc5081db23d3c04db2219926da5003d26e50c42c7c19d39fd394->leave($__internal_6e0963b60c88fc5081db23d3c04db2219926da5003d26e50c42c7c19d39fd394_prof);

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
/* 			<script src="{{ asset('public/js/bootstrap.min.js') }}" ></script>*/
/* 			<script src="{{ asset('https://code.jquery.com/jquery-latest.js') }}"></script>*/
/* 			<script src="{{ asset('public/js/functJquery.js') }}"></script>*/
/* 	    {% endblock %}*/
/* 	    */
/* 		{% block footer %}*/
/* 		    {{ include("footer.html.twig") }}*/
/* 		{% endblock %}*/
/* 			*/
/* 	</body>*/
/* </html>*/
