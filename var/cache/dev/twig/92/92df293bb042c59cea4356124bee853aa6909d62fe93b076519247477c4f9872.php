<?php

/* @PCFundation/Admin/Masct_adopcion.html */
class __TwigTemplate_2fe8785d9bd3fc91a9738de2202f18bb5c2260e446a27e0024a32be96dbcbc26 extends Twig_Template
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
        $__internal_7a77d4a98c50352d4cbfa849cdf3f0349c72b9a3fb7ffbbba355686eeb71077a = $this->env->getExtension("native_profiler");
        $__internal_7a77d4a98c50352d4cbfa849cdf3f0349c72b9a3fb7ffbbba355686eeb71077a->enter($__internal_7a77d4a98c50352d4cbfa849cdf3f0349c72b9a3fb7ffbbba355686eeb71077a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PCFundation/Admin/Masct_adopcion.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>Mascota adopcion</title>
\t<link rel=\"stylesheet\"  type=\"text/css\" href=\"css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/estile.css\">
</head>
<body>
\t<div>
\t\t
\t\t\t<h1 class=\"coloralert\">Mascotas para adopción</h1>
\t\t\t<div class=\"sectionstile\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div><img class=\"mion img-responsive img-thumbnail\" alt=\"\" name=\"imgmascota\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-1\"><label class=\"marginlabel\">Nombre:</label></div>\t
\t\t\t<div class=\"col-md-5\"><input type=\"text\" class=\"form-control\" name=\"Nomascota\" disabled></div>
\t\t\t<div class=\"textjusti col-md-1\"><label class=\"marginlabel\">Edad:</label></div>\t
\t\t\t<div class=\"col-md-5\"><input type=\"text\" class=\"form-control\" name=\"EDmascota\" disabled></div>
\t\t\t</div><br><!-- div close row form -->
\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-1\"><label class=\"marginlabel\">Color:</label></div>\t
\t\t\t<div class=\"col-md-5\"><input type=\"text\" class=\"form-control\" name=\"Colmascota\" disabled></div>
\t\t\t<div class=\"textjusti col-md-2\"><label class=\"marginlabel\">Sexo:</label></div>\t
\t\t\t<div class=\"col-md-4\"><select class=\"form-control\" disabled>
\t\t\t\t\t\t  <option>Macho</option>
\t\t\t\t\t\t  <option>hembra</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t</div><br><!-- div close row form -->\t
\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-1\"><label class=\"marginlabel\">Rasgo:</label></div>\t
\t\t\t<div class=\"col-md-5\"><input type=\"text\" name=\"Colmascota\" class=\"form-control\" disabled></div>
\t\t\t<div class=\"textjusti col-md-2\"><label class=\"marginlabel\">Vacunado:</label></div>\t
\t\t\t<div class=\"col-md-4\"><select class=\"form-control\" disabled>
\t\t\t\t\t\t  <option>Si</option>
\t\t\t\t\t\t  <option>No</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t</div><br><!-- div close row form -->\t
\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-2\"><label class=\"marginlabel\">Esterilizado:</label></div>\t
\t\t\t<div class=\"col-md-4\"><select class=\"form-control\" disabled>
\t\t\t\t\t\t  <option>Si</option>
\t\t\t\t\t\t  <option>No</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t\t\t<div class=\"col-md-4\"><button type=\"button\" class=\"btn btn-success\">Editar datos &nbsp;<span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></button></div>
\t\t\t</div><br>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t</div><!--div sectionsitile-->
\t\t<br>
\t\t<div class=\"sectionsile\">
\t\t\t     
\t\t\t<div>

\t\t\t  <!-- Nav tabs -->
\t\t\t  <ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t    <li role=\"presentation\" class=\"active\"><a href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">Perros</a></li>
\t\t\t    <li role=\"presentation\"><a href=\"#profile\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\">gatos</a></li>
\t\t\t    <li><a href=\"add_mascota.html\" type=\"button\" class=\"btn btn-primary\">Agregar mascota</a></li>
\t\t\t  </ul>

\t\t\t  <!-- Tab panes -->
\t\t\t  <div class=\"tab-content\">
\t\t\t    <div role=\"tabpanel\" class=\"conmargin tab-pane active\" id=\"home\"><br>
\t\t\t      \t<table class=\"table table-striped \">
              <thead>
                <tr>
                  <th class=\"tdxs\">#</th>
                  <th>Nombre</th>
                  <th>Edadn</th>
                  <th>Color</th>
                  <th>Sexo</th>
                  <th>Rasgo</th>
                  <th class=\"tdmd\">esteril</th>
                  <th class=\"tdmd\">Vacunas</th>
                  <th class=\"tdxs\">ver</th>


                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>papo</td>
                  <td>12</td>
                  <td>negro</td>
                  <td>macho</td>
                  <td>pequines</td>
                  <td>si</td>
                  <td>no</td>
                  <td><a href=\"\" id=\"vermas\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"ver datos\"><span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span></a></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>papo</td>
                  <td>12</td>
                  <td>negro</td>
                  <td>macho</td>
                  <td>pequines</td>
                  <td>si</td>
                  <td>no</td>
                  <td><a href=\"\" id=\"vermas\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"ver datos\"><span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span></a></td>
                </tr>
              </tbody>
            </table>
\t\t\t    </div>
\t\t\t    <div role=\"tabpanel\" class=\"conmargin tab-pane\" id=\"profile\">
\t\t\t    \t<br>
\t\t\t      \t<table class=\"table table-striped \">
              <thead>
                <tr>
                  <th class=\"tdxs\">#</th>
                  <th>Nombre</th>
                  <th>Edadn</th>
                  <th>Color</th>
                  <th>Sexo</th>
                  <th>Rasgo</th>
                  <th class=\"tdmd\">esteril</th>
                  <th class=\"tdmd\">Vacunas</th>
                  <th class=\"tdxs\">ver</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>nino</td>
                  <td>12</td>
                  <td>negro</td>
                  <td>macho</td>
                  <td>pequines</td>
                  <td>si</td>
                  <td>no</td>
                  <td><a href=\"\" id=\"vermas\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"ver datos\"><span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span></a></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>ghgapo</td>
                  <td>12</td>
                  <td>negro</td>
                  <td>macho</td>
                  <td>pequines</td>
                  <td>si</td>
                  <td>no</td>
                  <td><a href=\"\" id=\"vermas\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"ver datos\" ><span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span></a></td>
                </tr>
              </tbody>
            </table>
\t\t\t    </div>
\t\t\t  </div>

\t\t\t</div><!-- div close panel tab-->
\t\t</div><!--div close sectionstile 2 -->
\t</div>
\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"js/bootstrap.min.js\" type=\"text/javascript\"></script>
    <script src=\"js/functJquery.js\" type=\"text/javascript\"></script>
</body>
</html>";
        
        $__internal_7a77d4a98c50352d4cbfa849cdf3f0349c72b9a3fb7ffbbba355686eeb71077a->leave($__internal_7a77d4a98c50352d4cbfa849cdf3f0349c72b9a3fb7ffbbba355686eeb71077a_prof);

    }

    public function getTemplateName()
    {
        return "@PCFundation/Admin/Masct_adopcion.html";
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
/* 	<title>Mascota adopcion</title>*/
/* 	<link rel="stylesheet"  type="text/css" href="css/bootstrap.min.css">*/
/* 	<link rel="stylesheet" type="text/css" href="css/estile.css">*/
/* </head>*/
/* <body>*/
/* 	<div>*/
/* 		*/
/* 			<h1 class="coloralert">Mascotas para adopción</h1>*/
/* 			<div class="sectionstile">*/
/* 				<div class="row">*/
/* 					<div class="col-md-3">*/
/* 					<div><img class="mion img-responsive img-thumbnail" alt="" name="imgmascota"></div>*/
/* 					</div>*/
/* 					<div class="col-md-9">*/
/* 						<div class="row">*/
/* 			<div class="textjusti col-md-1"><label class="marginlabel">Nombre:</label></div>	*/
/* 			<div class="col-md-5"><input type="text" class="form-control" name="Nomascota" disabled></div>*/
/* 			<div class="textjusti col-md-1"><label class="marginlabel">Edad:</label></div>	*/
/* 			<div class="col-md-5"><input type="text" class="form-control" name="EDmascota" disabled></div>*/
/* 			</div><br><!-- div close row form -->*/
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-1"><label class="marginlabel">Color:</label></div>	*/
/* 			<div class="col-md-5"><input type="text" class="form-control" name="Colmascota" disabled></div>*/
/* 			<div class="textjusti col-md-2"><label class="marginlabel">Sexo:</label></div>	*/
/* 			<div class="col-md-4"><select class="form-control" disabled>*/
/* 						  <option>Macho</option>*/
/* 						  <option>hembra</option>*/
/* 						</select>*/
/* 					</div>*/
/* 			</div><br><!-- div close row form -->	*/
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-1"><label class="marginlabel">Rasgo:</label></div>	*/
/* 			<div class="col-md-5"><input type="text" name="Colmascota" class="form-control" disabled></div>*/
/* 			<div class="textjusti col-md-2"><label class="marginlabel">Vacunado:</label></div>	*/
/* 			<div class="col-md-4"><select class="form-control" disabled>*/
/* 						  <option>Si</option>*/
/* 						  <option>No</option>*/
/* 						</select>*/
/* 					</div>*/
/* 			</div><br><!-- div close row form -->	*/
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-2"><label class="marginlabel">Esterilizado:</label></div>	*/
/* 			<div class="col-md-4"><select class="form-control" disabled>*/
/* 						  <option>Si</option>*/
/* 						  <option>No</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-md-2"></div>*/
/* 					<div class="col-md-4"><button type="button" class="btn btn-success">Editar datos &nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></div>*/
/* 			</div><br>*/
/* 					</div>*/
/* 				</div>*/
/* 			*/
/* 		</div><!--div sectionsitile-->*/
/* 		<br>*/
/* 		<div class="sectionsile">*/
/* 			     */
/* 			<div>*/
/* */
/* 			  <!-- Nav tabs -->*/
/* 			  <ul class="nav nav-tabs" role="tablist">*/
/* 			    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Perros</a></li>*/
/* 			    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">gatos</a></li>*/
/* 			    <li><a href="add_mascota.html" type="button" class="btn btn-primary">Agregar mascota</a></li>*/
/* 			  </ul>*/
/* */
/* 			  <!-- Tab panes -->*/
/* 			  <div class="tab-content">*/
/* 			    <div role="tabpanel" class="conmargin tab-pane active" id="home"><br>*/
/* 			      	<table class="table table-striped ">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <th class="tdxs">#</th>*/
/*                   <th>Nombre</th>*/
/*                   <th>Edadn</th>*/
/*                   <th>Color</th>*/
/*                   <th>Sexo</th>*/
/*                   <th>Rasgo</th>*/
/*                   <th class="tdmd">esteril</th>*/
/*                   <th class="tdmd">Vacunas</th>*/
/*                   <th class="tdxs">ver</th>*/
/* */
/* */
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 <tr>*/
/*                   <td>1</td>*/
/*                   <td>papo</td>*/
/*                   <td>12</td>*/
/*                   <td>negro</td>*/
/*                   <td>macho</td>*/
/*                   <td>pequines</td>*/
/*                   <td>si</td>*/
/*                   <td>no</td>*/
/*                   <td><a href="" id="vermas" data-toggle="tooltip" data-placement="right" title="ver datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                   <td>1</td>*/
/*                   <td>papo</td>*/
/*                   <td>12</td>*/
/*                   <td>negro</td>*/
/*                   <td>macho</td>*/
/*                   <td>pequines</td>*/
/*                   <td>si</td>*/
/*                   <td>no</td>*/
/*                   <td><a href="" id="vermas" data-toggle="tooltip" data-placement="right" title="ver datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>*/
/*                 </tr>*/
/*               </tbody>*/
/*             </table>*/
/* 			    </div>*/
/* 			    <div role="tabpanel" class="conmargin tab-pane" id="profile">*/
/* 			    	<br>*/
/* 			      	<table class="table table-striped ">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <th class="tdxs">#</th>*/
/*                   <th>Nombre</th>*/
/*                   <th>Edadn</th>*/
/*                   <th>Color</th>*/
/*                   <th>Sexo</th>*/
/*                   <th>Rasgo</th>*/
/*                   <th class="tdmd">esteril</th>*/
/*                   <th class="tdmd">Vacunas</th>*/
/*                   <th class="tdxs">ver</th>*/
/* */
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 <tr>*/
/*                   <td>1</td>*/
/*                   <td>nino</td>*/
/*                   <td>12</td>*/
/*                   <td>negro</td>*/
/*                   <td>macho</td>*/
/*                   <td>pequines</td>*/
/*                   <td>si</td>*/
/*                   <td>no</td>*/
/*                   <td><a href="" id="vermas" data-toggle="tooltip" data-placement="right" title="ver datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                   <td>1</td>*/
/*                   <td>ghgapo</td>*/
/*                   <td>12</td>*/
/*                   <td>negro</td>*/
/*                   <td>macho</td>*/
/*                   <td>pequines</td>*/
/*                   <td>si</td>*/
/*                   <td>no</td>*/
/*                   <td><a href="" id="vermas" data-toggle="tooltip" data-placement="right" title="ver datos" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>*/
/*                 </tr>*/
/*               </tbody>*/
/*             </table>*/
/* 			    </div>*/
/* 			  </div>*/
/* */
/* 			</div><!-- div close panel tab-->*/
/* 		</div><!--div close sectionstile 2 -->*/
/* 	</div>*/
/* 	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>*/
/*     <script src="js/bootstrap.min.js" type="text/javascript"></script>*/
/*     <script src="js/functJquery.js" type="text/javascript"></script>*/
/* </body>*/
/* </html>*/
