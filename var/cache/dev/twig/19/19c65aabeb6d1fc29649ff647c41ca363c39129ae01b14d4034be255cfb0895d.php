<?php

/* PCFundationBundle:Admin:credito_add.html.twig */
class __TwigTemplate_bed87547c93c9610ca0c060cedb993e48766b139d05400481621239e2abab3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:credito_add.html.twig", 1);
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
        $__internal_b139ce712f38929720f1e5dff66f2a248d25868286c437fbf65bd12725fc8398 = $this->env->getExtension("native_profiler");
        $__internal_b139ce712f38929720f1e5dff66f2a248d25868286c437fbf65bd12725fc8398->enter($__internal_b139ce712f38929720f1e5dff66f2a248d25868286c437fbf65bd12725fc8398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:credito_add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b139ce712f38929720f1e5dff66f2a248d25868286c437fbf65bd12725fc8398->leave($__internal_b139ce712f38929720f1e5dff66f2a248d25868286c437fbf65bd12725fc8398_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_775e6d40fab042b19f3584f5573c261d5d7675aec722093a803272cfd36b13c9 = $this->env->getExtension("native_profiler");
        $__internal_775e6d40fab042b19f3584f5573c261d5d7675aec722093a803272cfd36b13c9->enter($__internal_775e6d40fab042b19f3584f5573c261d5d7675aec722093a803272cfd36b13c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "
<h1 class=\"coloralert\">Registrar credito de emergencia \t</h1>
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "\t\t\t
<div class=\"sectionstile\"><br>
\t<div class=\"row\">
\t\t<div class=\"textjusti col-md-2\">
\t\t\t<label class=\"marginlabel\">Referencia:</label>
\t\t</div>\t
\t\t<div class=\"col-md-4\">
\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reference", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nombre de la persona natural o jurídica")));
        echo "
\t\t</div>
\t\t<div class=\"textjusti col-md-2\">
\t\t\t<label class=\"marginlabel\">Monto:</label>
\t\t</div>\t
\t\t<div class=\"col-md-4\">
\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "amount", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "monto del crédito")));
        echo "
\t\t</div>
\t</div><br><!-- div close row form -->
\t
\t<div class=\"row\">
\t\t<div class=\"textjusti col-md-2\">
\t\t\t<label class=\"marginlabel\">Responsable:</label>
\t\t</div>\t
\t\t<div class=\"col-md-4\">
\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "responsible", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nombre de quien autoriza")));
        echo "
\t\t</div>
\t\t<div class=\"textjusti col-md-2\">
\t\t\t<label class=\"marginlabel\">Destino:</label>
\t\t</div>\t
\t\t<div class=\"col-md-4\">
\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "destiny", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "destino del crédito")));
        echo "
\t\t</div>
\t</div><br><!-- div close row form -->
\t
\t<hr>
\t<div class=\"titcred\">Datos de la Mascota</div>
\t<div class=\"sectionstile3\">
\t
\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t<label class=\"marginlabel\">Nombre:</label>
\t\t\t</div>\t
\t\t\t<div class=\"col-md-5\">
\t\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "petName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nombre mascota")));
        echo "
\t\t\t</div>
\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t<label class=\"marginlabel\">Edad:</label>
\t\t\t</div>\t
\t\t\t<div class=\"col-md-5\">
\t\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "petAge", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "edad")));
        echo "
\t\t\t</div>
\t\t</div><br><!-- div close row form -->
\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t<label class=\"marginlabel\">Color:</label>
\t\t\t</div>\t
\t\t\t<div class=\"col-md-5\">
\t\t\t\t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "colour", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "color")));
        echo "
\t\t\t</div>
\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t<label class=\"marginlabel\">Género:</label>
\t\t\t</div>\t
\t\t\t<div class=\"col-md-5\">
\t\t\t\t";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "seleccione el género")));
        echo "
\t\t\t</div>
\t\t</div><br><!-- div close row form -->\t

\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t<label class=\"marginlabel\">Raza:</label>
\t\t\t</div>\t
\t\t\t<div class=\"col-md-5\">
\t\t\t\t";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "race", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "raza de la mascota")));
        echo "
\t\t\t</div>
\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t<label class=\"marginlabel\">especie:</label>
\t\t\t</div>\t
\t\t\t<div class=\"col-md-5\">
\t\t\t\t";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "species", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "seleccione la especie")));
        echo "
