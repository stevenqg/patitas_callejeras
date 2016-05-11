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
        $__internal_5ff82f132a7696c0537b792ea6c17e6c2c4876828f1005f10e0ff29a7cbc1ae6 = $this->env->getExtension("native_profiler");
        $__internal_5ff82f132a7696c0537b792ea6c17e6c2c4876828f1005f10e0ff29a7cbc1ae6->enter($__internal_5ff82f132a7696c0537b792ea6c17e6c2c4876828f1005f10e0ff29a7cbc1ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:censo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ff82f132a7696c0537b792ea6c17e6c2c4876828f1005f10e0ff29a7cbc1ae6->leave($__internal_5ff82f132a7696c0537b792ea6c17e6c2c4876828f1005f10e0ff29a7cbc1ae6_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_28264f394112522aeb7dfc8ab8459be0a9bae3fc908ffbb7d8f87988f33d4bf2 = $this->env->getExtension("native_profiler");
        $__internal_28264f394112522aeb7dfc8ab8459be0a9bae3fc908ffbb7d8f87988f33d4bf2->enter($__internal_28264f394112522aeb7dfc8ab8459be0a9bae3fc908ffbb7d8f87988f33d4bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "
      <div>
        <h1 class=\"coloralert\"><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("pc_admin_jornada_censo");
        echo "\" type=\"button\" class=\"pull-left buttonborder btn btn-default\"> <span class=\"glyphicon glyphicon-hand-left\" aria-hidden=\"true\"></span>&nbsp;regresar</a> &nbsp;Información del Censo en ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meeting"]) ? $context["meeting"] : $this->getContext($context, "meeting")), "address", array()), "html", null, true);
        echo "
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_admin_esterilizacion_add", array("meetingId" => $this->getAttribute((isset($context["meeting"]) ? $context["meeting"] : $this->getContext($context, "meeting")), "id", array()))), "html", null, true);
        echo "\" type=\"button\" onclick=\"window.open(this.href, this.target,'width=360,height=500'); return false\" class=\"buttonborder btn btn-default pull-right\"data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nueva jornada\">jornada Esterilizar</a>
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
                
                <h4 class=\"textjusti\">Colaboradores &nbsp;<a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_admin_jornada_censo_addcollaborator", array("meetingId" => $this->getAttribute((isset($context["meeting"]) ? $context["meeting"] : $this->getContext($context, "meeting")), "id", array()))), "html", null, true);
        echo "\" id=\"ventcolaborator\" type=\"button\" class=\"btn btn-default\">
               <span class=\"coloralert glyphicon glyphicon-plus-sign\" aria-hidden=\"true\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Agregar colaboradores\"></span>
               </a>
             </h4>
                  <table class=\"table table-hove\">
                     <tr>
                      <th>Nombre</th>
                      <th>Dirección</th>
                      <th>Telefono</th>
                     </tr>
                    
                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["census_collaborators"]) ? $context["census_collaborators"] : $this->getContext($context, "census_collaborators")));
        foreach ($context['_seq'] as $context["_key"] => $context["census_collaborator"]) {
            // line 44
            echo "                    <tr>
                      <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census_collaborator"], "collaborator", array()), "name", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census_collaborator"], "collaborator", array()), "address", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census_collaborator"], "collaborator", array()), "phone", array()), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['census_collaborator'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                    
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
                  <th class=\"tdd bord\">Nombre</th>
                  <th class=\"tdd\">Telefono</th>
                  <th class=\"tdxs\">Mas</th>
                </tr>
              </thead>
              <tbody class=\"tdb\">
                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["censuses"]) ? $context["censuses"] : $this->getContext($context, "censuses")));
        foreach ($context['_seq'] as $context["_key"] => $context["census"]) {
            // line 78
            echo "                <tr>
                  <td>
                    ";
            // line 80
            if (($this->getAttribute($this->getAttribute($context["census"], "pet", array()), "gender", array()) == "MALE")) {
                // line 81
                echo "                              
                      macho
                              
                      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 84
$context["census"], "pet", array()), "gender", array()) == "FEMALE")) {
                // line 85
                echo "                              
                      hembra
                      
                    ";
            }
            // line 89
            echo "                  </td>
                  <td class=\"tdd\">";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census"], "pet", array()), "race", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census"], "pet", array()), "colour", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census"], "pet", array()), "age", array()), "html", null, true);
            echo "</td>
                  <td>
                    ";
            // line 94
            if (($this->getAttribute($context["census"], "isNeedSurgery", array()) == "0")) {
                // line 95
                echo "                              
                      <strong>NO</strong>
                              
                      ";
            } elseif (($this->getAttribute(            // line 98
$context["census"], "isNeedSurgery", array()) == "1")) {
                // line 99
                echo "                              
                      <strong>SI</strong>
                      
                    ";
            }
            // line 103
            echo "                  </td>
                  <td><a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_admin_jornada_censo_agregar", array("meetingId" => $this->getAttribute((isset($context["meeting"]) ? $context["meeting"] : $this->getContext($context, "meeting")), "id", array()))), "html", null, true);
            echo "\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Editar información\">&nbsp;<span class=\"glyphicon glyphicon-minus-sign\" aria-hidden=\"true\"></a></td>
                  <td class=\"bord\">";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census"], "user", array()), "name", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census"], "user", array()), "phone_number", array()), "html", null, true);
            echo "</td>
                  <td><a href=\"\" data-toggle=\"modal\" data-target=\"#censuuser";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census"], "user", array()), "id", array()), "html", null, true);
            echo "\">&nbsp;<span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></a>

                  <div class=\"modal fade bs-example-modal-sm\"id=\"censuuser";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census"], "user", array()), "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
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
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census"], "user", array()), "name", array()), "html", null, true);
            echo "\" disabled>
                            </div>
    
                            <div class=\"form-group\">
                              <label for=\"recipient-name\" class=\"textjusti control-label\">Edad:</label>
                              <input type=\"text\" class=\"form-control\" id=\"recipient-name\"
                              value=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census"], "user", array()), "age", array()), "html", null, true);
            echo "\" disabled>
                            </div>
                            
                            <div class=\"form-group\">
                              <label for=\"recipient-name\" class=\"textjusti control-label\">Dirección:</label>
                              <input type=\"text\" class=\"form-control\" id=\"recipient-name\"
                              value=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["census"], "user", array()), "address", array()), "html", null, true);
            echo "\" disabled>
                            </div>
    
                            <div class=\"form-group\">
                              <label for=\"recipient-name\" class=\"textjusti control-label\">Telefono:</label>
                              <input type=\"text\" class=\"form-control\" id=\"recipient-name\"
                              value=\"";
            // line 141
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
        // line 155
        echo "              </tbody>
            </table>
          </div> <!-- div close section estile-->
        </div>
