<?php

/* PCFundationBundle:Admin:agregardatos.html.twig */
class __TwigTemplate_475f2ebb5b27651a1b544cd0aedfdfa13cb5cf424e1a659fbb022288e6768d38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:agregardatos.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'capa' => array($this, 'block_capa'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCFundationBundle:Admin:admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_763877fd89de658e68bbee5c7d20188b99543ac2422cc34db4539542d2faa46f = $this->env->getExtension("native_profiler");
        $__internal_763877fd89de658e68bbee5c7d20188b99543ac2422cc34db4539542d2faa46f->enter($__internal_763877fd89de658e68bbee5c7d20188b99543ac2422cc34db4539542d2faa46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:agregardatos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_763877fd89de658e68bbee5c7d20188b99543ac2422cc34db4539542d2faa46f->leave($__internal_763877fd89de658e68bbee5c7d20188b99543ac2422cc34db4539542d2faa46f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b2ecebdcfcace63131e5310724148f6bf8ed9f99cf63ede535e16bbc4e7d9ea = $this->env->getExtension("native_profiler");
        $__internal_0b2ecebdcfcace63131e5310724148f6bf8ed9f99cf63ede535e16bbc4e7d9ea->enter($__internal_0b2ecebdcfcace63131e5310724148f6bf8ed9f99cf63ede535e16bbc4e7d9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "agregar datos jornada de censo";
        
        $__internal_0b2ecebdcfcace63131e5310724148f6bf8ed9f99cf63ede535e16bbc4e7d9ea->leave($__internal_0b2ecebdcfcace63131e5310724148f6bf8ed9f99cf63ede535e16bbc4e7d9ea_prof);

    }

    // line 3
    public function block_capa($context, array $blocks = array())
    {
        $__internal_57322136bbd7e4d899dc01c24df82de152a031088a0097f1ecf1645562de754f = $this->env->getExtension("native_profiler");
        $__internal_57322136bbd7e4d899dc01c24df82de152a031088a0097f1ecf1645562de754f->enter($__internal_57322136bbd7e4d899dc01c24df82de152a031088a0097f1ecf1645562de754f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 4
        echo "

\t
\t\t\t<h2 class=\"coloralert\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("pc_admin_jornada_censo");
        echo "\" type=\"button\" class=\"pull-left buttonborder btn btn-default\"> <span class=\"glyphicon glyphicon-hand-left\" aria-hidden=\"true\"></span>&nbsp;regresar</a> &nbsp;Datos jornada censo<span class=\"btn-lg glyphicon glyphicon-check\" aria-hidden=\"true\"></span></h2>
\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\t
\t\t\t\t<h4 class=\"podingtitle1\">datos del responsable</h4>
\t\t\t\t<div class=\"sectionstile notborad\">
\t\t\t\t";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t<hr class=margnone>
\t\t\t\t<br>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t\t\t<label class=\"marginlabel text-left\" for=\"Nombres del adoptante\">Nombre del acudiente:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nombres del acudiente")));
        echo "
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t\t\t<label class=\"marginlabel textjusti\"  for=\"Apellidos del adoptante\">apellidos:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "apellidos")));
        echo "
\t\t\t\t\t\t\t<div  class=\"logaler alert-danger\" id=\"last_name-error\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"col-xs-3 col-md-2 textjusti\">
\t\t\t\t\t\t\t<label class=\"marginlabel\"  for=\"Nombre del adoptante\">Edad: </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userAge", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "edad")));
        echo "
