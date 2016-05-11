<?php

/* PCFundationBundle:fundation:tapitas.html.twig */
class __TwigTemplate_95f20ab942e4ad32772b2c907f682766fef8c262113e3c1e2c56f95e2ec771d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PCFundationBundle:fundation:tapitas.html.twig", 1);
        $this->blocks = array(
            'scroll_nav' => array($this, 'block_scroll_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e77b6238bc52a8ba06da2f25a10aa7b8148936fb67e9f9651e4f591d720800c2 = $this->env->getExtension("native_profiler");
        $__internal_e77b6238bc52a8ba06da2f25a10aa7b8148936fb67e9f9651e4f591d720800c2->enter($__internal_e77b6238bc52a8ba06da2f25a10aa7b8148936fb67e9f9651e4f591d720800c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:tapitas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e77b6238bc52a8ba06da2f25a10aa7b8148936fb67e9f9651e4f591d720800c2->leave($__internal_e77b6238bc52a8ba06da2f25a10aa7b8148936fb67e9f9651e4f591d720800c2_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_6bcb91d54936207b3017ba54800c929a681af2489df2c83c47c09448667c7d08 = $this->env->getExtension("native_profiler");
        $__internal_6bcb91d54936207b3017ba54800c929a681af2489df2c83c47c09448667c7d08->enter($__internal_6bcb91d54936207b3017ba54800c929a681af2489df2c83c47c09448667c7d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_6bcb91d54936207b3017ba54800c929a681af2489df2c83c47c09448667c7d08->leave($__internal_6bcb91d54936207b3017ba54800c929a681af2489df2c83c47c09448667c7d08_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_450e005bf0581a5888f412f8084a10fcbaa1ec5a9cfece910cbbf7dedbe5cef7 = $this->env->getExtension("native_profiler");
        $__internal_450e005bf0581a5888f412f8084a10fcbaa1ec5a9cfece910cbbf7dedbe5cef7->enter($__internal_450e005bf0581a5888f412f8084a10fcbaa1ec5a9cfece910cbbf7dedbe5cef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-md-1\"></div>
\t\t<div class=\"col-md-10\">
\t\t\t<img class=\"posrigth\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/logo.png"), "html", null, true);
        echo "\"  alt=\"logo\">
\t\t\t<img class=\"postlef\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/tp2.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t</div>
\t\t<div class=\"col-md-1\"></div>
\t</div>
\t<div class=\"liner\"></div>
\t
\t\t<div class=\"row\">
\t\t<div class=\"col-md-1\"></div>
\t\t
\t\t<div class=\"col-md-10\">
\t\t\t  <div class=\"contenmap\" id=\"mymap\"></div>
     \t</div>
\t\t<div class=\"col-md-1\"></div>
\t</div>
";
        
        $__internal_450e005bf0581a5888f412f8084a10fcbaa1ec5a9cfece910cbbf7dedbe5cef7->leave($__internal_450e005bf0581a5888f412f8084a10fcbaa1ec5a9cfece910cbbf7dedbe5cef7_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bd88660a2d1ff1ed3ca1b10d691d14ac5ae5f778629104313d624a70ad9a35b3 = $this->env->getExtension("native_profiler");
        $__internal_bd88660a2d1ff1ed3ca1b10d691d14ac5ae5f778629104313d624a70ad9a35b3->enter($__internal_bd88660a2d1ff1ed3ca1b10d691d14ac5ae5f778629104313d624a70ad9a35b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script async defer
      src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyARyp3ONt4Ax4J7JBBC8bFggOp4zntwd-s&callback=initMap"), "html", null, true);
        echo "\">
    </script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jsgoogle.js"), "html", null, true);
        echo "\"  ></script>
";
        
        $__internal_bd88660a2d1ff1ed3ca1b10d691d14ac5ae5f778629104313d624a70ad9a35b3->leave($__internal_bd88660a2d1ff1ed3ca1b10d691d14ac5ae5f778629104313d624a70ad9a35b3_prof);

    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        $__internal_820c6879874fda0c20a334205fd1212b8924c11049ff17303197a56fe95e31c3 = $this->env->getExtension("native_profiler");
        $__internal_820c6879874fda0c20a334205fd1212b8924c11049ff17303197a56fe95e31c3->enter($__internal_820c6879874fda0c20a334205fd1212b8924c11049ff17303197a56fe95e31c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_820c6879874fda0c20a334205fd1212b8924c11049ff17303197a56fe95e31c3->leave($__internal_820c6879874fda0c20a334205fd1212b8924c11049ff17303197a56fe95e31c3_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:fundation:tapitas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 32,  102 => 30,  97 => 28,  92 => 26,  86 => 25,  64 => 10,  60 => 9,  54 => 5,  48 => 4,  37 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block scroll_nav %}*/
/* {% endblock %}*/
/* {% block body %}*/
/* */
/* 	<div class="row">*/
/* 		<div class="col-md-1"></div>*/
/* 		<div class="col-md-10">*/
/* 			<img class="posrigth" src="{{ asset('public/img/logo.png') }}"  alt="logo">*/
/* 			<img class="postlef" src="{{ asset('public/img/tp2.png') }}" alt="">*/
/* 		</div>*/
/* 		<div class="col-md-1"></div>*/
/* 	</div>*/
/* 	<div class="liner"></div>*/
/* 	*/
/* 		<div class="row">*/
/* 		<div class="col-md-1"></div>*/
/* 		*/
/* 		<div class="col-md-10">*/
/* 			  <div class="contenmap" id="mymap"></div>*/
/*      	</div>*/
/* 		<div class="col-md-1"></div>*/
/* 	</div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* 	<script async defer*/
/*       src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyARyp3ONt4Ax4J7JBBC8bFggOp4zntwd-s&callback=initMap') }}">*/
/*     </script>*/
/*     <script src="{{ asset('public/js/jsgoogle.js') }}"  ></script>*/
/* {% endblock %}*/
/* {% block footer %}*/
/* {% endblock %}*/
