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
        $__internal_4309f148c6d679083036aa8ade162be7eb1294fca284ea81a6d06fac281e27ec = $this->env->getExtension("native_profiler");
        $__internal_4309f148c6d679083036aa8ade162be7eb1294fca284ea81a6d06fac281e27ec->enter($__internal_4309f148c6d679083036aa8ade162be7eb1294fca284ea81a6d06fac281e27ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:censo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4309f148c6d679083036aa8ade162be7eb1294fca284ea81a6d06fac281e27ec->leave($__internal_4309f148c6d679083036aa8ade162be7eb1294fca284ea81a6d06fac281e27ec_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_74d67b4a6e0fb2c92cc3459175f46aaed91bb3f1036ac4cd4c545761a526efa9 = $this->env->getExtension("native_profiler");
        $__internal_74d67b4a6e0fb2c92cc3459175f46aaed91bb3f1036ac4cd4c545761a526efa9->enter($__internal_74d67b4a6e0fb2c92cc3459175f46aaed91bb3f1036ac4cd4c545761a526efa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "
      <div>
        <h1 class=\"coloralert\">Información del Censo &nbsp; <a href=\"\" type=\"button\" class=\" buttonborder pull-right btn btn-primary\"> <span class=\"glyphicon glyphicon-hand-left\" aria-hidden=\"true\"></span>&nbsp;regresar</a></h1>
      <div class=\"sectionstile\">
              <div class=\"row\">
              <div class=\"textjusti col-xs-8 col-md-4 col-lg-5\">
                <table class=\"table table-striped\">
                <thead>
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
        // line 22
        echo $this->env->getExtension('routing')->getPath("pc_admin_jornada_censo_agregar");
        echo "\" id=\"ventemerg2\" class=\"btn btn-info\">Agregar datos »</a>
              </div>
              <div class=\"col-md-1 col-lg-1\"></div>
              <div class=\"col-xs-4 col-md-5 col-lg-5\">
                
                <h4>Colaboradores.</h4>
                <table class=\"tabl\">
                     <tr>
                      <td class=\"tdd\">Nombre: </td>
                      <td class=\"tdb\">  </td>
                     </tr>
                    <tr>
                      <td class=\"tdd\">Nombre: </td>
                      <td class=\"tdb\">  </td>
                    </tr>
                    <tr>
                      <td class=\"tdd\">Nombre: </td>
                      <td class=\"tdb\">  </td>
                    </tr>
               </table>

              </div> 
              <div class=\"col-md-1 col-lg-1\"></div>
            </div> <!-- div row-->
            <hr>
            <h5></h5>
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
        // line 75
        echo $this->env->getExtension('routing')->getPath("pc_admin_jornada_censo_edit");
        echo " \" id=\"ventemerg3\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Editar información\">&nbsp;<span class=\"glyphicon glyphicon-minus-sign\" aria-hidden=\"true\"></a></td>
                  <td>juan</td>
                  <td>3122345678</td>
                  <td><a href=\"\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\">&nbsp;<span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></a>

                    <div class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
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
        
        $__internal_74d67b4a6e0fb2c92cc3459175f46aaed91bb3f1036ac4cd4c545761a526efa9->leave($__internal_74d67b4a6e0fb2c92cc3459175f46aaed91bb3f1036ac4cd4c545761a526efa9_prof);

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
        return array (  117 => 75,  61 => 22,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* */
/*       <div>*/
/*         <h1 class="coloralert">Información del Censo &nbsp; <a href="" type="button" class=" buttonborder pull-right btn btn-primary"> <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>&nbsp;regresar</a></h1>*/
/*       <div class="sectionstile">*/
/*               <div class="row">*/
/*               <div class="textjusti col-xs-8 col-md-4 col-lg-5">*/
/*                 <table class="table table-striped">*/
/*                 <thead>*/
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
/*                  <a href="{{ path('pc_admin_jornada_censo_agregar')}}" id="ventemerg2" class="btn btn-info">Agregar datos »</a>*/
/*               </div>*/
/*               <div class="col-md-1 col-lg-1"></div>*/
/*               <div class="col-xs-4 col-md-5 col-lg-5">*/
/*                 */
/*                 <h4>Colaboradores.</h4>*/
/*                 <table class="tabl">*/
/*                      <tr>*/
/*                       <td class="tdd">Nombre: </td>*/
/*                       <td class="tdb">  </td>*/
/*                      </tr>*/
/*                     <tr>*/
/*                       <td class="tdd">Nombre: </td>*/
/*                       <td class="tdb">  </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                       <td class="tdd">Nombre: </td>*/
/*                       <td class="tdb">  </td>*/
/*                     </tr>*/
/*                </table>*/
/* */
/*               </div> */
/*               <div class="col-md-1 col-lg-1"></div>*/
/*             </div> <!-- div row-->*/
/*             <hr>*/
/*             <h5></h5>*/
/*            <table class="tabl table-striped">*/
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
/*                   <td><a href="" data-toggle="modal" data-target=".bs-example-modal-sm">&nbsp;<span class="glyphicon glyphicon-plus" aria-hidden="true"></a>*/
/* */
/*                     <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
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
