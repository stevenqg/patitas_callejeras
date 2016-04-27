<?php

/* PCFundationBundle:Admin:agregardatos.html.twig */
class __TwigTemplate_475f2ebb5b27651a1b544cd0aedfdfa13cb5cf424e1a659fbb022288e6768d38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:agregardatos.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCFundationBundle:Admin:admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e19246c5cee5f0db9cbed10ea652c85f058a9a3da7e68d396495a5f4dbf21f2e = $this->env->getExtension("native_profiler");
        $__internal_e19246c5cee5f0db9cbed10ea652c85f058a9a3da7e68d396495a5f4dbf21f2e->enter($__internal_e19246c5cee5f0db9cbed10ea652c85f058a9a3da7e68d396495a5f4dbf21f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:agregardatos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e19246c5cee5f0db9cbed10ea652c85f058a9a3da7e68d396495a5f4dbf21f2e->leave($__internal_e19246c5cee5f0db9cbed10ea652c85f058a9a3da7e68d396495a5f4dbf21f2e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5197b25f1a90c1bcce1d3a9c35e9eb9dc3fcfa0cb28965563022955afdce0c73 = $this->env->getExtension("native_profiler");
        $__internal_5197b25f1a90c1bcce1d3a9c35e9eb9dc3fcfa0cb28965563022955afdce0c73->enter($__internal_5197b25f1a90c1bcce1d3a9c35e9eb9dc3fcfa0cb28965563022955afdce0c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "editar datos jornada de censo";
        
        $__internal_5197b25f1a90c1bcce1d3a9c35e9eb9dc3fcfa0cb28965563022955afdce0c73->leave($__internal_5197b25f1a90c1bcce1d3a9c35e9eb9dc3fcfa0cb28965563022955afdce0c73_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5ce17b46846fdb3fab7bea16a60f1eeaaad47b0caaaed7ebf6d7eb413eea26f = $this->env->getExtension("native_profiler");
        $__internal_d5ce17b46846fdb3fab7bea16a60f1eeaaad47b0caaaed7ebf6d7eb413eea26f->enter($__internal_d5ce17b46846fdb3fab7bea16a60f1eeaaad47b0caaaed7ebf6d7eb413eea26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<container class=\"backfont\">
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
</container>
";
        
        $__internal_d5ce17b46846fdb3fab7bea16a60f1eeaaad47b0caaaed7ebf6d7eb413eea26f->leave($__internal_d5ce17b46846fdb3fab7bea16a60f1eeaaad47b0caaaed7ebf6d7eb413eea26f_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:agregardatos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {%block title%}editar datos jornada de censo{% endblock %}*/
/* {% block body %}*/
/* */
/* <container class="backfont">*/
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
/* </container>*/
/* {% endblock%}*/
/* */
