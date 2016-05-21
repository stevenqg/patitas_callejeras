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
        $__internal_cf5c8342f88dd08a5fa8acaadbfbcd2f54aa44ce866831fc581af0316307a031 = $this->env->getExtension("native_profiler");
        $__internal_cf5c8342f88dd08a5fa8acaadbfbcd2f54aa44ce866831fc581af0316307a031->enter($__internal_cf5c8342f88dd08a5fa8acaadbfbcd2f54aa44ce866831fc581af0316307a031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:control_add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf5c8342f88dd08a5fa8acaadbfbcd2f54aa44ce866831fc581af0316307a031->leave($__internal_cf5c8342f88dd08a5fa8acaadbfbcd2f54aa44ce866831fc581af0316307a031_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_47c00f7f880b11a12feed64c874636e6c830e68fd5f2190829e41ce7a1565349 = $this->env->getExtension("native_profiler");
        $__internal_47c00f7f880b11a12feed64c874636e6c830e68fd5f2190829e41ce7a1565349->enter($__internal_47c00f7f880b11a12feed64c874636e6c830e68fd5f2190829e41ce7a1565349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t<label class=\"marginlabel\"  for=\"EStado de la cirugia\">¿satisforio? </label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isSatisfactory", array()), 'widget', array("attr" => array("class" => "check checkbox")));
        echo "<br>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<br>
\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Edad del adoptante\">comentario:</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "comentarios relacionados al control.")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr>
 \t\t</div>
 \t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Guardar", "attr" => array("class" => "glyphicon glyphicon-saved btn btn-primary", "aria-hidden" => "true")));
        echo "
\t\t";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "\t
\t
\t</div>
";
        
        $__internal_47c00f7f880b11a12feed64c874636e6c830e68fd5f2190829e41ce7a1565349->leave($__internal_47c00f7f880b11a12feed64c874636e6c830e68fd5f2190829e41ce7a1565349_prof);

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
        return array (  84 => 33,  80 => 32,  72 => 27,  60 => 18,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
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
/* 					<label class="marginlabel"  for="EStado de la cirugia">¿satisforio? </label>*/
/* 				</div>*/
/* 				<div class="col-xs-9 col-md-4">*/
/* 					{{form_widget(form.isSatisfactory, {'attr' : {'class' : 'check checkbox'} })}}<br>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row">*/
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
/*  		{{ form_widget(form.save, {'label' : 'Guardar', 'attr' : {'class' : 'glyphicon glyphicon-saved btn btn-primary', 'aria-hidden' : 'true' } }) }}*/
/* 		{{ form_end(form) }}	*/
/* 	*/
/* 	</div>*/
/* {% endblock %}*/
