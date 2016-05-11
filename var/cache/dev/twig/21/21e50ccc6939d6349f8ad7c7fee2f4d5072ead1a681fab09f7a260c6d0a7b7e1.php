<?php

/* PCFundationBundle:Admin:donativ_add.html.twig */
class __TwigTemplate_84f4a9c60a0d5237dd02b86369629961618d12fbe389099cf7577c81a265cae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:donativ_add.html.twig", 1);
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
        $__internal_5e5bcf3d9282bb40e5ab8bf49a9414c63a08e239c33bc58301cf4ae360f8df34 = $this->env->getExtension("native_profiler");
        $__internal_5e5bcf3d9282bb40e5ab8bf49a9414c63a08e239c33bc58301cf4ae360f8df34->enter($__internal_5e5bcf3d9282bb40e5ab8bf49a9414c63a08e239c33bc58301cf4ae360f8df34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:donativ_add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e5bcf3d9282bb40e5ab8bf49a9414c63a08e239c33bc58301cf4ae360f8df34->leave($__internal_5e5bcf3d9282bb40e5ab8bf49a9414c63a08e239c33bc58301cf4ae360f8df34_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_d593404d70ca4fc8dbaff4a54c939d046bc3e587171316f34d7728bf08dd9a84 = $this->env->getExtension("native_profiler");
        $__internal_d593404d70ca4fc8dbaff4a54c939d046bc3e587171316f34d7728bf08dd9a84->enter($__internal_d593404d70ca4fc8dbaff4a54c939d046bc3e587171316f34d7728bf08dd9a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "
\t<h1 class=\"coloralert\"><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("pc_admin_donativ");
        echo "\" type=\"button\" class=\"pull-left buttonborder btn btn-default\"> <span class=\"glyphicon glyphicon-hand-left\" aria-hidden=\"true\"></span>&nbsp;regresar</a>&nbsp;Registrar donativo</h1><hr>
\t";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
\t<div class=\"sectionstile\">
\t\t  <div class=\"row\">
        <br>
        <div class=\"textjusti col-xs-3 col-md-2\">
          <label class=\"marginlabel\"  for=\"Edad del adoptante\">Tipo de donación:</label>
        </div>
        <div class=\"col-xs-9 col-md-4\">
          ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "que tipo de donativo es?")));
        echo "
        </div>
      </div>
      
      <div class=\"row\">
      <br>
        <div class=\"col-xs-3 col-md-2 textjusti\">
          <label class=\"marginlabel\"  for=\"EStado de la cirugia\">Cuantia: </label>
        </div>
        <div class=\"col-xs-9 col-md-4\">
          ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "si es dinero el monto y es de otro tipo la cantidad recibida.")));
        echo "
        </div>
        <div class=\"col-xs-3 col-md-2 textjusti\">
          <label class=\"marginlabel\"  for=\"EStado de la cirugia\">Donante: </label>
        </div>
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "donor", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nombre del donante (opcional)")));
        echo "
      </div>
      
      </div>
        <div class=\"row\">
          <br>
          <div class=\"col-xs-3 col-md-2 textjusti\">
            <label class=\"marginlabel\"  for=\"EStado de la cirugia\">Fecha: </label>
          </div>
          ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "receivedAt", array()), 'widget');
        echo "<br>
        </div>
        <div class=\"row\">
          <br>
        <div class=\"textjusti col-xs-3 col-md-2\">
          <label class=\"marginlabel\"  for=\"Edad del adoptante\">Descripción:</label>
        </div>
        <div class=\"col-xs-9 col-md-4\">
          ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "descripción del donativo recibído.")));
        echo "
        </div>
      </div>
\t
\t      <div class=\"col-xs-9 col-md-4\">
          ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Continuar", "attr" => array("class" => "btn btn-success")));
        echo "
        </div>
\t
  ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_d593404d70ca4fc8dbaff4a54c939d046bc3e587171316f34d7728bf08dd9a84->leave($__internal_d593404d70ca4fc8dbaff4a54c939d046bc3e587171316f34d7728bf08dd9a84_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:donativ_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 53,  110 => 50,  102 => 45,  91 => 37,  79 => 28,  71 => 23,  58 => 13,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* */
/* 	<h1 class="coloralert"><a href="{{path('pc_admin_donativ')}}" type="button" class="pull-left buttonborder btn btn-default"> <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>&nbsp;regresar</a>&nbsp;Registrar donativo</h1><hr>*/
/* 	{{ form_start(form, {'attr' : {'role' : 'form'} }) }}*/
/* 	<div class="sectionstile">*/
/* 		  <div class="row">*/
/*         <br>*/
/*         <div class="textjusti col-xs-3 col-md-2">*/
/*           <label class="marginlabel"  for="Edad del adoptante">Tipo de donación:</label>*/
/*         </div>*/
/*         <div class="col-xs-9 col-md-4">*/
/*           {{form_widget(form.type, {'attr' : {'class' : 'form-control', 'placeholder' : 'que tipo de donativo es?' } })}}*/
/*         </div>*/
/*       </div>*/
/*       */
/*       <div class="row">*/
/*       <br>*/
/*         <div class="col-xs-3 col-md-2 textjusti">*/
/*           <label class="marginlabel"  for="EStado de la cirugia">Cuantia: </label>*/
/*         </div>*/
/*         <div class="col-xs-9 col-md-4">*/
/*           {{form_widget(form.quantity, {'attr' : {'class' : 'form-control', 'placeholder' : 'si es dinero el monto y es de otro tipo la cantidad recibida.' } })}}*/
/*         </div>*/
/*         <div class="col-xs-3 col-md-2 textjusti">*/
/*           <label class="marginlabel"  for="EStado de la cirugia">Donante: </label>*/
/*         </div>*/
/*         {{form_widget(form.donor, {'attr' : {'class' : 'form-control', 'placeholder' : 'nombre del donante (opcional)' } })}}*/
/*       </div>*/
/*       */
/*       </div>*/
/*         <div class="row">*/
/*           <br>*/
/*           <div class="col-xs-3 col-md-2 textjusti">*/
/*             <label class="marginlabel"  for="EStado de la cirugia">Fecha: </label>*/
/*           </div>*/
/*           {{ form_widget(form.receivedAt) }}<br>*/
/*         </div>*/
/*         <div class="row">*/
/*           <br>*/
/*         <div class="textjusti col-xs-3 col-md-2">*/
/*           <label class="marginlabel"  for="Edad del adoptante">Descripción:</label>*/
/*         </div>*/
/*         <div class="col-xs-9 col-md-4">*/
/*           {{form_widget(form.description, {'attr' : {'class' : 'form-control', 'placeholder' : 'descripción del donativo recibído.' } })}}*/
/*         </div>*/
/*       </div>*/
/* 	*/
/* 	      <div class="col-xs-9 col-md-4">*/
/*           {{ form_widget(form.save, {'label' : 'Continuar', 'attr' : {'class' : 'btn btn-success'} }) }}*/
/*         </div>*/
/* 	*/
/*   {{ form_end(form) }}*/
/* {% endblock %}*/
