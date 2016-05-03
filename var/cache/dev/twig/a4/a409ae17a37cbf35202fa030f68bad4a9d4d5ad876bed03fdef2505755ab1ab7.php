<?php

/* PCFundationBundle:Admin:evento_add.html.twig */
class __TwigTemplate_102d5f9931d2aa8bce547a679fb421cf55bafd7af9f75b7300c9a660fdb81115 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:evento_add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCFundationBundle:Admin:admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21b0ea8396dee6315e2aeb2657229ec181fe61b76aaa0e5537b1eeb15e32f6fb = $this->env->getExtension("native_profiler");
        $__internal_21b0ea8396dee6315e2aeb2657229ec181fe61b76aaa0e5537b1eeb15e32f6fb->enter($__internal_21b0ea8396dee6315e2aeb2657229ec181fe61b76aaa0e5537b1eeb15e32f6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:evento_add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21b0ea8396dee6315e2aeb2657229ec181fe61b76aaa0e5537b1eeb15e32f6fb->leave($__internal_21b0ea8396dee6315e2aeb2657229ec181fe61b76aaa0e5537b1eeb15e32f6fb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4321e4428c2fe875db9630c0853fc6f26e1a8630aad89852a266500a462cb6f = $this->env->getExtension("native_profiler");
        $__internal_c4321e4428c2fe875db9630c0853fc6f26e1a8630aad89852a266500a462cb6f->enter($__internal_c4321e4428c2fe875db9630c0853fc6f26e1a8630aad89852a266500a462cb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
\t<div class=\"liner\"></div>
\t<br>
\t<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-1 col-md-1\"></div>\t
\t\t<div class=\"col-xs-10 col-md-10\">
\t\t\t<div class=\"timod  pestile\">
\t\t\t<h4 class=\"margnone\">Crear Evento<span class=\"btn-lg glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></h4>
\t\t\t</div>
\t\t\t<div class=\"conteform\">
\t\t\t\t<br>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-3 col-md-2 textjusti\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Nombre del adoptante\">Titulo: </label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input type=\"text\" class=\"form-control\" id=\"age_user\" placeholder=\"Nombre del Evento\"><div  class=\"logaler alert-danger\" id=\"age-error\"></div><br>
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel textjusti\"  for=\"Apellidos del adoptante\">Lugar:</label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input type=\"text\" class=\"form-control\" id=\"last_name\"placeholder=\"donde se realiza el evento\"><div  class=\"logaler alert-danger\" id=\"last_name-error\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"col-xs-3 col-md-2 textjusti\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Nombre del adoptante\">Fecha: </label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input type=\"text\" class=\"form-control\" id=\"age_user\" placeholder=\"Fecha de realización\"><div  class=\"logaler alert-danger\" id=\"age-error\"></div><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Edad del adoptante\">Descripcion:</label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t<textarea  class=\"form-control\" rows=\"5\" name=\"descripción\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t</div>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\">Guardar »&nbsp;<span class=\"glyphicon glyphicon-saved\" aria-hidden=\"true\"></span></button>
\t\t\t</div>\t<!-- div conten-form-->
\t\t\t</div>\t<!-- div col-->
\t\t\t<div class=\"col-xs-1 col-md-1\"></div>\t
\t</div>
\t</div>
";
        
        $__internal_c4321e4428c2fe875db9630c0853fc6f26e1a8630aad89852a266500a462cb6f->leave($__internal_c4321e4428c2fe875db9630c0853fc6f26e1a8630aad89852a266500a462cb6f_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:evento_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block body %}*/
/* */
/* 	<div class="liner"></div>*/
/* 	<br>*/
/* 	<div class="container">*/
/* 	<div class="row">*/
/* 		<div class="col-xs-1 col-md-1"></div>	*/
/* 		<div class="col-xs-10 col-md-10">*/
/* 			<div class="timod  pestile">*/
/* 			<h4 class="margnone">Crear Evento<span class="btn-lg glyphicon glyphicon-edit" aria-hidden="true"></span></h4>*/
/* 			</div>*/
/* 			<div class="conteform">*/
/* 				<br>*/
/* 				<div class="form-group">*/
/* 					<div class="row">*/
/* 					<div class="col-xs-3 col-md-2 textjusti">*/
/* 					<label class="marginlabel"  for="Nombre del adoptante">Titulo: </label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input type="text" class="form-control" id="age_user" placeholder="Nombre del Evento"><div  class="logaler alert-danger" id="age-error"></div><br>*/
/* 					</div>*/
/* 					<br>*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel textjusti"  for="Apellidos del adoptante">Lugar:</label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input type="text" class="form-control" id="last_name"placeholder="donde se realiza el evento"><div  class="logaler alert-danger" id="last_name-error"></div>*/
/* 					</div>*/
/* 					</div>*/
/* */
/* 					<div class="row">*/
/* 					<br>*/
/* 					<div class="col-xs-3 col-md-2 textjusti">*/
/* 					<label class="marginlabel"  for="Nombre del adoptante">Fecha: </label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input type="text" class="form-control" id="age_user" placeholder="Fecha de realización"><div  class="logaler alert-danger" id="age-error"></div><br>*/
/* 					</div>*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel"  for="Edad del adoptante">Descripcion:</label></div>*/
/* 					<div class="col-xs-9 col-md-4">*/
/* 						<textarea  class="form-control" rows="5" name="descripción"></textarea>*/
/* 					</div>*/
/* 					</div>*/
/* 					<hr>*/
/* 				</div>*/
/* 					<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Guardar »&nbsp;<span class="glyphicon glyphicon-saved" aria-hidden="true"></span></button>*/
/* 			</div>	<!-- div conten-form-->*/
/* 			</div>	<!-- div col-->*/
/* 			<div class="col-xs-1 col-md-1"></div>	*/
/* 	</div>*/
/* 	</div>*/
/* {% endblock %}*/