\t\t\t</div>
\t\t</div><br><!-- div close row form -->
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t<label class=\"marginlabel\" for=\"Edad del adoptante\">¿está vacunada?:</label>
\t\t\t</div>
\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isVacunated", array()), 'widget', array("attr" => array("class" => "check checkbox")));
        echo "
\t\t\t\t<br>
\t\t\t</div>
\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t<label for=\"Nombre del adoptante\">¿está esterilizada?: </label>
\t\t\t</div>
\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isSterilized", array()), 'widget', array("attr" => array("class" => "check checkbox")));
        echo "
\t\t\t\t<br>
\t\t\t</div>
\t\t</div>
\t\t<!--
\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t<label class=\"marginlabel\" for=\"Edad del adoptante\">¿necesita cirugía?:</label>
\t\t\t</div>
\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t<input type=\"checkbox\"  class=\"check checkbox\" value=\"1\">
\t\t\t\t<br>
\t\t\t</div>
\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t<label for=\"Nombre del adoptante\">¿es callejera?: </label>
\t\t\t</div>
\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t<input type=\"checkbox\"  class=\"check checkbox\" value=\"1\">
\t\t\t\t<br>
\t\t\t</div>
\t\t</div>
\t\t-->
\t
\t</div><br><!--div sectionsitile-->
\t\t

\t<div class=\"titcred\"> datos del solicitante</div>
\t<div class=\"sectionstile3\">
\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t<label class=\"marginlabel\">Nombre:</label>
\t\t\t</div>\t
\t\t\t<div class=\"col-md-5\">
\t\t\t\t";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nombres del solicitante")));
        echo "
\t\t\t</div>
\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t<label class=\"marginlabel\">Apellido:</label>
\t\t\t</div>\t
\t\t\t<div class=\"col-md-5\">
\t\t\t\t";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "apellidos")));
        echo "
\t\t\t</div>
\t\t</div><br>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t<label class=\"marginlabel\">Edad:</label>
\t\t\t</div>\t
\t\t\t<div class=\"col-md-5\">
\t\t\t\t";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userAge", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "edad")));
        echo "
\t\t\t</div>
\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t<label class=\"marginlabel\">Cédula:</label>
\t\t\t</div>\t
\t\t\t<div class=\"col-md-5\">
\t\t\t\t";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identificationNumber", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "cédula")));
        echo "
\t\t\t</div>
\t\t</div><br><!-- div close row form -->
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t<label class=\"marginlabel\">Dirección:</label>
\t\t\t</div>\t
\t\t\t<div class=\"col-md-5\">
\t\t\t\t";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "dirección")));
        echo "
\t\t\t</div>
\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t<label class=\"marginlabel\">Teléfono:</label>
\t\t\t</div>\t
\t\t\t<div class=\"col-md-5\">
\t\t\t\t";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone_number", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "teléfono")));
        echo "
\t\t\t</div>
\t\t</div><br><!-- div close row form -->\t
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t<label class=\"marginlabel\">Correo:</label>
\t\t\t</div>\t
\t\t\t<div class=\"col-md-5\">
\t\t\t\t";
        // line 175
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "correo electrónico")));
        echo "
\t\t\t</div>
\t\t</div><!-- div close row form -->\t
\t</div>
</div>
";
        // line 180
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Continuar", "attr" => array("class" => "btn btn-success")));
        echo "
