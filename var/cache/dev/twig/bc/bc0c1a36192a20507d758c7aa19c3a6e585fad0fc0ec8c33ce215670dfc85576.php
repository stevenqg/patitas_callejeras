<?php

/* PCFundationBundle:Admin:recepcion_add.html.twig */
class __TwigTemplate_87d77fa3212987f9bf20657c85810a9d4f0255a6f17bf29b52fcc12fa7c4d118 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:recepcion_add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCFundationBundle:Admin:admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_244329114b57d7296a21d46258751e4c0be9fa5be0729201c6ca323ed2527352 = $this->env->getExtension("native_profiler");
        $__internal_244329114b57d7296a21d46258751e4c0be9fa5be0729201c6ca323ed2527352->enter($__internal_244329114b57d7296a21d46258751e4c0be9fa5be0729201c6ca323ed2527352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:recepcion_add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_244329114b57d7296a21d46258751e4c0be9fa5be0729201c6ca323ed2527352->leave($__internal_244329114b57d7296a21d46258751e4c0be9fa5be0729201c6ca323ed2527352_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0d2a30bf1e33f66a9a886a9b7ea12efaf915ef8eb962fcf29fa0f35b863df72 = $this->env->getExtension("native_profiler");
        $__internal_e0d2a30bf1e33f66a9a886a9b7ea12efaf915ef8eb962fcf29fa0f35b863df72->enter($__internal_e0d2a30bf1e33f66a9a886a9b7ea12efaf915ef8eb962fcf29fa0f35b863df72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
\t<div class=\"liner\"></div>
\t<br>
\t<div class=\"container\">
\t\t
\t
\t\t\t<h2 class=\"titulosection margnone\">recepción<span class=\"btn-lg glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></h2>
\t\t<hr>
\t\t\t
\t\t\t\t<br>
\t\t\t\t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-3 col-md-2 textjusti\">
\t\t\t\t\t\t\t<label class=\"marginlabel\"  for=\"Nombre del adoptante\">Titulo: </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "value" => "recepción de donativos", "disabled" => "disabled")));
        echo "
\t\t\t\t\t\t\t<div  class=\"logaler alert-danger\" id=\"age-error\"></div><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel textjusti\"  for=\"Apellidos del adoptante\">Lugar:</label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "dirección")));
        echo "
\t\t\t\t\t\t<div  class=\"logaler alert-danger\" id=\"last_name-error\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"col-xs-3 col-md-2 textjusti\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Nombre del adoptante\">Fecha: </label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAt", array()), 'widget');
        echo "
\t\t\t\t\t<div  class=\"logaler alert-danger\" id=\"age-error\"></div><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Edad del adoptante\">Descripcion:</label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "breve descripción del evento y la hora del mismo.")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t</div>
\t\t\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Continuar", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t

\t</div>
";
        
        $__internal_e0d2a30bf1e33f66a9a886a9b7ea12efaf915ef8eb962fcf29fa0f35b863df72->leave($__internal_e0d2a30bf1e33f66a9a886a9b7ea12efaf915ef8eb962fcf29fa0f35b863df72_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:recepcion_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 50,  103 => 49,  95 => 44,  86 => 38,  74 => 29,  62 => 20,  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block body %}*/
/* */
/* 	<div class="liner"></div>*/
/* 	<br>*/
/* 	<div class="container">*/
/* 		*/
/* 	*/
/* 			<h2 class="titulosection margnone">recepción<span class="btn-lg glyphicon glyphicon-edit" aria-hidden="true"></span></h2>*/
/* 		<hr>*/
/* 			*/
/* 				<br>*/
/* 				{{ form_start(form, {'attr' : {'role' : 'form'} }) }}*/
/* 				<div class="form-group">*/
/* 					<div class="row">*/
/* 						<div class="col-xs-3 col-md-2 textjusti">*/
/* 							<label class="marginlabel"  for="Nombre del adoptante">Titulo: </label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.name, {'attr' : {'class' : 'form-control', 'value' : 'recepción de donativos', 'disabled' : 'disabled' } })}}*/
/* 							<div  class="logaler alert-danger" id="age-error"></div><br>*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 					<div class="row">*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel textjusti"  for="Apellidos del adoptante">Lugar:</label></div>*/
/* 					<div class="col-xs-9 col-md-4">*/
/* 						{{form_widget(form.address, {'attr' : {'class' : 'form-control', 'placeholder' : 'dirección' } })}}*/
/* 						<div  class="logaler alert-danger" id="last_name-error"></div>*/
/* 					</div>*/
/* 					</div>*/
/* */
/* 					<div class="row">*/
/* 					<br>*/
/* 					<div class="col-xs-3 col-md-2 textjusti">*/
/* 					<label class="marginlabel"  for="Nombre del adoptante">Fecha: </label></div>*/
/* 					<div class="col-xs-9 col-md-4">{{form_widget(form.dateAt)}}*/
/* 					<div  class="logaler alert-danger" id="age-error"></div><br>*/
/* 					</div>*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel"  for="Edad del adoptante">Descripcion:</label></div>*/
/* 					<div class="col-xs-9 col-md-4">*/
/* 						{{form_widget(form.description, {'attr' : {'class' : 'form-control', 'placeholder' : 'breve descripción del evento y la hora del mismo.' } })}}*/
/* 					</div>*/
/* 					</div>*/
/* 					<hr>*/
/* 				</div>*/
/* 					{{ form_widget(form.save, {'label' : 'Continuar', 'attr' : {'class' : 'btn btn-success'} }) }}*/
/* 				{{ form_end(form) }}*/
/* 		*/
/* */
/* 	</div>*/
/* {% endblock %}*/
