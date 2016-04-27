<?php

/* PCFundationBundle:Admin:censo.html.twig */
class __TwigTemplate_286862f56247ab3edfd89bc10c6382fd54e6c5185d2da0a3c5424339e261f45a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:censo.html.twig", 1);
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
        $__internal_7629a0c6e8061255094e74330b2805fae8470f942f606354162f4867e589e49b = $this->env->getExtension("native_profiler");
        $__internal_7629a0c6e8061255094e74330b2805fae8470f942f606354162f4867e589e49b->enter($__internal_7629a0c6e8061255094e74330b2805fae8470f942f606354162f4867e589e49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:censo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7629a0c6e8061255094e74330b2805fae8470f942f606354162f4867e589e49b->leave($__internal_7629a0c6e8061255094e74330b2805fae8470f942f606354162f4867e589e49b_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_856529b4dd6e978af5e451f7caea64b178a86588c873ceaf95099217e971abda = $this->env->getExtension("native_profiler");
        $__internal_856529b4dd6e978af5e451f7caea64b178a86588c873ceaf95099217e971abda->enter($__internal_856529b4dd6e978af5e451f7caea64b178a86588c873ceaf95099217e971abda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "
      <div>
        <h1 class=\"coloralert\"><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("pc_admin_jornada_censo");
        echo "\" type=\"button\" class=\" buttonborder btn btn-default\"> <span class=\"glyphicon glyphicon-hand-left\" aria-hidden=\"true\"></span>&nbsp;regresar</a> &nbsp;Información del Censo
        <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("pc_admin_esterilizacion_add");
        echo "\" type=\"button\" id=\"ventemerg3\" class=\"buttonborder btn btn-default pull-right\"data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nueva jornada de esterilización\">Esterilizar</a>
        </h1>
        
      <div class=\"sectionstile\">
              <div class=\"row\">
              
              <div class=\"textjusti col-xs-8 col-md-4 col-lg-5\">
                <table class=\"table table-striped\">
                <thead>
                  <br>
                    <tr>
                      <th>Zona:</th>
                      <th> </th>
                    </tr>
                    <tr>
                      <th>fecha:</th>
                      <th> </th>
                    </tr>
                </thead>
                </table> <!-- table de nombre zona. -->
                <br>
                 <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("pc_admin_jornada_censo_agregar");
        echo "\" id=\"ventemerg2\" class=\"buttonborder  btn btn-info\">Agregar datos »</a>
              </div>
             <div class=\"col-md-1 col-lg-1\"></div>
             <div class=\"col-xs-4 col-md-5 col-lg-5\">
                
                <h4 class=\"textjusti\">Colaboradores &nbsp;  <button type=\"button\" class=\"btn btn-info\" aria-label=\"Left Align\" data-toggle=\"modal\" data-target=\"#myModal\">
               <span class=\"glyphicon glyphicon-plus-sign\" aria-hidden=\"true\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Agregar colaboradores\"></span>
               </button>
                <div class=\"modal fade bs-example-modal-sm\" id=\"myModal\"  tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
              <div class=\"modal-dialog modal-sm\">
                <div class=\"modal-content\">
                  
                  <div class=\"timod modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"></button>
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Agregar colaborador &nbsp;<span class=\" glyphicon glyphicon-user\" aria-hidden=\"true\"></span></h5>
                  </div>

                   <div class=\"modal-body\">
                      <form>
                        <div class=\"form-group\">
                          <label for=\"recipient-name\" class=\"textjusti control-label\"><h5>Nombre:</h5></label>
                          <input type=\"text\" class=\"form-control\" id=\"recipient-name\"
                          placeholder=\"Nombre\">
                        </div>

                        <div class=\"form-group\">
                          <label for=\"recipient-name\" class=\"textjusti control-label\"><h5>Dirección:</h5></label>
                          <input type=\"text\" class=\"form-control\" id=\"recipient-name\"
                          placeholder=\"Dirección\">
                        </div>
                        <div class=\"form-group\">
                          <label for=\"recipient-name\" class=\"textjusti control-label\"><h5>Telefono:</h5></label>
                          <input type=\"text\" class=\"form-control\" id=\"recipient-name\"
                          placeholder=\"Telefono\">
                        </div>
                      </form>
                    </div>

                    <div class=\"modal-footer\">
                      <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Agregar</button>
                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                    </div>
              </div>
              </div>
            </div>
             </h4>
                  <table class=\"table table-hove\">
                     <tr>
                      <th>Nombre: </th>
                      <th>Dirección</th>
                      <th>Telefono</th>
                     </tr>
                    <tr>
                      <td> </td>
                      <td> </td>
                      <td> </td>
                    </tr>
                  </table>

              </div> 
              
              <div class=\"col-md-1 col-lg-1\"></div>
            </div> <!-- div row-->
            <hr>
             <table class=\"tabl table-striped\">
              <thead>
                <tr><td class=\"pest\" colspan=\"3\">información del Animal</td>
                  <td colspan=\"4\"></td>
                  <td  class=\"pest\" colspan=\"3\">informacion responsable</td>
                </tr>
                <tr class=\"tdb\">
                  <th class=\"tdxs\">#</th>
                  <th class=\"tdmd\">Clasificación</th>
                  <th class=\"tdd\">Rasgo</th>
                  <th class=\"tdd\">Color</th>
                  <th class=\"tdmd\">edad</th>
                  <th class=\"tdxs\">¿cirugia?</th>
                  <th class=\"tdxs\">Edit</th>
                  <th class=\"tdd\">Nombre</th>
                  <th class=\"tdd\">Telefono</th>
                  <th class=\"tdxs\">Mas</th>
                </tr>
              </thead>
              <tbody class=\"tdb\">
                <tr>
                  <td>1</td>
                  <td>gato</td>
                  <td class=\"tdd\">crio</td>
                  <td>negro</td>
                  <td>1</td>
                  <td>no</td>
                  <td><a href=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("pc_admin_jornada_censo_edit");
        echo " \" id=\"ventemerg3\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Editar información\">&nbsp;<span class=\"glyphicon glyphicon-minus-sign\" aria-hidden=\"true\"></a></td>
                  <td>juan</td>
                  <td>3122345678</td>
                  <td><a href=\"\" data-toggle=\"modal\" data-target=\"#myModal2\">&nbsp;<span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></a>

                    <div class=\"modal fade bs-example-modal-sm\"id=\"myModal2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
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
          </div> <!-- div close section estile-->
        </div>
";
        
        $__internal_856529b4dd6e978af5e451f7caea64b178a86588c873ceaf95099217e971abda->leave($__internal_856529b4dd6e978af5e451f7caea64b178a86588c873ceaf95099217e971abda_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:censo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 118,  72 => 27,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* */
/*       <div>*/
/*         <h1 class="coloralert"><a href="{{ path('pc_admin_jornada_censo')}}" type="button" class=" buttonborder btn btn-default"> <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>&nbsp;regresar</a> &nbsp;Información del Censo*/
/*         <a href="{{ path('pc_admin_esterilizacion_add')}}" type="button" id="ventemerg3" class="buttonborder btn btn-default pull-right"data-toggle="tooltip" data-placement="top" title="Nueva jornada de esterilización">Esterilizar</a>*/
/*         </h1>*/
/*         */
/*       <div class="sectionstile">*/
/*               <div class="row">*/
/*               */
/*               <div class="textjusti col-xs-8 col-md-4 col-lg-5">*/
/*                 <table class="table table-striped">*/
/*                 <thead>*/
/*                   <br>*/
/*                     <tr>*/
/*                       <th>Zona:</th>*/
/*                       <th> </th>*/
/*                     </tr>*/
/*                     <tr>*/
/*                       <th>fecha:</th>*/
/*                       <th> </th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 </table> <!-- table de nombre zona. -->*/
/*                 <br>*/
/*                  <a href="{{ path('pc_admin_jornada_censo_agregar')}}" id="ventemerg2" class="buttonborder  btn btn-info">Agregar datos »</a>*/
/*               </div>*/
/*              <div class="col-md-1 col-lg-1"></div>*/
/*              <div class="col-xs-4 col-md-5 col-lg-5">*/
/*                 */
/*                 <h4 class="textjusti">Colaboradores &nbsp;  <button type="button" class="btn btn-info" aria-label="Left Align" data-toggle="modal" data-target="#myModal">*/
/*                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Agregar colaboradores"></span>*/
/*                </button>*/
/*                 <div class="modal fade bs-example-modal-sm" id="myModal"  tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
/*               <div class="modal-dialog modal-sm">*/
/*                 <div class="modal-content">*/
/*                   */
/*                   <div class="timod modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>*/
/*                     <h5 class="modal-title" id="exampleModalLabel">Agregar colaborador &nbsp;<span class=" glyphicon glyphicon-user" aria-hidden="true"></span></h5>*/
/*                   </div>*/
/* */
/*                    <div class="modal-body">*/
/*                       <form>*/
/*                         <div class="form-group">*/
/*                           <label for="recipient-name" class="textjusti control-label"><h5>Nombre:</h5></label>*/
/*                           <input type="text" class="form-control" id="recipient-name"*/
/*                           placeholder="Nombre">*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                           <label for="recipient-name" class="textjusti control-label"><h5>Dirección:</h5></label>*/
/*                           <input type="text" class="form-control" id="recipient-name"*/
/*                           placeholder="Dirección">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                           <label for="recipient-name" class="textjusti control-label"><h5>Telefono:</h5></label>*/
/*                           <input type="text" class="form-control" id="recipient-name"*/
/*                           placeholder="Telefono">*/
/*                         </div>*/
/*                       </form>*/
/*                     </div>*/
/* */
/*                     <div class="modal-footer">*/
/*                       <button type="button" class="btn btn-primary" data-dismiss="modal">Agregar</button>*/
/*                       <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>*/
/*                     </div>*/
/*               </div>*/
/*               </div>*/
/*             </div>*/
/*              </h4>*/
/*                   <table class="table table-hove">*/
/*                      <tr>*/
/*                       <th>Nombre: </th>*/
/*                       <th>Dirección</th>*/
/*                       <th>Telefono</th>*/
/*                      </tr>*/
/*                     <tr>*/
/*                       <td> </td>*/
/*                       <td> </td>*/
/*                       <td> </td>*/
/*                     </tr>*/
/*                   </table>*/
/* */
/*               </div> */
/*               */
/*               <div class="col-md-1 col-lg-1"></div>*/
/*             </div> <!-- div row-->*/
/*             <hr>*/
/*              <table class="tabl table-striped">*/
/*               <thead>*/
/*                 <tr><td class="pest" colspan="3">información del Animal</td>*/
/*                   <td colspan="4"></td>*/
/*                   <td  class="pest" colspan="3">informacion responsable</td>*/
/*                 </tr>*/
/*                 <tr class="tdb">*/
/*                   <th class="tdxs">#</th>*/
/*                   <th class="tdmd">Clasificación</th>*/
/*                   <th class="tdd">Rasgo</th>*/
/*                   <th class="tdd">Color</th>*/
/*                   <th class="tdmd">edad</th>*/
/*                   <th class="tdxs">¿cirugia?</th>*/
/*                   <th class="tdxs">Edit</th>*/
/*                   <th class="tdd">Nombre</th>*/
/*                   <th class="tdd">Telefono</th>*/
/*                   <th class="tdxs">Mas</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody class="tdb">*/
/*                 <tr>*/
/*                   <td>1</td>*/
/*                   <td>gato</td>*/
/*                   <td class="tdd">crio</td>*/
/*                   <td>negro</td>*/
/*                   <td>1</td>*/
/*                   <td>no</td>*/
/*                   <td><a href="{{ path('pc_admin_jornada_censo_edit')}} " id="ventemerg3" data-toggle="tooltip" data-placement="right" title="Editar información">&nbsp;<span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></a></td>*/
/*                   <td>juan</td>*/
/*                   <td>3122345678</td>*/
/*                   <td><a href="" data-toggle="modal" data-target="#myModal2">&nbsp;<span class="glyphicon glyphicon-plus" aria-hidden="true"></a>*/
/* */
/*                     <div class="modal fade bs-example-modal-sm"id="myModal2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
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
/*           </div> <!-- div close section estile-->*/
/*         </div>*/
/* {% endblock %}*/
/* */
