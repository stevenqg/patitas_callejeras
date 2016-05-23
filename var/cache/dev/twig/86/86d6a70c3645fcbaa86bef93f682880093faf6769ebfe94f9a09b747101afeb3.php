<?php

/* PCFundationBundle:Admin:masc_adopcion_info.html.twig */
class __TwigTemplate_3000a3146f90849889348310661411d71c65e648573fa828d2682046c48db405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:masc_adopcion_info.html.twig", 1);
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
        $__internal_2eb7acb60f608983e596490031cb1f4e3c402f7053824f489c99e9646bc8ae49 = $this->env->getExtension("native_profiler");
        $__internal_2eb7acb60f608983e596490031cb1f4e3c402f7053824f489c99e9646bc8ae49->enter($__internal_2eb7acb60f608983e596490031cb1f4e3c402f7053824f489c99e9646bc8ae49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:masc_adopcion_info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eb7acb60f608983e596490031cb1f4e3c402f7053824f489c99e9646bc8ae49->leave($__internal_2eb7acb60f608983e596490031cb1f4e3c402f7053824f489c99e9646bc8ae49_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_5e17508b63d1fc2a96cbddd4d6f9f1d87b95bac3ef2af4aad3ac6372cf4faff1 = $this->env->getExtension("native_profiler");
        $__internal_5e17508b63d1fc2a96cbddd4d6f9f1d87b95bac3ef2af4aad3ac6372cf4faff1->enter($__internal_5e17508b63d1fc2a96cbddd4d6f9f1d87b95bac3ef2af4aad3ac6372cf4faff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "
<h1 class=\"coloralert\"><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("pc_admin_adopt_pet");
        echo "\" type=\"button\" class=\"pull-left buttonborder btn btn-default\"> <span class=\"glyphicon glyphicon-hand-left\" aria-hidden=\"true\"></span>&nbsp;regresar</a> &nbsp;Información de </h1>
<div class=\"sectionstile\">
\t<div class=\"row\">
\t\t<div class=\"col-md-3\">
\t\t\t<div><img class=\"mion img-responsive img-thumbnail\" alt=\"\" name=\"imgmascota\"></div>
\t\t</div>
\t\t<div class=\"col-md-9\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t\t<label class=\"marginlabel\">Nombre:</label>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"Nomascota\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "name", array()), "html", null, true);
        echo "\"disabled>
\t\t\t\t</div>
\t\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t\t<label class=\"marginlabel\">Edad:</label>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"EDmascota\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "age", array()), "html", null, true);
        echo "\" disabled>
\t\t\t\t</div>
\t\t\t</div><br><!-- div close row form -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t\t<label class=\"marginlabel\">Color:</label>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"Colmascota\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "colour", array()), "html", null, true);
        echo "\" disabled>
\t\t\t\t</div>
\t\t\t\t<div class=\"textjusti col-md-2\">
\t\t\t\t\t<label class=\"marginlabel\">Sexo:</label>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"sexmascota\" value=\"";
        // line 36
        if (($this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "gender", array()) == "MALE")) {
            echo " macho ";
        } elseif (($this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "gender", array()) == "FEMALE")) {
            echo " hembra ";
        }
        echo "\" disabled>
\t\t\t\t</div>
\t\t\t</div><br><!-- div close row form -->\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t\t<label class=\"marginlabel\">Rasgo:</label>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<input type=\"text\" name=\"Colmascota\" class=\"form-control\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "race", array()), "html", null, true);
        echo "\" disabled>
\t\t\t\t</div>
\t\t\t\t<div class=\"textjusti col-md-2\">
\t\t\t\t\t<label class=\"marginlabel\">Vacunado:</label>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"sexmascota\" value=\"";
        // line 50
        if (($this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "isVacunated", array()) == 1)) {
            echo " SI ";
        } elseif (($this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "isVacunated", array()) == 0)) {
            echo " NO ";
        }
        echo "\" disabled>
\t\t\t\t</div>
\t\t\t</div><br><!-- div close row form -->\t
\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-2\"><label class=\"marginlabel\">Esterilizado:</label></div>\t
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"sexmascota\" value=\"";
        // line 56
        if (($this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "isSterilized", array()) == 1)) {
            echo " SI ";
        } elseif (($this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "isSterilized", array()) == 0)) {
            echo " NO ";
        }
        echo "\" disabled>
