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
        $__internal_0e47228893bf45b82539f46269311c4d46576214436c81a481b881936e9d161f = $this->env->getExtension("native_profiler");
        $__internal_0e47228893bf45b82539f46269311c4d46576214436c81a481b881936e9d161f->enter($__internal_0e47228893bf45b82539f46269311c4d46576214436c81a481b881936e9d161f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:encuestaUsuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e47228893bf45b82539f46269311c4d46576214436c81a481b881936e9d161f->leave($__internal_0e47228893bf45b82539f46269311c4d46576214436c81a481b881936e9d161f_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_6c419dc8775cf4cb97daf028b6181a937baa53a2414c0e812c7cac9079b9d366 = $this->env->getExtension("native_profiler");
        $__internal_6c419dc8775cf4cb97daf028b6181a937baa53a2414c0e812c7cac9079b9d366->enter($__internal_6c419dc8775cf4cb97daf028b6181a937baa53a2414c0e812c7cac9079b9d366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_6c419dc8775cf4cb97daf028b6181a937baa53a2414c0e812c7cac9079b9d366->leave($__internal_6c419dc8775cf4cb97daf028b6181a937baa53a2414c0e812c7cac9079b9d366_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a891860793354a5fd62d57ff8f9cbb3f80caa3758c9bb0388da51f6e6843397 = $this->env->getExtension("native_profiler");
        $__internal_0a891860793354a5fd62d57ff8f9cbb3f80caa3758c9bb0388da51f6e6843397->enter($__internal_0a891860793354a5fd62d57ff8f9cbb3f80caa3758c9bb0388da51f6e6843397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<div class=\"row\">
\t\t<div class=\"col-md-1\"></div>
\t\t<div class=\"col-md-10\">
\t\t\t<img class=\"posrigth img-responsive\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\">
\t\t</div>
\t\t<div class=\"col-md-1\"></div>
\t</div>
\t<div class=\"liner\"></div>
\t<div class=\"row\">
\t\t<div class=\"col-xs-1 col-md-1\"></div>
\t\t<div class=\" col-xs-10 col-md-10\">
\t\t\t
\t\t\t<br>
\t\t\t";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo " 
\t\t\t<div class=\"form-group\">
\t\t\t\t<h4 class=\"textjusti\"><b>Datos personales del adoptante</b></h4>
\t\t\t\t<div class=\"textjusti sectionstile\">
\t\t\t\t\t<div class=\" alert alert-info\" role=\"alert\">Los datos personales que se solicita en este formulario tienen como finalidad ser utilizados para proveer los servicios y productos requeridos, que mediante la Ley 1581 de 2012 se expidió el Régimen General de Protección de Datos Personales para su seguridad.</div><br>
\t\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t<label for=\"Nombres del adoptante\">Nombres:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 col-md-5\">
\t\t\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nombres del adoptante")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t<label for=\"Apellidos del adoptante\">Apellido:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 col-md-5\">
\t\t\t\t\t\t\t";
        // line 38
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
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "age_user", "placeholder" => "edad")));
        echo "
\t\t\t\t\t\t\t<div  class=\"logaler alert-danger\" id=\"age-error\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t<label for=\"Edad del adoptante\">Cedula</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 col-md-5\">
\t\t\t\t\t\t\t";
        // line 59
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
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "direccion")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t<label  for=\"Edad del adoptante\">Telefono:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 col-md-5\">
\t\t\t\t\t\t\t";
        // line 80
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
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "email_user", "placeholder" => "correo electronico")));
        echo "
\t\t\t\t\t\t\t<div  class=\"logaler alert-danger\" id=\"email-error\"></div><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "continuar proceso", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t</div>
\t\t\t";
        // line 98
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t\t<div class=\"col-xs-1 col-md-1\"></div>
\t</div>

";
        
        $__internal_0a891860793354a5fd62d57ff8f9cbb3f80caa3758c9bb0388da51f6e6843397->leave($__internal_0a891860793354a5fd62d57ff8f9cbb3f80caa3758c9bb0388da51f6e6843397_prof);

    }

    // line 105
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_b8eb79dcad8c026d2437879a4912022acc42565a8e65d033bf306ec3da37045c = $this->env->getExtension("native_profiler");
        $__internal_b8eb79dcad8c026d2437879a4912022acc42565a8e65d033bf306ec3da37045c->enter($__internal_b8eb79dcad8c026d2437879a4912022acc42565a8e65d033bf306ec3da37045c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 106
        echo "\t<!-- Librería jQuery requerida por los plugins de JavaScript -->
\t<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\" ></script>
\t<!-- toda las funciones personalizadas-->
\t<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/functJquery.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_b8eb79dcad8c026d2437879a4912022acc42565a8e65d033bf306ec3da37045c->leave($__internal_b8eb79dcad8c026d2437879a4912022acc42565a8e65d033bf306ec3da37045c_prof);

    }

    // line 112
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a7ed927048824a4206a53bb5d1bc3ed408c0eac0820ef562f883caffe7fba851 = $this->env->getExtension("native_profiler");
        $__internal_a7ed927048824a4206a53bb5d1bc3ed408c0eac0820ef562f883caffe7fba851->enter($__internal_a7ed927048824a4206a53bb5d1bc3ed408c0eac0820ef562f883caffe7fba851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_a7ed927048824a4206a53bb5d1bc3ed408c0eac0820ef562f883caffe7fba851->leave($__internal_a7ed927048824a4206a53bb5d1bc3ed408c0eac0820ef562f883caffe7fba851_prof);

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
        return array (  215 => 112,  206 => 109,  201 => 107,  198 => 106,  192 => 105,  179 => 98,  174 => 96,  165 => 90,  152 => 80,  139 => 70,  125 => 59,  112 => 49,  98 => 38,  86 => 29,  72 => 18,  59 => 8,  54 => 5,  48 => 4,  37 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block scroll_nav %}*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div class="row">*/
/* 		<div class="col-md-1"></div>*/
/* 		<div class="col-md-10">*/
/* 			<img class="posrigth img-responsive" src="{{ asset('public/img/logo.png') }}" alt="logo">*/
/* 		</div>*/
/* 		<div class="col-md-1"></div>*/
/* 	</div>*/
/* 	<div class="liner"></div>*/
/* 	<div class="row">*/
/* 		<div class="col-xs-1 col-md-1"></div>*/
/* 		<div class=" col-xs-10 col-md-10">*/
/* 			*/
/* 			<br>*/
/* 			{{ form_start(form, {'attr' : {'role' : 'form'} }) }} */
/* 			<div class="form-group">*/
/* 				<h4 class="textjusti"><b>Datos personales del adoptante</b></h4>*/
/* 				<div class="textjusti sectionstile">*/
/* 					<div class=" alert alert-info" role="alert">Los datos personales que se solicita en este formulario tienen como finalidad ser utilizados para proveer los servicios y productos requeridos, que mediante la Ley 1581 de 2012 se expidió el Régimen General de Protección de Datos Personales para su seguridad.</div><br>*/
/* 					*/
/* 					<div class="row">*/
/* 						<div class="col-xs-2 col-md-1">*/
/* 							<label for="Nombres del adoptante">Nombres:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-10 col-md-5">*/
/* 							{{form_widget(form.name, {'attr' : {'class' : 'form-control', 'placeholder' : 'nombres del adoptante' } })}}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<br>*/
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
/* 						</div>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<br>*/
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
/* 						</div>*/
/* 					</div>	*/
/* 					*/
/* 					<div class="row">*/
/* 						<br>*/
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
/* */
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
