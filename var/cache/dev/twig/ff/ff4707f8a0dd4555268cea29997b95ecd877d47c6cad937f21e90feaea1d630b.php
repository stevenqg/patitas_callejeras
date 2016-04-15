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
        $__internal_a8a60fdb6cca1790bd9346e5e96b71694ba1491b615f93d99e2f20ef0594fc9c = $this->env->getExtension("native_profiler");
        $__internal_a8a60fdb6cca1790bd9346e5e96b71694ba1491b615f93d99e2f20ef0594fc9c->enter($__internal_a8a60fdb6cca1790bd9346e5e96b71694ba1491b615f93d99e2f20ef0594fc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_a8a60fdb6cca1790bd9346e5e96b71694ba1491b615f93d99e2f20ef0594fc9c->leave($__internal_a8a60fdb6cca1790bd9346e5e96b71694ba1491b615f93d99e2f20ef0594fc9c_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_21502dd4a57eccb11cd3b211e0f9af4144b43d2cfe93a3a88b4c08d7022ffc9c = $this->env->getExtension("native_profiler");
        $__internal_21502dd4a57eccb11cd3b211e0f9af4144b43d2cfe93a3a88b4c08d7022ffc9c->enter($__internal_21502dd4a57eccb11cd3b211e0f9af4144b43d2cfe93a3a88b4c08d7022ffc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Fundacion patitas callejeras";
        
        $__internal_21502dd4a57eccb11cd3b211e0f9af4144b43d2cfe93a3a88b4c08d7022ffc9c->leave($__internal_21502dd4a57eccb11cd3b211e0f9af4144b43d2cfe93a3a88b4c08d7022ffc9c_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a36138c5a0a949bee1d9190f0cff24bafcb2ae2ff1232b71509b3d1011424d3d = $this->env->getExtension("native_profiler");
        $__internal_a36138c5a0a949bee1d9190f0cff24bafcb2ae2ff1232b71509b3d1011424d3d->enter($__internal_a36138c5a0a949bee1d9190f0cff24bafcb2ae2ff1232b71509b3d1011424d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t<link rel=\"stylesheet\"  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" >
\t\t<link rel=\"stylesheet\"  href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/estile.css"), "html", null, true);
        echo "\" >
\t\t";
        
        $__internal_a36138c5a0a949bee1d9190f0cff24bafcb2ae2ff1232b71509b3d1011424d3d->leave($__internal_a36138c5a0a949bee1d9190f0cff24bafcb2ae2ff1232b71509b3d1011424d3d_prof);

    }

    // line 14
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_da188f1d9f380bd1e7526265b1dee09adcd7388042c67423754e98f8a25b49a3 = $this->env->getExtension("native_profiler");
        $__internal_da188f1d9f380bd1e7526265b1dee09adcd7388042c67423754e98f8a25b49a3->enter($__internal_da188f1d9f380bd1e7526265b1dee09adcd7388042c67423754e98f8a25b49a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        // line 15
        echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/engine0/style.css"), "html", null, true);
        echo "\" />
\t\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/engine0/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_da188f1d9f380bd1e7526265b1dee09adcd7388042c67423754e98f8a25b49a3->leave($__internal_da188f1d9f380bd1e7526265b1dee09adcd7388042c67423754e98f8a25b49a3_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_fab4284c1c870aed17a4aa5e52d74436ab3d4936c37ab3066fe5bec3ba53ca1a = $this->env->getExtension("native_profiler");
        $__internal_fab4284c1c870aed17a4aa5e52d74436ab3d4936c37ab3066fe5bec3ba53ca1a->enter($__internal_fab4284c1c870aed17a4aa5e52d74436ab3d4936c37ab3066fe5bec3ba53ca1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "\t        ";
        echo twig_include($this->env, $context, "nav.html.twig");
        echo "
\t    ";
        
        $__internal_fab4284c1c870aed17a4aa5e52d74436ab3d4936c37ab3066fe5bec3ba53ca1a->leave($__internal_fab4284c1c870aed17a4aa5e52d74436ab3d4936c37ab3066fe5bec3ba53ca1a_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f9354078f7ec9d9c678905d0feadb6df731ee6fb2824347ae036a08e657551ea = $this->env->getExtension("native_profiler");
        $__internal_f9354078f7ec9d9c678905d0feadb6df731ee6fb2824347ae036a08e657551ea->enter($__internal_f9354078f7ec9d9c678905d0feadb6df731ee6fb2824347ae036a08e657551ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f9354078f7ec9d9c678905d0feadb6df731ee6fb2824347ae036a08e657551ea->leave($__internal_f9354078f7ec9d9c678905d0feadb6df731ee6fb2824347ae036a08e657551ea_prof);

    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        $__internal_bbc46206e328038efb5810e84293735e9362beb91915c051568fb4c2d51cb7d4 = $this->env->getExtension("native_profiler");
        $__internal_bbc46206e328038efb5810e84293735e9362beb91915c051568fb4c2d51cb7d4->enter($__internal_bbc46206e328038efb5810e84293735e9362beb91915c051568fb4c2d51cb7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 32
        echo "\t\t    ";
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
\t\t";
        
        $__internal_bbc46206e328038efb5810e84293735e9362beb91915c051568fb4c2d51cb7d4->leave($__internal_bbc46206e328038efb5810e84293735e9362beb91915c051568fb4c2d51cb7d4_prof);

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
