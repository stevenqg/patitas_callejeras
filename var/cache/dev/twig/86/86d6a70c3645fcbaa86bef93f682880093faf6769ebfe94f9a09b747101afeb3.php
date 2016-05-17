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
        $__internal_1bd657dbde21fc71d2597e93fa3b12ed95a558b00c511a8a5b80edddd9321711 = $this->env->getExtension("native_profiler");
        $__internal_1bd657dbde21fc71d2597e93fa3b12ed95a558b00c511a8a5b80edddd9321711->enter($__internal_1bd657dbde21fc71d2597e93fa3b12ed95a558b00c511a8a5b80edddd9321711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:masc_adopcion_info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bd657dbde21fc71d2597e93fa3b12ed95a558b00c511a8a5b80edddd9321711->leave($__internal_1bd657dbde21fc71d2597e93fa3b12ed95a558b00c511a8a5b80edddd9321711_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_90d8919ef5cc09a78bade2e52c8628c5fcdf48a491bfc41f1878bc41419b9752 = $this->env->getExtension("native_profiler");
        $__internal_90d8919ef5cc09a78bade2e52c8628c5fcdf48a491bfc41f1878bc41419b9752->enter($__internal_90d8919ef5cc09a78bade2e52c8628c5fcdf48a491bfc41f1878bc41419b9752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "
            <h1 class=\"coloralert\"><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("pc_admin_adopt_pet");
        echo "\" type=\"button\" class=\"pull-left buttonborder btn btn-default\"> <span class=\"glyphicon glyphicon-hand-left\" aria-hidden=\"true\"></span>&nbsp;regresar</a> &nbsp;Información de </h1>
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
\t\t\t\t\t<div class=\"col-md-4\"><a  href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("pc_admin_adopt_pet_edit");
        echo "\"type=\"button\" class=\"buttonborder btn btn-success\">Editar datos &nbsp;<span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></a></div>
\t\t\t</div><br>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t</div><!--div sectionsitile-->
";
        
        $__internal_90d8919ef5cc09a78bade2e52c8628c5fcdf48a491bfc41f1878bc41419b9752->leave($__internal_90d8919ef5cc09a78bade2e52c8628c5fcdf48a491bfc41f1878bc41419b9752_prof);

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
        return array (  87 => 45,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* */
/*             <h1 class="coloralert"><a href="{{ path('pc_admin_adopt_pet')}}" type="button" class="pull-left buttonborder btn btn-default"> <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>&nbsp;regresar</a> &nbsp;Información de </h1>*/
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
/* 					<div class="col-md-4"><a  href="{{path('pc_admin_adopt_pet_edit')}}"type="button" class="buttonborder btn btn-success">Editar datos &nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></div>*/
/* 			</div><br>*/
/* 					</div>*/
/* 				</div>*/
/* 			*/
/* 		</div><!--div sectionsitile-->*/
/* {% endblock %}*/
