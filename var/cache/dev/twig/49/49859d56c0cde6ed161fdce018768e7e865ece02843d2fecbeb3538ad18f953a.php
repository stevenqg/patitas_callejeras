<?php

/* PCFundationBundle:Admin:nuevocenso.html.twig */
class __TwigTemplate_c0b01ead418d05f74af2768f9afc97ac2c77e928acf5fe5f4d60e13d2072d746 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:nuevocenso.html.twig", 1);
        $this->blocks = array(
            'capa' => array($this, 'block_capa'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCFundationBundle:Admin:admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe29940724dce4f507abe0944881eb69f0d8694d402719ea3ab089f0c38f86a5 = $this->env->getExtension("native_profiler");
        $__internal_fe29940724dce4f507abe0944881eb69f0d8694d402719ea3ab089f0c38f86a5->enter($__internal_fe29940724dce4f507abe0944881eb69f0d8694d402719ea3ab089f0c38f86a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:nuevocenso.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe29940724dce4f507abe0944881eb69f0d8694d402719ea3ab089f0c38f86a5->leave($__internal_fe29940724dce4f507abe0944881eb69f0d8694d402719ea3ab089f0c38f86a5_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_6ebaee7f8facbf163f6196bf36e058391da9b3fa4f1122091389c553031fc783 = $this->env->getExtension("native_profiler");
        $__internal_6ebaee7f8facbf163f6196bf36e058391da9b3fa4f1122091389c553031fc783->enter($__internal_6ebaee7f8facbf163f6196bf36e058391da9b3fa4f1122091389c553031fc783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "\t<div>
\t\t
\t\t
\t\t<h1 class=\"coloralert\">Crear nuevo censo &nbsp; <a href=\"\" type=\"button\" class=\" buttonborder pull-right btn btn-primary\"> <span class=\"glyphicon glyphicon-hand-left\" aria-hidden=\"true\"></span>&nbsp;regresar</a></h1>
\t\t<div class=\"sectionstile\">
\t\t\t<div class=\"row\">
\t\t\t";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "\t\t\t\t
\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t<label ><h5>Zona:</h5></label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "dirección o lugar de la jornada")));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t<label for=\"Fecha\"><h5>Fecha:</h5></label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t <input type=\"text\" class=\"form-control\" placeholder=\"dd-mm-aaaa\" id=\"fecha1\">
\t\t\t\t ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "createdAt", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t<label for=\"Fecha\"><h5>tipo de jornada:</h5></label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "meetingType", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "tipo de jornada")));
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "registrar", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div><br> <!-- div close row-->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t<h5>Colaboradores:</h5>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" aria-label=\"Left Align\" id=\"btAdd\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Agregar Colaborador\" >
\t\t\t\t\t  <span class=\" coloralert glyphicon glyphicon-plus-sign\" aria-hidden=\"true\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" id=\"btRemove\" aria-label=\"Left Align\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"eliminar campo\">
\t\t\t\t\t  <span class=\" colordanger glyphicon glyphicon-minus-sign\" aria-hidden=\"true\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" id=\"btRemoveAll\" aria-label=\"Left Align\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Eliminar todo\">
\t\t\t\t\t  <span class=\" colorer glyphicon glyphicon-remove-sign\" aria-hidden=\"true\"></span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5 displaycol\">
\t\t\t\t\t<div id=\"main\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!-- div close section estile-->
\t\t
\t</div>
";
        
        $__internal_6ebaee7f8facbf163f6196bf36e058391da9b3fa4f1122091389c553031fc783->leave($__internal_6ebaee7f8facbf163f6196bf36e058391da9b3fa4f1122091389c553031fc783_prof);

    }

    // line 58
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_dff61b6a6b5930c93f0309aea7822d8edfea6e63f391e33a56bd0a6dda97e17a = $this->env->getExtension("native_profiler");
        $__internal_dff61b6a6b5930c93f0309aea7822d8edfea6e63f391e33a56bd0a6dda97e17a->enter($__internal_dff61b6a6b5930c93f0309aea7822d8edfea6e63f391e33a56bd0a6dda97e17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 59
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "

\t  <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/calendario.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
      <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/add.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_dff61b6a6b5930c93f0309aea7822d8edfea6e63f391e33a56bd0a6dda97e17a->leave($__internal_dff61b6a6b5930c93f0309aea7822d8edfea6e63f391e33a56bd0a6dda97e17a_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:nuevocenso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 62,  130 => 61,  125 => 59,  119 => 58,  85 => 30,  81 => 29,  76 => 27,  67 => 21,  57 => 14,  49 => 9,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* 	<div>*/
/* 		*/
/* 		*/
/* 		<h1 class="coloralert">Crear nuevo censo &nbsp; <a href="" type="button" class=" buttonborder pull-right btn btn-primary"> <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>&nbsp;regresar</a></h1>*/
/* 		<div class="sectionstile">*/
/* 			<div class="row">*/
/* 			{{ form_start(form, {'attr' : {'role' : 'form'} }) }}				*/
/* 				<div class="col-md-1">*/
/* 					<label ><h5>Zona:</h5></label>*/
/* 				</div>*/
/* 				<div class="col-md-5">*/
/* 					{{form_widget(form.address, {'attr' : {'class' : 'form-control', 'placeholder' : 'dirección o lugar de la jornada' } })}}*/
/* 				</div>*/
/* 				<div class="col-md-1">*/
/* 					<label for="Fecha"><h5>Fecha:</h5></label>*/
/* 				</div>*/
/* 				<div class="col-md-5">*/
/* 				 <input type="text" class="form-control" placeholder="dd-mm-aaaa" id="fecha1">*/
/* 				 {{form_widget(form.createdAt, {'attr' : {'class' : 'form-control' } })}}*/
/* 				</div>*/
/* 				<div class="col-md-1">*/
/* 					<label for="Fecha"><h5>tipo de jornada:</h5></label>*/
/* 				</div>*/
/* 				<div class="col-md-5">*/
/* 				 {{form_widget(form.meetingType, {'attr' : {'class' : 'form-control', 'placeholder' : 'tipo de jornada' } })}}*/
/* 				</div>*/
/* 				{{ form_widget(form.save, {'label' : 'registrar', 'attr' : {'class' : 'btn btn-success'} }) }}*/
/* 			{{ form_end(form) }}*/
/* 			</div><br> <!-- div close row-->*/
/* 			<div class="row">*/
/* 				<div class="col-md-1">*/
/* 				<h5>Colaboradores:</h5>*/
/* 				</div>*/
/* 				<div class="col-md-2">*/
/* 					<button type="button" class="btn btn-default" aria-label="Left Align" id="btAdd" data-toggle="tooltip" data-placement="bottom" title="Agregar Colaborador" >*/
/* 					  <span class=" coloralert glyphicon glyphicon-plus-sign" aria-hidden="true"></span>*/
/* 					</button>*/
/* 					<button type="button" class="btn btn-default" id="btRemove" aria-label="Left Align" data-toggle="tooltip" data-placement="bottom" title="eliminar campo">*/
/* 					  <span class=" colordanger glyphicon glyphicon-minus-sign" aria-hidden="true"></span>*/
/* 					</button>*/
/* 					<button type="button" class="btn btn-default" id="btRemoveAll" aria-label="Left Align" data-toggle="tooltip" data-placement="bottom" title="Eliminar todo">*/
/* 					  <span class=" colorer glyphicon glyphicon-remove-sign" aria-hidden="true"></span>*/
/* 					</button>*/
/* 				</div>*/
/* 				<div class="col-md-5 displaycol">*/
/* 					<div id="main">*/
/* 						*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div><!-- div close section estile-->*/
/* 		*/
/* 	</div>*/
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/* {{ parent() }}*/
/* */
/* 	  <script src="{{ asset('public/js/calendario.js') }}" type="text/javascript"></script>*/
/*       <script src="{{ asset('public/js/add.js') }}"></script>*/
/* {% endblock %}*/
