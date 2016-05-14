<?php

/* PCFundationBundle:Admin:edit_admin.html.twig */
class __TwigTemplate_6009647766709c3b5b47a57fae2591ceb5a3aa090c400572e480dcd894e36560 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:edit_admin.html.twig", 1);
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
        $__internal_02c3273fe2cfa2b4417e7f136b6bc2acbfaab0ce50a02961fd6dbe21c88c33b1 = $this->env->getExtension("native_profiler");
        $__internal_02c3273fe2cfa2b4417e7f136b6bc2acbfaab0ce50a02961fd6dbe21c88c33b1->enter($__internal_02c3273fe2cfa2b4417e7f136b6bc2acbfaab0ce50a02961fd6dbe21c88c33b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:edit_admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02c3273fe2cfa2b4417e7f136b6bc2acbfaab0ce50a02961fd6dbe21c88c33b1->leave($__internal_02c3273fe2cfa2b4417e7f136b6bc2acbfaab0ce50a02961fd6dbe21c88c33b1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_00ceff764f14c0aadecd78dec797209925f5d4c9d8f8842e7c2c43303e1572d5 = $this->env->getExtension("native_profiler");
        $__internal_00ceff764f14c0aadecd78dec797209925f5d4c9d8f8842e7c2c43303e1572d5->enter($__internal_00ceff764f14c0aadecd78dec797209925f5d4c9d8f8842e7c2c43303e1572d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Editar Administrador";
        
        $__internal_00ceff764f14c0aadecd78dec797209925f5d4c9d8f8842e7c2c43303e1572d5->leave($__internal_00ceff764f14c0aadecd78dec797209925f5d4c9d8f8842e7c2c43303e1572d5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bf6e6e952c609a757b2de6266b644bb61945540f2aabf15c129cc5bc72d09dc = $this->env->getExtension("native_profiler");
        $__internal_9bf6e6e952c609a757b2de6266b644bb61945540f2aabf15c129cc5bc72d09dc->enter($__internal_9bf6e6e952c609a757b2de6266b644bb61945540f2aabf15c129cc5bc72d09dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<container class=\"backfont\">
\t<header id=\"header\" class=\"backvent\">
\t\t<a><img class=\"img-responsive dimen\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/nombre.png"), "html", null, true);
        echo "\" ></a>
\t</header>
\t<br>

\t<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-1 col-md-1\"></div>\t
\t\t<div class=\"col-xs-10 col-md-10\">
\t\t\t<div class=\"pestile\" >
\t\t\t<h4 class=\"margnone\">Editar Administrador<span class=\"btn-lg glyphicon glyphicon-user\" aria-hidden=\"true\"></span></h4>
\t\t\t</div>
\t\t\t<div class=\"conteform\">
\t\t\t\t<br>
\t\t\t\t";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t\t\t<label class=\"marginlabel textjusti\" for=\"Nombres del adoptante\">Nombres: </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nombre(s) del administrador")));
        echo "
\t\t\t\t\t\t\t<div  class=\"logaler alert-danger\" id=\"username-error\"></div><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t\t\t<label class=\"marginlabel textjusti\"  for=\"Apellidos del adoptante\">Apellido:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "apellidos del administrador")));
        echo "
\t\t\t\t\t\t\t<div  class=\"logaler alert-danger\" id=\"last_name-error\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"col-xs-3 col-md-2 textjusti\">
\t\t\t\t\t\t\t<label class=\"marginlabel\"  for=\"Nombre del adoptante\">Edad:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "apelidos del administrador")));
        echo "
\t\t\t\t\t\t\t<div  class=\"logaler alert-danger\" id=\"age-error\"></div><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t\t\t<label class=\"marginlabel\"  for=\"Edad del adoptante\">Email:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "ejemplo@dominio.com")));
        echo "
