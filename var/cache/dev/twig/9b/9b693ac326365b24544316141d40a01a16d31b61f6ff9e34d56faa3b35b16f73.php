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
        $__internal_94c7824b0db67e7978d2fd044da92a3094129883a1eaac8aeb6e5de7f93de2eb = $this->env->getExtension("native_profiler");
        $__internal_94c7824b0db67e7978d2fd044da92a3094129883a1eaac8aeb6e5de7f93de2eb->enter($__internal_94c7824b0db67e7978d2fd044da92a3094129883a1eaac8aeb6e5de7f93de2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:esteriliza_add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94c7824b0db67e7978d2fd044da92a3094129883a1eaac8aeb6e5de7f93de2eb->leave($__internal_94c7824b0db67e7978d2fd044da92a3094129883a1eaac8aeb6e5de7f93de2eb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ffbdde4226527280d9b7e98a70bfaa6d3bcfa01b5bcad51e3fee06feb539120 = $this->env->getExtension("native_profiler");
        $__internal_5ffbdde4226527280d9b7e98a70bfaa6d3bcfa01b5bcad51e3fee06feb539120->enter($__internal_5ffbdde4226527280d9b7e98a70bfaa6d3bcfa01b5bcad51e3fee06feb539120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "jornada esterilizacion add";
        
        $__internal_5ffbdde4226527280d9b7e98a70bfaa6d3bcfa01b5bcad51e3fee06feb539120->leave($__internal_5ffbdde4226527280d9b7e98a70bfaa6d3bcfa01b5bcad51e3fee06feb539120_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ff6945df1b2dcc234f75f4eef94445426fb639b3c2fa22b8b4e29d17b0dd8af = $this->env->getExtension("native_profiler");
        $__internal_8ff6945df1b2dcc234f75f4eef94445426fb639b3c2fa22b8b4e29d17b0dd8af->enter($__internal_8ff6945df1b2dcc234f75f4eef94445426fb639b3c2fa22b8b4e29d17b0dd8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<div class=\"liner\"></div>
\t<br>
\t<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-1 col-md-1\"></div>\t
\t\t<div class=\"col-xs-10 col-md-10\">
\t\t\t<div class=\"pestile pest\" >
\t\t\t<h5 class=\"margnone\">Nueva jornada de esterilización <span class=\"btn-lg glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></h5>
\t\t\t</div>
\t\t\t<div class=\"conteform\">
\t\t\t\t<br>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel textjusti\" for=\"Zona\">Zona:</label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"zona\"disabled>
\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"col-xs-3 col-md-2 textjusti\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Fecha jornda\">fecha: </label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input type=\"text\" class=\"form-control\" placeholder=\"dd-mm-aaaa\" id=\"fecha1\"><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Costo jornada\">costo:</label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\">
\t\t\t\t\t\t<input  type=\"text\" class=\"form-control\" id=\"ident_car\"placeholder=\"Nombre del responsable\">
\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t<button class=\"buttonborder btn btn-primary\">Crear jornada</button>
\t\t\t</div>\t<!-- div conten-form-->
\t\t</div>\t<!-- div col-->
\t\t<div class=\"col-xs-1 col-md-1\"></div>\t
\t</div>
\t</div>

\t <script src=\"https://code.jquery.com/jquery-latest.js\" type=\"text/javascript\"></script>
\t<script src=\"js/bootstrap.min.js\"  type=\"text/javascript\"></script>
\t<script src=\"js/calendario.js\"type=\"text/javascript\"></script>
\t\t <script src=\"js/functJquery.js\"></script>
";
        
        $__internal_8ff6945df1b2dcc234f75f4eef94445426fb639b3c2fa22b8b4e29d17b0dd8af->leave($__internal_8ff6945df1b2dcc234f75f4eef94445426fb639b3c2fa22b8b4e29d17b0dd8af_prof);

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
        return array (  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {%block title%}jornada esterilizacion add{% endblock %}*/
/* {% block body %}*/
/* */
/* 	<div class="liner"></div>*/
/* 	<br>*/
/* 	<div class="container">*/
/* 	<div class="row">*/
/* 		<div class="col-xs-1 col-md-1"></div>	*/
/* 		<div class="col-xs-10 col-md-10">*/
/* 			<div class="pestile pest" >*/
/* 			<h5 class="margnone">Nueva jornada de esterilización <span class="btn-lg glyphicon glyphicon-edit" aria-hidden="true"></span></h5>*/
/* 			</div>*/
/* 			<div class="conteform">*/
/* 				<br>*/
/* 				<div class="form-group">*/
/* 					<div class="row">*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel textjusti" for="Zona">Zona:</label></div>*/
/* 					<div class="col-xs-9 col-md-4">*/
/* 						<input type="text" class="form-control" id="zona"disabled>*/
/* 					</div>*/
/* 					</div>*/
/* */
/* 					<div class="row">*/
/* 					<br>*/
/* 					<div class="col-xs-3 col-md-2 textjusti">*/
/* 					<label class="marginlabel"  for="Fecha jornda">fecha: </label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input type="text" class="form-control" placeholder="dd-mm-aaaa" id="fecha1"><br>*/
/* 					</div>*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel"  for="Costo jornada">costo:</label></div>*/
/* 					<div class="col-xs-9 col-md-4">*/
/* 						<input  type="text" class="form-control" id="ident_car"placeholder="Nombre del responsable">*/
/* 					<br>*/
/* 					</div>*/
/* 					</div>*/
/* 					<hr>*/
/* 											*/
/* 				<button class="buttonborder btn btn-primary">Crear jornada</button>*/
/* 			</div>	<!-- div conten-form-->*/
/* 		</div>	<!-- div col-->*/
/* 		<div class="col-xs-1 col-md-1"></div>	*/
/* 	</div>*/
/* 	</div>*/
/* */
/* 	 <script src="https://code.jquery.com/jquery-latest.js" type="text/javascript"></script>*/
/* 	<script src="js/bootstrap.min.js"  type="text/javascript"></script>*/
/* 	<script src="js/calendario.js"type="text/javascript"></script>*/
/* 		 <script src="js/functJquery.js"></script>*/
/* {% endblock %}*/
