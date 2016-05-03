<?php

/* PCFundationBundle:fundation:eventos.html.twig */
class __TwigTemplate_350ee61de712e01758fece19fb671b9f840ed5f983b790a49b360b971e116a0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PCFundationBundle:fundation:eventos.html.twig", 1);
        $this->blocks = array(
            'scroll_nav' => array($this, 'block_scroll_nav'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c3e74da13560ffb48833f60238978fd2a36f535f48d8945935f8b3c687b612e = $this->env->getExtension("native_profiler");
        $__internal_5c3e74da13560ffb48833f60238978fd2a36f535f48d8945935f8b3c687b612e->enter($__internal_5c3e74da13560ffb48833f60238978fd2a36f535f48d8945935f8b3c687b612e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:eventos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c3e74da13560ffb48833f60238978fd2a36f535f48d8945935f8b3c687b612e->leave($__internal_5c3e74da13560ffb48833f60238978fd2a36f535f48d8945935f8b3c687b612e_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_51daf1f75725c02afc6f8877fc31838ccafd93e5796e41651654dc2e438c65b9 = $this->env->getExtension("native_profiler");
        $__internal_51daf1f75725c02afc6f8877fc31838ccafd93e5796e41651654dc2e438c65b9->enter($__internal_51daf1f75725c02afc6f8877fc31838ccafd93e5796e41651654dc2e438c65b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_51daf1f75725c02afc6f8877fc31838ccafd93e5796e41651654dc2e438c65b9->leave($__internal_51daf1f75725c02afc6f8877fc31838ccafd93e5796e41651654dc2e438c65b9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1541c5f2a6165e2a3f962ff54567b7321c0578a2888734372296934a6ab611ea = $this->env->getExtension("native_profiler");
        $__internal_1541c5f2a6165e2a3f962ff54567b7321c0578a2888734372296934a6ab611ea->enter($__internal_1541c5f2a6165e2a3f962ff54567b7321c0578a2888734372296934a6ab611ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<div class=\"  liner\"></div>
\t
\t<div class=\"backtwo\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-1\"></div>
\t\t\t<div class=\"col-md-10\">
\t\t\t\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/pr.jpg"), "html", null, true);
        echo "\"  class=\"imafont img-responsive\" alt=\"\">
\t\t\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/logo.png"), "html", null, true);
        echo "\" class=\"logofloat img-responsive\" alt=\"\">
\t\t\t\t<div class=\" titlestile  cementery\">
\t\t\t\t\t<h3> Ayuda a quienes mas lo necesitan</h3>
\t\t\t\t\t<p>tu donacion hara feliz a una mascota</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-1\"></div>

\t\t</div>
\t</div>
\t<div class=\"container\">
\t\t<h1 class=\"titulosection\">Proximos eventos</h1>
\t\t<hr>
\t\t<div class=\"row\">
\t\t<div class=\"col-md-4\">
\t\t<div class=\"evenconten\">
\t\t\t<div class=\"eventname\">
\t\t\t\t<h3 class=\"titlestile\">evento...</h3>
\t\t\t</div>
\t\t <dl class=\" textjusti dl-horizontal\">
  \t\t<dt class=\"colsector\">Lugar:</dt>
  \t\t<dd>Universidad del Quindio</dd>
  \t\t<dt class=\"colsector\" >Fecha:</dt>
  \t\t<dd>19/02/2016 3:40 P.M</dd>
  \t\t<dt class=\"colsector\">Descripción:</dt>
  \t\t<dd> .......... .......... .....</dd>
\t\t</dl>
\t\t</div>\t
\t\t</div>

\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"evenconten\">
\t\t\t<div class=\"eventname\">
\t\t\t\t<h3 class=\"titlestile\">evento...</h3>
\t\t\t</div>
\t\t <dl class=\" textjusti dl-horizontal\">
  \t\t<dt class=\"colsector\">Lugar:</dt>
  \t\t<dd>Universidad del Quindio</dd>
  \t\t<dt class=\"colsector\" >Fecha:</dt>
  \t\t<dd>19/02/2016 3:40 P.M</dd>
  \t\t<dt class=\"colsector\">Descripción:</dt>
  \t\t<dd> .......... .......... .....</dd>
\t\t</dl>
\t\t</div>
\t\t</div>

\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"evenconten\">
\t\t\t<div class=\"eventname\">
\t\t\t\t<h3 class=\"titlestile\">evento...</h3>
\t\t\t</div>
\t\t <dl class=\" textjusti dl-horizontal\">
  \t\t<dt class=\"colsector\">Lugar:</dt>
  \t\t<dd>Universidad del Quindio</dd>
  \t\t<dt class=\"colsector\" >Fecha:</dt>
  \t\t<dd>19/02/2016 3:40 P.M</dd>
  \t\t<dt class=\"colsector\">Descripción:</dt>
  \t\t<dd> .......... .......... .....</dd>
\t\t</dl>
\t\t</div>
\t\t</div>

\t\t</div>
\t</div>
\t
";
        
        $__internal_1541c5f2a6165e2a3f962ff54567b7321c0578a2888734372296934a6ab611ea->leave($__internal_1541c5f2a6165e2a3f962ff54567b7321c0578a2888734372296934a6ab611ea_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:fundation:eventos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 14,  62 => 13,  52 => 6,  46 => 5,  35 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block scroll_nav %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {{ parent() }}*/
/* 	<div class="  liner"></div>*/
/* 	*/
/* 	<div class="backtwo">*/
/* 		<div class="row">*/
/* 			<div class="col-md-1"></div>*/
/* 			<div class="col-md-10">*/
/* 				<img src="{{asset('public/img/pr.jpg')}}"  class="imafont img-responsive" alt="">*/
/* 				<img src="{{asset('public/img/logo.png')}}" class="logofloat img-responsive" alt="">*/
/* 				<div class=" titlestile  cementery">*/
/* 					<h3> Ayuda a quienes mas lo necesitan</h3>*/
/* 					<p>tu donacion hara feliz a una mascota</p>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-md-1"></div>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* 	<div class="container">*/
/* 		<h1 class="titulosection">Proximos eventos</h1>*/
/* 		<hr>*/
/* 		<div class="row">*/
/* 		<div class="col-md-4">*/
/* 		<div class="evenconten">*/
/* 			<div class="eventname">*/
/* 				<h3 class="titlestile">evento...</h3>*/
/* 			</div>*/
/* 		 <dl class=" textjusti dl-horizontal">*/
/*   		<dt class="colsector">Lugar:</dt>*/
/*   		<dd>Universidad del Quindio</dd>*/
/*   		<dt class="colsector" >Fecha:</dt>*/
/*   		<dd>19/02/2016 3:40 P.M</dd>*/
/*   		<dt class="colsector">Descripción:</dt>*/
/*   		<dd> .......... .......... .....</dd>*/
/* 		</dl>*/
/* 		</div>	*/
/* 		</div>*/
/* */
/* 		<div class="col-md-4">*/
/* 			<div class="evenconten">*/
/* 			<div class="eventname">*/
/* 				<h3 class="titlestile">evento...</h3>*/
/* 			</div>*/
/* 		 <dl class=" textjusti dl-horizontal">*/
/*   		<dt class="colsector">Lugar:</dt>*/
/*   		<dd>Universidad del Quindio</dd>*/
/*   		<dt class="colsector" >Fecha:</dt>*/
/*   		<dd>19/02/2016 3:40 P.M</dd>*/
/*   		<dt class="colsector">Descripción:</dt>*/
/*   		<dd> .......... .......... .....</dd>*/
/* 		</dl>*/
/* 		</div>*/
/* 		</div>*/
/* */
/* 		<div class="col-md-4">*/
/* 				<div class="evenconten">*/
/* 			<div class="eventname">*/
/* 				<h3 class="titlestile">evento...</h3>*/
/* 			</div>*/
/* 		 <dl class=" textjusti dl-horizontal">*/
/*   		<dt class="colsector">Lugar:</dt>*/
/*   		<dd>Universidad del Quindio</dd>*/
/*   		<dt class="colsector" >Fecha:</dt>*/
/*   		<dd>19/02/2016 3:40 P.M</dd>*/
/*   		<dt class="colsector">Descripción:</dt>*/
/*   		<dd> .......... .......... .....</dd>*/
/* 		</dl>*/
/* 		</div>*/
/* 		</div>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* {% endblock %}*/
