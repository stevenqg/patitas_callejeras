<?php

/* PCFundationBundle:fundation:encuestaUsuario.html.twig */
class __TwigTemplate_da59cb201b2ab6ce87f164d49f92a73c30b9c4abfd641e486120a8e7dec769d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PCFundationBundle:fundation:encuestaUsuario.html.twig", 1);
        $this->blocks = array(
            'scroll_nav' => array($this, 'block_scroll_nav'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4951212cc21a11ce06f5c4343089c3db613db28f6521d1f4dfe044b75b3e8598 = $this->env->getExtension("native_profiler");
        $__internal_4951212cc21a11ce06f5c4343089c3db613db28f6521d1f4dfe044b75b3e8598->enter($__internal_4951212cc21a11ce06f5c4343089c3db613db28f6521d1f4dfe044b75b3e8598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:encuestaUsuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4951212cc21a11ce06f5c4343089c3db613db28f6521d1f4dfe044b75b3e8598->leave($__internal_4951212cc21a11ce06f5c4343089c3db613db28f6521d1f4dfe044b75b3e8598_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_2b6f89567c38a8d1f0d4df719fe065411d1ac88fe48ca7c2b396ad1c9e9c9274 = $this->env->getExtension("native_profiler");
        $__internal_2b6f89567c38a8d1f0d4df719fe065411d1ac88fe48ca7c2b396ad1c9e9c9274->enter($__internal_2b6f89567c38a8d1f0d4df719fe065411d1ac88fe48ca7c2b396ad1c9e9c9274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_2b6f89567c38a8d1f0d4df719fe065411d1ac88fe48ca7c2b396ad1c9e9c9274->leave($__internal_2b6f89567c38a8d1f0d4df719fe065411d1ac88fe48ca7c2b396ad1c9e9c9274_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_abe8fa5942a4a94f4d2381cfec1b742cb16c931c4f9a9f251f22635384106b10 = $this->env->getExtension("native_profiler");
        $__internal_abe8fa5942a4a94f4d2381cfec1b742cb16c931c4f9a9f251f22635384106b10->enter($__internal_abe8fa5942a4a94f4d2381cfec1b742cb16c931c4f9a9f251f22635384106b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t
\t<div class=\"liner\"></div>
\t<div class=\"row\">
\t\t<div class=\"col-xs-1 col-md-1\"></div>
\t\t<div class=\" col-xs-10 col-md-10\">
\t\t\t
\t\t\t<br>
\t\t\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo " 
\t\t\t<div class=\"form-group\">
\t\t\t\t<h4 class=\"colortexth4 textjusti\"><b>INFORMACIÓN DEL ADOPTANTE</b></h4>
\t\t\t\t<div class=\"textjusti sectionstile\">
\t\t\t\t\t<div class=\" alert alert-info\" role=\"alert\">Los datos personales que se solicita en este formulario tienen como finalidad ser utilizados para proveer los servicios y productos requeridos, que mediante la Ley 1581 de 2012 se expidió el Régimen General de Protección de Datos Personales para su seguridad.</div><br>
\t\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t<label for=\"Nombres del adoptante\">Nombres:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 col-md-5\">
\t\t\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nombres del adoptante")));
        echo "
\t\t\t\t\t\t<br></div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t<label for=\"Apellidos del adoptante\">Apellido:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 col-md-5\">
\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "apellidos del adoptante")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t<label for=\"Nombre del adoptante\">Edad: </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 col-md-5\">
\t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "age_user", "placeholder" => "edad")));
        echo "
\t\t\t\t\t\t\t<div  class=\"logaler alert-danger\" id=\"age-error\"></div>
\t\t\t\t\t\t<br></div>
\t\t\t\t
\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t<label for=\"Edad del adoptante\">Cedula</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 col-md-5\">
\t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identificationNumber", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "numero de cedula")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t<label  for=\"Nombre del adoptante\">Direccion: </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 col-md-5\">
\t\t\t\t\t\t\t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "direccion")));
        echo "