\t\t\t</div>
\t\t\t<div class=\"col-md-2\"></div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<a  href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_admin_adopt_pet_edit", array("petId" => $this->getAttribute((isset($context["pet"]) ? $context["pet"] : $this->getContext($context, "pet")), "id", array()))), "html", null, true);
        echo "\" type=\"button\" class=\"buttonborder btn btn-success\">Editar datos &nbsp;<span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></a>
\t\t\t</div>
\t\t\t</div><br>
\t\t</div>
\t</div>
</div><!--div sectionsitile-->
";
        
        $__internal_5e17508b63d1fc2a96cbddd4d6f9f1d87b95bac3ef2af4aad3ac6372cf4faff1->leave($__internal_5e17508b63d1fc2a96cbddd4d6f9f1d87b95bac3ef2af4aad3ac6372cf4faff1_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:masc_adopcion_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 60,  124 => 56,  111 => 50,  102 => 44,  87 => 36,  78 => 30,  67 => 22,  58 => 16,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* */
/* <h1 class="coloralert"><a href="{{ path('pc_admin_adopt_pet')}}" type="button" class="pull-left buttonborder btn btn-default"> <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>&nbsp;regresar</a> &nbsp;Información de </h1>*/
/* <div class="sectionstile">*/
/* 	<div class="row">*/
/* 		<div class="col-md-3">*/
/* 			<div><img class="mion img-responsive img-thumbnail" alt="" name="imgmascota"></div>*/
/* 		</div>*/
/* 		<div class="col-md-9">*/
/* 			<div class="row">*/
/* 				<div class="textjusti col-md-1">*/
/* 					<label class="marginlabel">Nombre:</label>*/
/* 				</div>	*/
/* 				<div class="col-md-5">*/
/* 					<input type="text" class="form-control" name="Nomascota" value="{{ pet.name }}"disabled>*/
/* 				</div>*/
/* 				<div class="textjusti col-md-1">*/
/* 					<label class="marginlabel">Edad:</label>*/
/* 				</div>	*/
/* 				<div class="col-md-5">*/
/* 					<input type="text" class="form-control" name="EDmascota" value="{{ pet.age }}" disabled>*/
/* 				</div>*/
/* 			</div><br><!-- div close row form -->*/
/* 			<div class="row">*/
/* 				<div class="textjusti col-md-1">*/
/* 					<label class="marginlabel">Color:</label>*/
/* 				</div>	*/
/* 				<div class="col-md-5">*/
/* 					<input type="text" class="form-control" name="Colmascota" value="{{ pet.colour }}" disabled>*/
/* 				</div>*/
/* 				<div class="textjusti col-md-2">*/
/* 					<label class="marginlabel">Sexo:</label>*/
/* 				</div>	*/
/* 				<div class="col-md-4">*/
/* 					<input type="text" class="form-control" name="sexmascota" value="{%if pet.gender == "MALE"%} macho {%elseif pet.gender == "FEMALE"%} hembra {% endif %}" disabled>*/
/* 				</div>*/
/* 			</div><br><!-- div close row form -->	*/
/* 			<div class="row">*/
/* 				<div class="textjusti col-md-1">*/
/* 					<label class="marginlabel">Rasgo:</label>*/
/* 				</div>	*/
/* 				<div class="col-md-5">*/
/* 					<input type="text" name="Colmascota" class="form-control" value="{{ pet.race }}" disabled>*/
/* 				</div>*/
/* 				<div class="textjusti col-md-2">*/
/* 					<label class="marginlabel">Vacunado:</label>*/
/* 				</div>	*/
/* 				<div class="col-md-4">*/
/* 					<input type="text" class="form-control" name="sexmascota" value="{%if pet.isVacunated == 1 %} SI {%elseif pet.isVacunated == 0%} NO {% endif %}" disabled>*/
/* 				</div>*/
/* 			</div><br><!-- div close row form -->	*/
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-2"><label class="marginlabel">Esterilizado:</label></div>	*/
/* 			<div class="col-md-4">*/
/* 				<input type="text" class="form-control" name="sexmascota" value="{%if pet.isSterilized == 1 %} SI {%elseif pet.isSterilized == 0%} NO {% endif %}" disabled>*/
/* 			</div>*/
/* 			<div class="col-md-2"></div>*/
/* 			<div class="col-md-4">*/
/* 				<a  href="{{path('pc_admin_adopt_pet_edit', {"petId" : pet.id})}}" type="button" class="buttonborder btn btn-success">Editar datos &nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>*/
/* 			</div>*/
/* 			</div><br>*/
/* 		</div>*/
/* 	</div>*/
/* </div><!--div sectionsitile-->*/
/* {% endblock %}*/
