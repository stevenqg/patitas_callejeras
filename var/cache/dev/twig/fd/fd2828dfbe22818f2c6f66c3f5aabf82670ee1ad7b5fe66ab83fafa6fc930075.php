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
        $__internal_7455e95379184f7794fb14df8ed1d074d602eb466ce714e2a383c362f441a335 = $this->env->getExtension("native_profiler");
        $__internal_7455e95379184f7794fb14df8ed1d074d602eb466ce714e2a383c362f441a335->enter($__internal_7455e95379184f7794fb14df8ed1d074d602eb466ce714e2a383c362f441a335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:eventos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7455e95379184f7794fb14df8ed1d074d602eb466ce714e2a383c362f441a335->leave($__internal_7455e95379184f7794fb14df8ed1d074d602eb466ce714e2a383c362f441a335_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_a23c540a7ebabacc7d0babbd8382870502afc9de73ee86e35352db9b33559b6b = $this->env->getExtension("native_profiler");
        $__internal_a23c540a7ebabacc7d0babbd8382870502afc9de73ee86e35352db9b33559b6b->enter($__internal_a23c540a7ebabacc7d0babbd8382870502afc9de73ee86e35352db9b33559b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_a23c540a7ebabacc7d0babbd8382870502afc9de73ee86e35352db9b33559b6b->leave($__internal_a23c540a7ebabacc7d0babbd8382870502afc9de73ee86e35352db9b33559b6b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ce13499e2e9934a9247399124a7ea542c268fd9d148c5d6e4279d90185c6f13 = $this->env->getExtension("native_profiler");
        $__internal_1ce13499e2e9934a9247399124a7ea542c268fd9d148c5d6e4279d90185c6f13->enter($__internal_1ce13499e2e9934a9247399124a7ea542c268fd9d148c5d6e4279d90185c6f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<div class=\"  liner\"></div>
\t
\t<div class=\"backtwo\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-1\"></div>
\t\t\t<div class=\"col-md-10\">
\t\t\t\t<div class=\"imafont\"></div>
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
\t\t
\t\t<div class=\"row\">
\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 30
            echo "\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"evenconten\">
\t\t\t\t\t<div class=\"eventname\">
\t\t\t\t\t\t<h3 class=\"titlestile\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<dl class=\" text-left dl-horizontal\">
\t\t\t  \t\t<dt class=\" marginlabel colsector\">Lugar:</dt>
\t\t\t  \t\t<dd class=\"marginlabel\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "address", array()), "html", null, true);
            echo "</dd>
\t\t\t  \t\t<dt class=\" marginlabel colsector\" >Fecha:</dt>
\t\t\t  \t\t<dd class=\"marginlabel\">";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateAt", array()), "m/d/Y"), "html", null, true);
            echo "</dd>
\t\t\t  \t\t<dt class=\" marginlabel colsector\">Descripción:</dt>
\t\t\t  \t\t<dd class=\" marginlabel displaycol\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "description", array()), "html", null, true);
            echo "</dd>
\t\t\t\t\t</dl>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t</div>
\t</div>
\t
";
        
        $__internal_1ce13499e2e9934a9247399124a7ea542c268fd9d148c5d6e4279d90185c6f13->leave($__internal_1ce13499e2e9934a9247399124a7ea542c268fd9d148c5d6e4279d90185c6f13_prof);

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
        return array (  118 => 46,  107 => 41,  102 => 39,  97 => 37,  90 => 33,  85 => 30,  81 => 29,  63 => 14,  52 => 6,  46 => 5,  35 => 2,  11 => 1,);
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
/* 				<div class="imafont"></div>*/
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
/* 		*/
/* 		<div class="row">*/
/* 			{% for event in events%}*/
/* 			<div class="col-md-4">*/
/* 				<div class="evenconten">*/
/* 					<div class="eventname">*/
/* 						<h3 class="titlestile">{{ event.name }}</h3>*/
/* 					</div>*/
/* 					<dl class=" text-left dl-horizontal">*/
/* 			  		<dt class=" marginlabel colsector">Lugar:</dt>*/
/* 			  		<dd class="marginlabel">{{ event.address }}</dd>*/
/* 			  		<dt class=" marginlabel colsector" >Fecha:</dt>*/
/* 			  		<dd class="marginlabel">{{ event.dateAt | date("m/d/Y")}}</dd>*/
/* 			  		<dt class=" marginlabel colsector">Descripción:</dt>*/
/* 			  		<dd class=" marginlabel displaycol">{{ event.description }}</dd>*/
/* 					</dl>*/
/* 				</div>	*/
/* 			</div>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* {% endblock %}*/
