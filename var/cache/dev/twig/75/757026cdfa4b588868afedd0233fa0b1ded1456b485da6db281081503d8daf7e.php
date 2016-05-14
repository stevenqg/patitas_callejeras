<?php

/* PCFundationBundle:Admin:evento_edit.html.twig */
class __TwigTemplate_62a583aac28431ea16ed94e53324bb78e67c05a602d8cfa601bf96dd59cdf6b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:evento_edit.html.twig", 1);
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
        $__internal_976bcfd96a400eddab528b97a850c5bcb53d8424edec99b5782923cbe8823af5 = $this->env->getExtension("native_profiler");
        $__internal_976bcfd96a400eddab528b97a850c5bcb53d8424edec99b5782923cbe8823af5->enter($__internal_976bcfd96a400eddab528b97a850c5bcb53d8424edec99b5782923cbe8823af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:evento_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_976bcfd96a400eddab528b97a850c5bcb53d8424edec99b5782923cbe8823af5->leave($__internal_976bcfd96a400eddab528b97a850c5bcb53d8424edec99b5782923cbe8823af5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6588b75b56d589b995a064b94e5338a0e3ead7f54a9e5a8dc83c954815df536 = $this->env->getExtension("native_profiler");
        $__internal_b6588b75b56d589b995a064b94e5338a0e3ead7f54a9e5a8dc83c954815df536->enter($__internal_b6588b75b56d589b995a064b94e5338a0e3ead7f54a9e5a8dc83c954815df536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
\t<div class=\"liner\"></div>
\t<br>
\t<div class=\"container\">
\t\t<h2 class=\"titulosection margnone\">Editar Evento<span class=\"btn-lg glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></h2>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "editar", "attr" => array("class" => "btn btn-danger")));
        echo "
\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\" onclick=\"window.close();\">cancelar</button>
\t\t</div>
\t\t";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

\t</div>
";
        
        $__internal_b6588b75b56d589b995a064b94e5338a0e3ead7f54a9e5a8dc83c954815df536->leave($__internal_b6588b75b56d589b995a064b94e5338a0e3ead7f54a9e5a8dc83c954815df536_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:evento_edit.html.twig";
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
/* 		<h2 class="titulosection margnone">Editar Evento<span class="btn-lg glyphicon glyphicon-edit" aria-hidden="true"></span></h2>*/
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
/* 			{{ form_widget(form.save, {'label' : 'editar', 'attr' : {'class' : 'btn btn-danger'} }) }}*/
/* 			<button type="button" class="btn btn-primary" data-dismiss="modal" onclick="window.close();">cancelar</button>*/
/* 		</div>*/
/* 		{{ form_end(form) }}*/
/* */
/* 	</div>*/
/* {% endblock %}*/
