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
        $__internal_63a3732dbf454755dd0ce6916937a1d2191975f79ee723b1751a49685ff28b60 = $this->env->getExtension("native_profiler");
        $__internal_63a3732dbf454755dd0ce6916937a1d2191975f79ee723b1751a49685ff28b60->enter($__internal_63a3732dbf454755dd0ce6916937a1d2191975f79ee723b1751a49685ff28b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:tapitas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63a3732dbf454755dd0ce6916937a1d2191975f79ee723b1751a49685ff28b60->leave($__internal_63a3732dbf454755dd0ce6916937a1d2191975f79ee723b1751a49685ff28b60_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_9e0b97d0b7dd75e1b9234cb9ad86bcbb437973becec1a2a0aee161376e932eb1 = $this->env->getExtension("native_profiler");
        $__internal_9e0b97d0b7dd75e1b9234cb9ad86bcbb437973becec1a2a0aee161376e932eb1->enter($__internal_9e0b97d0b7dd75e1b9234cb9ad86bcbb437973becec1a2a0aee161376e932eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_9e0b97d0b7dd75e1b9234cb9ad86bcbb437973becec1a2a0aee161376e932eb1->leave($__internal_9e0b97d0b7dd75e1b9234cb9ad86bcbb437973becec1a2a0aee161376e932eb1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_97abec5ecee909c3b97fe36ee61e370ec286db36c51f4421ace9c6ced7e8ae4c = $this->env->getExtension("native_profiler");
        $__internal_97abec5ecee909c3b97fe36ee61e370ec286db36c51f4421ace9c6ced7e8ae4c->enter($__internal_97abec5ecee909c3b97fe36ee61e370ec286db36c51f4421ace9c6ced7e8ae4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_97abec5ecee909c3b97fe36ee61e370ec286db36c51f4421ace9c6ced7e8ae4c->leave($__internal_97abec5ecee909c3b97fe36ee61e370ec286db36c51f4421ace9c6ced7e8ae4c_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bbff227a74e04de9e4eb7e1df112a46ef05da22fe80cedcf8bbba37aa8c95bf7 = $this->env->getExtension("native_profiler");
        $__internal_bbff227a74e04de9e4eb7e1df112a46ef05da22fe80cedcf8bbba37aa8c95bf7->enter($__internal_bbff227a74e04de9e4eb7e1df112a46ef05da22fe80cedcf8bbba37aa8c95bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script async defer
      src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyB2xqiTeLJqCyM2ZOVt0jzMW9b6ixQHYrg"), "html", null, true);
        echo "\">
    </script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jsgoogle.js"), "html", null, true);
        echo "\"  ></script>
";
        
        $__internal_bbff227a74e04de9e4eb7e1df112a46ef05da22fe80cedcf8bbba37aa8c95bf7->leave($__internal_bbff227a74e04de9e4eb7e1df112a46ef05da22fe80cedcf8bbba37aa8c95bf7_prof);

    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f9b0e6453dc552ad0ffff04b67b6fa226946a6d1cb98e7770a9d4b6f4765e9c4 = $this->env->getExtension("native_profiler");
        $__internal_f9b0e6453dc552ad0ffff04b67b6fa226946a6d1cb98e7770a9d4b6f4765e9c4->enter($__internal_f9b0e6453dc552ad0ffff04b67b6fa226946a6d1cb98e7770a9d4b6f4765e9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_f9b0e6453dc552ad0ffff04b67b6fa226946a6d1cb98e7770a9d4b6f4765e9c4->leave($__internal_f9b0e6453dc552ad0ffff04b67b6fa226946a6d1cb98e7770a9d4b6f4765e9c4_prof);

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
/*       src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyB2xqiTeLJqCyM2ZOVt0jzMW9b6ixQHYrg') }}">*/
/*     </script>*/
/*     <script src="{{ asset('public/js/jsgoogle.js') }}"  ></script>*/
/* {% endblock %}*/
/* {% block footer %}*/
/* {% endblock %}*/
