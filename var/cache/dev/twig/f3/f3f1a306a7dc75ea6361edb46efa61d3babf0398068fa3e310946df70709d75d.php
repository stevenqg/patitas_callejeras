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
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bcf650f2376c36e5168b37a27c7fb0bc32872da776525b32f8fb8ce0842dbd2 = $this->env->getExtension("native_profiler");
        $__internal_7bcf650f2376c36e5168b37a27c7fb0bc32872da776525b32f8fb8ce0842dbd2->enter($__internal_7bcf650f2376c36e5168b37a27c7fb0bc32872da776525b32f8fb8ce0842dbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:tapitas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bcf650f2376c36e5168b37a27c7fb0bc32872da776525b32f8fb8ce0842dbd2->leave($__internal_7bcf650f2376c36e5168b37a27c7fb0bc32872da776525b32f8fb8ce0842dbd2_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_fa7e0c53a9b3a8c281cc26b9f1e60a3a185bdb937c713aeabb231052bc6aa7ee = $this->env->getExtension("native_profiler");
        $__internal_fa7e0c53a9b3a8c281cc26b9f1e60a3a185bdb937c713aeabb231052bc6aa7ee->enter($__internal_fa7e0c53a9b3a8c281cc26b9f1e60a3a185bdb937c713aeabb231052bc6aa7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_fa7e0c53a9b3a8c281cc26b9f1e60a3a185bdb937c713aeabb231052bc6aa7ee->leave($__internal_fa7e0c53a9b3a8c281cc26b9f1e60a3a185bdb937c713aeabb231052bc6aa7ee_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a21896c44e1a53e3b15f87f40475dc988d5e234b4589c7f757930d79b66e6686 = $this->env->getExtension("native_profiler");
        $__internal_a21896c44e1a53e3b15f87f40475dc988d5e234b4589c7f757930d79b66e6686->enter($__internal_a21896c44e1a53e3b15f87f40475dc988d5e234b4589c7f757930d79b66e6686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->displayParentBlock("body", $context, $blocks);
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
        
        $__internal_a21896c44e1a53e3b15f87f40475dc988d5e234b4589c7f757930d79b66e6686->leave($__internal_a21896c44e1a53e3b15f87f40475dc988d5e234b4589c7f757930d79b66e6686_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_62b2e5b4ed9898e7f63a1f7951c3d3a622ba7964dda4f57f7b1d9fe54683aa9d = $this->env->getExtension("native_profiler");
        $__internal_62b2e5b4ed9898e7f63a1f7951c3d3a622ba7964dda4f57f7b1d9fe54683aa9d->enter($__internal_62b2e5b4ed9898e7f63a1f7951c3d3a622ba7964dda4f57f7b1d9fe54683aa9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script async defer
      src=\"";
        // line 28
        echo $this->env->getExtension('routing')->getUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyARyp3ONt4Ax4J7JBBC8bFggOp4zntwd-s&callback=initMap");
        echo "\">
    </script>
";
        
        $__internal_62b2e5b4ed9898e7f63a1f7951c3d3a622ba7964dda4f57f7b1d9fe54683aa9d->leave($__internal_62b2e5b4ed9898e7f63a1f7951c3d3a622ba7964dda4f57f7b1d9fe54683aa9d_prof);

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
        return array (  97 => 28,  92 => 26,  86 => 25,  64 => 10,  60 => 9,  53 => 5,  47 => 4,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block scroll_nav %}*/
/* {% endblock %}*/
/* {% block body %}*/
/* {{ parent() }}*/
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
/*       src="{{ url('https://maps.googleapis.com/maps/api/js?key=AIzaSyARyp3ONt4Ax4J7JBBC8bFggOp4zntwd-s&callback=initMap') }}">*/
/*     </script>*/
/* {% endblock %}*/
/* */
