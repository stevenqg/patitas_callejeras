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
        $__internal_b7343a6f149d28346902348154976c9f1f37f11a3f8e79787b2c166fd12a045e = $this->env->getExtension("native_profiler");
        $__internal_b7343a6f149d28346902348154976c9f1f37f11a3f8e79787b2c166fd12a045e->enter($__internal_b7343a6f149d28346902348154976c9f1f37f11a3f8e79787b2c166fd12a045e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:solicitud_adopcion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7343a6f149d28346902348154976c9f1f37f11a3f8e79787b2c166fd12a045e->leave($__internal_b7343a6f149d28346902348154976c9f1f37f11a3f8e79787b2c166fd12a045e_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_0b1a3a8ff874ab581fae9319ea0113d34ea4d11d8500dc937cbd551bdafaf679 = $this->env->getExtension("native_profiler");
        $__internal_0b1a3a8ff874ab581fae9319ea0113d34ea4d11d8500dc937cbd551bdafaf679->enter($__internal_0b1a3a8ff874ab581fae9319ea0113d34ea4d11d8500dc937cbd551bdafaf679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "\t<div>
\t\t<div class=\"row\">
\t\t\t<h1 class=\"coloralert\">Solicitud de Adopción &nbsp; <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("pc_admin_pet_solicitudes");
        echo "\" type=\"button\" class=\" buttonborder pull-right btn btn-primary\"> <span class=\"glyphicon glyphicon-hand-left\" aria-hidden=\"true\"></span>&nbsp;regresar</a></h1>
\t\t\t<hr>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"titinfo\">Mascota</div>
\t\t\t\t<div class=\"sectionstile2\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Nombre:</label></div>\t
\t\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Nomascota\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "name", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t\t</div><br><!-- div close row form -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Edad:</label></div>\t
\t\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"EDmascota\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "age", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t\t</div><br>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Color:</label></div>\t
\t\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Colmascota\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "colour", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t\t</div><br><!-- div close row form -->\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Género:</label></div>\t
\t\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"genmascota\" value=\"
\t\t\t\t\t";
        // line 25
        if (($this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "gender", array()) == "MALE")) {
            // line 26
            echo "\t                    macho
\t                ";
        } elseif (($this->getAttribute(        // line 27
(isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "gender", array()) == "FEMALE")) {
            // line 28
            echo "\t                    hembra
\t                ";
        }
        // line 30
        echo "\t                \" disabled></div>
\t\t\t\t\t</div><br><!-- div close row form -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Raza:</label></div>\t
\t\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" name=\"razamascota\" class=\"form-control\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "race", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t\t</div><br><!-- div close row form -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Vacunada:</label></div>\t
\t\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" name=\"razamascota\" class=\"form-control\" value=\"
\t\t\t\t\t";
        // line 39
        if (($this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "isVacunated", array()) == 1)) {
            // line 40
            echo "\t                    si
\t                ";
        } elseif (($this->getAttribute(        // line 41
(isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "isVacunated", array()) == 0)) {
            // line 42
            echo "\t                    no
\t                ";
        }
        // line 44
        echo "\t\t\t\t\t\" disabled></div>
\t\t\t\t\t</div><br><!-- div close row form -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Esterilizada:</label></div>\t
\t\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" name=\"razamascota\" class=\"form-control\" value=\"
\t\t\t\t\t";
        // line 49
        if (($this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "isSterilized", array()) == 1)) {
            // line 50
            echo "\t\t\t            si
\t\t\t        ";
        } elseif (($this->getAttribute(        // line 51
(isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "isSterilized", array()) == 0)) {
            // line 52
            echo "\t\t\t            no
\t\t\t        ";
        }
        // line 54
        echo "\t\t\t\t\t\" disabled></div>
\t\t\t\t\t</div><br><!-- div close row form -->
\t\t\t\t</div>
\t\t\t</div><!--div sectionsitile-->
\t\t</div><!-- div close col-md-6 mascota info-->
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"titinfo\">Adoptante</div>
\t\t\t\t<div class=\"sectionstile2\">
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Nombre:</label></div>\t
\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Nomascota\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t</div><br><!-- div close row form -->
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Apellido:</label></div>\t
\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"EDmascota\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t</div><br>
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Edad:</label></div>\t
\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Colmascota\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "age", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t</div><br><!-- div close row form -->
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">cedula:</label></div>\t
\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Nomascota\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "identificationNumber", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t</div><br><!-- div close row form -->
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Dirección:</label></div>\t
\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"EDmascota\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "address", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t</div><br>
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Telefono:</label></div>\t
\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Colmascota\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone_number", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t</div><br><!-- div close row form -->\t
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Correo:</label></div>\t
\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Colmascota\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t</div><!-- div close row form -->\t
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">id de adopción:</label></div>\t
\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Colmascota\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adoption"]) ? $context["adoption"] : $this->getContext($context, "adoption")), "id", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t</div><!-- div close row form -->
\t\t\t</div>
\t\t</div>
\t\t</div><!--div close row conten ful-->
\t\t\t<a type=\"button\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_admin_aceptar_solicitud", array("solicitudId" => $this->getAttribute((isset($context["adoption"]) ? $context["adoption"] : $this->getContext($context, "adoption")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\" id=\"aceptar\">Aprobar </a>
\t\t\t<a type=\"button\" href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_admin_pendiente_solicitud", array("solicitudId" => $this->getAttribute((isset($context["adoption"]) ? $context["adoption"] : $this->getContext($context, "adoption")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\" id=\"aceptar\">Pendiente</a>
\t\t\t<a type=\"button\" href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_admin_rechazar_solicitud", array("solicitudId" => $this->getAttribute((isset($context["adoption"]) ? $context["adoption"] : $this->getContext($context, "adoption")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\" id=\"aceptar\">Denegar</a>
\t</div>

";
        
        $__internal_0b1a3a8ff874ab581fae9319ea0113d34ea4d11d8500dc937cbd551bdafaf679->leave($__internal_0b1a3a8ff874ab581fae9319ea0113d34ea4d11d8500dc937cbd551bdafaf679_prof);

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
        return array (  207 => 99,  203 => 98,  199 => 97,  191 => 92,  184 => 88,  177 => 84,  170 => 80,  163 => 76,  156 => 72,  149 => 68,  142 => 64,  130 => 54,  126 => 52,  124 => 51,  121 => 50,  119 => 49,  112 => 44,  108 => 42,  106 => 41,  103 => 40,  101 => 39,  93 => 34,  87 => 30,  83 => 28,  81 => 27,  78 => 26,  76 => 25,  68 => 20,  61 => 16,  54 => 12,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* 	<div>*/
/* 		<div class="row">*/
/* 			<h1 class="coloralert">Solicitud de Adopción &nbsp; <a href="{{path('pc_admin_pet_solicitudes')}}" type="button" class=" buttonborder pull-right btn btn-primary"> <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>&nbsp;regresar</a></h1>*/
/* 			<hr>*/
/* 			<div class="col-md-6">*/
/* 				<div class="titinfo">Mascota</div>*/
/* 				<div class="sectionstile2">*/
/* 					<div class="row">*/
/* 					<div class="textjusti col-md-3"><label class="marginlabel">Nombre:</label></div>	*/
/* 					<div class="col-md-9"><input type="text" class="form-control" name="Nomascota" value="{{ pet.name }}" disabled></div>*/
/* 					</div><br><!-- div close row form -->*/
/* 					<div class="row">*/
/* 					<div class="textjusti col-md-3"><label class="marginlabel">Edad:</label></div>	*/
/* 					<div class="col-md-9"><input type="text" class="form-control" name="EDmascota" value="{{ pet.age }}" disabled></div>*/
/* 					</div><br>*/
/* 					<div class="row">*/
/* 					<div class="textjusti col-md-3"><label class="marginlabel">Color:</label></div>	*/
/* 					<div class="col-md-9"><input type="text" class="form-control" name="Colmascota" value="{{ pet.colour }}" disabled></div>*/
/* 					</div><br><!-- div close row form -->	*/
/* 					<div class="row">*/
/* 					<div class="textjusti col-md-3"><label class="marginlabel">Género:</label></div>	*/
/* 					<div class="col-md-9"><input type="text" class="form-control" name="genmascota" value="*/
/* 					{% if pet.gender == 'MALE' %}*/
/* 	                    macho*/
/* 	                {% elseif pet.gender == 'FEMALE' %}*/
/* 	                    hembra*/
/* 	                {%endif%}*/
/* 	                " disabled></div>*/
/* 					</div><br><!-- div close row form -->*/
/* 					<div class="row">*/
/* 					<div class="textjusti col-md-3"><label class="marginlabel">Raza:</label></div>	*/
/* 					<div class="col-md-9"><input type="text" name="razamascota" class="form-control" value="{{ pet.race }}" disabled></div>*/
/* 					</div><br><!-- div close row form -->*/
/* 					<div class="row">*/
/* 					<div class="textjusti col-md-3"><label class="marginlabel">Vacunada:</label></div>	*/
/* 					<div class="col-md-9"><input type="text" name="razamascota" class="form-control" value="*/
/* 					{% if pet.isVacunated == 1 %}*/
/* 	                    si*/
/* 	                {% elseif pet.isVacunated == 0 %}*/
/* 	                    no*/
/* 	                {%endif%}*/
/* 					" disabled></div>*/
/* 					</div><br><!-- div close row form -->*/
/* 					<div class="row">*/
/* 					<div class="textjusti col-md-3"><label class="marginlabel">Esterilizada:</label></div>	*/
/* 					<div class="col-md-9"><input type="text" name="razamascota" class="form-control" value="*/
/* 					{% if pet.isSterilized == 1 %}*/
/* 			            si*/
/* 			        {% elseif pet.isSterilized == 0 %}*/
/* 			            no*/
/* 			        {%endif%}*/
/* 					" disabled></div>*/
/* 					</div><br><!-- div close row form -->*/
/* 				</div>*/
/* 			</div><!--div sectionsitile-->*/
/* 		</div><!-- div close col-md-6 mascota info-->*/
/* 			<div class="col-md-6">*/
/* 				<div class="titinfo">Adoptante</div>*/
/* 				<div class="sectionstile2">*/
/* 				<div class="row">*/
/* 				<div class="textjusti col-md-3"><label class="marginlabel">Nombre:</label></div>	*/
/* 				<div class="col-md-9"><input type="text" class="form-control" name="Nomascota" value="{{ user.name }}" disabled></div>*/
/* 				</div><br><!-- div close row form -->*/
/* 				<div class="row">*/
/* 				<div class="textjusti col-md-3"><label class="marginlabel">Apellido:</label></div>	*/
/* 				<div class="col-md-9"><input type="text" class="form-control" name="EDmascota" value="{{ user.lastname }}" disabled></div>*/
/* 				</div><br>*/
/* 				<div class="row">*/
/* 				<div class="textjusti col-md-3"><label class="marginlabel">Edad:</label></div>	*/
/* 				<div class="col-md-9"><input type="text" class="form-control" name="Colmascota" value="{{ user.age }}" disabled></div>*/
/* 				</div><br><!-- div close row form -->*/
/* 				<div class="row">*/
/* 				<div class="textjusti col-md-3"><label class="marginlabel">cedula:</label></div>	*/
/* 				<div class="col-md-9"><input type="text" class="form-control" name="Nomascota" value="{{ user.identificationNumber }}" disabled></div>*/
/* 				</div><br><!-- div close row form -->*/
/* 				<div class="row">*/
/* 				<div class="textjusti col-md-3"><label class="marginlabel">Dirección:</label></div>	*/
/* 				<div class="col-md-9"><input type="text" class="form-control" name="EDmascota" value="{{ user.address }}" disabled></div>*/
/* 				</div><br>*/
/* 				<div class="row">*/
/* 				<div class="textjusti col-md-3"><label class="marginlabel">Telefono:</label></div>	*/
/* 				<div class="col-md-9"><input type="text" class="form-control" name="Colmascota" value="{{ user.phone_number }}" disabled></div>*/
/* 				</div><br><!-- div close row form -->	*/
/* 				<div class="row">*/
/* 				<div class="textjusti col-md-3"><label class="marginlabel">Correo:</label></div>	*/
/* 				<div class="col-md-9"><input type="text" class="form-control" name="Colmascota" value="{{ user.email }}" disabled></div>*/
/* 				</div><!-- div close row form -->	*/
/* 				<div class="row">*/
/* 				<div class="textjusti col-md-3"><label class="marginlabel">id de adopción:</label></div>	*/
/* 				<div class="col-md-9"><input type="text" class="form-control" name="Colmascota" value="{{ adoption.id }}" disabled></div>*/
/* 				</div><!-- div close row form -->*/
/* 			</div>*/
/* 		</div>*/
/* 		</div><!--div close row conten ful-->*/
/* 			<a type="button" href="{{ path('pc_admin_aceptar_solicitud', {'solicitudId' : adoption.id})}}" class="btn btn-primary" id="aceptar">Aprobar </a>*/
/* 			<a type="button" href="{{ path('pc_admin_pendiente_solicitud', {'solicitudId' : adoption.id})}}" class="btn btn-info" id="aceptar">Pendiente</a>*/
/* 			<a type="button" href="{{ path('pc_admin_rechazar_solicitud', {'solicitudId' : adoption.id})}}" class="btn btn-default" id="aceptar">Denegar</a>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
