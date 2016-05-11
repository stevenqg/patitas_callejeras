<?php

/* PCFundationBundle:Admin:control_add.html.twig */
class __TwigTemplate_410da71ccccb335d362f18b4577e5455d5832f115c9147666c4058495f038e9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:control_add.html.twig", 1);
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
        $__internal_659666a888575f6577f44133ee94492eecee8ea1e0da4f1f6963ee8d693d5f53 = $this->env->getExtension("native_profiler");
        $__internal_659666a888575f6577f44133ee94492eecee8ea1e0da4f1f6963ee8d693d5f53->enter($__internal_659666a888575f6577f44133ee94492eecee8ea1e0da4f1f6963ee8d693d5f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:control_add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_659666a888575f6577f44133ee94492eecee8ea1e0da4f1f6963ee8d693d5f53->leave($__internal_659666a888575f6577f44133ee94492eecee8ea1e0da4f1f6963ee8d693d5f53_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff724d1856920cf9e0f4ec20d28662070274c85a2153af06434f260de5aef8d9 = $this->env->getExtension("native_profiler");
        $__internal_ff724d1856920cf9e0f4ec20d28662070274c85a2153af06434f260de5aef8d9->enter($__internal_ff724d1856920cf9e0f4ec20d28662070274c85a2153af06434f260de5aef8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"liner\"></div>
\t<br>
\t<div class=\"container\">
\t\t
\t\t<h3 class=\"titulosection margnone\">Control de:</h3>
\t\t<hr>
\t\t";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
\t\t<div class=\"form-group\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<br>
\t\t\t\t<div class=\"col-xs-3 col-md-2 textjusti\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"EStado de la cirugia\">¿se realizó el control a satisfacción? </label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isSatisfactory", array()), 'widget', array("attr" => array("class" => "check checkbox")));
        echo "<br>
\t\t\t\t</div>
\t\t\t\t<br>
\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Edad del adoptante\">comentario:</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "comentarios relacionados al control.")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr>
 \t\t</div>
 \t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Guardar", "attr" => array("class" => "glyphicon glyphicon-saved", "aria-hidden" => "true")));
        echo "
\t\t";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "\t
\t
\t</div>
";
        
        $__internal_ff724d1856920cf9e0f4ec20d28662070274c85a2153af06434f260de5aef8d9->leave($__internal_ff724d1856920cf9e0f4ec20d28662070274c85a2153af06434f260de5aef8d9_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:control_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 31,  78 => 30,  70 => 25,  60 => 18,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block body %}*/
/* 	<div class="liner"></div>*/
/* 	<br>*/
/* 	<div class="container">*/
/* 		*/
/* 		<h3 class="titulosection margnone">Control de:</h3>*/
/* 		<hr>*/
/* 		{{ form_start(form, {'attr' : {'role' : 'form'} }) }}*/
/* 		<div class="form-group">*/
/* 			*/
/* 			<div class="row">*/
/* 				<br>*/
/* 				<div class="col-xs-3 col-md-2 textjusti">*/
/* 					<label class="marginlabel"  for="EStado de la cirugia">¿se realizó el control a satisfacción? </label>*/
/* 				</div>*/
/* 				<div class="col-xs-9 col-md-4">*/
/* 					{{form_widget(form.isSatisfactory, {'attr' : {'class' : 'check checkbox'} })}}<br>*/
/* 				</div>*/
/* 				<br>*/
/* 				<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel"  for="Edad del adoptante">comentario:</label>*/
/* 				</div>*/
/* 				<div class="col-xs-9 col-md-4">*/
/* 					{{form_widget(form.comment, {'attr' : {'class' : 'form-control', 'placeholder' : 'comentarios relacionados al control.' } })}}*/
/* 				</div>*/
/* 			</div>*/
/* 			<hr>*/
/*  		</div>*/
/*  		{{ form_widget(form.save, {'label' : 'Guardar', 'attr' : {'class' : 'glyphicon glyphicon-saved', 'aria-hidden' : 'true' } }) }}*/
/* 		{{ form_end(form) }}	*/
/* 	*/
/* 	</div>*/
/* {% endblock %}*/
