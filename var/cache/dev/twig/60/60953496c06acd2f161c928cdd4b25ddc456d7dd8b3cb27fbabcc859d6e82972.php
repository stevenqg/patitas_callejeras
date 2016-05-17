<?php

/* PCFundationBundle:Admin:add_mascota.html.twig */
class __TwigTemplate_dc8c50a409fba6ac9490619397d5e2914167df1f5063675aae8889fb25343ef2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:add_mascota.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_4c930f066d83739f6e78209cc2b0a78bfc66bb4ce5bd69f2eb4f66a13233dc10 = $this->env->getExtension("native_profiler");
        $__internal_4c930f066d83739f6e78209cc2b0a78bfc66bb4ce5bd69f2eb4f66a13233dc10->enter($__internal_4c930f066d83739f6e78209cc2b0a78bfc66bb4ce5bd69f2eb4f66a13233dc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:add_mascota.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c930f066d83739f6e78209cc2b0a78bfc66bb4ce5bd69f2eb4f66a13233dc10->leave($__internal_4c930f066d83739f6e78209cc2b0a78bfc66bb4ce5bd69f2eb4f66a13233dc10_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f46e26a84b8ee6936573e9f4ee7cb48a3fe2c1b61adce1464b43f94834fac299 = $this->env->getExtension("native_profiler");
        $__internal_f46e26a84b8ee6936573e9f4ee7cb48a3fe2c1b61adce1464b43f94834fac299->enter($__internal_f46e26a84b8ee6936573e9f4ee7cb48a3fe2c1b61adce1464b43f94834fac299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/fileinput.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_f46e26a84b8ee6936573e9f4ee7cb48a3fe2c1b61adce1464b43f94834fac299->leave($__internal_f46e26a84b8ee6936573e9f4ee7cb48a3fe2c1b61adce1464b43f94834fac299_prof);

    }

    // line 6
    public function block_capa($context, array $blocks = array())
    {
        $__internal_a26fbe91389302f684cb6221c2f9e1584ea65f427f0d91485bec50f456907bb9 = $this->env->getExtension("native_profiler");
        $__internal_a26fbe91389302f684cb6221c2f9e1584ea65f427f0d91485bec50f456907bb9->enter($__internal_a26fbe91389302f684cb6221c2f9e1584ea65f427f0d91485bec50f456907bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 7
        echo "<div>
\t\t
\t<h1 class=\"coloralert\"> Agregar Mascota - paso 1</h1>
\t<div class=\"sectionstile\">
\t
\t\t
\t\t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
\t\t<div class=\"form-group\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t\t<label class=\"marginlabel\">Nombre:</label>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nombre de la mascota")));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t\t<label class=\"marginlabel\">Edad:</label>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "edad de la mascota")));
        echo "
\t\t\t\t</div>
\t\t\t</div><br><!-- div close row form -->
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t\t<label class=\"marginlabel\">Especie:</label>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "species", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "que especie de mascota es?")));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t\t<label class=\"marginlabel\">Raza:</label>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "race", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "a que raza pertenece?")));
        echo "
\t\t\t\t</div>
\t\t\t</div><br><!-- div close row form -->
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t\t<label class=\"marginlabel\">Sexo:</label>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "¿macho o hembra?")));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t\t<label class=\"marginlabel\">Color:</label>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "colour", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "color de la mascota")));
        echo "
\t\t\t\t</div>
\t\t\t</div><br><!-- div close row form -->\t
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t\t<label class=\"marginlabel\">Vacunado:</label>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isVacunated", array()), 'widget', array("attr" => array("class" => "check checkbox")));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t\t<label class=\"marginlabel\">Esterilizado:</label>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isSterilized", array()), 'widget', array("attr" => array("class" => "check checkbox")));
        echo "
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div><br><!-- div close row form -->\t
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Continuar", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t</div></div>
\t\t</div>
\t\t";
        // line 80
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div><!--div sectionsitile-->
</div>
";
        
        $__internal_a26fbe91389302f684cb6221c2f9e1584ea65f427f0d91485bec50f456907bb9->leave($__internal_a26fbe91389302f684cb6221c2f9e1584ea65f427f0d91485bec50f456907bb9_prof);

    }

    // line 84
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_38a753e265ae951a8097d009cb3fe80ab74152b7bcf1b4632eaabb00450656da = $this->env->getExtension("native_profiler");
        $__internal_38a753e265ae951a8097d009cb3fe80ab74152b7bcf1b4632eaabb00450656da->enter($__internal_38a753e265ae951a8097d009cb3fe80ab74152b7bcf1b4632eaabb00450656da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 85
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/fileinput.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_38a753e265ae951a8097d009cb3fe80ab74152b7bcf1b4632eaabb00450656da->leave($__internal_38a753e265ae951a8097d009cb3fe80ab74152b7bcf1b4632eaabb00450656da_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:add_mascota.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 86,  183 => 85,  177 => 84,  166 => 80,  160 => 77,  151 => 71,  142 => 65,  130 => 56,  121 => 50,  109 => 41,  100 => 35,  88 => 26,  79 => 20,  69 => 13,  61 => 7,  55 => 6,  46 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block stylesheets %}*/
/* {{ parent() }}*/
/*  <link href="{{ asset('public/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css" />*/
/* {% endblock %}*/
/* {% block capa %}*/
/* <div>*/
/* 		*/
/* 	<h1 class="coloralert"> Agregar Mascota - paso 1</h1>*/
/* 	<div class="sectionstile">*/
/* 	*/
/* 		*/
/* 		{{ form_start(form, {'attr' : {'role' : 'form'} }) }}*/
/* 		<div class="form-group">*/
/* 			<div class="row">*/
/* 				<div class="textjusti col-md-1">*/
/* 					<label class="marginlabel">Nombre:</label>*/
/* 				</div>	*/
/* 				<div class="col-md-5">*/
/* 					{{form_widget(form.name, {'attr' : {'class' : 'form-control', 'placeholder' : 'nombre de la mascota' } })}}*/
/* 				</div>*/
/* 				<div class="textjusti col-md-1">*/
/* 					<label class="marginlabel">Edad:</label>*/
/* 				</div>	*/
/* 				<div class="col-md-5">*/
/* 					{{form_widget(form.age, {'attr' : {'class' : 'form-control', 'placeholder' : 'edad de la mascota' } })}}*/
/* 				</div>*/
/* 			</div><br><!-- div close row form -->*/
/* 			*/
/* 			<div class="row">*/
/* 				<div class="textjusti col-md-1">*/
/* 					<label class="marginlabel">Especie:</label>*/
/* 				</div>	*/
/* 				<div class="col-md-5">*/
/* 					{{form_widget(form.species, {'attr' : {'class' : 'form-control', 'placeholder' : 'que especie de mascota es?' } })}}*/
/* 				</div>*/
/* 				<div class="textjusti col-md-1">*/
/* 					<label class="marginlabel">Raza:</label>*/
/* 				</div>	*/
/* 				<div class="col-md-5">*/
/* 					{{form_widget(form.race, {'attr' : {'class' : 'form-control', 'placeholder' : 'a que raza pertenece?' } })}}*/
/* 				</div>*/
/* 			</div><br><!-- div close row form -->*/
/* 			*/
/* 			<div class="row">*/
/* 				<div class="textjusti col-md-1">*/
/* 					<label class="marginlabel">Sexo:</label>*/
/* 				</div>	*/
/* 				<div class="col-md-5">*/
/* 					{{form_widget(form.gender, {'attr' : {'class' : 'form-control', 'placeholder' : '¿macho o hembra?' } })}}*/
/* 				</div>*/
/* 				<div class="textjusti col-md-1">*/
/* 					<label class="marginlabel">Color:</label>*/
/* 				</div>	*/
/* 				<div class="col-md-5">*/
/* 					{{form_widget(form.colour, {'attr' : {'class' : 'form-control', 'placeholder' : 'color de la mascota' } })}}*/
/* 				</div>*/
/* 			</div><br><!-- div close row form -->	*/
/* 			*/
/* 			<div class="row">*/
/* 				<div class="textjusti col-md-1">*/
/* 					<label class="marginlabel">Vacunado:</label>*/
/* 				</div>	*/
/* 				<div class="col-md-5">*/
/* 					{{form_widget(form.isVacunated, {'attr' : {'class' : 'check checkbox'} })}}*/
/* 				</div>*/
/* 				<div class="textjusti col-md-1">*/
/* 					<label class="marginlabel">Esterilizado:</label>*/
/* 				</div>	*/
/* 				<div class="col-md-5">*/
/* 					{{form_widget(form.isSterilized, {'attr' : {'class' : 'check checkbox'} })}}*/
/* 				</div>*/
/* 				*/
/* 			</div><br><!-- div close row form -->	*/
/* 				<div class="row">*/
/* 				<div class="col-md-2">*/
/* 					{{ form_widget(form.save, {'label' : 'Continuar', 'attr' : {'class' : 'btn btn-success'} }) }}*/
/* 				</div></div>*/
/* 		</div>*/
/* 		{{ form_end(form) }}*/
/* 	</div><!--div sectionsitile-->*/
/* </div>*/
/* {% endblock %}	*/
/* {% block javascript %}*/
/* {{ parent() }}*/
/* 	    <script src="{{ asset('public/js/fileinput.min.js') }}" type="text/javascript"></script>*/
/* {% endblock %}*/
