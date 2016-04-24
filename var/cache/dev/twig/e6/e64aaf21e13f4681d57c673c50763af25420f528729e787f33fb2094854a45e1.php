<?php

/* PCFundationBundle:Admin:solicitud_adopcion.html.twig */
class __TwigTemplate_9c07f92ed3aec69d6ad21b6120a765fcbd492e6c0148bb74b067d0b8135f321c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:solicitud_adopcion.html.twig", 1);
        $this->blocks = array(
            'capa' => array($this, 'block_capa'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCFundationBundle:Admin:admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8516dc504ba743139a54910a47bcd0786ca878cd130ab5e4f16d72385a6b4a2 = $this->env->getExtension("native_profiler");
        $__internal_d8516dc504ba743139a54910a47bcd0786ca878cd130ab5e4f16d72385a6b4a2->enter($__internal_d8516dc504ba743139a54910a47bcd0786ca878cd130ab5e4f16d72385a6b4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:solicitud_adopcion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8516dc504ba743139a54910a47bcd0786ca878cd130ab5e4f16d72385a6b4a2->leave($__internal_d8516dc504ba743139a54910a47bcd0786ca878cd130ab5e4f16d72385a6b4a2_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_4a96cc978ba1e7708164d22391269e918beefa17a8161810bd8654749a063dff = $this->env->getExtension("native_profiler");
        $__internal_4a96cc978ba1e7708164d22391269e918beefa17a8161810bd8654749a063dff->enter($__internal_4a96cc978ba1e7708164d22391269e918beefa17a8161810bd8654749a063dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "\t<div>
\t\t<div class=\"row\">
\t\t\t<h1 class=\"coloralert\">Solicitud de Adopción &nbsp; <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("pc_admin_pet_solicitudes");
        echo "\" type=\"button\" class=\" buttonborder pull-right btn btn-primary\"> <span class=\"glyphicon glyphicon-hand-left\" aria-hidden=\"true\"></span>&nbsp;regresar</a></h1>
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

";
        
        $__internal_4a96cc978ba1e7708164d22391269e918beefa17a8161810bd8654749a063dff->leave($__internal_4a96cc978ba1e7708164d22391269e918beefa17a8161810bd8654749a063dff_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:solicitud_adopcion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* 	<div>*/
/* 		<div class="row">*/
/* 			<h1 class="coloralert">Solicitud de Adopción &nbsp; <a href="{{path('pc_admin_pet_solicitudes')}}" type="button" class=" buttonborder pull-right btn btn-primary"> <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>&nbsp;regresar</a></h1>*/
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
/* */
/* {% endblock %}*/
/* */