";
        // line 181
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_775e6d40fab042b19f3584f5573c261d5d7675aec722093a803272cfd36b13c9->leave($__internal_775e6d40fab042b19f3584f5573c261d5d7675aec722093a803272cfd36b13c9_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:credito_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 181,  279 => 180,  271 => 175,  259 => 166,  250 => 160,  238 => 151,  229 => 145,  217 => 136,  208 => 130,  172 => 97,  162 => 90,  150 => 81,  141 => 75,  129 => 66,  120 => 60,  109 => 52,  100 => 46,  84 => 33,  75 => 27,  63 => 18,  54 => 12,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* */
/* <h1 class="coloralert">Registrar credito de emergencia 	</h1>*/
/* {{ form_start(form, {'attr' : {'role' : 'form'} }) }}			*/
/* <div class="sectionstile"><br>*/
/* 	<div class="row">*/
/* 		<div class="textjusti col-md-2">*/
/* 			<label class="marginlabel">Referencia:</label>*/
/* 		</div>	*/
/* 		<div class="col-md-4">*/
/* 			{{form_widget(form.reference, {'attr' : {'class' : 'form-control', 'placeholder' : 'nombre de la persona natural o jurídica' } })}}*/
/* 		</div>*/
/* 		<div class="textjusti col-md-2">*/
/* 			<label class="marginlabel">Monto:</label>*/
/* 		</div>	*/
/* 		<div class="col-md-4">*/
/* 			{{form_widget(form.amount, {'attr' : {'class' : 'form-control', 'placeholder' : 'monto del crédito' } })}}*/
/* 		</div>*/
/* 	</div><br><!-- div close row form -->*/
/* 	*/
/* 	<div class="row">*/
/* 		<div class="textjusti col-md-2">*/
/* 			<label class="marginlabel">Responsable:</label>*/
/* 		</div>	*/
/* 		<div class="col-md-4">*/
/* 			{{form_widget(form.responsible, {'attr' : {'class' : 'form-control', 'placeholder' : 'nombre de quien autoriza' } })}}*/
/* 		</div>*/
/* 		<div class="textjusti col-md-2">*/
/* 			<label class="marginlabel">Destino:</label>*/
/* 		</div>	*/
/* 		<div class="col-md-4">*/
/* 			{{form_widget(form.destiny, {'attr' : {'class' : 'form-control', 'placeholder' : 'destino del crédito' } })}}*/
/* 		</div>*/
/* 	</div><br><!-- div close row form -->*/
/* 	*/
/* 	<hr>*/
/* 	<div class="titcred">Datos de la Mascota</div>*/
/* 	<div class="sectionstile3">*/
/* 	*/
/* 		<div class="row">*/
/* 			<div class="textjusti col-md-1">*/
/* 				<label class="marginlabel">Nombre:</label>*/
/* 			</div>	*/
/* 			<div class="col-md-5">*/
/* 				{{form_widget(form.petName, {'attr' : {'class' : 'form-control', 'placeholder' : 'nombre mascota' } })}}*/
/* 			</div>*/
/* 			<div class="textjusti col-md-1">*/
/* 				<label class="marginlabel">Edad:</label>*/
/* 			</div>	*/
/* 			<div class="col-md-5">*/
/* 				{{form_widget(form.petAge, {'attr' : {'class' : 'form-control', 'placeholder' : 'edad' } })}}*/
/* 			</div>*/
/* 		</div><br><!-- div close row form -->*/
/* 		<div class="row">*/
/* 			<div class="textjusti col-md-1">*/
/* 				<label class="marginlabel">Color:</label>*/
/* 			</div>	*/
/* 			<div class="col-md-5">*/
/* 				{{form_widget(form.colour, {'attr' : {'class' : 'form-control', 'placeholder' : 'color' } })}}*/
/* 			</div>*/
/* 			<div class="textjusti col-md-1">*/
/* 				<label class="marginlabel">Género:</label>*/
/* 			</div>	*/
/* 			<div class="col-md-5">*/
/* 				{{form_widget(form.gender, {'attr' : {'class' : 'form-control', 'placeholder' : 'seleccione el género' } })}}*/
/* 			</div>*/
/* 		</div><br><!-- div close row form -->	*/
/* */
/* 		<div class="row">*/
/* 			<div class="textjusti col-md-1">*/
/* 				<label class="marginlabel">Raza:</label>*/
/* 			</div>	*/
/* 			<div class="col-md-5">*/
/* 				{{form_widget(form.race, {'attr' : {'class' : 'form-control', 'placeholder' : 'raza de la mascota' } })}}*/
/* 			</div>*/
/* 			<div class="textjusti col-md-1">*/
/* 				<label class="marginlabel">especie:</label>*/
/* 			</div>	*/
/* 			<div class="col-md-5">*/
/* 				{{form_widget(form.species, {'attr' : {'class' : 'form-control', 'placeholder' : 'seleccione la especie' } })}}*/
/* 			</div>*/
/* 		</div><br><!-- div close row form -->*/
/* 		*/
/* 		<div class="row">*/
/* 			<div class="textjusti col-xs-3 col-md-2">*/
/* 				<label class="marginlabel" for="Edad del adoptante">¿está vacunada?:</label>*/
/* 			</div>*/
/* 			<div class="col-xs-9 col-md-4">*/
/* 				{{form_widget(form.isVacunated, {'attr' : {'class' : 'check checkbox'} })}}*/
/* 				<br>*/
/* 			</div>*/
/* 			<div class="textjusti col-xs-3 col-md-2">*/
/* 				<label for="Nombre del adoptante">¿está esterilizada?: </label>*/
/* 			</div>*/
/* 			<div class="col-xs-9 col-md-4">*/
/* 				{{form_widget(form.isSterilized, {'attr' : {'class' : 'check checkbox'} })}}*/
/* 				<br>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!--*/
/* 		<div class="row">*/
/* 			<div class="textjusti col-xs-3 col-md-2">*/
/* 				<label class="marginlabel" for="Edad del adoptante">¿necesita cirugía?:</label>*/
/* 			</div>*/
/* 			<div class="col-xs-9 col-md-4">*/
/* 				<input type="checkbox"  class="check checkbox" value="1">*/
/* 				<br>*/
/* 			</div>*/
/* 			<div class="textjusti col-xs-3 col-md-2">*/
/* 				<label for="Nombre del adoptante">¿es callejera?: </label>*/
/* 			</div>*/
/* 			<div class="col-xs-9 col-md-4">*/
/* 				<input type="checkbox"  class="check checkbox" value="1">*/
/* 				<br>*/
/* 			</div>*/
/* 		</div>*/
/* 		-->*/
/* 	*/
/* 	</div><br><!--div sectionsitile-->*/
/* 		*/
/* */
/* 	<div class="titcred"> datos del solicitante</div>*/
/* 	<div class="sectionstile3">*/
/* 		<div class="row">*/
/* 			<div class="textjusti col-md-1">*/
/* 				<label class="marginlabel">Nombre:</label>*/
/* 			</div>	*/
/* 			<div class="col-md-5">*/
/* 				{{form_widget(form.userName, {'attr' : {'class' : 'form-control', 'placeholder' : 'nombres del solicitante' } })}}*/
/* 			</div>*/
/* 			<div class="textjusti col-md-1">*/
/* 				<label class="marginlabel">Apellido:</label>*/
/* 			</div>	*/
/* 			<div class="col-md-5">*/
/* 				{{form_widget(form.lastName, {'attr' : {'class' : 'form-control', 'placeholder' : 'apellidos' } })}}*/
/* 			</div>*/
/* 		</div><br>*/
/* 		*/
/* 		<div class="row">*/
/* 			<div class="textjusti col-md-1">*/
/* 				<label class="marginlabel">Edad:</label>*/
/* 			</div>	*/
/* 			<div class="col-md-5">*/
/* 				{{form_widget(form.userAge, {'attr' : {'class' : 'form-control', 'placeholder' : 'edad' } })}}*/
/* 			</div>*/
/* 			<div class="textjusti col-md-1">*/
/* 				<label class="marginlabel">Cédula:</label>*/
/* 			</div>	*/
/* 			<div class="col-md-5">*/
/* 				{{form_widget(form.identificationNumber, {'attr' : {'class' : 'form-control', 'placeholder' : 'cédula' } })}}*/
/* 			</div>*/
/* 		</div><br><!-- div close row form -->*/
/* 		*/
/* 		<div class="row">*/
/* 			<div class="textjusti col-md-1">*/
/* 				<label class="marginlabel">Dirección:</label>*/
/* 			</div>	*/
/* 			<div class="col-md-5">*/
/* 				{{form_widget(form.address, {'attr' : {'class' : 'form-control', 'placeholder' : 'dirección' } })}}*/
/* 			</div>*/
/* 			<div class="textjusti col-md-1">*/
/* 				<label class="marginlabel">Teléfono:</label>*/
/* 			</div>	*/
/* 			<div class="col-md-5">*/
/* 				{{form_widget(form.phone_number, {'attr' : {'class' : 'form-control', 'placeholder' : 'teléfono' } })}}*/
/* 			</div>*/
/* 		</div><br><!-- div close row form -->	*/
/* 		*/
/* 		<div class="row">*/
/* 			<div class="textjusti col-md-1">*/
/* 				<label class="marginlabel">Correo:</label>*/
/* 			</div>	*/
/* 			<div class="col-md-5">*/
/* 				{{form_widget(form.email, {'attr' : {'class' : 'form-control', 'placeholder' : 'correo electrónico' } })}}*/
/* 			</div>*/
/* 		</div><!-- div close row form -->	*/
/* 	</div>*/
/* </div>*/
/* {{ form_widget(form.save, {'label' : 'Continuar', 'attr' : {'class' : 'btn btn-success'} }) }}*/
/* {{ form_end(form) }}*/
/* {% endblock %}*/
