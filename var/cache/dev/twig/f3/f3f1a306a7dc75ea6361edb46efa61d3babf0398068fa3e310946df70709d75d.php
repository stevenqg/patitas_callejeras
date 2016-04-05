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
        $__internal_58fad765da15b1ad979adff64f7dca5f215c3580504b809701c12c98e06030b7 = $this->env->getExtension("native_profiler");
        $__internal_58fad765da15b1ad979adff64f7dca5f215c3580504b809701c12c98e06030b7->enter($__internal_58fad765da15b1ad979adff64f7dca5f215c3580504b809701c12c98e06030b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:tapitas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58fad765da15b1ad979adff64f7dca5f215c3580504b809701c12c98e06030b7->leave($__internal_58fad765da15b1ad979adff64f7dca5f215c3580504b809701c12c98e06030b7_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_fadcd0f81364c12b7202bf240158f2b858fb733aeedd1ec9c7f0601db247f9de = $this->env->getExtension("native_profiler");
        $__internal_fadcd0f81364c12b7202bf240158f2b858fb733aeedd1ec9c7f0601db247f9de->enter($__internal_fadcd0f81364c12b7202bf240158f2b858fb733aeedd1ec9c7f0601db247f9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_fadcd0f81364c12b7202bf240158f2b858fb733aeedd1ec9c7f0601db247f9de->leave($__internal_fadcd0f81364c12b7202bf240158f2b858fb733aeedd1ec9c7f0601db247f9de_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ba3432c06e8270dbda440bedc8d760c6a74a2836935268d5d127c7b89eaf387 = $this->env->getExtension("native_profiler");
        $__internal_4ba3432c06e8270dbda440bedc8d760c6a74a2836935268d5d127c7b89eaf387->enter($__internal_4ba3432c06e8270dbda440bedc8d760c6a74a2836935268d5d127c7b89eaf387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4ba3432c06e8270dbda440bedc8d760c6a74a2836935268d5d127c7b89eaf387->leave($__internal_4ba3432c06e8270dbda440bedc8d760c6a74a2836935268d5d127c7b89eaf387_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_53d42745a5c20cbe69c23ccc71667ca048762747d6a459b8ab59a8d135404530 = $this->env->getExtension("native_profiler");
        $__internal_53d42745a5c20cbe69c23ccc71667ca048762747d6a459b8ab59a8d135404530->enter($__internal_53d42745a5c20cbe69c23ccc71667ca048762747d6a459b8ab59a8d135404530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_53d42745a5c20cbe69c23ccc71667ca048762747d6a459b8ab59a8d135404530->leave($__internal_53d42745a5c20cbe69c23ccc71667ca048762747d6a459b8ab59a8d135404530_prof);

    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f554d63878630425cca4753e7ff8c7e17a85f88111addaa65810edf10dbd3822 = $this->env->getExtension("native_profiler");
        $__internal_f554d63878630425cca4753e7ff8c7e17a85f88111addaa65810edf10dbd3822->enter($__internal_f554d63878630425cca4753e7ff8c7e17a85f88111addaa65810edf10dbd3822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_f554d63878630425cca4753e7ff8c7e17a85f88111addaa65810edf10dbd3822->leave($__internal_f554d63878630425cca4753e7ff8c7e17a85f88111addaa65810edf10dbd3822_prof);

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
