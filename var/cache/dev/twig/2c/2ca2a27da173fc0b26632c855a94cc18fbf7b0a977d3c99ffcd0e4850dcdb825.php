<?php

/* PCFundationBundle:Admin:registroMascota.html.twig */
class __TwigTemplate_93180a659ef9c646ca29e677c060d39d4b4473c64875623e1727ed5afd337b4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PCFundationBundle:Admin:registroMascota.html.twig", 1);
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
        $__internal_28693047b76c5fb4d6b11a90a0e960070ee3679e2d6dd769cff5cafe00b749d6 = $this->env->getExtension("native_profiler");
        $__internal_28693047b76c5fb4d6b11a90a0e960070ee3679e2d6dd769cff5cafe00b749d6->enter($__internal_28693047b76c5fb4d6b11a90a0e960070ee3679e2d6dd769cff5cafe00b749d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:registroMascota.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28693047b76c5fb4d6b11a90a0e960070ee3679e2d6dd769cff5cafe00b749d6->leave($__internal_28693047b76c5fb4d6b11a90a0e960070ee3679e2d6dd769cff5cafe00b749d6_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_ea401ef083b41345b7d878eb95c140f9b254bbd6ead44f8841a8217dfa531de1 = $this->env->getExtension("native_profiler");
        $__internal_ea401ef083b41345b7d878eb95c140f9b254bbd6ead44f8841a8217dfa531de1->enter($__internal_ea401ef083b41345b7d878eb95c140f9b254bbd6ead44f8841a8217dfa531de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_ea401ef083b41345b7d878eb95c140f9b254bbd6ead44f8841a8217dfa531de1->leave($__internal_ea401ef083b41345b7d878eb95c140f9b254bbd6ead44f8841a8217dfa531de1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f03cb38a116075e7b542a79b5f6c7c1d0583df857769438fec79da39cd0307e6 = $this->env->getExtension("native_profiler");
        $__internal_f03cb38a116075e7b542a79b5f6c7c1d0583df857769438fec79da39cd0307e6->enter($__internal_f03cb38a116075e7b542a79b5f6c7c1d0583df857769438fec79da39cd0307e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t<br>
\t\t\t";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
\t\t\t<div class=\"form-group\">
\t\t\t\t<h4 class=\"textjusti\"><b>Datos de la mascota</b></h4>
\t\t\t\t<div class=\"textjusti sectionstile\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t<label>Nombre:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 col-md-5\">
\t\t\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nombre de la mascota")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t<label>Edad:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 col-md-5\">
\t\t\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "edad de la mascota")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t<label>Especie: </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 col-md-5\">
\t\t\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "species", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "¿canino o felino?")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t<label>Raza:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 col-md-5\">
\t\t\t\t\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "race", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "a que raza pertenece?")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t<label>Color: </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 col-md-5\">
\t\t\t\t\t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "colour", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "color de la mascota")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t<label>Género:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 col-md-5\">
\t\t\t\t\t\t\t";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "¿macho o hembra?")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t<label>¿está vacunad@? </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-4 col-md-5\">
\t\t\t\t\t\t\t";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isVacunated", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t<label>¿está esterilizad@? </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-4 col-md-5\">
\t\t\t\t\t\t\t";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isSterilized", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t<label>fecha de nacimiento </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 col-md-5\">
\t\t\t\t\t\t\t";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthdate", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "fecha de nacimiento de la mascota")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "continuar proceso", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t</div>
\t\t\t";
        // line 103
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t\t<div class=\"col-xs-1 col-md-1\"></div>
\t</div>

