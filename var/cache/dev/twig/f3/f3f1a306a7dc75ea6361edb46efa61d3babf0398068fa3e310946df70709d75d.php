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
        $__internal_44f98fa4f493fce3c394e3b059d3bd06687c1db4c430ed75b4414616585cd360 = $this->env->getExtension("native_profiler");
        $__internal_44f98fa4f493fce3c394e3b059d3bd06687c1db4c430ed75b4414616585cd360->enter($__internal_44f98fa4f493fce3c394e3b059d3bd06687c1db4c430ed75b4414616585cd360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:tapitas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44f98fa4f493fce3c394e3b059d3bd06687c1db4c430ed75b4414616585cd360->leave($__internal_44f98fa4f493fce3c394e3b059d3bd06687c1db4c430ed75b4414616585cd360_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_07ae08e71b56ed31a7902afe98886f1fef8c5301ba9f3593744c04d849240f52 = $this->env->getExtension("native_profiler");
        $__internal_07ae08e71b56ed31a7902afe98886f1fef8c5301ba9f3593744c04d849240f52->enter($__internal_07ae08e71b56ed31a7902afe98886f1fef8c5301ba9f3593744c04d849240f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_07ae08e71b56ed31a7902afe98886f1fef8c5301ba9f3593744c04d849240f52->leave($__internal_07ae08e71b56ed31a7902afe98886f1fef8c5301ba9f3593744c04d849240f52_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1abfcfe1d16039d43a8a3d9de73ba1e0578008c461c2623812c48fea97cdbc1 = $this->env->getExtension("native_profiler");
        $__internal_e1abfcfe1d16039d43a8a3d9de73ba1e0578008c461c2623812c48fea97cdbc1->enter($__internal_e1abfcfe1d16039d43a8a3d9de73ba1e0578008c461c2623812c48fea97cdbc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e1abfcfe1d16039d43a8a3d9de73ba1e0578008c461c2623812c48fea97cdbc1->leave($__internal_e1abfcfe1d16039d43a8a3d9de73ba1e0578008c461c2623812c48fea97cdbc1_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7bb445a67e83cd5db539d8906f82614a1bf47b3cd7f2ff517374c250f4bba191 = $this->env->getExtension("native_profiler");
        $__internal_7bb445a67e83cd5db539d8906f82614a1bf47b3cd7f2ff517374c250f4bba191->enter($__internal_7bb445a67e83cd5db539d8906f82614a1bf47b3cd7f2ff517374c250f4bba191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7bb445a67e83cd5db539d8906f82614a1bf47b3cd7f2ff517374c250f4bba191->leave($__internal_7bb445a67e83cd5db539d8906f82614a1bf47b3cd7f2ff517374c250f4bba191_prof);

    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        $__internal_039abc26ffba83e61a71018b9d7967805eeeb862257a1633aa96ec9ae37d94b9 = $this->env->getExtension("native_profiler");
        $__internal_039abc26ffba83e61a71018b9d7967805eeeb862257a1633aa96ec9ae37d94b9->enter($__internal_039abc26ffba83e61a71018b9d7967805eeeb862257a1633aa96ec9ae37d94b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_039abc26ffba83e61a71018b9d7967805eeeb862257a1633aa96ec9ae37d94b9->leave($__internal_039abc26ffba83e61a71018b9d7967805eeeb862257a1633aa96ec9ae37d94b9_prof);

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