";
        
        $__internal_28264f394112522aeb7dfc8ab8459be0a9bae3fc908ffbb7d8f87988f33d4bf2->leave($__internal_28264f394112522aeb7dfc8ab8459be0a9bae3fc908ffbb7d8f87988f33d4bf2_prof);

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
        return array (  293 => 155,  273 => 141,  264 => 135,  255 => 129,  246 => 123,  229 => 109,  224 => 107,  220 => 106,  216 => 105,  212 => 104,  209 => 103,  203 => 99,  201 => 98,  196 => 95,  194 => 94,  189 => 92,  185 => 91,  181 => 90,  178 => 89,  172 => 85,  170 => 84,  165 => 81,  163 => 80,  159 => 78,  155 => 77,  126 => 50,  117 => 47,  113 => 46,  109 => 45,  106 => 44,  102 => 43,  88 => 32,  80 => 27,  72 => 22,  65 => 18,  50 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* */
/*       <div>*/
/*         <h1 class="coloralert"><a href="{{ path('pc_admin_jornada_censo')}}" type="button" class="pull-left buttonborder btn btn-default"> <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>&nbsp;regresar</a> &nbsp;Información del Censo en {{ meeting.address }}*/
/*         <a href="{{ path('pc_admin_esterilizacion_add',{'meetingId' : meeting.id})}}" type="button" onclick="window.open(this.href, this.target,'width=360,height=500'); return false" class="buttonborder btn btn-default pull-right"data-toggle="tooltip" data-placement="top" title="Nueva jornada">jornada Esterilizar</a>*/
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
/*                 <h4 class="textjusti">Colaboradores &nbsp;<a href="{{path('pc_admin_jornada_censo_addcollaborator', {'meetingId' : meeting.id} )}}" id="ventcolaborator" type="button" class="btn btn-default">*/
/*                <span class="coloralert glyphicon glyphicon-plus-sign" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Agregar colaboradores"></span>*/
/*                </a>*/
/*              </h4>*/
/*                   <table class="table table-hove">*/
/*                      <tr>*/
/*                       <th>Nombre</th>*/
/*                       <th>Dirección</th>*/
/*                       <th>Telefono</th>*/
/*                      </tr>*/
/*                     */
/*                     {% for census_collaborator in census_collaborators %}*/
/*                     <tr>*/
/*                       <td>{{ census_collaborator.collaborator.name }}</td>*/
/*                       <td>{{ census_collaborator.collaborator.address }}</td>*/
/*                       <td>{{ census_collaborator.collaborator.phone }}</td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                     */
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
/*                   <th class="tdd bord">Nombre</th>*/
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
/*                   <td><a href="{{ path('pc_admin_jornada_censo_agregar', {'meetingId' : meeting.id} )}}" data-toggle="tooltip" data-placement="right" title="Editar información">&nbsp;<span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></a></td>*/
/*                   <td class="bord">{{ census.user.name }}</td>*/
/*                   <td>{{ census.user.phone_number }}</td>*/
/*                   <td><a href="" data-toggle="modal" data-target="#censuuser{{census.user.id}}">&nbsp;<span class="glyphicon glyphicon-plus" aria-hidden="true"></a>*/
/* */
/*                   <div class="modal fade bs-example-modal-sm"id="censuuser{{census.user.id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
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
