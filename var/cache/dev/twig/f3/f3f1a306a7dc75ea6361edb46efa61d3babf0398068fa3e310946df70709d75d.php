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
        $__internal_929eed2d648f4eb88e605ca8c9168ec194cb63e2ffc2c550f9afba9975e3dd5d = $this->env->getExtension("native_profiler");
        $__internal_929eed2d648f4eb88e605ca8c9168ec194cb63e2ffc2c550f9afba9975e3dd5d->enter($__internal_929eed2d648f4eb88e605ca8c9168ec194cb63e2ffc2c550f9afba9975e3dd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:tapitas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_929eed2d648f4eb88e605ca8c9168ec194cb63e2ffc2c550f9afba9975e3dd5d->leave($__internal_929eed2d648f4eb88e605ca8c9168ec194cb63e2ffc2c550f9afba9975e3dd5d_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_e2590b7ad4261158ca0f9971eba59d33726b74c83e12afa5036a688016692c7e = $this->env->getExtension("native_profiler");
        $__internal_e2590b7ad4261158ca0f9971eba59d33726b74c83e12afa5036a688016692c7e->enter($__internal_e2590b7ad4261158ca0f9971eba59d33726b74c83e12afa5036a688016692c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_e2590b7ad4261158ca0f9971eba59d33726b74c83e12afa5036a688016692c7e->leave($__internal_e2590b7ad4261158ca0f9971eba59d33726b74c83e12afa5036a688016692c7e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_09f43d6c6c30b8e7d32fb4dd65065f49cce600a35c1d59d3aa80315a9c7ceb57 = $this->env->getExtension("native_profiler");
        $__internal_09f43d6c6c30b8e7d32fb4dd65065f49cce600a35c1d59d3aa80315a9c7ceb57->enter($__internal_09f43d6c6c30b8e7d32fb4dd65065f49cce600a35c1d59d3aa80315a9c7ceb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_09f43d6c6c30b8e7d32fb4dd65065f49cce600a35c1d59d3aa80315a9c7ceb57->leave($__internal_09f43d6c6c30b8e7d32fb4dd65065f49cce600a35c1d59d3aa80315a9c7ceb57_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_84cfc17cd88c11af5574b6fb86bfc2961c71564004b8825435ee08e4f1ce7acd = $this->env->getExtension("native_profiler");
        $__internal_84cfc17cd88c11af5574b6fb86bfc2961c71564004b8825435ee08e4f1ce7acd->enter($__internal_84cfc17cd88c11af5574b6fb86bfc2961c71564004b8825435ee08e4f1ce7acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_84cfc17cd88c11af5574b6fb86bfc2961c71564004b8825435ee08e4f1ce7acd->leave($__internal_84cfc17cd88c11af5574b6fb86bfc2961c71564004b8825435ee08e4f1ce7acd_prof);

    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1f000d3e8c5973b3a4c87955cbe55bacbccada84168a576e5bd26c5afd9231b1 = $this->env->getExtension("native_profiler");
        $__internal_1f000d3e8c5973b3a4c87955cbe55bacbccada84168a576e5bd26c5afd9231b1->enter($__internal_1f000d3e8c5973b3a4c87955cbe55bacbccada84168a576e5bd26c5afd9231b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_1f000d3e8c5973b3a4c87955cbe55bacbccada84168a576e5bd26c5afd9231b1->leave($__internal_1f000d3e8c5973b3a4c87955cbe55bacbccada84168a576e5bd26c5afd9231b1_prof);

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
