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
        $__internal_0167ac1c36af7c2697bea5382266a80381a1cf5c8d5b0f68233b6348a31dfb4d = $this->env->getExtension("native_profiler");
        $__internal_0167ac1c36af7c2697bea5382266a80381a1cf5c8d5b0f68233b6348a31dfb4d->enter($__internal_0167ac1c36af7c2697bea5382266a80381a1cf5c8d5b0f68233b6348a31dfb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 29
        echo "\t    
\t\t";
        // line 30
        $this->displayBlock('footer', $context, $blocks);
        // line 33
        echo "\t\t\t
\t</body>
</html>";
        
        $__internal_0167ac1c36af7c2697bea5382266a80381a1cf5c8d5b0f68233b6348a31dfb4d->leave($__internal_0167ac1c36af7c2697bea5382266a80381a1cf5c8d5b0f68233b6348a31dfb4d_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_f77f493582a337832e64230af73575ffd94b098b60d6111b7bc09854240bcdb6 = $this->env->getExtension("native_profiler");
        $__internal_f77f493582a337832e64230af73575ffd94b098b60d6111b7bc09854240bcdb6->enter($__internal_f77f493582a337832e64230af73575ffd94b098b60d6111b7bc09854240bcdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Fundacion patitas callejeras";
        
        $__internal_f77f493582a337832e64230af73575ffd94b098b60d6111b7bc09854240bcdb6->leave($__internal_f77f493582a337832e64230af73575ffd94b098b60d6111b7bc09854240bcdb6_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2d8afcb10892fa58bfd03e545dd8426bade5bfbb82049399d4b2064ba698676d = $this->env->getExtension("native_profiler");
        $__internal_2d8afcb10892fa58bfd03e545dd8426bade5bfbb82049399d4b2064ba698676d->enter($__internal_2d8afcb10892fa58bfd03e545dd8426bade5bfbb82049399d4b2064ba698676d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t<link rel=\"stylesheet\"  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" >
\t\t<link rel=\"stylesheet\"  href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/estile.css"), "html", null, true);
        echo "\" >
\t\t";
        
        $__internal_2d8afcb10892fa58bfd03e545dd8426bade5bfbb82049399d4b2064ba698676d->leave($__internal_2d8afcb10892fa58bfd03e545dd8426bade5bfbb82049399d4b2064ba698676d_prof);

    }

    // line 14
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_6c5b568368a59db76dd15d79d849cbfe9cbb584aaf091689d77d44670ba96942 = $this->env->getExtension("native_profiler");
        $__internal_6c5b568368a59db76dd15d79d849cbfe9cbb584aaf091689d77d44670ba96942->enter($__internal_6c5b568368a59db76dd15d79d849cbfe9cbb584aaf091689d77d44670ba96942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        // line 15
        echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/engine0/style.css"), "html", null, true);
        echo "\" />
\t\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/engine0/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_6c5b568368a59db76dd15d79d849cbfe9cbb584aaf091689d77d44670ba96942->leave($__internal_6c5b568368a59db76dd15d79d849cbfe9cbb584aaf091689d77d44670ba96942_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ec933728fee0a708a19b1a56fbe7fc4a1005672961e228a11fb4b269dab5def = $this->env->getExtension("native_profiler");
        $__internal_9ec933728fee0a708a19b1a56fbe7fc4a1005672961e228a11fb4b269dab5def->enter($__internal_9ec933728fee0a708a19b1a56fbe7fc4a1005672961e228a11fb4b269dab5def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "\t        ";
        echo twig_include($this->env, $context, "nav.html.twig");
        echo "
\t    ";
        
        $__internal_9ec933728fee0a708a19b1a56fbe7fc4a1005672961e228a11fb4b269dab5def->leave($__internal_9ec933728fee0a708a19b1a56fbe7fc4a1005672961e228a11fb4b269dab5def_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4f75d7ad16d84e03ea49c3a3191d9e5647a3ab421988ce8ccd3a9a8087229167 = $this->env->getExtension("native_profiler");
        $__internal_4f75d7ad16d84e03ea49c3a3191d9e5647a3ab421988ce8ccd3a9a8087229167->enter($__internal_4f75d7ad16d84e03ea49c3a3191d9e5647a3ab421988ce8ccd3a9a8087229167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
\t    ";
        
        $__internal_4f75d7ad16d84e03ea49c3a3191d9e5647a3ab421988ce8ccd3a9a8087229167->leave($__internal_4f75d7ad16d84e03ea49c3a3191d9e5647a3ab421988ce8ccd3a9a8087229167_prof);

    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        $__internal_739e537508823ac7160cc29c26a3d6a2ed2009b33ed2002e2b46401d2fac4b92 = $this->env->getExtension("native_profiler");
        $__internal_739e537508823ac7160cc29c26a3d6a2ed2009b33ed2002e2b46401d2fac4b92->enter($__internal_739e537508823ac7160cc29c26a3d6a2ed2009b33ed2002e2b46401d2fac4b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 31
        echo "\t\t    ";
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
\t\t";
        
        $__internal_739e537508823ac7160cc29c26a3d6a2ed2009b33ed2002e2b46401d2fac4b92->leave($__internal_739e537508823ac7160cc29c26a3d6a2ed2009b33ed2002e2b46401d2fac4b92_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  169 => 31,  163 => 30,  154 => 27,  150 => 26,  147 => 25,  141 => 24,  131 => 21,  125 => 20,  116 => 16,  111 => 15,  105 => 14,  96 => 11,  91 => 10,  85 => 9,  73 => 8,  64 => 33,  62 => 30,  59 => 29,  57 => 24,  54 => 23,  52 => 20,  48 => 18,  46 => 14,  43 => 13,  41 => 9,  37 => 8,  28 => 1,);
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
/* 	    {% endblock %}*/
/* 	    */
/* 		{% block footer %}*/
/* 		    {{ include("footer.html.twig") }}*/
/* 		{% endblock %}*/
/* 			*/
/* 	</body>*/
/* </html>*/
