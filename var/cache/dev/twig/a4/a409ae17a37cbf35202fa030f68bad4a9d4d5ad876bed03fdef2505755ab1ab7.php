<?php

/* PCFundationBundle:Admin:evento_add.html.twig */
class __TwigTemplate_102d5f9931d2aa8bce547a679fb421cf55bafd7af9f75b7300c9a660fdb81115 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:evento_add.html.twig", 1);
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
        $__internal_bc2fd81be32374c1c8b6a3a12f20144bc42a7e9e10913358086495b5a6b89b8d = $this->env->getExtension("native_profiler");
        $__internal_bc2fd81be32374c1c8b6a3a12f20144bc42a7e9e10913358086495b5a6b89b8d->enter($__internal_bc2fd81be32374c1c8b6a3a12f20144bc42a7e9e10913358086495b5a6b89b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:evento_add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc2fd81be32374c1c8b6a3a12f20144bc42a7e9e10913358086495b5a6b89b8d->leave($__internal_bc2fd81be32374c1c8b6a3a12f20144bc42a7e9e10913358086495b5a6b89b8d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_35d84289c6da77e1e25d95f5b41ff9808523e1728c47d4d624b330a88973ed35 = $this->env->getExtension("native_profiler");
        $__internal_35d84289c6da77e1e25d95f5b41ff9808523e1728c47d4d624b330a88973ed35->enter($__internal_35d84289c6da77e1e25d95f5b41ff9808523e1728c47d4d624b330a88973ed35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
\t<div class=\"liner\"></div>
\t<br>
\t<div class=\"container\">
\t\t<h2 class=\"titulosection margnone\">Crear Evento<span class=\"btn-lg glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></h2>
\t\t<hr>
\t\t<br>
\t\t";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
\t\t<div class=\"form-group\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-3 col-md-2 textjusti\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Nombre del adoptante\">Titulo: </label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nombre del evento")));
        echo "
\t\t\t\t\t<div  class=\"logaler alert-danger\" id=\"age-error\"></div><br>
\t\t\t\t</div>
\t\t\t\t<br>
\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel textjusti\"  for=\"Apellidos del adoptante\">Lugar:</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "dirección del evento")));
        echo "
\t\t\t\t\t<div  class=\"logaler alert-danger\" id=\"last_name-error\"></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<br>
\t\t\t\t<div class=\"col-xs-3 col-md-2 textjusti\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Nombre del adoptante\">Fecha: </label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAt", array()), 'widget');
        echo "
\t\t\t\t\t<div  class=\"logaler alert-danger\" id=\"age-error\"></div><br>
\t\t\t\t</div>
\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Edad del adoptante\">Descripcion:</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "breve descripción del evento y la hora del mismo.")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr>
\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Continuar", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\" onclick=\"window.close();\">cancelar</button>
\t\t</div>
\t\t";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

\t</div>
";
        
        $__internal_35d84289c6da77e1e25d95f5b41ff9808523e1728c47d4d624b330a88973ed35->leave($__internal_35d84289c6da77e1e25d95f5b41ff9808523e1728c47d4d624b330a88973ed35_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:evento_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 50,  101 => 47,  94 => 43,  84 => 36,  70 => 25,  59 => 17,  49 => 10,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block body %}*/
/* */
/* 	<div class="liner"></div>*/
/* 	<br>*/
/* 	<div class="container">*/
/* 		<h2 class="titulosection margnone">Crear Evento<span class="btn-lg glyphicon glyphicon-edit" aria-hidden="true"></span></h2>*/
/* 		<hr>*/
/* 		<br>*/
/* 		{{ form_start(form, {'attr' : {'role' : 'form'} }) }}*/
/* 		<div class="form-group">*/
/* 			<div class="row">*/
/* 				<div class="col-xs-3 col-md-2 textjusti">*/
/* 					<label class="marginlabel"  for="Nombre del adoptante">Titulo: </label>*/
/* 				</div>*/
/* 				<div class="col-xs-9 col-md-4">*/
/* 					{{form_widget(form.name, {'attr' : {'class' : 'form-control', 'placeholder' : 'nombre del evento' } })}}*/
/* 					<div  class="logaler alert-danger" id="age-error"></div><br>*/
/* 				</div>*/
/* 				<br>*/
/* 				<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel textjusti"  for="Apellidos del adoptante">Lugar:</label>*/
/* 				</div>*/
/* 				<div class="col-xs-9 col-md-4">*/
/* 					{{form_widget(form.address, {'attr' : {'class' : 'form-control', 'placeholder' : 'dirección del evento' } })}}*/
/* 					<div  class="logaler alert-danger" id="last_name-error"></div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<br>*/
/* 				<div class="col-xs-3 col-md-2 textjusti">*/
/* 					<label class="marginlabel"  for="Nombre del adoptante">Fecha: </label>*/
/* 				</div>*/
/* 				<div class="col-xs-9 col-md-4">*/
/* 					{{form_widget(form.dateAt)}}*/
/* 					<div  class="logaler alert-danger" id="age-error"></div><br>*/
/* 				</div>*/
/* 				<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel"  for="Edad del adoptante">Descripcion:</label>*/
/* 				</div>*/
/* 				<div class="col-xs-9 col-md-4">*/
/* 					{{form_widget(form.description, {'attr' : {'class' : 'form-control', 'placeholder' : 'breve descripción del evento y la hora del mismo.' } })}}*/
/* 				</div>*/
/* 			</div>*/
/* 			<hr>*/
/* 			{{ form_widget(form.save, {'label' : 'Continuar', 'attr' : {'class' : 'btn btn-success'} }) }}*/
/* 			<button type="button" class="btn btn-danger" data-dismiss="modal" onclick="window.close();">cancelar</button>*/
/* 		</div>*/
/* 		{{ form_end(form) }}*/
/* */
/* 	</div>*/
/* {% endblock %}*/
