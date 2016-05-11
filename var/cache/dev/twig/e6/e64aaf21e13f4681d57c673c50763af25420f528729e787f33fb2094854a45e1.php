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
        $__internal_fdd3745d21d394f0c8f127b5447918ece704f20d865d79b64116f82ad046f3bd = $this->env->getExtension("native_profiler");
        $__internal_fdd3745d21d394f0c8f127b5447918ece704f20d865d79b64116f82ad046f3bd->enter($__internal_fdd3745d21d394f0c8f127b5447918ece704f20d865d79b64116f82ad046f3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:solicitud_adopcion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdd3745d21d394f0c8f127b5447918ece704f20d865d79b64116f82ad046f3bd->leave($__internal_fdd3745d21d394f0c8f127b5447918ece704f20d865d79b64116f82ad046f3bd_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_7f9322876e989a962912d167c1242de5459c0cd145eed09ce24ddb355d986c50 = $this->env->getExtension("native_profiler");
        $__internal_7f9322876e989a962912d167c1242de5459c0cd145eed09ce24ddb355d986c50->enter($__internal_7f9322876e989a962912d167c1242de5459c0cd145eed09ce24ddb355d986c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "\t\t<div class=\"row\">
\t\t\t<h1 class=\"coloralert\"><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("pc_admin_pet_solicitudes");
        echo "\" type=\"button\" class=\" buttonborder pull-left btn btn-default\"><span class=\"glyphicon glyphicon-hand-left\" aria-hidden=\"true\"></span>&nbsp;regresar</a> &nbsp;Solicitud de Adopción</h1>
\t\t\t<hr>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"titinfo\">Mascota</div>
\t\t\t\t<div class=\"sectionstile2\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Nombre:</label></div>\t
\t\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Nomascota\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "name", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t\t</div><br><!-- div close row form -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Edad:</label></div>\t
\t\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"EDmascota\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "age", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t\t</div><br>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Color:</label></div>\t
\t\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Colmascota\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "colour", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t\t</div><br><!-- div close row form -->\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Género:</label></div>\t
\t\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"genmascota\" value=\"
\t\t\t\t\t";
        // line 24
        if (($this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "gender", array()) == "MALE")) {
            echo "macho
\t                ";
        } elseif (($this->getAttribute(        // line 25
(isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "gender", array()) == "FEMALE")) {
            echo " hembra
\t                ";
        }
        // line 27
        echo "\t                \" disabled></div>
\t\t\t\t\t</div><br><!-- div close row form -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Raza:</label></div>\t
\t\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" name=\"razamascota\" class=\"form-control\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "race", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t\t</div><br><!-- div close row form -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Vacunada:</label></div>\t
\t\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" name=\"razamascota\" class=\"form-control\" value=\"
\t\t\t\t\t";
        // line 36
        if (($this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "isVacunated", array()) == 1)) {
            echo "si
\t                ";
        } elseif (($this->getAttribute(        // line 37
(isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "isVacunated", array()) == 0)) {
            echo "no
\t                ";
        }
        // line 39
        echo "\t\t\t\t\t\" disabled></div>
\t\t\t\t\t</div><br><!-- div close row form -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Esterilizada:</label></div>\t
\t\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" name=\"razamascota\" class=\"form-control\" value=\"
\t\t\t\t\t";
        // line 44
        if (($this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "isSterilized", array()) == 1)) {
            echo "si
\t\t\t        ";
        } elseif (($this->getAttribute(        // line 45
(isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "isSterilized", array()) == 0)) {
            echo "no
\t\t\t        ";
        }
        // line 47
        echo "\t\t\t\t\t\" disabled></div>
\t\t\t\t\t</div><br><!-- div close row form -->
\t\t\t</div><!--div sectionsitile-->
\t\t</div><!-- div close col-md-6 mascota info-->
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"titinfo\">Adoptante</div>
\t\t\t\t<div class=\"sectionstile2\">
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Nombre:</label></div>\t
\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Nomascota\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t</div><br><!-- div close row form -->
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Apellido:</label></div>\t
\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"EDmascota\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t</div><br>
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Edad:</label></div>\t
\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Colmascota\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "age", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t</div><br><!-- div close row form -->
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">cedula:</label></div>\t
\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Nomascota\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "identificationNumber", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t</div><br><!-- div close row form -->
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Dirección:</label></div>\t
\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"EDmascota\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "address", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t</div><br>
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Telefono:</label></div>\t
\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Colmascota\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone_number", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t</div><br><!-- div close row form -->\t
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-3\"><label class=\"marginlabel\">Correo:</label></div>\t
\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Colmascota\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t</div><br><!-- div close row form -->\t
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"text-left col-md-3\"><label class=\"marginlabel\">id adopción:</label></div>\t
\t\t\t\t<div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"Colmascota\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adoption"]) ? $context["adoption"] : $this->getContext($context, "adoption")), "id", array()), "html", null, true);
        echo "\" disabled></div>
