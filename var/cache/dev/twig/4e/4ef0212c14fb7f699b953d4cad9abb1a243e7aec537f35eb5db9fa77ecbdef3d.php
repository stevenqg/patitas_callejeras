<?php

/* @PCFundation/Admin/agragardatos.html */
class __TwigTemplate_7f66c4f3e79917d52ea4252cffca640ab03cab923ee2775d96738c8742f9f370 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9641ce752f1ceaa8602b5638ba8742e991704648f9b441c10ae29134ba7e27b7 = $this->env->getExtension("native_profiler");
        $__internal_9641ce752f1ceaa8602b5638ba8742e991704648f9b441c10ae29134ba7e27b7->enter($__internal_9641ce752f1ceaa8602b5638ba8742e991704648f9b441c10ae29134ba7e27b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PCFundation/Admin/agragardatos.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
\t<title>Nuevo Administrador</title>
\t<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\" rel = \"stylesheet\">
 \t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/estile.css\">
</head>
<body class=\"backfont\">
\t<div class=\"liner\"></div>
\t<br>
\t<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-1 col-md-1\"></div>\t
\t\t<div class=\"col-xs-10 col-md-10\">
\t\t\t<div class=\"timod pestile\" >
\t\t\t<h4 class=\"margnone\">Datos jornada censo<span class=\"btn-lg glyphicon glyphicon-check\" aria-hidden=\"true\"></span></h4>
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
\t\t\t\t\t<button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\">Guardar/ continuar »&nbsp;<span class=\"glyphicon glyphicon-saved\" aria-hidden=\"true\"></span></button>

\t\t\t\t\t\t<div class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
\t\t\t\t\t\t  <div class=\"modal-dialog modal-sm\">
\t\t\t\t\t\t    
\t\t\t\t\t\t      <img src=\"img/shek.png\" alt=\"mensaje de guardado\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>

\t\t\t\t<button class=\"btn btn-default\" onclick=\"window.close();\">Finalizar</button>
\t\t\t</div>\t
\t\t</div>\t
\t\t<div class=\"col-xs-1 col-md-1\"></div>\t
\t</div>
\t</div>

\t <script src=\"https://code.jquery.com/jquery-latest.js\" type=\"text/javascript\"></script>
\t<script src=\"js/bootstrap.min.js\"  type=\"text/javascript\"></script>
</body>
</html>";
        
        $__internal_9641ce752f1ceaa8602b5638ba8742e991704648f9b441c10ae29134ba7e27b7->leave($__internal_9641ce752f1ceaa8602b5638ba8742e991704648f9b441c10ae29134ba7e27b7_prof);

    }

    public function getTemplateName()
    {
        return "@PCFundation/Admin/agragardatos.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<meta charset="utf-8">*/
/* 	<meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/* 	<title>Nuevo Administrador</title>*/
/* 	<link rel="stylesheet" href="css/bootstrap.min.css" rel = "stylesheet">*/
/*  	<link rel="stylesheet" type="text/css" href="css/estile.css">*/
/* </head>*/
/* <body class="backfont">*/
/* 	<div class="liner"></div>*/
/* 	<br>*/
/* 	<div class="container">*/
/* 	<div class="row">*/
/* 		<div class="col-xs-1 col-md-1"></div>	*/
/* 		<div class="col-xs-10 col-md-10">*/
/* 			<div class="timod pestile" >*/
/* 			<h4 class="margnone">Datos jornada censo<span class="btn-lg glyphicon glyphicon-check" aria-hidden="true"></span></h4>*/
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
/* 					<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-sm">Guardar/ continuar »&nbsp;<span class="glyphicon glyphicon-saved" aria-hidden="true"></span></button>*/
/* */
/* 						<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
/* 						  <div class="modal-dialog modal-sm">*/
/* 						    */
/* 						      <img src="img/shek.png" alt="mensaje de guardado">*/
/* 							*/
/* 						  </div>*/
/* 						</div>*/
/* */
/* 				<button class="btn btn-default" onclick="window.close();">Finalizar</button>*/
/* 			</div>	*/
/* 		</div>	*/
/* 		<div class="col-xs-1 col-md-1"></div>	*/
/* 	</div>*/
/* 	</div>*/
/* */
/* 	 <script src="https://code.jquery.com/jquery-latest.js" type="text/javascript"></script>*/
/* 	<script src="js/bootstrap.min.js"  type="text/javascript"></script>*/
/* </body>*/
/* </html>*/
