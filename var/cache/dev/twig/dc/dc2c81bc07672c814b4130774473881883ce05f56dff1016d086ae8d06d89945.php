<?php

/* PCFundationBundle:Admin:masc_adopcion_edit.html.twig */
class __TwigTemplate_b4bd73830d1a1b87f0b0a368079f7df980dd179c221ec72c3915951e9f3162d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:masc_adopcion_edit.html.twig", 1);
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
        $__internal_65bf49b0bb1ed13b7b11b3864d1102c0d6a3f4a44975b8f0c9c63029ca130ec5 = $this->env->getExtension("native_profiler");
        $__internal_65bf49b0bb1ed13b7b11b3864d1102c0d6a3f4a44975b8f0c9c63029ca130ec5->enter($__internal_65bf49b0bb1ed13b7b11b3864d1102c0d6a3f4a44975b8f0c9c63029ca130ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:masc_adopcion_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65bf49b0bb1ed13b7b11b3864d1102c0d6a3f4a44975b8f0c9c63029ca130ec5->leave($__internal_65bf49b0bb1ed13b7b11b3864d1102c0d6a3f4a44975b8f0c9c63029ca130ec5_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_377968191596ad98d3f2721d5fd3001812eb32094407a7cceec3b17ca617e1dc = $this->env->getExtension("native_profiler");
        $__internal_377968191596ad98d3f2721d5fd3001812eb32094407a7cceec3b17ca617e1dc->enter($__internal_377968191596ad98d3f2721d5fd3001812eb32094407a7cceec3b17ca617e1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "
            <h1 class=\"coloralert\"><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("pc_admin_adopt_pet");
        echo "\" type=\"button\" class=\"pull-left buttonborder btn btn-default\"> <span class=\"glyphicon glyphicon-hand-left\" aria-hidden=\"true\"></span>&nbsp;regresar</a> &nbsp; editar Información </h1>
\t\t\t<div class=\"sectionstile\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div><img class=\"mion img-responsive img-thumbnail\" alt=\"\" name=\"imgmascota\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-1\"><label class=\"marginlabel\">Nombre:</label></div>\t
\t\t\t<div class=\"col-md-5\"><input type=\"text\" class=\"form-control\" name=\"Nomascota\" ></div>
\t\t\t<div class=\"textjusti col-md-1\"><label class=\"marginlabel\">Edad:</label></div>\t
\t\t\t<div class=\"col-md-5\"><input type=\"text\" class=\"form-control\" name=\"EDmascota\" ></div>
\t\t\t</div><br><!-- div close row form -->
\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-1\"><label class=\"marginlabel\">Color:</label></div>\t
\t\t\t<div class=\"col-md-5\"><input type=\"text\" class=\"form-control\" name=\"Colmascota\" ></div>
\t\t\t<div class=\"textjusti col-md-2\"><label class=\"marginlabel\">Sexo:</label></div>\t
\t\t\t<div class=\"col-md-4\"><select class=\"form-control\" >
\t\t\t\t\t\t  <option>Macho</option>
\t\t\t\t\t\t  <option>hembra</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t</div><br><!-- div close row form -->\t
\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-1\"><label class=\"marginlabel\">Rasgo:</label></div>\t
\t\t\t<div class=\"col-md-5\"><input type=\"text\" name=\"Colmascota\" class=\"form-control\" ></div>
\t\t\t<div class=\"textjusti col-md-2\"><label class=\"marginlabel\">Vacunado:</label></div>\t
\t\t\t<div class=\"col-md-4\"><select class=\"form-control\" >
\t\t\t\t\t\t  <option>Si</option>
\t\t\t\t\t\t  <option>No</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t</div><br><!-- div close row form -->\t
\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-2\"><label class=\"marginlabel\">Esterilizado:</label></div>\t
\t\t\t<div class=\"col-md-4\"><select class=\"form-control\" >
\t\t\t\t\t\t  <option>Si</option>
\t\t\t\t\t\t  <option>No</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t\t\t<div class=\"col-md-4\"><button type=\"button\" class=\"buttonborder btn btn-primary\">Guardar cambios &nbsp;<span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></button></div>
\t\t\t</div><br>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t</div><!--div sectionsitile-->
";
        
        $__internal_377968191596ad98d3f2721d5fd3001812eb32094407a7cceec3b17ca617e1dc->leave($__internal_377968191596ad98d3f2721d5fd3001812eb32094407a7cceec3b17ca617e1dc_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:masc_adopcion_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* */
/*             <h1 class="coloralert"><a href="{{ path('pc_admin_adopt_pet')}}" type="button" class="pull-left buttonborder btn btn-default"> <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>&nbsp;regresar</a> &nbsp; editar Información </h1>*/
/* 			<div class="sectionstile">*/
/* 				<div class="row">*/
/* 					<div class="col-md-3">*/
/* 					<div><img class="mion img-responsive img-thumbnail" alt="" name="imgmascota"></div>*/
/* 					</div>*/
/* 					<div class="col-md-9">*/
/* 						<div class="row">*/
/* 			<div class="textjusti col-md-1"><label class="marginlabel">Nombre:</label></div>	*/
/* 			<div class="col-md-5"><input type="text" class="form-control" name="Nomascota" ></div>*/
/* 			<div class="textjusti col-md-1"><label class="marginlabel">Edad:</label></div>	*/
/* 			<div class="col-md-5"><input type="text" class="form-control" name="EDmascota" ></div>*/
/* 			</div><br><!-- div close row form -->*/
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-1"><label class="marginlabel">Color:</label></div>	*/
/* 			<div class="col-md-5"><input type="text" class="form-control" name="Colmascota" ></div>*/
/* 			<div class="textjusti col-md-2"><label class="marginlabel">Sexo:</label></div>	*/
/* 			<div class="col-md-4"><select class="form-control" >*/
/* 						  <option>Macho</option>*/
/* 						  <option>hembra</option>*/
/* 						</select>*/
/* 					</div>*/
/* 			</div><br><!-- div close row form -->	*/
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-1"><label class="marginlabel">Rasgo:</label></div>	*/
/* 			<div class="col-md-5"><input type="text" name="Colmascota" class="form-control" ></div>*/
/* 			<div class="textjusti col-md-2"><label class="marginlabel">Vacunado:</label></div>	*/
/* 			<div class="col-md-4"><select class="form-control" >*/
/* 						  <option>Si</option>*/
/* 						  <option>No</option>*/
/* 						</select>*/
/* 					</div>*/
/* 			</div><br><!-- div close row form -->	*/
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-2"><label class="marginlabel">Esterilizado:</label></div>	*/
/* 			<div class="col-md-4"><select class="form-control" >*/
/* 						  <option>Si</option>*/
/* 						  <option>No</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-md-2"></div>*/
/* 					<div class="col-md-4"><button type="button" class="buttonborder btn btn-primary">Guardar cambios &nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></div>*/
/* 			</div><br>*/
/* 					</div>*/
/* 				</div>*/
/* 			*/
/* 		</div><!--div sectionsitile-->*/
/* {% endblock %}*/