\t\t\t\t</div><!-- div close row form -->
\t\t\t</div>
\t\t</div>
\t\t</div><!--div close row conten ful-->
\t\t\t<a type=\"button\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_admin_aceptar_solicitud", array("solicitudId" => $this->getAttribute((isset($context["adoption"]) ? $context["adoption"] : $this->getContext($context, "adoption")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\" id=\"aceptar\">Aprobar </a>
\t\t\t<a type=\"button\" href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_admin_pendiente_solicitud", array("solicitudId" => $this->getAttribute((isset($context["adoption"]) ? $context["adoption"] : $this->getContext($context, "adoption")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\" id=\"aceptar\">Pendiente</a>
\t\t\t<a type=\"button\" href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_admin_rechazar_solicitud", array("solicitudId" => $this->getAttribute((isset($context["adoption"]) ? $context["adoption"] : $this->getContext($context, "adoption")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\" id=\"aceptar\">Denegar</a>

";
        
        $__internal_7f9322876e989a962912d167c1242de5459c0cd145eed09ce24ddb355d986c50->leave($__internal_7f9322876e989a962912d167c1242de5459c0cd145eed09ce24ddb355d986c50_prof);

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
        return array (  199 => 91,  195 => 90,  191 => 89,  183 => 84,  176 => 80,  169 => 76,  162 => 72,  155 => 68,  148 => 64,  141 => 60,  134 => 56,  123 => 47,  118 => 45,  114 => 44,  107 => 39,  102 => 37,  98 => 36,  90 => 31,  84 => 27,  79 => 25,  75 => 24,  67 => 19,  60 => 15,  53 => 11,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* 		<div class="row">*/
/* 			<h1 class="coloralert"><a href="{{path('pc_admin_pet_solicitudes')}}" type="button" class=" buttonborder pull-left btn btn-default"><span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>&nbsp;regresar</a> &nbsp;Solicitud de Adopción</h1>*/
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
/* 					{% if pet.gender == 'MALE' %}macho*/
/* 	                {% elseif pet.gender == 'FEMALE' %} hembra*/
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
/* 					{% if pet.isVacunated == 1 %}si*/
/* 	                {% elseif pet.isVacunated == 0 %}no*/
/* 	                {%endif%}*/
/* 					" disabled></div>*/
/* 					</div><br><!-- div close row form -->*/
/* 					<div class="row">*/
/* 					<div class="textjusti col-md-3"><label class="marginlabel">Esterilizada:</label></div>	*/
/* 					<div class="col-md-9"><input type="text" name="razamascota" class="form-control" value="*/
/* 					{% if pet.isSterilized == 1 %}si*/
/* 			        {% elseif pet.isSterilized == 0 %}no*/
/* 			        {%endif%}*/
/* 					" disabled></div>*/
/* 					</div><br><!-- div close row form -->*/
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
/* 				</div><br><!-- div close row form -->	*/
/* 				<div class="row">*/
/* 				<div class="text-left col-md-3"><label class="marginlabel">id adopción:</label></div>	*/
/* 				<div class="col-md-9"><input type="text" class="form-control" name="Colmascota" value="{{ adoption.id }}" disabled></div>*/
/* 				</div><!-- div close row form -->*/
/* 			</div>*/
/* 		</div>*/
/* 		</div><!--div close row conten ful-->*/
/* 			<a type="button" href="{{ path('pc_admin_aceptar_solicitud', {'solicitudId' : adoption.id})}}" class="btn btn-primary" id="aceptar">Aprobar </a>*/
/* 			<a type="button" href="{{ path('pc_admin_pendiente_solicitud', {'solicitudId' : adoption.id})}}" class="btn btn-info" id="aceptar">Pendiente</a>*/
/* 			<a type="button" href="{{ path('pc_admin_rechazar_solicitud', {'solicitudId' : adoption.id})}}" class="btn btn-default" id="aceptar">Denegar</a>*/
/* */
/* {% endblock %}*/
/* */
