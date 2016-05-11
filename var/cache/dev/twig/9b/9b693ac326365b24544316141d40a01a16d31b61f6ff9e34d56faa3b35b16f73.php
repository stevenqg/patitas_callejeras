<?php

/* PCFundationBundle:Admin:esteriliza_add.html.twig */
class __TwigTemplate_7b3b592b301768410bcd838f8bd0a57c0a93277311dd761597b969d15ec22571 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:esteriliza_add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCFundationBundle:Admin:admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_101622076906ee6fb3b1e7900822c6c2de4c6126d0e0970c056799e94aaf3879 = $this->env->getExtension("native_profiler");
        $__internal_101622076906ee6fb3b1e7900822c6c2de4c6126d0e0970c056799e94aaf3879->enter($__internal_101622076906ee6fb3b1e7900822c6c2de4c6126d0e0970c056799e94aaf3879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:esteriliza_add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_101622076906ee6fb3b1e7900822c6c2de4c6126d0e0970c056799e94aaf3879->leave($__internal_101622076906ee6fb3b1e7900822c6c2de4c6126d0e0970c056799e94aaf3879_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f94958e67b5cf6496888480e1607363cae5b57e817fb593b2111741a38db5ab = $this->env->getExtension("native_profiler");
        $__internal_1f94958e67b5cf6496888480e1607363cae5b57e817fb593b2111741a38db5ab->enter($__internal_1f94958e67b5cf6496888480e1607363cae5b57e817fb593b2111741a38db5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "jornada esterilizacion add";
        
        $__internal_1f94958e67b5cf6496888480e1607363cae5b57e817fb593b2111741a38db5ab->leave($__internal_1f94958e67b5cf6496888480e1607363cae5b57e817fb593b2111741a38db5ab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25d8587cb863548e1050c0d2aac792b4e5b8ac5f9f2882461762d00756d2599e = $this->env->getExtension("native_profiler");
        $__internal_25d8587cb863548e1050c0d2aac792b4e5b8ac5f9f2882461762d00756d2599e->enter($__internal_25d8587cb863548e1050c0d2aac792b4e5b8ac5f9f2882461762d00756d2599e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<div class=\"liner\"></div>

\t<div class=\"container\">
\t\t<h2 class=\"titulosection\">Nueva jornada de esterilización <span class=\"btn-lg glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></h2>
\t\t<hr>
\t\t<br>
\t\t<div class=\"form-group\">
\t\t\t
\t\t\t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel textjusti\" for=\"Zona\">Zona:</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "value" => $this->getAttribute((isset($context["meeting"]) ? $context["meeting"] : $this->getContext($context, "meeting")), "address", array()), "disabled" => "disabled")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\" style=\"display: none;\">
\t\t\t\t<div class=\"col-xs-9 col-md-4\" style=\"display: none;\">
\t\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "meetingId", array()), 'widget', array("attr" => array("class" => "form-control", "value" => $this->getAttribute((isset($context["meeting"]) ? $context["meeting"] : $this->getContext($context, "meeting")), "id", array()))));
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<br>
\t\t\t\t<div class=\"col-xs-3 col-md-2 textjusti\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Fecha jornda\">Fecha: </label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "control_at", array()), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Costo jornada\">Costo estimado por mascota:</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "amount", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "costo promedio estimado por mascota")));
        echo "
\t\t\t\t\t<br>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr>
\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Continuar", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t
\t\t\t";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_25d8587cb863548e1050c0d2aac792b4e5b8ac5f9f2882461762d00756d2599e->leave($__internal_25d8587cb863548e1050c0d2aac792b4e5b8ac5f9f2882461762d00756d2599e_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:esteriliza_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 47,  111 => 45,  103 => 40,  94 => 34,  81 => 24,  73 => 19,  64 => 13,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {%block title%}jornada esterilizacion add{% endblock %}*/
/* {% block body %}*/
/* */
/* 	<div class="liner"></div>*/
/* */
/* 	<div class="container">*/
/* 		<h2 class="titulosection">Nueva jornada de esterilización <span class="btn-lg glyphicon glyphicon-edit" aria-hidden="true"></span></h2>*/
/* 		<hr>*/
/* 		<br>*/
/* 		<div class="form-group">*/
/* 			*/
/* 			{{ form_start(form, {'attr' : {'role' : 'form'} }) }}*/
/* 			<div class="row">*/
/* 				<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel textjusti" for="Zona">Zona:</label>*/
/* 				</div>*/
/* 				<div class="col-xs-9 col-md-4">*/
/* 					{{form_widget(form.address, {'attr' : {'class' : 'form-control', 'value' : meeting.address, 'disabled' : 'disabled' } })}}*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row" style="display: none;">*/
/* 				<div class="col-xs-9 col-md-4" style="display: none;">*/
/* 					{{form_widget(form.meetingId, {'attr' : {'class' : 'form-control', 'value' : meeting.id } })}}*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<br>*/
/* 				<div class="col-xs-3 col-md-2 textjusti">*/
/* 					<label class="marginlabel"  for="Fecha jornda">Fecha: </label>*/
/* 				</div>*/
/* 				<div class="col-xs-9 col-md-4">*/
/* 					{{form_widget(form.control_at)}}*/
/* 				</div>*/
/* 				<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel"  for="Costo jornada">Costo estimado por mascota:</label>*/
/* 				</div>*/
/* 				<div class="col-xs-9 col-md-4">*/
/* 					{{form_widget(form.amount, {'attr' : {'class' : 'form-control', 'placeholder' : 'costo promedio estimado por mascota' } })}}*/
/* 					<br>*/
/* 				</div>*/
/* 			</div>*/
/* 			<hr>*/
/* 			{{ form_widget(form.save, {'label' : 'Continuar', 'attr' : {'class' : 'btn btn-success'} }) }}*/
/* 			*/
/* 			{{ form_end(form) }}*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
