<?php

/* PCFundationBundle:Admin:evento_edit.html.twig */
class __TwigTemplate_62a583aac28431ea16ed94e53324bb78e67c05a602d8cfa601bf96dd59cdf6b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:evento_edit.html.twig", 1);
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
        $__internal_8f2e5237302427fcb19e2f7c937d87cd4e6c4a9bb0b5d5fffe97a564b67f4c25 = $this->env->getExtension("native_profiler");
        $__internal_8f2e5237302427fcb19e2f7c937d87cd4e6c4a9bb0b5d5fffe97a564b67f4c25->enter($__internal_8f2e5237302427fcb19e2f7c937d87cd4e6c4a9bb0b5d5fffe97a564b67f4c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:evento_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f2e5237302427fcb19e2f7c937d87cd4e6c4a9bb0b5d5fffe97a564b67f4c25->leave($__internal_8f2e5237302427fcb19e2f7c937d87cd4e6c4a9bb0b5d5fffe97a564b67f4c25_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec1cc1acdbd67853ea8923af378fe70b8a5c9ce0cf198bf4e932b744d5c627a4 = $this->env->getExtension("native_profiler");
        $__internal_ec1cc1acdbd67853ea8923af378fe70b8a5c9ce0cf198bf4e932b744d5c627a4->enter($__internal_ec1cc1acdbd67853ea8923af378fe70b8a5c9ce0cf198bf4e932b744d5c627a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"liner\"></div>
\t<br>
\t<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-1 col-md-1\"></div>\t
\t\t<div class=\"col-xs-10 col-md-10\">
\t\t\t<div class=\"timod pestile\" >
\t\t\t<h4 class=\"margnone\">Editar Evento <span class=\"btn-lg glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></h4>
\t\t\t</div>
\t\t\t<div class=\"conteform\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<br>
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
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Edad del adoptante\">Descripcion:</label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t<textarea  class=\"form-control\" rows=\"5\" name=\"descripción\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
 \t\t\t\t</div>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\">Guardar Cambios  »&nbsp;<span class=\"glyphicon glyphicon-saved\" aria-hidden=\"true\"></span></button>

\t\t\t\t\t\t<div class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
\t\t\t\t\t\t  <div class=\"modal-dialog modal-sm\">
\t\t\t\t\t\t    <div class=\"modal-content\">
\t\t\t\t\t\t    \t<div class=\"modal-body\">
\t\t\t\t\t\t    \t\t<p ><span class=\"coloralert btn-lg glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>&nbsp; Esta seguro de efectuar cambios </p>
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    \t<div class=\"modal-footer\">
                    \t\t  <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\" onclick=\"window.close();\">Aceptar</button>
                    \t\t</div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>

\t\t\t\t<button class=\"btn btn-default\" onclick=\"window.close();\">cancelar</button>
\t\t\t</div>\t<!-- div conten-form-->
\t\t</div>\t<!-- div col-->
\t\t<div class=\"col-xs-1 col-md-1\"></div>\t
\t</div>
\t</div>
";
        
        $__internal_ec1cc1acdbd67853ea8923af378fe70b8a5c9ce0cf198bf4e932b744d5c627a4->leave($__internal_ec1cc1acdbd67853ea8923af378fe70b8a5c9ce0cf198bf4e932b744d5c627a4_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:evento_edit.html.twig";
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
/* 	<div class="liner"></div>*/
/* 	<br>*/
/* 	<div class="container">*/
/* 	<div class="row">*/
/* 		<div class="col-xs-1 col-md-1"></div>	*/
/* 		<div class="col-xs-10 col-md-10">*/
/* 			<div class="timod pestile" >*/
/* 			<h4 class="margnone">Editar Evento <span class="btn-lg glyphicon glyphicon-edit" aria-hidden="true"></span></h4>*/
/* 			</div>*/
/* 			<div class="conteform">*/
/* 					<div class="form-group">*/
/* 					<div class="row">*/
/* 					<br>*/
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
/* 					<br>*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel"  for="Edad del adoptante">Descripcion:</label></div>*/
/* 					<div class="col-xs-9 col-md-4">*/
/* 						<textarea  class="form-control" rows="5" name="descripción"></textarea>*/
/* 					</div>*/
/* 					</div>*/
/* 					<hr>*/
/*  				</div>*/
/* 					<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Guardar Cambios  »&nbsp;<span class="glyphicon glyphicon-saved" aria-hidden="true"></span></button>*/
/* */
/* 						<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
/* 						  <div class="modal-dialog modal-sm">*/
/* 						    <div class="modal-content">*/
/* 						    	<div class="modal-body">*/
/* 						    		<p ><span class="coloralert btn-lg glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp; Esta seguro de efectuar cambios </p>*/
/* 						    	</div>*/
/* 						    	<div class="modal-footer">*/
/*                     		  <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="window.close();">Aceptar</button>*/
/*                     		</div>*/
/* 						    </div>*/
/* 						    */
/* 						  </div>*/
/* 						</div>*/
/* */
/* 				<button class="btn btn-default" onclick="window.close();">cancelar</button>*/
/* 			</div>	<!-- div conten-form-->*/
/* 		</div>	<!-- div col-->*/
/* 		<div class="col-xs-1 col-md-1"></div>	*/
/* 	</div>*/
/* 	</div>*/
/* {% endblock %}*/