\t\t\t\t\t\t<br></div>
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t<label  for=\"Edad del adoptante\">Telefono:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 col-md-5\">
\t\t\t\t\t\t\t";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone_number", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "numero telefonico")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t<label  for=\"Nombre del adoptante\">Email: </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 col-md-5\">
\t\t\t\t\t\t\t";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "email_user", "placeholder" => "correo electronico")));
        echo "
\t\t\t\t\t\t\t<div  class=\"logaler alert-danger\" id=\"email-error\"></div><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t
\t\t\t\t</div>
\t\t\t\t";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "continuar proceso", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t</div>
\t\t\t";
        // line 86
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t\t<div class=\"col-xs-1 col-md-1\"></div>
\t</div>

";
        
        $__internal_abe8fa5942a4a94f4d2381cfec1b742cb16c931c4f9a9f251f22635384106b10->leave($__internal_abe8fa5942a4a94f4d2381cfec1b742cb16c931c4f9a9f251f22635384106b10_prof);

    }

    // line 93
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_dfb007d82dc668e8d54d4a68cd8401f41bdbb0ed76f9d15db26adf4eeaec0c19 = $this->env->getExtension("native_profiler");
        $__internal_dfb007d82dc668e8d54d4a68cd8401f41bdbb0ed76f9d15db26adf4eeaec0c19->enter($__internal_dfb007d82dc668e8d54d4a68cd8401f41bdbb0ed76f9d15db26adf4eeaec0c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 94
        echo "\t<!-- Librería jQuery requerida por los plugins de JavaScript -->
\t<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\" ></script>
\t<!-- toda las funciones personalizadas-->
\t<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/functJquery.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_dfb007d82dc668e8d54d4a68cd8401f41bdbb0ed76f9d15db26adf4eeaec0c19->leave($__internal_dfb007d82dc668e8d54d4a68cd8401f41bdbb0ed76f9d15db26adf4eeaec0c19_prof);

    }

    // line 100
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7c94c2ae6ae822bf0e4374025601acffbfdeae5bd03ea635ec789d24999deb46 = $this->env->getExtension("native_profiler");
        $__internal_7c94c2ae6ae822bf0e4374025601acffbfdeae5bd03ea635ec789d24999deb46->enter($__internal_7c94c2ae6ae822bf0e4374025601acffbfdeae5bd03ea635ec789d24999deb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_7c94c2ae6ae822bf0e4374025601acffbfdeae5bd03ea635ec789d24999deb46->leave($__internal_7c94c2ae6ae822bf0e4374025601acffbfdeae5bd03ea635ec789d24999deb46_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:fundation:encuestaUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 100,  191 => 97,  186 => 95,  183 => 94,  177 => 93,  164 => 86,  159 => 84,  150 => 78,  137 => 68,  126 => 60,  112 => 49,  101 => 41,  87 => 30,  77 => 23,  63 => 12,  54 => 5,  48 => 4,  37 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block scroll_nav %}*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	*/
/* 	<div class="liner"></div>*/
/* 	<div class="row">*/
/* 		<div class="col-xs-1 col-md-1"></div>*/
/* 		<div class=" col-xs-10 col-md-10">*/
/* 			*/
/* 			<br>*/
/* 			{{ form_start(form, {'attr' : {'role' : 'form'} }) }} */
/* 			<div class="form-group">*/
/* 				<h4 class="colortexth4 textjusti"><b>INFORMACIÓN DEL ADOPTANTE</b></h4>*/
/* 				<div class="textjusti sectionstile">*/
/* 					<div class=" alert alert-info" role="alert">Los datos personales que se solicita en este formulario tienen como finalidad ser utilizados para proveer los servicios y productos requeridos, que mediante la Ley 1581 de 2012 se expidió el Régimen General de Protección de Datos Personales para su seguridad.</div><br>*/
/* 					*/
/* 					<div class="row">*/
/* 						<div class="col-xs-2 col-md-1">*/
/* 							<label for="Nombres del adoptante">Nombres:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-10 col-md-5">*/
/* 							{{form_widget(form.name, {'attr' : {'class' : 'form-control', 'placeholder' : 'nombres del adoptante' } })}}*/
/* 						<br></div>*/
/* 						*/
/* 						<div class="col-xs-2 col-md-1">*/
/* 							<label for="Apellidos del adoptante">Apellido:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-10 col-md-5">*/
/* 							{{form_widget(form.lastName, {'attr' : {'class' : 'form-control', 'placeholder' : 'apellidos del adoptante' } })}}*/
/* 						</div>*/
/* 					*/
/* 					</div>*/
/* */
/* 					<div class="row">*/
/* 						<br>*/
/* 						<div class="col-xs-2 col-md-1">*/
/* 							<label for="Nombre del adoptante">Edad: </label>*/
/* 						</div>*/
/* 						<div class="col-xs-10 col-md-5">*/
/* 							{{form_widget(form.age, {'attr' : {'class' : 'form-control', 'id' : 'age_user', 'placeholder' : 'edad' } })}}*/
/* 							<div  class="logaler alert-danger" id="age-error"></div>*/
/* 						<br></div>*/
/* 				*/
/* 						<div class="col-xs-2 col-md-1">*/
/* 							<label for="Edad del adoptante">Cedula</label>*/
/* 						</div>*/
/* 						<div class="col-xs-10 col-md-5">*/
/* 							{{form_widget(form.identificationNumber, {'attr' : {'class' : 'form-control', 'placeholder' : 'numero de cedula' } })}}*/
/* 						</div>*/
/* 					*/
/* 					</div>*/
/* */
/* 					<div class="row">*/
/* 						<br>*/
/* 						<div class="col-xs-2 col-md-1">*/
/* 							<label  for="Nombre del adoptante">Direccion: </label>*/
/* 						</div>*/
/* 						<div class="col-xs-10 col-md-5">*/
/* 							{{form_widget(form.address, {'attr' : {'class' : 'form-control', 'placeholder' : 'direccion' } })}}*/
/* 						<br></div>*/
/* 					*/
/* 						*/
/* 						<div class="col-xs-2 col-md-1">*/
/* 							<label  for="Edad del adoptante">Telefono:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-10 col-md-5">*/
/* 							{{form_widget(form.phone_number, {'attr' : {'class' : 'form-control', 'placeholder' : 'numero telefonico' } })}}*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 					<div class="row">*/
/* 						<br>*/
/* 						<div class="col-xs-2 col-md-1">*/
/* 							<label  for="Nombre del adoptante">Email: </label>*/
/* 						</div>*/
/* 						<div class="col-xs-10 col-md-5">*/
/* 							{{form_widget(form.email, {'attr' : {'class' : 'form-control', 'id' : 'email_user', 'placeholder' : 'correo electronico' } })}}*/
/* 							<div  class="logaler alert-danger" id="email-error"></div><br>*/
/* 						</div>*/
/* 					</div>*/
/* 			*/
/* 				</div>*/
/* 				{{ form_widget(form.save, {'label' : 'continuar proceso', 'attr' : {'class' : 'btn btn-success'} }) }}*/
/* 			</div>*/
/* 			{{ form_end(form) }}*/
/* 		</div>*/
/* 		<div class="col-xs-1 col-md-1"></div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block scripts %}*/
/* 	<!-- Librería jQuery requerida por los plugins de JavaScript -->*/
/* 	<script src="{{ asset('public/js/jquery-2.1.1.min.js') }}" ></script>*/
/* 	<!-- toda las funciones personalizadas-->*/
/* 	<script src="{{ asset('public/js/functJquery.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* {% endblock %}*/
/* */
/* */
