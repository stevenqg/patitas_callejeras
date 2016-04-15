<?php

/* @PCFundation/Admin/NewAdmin.html */
class __TwigTemplate_642caf3cec0668b8b2f55036f4ffb26245fe09b6a765350a0fee80934919a7e6 extends Twig_Template
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
        $__internal_bbeb1d628a4c7538d3a0e9e71fdc0edd9d2fc6bfee8e3a97907f6b4fee284520 = $this->env->getExtension("native_profiler");
        $__internal_bbeb1d628a4c7538d3a0e9e71fdc0edd9d2fc6bfee8e3a97907f6b4fee284520->enter($__internal_bbeb1d628a4c7538d3a0e9e71fdc0edd9d2fc6bfee8e3a97907f6b4fee284520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PCFundation/Admin/NewAdmin.html"));

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
\t<header id=\"header\" class=\"backvent\">
\t\t<a><img class=\"img-responsive dimen\"src=\"img/nombre.png\"></a>
\t</header>
\t<br>

\t<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-1 col-md-1\"></div>\t
\t\t<div class=\"col-xs-10 col-md-10\">
\t\t\t<div class=\"pestile\" >
\t\t\t<h4 class=\"margnone\">Nuevo Administrador<span class=\"btn-lg glyphicon glyphicon-user\" aria-hidden=\"true\"></span></h4>
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
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel\" for=\"Edad del adoptante\">Contraseña:</label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input  type=\"text\" class=\"form-control\" id=\"ident_car\"placeholder=\"mas de 8 caracteres\"><div  class=\"logaler alert-danger\" id=\"id-error\"></div>
\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label for=\"Nombre del adoptante\">Confirmar contraseña: </label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input type=\"password\" class=\"form-control\" id=\"email_user\" placeholder=\"volver a escrivir la contraseña\"><div  class=\"logaler alert-danger\" id=\"email-error\"></div><br>
\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<button class=\"btn btn-primary\">Guardar datos <span class=\"glyphicon glyphicon-save\" aria-hidden=\"true\"></span> </button>
\t\t\t</div>\t
\t\t</div>\t
\t\t<div class=\"col-xs-1 col-md-1\"></div>\t
\t</div>
\t</div>
</body>
</html>";
        
        $__internal_bbeb1d628a4c7538d3a0e9e71fdc0edd9d2fc6bfee8e3a97907f6b4fee284520->leave($__internal_bbeb1d628a4c7538d3a0e9e71fdc0edd9d2fc6bfee8e3a97907f6b4fee284520_prof);

    }

    public function getTemplateName()
    {
        return "@PCFundation/Admin/NewAdmin.html";
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
/* 			<h4 class="margnone">Nuevo Administrador<span class="btn-lg glyphicon glyphicon-user" aria-hidden="true"></span></h4>*/
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
/* 					<div class="row">*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel" for="Edad del adoptante">Contraseña:</label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input  type="text" class="form-control" id="ident_car"placeholder="mas de 8 caracteres"><div  class="logaler alert-danger" id="id-error"></div>*/
/* 					<br>*/
/* 					</div>*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label for="Nombre del adoptante">Confirmar contraseña: </label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input type="password" class="form-control" id="email_user" placeholder="volver a escrivir la contraseña"><div  class="logaler alert-danger" id="email-error"></div><br>*/
/* 					</div>*/
/* 					</div>*/
/* */
/* 				</div>*/
/* 				<button class="btn btn-primary">Guardar datos <span class="glyphicon glyphicon-save" aria-hidden="true"></span> </button>*/
/* 			</div>	*/
/* 		</div>	*/
/* 		<div class="col-xs-1 col-md-1"></div>	*/
/* 	</div>*/
/* 	</div>*/
/* </body>*/
/* </html>*/