\t\t\t\t\t\t\t<div  class=\"logaler alert-danger\" id=\"age-error\"></div><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t\t\t<label class=\"marginlabel\"  for=\"Edad del adoptante\">Cédula:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identificationNumber", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "cédula")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t\t\t<label class=\"marginlabel\" for=\"Edad del adoptante\">dirección:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "dirección")));
        echo "
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t\t\t<label for=\"Nombre del adoptante\">Número telefónico: </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone_number", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "teléfono")));
        echo "
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t\t\t<label class=\"marginlabel\" for=\"Edad del adoptante\">correo electrónico:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "correo electrónico")));
        echo "
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<h4 class=\"podingtitle1\">datos de la mascota</h4>
\t\t\t\t\t<div class=\"sectionstile notborad\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t\t\t<label class=\"marginlabel\" for=\"Edad del adoptante\">Nombre:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "petName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nombre mascota")));
        echo "
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t\t\t<label for=\"Nombre del adoptante\">Edad: </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "petAge", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "edad")));
        echo "
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t\t\t<label class=\"marginlabel\" for=\"Edad del adoptante\">Especie:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "species", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "seleccione la especie")));
        echo "
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t\t\t<label for=\"Nombre del adoptante\">raza: </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "race", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "raza de la mascota")));
        echo "
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t\t\t<label class=\"marginlabel\" for=\"Edad del adoptante\">Color:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "colour", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "color")));
        echo "
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t\t\t<label for=\"Nombre del adoptante\">género: </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "seleccione el género")));
        echo "
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t\t\t<label class=\"marginlabel\" for=\"Edad del adoptante\">¿está vacunada?:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isVacunated", array()), 'widget', array("attr" => array("class" => "check checkbox")));
        echo "
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t\t\t<label for=\"Nombre del adoptante\">¿está esterilizada?: </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isSterilized", array()), 'widget', array("attr" => array("class" => "check checkbox")));
        echo "
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t\t\t<label class=\"marginlabel\" for=\"Edad del adoptante\">¿es callejera?:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isStray", array()), 'widget', array("attr" => array("class" => "check checkbox")));
        echo "
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t\t\t<label class=\"marginlabel\" for=\"Edad del adoptante\">¿necesita cirugía?:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isNeedSurgery", array()), 'widget', array("attr" => array("class" => "check checkbox")));
        echo "
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\" style=\"display:none;\">
\t\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\" style=\"display: none;\">
\t\t\t\t\t\t\t<label for=\"Nombre del adoptante\" style=\"display: none;\">id de la jornada: </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\" style=\"display:none;\">
\t\t\t\t\t\t\t";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "meetingId", array()), 'widget', array("attr" => array("class" => "check checkbox", "value" => (isset($context["meetingId"]) ? $context["meetingId"] : $this->getContext($context, "meetingId")))));
        echo "
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Continuar", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t\t
\t\t\t\t";
        // line 176
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t
";
        
        $__internal_57322136bbd7e4d899dc01c24df82de152a031088a0097f1ecf1645562de754f->leave($__internal_57322136bbd7e4d899dc01c24df82de152a031088a0097f1ecf1645562de754f_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:agregardatos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 176,  285 => 174,  274 => 166,  262 => 157,  252 => 150,  240 => 141,  230 => 134,  218 => 125,  208 => 118,  196 => 109,  186 => 102,  174 => 93,  164 => 86,  146 => 71,  134 => 62,  124 => 55,  113 => 47,  103 => 40,  90 => 30,  80 => 23,  68 => 14,  58 => 7,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {%block title%}agregar datos jornada de censo{% endblock %}*/
/* {% block capa %}*/
/* */
/* */
/* 	*/
/* 			<h2 class="coloralert"><a href="{{ path('pc_admin_jornada_censo')}}" type="button" class="pull-left buttonborder btn btn-default"> <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>&nbsp;regresar</a> &nbsp;Datos jornada censo<span class="btn-lg glyphicon glyphicon-check" aria-hidden="true"></span></h2>*/
/* 			*/
/* 				*/
/* 				*/
/* 					*/
/* 				<h4 class="podingtitle1">datos del responsable</h4>*/
/* 				<div class="sectionstile notborad">*/
/* 				{{ form_start(form) }}*/
/* 				<hr class=margnone>*/
/* 				<br>*/
/* 				<div class="form-group">*/
/* 					<div class="row">*/
/* 						<div class="textjusti col-xs-3 col-md-2">*/
/* 							<label class="marginlabel text-left" for="Nombres del adoptante">Nombre del acudiente:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.userName, {'attr' : {'class' : 'form-control', 'placeholder' : 'nombres del acudiente' } })}}*/
/* 							<br>*/
/* 						</div>*/
/* 						<div class="textjusti col-xs-3 col-md-2">*/
/* 							<label class="marginlabel textjusti"  for="Apellidos del adoptante">apellidos:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.lastName, {'attr' : {'class' : 'form-control', 'placeholder' : 'apellidos' } })}}*/
/* 							<div  class="logaler alert-danger" id="last_name-error"></div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 					<br>*/
/* 						<div class="col-xs-3 col-md-2 textjusti">*/
/* 							<label class="marginlabel"  for="Nombre del adoptante">Edad: </label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.userAge, {'attr' : {'class' : 'form-control', 'placeholder' : 'edad' } })}}*/
/* 							<div  class="logaler alert-danger" id="age-error"></div><br>*/
/* 						</div>*/
/* 						<div class="textjusti col-xs-3 col-md-2">*/
/* 							<label class="marginlabel"  for="Edad del adoptante">Cédula:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.identificationNumber, {'attr' : {'class' : 'form-control', 'placeholder' : 'cédula' } })}}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<div class="textjusti col-xs-3 col-md-2">*/
/* 							<label class="marginlabel" for="Edad del adoptante">dirección:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.address, {'attr' : {'class' : 'form-control', 'placeholder' : 'dirección' } })}}*/
/* 							<br>*/
/* 						</div>*/
/* 						<div class="textjusti col-xs-3 col-md-2">*/
/* 							<label for="Nombre del adoptante">Número telefónico: </label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.phone_number, {'attr' : {'class' : 'form-control', 'placeholder' : 'teléfono' } })}}*/
/* 							<br>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<div class="textjusti col-xs-3 col-md-2">*/
/* 							<label class="marginlabel" for="Edad del adoptante">correo electrónico:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.email, {'attr' : {'class' : 'form-control', 'placeholder' : 'correo electrónico' } })}}*/
/* 							<br>*/
/* 						</div>*/
/* 					</div>*/
/* 					</div>*/
/* 					</div>*/
/* 					<h4 class="podingtitle1">datos de la mascota</h4>*/
/* 					<div class="sectionstile notborad">*/
/* 					*/
/* 					<div class="form-group">*/
/* 					<div class="row">*/
/* 						<div class="textjusti col-xs-3 col-md-2">*/
/* 							<label class="marginlabel" for="Edad del adoptante">Nombre:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.petName, {'attr' : {'class' : 'form-control', 'placeholder' : 'nombre mascota' } })}}*/
/* 							<br>*/
/* 						</div>*/
/* 						<div class="textjusti col-xs-3 col-md-2">*/
/* 							<label for="Nombre del adoptante">Edad: </label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.petAge, {'attr' : {'class' : 'form-control', 'placeholder' : 'edad' } })}}*/
/* 							<br>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<div class="textjusti col-xs-3 col-md-2">*/
/* 							<label class="marginlabel" for="Edad del adoptante">Especie:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.species, {'attr' : {'class' : 'form-control', 'placeholder' : 'seleccione la especie' } })}}*/
/* 							<br>*/
/* 						</div>*/
/* 						<div class="textjusti col-xs-3 col-md-2">*/
/* 							<label for="Nombre del adoptante">raza: </label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.race, {'attr' : {'class' : 'form-control', 'placeholder' : 'raza de la mascota' } })}}*/
/* 							<br>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<div class="textjusti col-xs-3 col-md-2">*/
/* 							<label class="marginlabel" for="Edad del adoptante">Color:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.colour, {'attr' : {'class' : 'form-control', 'placeholder' : 'color' } })}}*/
/* 							<br>*/
/* 						</div>*/
/* 						<div class="textjusti col-xs-3 col-md-2">*/
/* 							<label for="Nombre del adoptante">género: </label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.gender, {'attr' : {'class' : 'form-control', 'placeholder' : 'seleccione el género' } })}}*/
/* 							<br>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<div class="textjusti col-xs-3 col-md-2">*/
/* 							<label class="marginlabel" for="Edad del adoptante">¿está vacunada?:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.isVacunated, {'attr' : {'class' : 'check checkbox'} })}}*/
/* 							<br>*/
/* 						</div>*/
/* 						<div class="textjusti col-xs-3 col-md-2">*/
/* 							<label for="Nombre del adoptante">¿está esterilizada?: </label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.isSterilized, {'attr' : {'class' : 'check checkbox'} })}}*/
/* 							<br>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<div class="textjusti col-xs-3 col-md-2">*/
/* 							<label class="marginlabel" for="Edad del adoptante">¿es callejera?:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.isStray, {'attr' : {'class' : 'check checkbox'} })}}*/
/* 							<br>*/
/* 						</div>*/
/* 						<div class="textjusti col-xs-3 col-md-2">*/
/* 							<label class="marginlabel" for="Edad del adoptante">¿necesita cirugía?:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.isNeedSurgery, {'attr' : {'class' : 'check checkbox'} })}}*/
/* 							<br>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="row" style="display:none;">*/
/* 						<div class="textjusti col-xs-3 col-md-2" style="display: none;">*/
/* 							<label for="Nombre del adoptante" style="display: none;">id de la jornada: </label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4" style="display:none;">*/
/* 							{{form_widget(form.meetingId, {'attr' : {'class' : 'check checkbox', 'value' : meetingId } })}}*/
/* 							<br>*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 				</div>*/
/* 				{{ form_widget(form.save, {'label' : 'Continuar', 'attr' : {'class' : 'btn btn-success'} }) }}*/
/* 					*/
/* 				{{ form_end(form) }}*/
/* 				*/
/* {% endblock%}*/
/* */
