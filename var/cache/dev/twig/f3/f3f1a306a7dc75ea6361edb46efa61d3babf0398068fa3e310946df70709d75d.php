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
        $__internal_50ae06fc7a19347ef34552d9d2817a4e5234d30aa07fa0c69dd17315aee5d671 = $this->env->getExtension("native_profiler");
        $__internal_50ae06fc7a19347ef34552d9d2817a4e5234d30aa07fa0c69dd17315aee5d671->enter($__internal_50ae06fc7a19347ef34552d9d2817a4e5234d30aa07fa0c69dd17315aee5d671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:tapitas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50ae06fc7a19347ef34552d9d2817a4e5234d30aa07fa0c69dd17315aee5d671->leave($__internal_50ae06fc7a19347ef34552d9d2817a4e5234d30aa07fa0c69dd17315aee5d671_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_cce2bb762ecaaac5674087b31d5313e0a2132a75c124de77f036ab7a5c791c4c = $this->env->getExtension("native_profiler");
        $__internal_cce2bb762ecaaac5674087b31d5313e0a2132a75c124de77f036ab7a5c791c4c->enter($__internal_cce2bb762ecaaac5674087b31d5313e0a2132a75c124de77f036ab7a5c791c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_cce2bb762ecaaac5674087b31d5313e0a2132a75c124de77f036ab7a5c791c4c->leave($__internal_cce2bb762ecaaac5674087b31d5313e0a2132a75c124de77f036ab7a5c791c4c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_12d98768fe6e2ef3ba8d8c570bf0a912b475813e3e68a575ebf15a0f54783590 = $this->env->getExtension("native_profiler");
        $__internal_12d98768fe6e2ef3ba8d8c570bf0a912b475813e3e68a575ebf15a0f54783590->enter($__internal_12d98768fe6e2ef3ba8d8c570bf0a912b475813e3e68a575ebf15a0f54783590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_12d98768fe6e2ef3ba8d8c570bf0a912b475813e3e68a575ebf15a0f54783590->leave($__internal_12d98768fe6e2ef3ba8d8c570bf0a912b475813e3e68a575ebf15a0f54783590_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d503b681a291bc271cfc750d7d1318289617c8e1b93d7ca45be2f3949dbe3724 = $this->env->getExtension("native_profiler");
        $__internal_d503b681a291bc271cfc750d7d1318289617c8e1b93d7ca45be2f3949dbe3724->enter($__internal_d503b681a291bc271cfc750d7d1318289617c8e1b93d7ca45be2f3949dbe3724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d503b681a291bc271cfc750d7d1318289617c8e1b93d7ca45be2f3949dbe3724->leave($__internal_d503b681a291bc271cfc750d7d1318289617c8e1b93d7ca45be2f3949dbe3724_prof);

    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        $__internal_885bde54dca78c1bd0b299d891e6cec57a93d3714b93dc7bf6ed0716fb6e75e6 = $this->env->getExtension("native_profiler");
        $__internal_885bde54dca78c1bd0b299d891e6cec57a93d3714b93dc7bf6ed0716fb6e75e6->enter($__internal_885bde54dca78c1bd0b299d891e6cec57a93d3714b93dc7bf6ed0716fb6e75e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_885bde54dca78c1bd0b299d891e6cec57a93d3714b93dc7bf6ed0716fb6e75e6->leave($__internal_885bde54dca78c1bd0b299d891e6cec57a93d3714b93dc7bf6ed0716fb6e75e6_prof);

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
