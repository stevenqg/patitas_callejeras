<?php

/* @PCFundation/Admin/editinfo.html */
class __TwigTemplate_2f582d7071d830af0ac411a73512a3f80f0b7c8d88126f47a426fa81177efddc extends Twig_Template
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
        $__internal_fb260e14e455e3914a9114e33ce047a3c6c0ee41bf2a2f1636791543453faa2a = $this->env->getExtension("native_profiler");
        $__internal_fb260e14e455e3914a9114e33ce047a3c6c0ee41bf2a2f1636791543453faa2a->enter($__internal_fb260e14e455e3914a9114e33ce047a3c6c0ee41bf2a2f1636791543453faa2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PCFundation/Admin/editinfo.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
\t<title>Editar Datos</title>
\t<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\" rel = \"stylesheet\">
 \t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/estile.css\">
</head>
<body class=\"backfont\">
\t<header id=\"header\" class=\"backvent\">
\t\t<a><img class=\"img-responsive dimen\"src=\"img/nombre.png\"></a>
\t</header>
\t<br>

\t<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-1 col-md-1\"></div>\t
\t\t<div class=\"col-xs-10 col-md-10\">
\t\t\t<div class=\"pestile\" >
\t\t\t<h4 class=\"margnone\">Editar informacion<span class=\"btn-lg glyphicon glyphicon-user\" aria-hidden=\"true\"></span></h4>
\t\t\t</div>
\t\t\t<div class=\"conteform\">
\t\t\t\t<br>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel textjusti\" for=\"Nombres del adoptante\">Nombres: </label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Nombres del Administrador\"><div  class=\"logaler alert-danger\" id=\"username-error\"></div><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel textjusti\"  for=\"Apellidos del adoptante\">Apellido:</label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input type=\"text\" class=\"form-control\" id=\"last_name\"placeholder=\"Apelidos del Administrador\"><div  class=\"logaler alert-danger\" id=\"last_name-error\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"col-xs-3 col-md-2 textjusti\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Nombre del adoptante\">Edad: </label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input type=\"text\" class=\"form-control\" id=\"age_user\" placeholder=\"Edad del Administrador\"><div  class=\"logaler alert-danger\" id=\"age-error\"></div><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Edad del adoptante\">Cedula:</label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input  type=\"text\" class=\"form-control\" id=\"ident_car\"placeholder=\"Identificación del Administeador\"><div  class=\"logaler alert-danger\" id=\"id-error\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"col-xs-3 col-md-2 textjusti\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Nombre del adoptante\">Email: </label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input type=\"text\" class=\"form-control\" id=\"age_user\" placeholder=\"ejemplo@dominio.com\"><div  class=\"logaler alert-danger\" id=\"age-error\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-5 col-md-3\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\">Cambiar contraseña »</button>

\t\t\t\t\t\t<div class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
\t\t\t\t\t\t  <div class=\"modal-dialog modal-sm\">
\t\t\t\t\t\t    <div class=\"modal-content\">
\t\t\t\t\t\t      
\t\t\t\t\t\t      <div class=\"modal-header\">
\t\t\t\t\t\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Editar Contraseña<span class=\"btn-lg glyphicon glyphicon-cog\" aria-hidden=\"true\"></span></h5>
\t\t\t\t\t\t      </div>

\t\t\t\t\t\t       <div class=\"modal-body\">
\t\t\t\t\t\t\t        <form>
\t\t\t\t\t\t\t          <div class=\"form-group\">
\t\t\t\t\t\t\t            <label for=\"recipient-name\" class=\"textjusti control-label\">Contraseña actual:</label>
\t\t\t\t\t\t\t            <input type=\"password\" class=\"form-control\" id=\"recipient-name\"
\t\t\t\t\t\t\t            placeholder=\"Contraseña actual\">
\t\t\t\t\t\t\t          </div>
\t\t\t\t\t\t\t          <hr>
\t\t\t\t\t\t\t          <div class=\"form-group\">
\t\t\t\t\t\t\t            <label for=\"recipient-name\" class=\"textjusti control-label\">Nueva contraseña:</label>
\t\t\t\t\t\t\t            <input type=\"password\" class=\"form-control\" id=\"recipient-name\"
\t\t\t\t\t\t\t            placeholder=\"Contraseña nueva\">
\t\t\t\t\t\t\t          </div>
\t\t\t\t\t\t\t          <div class=\"form-group\">
\t\t\t\t\t\t\t            <label for=\"recipient-name\" class=\"textjusti control-label\">Confirmar contraseña :</label>
\t\t\t\t\t\t\t            <input type=\"password\" class=\"form-control\" id=\"recipient-name\"
\t\t\t\t\t\t\t            placeholder=\"Contraseña nueva\">
\t\t\t\t\t\t\t          </div>
\t\t\t\t\t\t\t        </form>
\t\t\t\t\t\t\t      </div>

\t\t\t\t\t\t\t      <div class=\"modal-footer\">
\t\t\t\t\t\t\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
\t\t\t\t\t\t\t        <button type=\"button\" class=\"btn btn-primary\">Guardar cambios</button>
\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t<div class=\"row\"><div class=\"col-md-9\">
\t\t\t\t\t\t\t<p class=\"marginlabel\">! Para poder guardar los cambios efectuados debe validar con su contraseña actual:</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"email_user\" placeholder=\"contraseña\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t<button class=\"btn btn-success\">Guardar cambios  &nbsp;<span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> </button>
\t\t\t</div>\t
\t\t</div>\t
\t\t<div class=\"col-xs-1 col-md-1\"></div>\t
\t</div>
\t</div>

\t<script src=\"https://code.jquery.com/jquery-latest.js\" type=\"text/javascript\"></script>
\t<script src=\"js/bootstrap.min.js\"></script>
</body>
</html>";
        
        $__internal_fb260e14e455e3914a9114e33ce047a3c6c0ee41bf2a2f1636791543453faa2a->leave($__internal_fb260e14e455e3914a9114e33ce047a3c6c0ee41bf2a2f1636791543453faa2a_prof);

    }

    public function getTemplateName()
    {
        return "@PCFundation/Admin/editinfo.html";
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
/* 	<title>Editar Datos</title>*/
/* 	<link rel="stylesheet" href="css/bootstrap.min.css" rel = "stylesheet">*/
/*  	<link rel="stylesheet" type="text/css" href="css/estile.css">*/
/* </head>*/
/* <body class="backfont">*/
/* 	<header id="header" class="backvent">*/
/* 		<a><img class="img-responsive dimen"src="img/nombre.png"></a>*/
/* 	</header>*/
/* 	<br>*/
/* */
/* 	<div class="container">*/
/* 	<div class="row">*/
/* 		<div class="col-xs-1 col-md-1"></div>	*/
/* 		<div class="col-xs-10 col-md-10">*/
/* 			<div class="pestile" >*/
/* 			<h4 class="margnone">Editar informacion<span class="btn-lg glyphicon glyphicon-user" aria-hidden="true"></span></h4>*/
/* 			</div>*/
/* 			<div class="conteform">*/
/* 				<br>*/
/* 				<div class="form-group">*/
/* 					<div class="row">*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel textjusti" for="Nombres del adoptante">Nombres: </label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input type="text" class="form-control" id="username" placeholder="Nombres del Administrador"><div  class="logaler alert-danger" id="username-error"></div><br>*/
/* 					</div>*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel textjusti"  for="Apellidos del adoptante">Apellido:</label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input type="text" class="form-control" id="last_name"placeholder="Apelidos del Administrador"><div  class="logaler alert-danger" id="last_name-error"></div>*/
/* 					</div>*/
/* 					</div>*/
/* */
/* 					<div class="row">*/
/* 					<br>*/
/* 					<div class="col-xs-3 col-md-2 textjusti">*/
/* 					<label class="marginlabel"  for="Nombre del adoptante">Edad: </label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input type="text" class="form-control" id="age_user" placeholder="Edad del Administrador"><div  class="logaler alert-danger" id="age-error"></div><br>*/
/* 					</div>*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel"  for="Edad del adoptante">Cedula:</label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input  type="text" class="form-control" id="ident_car"placeholder="Identificación del Administeador"><div  class="logaler alert-danger" id="id-error"></div>*/
/* 					</div>*/
/* 					</div>*/
/* */
/* 					<div class="row">*/
/* 					<br>*/
/* 					<div class="col-xs-3 col-md-2 textjusti">*/
/* 					<label class="marginlabel"  for="Nombre del adoptante">Email: </label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input type="text" class="form-control" id="age_user" placeholder="ejemplo@dominio.com"><div  class="logaler alert-danger" id="age-error"></div>*/
/* 					</div>*/
/* 					</div>*/
/* 					<hr>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<div class="col-xs-5 col-md-3">*/
/* 						<button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-sm">Cambiar contraseña »</button>*/
/* */
/* 						<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
/* 						  <div class="modal-dialog modal-sm">*/
/* 						    <div class="modal-content">*/
/* 						      */
/* 						      <div class="modal-header">*/
/* 						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>*/
/* 						        <h5 class="modal-title" id="exampleModalLabel">Editar Contraseña<span class="btn-lg glyphicon glyphicon-cog" aria-hidden="true"></span></h5>*/
/* 						      </div>*/
/* */
/* 						       <div class="modal-body">*/
/* 							        <form>*/
/* 							          <div class="form-group">*/
/* 							            <label for="recipient-name" class="textjusti control-label">Contraseña actual:</label>*/
/* 							            <input type="password" class="form-control" id="recipient-name"*/
/* 							            placeholder="Contraseña actual">*/
/* 							          </div>*/
/* 							          <hr>*/
/* 							          <div class="form-group">*/
/* 							            <label for="recipient-name" class="textjusti control-label">Nueva contraseña:</label>*/
/* 							            <input type="password" class="form-control" id="recipient-name"*/
/* 							            placeholder="Contraseña nueva">*/
/* 							          </div>*/
/* 							          <div class="form-group">*/
/* 							            <label for="recipient-name" class="textjusti control-label">Confirmar contraseña :</label>*/
/* 							            <input type="password" class="form-control" id="recipient-name"*/
/* 							            placeholder="Contraseña nueva">*/
/* 							          </div>*/
/* 							        </form>*/
/* 							      </div>*/
/* */
/* 							      <div class="modal-footer">*/
/* 							        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>*/
/* 							        <button type="button" class="btn btn-primary">Guardar cambios</button>*/
/* 							      </div>*/
/* 							</div>*/
/* 						  </div>*/
/* 						</div>*/
/* */
/* */
/* 						</div>*/
/* 					</div>*/
/* 					<br>*/
/* 					<div class="alert alert-warning">*/
/* 						<div class="row"><div class="col-md-9">*/
/* 							<p class="marginlabel">! Para poder guardar los cambios efectuados debe validar con su contraseña actual:</p>*/
/* 						</div>*/
/* 						<div class="col-md-3">*/
/* 							<input type="password" class="form-control" id="email_user" placeholder="contraseña">*/
/* 						</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				<button class="btn btn-success">Guardar cambios  &nbsp;<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </button>*/
/* 			</div>	*/
/* 		</div>	*/
/* 		<div class="col-xs-1 col-md-1"></div>	*/
/* 	</div>*/
/* 	</div>*/
/* */
/* 	<script src="https://code.jquery.com/jquery-latest.js" type="text/javascript"></script>*/
/* 	<script src="js/bootstrap.min.js"></script>*/
/* </body>*/
/* </html>*/
