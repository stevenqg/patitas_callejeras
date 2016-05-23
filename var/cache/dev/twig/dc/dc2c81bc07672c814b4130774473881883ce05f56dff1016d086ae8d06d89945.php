<?php

/* PCFundationBundle:Admin:masc_adopcion_edit.html.twig */
class __TwigTemplate_b4bd73830d1a1b87f0b0a368079f7df980dd179c221ec72c3915951e9f3162d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:masc_adopcion_edit.html.twig", 1);
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
        $__internal_b66141b5827883dbecdad39a7abd35698002124b46fd6757d87c6840cf3e3a44 = $this->env->getExtension("native_profiler");
        $__internal_b66141b5827883dbecdad39a7abd35698002124b46fd6757d87c6840cf3e3a44->enter($__internal_b66141b5827883dbecdad39a7abd35698002124b46fd6757d87c6840cf3e3a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:masc_adopcion_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b66141b5827883dbecdad39a7abd35698002124b46fd6757d87c6840cf3e3a44->leave($__internal_b66141b5827883dbecdad39a7abd35698002124b46fd6757d87c6840cf3e3a44_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_54ffd767f4c5a1f2ae32cb017276eeb4ffd8127a019c5a8eb26db164738fd9ca = $this->env->getExtension("native_profiler");
        $__internal_54ffd767f4c5a1f2ae32cb017276eeb4ffd8127a019c5a8eb26db164738fd9ca->enter($__internal_54ffd767f4c5a1f2ae32cb017276eeb4ffd8127a019c5a8eb26db164738fd9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "
<h1 class=\"coloralert\"><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("pc_admin_adopt_pet");
        echo "\" type=\"button\" class=\"pull-left buttonborder btn btn-default\"> <span class=\"glyphicon glyphicon-hand-left\" aria-hidden=\"true\"></span>&nbsp;regresar</a> &nbsp; editar Información </h1>
<div class=\"sectionstile\">
\t<div class=\"row\">
\t\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
\t\t<div class=\"col-md-3\">
\t\t\t<div>
\t\t\t\t<img class=\"mion img-responsive img-thumbnail\" alt=\"\" name=\"imgmascota\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-9\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t\t<label class=\"marginlabel\">Nombre:</label>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nombre de la mascota")));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t\t<label class=\"marginlabel\">Edad:</label>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "edad de la mascota")));
        echo "
\t\t\t\t</div>
\t\t\t</div><br><!-- div close row form -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t\t<label class=\"marginlabel\">Color:</label>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "colour", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "color de la mascota")));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"textjusti col-md-2\">
\t\t\t\t\t<label class=\"marginlabel\">Sexo:</label>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "¿macho o hembra?")));
        echo "
\t\t\t\t</div>
\t\t\t</div><br><!-- div close row form -->\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-1\">
\t\t\t\t\t<label class=\"marginlabel\">Raza:</label>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "race", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "a que raza pertenece?")));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"textjusti col-md-2\">
\t\t\t\t\t<label class=\"marginlabel\">Vacunado:</label>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isVacunated", array()), 'widget', array("attr" => array("class" => "check checkbox")));
        echo "
\t\t\t\t</div>
\t\t\t</div><br><!-- div close row form -->\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-md-2\">
\t\t\t\t\t<label class=\"marginlabel\">Esterilizado:</label>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isSterilized", array()), 'widget', array("attr" => array("class" => "check checkbox")));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"col-md-5\" style=\"display: none;\">
\t\t\t\t\t";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "species", array()), 'widget', array("attr" => array("class" => "form-control", "value" => "ACTUAL", "disabled" => "disabled", "style" => "display: none;")));
        echo "
\t\t\t\t</div>
\t\t\t\t\t";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Continuar", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t</div>
\t\t\t</div><br>
\t\t</div>
\t\t
\t\t";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
</div><!--div sectionsitile-->
";
        
        $__internal_54ffd767f4c5a1f2ae32cb017276eeb4ffd8127a019c5a8eb26db164738fd9ca->leave($__internal_54ffd767f4c5a1f2ae32cb017276eeb4ffd8127a019c5a8eb26db164738fd9ca_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:masc_adopcion_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 73,  137 => 68,  132 => 66,  124 => 61,  113 => 53,  104 => 47,  93 => 39,  84 => 33,  73 => 25,  64 => 19,  49 => 7,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* */
/* <h1 class="coloralert"><a href="{{ path('pc_admin_adopt_pet')}}" type="button" class="pull-left buttonborder btn btn-default"> <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>&nbsp;regresar</a> &nbsp; editar Información </h1>*/
/* <div class="sectionstile">*/
/* 	<div class="row">*/
/* 		{{ form_start(form, {'attr' : {'role' : 'form'} }) }}*/
/* 		<div class="col-md-3">*/
/* 			<div>*/
/* 				<img class="mion img-responsive img-thumbnail" alt="" name="imgmascota">*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-9">*/
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
/* 			<div class="row">*/
/* 				<div class="textjusti col-md-1">*/
/* 					<label class="marginlabel">Color:</label>*/
/* 				</div>	*/
/* 				<div class="col-md-5">*/
/* 					{{form_widget(form.colour, {'attr' : {'class' : 'form-control', 'placeholder' : 'color de la mascota' } })}}*/
/* 				</div>*/
/* 				<div class="textjusti col-md-2">*/
/* 					<label class="marginlabel">Sexo:</label>*/
/* 				</div>	*/
/* 				<div class="col-md-4">*/
/* 					{{form_widget(form.gender, {'attr' : {'class' : 'form-control', 'placeholder' : '¿macho o hembra?' } })}}*/
/* 				</div>*/
/* 			</div><br><!-- div close row form -->	*/
/* 			<div class="row">*/
/* 				<div class="textjusti col-md-1">*/
/* 					<label class="marginlabel">Raza:</label>*/
/* 				</div>	*/
/* 				<div class="col-md-5">*/
/* 					{{form_widget(form.race, {'attr' : {'class' : 'form-control', 'placeholder' : 'a que raza pertenece?' } })}}*/
/* 				</div>*/
/* 				<div class="textjusti col-md-2">*/
/* 					<label class="marginlabel">Vacunado:</label>*/
/* 				</div>	*/
/* 				<div class="col-md-4">*/
/* 					{{form_widget(form.isVacunated, {'attr' : {'class' : 'check checkbox'} })}}*/
/* 				</div>*/
/* 			</div><br><!-- div close row form -->	*/
/* 			<div class="row">*/
/* 				<div class="textjusti col-md-2">*/
/* 					<label class="marginlabel">Esterilizado:</label>*/
/* 				</div>	*/
/* 				<div class="col-md-4">*/
/* 					{{form_widget(form.isSterilized, {'attr' : {'class' : 'check checkbox'} })}}*/
/* 				</div>*/
/* 				<div class="col-md-2"></div>*/
/* 				<div class="col-md-4">*/
/* 					<div class="col-md-5" style="display: none;">*/
/* 					{{form_widget(form.species, {'attr' : {'class' : 'form-control', 'value' : 'ACTUAL', 'disabled' : 'disabled', 'style' : 'display: none;' } })}}*/
/* 				</div>*/
/* 					{{ form_widget(form.save, {'label' : 'Continuar', 'attr' : {'class' : 'btn btn-success'} }) }}*/
/* 				</div>*/
/* 			</div><br>*/
/* 		</div>*/
/* 		*/
/* 		{{ form_end(form)}}*/
/* 	</div>*/
/* </div><!--div sectionsitile-->*/
/* {% endblock %}*/
