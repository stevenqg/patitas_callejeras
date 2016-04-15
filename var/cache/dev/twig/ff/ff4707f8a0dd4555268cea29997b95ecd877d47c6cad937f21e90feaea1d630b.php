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
        $__internal_d403910f56b1010a475c5b017284b557a8a44439a61b64d004e753b932ae1491 = $this->env->getExtension("native_profiler");
        $__internal_d403910f56b1010a475c5b017284b557a8a44439a61b64d004e753b932ae1491->enter($__internal_d403910f56b1010a475c5b017284b557a8a44439a61b64d004e753b932ae1491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_d403910f56b1010a475c5b017284b557a8a44439a61b64d004e753b932ae1491->leave($__internal_d403910f56b1010a475c5b017284b557a8a44439a61b64d004e753b932ae1491_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_490fc35d0ddcb1d53fb976b2ba6b06bf4c2f0d58287616ae19d515552c1c7333 = $this->env->getExtension("native_profiler");
        $__internal_490fc35d0ddcb1d53fb976b2ba6b06bf4c2f0d58287616ae19d515552c1c7333->enter($__internal_490fc35d0ddcb1d53fb976b2ba6b06bf4c2f0d58287616ae19d515552c1c7333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Fundacion patitas callejeras";
        
        $__internal_490fc35d0ddcb1d53fb976b2ba6b06bf4c2f0d58287616ae19d515552c1c7333->leave($__internal_490fc35d0ddcb1d53fb976b2ba6b06bf4c2f0d58287616ae19d515552c1c7333_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_544d072c463bf7bf9b3e45c4bca7b7b5262cd372d9191f8bba75b0cf8c54fb71 = $this->env->getExtension("native_profiler");
        $__internal_544d072c463bf7bf9b3e45c4bca7b7b5262cd372d9191f8bba75b0cf8c54fb71->enter($__internal_544d072c463bf7bf9b3e45c4bca7b7b5262cd372d9191f8bba75b0cf8c54fb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t<link rel=\"stylesheet\"  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" >
\t\t<link rel=\"stylesheet\"  href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/estile.css"), "html", null, true);
        echo "\" >
\t\t";
        
        $__internal_544d072c463bf7bf9b3e45c4bca7b7b5262cd372d9191f8bba75b0cf8c54fb71->leave($__internal_544d072c463bf7bf9b3e45c4bca7b7b5262cd372d9191f8bba75b0cf8c54fb71_prof);

    }

    // line 14
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_da9371803d8d85e4f3eba54877737725cc720760819b9f813a180ab96764dc2a = $this->env->getExtension("native_profiler");
        $__internal_da9371803d8d85e4f3eba54877737725cc720760819b9f813a180ab96764dc2a->enter($__internal_da9371803d8d85e4f3eba54877737725cc720760819b9f813a180ab96764dc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        // line 15
        echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/engine0/style.css"), "html", null, true);
        echo "\" />
\t\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/engine0/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_da9371803d8d85e4f3eba54877737725cc720760819b9f813a180ab96764dc2a->leave($__internal_da9371803d8d85e4f3eba54877737725cc720760819b9f813a180ab96764dc2a_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ddd0a6315bd8e553aca72f45639245e694f4a29ae6bec6ade63ab24b4dcea0f = $this->env->getExtension("native_profiler");
        $__internal_2ddd0a6315bd8e553aca72f45639245e694f4a29ae6bec6ade63ab24b4dcea0f->enter($__internal_2ddd0a6315bd8e553aca72f45639245e694f4a29ae6bec6ade63ab24b4dcea0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "\t        ";
        echo twig_include($this->env, $context, "nav.html.twig");
        echo "
\t    ";
        
        $__internal_2ddd0a6315bd8e553aca72f45639245e694f4a29ae6bec6ade63ab24b4dcea0f->leave($__internal_2ddd0a6315bd8e553aca72f45639245e694f4a29ae6bec6ade63ab24b4dcea0f_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a0e17e7b92d9881fc832059b7ac20a4e75c476f04b341088574170fddbb8588 = $this->env->getExtension("native_profiler");
        $__internal_4a0e17e7b92d9881fc832059b7ac20a4e75c476f04b341088574170fddbb8588->enter($__internal_4a0e17e7b92d9881fc832059b7ac20a4e75c476f04b341088574170fddbb8588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4a0e17e7b92d9881fc832059b7ac20a4e75c476f04b341088574170fddbb8588->leave($__internal_4a0e17e7b92d9881fc832059b7ac20a4e75c476f04b341088574170fddbb8588_prof);

    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        $__internal_803ee18c7ecb3d68e51106f1cfdde901010221ea325caa9bf4691279920a5853 = $this->env->getExtension("native_profiler");
        $__internal_803ee18c7ecb3d68e51106f1cfdde901010221ea325caa9bf4691279920a5853->enter($__internal_803ee18c7ecb3d68e51106f1cfdde901010221ea325caa9bf4691279920a5853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 32
        echo "\t\t    ";
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
\t\t";
        
        $__internal_803ee18c7ecb3d68e51106f1cfdde901010221ea325caa9bf4691279920a5853->leave($__internal_803ee18c7ecb3d68e51106f1cfdde901010221ea325caa9bf4691279920a5853_prof);

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
