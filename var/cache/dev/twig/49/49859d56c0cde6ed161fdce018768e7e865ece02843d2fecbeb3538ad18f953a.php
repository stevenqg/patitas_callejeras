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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCFundationBundle:Admin:admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_534a0327712faa6484d4e1e2e1426b91eafd1167e66cdf3cfdb2d0b30a507e8d = $this->env->getExtension("native_profiler");
        $__internal_534a0327712faa6484d4e1e2e1426b91eafd1167e66cdf3cfdb2d0b30a507e8d->enter($__internal_534a0327712faa6484d4e1e2e1426b91eafd1167e66cdf3cfdb2d0b30a507e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:nuevocenso.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_534a0327712faa6484d4e1e2e1426b91eafd1167e66cdf3cfdb2d0b30a507e8d->leave($__internal_534a0327712faa6484d4e1e2e1426b91eafd1167e66cdf3cfdb2d0b30a507e8d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_afaf9949cd8d31b8718b60f800588da73b598f148b88305bad3d44752a025cbc = $this->env->getExtension("native_profiler");
        $__internal_afaf9949cd8d31b8718b60f800588da73b598f148b88305bad3d44752a025cbc->enter($__internal_afaf9949cd8d31b8718b60f800588da73b598f148b88305bad3d44752a025cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
\t<div class=\"liner\"></div>
\t<br>
\t<div class=\"container\">
\t\t
\t\t<h1 class=\"coloralert\">&nbsp; Crear nuevo censo </h1>
\t\t<hr>
\t\t";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
\t\t\t<div class=\"row\">
\t\t\t
\t\t\t\t<div class=\"col-xs-3 col-md-2 textjusti\">
\t\t\t\t\t<label class=\"textjusti\"><h5>Zona:</h5></label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "dirección o lugar de la jornada")));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"textjusti\" for=\"Fecha\"><h5>Fecha:</h5></label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "createdAt", array()), 'widget', array("attr" => array("id" => "fecha1")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\" style=\"display: none;\">
\t\t\t\t<div class=\"col-xs-3 col-md-2 textjusti\" style=\"display: none;\">
\t\t\t\t\t<label for=\"Fecha\" style=\"display: none;\"><h5 style=\"display: none;\">tipo de jornada:</h5></label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-9 col-md-4\" style=\"display: none;\">
\t\t\t\t ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "meetingType", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "tipo de jornada", "value" => "CENSUS", "style" => "display: none;")));
        echo "
\t\t\t\t</div>
\t\t\t\t</div><hr>
\t\t\t\t
\t\t\t</div><br> <!-- div close row-->
\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "registrar", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t
\t\t
\t</div>
\t
";
        
        $__internal_afaf9949cd8d31b8718b60f800588da73b598f148b88305bad3d44752a025cbc->leave($__internal_afaf9949cd8d31b8718b60f800588da73b598f148b88305bad3d44752a025cbc_prof);

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
        return array (  91 => 37,  87 => 36,  79 => 31,  68 => 23,  59 => 17,  49 => 10,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block body %}*/
/* */
/* 	<div class="liner"></div>*/
/* 	<br>*/
/* 	<div class="container">*/
/* 		*/
/* 		<h1 class="coloralert">&nbsp; Crear nuevo censo </h1>*/
/* 		<hr>*/
/* 		{{ form_start(form, {'attr' : {'role' : 'form'} }) }}*/
/* 			<div class="row">*/
/* 			*/
/* 				<div class="col-xs-3 col-md-2 textjusti">*/
/* 					<label class="textjusti"><h5>Zona:</h5></label>*/
/* 				</div>*/
/* 				<div class="col-xs-9 col-md-4">*/
/* 					{{form_widget(form.address, {'attr' : {'class' : 'form-control', 'placeholder' : 'dirección o lugar de la jornada' } })}}*/
/* 				</div>*/
/* 				<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="textjusti" for="Fecha"><h5>Fecha:</h5></label>*/
/* 				</div>*/
/* 				<div class="col-xs-9 col-md-4">*/
/* 				 {{form_widget(form.createdAt, {'attr': {'id': 'fecha1' } })}}*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row" style="display: none;">*/
/* 				<div class="col-xs-3 col-md-2 textjusti" style="display: none;">*/
/* 					<label for="Fecha" style="display: none;"><h5 style="display: none;">tipo de jornada:</h5></label>*/
/* 				</div>*/
/* 				<div class="col-xs-9 col-md-4" style="display: none;">*/
/* 				 {{form_widget(form.meetingType, {'attr' : {'class' : 'form-control', 'placeholder' : 'tipo de jornada', 'value' : 'CENSUS', "style" : "display: none;" } })}}*/
/* 				</div>*/
/* 				</div><hr>*/
/* 				*/
/* 			</div><br> <!-- div close row-->*/
/* 			{{ form_widget(form.save, {'label' : 'registrar', 'attr' : {'class' : 'btn btn-success'} }) }}*/
/* 			{{ form_end(form) }}*/
/* 		*/
/* 		*/
/* 	</div>*/
/* 	*/
/* {% endblock %}*/
/* */
