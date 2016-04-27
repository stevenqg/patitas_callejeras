<?php

/* PCFundationBundle:Admin:esterilizacio.html.twig */
class __TwigTemplate_d6bf5880751fdb0ed1a326deb7daa510d542e5d3567b01d0ba09f37118e77292 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:esterilizacio.html.twig", 1);
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
        $__internal_7640503b3e3e2187d27da79e9ff1e2956f8d4bbc727a49856057b5ebab3d3bee = $this->env->getExtension("native_profiler");
        $__internal_7640503b3e3e2187d27da79e9ff1e2956f8d4bbc727a49856057b5ebab3d3bee->enter($__internal_7640503b3e3e2187d27da79e9ff1e2956f8d4bbc727a49856057b5ebab3d3bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:esterilizacio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7640503b3e3e2187d27da79e9ff1e2956f8d4bbc727a49856057b5ebab3d3bee->leave($__internal_7640503b3e3e2187d27da79e9ff1e2956f8d4bbc727a49856057b5ebab3d3bee_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_5e45ca490150a34e61cfdfc07c25d0007a4d2fcaa474011afd31af96153c62cd = $this->env->getExtension("native_profiler");
        $__internal_5e45ca490150a34e61cfdfc07c25d0007a4d2fcaa474011afd31af96153c62cd->enter($__internal_5e45ca490150a34e61cfdfc07c25d0007a4d2fcaa474011afd31af96153c62cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "
\t<h1 class=\"coloralert textjusti\">&nbsp;Esterilización</h1><hr>
\t<div class=\"sectionstile\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t<label class=\"marginlabel\">Zona:</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Jornada censo\" disabled>
\t\t\t</div>
\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t<label class=\"marginlabel\">Fecha:</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"dd-mm-aaaa\" disabled>
\t\t\t</div>
\t\t\t<div class=\"col-md-1\"><label class=\"marginlabel\">Costo \$:</label></div>
\t\t\t<div class=\"col-md-3\"><input type=\"text\" class=\"form-control\"></div>

\t\t</div>
\t\t<hr>
            
           <table class=\"tabl table-striped\">
              <thead>
                <tr><td class=\"pestwo\" colspan=\"3\">información del Animal</td>
                  <td colspan=\"2\"></td>
                  <td  class=\"pestwo\" colspan=\"3\">informacion responsable</td>
                </tr>
                <tr class=\"tdb\">
                 
                  <th>Clasificación</th>
                  <th>Rasgo</th>
                  <th>Color</th>
                  <th class=\"tdxs\">Edad</th>
                  <th class=\"tdxs\">¿cirugia?</th>
                 
                  <th class=\"bdleft\">Nombre</th>
                  <th>Telefono</th>
                  <th class=\"tdxs\">Mas</th>
                </tr>
              </thead>
              <tbody class=\"tdb\">
                <tr>
                 
                  <td>gato</td>
                  <td class=\"tdd\">crio</td>
                  <td>negro</td>
                  <td>1</td>
                  <td>no</td>
                  
                  <td class=\"bdleft\">juan</td>
                  <td>3122345678</td>
                  <td><a href=\"\" data-toggle=\"modal\" data-target=\"#myModa2\">&nbsp;<span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></a>

                    <div class=\"modal fade bs-example-modal-sm\" id=\"myModa2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
              <div class=\"modal-dialog modal-sm\">
                <div class=\"modal-content\">
                  
                  <div class=\"timod modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"></button>
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Información de responsable<span class=\"btn-lg glyphicon glyphicon-user\" aria-hidden=\"true\"></span></h5>
                  </div>

                   <div class=\"modal-body\">
                      <form>
                        <div class=\"form-group\">
                          <label for=\"recipient-name\" class=\"textjusti control-label\">Nombre:</label>
                          <input type=\"password\" class=\"form-control\" id=\"recipient-name\"
                          placeholder=\"Nombre\"disabled>
                        </div>

                        <div class=\"form-group\">
                          <label for=\"recipient-name\" class=\"textjusti control-label\">Edad:</label>
                          <input type=\"password\" class=\"form-control\" id=\"recipient-name\"
                          placeholder=\"Edad\"disabled>
                        </div>
                        <div class=\"form-group\">
                          <label for=\"recipient-name\" class=\"textjusti control-label\">Dirección:</label>
                          <input type=\"password\" class=\"form-control\" id=\"recipient-name\"
                          placeholder=\"Dirección\"disabled>
                        </div>

                        <div class=\"form-group\">
                          <label for=\"recipient-name\" class=\"textjusti control-label\">Telefono:</label>
                          <input type=\"password\" class=\"form-control\" id=\"recipient-name\"
                          placeholder=\"Telefono\"disabled>
                        </div>
                      </form>
                    </div>

                    <div class=\"modal-footer\">
                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                    </div>
              </div>
              </div>
            </div>

                  </td>
                </tr>
              </tbody>
            </table>
\t</div>

\t
\t\t<script src=\"https://code.jquery.com/jquery-latest.js\" type=\"text/javascript\"></script>
\t  \t<script src=\"js/bootstrap.min.js\"type=\"text/javascript\"></script>\t
";
        
        $__internal_5e45ca490150a34e61cfdfc07c25d0007a4d2fcaa474011afd31af96153c62cd->leave($__internal_5e45ca490150a34e61cfdfc07c25d0007a4d2fcaa474011afd31af96153c62cd_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:esterilizacio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* */
/* 	<h1 class="coloralert textjusti">&nbsp;Esterilización</h1><hr>*/
/* 	<div class="sectionstile">*/
/* 		<div class="row">*/
/* 			<div class="col-md-1">*/
/* 					<label class="marginlabel">Zona:</label>*/
/* 			</div>*/
/* 			<div class="col-md-3">*/
/* 				<input type="text" class="form-control" placeholder="Jornada censo" disabled>*/
/* 			</div>*/
/* 			<div class="col-md-1">*/
/* 					<label class="marginlabel">Fecha:</label>*/
/* 			</div>*/
/* 			<div class="col-md-3">*/
/* 				<input type="text" class="form-control" placeholder="dd-mm-aaaa" disabled>*/
/* 			</div>*/
/* 			<div class="col-md-1"><label class="marginlabel">Costo $:</label></div>*/
/* 			<div class="col-md-3"><input type="text" class="form-control"></div>*/
/* */
/* 		</div>*/
/* 		<hr>*/
/*             */
/*            <table class="tabl table-striped">*/
/*               <thead>*/
/*                 <tr><td class="pestwo" colspan="3">información del Animal</td>*/
/*                   <td colspan="2"></td>*/
/*                   <td  class="pestwo" colspan="3">informacion responsable</td>*/
/*                 </tr>*/
/*                 <tr class="tdb">*/
/*                  */
/*                   <th>Clasificación</th>*/
/*                   <th>Rasgo</th>*/
/*                   <th>Color</th>*/
/*                   <th class="tdxs">Edad</th>*/
/*                   <th class="tdxs">¿cirugia?</th>*/
/*                  */
/*                   <th class="bdleft">Nombre</th>*/
/*                   <th>Telefono</th>*/
/*                   <th class="tdxs">Mas</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody class="tdb">*/
/*                 <tr>*/
/*                  */
/*                   <td>gato</td>*/
/*                   <td class="tdd">crio</td>*/
/*                   <td>negro</td>*/
/*                   <td>1</td>*/
/*                   <td>no</td>*/
/*                   */
/*                   <td class="bdleft">juan</td>*/
/*                   <td>3122345678</td>*/
/*                   <td><a href="" data-toggle="modal" data-target="#myModa2">&nbsp;<span class="glyphicon glyphicon-plus" aria-hidden="true"></a>*/
/* */
/*                     <div class="modal fade bs-example-modal-sm" id="myModa2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
/*               <div class="modal-dialog modal-sm">*/
/*                 <div class="modal-content">*/
/*                   */
/*                   <div class="timod modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>*/
/*                     <h5 class="modal-title" id="exampleModalLabel">Información de responsable<span class="btn-lg glyphicon glyphicon-user" aria-hidden="true"></span></h5>*/
/*                   </div>*/
/* */
/*                    <div class="modal-body">*/
/*                       <form>*/
/*                         <div class="form-group">*/
/*                           <label for="recipient-name" class="textjusti control-label">Nombre:</label>*/
/*                           <input type="password" class="form-control" id="recipient-name"*/
/*                           placeholder="Nombre"disabled>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                           <label for="recipient-name" class="textjusti control-label">Edad:</label>*/
/*                           <input type="password" class="form-control" id="recipient-name"*/
/*                           placeholder="Edad"disabled>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                           <label for="recipient-name" class="textjusti control-label">Dirección:</label>*/
/*                           <input type="password" class="form-control" id="recipient-name"*/
/*                           placeholder="Dirección"disabled>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                           <label for="recipient-name" class="textjusti control-label">Telefono:</label>*/
/*                           <input type="password" class="form-control" id="recipient-name"*/
/*                           placeholder="Telefono"disabled>*/
/*                         </div>*/
/*                       </form>*/
/*                     </div>*/
/* */
/*                     <div class="modal-footer">*/
/*                       <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>*/
/*                     </div>*/
/*               </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*                   </td>*/
/*                 </tr>*/
/*               </tbody>*/
/*             </table>*/
/* 	</div>*/
/* */
/* 	*/
/* 		<script src="https://code.jquery.com/jquery-latest.js" type="text/javascript"></script>*/
/* 	  	<script src="js/bootstrap.min.js"type="text/javascript"></script>	*/
/* {% endblock %}*/
