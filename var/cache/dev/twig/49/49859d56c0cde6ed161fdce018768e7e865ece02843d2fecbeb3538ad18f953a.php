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
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCFundationBundle:Admin:admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7407501baf3339eafdf6bccd1f8cea5f67410cb1e0350d80e0de7091eb9ac35 = $this->env->getExtension("native_profiler");
        $__internal_a7407501baf3339eafdf6bccd1f8cea5f67410cb1e0350d80e0de7091eb9ac35->enter($__internal_a7407501baf3339eafdf6bccd1f8cea5f67410cb1e0350d80e0de7091eb9ac35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:nuevocenso.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7407501baf3339eafdf6bccd1f8cea5f67410cb1e0350d80e0de7091eb9ac35->leave($__internal_a7407501baf3339eafdf6bccd1f8cea5f67410cb1e0350d80e0de7091eb9ac35_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_38869e45fc4e4827b28da064d0c4574b5f4ddf0837f52396c71e477107078515 = $this->env->getExtension("native_profiler");
        $__internal_38869e45fc4e4827b28da064d0c4574b5f4ddf0837f52396c71e477107078515->enter($__internal_38869e45fc4e4827b28da064d0c4574b5f4ddf0837f52396c71e477107078515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "<div>
\t\t
\t\t
\t\t<h1 class=\"coloralert\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("pc_admin_jornada_censo");
        echo "\" type=\"button\" class=\" buttonborder btn btn-default\"> <span class=\"glyphicon glyphicon-hand-left\" aria-hidden=\"true\"></span>&nbsp;regresar</a>&nbsp; Crear nuevo censo </h1>
\t\t<div class=\"sectionstile\"><br>
\t\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
\t\t\t<div class=\"row\">
\t\t\t
\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t<label ><h5>Zona:</h5></label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "dirección o lugar de la jornada")));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t<label for=\"Fecha\"><h5>Fecha:</h5></label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "createdAt", array()), 'widget', array("attr" => array("id" => "fecha1")));
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
\t\t\t\t</div> <br>
\t\t\t\t
\t\t\t</div><br> <!-- div close row-->
\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "registrar", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div><!-- div close section estile-->
\t\t
\t</div>
";
        
        $__internal_38869e45fc4e4827b28da064d0c4574b5f4ddf0837f52396c71e477107078515->leave($__internal_38869e45fc4e4827b28da064d0c4574b5f4ddf0837f52396c71e477107078515_prof);

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
        return array (  89 => 32,  85 => 31,  78 => 27,  69 => 21,  60 => 15,  50 => 8,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* <div>*/
/* 		*/
/* 		*/
/* 		<h1 class="coloralert"><a href="{{ path('pc_admin_jornada_censo')}}" type="button" class=" buttonborder btn btn-default"> <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>&nbsp;regresar</a>&nbsp; Crear nuevo censo </h1>*/
/* 		<div class="sectionstile"><br>*/
/* 		{{ form_start(form, {'attr' : {'role' : 'form'} }) }}*/
/* 			<div class="row">*/
/* 			*/
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
/* 				 {{form_widget(form.createdAt, {'attr' : {'id': 'fecha1' } })}}*/
/* 				</div>*/
/* 				<div class="col-md-1">*/
/* 					<label for="Fecha"><h5>tipo de jornada:</h5></label>*/
/* 				</div>*/
/* 				<div class="col-md-5">*/
/* 				 {{form_widget(form.meetingType, {'attr' : {'class' : 'form-control', 'placeholder' : 'tipo de jornada' } })}}*/
/* 				</div> <br>*/
/* 				*/
/* 			</div><br> <!-- div close row-->*/
/* 			{{ form_widget(form.save, {'label' : 'registrar', 'attr' : {'class' : 'btn btn-success'} }) }}*/
/* 			{{ form_end(form) }}*/
/* 		</div><!-- div close section estile-->*/
/* 		*/
/* 	</div>*/
/* {% endblock %}*/
/* */
