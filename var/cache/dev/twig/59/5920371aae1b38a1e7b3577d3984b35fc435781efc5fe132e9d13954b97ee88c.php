<?php

/* PCFundationBundle:fundation:comedogs.html.twig */
class __TwigTemplate_615beea4958deea148cb827d8ca752a4bb317e4c6d7dc6b78da7ab3e4fc2149f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PCFundationBundle:fundation:comedogs.html.twig", 1);
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
        $__internal_2fef4f3cca0746dbdbbbd25f82fc8c9067963f1237b8b79d863cf5fb54b7afff = $this->env->getExtension("native_profiler");
        $__internal_2fef4f3cca0746dbdbbbd25f82fc8c9067963f1237b8b79d863cf5fb54b7afff->enter($__internal_2fef4f3cca0746dbdbbbd25f82fc8c9067963f1237b8b79d863cf5fb54b7afff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:comedogs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fef4f3cca0746dbdbbbd25f82fc8c9067963f1237b8b79d863cf5fb54b7afff->leave($__internal_2fef4f3cca0746dbdbbbd25f82fc8c9067963f1237b8b79d863cf5fb54b7afff_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_707abc5933828ba6cfe3902d4124dc12eed315d4c9b50795ed3bb17bdda4e169 = $this->env->getExtension("native_profiler");
        $__internal_707abc5933828ba6cfe3902d4124dc12eed315d4c9b50795ed3bb17bdda4e169->enter($__internal_707abc5933828ba6cfe3902d4124dc12eed315d4c9b50795ed3bb17bdda4e169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_707abc5933828ba6cfe3902d4124dc12eed315d4c9b50795ed3bb17bdda4e169->leave($__internal_707abc5933828ba6cfe3902d4124dc12eed315d4c9b50795ed3bb17bdda4e169_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_42ea9c77c9bac94f12f3285184e8f0493ac4f07fdd06b050aae6a41a7a36e125 = $this->env->getExtension("native_profiler");
        $__internal_42ea9c77c9bac94f12f3285184e8f0493ac4f07fdd06b050aae6a41a7a36e125->enter($__internal_42ea9c77c9bac94f12f3285184e8f0493ac4f07fdd06b050aae6a41a7a36e125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-md-1\"></div>
\t\t<div class=\"col-md-10\">
\t\t\t<img class=\"posrigth\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\">
\t\t\t<img  class=\"logocomedog\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/comedog.png"), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"col-md-1\"></div>
\t</div>
\t<div class=\"liner\"></div>
\t
\t\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<h4 class=\"textjusti titulosection\"> &nbsp; Encargados Comedog´s</h4><hr>
\t\t\t<dl class=\" textjusti dl-horizontal\">
\t\t\t\t\t\t<dt>Nombre:</dt>
\t\t\t\t\t\t<dd>Cristian Arbelaez Duque.</dd>
\t\t\t\t\t\t<dt>Email:</dt>
\t\t\t\t\t\t<dd>cristinaarbelaezcsp@hotmail.com</dd>
\t\t\t\t\t\t<dt>Telefono:</dt>
\t\t\t\t\t\t<dd>314 883 6159</dd>
\t\t\t\t\t</dl>
\t\t\t\t\t<dl class=\" textjusti dl-horizontal\">
\t\t\t\t\t\t<dt>Nombre:</dt>
\t\t\t\t\t\t<dd>Katheryn Tatiana Patiño.</dd>
\t\t\t\t\t\t<dt>Email:</dt>
\t\t\t\t\t\t<dd>katheryn_tatiana@hotmail.com</dd>
\t\t\t\t\t\t<dt>Telefono:</dt>
\t\t\t\t\t\t<dd>316 787 3734</dd>
\t\t\t\t\t</dl>
\t\t\t\t\t<dl class=\"textjusti dl-horizontal\">
\t\t\t\t\t\t<dt>Nombre:</dt>
\t\t\t\t\t\t<dd>Juliana Andrea Bedoya.</dd>
\t\t\t\t\t\t<dt>Email:</dt>
\t\t\t\t\t\t<dd>Julisbedoya0612@gmail.com</dd>
\t\t\t\t\t\t<dt>Telefono:</dt>
\t\t\t\t\t\t<dd>320 775 6822</dd>
\t\t\t\t\t</dl>
\t\t\t\t\t\t<dl class=\" textjusti dl-horizontal\">
\t\t\t\t\t\t<dt>Nombre:</dt>
\t\t\t\t\t\t<dd>Carlos José Ángel.</dd>
\t\t\t\t\t\t<dt>Email:</dt>
\t\t\t\t\t\t<dd>xicodeliacj@hotmal.com</dd>
\t\t\t\t\t\t<dt>Telefono:</dt>
\t\t\t\t\t\t<dd>310 441 6976</dd>
\t\t\t\t\t</dl>
\t\t\t\t\t</dl>
\t\t\t\t\t\t<dl class=\"textjusti dl-horizontal\">
\t\t\t\t\t\t<dt>Nombre:</dt>
\t\t\t\t\t\t<dd>Gloria Cristina Valencia Isaza.</dd>
\t\t\t\t\t\t<dt>Email:</dt>
\t\t\t\t\t\t<dd>soporte@systemlife.com.co</dd>
\t\t\t\t\t\t<dt>Telefono:</dt>
\t\t\t\t\t\t<dd>310 519 3887</dd>
\t\t\t\t\t</dl>
\t\t\t\t\t</dl>
\t\t\t\t\t\t<dl class=\"textjusti dl-horizontal\">
\t\t\t\t\t\t<dt>Nombre:</dt>
\t\t\t\t\t\t<dd>Leonela Serna Beltran.</dd>
\t\t\t\t\t\t<dt>Email:</dt>
\t\t\t\t\t\t<dd>leonelaserna@gmail.com</dd>
\t\t\t\t\t\t<dt>Telefono:</dt>
\t\t\t\t\t\t<dd>314 883 6159</dd>
\t\t\t\t\t</dl>
\t\t\t<hr>
\t\t\t<a type=\"button\" class=\"btn btn-primary\" href=\"http://www.comedog.org/\">Ir Sitio oficial</a>
     \t</div>
\t\t<div class=\"col-md-6\">
\t\t\t  <div class=\"contenmap\" id=\"mymap\"></div>
     \t</div>
\t</div>
";
        
        $__internal_42ea9c77c9bac94f12f3285184e8f0493ac4f07fdd06b050aae6a41a7a36e125->leave($__internal_42ea9c77c9bac94f12f3285184e8f0493ac4f07fdd06b050aae6a41a7a36e125_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2138552fb076ce48a5fdf2a833013c1d99387944c240d448f061729ac151a7a6 = $this->env->getExtension("native_profiler");
        $__internal_2138552fb076ce48a5fdf2a833013c1d99387944c240d448f061729ac151a7a6->enter($__internal_2138552fb076ce48a5fdf2a833013c1d99387944c240d448f061729ac151a7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script async defer
      src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyARyp3ONt4Ax4J7JBBC8bFggOp4zntwd-s&callback=initMap"), "html", null, true);
        echo "\">
    </script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jsgoogle.js"), "html", null, true);
        echo "\"  ></script>
";
        
        $__internal_2138552fb076ce48a5fdf2a833013c1d99387944c240d448f061729ac151a7a6->leave($__internal_2138552fb076ce48a5fdf2a833013c1d99387944c240d448f061729ac151a7a6_prof);

    }

    // line 84
    public function block_footer($context, array $blocks = array())
    {
        $__internal_310548c66669f07c1a32df8116ec59b7e7e3732f2db0cec4adcac6d9e2c73b60 = $this->env->getExtension("native_profiler");
        $__internal_310548c66669f07c1a32df8116ec59b7e7e3732f2db0cec4adcac6d9e2c73b60->enter($__internal_310548c66669f07c1a32df8116ec59b7e7e3732f2db0cec4adcac6d9e2c73b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_310548c66669f07c1a32df8116ec59b7e7e3732f2db0cec4adcac6d9e2c73b60->leave($__internal_310548c66669f07c1a32df8116ec59b7e7e3732f2db0cec4adcac6d9e2c73b60_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:fundation:comedogs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 84,  154 => 82,  149 => 80,  144 => 78,  138 => 77,  64 => 10,  60 => 9,  54 => 5,  48 => 4,  37 => 2,  11 => 1,);
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
/* 			<img class="posrigth" src="{{ asset('public/img/logo.png') }}" alt="logo">*/
/* 			<img  class="logocomedog" src="{{ asset('public/img/comedog.png') }}">*/
/* 		</div>*/
/* 		<div class="col-md-1"></div>*/
/* 	</div>*/
/* 	<div class="liner"></div>*/
/* 	*/
/* 		<div class="row">*/
/* 		<div class="col-md-6">*/
/* 			<h4 class="textjusti titulosection"> &nbsp; Encargados Comedog´s</h4><hr>*/
/* 			<dl class=" textjusti dl-horizontal">*/
/* 						<dt>Nombre:</dt>*/
/* 						<dd>Cristian Arbelaez Duque.</dd>*/
/* 						<dt>Email:</dt>*/
/* 						<dd>cristinaarbelaezcsp@hotmail.com</dd>*/
/* 						<dt>Telefono:</dt>*/
/* 						<dd>314 883 6159</dd>*/
/* 					</dl>*/
/* 					<dl class=" textjusti dl-horizontal">*/
/* 						<dt>Nombre:</dt>*/
/* 						<dd>Katheryn Tatiana Patiño.</dd>*/
/* 						<dt>Email:</dt>*/
/* 						<dd>katheryn_tatiana@hotmail.com</dd>*/
/* 						<dt>Telefono:</dt>*/
/* 						<dd>316 787 3734</dd>*/
/* 					</dl>*/
/* 					<dl class="textjusti dl-horizontal">*/
/* 						<dt>Nombre:</dt>*/
/* 						<dd>Juliana Andrea Bedoya.</dd>*/
/* 						<dt>Email:</dt>*/
/* 						<dd>Julisbedoya0612@gmail.com</dd>*/
/* 						<dt>Telefono:</dt>*/
/* 						<dd>320 775 6822</dd>*/
/* 					</dl>*/
/* 						<dl class=" textjusti dl-horizontal">*/
/* 						<dt>Nombre:</dt>*/
/* 						<dd>Carlos José Ángel.</dd>*/
/* 						<dt>Email:</dt>*/
/* 						<dd>xicodeliacj@hotmal.com</dd>*/
/* 						<dt>Telefono:</dt>*/
/* 						<dd>310 441 6976</dd>*/
/* 					</dl>*/
/* 					</dl>*/
/* 						<dl class="textjusti dl-horizontal">*/
/* 						<dt>Nombre:</dt>*/
/* 						<dd>Gloria Cristina Valencia Isaza.</dd>*/
/* 						<dt>Email:</dt>*/
/* 						<dd>soporte@systemlife.com.co</dd>*/
/* 						<dt>Telefono:</dt>*/
/* 						<dd>310 519 3887</dd>*/
/* 					</dl>*/
/* 					</dl>*/
/* 						<dl class="textjusti dl-horizontal">*/
/* 						<dt>Nombre:</dt>*/
/* 						<dd>Leonela Serna Beltran.</dd>*/
/* 						<dt>Email:</dt>*/
/* 						<dd>leonelaserna@gmail.com</dd>*/
/* 						<dt>Telefono:</dt>*/
/* 						<dd>314 883 6159</dd>*/
/* 					</dl>*/
/* 			<hr>*/
/* 			<a type="button" class="btn btn-primary" href="http://www.comedog.org/">Ir Sitio oficial</a>*/
/*      	</div>*/
/* 		<div class="col-md-6">*/
/* 			  <div class="contenmap" id="mymap"></div>*/
/*      	</div>*/
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
