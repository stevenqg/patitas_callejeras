<?php

/* PCFundationBundle:Admin:editdatos.html.twig */
class __TwigTemplate_cf6600d8c5a241972eb30eda09f4180d2846fa3bca338add2303d74ae12060a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:editdatos.html.twig", 1);
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
        $__internal_e03e623111abc653c4977c7e1d9a42b8f10f020e05ba3a348971e2fd9599ae89 = $this->env->getExtension("native_profiler");
        $__internal_e03e623111abc653c4977c7e1d9a42b8f10f020e05ba3a348971e2fd9599ae89->enter($__internal_e03e623111abc653c4977c7e1d9a42b8f10f020e05ba3a348971e2fd9599ae89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:editdatos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e03e623111abc653c4977c7e1d9a42b8f10f020e05ba3a348971e2fd9599ae89->leave($__internal_e03e623111abc653c4977c7e1d9a42b8f10f020e05ba3a348971e2fd9599ae89_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_571cc4c0dff4aab67594f3f6ee2f5807fd299c115581402e5a0908a8525369e5 = $this->env->getExtension("native_profiler");
        $__internal_571cc4c0dff4aab67594f3f6ee2f5807fd299c115581402e5a0908a8525369e5->enter($__internal_571cc4c0dff4aab67594f3f6ee2f5807fd299c115581402e5a0908a8525369e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<container class=\"backfont\">
\t<div class=\"liner\"></div>
\t<br>
\t<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-1 col-md-1\"></div>\t
\t\t<div class=\"col-xs-10 col-md-10\">
\t\t\t<div class=\"titedit pestile\" >
\t\t\t<h4 class=\"margnone\">Editar datos <span class=\"btn-lg glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></h4>
\t\t\t</div>
\t\t\t<div class=\"conteform\">
\t\t\t\t<br>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel textjusti\" for=\"Nombres del adoptante\">Clasificación:</label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t\t  <option>Perro</option>
\t\t\t\t\t\t  <option>Gato</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel textjusti\"  for=\"Apellidos del adoptante\">Rasgo:</label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input type=\"text\" class=\"form-control\" id=\"last_name\"placeholder=\"Rasgo / raza parentesco\"><div  class=\"logaler alert-danger\" id=\"last_name-error\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"col-xs-3 col-md-2 textjusti\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Nombre del adoptante\">Edad: </label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input type=\"text\" class=\"form-control\" id=\"age_user\" placeholder=\"Edad promedio\"><div  class=\"logaler alert-danger\" id=\"age-error\"></div><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Edad del adoptante\">Necesita cirugía:</label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t\t  <option>No</option>
\t\t\t\t\t\t  <option>Si</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel\" for=\"Edad del adoptante\">Nombre:</label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input  type=\"text\" class=\"form-control\" id=\"ident_car\"placeholder=\"Nombre del responsable\">
\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label for=\"Nombre del adoptante\">Edad: </label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input type=\"text\" class=\"form-control\" id=\"email_user\" placeholder=\"Edad del responsable\">
\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel\" for=\"Edad del adoptante\">Dirección:</label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input  type=\"text\" class=\"form-control\" id=\"ident_car\"placeholder=\"Dirección del responsable\">
\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label for=\"Nombre del adoptante\">Telefono: </label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input type=\"text\" class=\"form-control\" id=\"email_user\" placeholder=\"Telefono responsable\">
\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t\t</div>

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
</container>
";
        
        $__internal_571cc4c0dff4aab67594f3f6ee2f5807fd299c115581402e5a0908a8525369e5->leave($__internal_571cc4c0dff4aab67594f3f6ee2f5807fd299c115581402e5a0908a8525369e5_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:editdatos.html.twig";
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
/* <container class="backfont">*/
/* 	<div class="liner"></div>*/
/* 	<br>*/
/* 	<div class="container">*/
/* 	<div class="row">*/
/* 		<div class="col-xs-1 col-md-1"></div>	*/
/* 		<div class="col-xs-10 col-md-10">*/
/* 			<div class="titedit pestile" >*/
/* 			<h4 class="margnone">Editar datos <span class="btn-lg glyphicon glyphicon-edit" aria-hidden="true"></span></h4>*/
/* 			</div>*/
/* 			<div class="conteform">*/
/* 				<br>*/
/* 				<div class="form-group">*/
/* 					<div class="row">*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel textjusti" for="Nombres del adoptante">Clasificación:</label></div>*/
/* 					<div class="col-xs-9 col-md-4">*/
/* 						<select class="form-control">*/
/* 						  <option>Perro</option>*/
/* 						  <option>Gato</option>*/
/* 						</select>*/
/* 						<br>*/
/* 					</div>*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel textjusti"  for="Apellidos del adoptante">Rasgo:</label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input type="text" class="form-control" id="last_name"placeholder="Rasgo / raza parentesco"><div  class="logaler alert-danger" id="last_name-error"></div>*/
/* 					</div>*/
/* 					</div>*/
/* */
/* 					<div class="row">*/
/* 					<br>*/
/* 					<div class="col-xs-3 col-md-2 textjusti">*/
/* 					<label class="marginlabel"  for="Nombre del adoptante">Edad: </label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input type="text" class="form-control" id="age_user" placeholder="Edad promedio"><div  class="logaler alert-danger" id="age-error"></div><br>*/
/* 					</div>*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel"  for="Edad del adoptante">Necesita cirugía:</label></div>*/
/* 					<div class="col-xs-9 col-md-4">*/
/* 						<select class="form-control">*/
/* 						  <option>No</option>*/
/* 						  <option>Si</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					</div>*/
/* 					<hr>*/
/* 					<div class="row">*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel" for="Edad del adoptante">Nombre:</label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input  type="text" class="form-control" id="ident_car"placeholder="Nombre del responsable">*/
/* 					<br>*/
/* 					</div>*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label for="Nombre del adoptante">Edad: </label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input type="text" class="form-control" id="email_user" placeholder="Edad del responsable">*/
/* 					<br>*/
/* 					</div>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel" for="Edad del adoptante">Dirección:</label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input  type="text" class="form-control" id="ident_car"placeholder="Dirección del responsable">*/
/* 					<br>*/
/* 					</div>*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label for="Nombre del adoptante">Telefono: </label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input type="text" class="form-control" id="email_user" placeholder="Telefono responsable">*/
/* 					<br>*/
/* 					</div>*/
/* 					</div>*/
/* */
/* 				</div>*/
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
/* </container>*/
/* {% endblock %}*/
/* */