";
        
        $__internal_f03cb38a116075e7b542a79b5f6c7c1d0583df857769438fec79da39cd0307e6->leave($__internal_f03cb38a116075e7b542a79b5f6c7c1d0583df857769438fec79da39cd0307e6_prof);

    }

    // line 110
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_de665ecde95e8e6176eb5be0dd9dca1653a1d760bd7d3409d76ef4a708dce46d = $this->env->getExtension("native_profiler");
        $__internal_de665ecde95e8e6176eb5be0dd9dca1653a1d760bd7d3409d76ef4a708dce46d->enter($__internal_de665ecde95e8e6176eb5be0dd9dca1653a1d760bd7d3409d76ef4a708dce46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 111
        echo "\t<!-- Librería jQuery requerida por los plugins de JavaScript -->
\t<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\" ></script>
\t<!-- toda las funciones personalizadas-->
\t<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/functJquery.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_de665ecde95e8e6176eb5be0dd9dca1653a1d760bd7d3409d76ef4a708dce46d->leave($__internal_de665ecde95e8e6176eb5be0dd9dca1653a1d760bd7d3409d76ef4a708dce46d_prof);

    }

    // line 117
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f7fcef2f372ba9bfa14254b444d5e53a8421776dea6b29602e03f3998a470f87 = $this->env->getExtension("native_profiler");
        $__internal_f7fcef2f372ba9bfa14254b444d5e53a8421776dea6b29602e03f3998a470f87->enter($__internal_f7fcef2f372ba9bfa14254b444d5e53a8421776dea6b29602e03f3998a470f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_f7fcef2f372ba9bfa14254b444d5e53a8421776dea6b29602e03f3998a470f87->leave($__internal_f7fcef2f372ba9bfa14254b444d5e53a8421776dea6b29602e03f3998a470f87_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:registroMascota.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 117,  217 => 114,  212 => 112,  209 => 111,  203 => 110,  190 => 103,  185 => 101,  178 => 97,  166 => 88,  155 => 80,  143 => 71,  131 => 62,  119 => 53,  107 => 44,  95 => 35,  83 => 26,  71 => 17,  59 => 8,  54 => 5,  48 => 4,  37 => 2,  11 => 1,);
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
/* 			<br>*/
/* 			{{ form_start(form, {'attr' : {'role' : 'form'} }) }}*/
/* 			<div class="form-group">*/
/* 				<h4 class="textjusti"><b>Datos de la mascota</b></h4>*/
/* 				<div class="textjusti sectionstile">*/
/* 					<div class="row">*/
/* 						<div class="col-xs-2 col-md-1">*/
/* 							<label>Nombre:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-10 col-md-5">*/
/* 							{{form_widget(form.name, {'attr' : {'class' : 'form-control', 'placeholder' : 'nombre de la mascota' } })}}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<br>*/
/* 						<div class="col-xs-2 col-md-1">*/
/* 							<label>Edad:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-10 col-md-5">*/
/* 							{{form_widget(form.age, {'attr' : {'class' : 'form-control', 'placeholder' : 'edad de la mascota' } })}}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<br>*/
/* 						<div class="col-xs-2 col-md-1">*/
/* 							<label>Especie: </label>*/
/* 						</div>*/
/* 						<div class="col-xs-10 col-md-5">*/
/* 							{{form_widget(form.species, {'attr' : {'class' : 'form-control', 'placeholder' : '¿canino o felino?' } })}}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<br>*/
/* 						<div class="col-xs-2 col-md-1">*/
/* 							<label>Raza:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-10 col-md-5">*/
/* 							{{form_widget(form.race, {'attr' : {'class' : 'form-control', 'placeholder' : 'a que raza pertenece?' } })}}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<br>*/
/* 						<div class="col-xs-2 col-md-1">*/
/* 							<label>Color: </label>*/
/* 						</div>*/
/* 						<div class="col-xs-10 col-md-5">*/
/* 							{{form_widget(form.colour, {'attr' : {'class' : 'form-control', 'placeholder' : 'color de la mascota' } })}}*/
/* 						</div>*/
/* 					</div>	*/
/* 					<div class="row">*/
/* 						<br>*/
/* 						<div class="col-xs-2 col-md-1">*/
/* 							<label>Género:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-10 col-md-5">*/
/* 							{{form_widget(form.gender, {'attr' : {'class' : 'form-control', 'placeholder' : '¿macho o hembra?' } })}}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<br>*/
/* 						<div class="col-xs-2 col-md-1">*/
/* 							<label>¿está vacunad@? </label>*/
/* 						</div>*/
/* 						<div class="col-xs-4 col-md-5">*/
/* 							{{form_widget(form.isVacunated, {'attr' : {'class' : 'form-control'} })}}*/
/* 						</div>*/
/* 				*/
/* 						<br>*/
/* 						<div class="col-xs-2 col-md-1">*/
/* 							<label>¿está esterilizad@? </label>*/
/* 						</div>*/
/* 						<div class="col-xs-4 col-md-5">*/
/* 							{{form_widget(form.isSterilized, {'attr' : {'class' : 'form-control'} })}}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<br>*/
/* 						<div class="col-xs-2 col-md-1">*/
/* 							<label>fecha de nacimiento </label>*/
/* 						</div>*/
/* 						<div class="col-xs-10 col-md-5">*/
/* 							{{form_widget(form.birthdate, {'attr' : {'class' : 'form-control', 'placeholder' : 'fecha de nacimiento de la mascota' } })}}*/
/* 						</div>*/
/* 					</div>*/
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