\t\t\t\t\t\t\t<div  class=\"logaler alert-danger\" id=\"id-error\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<br>
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-xs-3 col-md-2 textjusti\">
\t\t\t\t\t\t\t<label class=\"marginlabel\"  for=\"Nombre del adoptante\">Contraseña: </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t<div  class=\"logaler alert-danger\" id=\"age-error\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<br>
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-xs-3 col-md-2 textjusti\">
\t\t\t\t\t\t\t<label class=\"marginlabel\"  for=\"Nombre del adoptante\">Repetir contraseña: </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t<div  class=\"logaler alert-danger\" id=\"age-error\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- 
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t\t\t<label class=\"marginlabel\" for=\"Edad del adoptante\">Confirmar contraseña:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t\t<div  class=\"logaler alert-danger\" id=\"id-error\"></div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t-->
\t\t\t\t\t";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "registrar", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 91
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t<button class=\"btn btn-danger\" onclick=\"window.close();\">regresar al menú principal <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span> </button>
\t\t\t</div>\t
\t\t</div>\t
\t\t<div class=\"col-xs-1 col-md-1\"></div>\t
\t</div>
\t</div>
</container>
";
        
        $__internal_9bf6e6e952c609a757b2de6266b644bb61945540f2aabf15c129cc5bc72d09dc->leave($__internal_9bf6e6e952c609a757b2de6266b644bb61945540f2aabf15c129cc5bc72d09dc_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:edit_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 91,  164 => 89,  147 => 75,  133 => 64,  118 => 52,  108 => 45,  94 => 34,  84 => 27,  74 => 20,  58 => 7,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {%block title%}Editar Administrador{% endblock %}*/
/* {% block body %}*/
/* */
/* <container class="backfont">*/
/* 	<header id="header" class="backvent">*/
/* 		<a><img class="img-responsive dimen" src="{{ asset('public/img/nombre.png') }}" ></a>*/
/* 	</header>*/
/* 	<br>*/
/* */
/* 	<div class="container">*/
/* 	<div class="row">*/
/* 		<div class="col-xs-1 col-md-1"></div>	*/
/* 		<div class="col-xs-10 col-md-10">*/
/* 			<div class="pestile" >*/
/* 			<h4 class="margnone">Editar Administrador<span class="btn-lg glyphicon glyphicon-user" aria-hidden="true"></span></h4>*/
/* 			</div>*/
/* 			<div class="conteform">*/
/* 				<br>*/
/* 				{{ form_start(form, {'attr' : {'role' : 'form'} }) }}*/
/* 				<div class="form-group">*/
/* 					<div class="row">*/
/* 						<div class="textjusti col-xs-3 col-md-2">*/
/* 							<label class="marginlabel textjusti" for="Nombres del adoptante">Nombres: </label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.name, {'attr' : {'class' : 'form-control', 'placeholder' : 'nombre(s) del administrador' } })}}*/
/* 							<div  class="logaler alert-danger" id="username-error"></div><br>*/
/* 						</div>*/
/* 						<div class="textjusti col-xs-3 col-md-2">*/
/* 							<label class="marginlabel textjusti"  for="Apellidos del adoptante">Apellido:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.lastName, {'attr' : {'class' : 'form-control', 'placeholder' : 'apellidos del administrador' } })}}*/
/* 							<div  class="logaler alert-danger" id="last_name-error"></div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="row">*/
/* 					<br>*/
/* 						<div class="col-xs-3 col-md-2 textjusti">*/
/* 							<label class="marginlabel"  for="Nombre del adoptante">Edad:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.age, {'attr' : {'class' : 'form-control', 'placeholder' : 'apelidos del administrador' } })}}*/
/* 							<div  class="logaler alert-danger" id="age-error"></div><br>*/
/* 						</div>*/
/* 						<div class="textjusti col-xs-3 col-md-2">*/
/* 							<label class="marginlabel"  for="Edad del adoptante">Email:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{form_widget(form.email, {'attr' : {'class' : 'form-control', 'placeholder' : 'ejemplo@dominio.com' } })}}*/
/* 							<div  class="logaler alert-danger" id="id-error"></div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="row">*/
/* 					<br>*/
/* 					*/
/* 						<div class="col-xs-3 col-md-2 textjusti">*/
/* 							<label class="marginlabel"  for="Nombre del adoptante">Contraseña: </label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{ form_row(form.password.first, {'attr' : {'class' : 'form-control'} }) }}*/
/* 							<div  class="logaler alert-danger" id="age-error"></div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 					<br>*/
/* 					*/
/* 						<div class="col-xs-3 col-md-2 textjusti">*/
/* 							<label class="marginlabel"  for="Nombre del adoptante">Repetir contraseña: </label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							{{ form_row(form.password.second, {'attr' : {'class' : 'form-control'} } ) }}*/
/* 							<div  class="logaler alert-danger" id="age-error"></div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- */
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 							<label class="marginlabel" for="Edad del adoptante">Confirmar contraseña:</label>*/
/* 						</div>*/
/* 						<div class="col-xs-9 col-md-4">*/
/* 							<div  class="logaler alert-danger" id="id-error"></div>*/
/* 							<br>*/
/* 						</div>*/
/* 					<hr>*/
/* 					-->*/
/* 					{{ form_widget(form.save, {'label' : 'registrar', 'attr' : {'class' : 'btn btn-success'} }) }}*/
/* 				</div>*/
/* 				{{ form_end(form) }}*/
/* 				<button class="btn btn-danger" onclick="window.close();">regresar al menú principal <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> </button>*/
/* 			</div>	*/
/* 		</div>	*/
/* 		<div class="col-xs-1 col-md-1"></div>	*/
/* 	</div>*/
/* 	</div>*/
/* </container>*/
/* {% endblock %}*/
/* */
/* */
