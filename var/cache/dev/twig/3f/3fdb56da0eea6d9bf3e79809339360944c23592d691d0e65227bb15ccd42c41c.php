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
        $__internal_6de876e1e0ff202732ac8ffa99de0aff60bae2d0ad57b7c55702da7284f7f4b5 = $this->env->getExtension("native_profiler");
        $__internal_6de876e1e0ff202732ac8ffa99de0aff60bae2d0ad57b7c55702da7284f7f4b5->enter($__internal_6de876e1e0ff202732ac8ffa99de0aff60bae2d0ad57b7c55702da7284f7f4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:censo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6de876e1e0ff202732ac8ffa99de0aff60bae2d0ad57b7c55702da7284f7f4b5->leave($__internal_6de876e1e0ff202732ac8ffa99de0aff60bae2d0ad57b7c55702da7284f7f4b5_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_90bfa98e81ff570514dfce95ed546d4bfffa3d02798fbcfca4870db37f949487 = $this->env->getExtension("native_profiler");
        $__internal_90bfa98e81ff570514dfce95ed546d4bfffa3d02798fbcfca4870db37f949487->enter($__internal_90bfa98e81ff570514dfce95ed546d4bfffa3d02798fbcfca4870db37f949487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "
      <div>
        <h1 class=\"coloralert\"><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("pc_admin_jornada_censo");
        echo "\" type=\"button\" class=\" buttonborder btn btn-default\"> <span class=\"glyphicon glyphicon-hand-left\" aria-hidden=\"true\"></span>&nbsp;regresar</a> &nbsp;Información del Censo en ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meeting"]) ? $context["meeting"] : $this->getContext($context, "meeting")), "address", array()), "html", null, true);
        echo "
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
                      <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meeting"]) ? $context["meeting"] : $this->getContext($context, "meeting")), "address", array()), "html", null, true);
        echo "</th>
                    </tr>
                    <tr>
                      <th>fecha:</th>
                      <th>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["meeting"]) ? $context["meeting"] : $this->getContext($context, "meeting")), "createdAt", array()), "m/d/Y"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                </table> <!-- table de nombre zona. -->
                <br>
                 <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_admin_jornada_censo_agregar", array("meetingId" => $this->getAttribute((isset($context["meeting"]) ? $context["meeting"] : $this->getContext($context, "meeting")), "id", array()))), "html", null, true);
        echo "\" id=\"fdfdfd\" class=\"buttonborder  btn btn-info\">Agregar datos »</a>
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
                  <td colspan=\"3\"></td>
                  <td  class=\"pest\" colspan=\"3\">informacion responsable</td>
                </tr>
                <tr class=\"tdb\">
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
                ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["censuses"]) ? $context["censuses"] : $this->getContext($context, "censuses")));
        foreach ($context['_seq'] as $context["_key"] => $context["census"]) {
            // line 111
            echo "                <tr>
                  <td>
                    ";
            // line 113
            if (($this->getAttribute($this->getAttribute($context["census"], "pet", array()), "gender", array()) == "MALE")) {
                // line 114
                echo "                              
                      macho
                              
                      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 117
$context["census"], "pet", array()), "gender", array()) == "FEMALE")) {
                // line 118
                echo "                              
                      hembra
                      
                    ";
            }
            // line 122
            echo "                  </td>
                  <td class=\"tdd\">";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census"], "pet", array()), "race", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census"], "pet", array()), "colour", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census"], "pet", array()), "age", array()), "html", null, true);
            echo "</td>
                  <td>
                    ";
            // line 127
            if (($this->getAttribute($context["census"], "isNeedSurgery", array()) == "0")) {
                // line 128
                echo "                              
                      <strong>NO</strong>
                              
                      ";
            } elseif (($this->getAttribute(            // line 131
$context["census"], "isNeedSurgery", array()) == "1")) {
                // line 132
                echo "                              
                      <strong>SI</strong>
                      
                    ";
            }
            // line 136
            echo "                  </td>
                  <td><a href=\"\" id=\"ventemerg3\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Editar información\">&nbsp;<span class=\"glyphicon glyphicon-minus-sign\" aria-hidden=\"true\"></a></td>
                  <td>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census"], "user", array()), "name", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census"], "user", array()), "phone_number", array()), "html", null, true);
            echo "</td>
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
                              <input type=\"text\" class=\"form-control\" id=\"recipient-name\"
                              value=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census"], "user", array()), "name", array()), "html", null, true);
            echo "\" disabled>
                            </div>
    
                            <div class=\"form-group\">
                              <label for=\"recipient-name\" class=\"textjusti control-label\">Edad:</label>
                              <input type=\"text\" class=\"form-control\" id=\"recipient-name\"
                              value=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census"], "user", array()), "age", array()), "html", null, true);
            echo "\" disabled>
                            </div>
                            
                            <div class=\"form-group\">
                              <label for=\"recipient-name\" class=\"textjusti control-label\">Dirección:</label>
                              <input type=\"text\" class=\"form-control\" id=\"recipient-name\"
                              value=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census"], "user", array()), "address", array()), "html", null, true);
            echo "\" disabled>
                            </div>
    
                            <div class=\"form-group\">
                              <label for=\"recipient-name\" class=\"textjusti control-label\">Telefono:</label>
                              <input type=\"text\" class=\"form-control\" id=\"recipient-name\"
                              value=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census"], "user", array()), "phone_number", array()), "html", null, true);
            echo "\" disabled>
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
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['census'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "              </tbody>
            </table>
          </div> <!-- div close section estile-->
        </div>
";
        
        $__internal_90bfa98e81ff570514dfce95ed546d4bfffa3d02798fbcfca4870db37f949487->leave($__internal_90bfa98e81ff570514dfce95ed546d4bfffa3d02798fbcfca4870db37f949487_prof);

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
        return array (  295 => 188,  275 => 174,  266 => 168,  257 => 162,  248 => 156,  228 => 139,  224 => 138,  220 => 136,  214 => 132,  212 => 131,  207 => 128,  205 => 127,  200 => 125,  196 => 124,  192 => 123,  189 => 122,  183 => 118,  181 => 117,  176 => 114,  174 => 113,  170 => 111,  166 => 110,  80 => 27,  72 => 22,  65 => 18,  50 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* */
/*       <div>*/
/*         <h1 class="coloralert"><a href="{{ path('pc_admin_jornada_censo')}}" type="button" class=" buttonborder btn btn-default"> <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>&nbsp;regresar</a> &nbsp;Información del Censo en {{ meeting.address }}*/
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
/*                       <th>{{meeting.address}}</th>*/
/*                     </tr>*/
/*                     <tr>*/
/*                       <th>fecha:</th>*/
/*                       <th>{{meeting.createdAt | date("m/d/Y")}}</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 </table> <!-- table de nombre zona. -->*/
/*                 <br>*/
/*                  <a href="{{ path('pc_admin_jornada_censo_agregar', {'meetingId' : meeting.id} )}}" id="fdfdfd" class="buttonborder  btn btn-info">Agregar datos »</a>*/
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
/*                   <td colspan="3"></td>*/
/*                   <td  class="pest" colspan="3">informacion responsable</td>*/
/*                 </tr>*/
/*                 <tr class="tdb">*/
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
/*                 {% for census in censuses %}*/
/*                 <tr>*/
/*                   <td>*/
/*                     {% if census.pet.gender == 'MALE' %}*/
/*                               */
/*                       macho*/
/*                               */
/*                       {% elseif census.pet.gender == 'FEMALE' %}*/
/*                               */
/*                       hembra*/
/*                       */
/*                     {%endif%}*/
/*                   </td>*/
/*                   <td class="tdd">{{ census.pet.race }}</td>*/
/*                   <td>{{ census.pet.colour }}</td>*/
/*                   <td>{{ census.pet.age }}</td>*/
/*                   <td>*/
/*                     {% if census.isNeedSurgery == '0' %}*/
/*                               */
/*                       <strong>NO</strong>*/
/*                               */
/*                       {% elseif census.isNeedSurgery == '1' %}*/
/*                               */
/*                       <strong>SI</strong>*/
/*                       */
/*                     {%endif%}*/
/*                   </td>*/
/*                   <td><a href="" id="ventemerg3" data-toggle="tooltip" data-placement="right" title="Editar información">&nbsp;<span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></a></td>*/
/*                   <td>{{ census.user.name }}</td>*/
/*                   <td>{{ census.user.phone_number }}</td>*/
/*                   <td><a href="" data-toggle="modal" data-target="#myModal2">&nbsp;<span class="glyphicon glyphicon-plus" aria-hidden="true"></a>*/
/* */
/*                   <div class="modal fade bs-example-modal-sm"id="myModal2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
/*                     <div class="modal-dialog modal-sm">*/
/*                       <div class="modal-content">*/
/*                   */
/*                         <div class="timod modal-header">*/
/*                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>*/
/*                           <h5 class="modal-title" id="exampleModalLabel">Información de responsable<span class="btn-lg glyphicon glyphicon-user" aria-hidden="true"></span></h5>*/
/*                         </div>*/
/* */
/*                         <div class="modal-body">*/
/*                           <form>*/
/*                             <div class="form-group">*/
/*                               <label for="recipient-name" class="textjusti control-label">Nombre:</label>*/
/*                               <input type="text" class="form-control" id="recipient-name"*/
/*                               value="{{ census.user.name }}" disabled>*/
/*                             </div>*/
/*     */
/*                             <div class="form-group">*/
/*                               <label for="recipient-name" class="textjusti control-label">Edad:</label>*/
/*                               <input type="text" class="form-control" id="recipient-name"*/
/*                               value="{{ census.user.age }}" disabled>*/
/*                             </div>*/
/*                             */
/*                             <div class="form-group">*/
/*                               <label for="recipient-name" class="textjusti control-label">Dirección:</label>*/
/*                               <input type="text" class="form-control" id="recipient-name"*/
/*                               value="{{ census.user.address }}" disabled>*/
/*                             </div>*/
/*     */
/*                             <div class="form-group">*/
/*                               <label for="recipient-name" class="textjusti control-label">Telefono:</label>*/
/*                               <input type="text" class="form-control" id="recipient-name"*/
/*                               value="{{ census.user.phone_number }}" disabled>*/
/*                             </div>*/
/*                           </form>*/
/*                         </div>*/
/*                         */
/*                         <div class="modal-footer">*/
/*                           <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                   </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div> <!-- div close section estile-->*/
/*         </div>*/
/* {% endblock %}*/
/* */
