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
        $__internal_3a91500b4fe4a8a6d1631522c265e570dca59f3885570f30b239a780ad3c66c9 = $this->env->getExtension("native_profiler");
        $__internal_3a91500b4fe4a8a6d1631522c265e570dca59f3885570f30b239a780ad3c66c9->enter($__internal_3a91500b4fe4a8a6d1631522c265e570dca59f3885570f30b239a780ad3c66c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:edit_admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a91500b4fe4a8a6d1631522c265e570dca59f3885570f30b239a780ad3c66c9->leave($__internal_3a91500b4fe4a8a6d1631522c265e570dca59f3885570f30b239a780ad3c66c9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8a3a8cbc13268b0da2321e5f4f8175d3fadafa745a86cabc9023648f82022fa = $this->env->getExtension("native_profiler");
        $__internal_e8a3a8cbc13268b0da2321e5f4f8175d3fadafa745a86cabc9023648f82022fa->enter($__internal_e8a3a8cbc13268b0da2321e5f4f8175d3fadafa745a86cabc9023648f82022fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Editar Administrador";
        
        $__internal_e8a3a8cbc13268b0da2321e5f4f8175d3fadafa745a86cabc9023648f82022fa->leave($__internal_e8a3a8cbc13268b0da2321e5f4f8175d3fadafa745a86cabc9023648f82022fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf23fca79c3012ca9d7d879186691e45580b76667895fbd6c56dfc572643aa2e = $this->env->getExtension("native_profiler");
        $__internal_cf23fca79c3012ca9d7d879186691e45580b76667895fbd6c56dfc572643aa2e->enter($__internal_cf23fca79c3012ca9d7d879186691e45580b76667895fbd6c56dfc572643aa2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<header id=\"header\" class=\"backvent\">
\t\t<a><img class=\"img-responsive dimen\"src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/nombre.png"), "html", null, true);
        echo "\"></a>
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
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel textjusti\" for=\"Nombres del adoptante\">Nombres: </label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Nombres del Administrador\"><div  class=\"logaler alert-danger\" id=\"username-error\"></div><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel textjusti\"  for=\"Apellidos del adoptante\">Apellido:</label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input type=\"text\" class=\"form-control\" id=\"last_name\"placeholder=\"Apelidos del Administrador\"><div  class=\"logaler alert-danger\" id=\"last_name-error\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"col-xs-3 col-md-2 textjusti\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Nombre del adoptante\">Edad: </label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input type=\"text\" class=\"form-control\" id=\"age_user\" placeholder=\"Edad del Administrador\"><div  class=\"logaler alert-danger\" id=\"age-error\"></div><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"textjusti col-xs-3 col-md-2\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Edad del adoptante\">Cedula:</label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input  type=\"text\" class=\"form-control\" id=\"ident_car\"placeholder=\"Identificación del Administeador\"><div  class=\"logaler alert-danger\" id=\"id-error\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"col-xs-3 col-md-2 textjusti\">
\t\t\t\t\t<label class=\"marginlabel\"  for=\"Nombre del adoptante\">Email: </label></div>
\t\t\t\t\t<div class=\"col-xs-9 col-md-4\"><input type=\"text\" class=\"form-control\" id=\"age_user\" placeholder=\"ejemplo@dominio.com\"><div  class=\"logaler alert-danger\" id=\"age-error\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-5 col-md-3\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\">Cambiar contraseña »</button>

\t\t\t\t\t\t<div class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
\t\t\t\t\t\t  <div class=\"modal-dialog modal-sm\">
\t\t\t\t\t\t    <div class=\"modal-content\">
\t\t\t\t\t\t      
\t\t\t\t\t\t      <div class=\"timod  modal-header\">
\t\t\t\t\t\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Editar Contraseña<span class=\"btn-lg glyphicon glyphicon-cog\" aria-hidden=\"true\"></span></h5>
\t\t\t\t\t\t      </div>

\t\t\t\t\t\t       <div class=\"modal-body\">
\t\t\t\t\t\t\t        <form>
\t\t\t\t\t\t\t          <div class=\"form-group\">
\t\t\t\t\t\t\t            <label for=\"recipient-name\" class=\"textjusti control-label\">Contraseña actual:</label>
\t\t\t\t\t\t\t            <input type=\"password\" class=\"form-control\" id=\"recipient-name\"
\t\t\t\t\t\t\t            placeholder=\"Contraseña actual\">
\t\t\t\t\t\t\t          </div>
\t\t\t\t\t\t\t          <hr>
\t\t\t\t\t\t\t          <div class=\"form-group\">
\t\t\t\t\t\t\t            <label for=\"recipient-name\" class=\"textjusti control-label\">Nueva contraseña:</label>
\t\t\t\t\t\t\t            <input type=\"password\" class=\"form-control\" id=\"recipient-name\"
\t\t\t\t\t\t\t            placeholder=\"Contraseña nueva\">
\t\t\t\t\t\t\t          </div>
\t\t\t\t\t\t\t          <div class=\"form-group\">
\t\t\t\t\t\t\t            <label for=\"recipient-name\" class=\"textjusti control-label\">Confirmar contraseña :</label>
\t\t\t\t\t\t\t            <input type=\"password\" class=\"form-control\" id=\"recipient-name\"
\t\t\t\t\t\t\t            placeholder=\"Contraseña nueva\">
\t\t\t\t\t\t\t          </div>
\t\t\t\t\t\t\t        </form>
\t\t\t\t\t\t\t      </div>

\t\t\t\t\t\t\t      <div class=\"modal-footer\">
\t\t\t\t\t\t\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
\t\t\t\t\t\t\t        <button type=\"button\" class=\"btn btn-primary\">Guardar cambios</button>
\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t<div class=\"row\"><div class=\"col-md-9\">
\t\t\t\t\t\t\t<p class=\"marginlabel\">! Para poder guardar los cambios efectuados debe validar con su contraseña actual:</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"email_user\" placeholder=\"contraseña\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t<button class=\"btn btn-success\">Guardar cambios  &nbsp;<span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> </button>
\t\t\t</div>\t
\t\t</div>\t
\t\t<div class=\"col-xs-1 col-md-1\"></div>\t
\t</div>
\t</div>

\t
";
        
        $__internal_cf23fca79c3012ca9d7d879186691e45580b76667895fbd6c56dfc572643aa2e->leave($__internal_cf23fca79c3012ca9d7d879186691e45580b76667895fbd6c56dfc572643aa2e_prof);

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
        return array (  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {%block title%}Editar Administrador{% endblock %}*/
/* {% block body %}*/
/* */
/* 	<header id="header" class="backvent">*/
/* 		<a><img class="img-responsive dimen"src="{{ asset('public/img/nombre.png') }}"></a>*/
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
/* 				<div class="form-group">*/
/* 					<div class="row">*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel textjusti" for="Nombres del adoptante">Nombres: </label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input type="text" class="form-control" id="username" placeholder="Nombres del Administrador"><div  class="logaler alert-danger" id="username-error"></div><br>*/
/* 					</div>*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel textjusti"  for="Apellidos del adoptante">Apellido:</label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input type="text" class="form-control" id="last_name"placeholder="Apelidos del Administrador"><div  class="logaler alert-danger" id="last_name-error"></div>*/
/* 					</div>*/
/* 					</div>*/
/* */
/* 					<div class="row">*/
/* 					<br>*/
/* 					<div class="col-xs-3 col-md-2 textjusti">*/
/* 					<label class="marginlabel"  for="Nombre del adoptante">Edad: </label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input type="text" class="form-control" id="age_user" placeholder="Edad del Administrador"><div  class="logaler alert-danger" id="age-error"></div><br>*/
/* 					</div>*/
/* 					<div class="textjusti col-xs-3 col-md-2">*/
/* 					<label class="marginlabel"  for="Edad del adoptante">Cedula:</label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input  type="text" class="form-control" id="ident_car"placeholder="Identificación del Administeador"><div  class="logaler alert-danger" id="id-error"></div>*/
/* 					</div>*/
/* 					</div>*/
/* */
/* 					<div class="row">*/
/* 					<br>*/
/* 					<div class="col-xs-3 col-md-2 textjusti">*/
/* 					<label class="marginlabel"  for="Nombre del adoptante">Email: </label></div>*/
/* 					<div class="col-xs-9 col-md-4"><input type="text" class="form-control" id="age_user" placeholder="ejemplo@dominio.com"><div  class="logaler alert-danger" id="age-error"></div>*/
/* 					</div>*/
/* 					</div>*/
/* 					<hr>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<div class="col-xs-5 col-md-3">*/
/* 						<button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-sm">Cambiar contraseña »</button>*/
/* */
/* 						<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
/* 						  <div class="modal-dialog modal-sm">*/
/* 						    <div class="modal-content">*/
/* 						      */
/* 						      <div class="timod  modal-header">*/
/* 						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>*/
/* 						        <h5 class="modal-title" id="exampleModalLabel">Editar Contraseña<span class="btn-lg glyphicon glyphicon-cog" aria-hidden="true"></span></h5>*/
/* 						      </div>*/
/* */
/* 						       <div class="modal-body">*/
/* 							        <form>*/
/* 							          <div class="form-group">*/
/* 							            <label for="recipient-name" class="textjusti control-label">Contraseña actual:</label>*/
/* 							            <input type="password" class="form-control" id="recipient-name"*/
/* 							            placeholder="Contraseña actual">*/
/* 							          </div>*/
/* 							          <hr>*/
/* 							          <div class="form-group">*/
/* 							            <label for="recipient-name" class="textjusti control-label">Nueva contraseña:</label>*/
/* 							            <input type="password" class="form-control" id="recipient-name"*/
/* 							            placeholder="Contraseña nueva">*/
/* 							          </div>*/
/* 							          <div class="form-group">*/
/* 							            <label for="recipient-name" class="textjusti control-label">Confirmar contraseña :</label>*/
/* 							            <input type="password" class="form-control" id="recipient-name"*/
/* 							            placeholder="Contraseña nueva">*/
/* 							          </div>*/
/* 							        </form>*/
/* 							      </div>*/
/* */
/* 							      <div class="modal-footer">*/
/* 							        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>*/
/* 							        <button type="button" class="btn btn-primary">Guardar cambios</button>*/
/* 							      </div>*/
/* 							</div>*/
/* 						  </div>*/
/* 						</div>*/
/* */
/* */
/* 						</div>*/
/* 					</div>*/
/* 					<br>*/
/* 					<div class="alert alert-warning">*/
/* 						<div class="row"><div class="col-md-9">*/
/* 							<p class="marginlabel">! Para poder guardar los cambios efectuados debe validar con su contraseña actual:</p>*/
/* 						</div>*/
/* 						<div class="col-md-3">*/
/* 							<input type="password" class="form-control" id="email_user" placeholder="contraseña">*/
/* 						</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				<button class="btn btn-success">Guardar cambios  &nbsp;<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </button>*/
/* 			</div>	*/
/* 		</div>	*/
/* 		<div class="col-xs-1 col-md-1"></div>	*/
/* 	</div>*/
/* 	</div>*/
/* */
/* 	*/
/* {% endblock %}*/
