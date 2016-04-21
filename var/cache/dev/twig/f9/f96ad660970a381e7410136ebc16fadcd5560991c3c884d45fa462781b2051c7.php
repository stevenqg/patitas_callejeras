<?php

/* @PCFundation/Admin/solicitud_adopcion.html */
class __TwigTemplate_b65fdb511938feca87d9ac684bc46a077a59a6eff832bf4b688eae254e29977f extends Twig_Template
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
        $__internal_147f925c1daff7ca45bae23f37e438946b600c3f618070278f161abd2025bdff = $this->env->getExtension("native_profiler");
        $__internal_147f925c1daff7ca45bae23f37e438946b600c3f618070278f161abd2025bdff->enter($__internal_147f925c1daff7ca45bae23f37e438946b600c3f618070278f161abd2025bdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PCFundation/Admin/solicitud_adopcion.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>Solicitud de adopción</title>
\t<link rel=\"stylesheet\"  type=\"text/css\" href=\"css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/estile.css\">
</head>
<body>
\t<div>
\t\t<div class=\"row\">
\t\t\t<h1 class=\"coloralert\">Solicitud de Adopción &nbsp; <a href=\"solicitudes.html\" type=\"button\" class=\" buttonborder pull-right btn btn-primary\"> <span class=\"glyphicon glyphicon-hand-left\" aria-hidden=\"true\"></span>&nbsp;regresar</a></h1>
\t\t\t<hr>
\t\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"titinfo\">Mascota</div>
\t\t\t<div class=\"sectionstile2\">
\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Nombre:</label></div>\t
\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Nomascota\" disabled></div>
\t\t\t</div><br><!-- div close row form -->
\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Edad:</label></div>\t
\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"EDmascota\" disabled></div>
\t\t\t</div><br>
\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Color:</label></div>\t
\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Colmascota\" disabled></div>
\t\t\t</div><br><!-- div close row form -->\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Sexo:</label></div>\t
\t\t\t<div class=\"col-md-9\"><select class=\"form-control\" disabled>
\t\t\t\t\t\t  <option>Macho</option>
\t\t\t\t\t\t  <option>hembra</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t</div><br>

\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Rasgo:</label></div>\t
\t\t\t<div class=\"col-md-9\"><input type=\"text\" name=\"Colmascota\" class=\"form-control\" disabled></div>
\t\t\t</div><br><!-- div close row form -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Vacunado:</label></div>\t
\t\t\t\t<div class=\"col-md-9\"><select class=\"form-control\" disabled>
\t\t\t\t\t\t  <option>Si</option>
\t\t\t\t\t\t  <option>No</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t</div>\t<br>
\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Esterilizado:</label></div>\t
\t\t\t<div class=\"col-md-9\"><select class=\"form-control\" disabled>
\t\t\t\t\t\t  <option>Si</option>
\t\t\t\t\t\t  <option>No</option>
\t\t\t\t\t\t</select>
\t\t\t</div><br>
\t\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div><!--div sectionsitile-->
\t</div><!-- div close col-md-6 mascota info-->
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"titinfo\">Adoptante</div>
\t\t\t<div class=\"sectionstile2\">
\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Nombre:</label></div>\t
\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Nomascota\" disabled></div>
\t\t\t</div><br><!-- div close row form -->
\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Apellado:</label></div>\t
\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"EDmascota\" disabled></div>
\t\t\t</div><br>
\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Edad:</label></div>\t
\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Colmascota\" disabled></div>
\t\t\t</div><br><!-- div close row form -->
\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">cedula:</label></div>\t
\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Nomascota\" disabled></div>
\t\t\t</div><br><!-- div close row form -->
\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Dirección:</label></div>\t
\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"EDmascota\" disabled></div>
\t\t\t</div><br>
\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Telefono:</label></div>\t
\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Colmascota\" disabled></div>
\t\t\t</div><br><!-- div close row form -->\t
\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Correo:</label></div>\t
\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Colmascota\" disabled></div>
\t\t\t</div><!-- div close row form -->\t
\t\t\t</div>
\t\t</div>
\t\t</div><!--div close row conten ful-->
\t\t\t<button type=\"button\" class=\"btn btn-primary\" id=\"aceptar\">Aprobar </button>
\t\t\t<button type=\"button\" class=\"btn btn-info\" id=\"aceptar\">Pendiente</button>
\t\t\t<button type=\"button\" class=\"btn btn-default\" id=\"aceptar\">Denegar</button>
\t</div>
\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"js/bootstrap.min.js\" type=\"text/javascript\"></script>
</body>
</html>";
        
        $__internal_147f925c1daff7ca45bae23f37e438946b600c3f618070278f161abd2025bdff->leave($__internal_147f925c1daff7ca45bae23f37e438946b600c3f618070278f161abd2025bdff_prof);

    }

    public function getTemplateName()
    {
        return "@PCFundation/Admin/solicitud_adopcion.html";
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
/* 	<title>Solicitud de adopción</title>*/
/* 	<link rel="stylesheet"  type="text/css" href="css/bootstrap.min.css">*/
/* 	<link rel="stylesheet" type="text/css" href="css/estile.css">*/
/* </head>*/
/* <body>*/
/* 	<div>*/
/* 		<div class="row">*/
/* 			<h1 class="coloralert">Solicitud de Adopción &nbsp; <a href="solicitudes.html" type="button" class=" buttonborder pull-right btn btn-primary"> <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>&nbsp;regresar</a></h1>*/
/* 			<hr>*/
/* 			<div class="col-md-6">*/
/* 			<div class="titinfo">Mascota</div>*/
/* 			<div class="sectionstile2">*/
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-3"><label class="marginlabel">Nombre:</label></div>	*/
/* 			<div class="col-md-9"><input type="text" class="form-control" name="Nomascota" disabled></div>*/
/* 			</div><br><!-- div close row form -->*/
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-3"><label class="marginlabel">Edad:</label></div>	*/
/* 			<div class="col-md-9"><input type="text" class="form-control" name="EDmascota" disabled></div>*/
/* 			</div><br>*/
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-3"><label class="marginlabel">Color:</label></div>	*/
/* 			<div class="col-md-9"><input type="text" class="form-control" name="Colmascota" disabled></div>*/
/* 			</div><br><!-- div close row form -->	*/
/* 			<div class="row">*/
/* 				<div class="textjusti col-md-3"><label class="marginlabel">Sexo:</label></div>	*/
/* 			<div class="col-md-9"><select class="form-control" disabled>*/
/* 						  <option>Macho</option>*/
/* 						  <option>hembra</option>*/
/* 						</select>*/
/* 					</div>*/
/* 			</div><br>*/
/* */
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-3"><label class="marginlabel">Rasgo:</label></div>	*/
/* 			<div class="col-md-9"><input type="text" name="Colmascota" class="form-control" disabled></div>*/
/* 			</div><br><!-- div close row form -->*/
/* 			<div class="row">*/
/* 				<div class="textjusti col-md-3"><label class="marginlabel">Vacunado:</label></div>	*/
/* 				<div class="col-md-9"><select class="form-control" disabled>*/
/* 						  <option>Si</option>*/
/* 						  <option>No</option>*/
/* 						</select>*/
/* 					</div>*/
/* 			</div>	<br>*/
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-3"><label class="marginlabel">Esterilizado:</label></div>	*/
/* 			<div class="col-md-9"><select class="form-control" disabled>*/
/* 						  <option>Si</option>*/
/* 						  <option>No</option>*/
/* 						</select>*/
/* 			</div><br>*/
/* 					*/
/* 			</div>*/
/* 			*/
/* 		</div><!--div sectionsitile-->*/
/* 	</div><!-- div close col-md-6 mascota info-->*/
/* 		<div class="col-md-6">*/
/* 			<div class="titinfo">Adoptante</div>*/
/* 			<div class="sectionstile2">*/
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-3"><label class="marginlabel">Nombre:</label></div>	*/
/* 			<div class="col-md-9"><input type="text" class="form-control" name="Nomascota" disabled></div>*/
/* 			</div><br><!-- div close row form -->*/
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-3"><label class="marginlabel">Apellado:</label></div>	*/
/* 			<div class="col-md-9"><input type="text" class="form-control" name="EDmascota" disabled></div>*/
/* 			</div><br>*/
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-3"><label class="marginlabel">Edad:</label></div>	*/
/* 			<div class="col-md-9"><input type="text" class="form-control" name="Colmascota" disabled></div>*/
/* 			</div><br><!-- div close row form -->*/
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-3"><label class="marginlabel">cedula:</label></div>	*/
/* 			<div class="col-md-9"><input type="text" class="form-control" name="Nomascota" disabled></div>*/
/* 			</div><br><!-- div close row form -->*/
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-3"><label class="marginlabel">Dirección:</label></div>	*/
/* 			<div class="col-md-9"><input type="text" class="form-control" name="EDmascota" disabled></div>*/
/* 			</div><br>*/
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-3"><label class="marginlabel">Telefono:</label></div>	*/
/* 			<div class="col-md-9"><input type="text" class="form-control" name="Colmascota" disabled></div>*/
/* 			</div><br><!-- div close row form -->	*/
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-3"><label class="marginlabel">Correo:</label></div>	*/
/* 			<div class="col-md-9"><input type="text" class="form-control" name="Colmascota" disabled></div>*/
/* 			</div><!-- div close row form -->	*/
/* 			</div>*/
/* 		</div>*/
/* 		</div><!--div close row conten ful-->*/
/* 			<button type="button" class="btn btn-primary" id="aceptar">Aprobar </button>*/
/* 			<button type="button" class="btn btn-info" id="aceptar">Pendiente</button>*/
/* 			<button type="button" class="btn btn-default" id="aceptar">Denegar</button>*/
/* 	</div>*/
/* 	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>*/
/*     <script src="js/bootstrap.min.js" type="text/javascript"></script>*/
/* </body>*/
/* </html>*/
