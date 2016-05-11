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
        $__internal_18988b8b38c4ef1d60debced06dda4800639d3607a6beda8149184741d323517 = $this->env->getExtension("native_profiler");
        $__internal_18988b8b38c4ef1d60debced06dda4800639d3607a6beda8149184741d323517->enter($__internal_18988b8b38c4ef1d60debced06dda4800639d3607a6beda8149184741d323517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:esterilizacio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18988b8b38c4ef1d60debced06dda4800639d3607a6beda8149184741d323517->leave($__internal_18988b8b38c4ef1d60debced06dda4800639d3607a6beda8149184741d323517_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_adabdbf76d1aadfef7848164048fb044ca740366d45a4b51076d1a60c50c0236 = $this->env->getExtension("native_profiler");
        $__internal_adabdbf76d1aadfef7848164048fb044ca740366d45a4b51076d1a60c50c0236->enter($__internal_adabdbf76d1aadfef7848164048fb044ca740366d45a4b51076d1a60c50c0236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "
\t<h1 class=\"coloralert\"><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("pc_admin_jornada_esterilizacion");
        echo "\" type=\"button\" class=\"pull-left buttonborder btn btn-default\"> <span class=\"glyphicon glyphicon-hand-left\" aria-hidden=\"true\"></span>&nbsp;regresar</a> &nbsp;Esterilización</h1><hr>
\t<div class=\"sectionstile\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t<label class=\"marginlabel\">Zona:</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meeting"]) ? $context["meeting"] : $this->getContext($context, "meeting")), "address", array()), "html", null, true);
        echo "\" disabled>
\t\t\t</div>
\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t<label class=\"marginlabel\">Fecha:</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["controlAt"]) ? $context["controlAt"] : $this->getContext($context, "controlAt")), "html", null, true);
        echo "\" disabled>
\t\t\t</div>
\t\t\t<div class=\"col-md-1\"><label class=\"marginlabel\">Costo:</label></div>
\t\t\t<div class=\"col-md-3\"><input type=\"text\" class=\"form-control\" value=\"\$";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["amount"]) ? $context["amount"] : $this->getContext($context, "amount")), "html", null, true);
        echo "\" disabled>
\t\t\t</div>

\t\t</div>
\t\t<hr>
           <h4 class=\"podingtitle1\">Mascotas en espera</h4>
           <table class=\"tabl table-striped\">
              <thead>
                <tr class=\"tdb\">
                  <th>Nombre mascota</th>
                  <th>Especie</th>
                  <th>Raza</th>
                  <th>Color</th>
                  <th class=\"tdxs\">Edad</th>
                  <th class=\"tdxs\">¿esterilizada?</th>
                  <th class=\"tdxs\">responsable</th>
                  <th class=\"tdxs\">operación</th>
                  
                </tr>
              </thead>
              <tbody class=\"tdb\">
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sterilizations"]) ? $context["sterilizations"] : $this->getContext($context, "sterilizations")));
        foreach ($context['_seq'] as $context["_key"] => $context["sterilization"]) {
            // line 42
            echo "                ";
            if (($this->getAttribute($this->getAttribute($context["sterilization"], "pet", array()), "isSterilized", array()) == "0")) {
                // line 43
                echo "                <tr>
                 
                  <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "pet", array()), "name", array()), "html", null, true);
                echo "</td>
                  <td>
                    ";
                // line 47
                if (($this->getAttribute($this->getAttribute($context["sterilization"], "pet", array()), "species", array()) == "CANINE")) {
                    // line 48
                    echo "                                    
                    <strong>canino</strong>
                          
                    ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 51
$context["sterilization"], "pet", array()), "species", array()) == "FELINE")) {
                    // line 52
                    echo "                          
                    <strong>felino</strong>
                  
                    ";
                }
                // line 56
                echo "                  </td>
                  <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "pet", array()), "race", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "pet", array()), "colour", array()), "html", null, true);
                echo "</td>
                  <td class=\"text-center\">";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "pet", array()), "age", array()), "html", null, true);
                echo "</td>
                  <td class=\"text-center\">
                    ";
                // line 61
                if (($this->getAttribute($this->getAttribute($context["sterilization"], "pet", array()), "isSterilized", array()) == "0")) {
                    // line 62
                    echo "                              
                      <strong>NO</strong>
                              
                      ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 65
$context["sterilization"], "pet", array()), "isSterilized", array()) == "1")) {
                    // line 66
                    echo "                              
                      <strong>SI</strong>
                      
                    ";
                }
                // line 70
                echo "                  </td>
                  <td class=\"text-center\"><a href=\"\" data-toggle=\"modal\" data-target=\"#myModa";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "user", array()), "id", array()), "html", null, true);
                echo "\">&nbsp;<span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></a>
                    <div class=\"modal fade bs-example-modal-sm\" id=\"myModa";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "user", array()), "id", array()), "html", null, true);
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
                                <label for=\"recipient-name\" class=\"control-label\">Nombre:</label>
                                <input type=\"text\" class=\"form-control\" id=\"recipient-name\"
                                value=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "user", array()), "name", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "user", array()), "lastName", array()), "html", null, true);
                echo "\" disabled>
                              </div>
      
                              <div class=\"form-group\">
                                <label for=\"recipient-name\" class=\"control-label\">Edad:</label>
                                <input type=\"text\" class=\"form-control\" id=\"recipient-name\"
                                value=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "user", array()), "age", array()), "html", null, true);
                echo "\" disabled>
                              </div>
                              
                              <div class=\"form-group\">
                                <label for=\"recipient-name\" class=\"control-label\">Dirección:</label>
                                <input type=\"text\" class=\"form-control\" id=\"recipient-name\"
                                value=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "user", array()), "address", array()), "html", null, true);
                echo "\" disabled>
                              </div>
      
                              <div class=\"form-group\">
                                <label for=\"recipient-name\" class=\"control-label\">Telefono:</label>
                                <input type=\"text\" class=\"form-control\" id=\"recipient-name\"
                                value=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "user", array()), "phoneNumber", array()), "html", null, true);
                echo "\" disabled>
                              </div>
                              
                              <div class=\"form-group\">
                                <label for=\"recipient-name\" class=\"control-label\">Correo:</label>
                                <input type=\"text\" class=\"form-control\" id=\"recipient-name\"
                                value=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "user", array()), "email", array()), "html", null, true);
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
                  <td class=\"text-center\"><a class=\"colorok btn btn-default\" ta-toggle=\"tooltip\" href=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_admin_esterilizacion_update_list", array("petId" => $this->getAttribute($this->getAttribute($context["sterilization"], "pet", array()), "id", array()), "meetingId" => $this->getAttribute((isset($context["meeting"]) ? $context["meeting"] : $this->getContext($context, "meeting")), "id", array()), "controlAt" => (isset($context["controlAt"]) ? $context["controlAt"] : $this->getContext($context, "controlAt")), "amount" => (isset($context["amount"]) ? $context["amount"] : $this->getContext($context, "amount")))), "html", null, true);
                echo "\" data-placement=\"top\" title=\"se esterilizo\"><span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></a></td>
                </tr>
            ";
            }
            // line 125
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sterilization'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "              </tbody>
            </table>
            <br>
            <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
          <div class=\"margnone panel panel-default\">
            <div class=\"paddinnot panel-heading\" role=\"tab\" id=\"headingOne\">
              <h4 class=\"panel-title\">
                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#controlOne\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
                    <h4 class=\"podingtitle1\">Mascotas esterilizadas</h4>
                </a>
              </h4>
            </div>
            <div id=\"controlOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
              <div class=\"panel-body\">
              <table class=\"tabl table-striped\">
                     <thead>
                        <tr class=\"tdb\">
                          <th>Nombre mascota</th>
                          <th>Especie</th>
                          <th>Raza</th>
                          <th>Color</th>
                          <th class=\"tdxs\">Edad</th>
                          <th class=\"tdxs\">¿esterilizada?</th>
                          <th class=\"tdxs\">responsable</th>
                          <th class=\"tdxs\">operación</th>
                          
                        </tr>
                      </thead>
                      <tbody class=\"tdb\">
                        
                        ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sterilizations"]) ? $context["sterilizations"] : $this->getContext($context, "sterilizations")));
        foreach ($context['_seq'] as $context["_key"] => $context["sterilization"]) {
            // line 157
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($context["sterilization"], "pet", array()), "isSterilized", array()) == "1")) {
                // line 158
                echo "                        <tr>
                          <td>";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "pet", array()), "name", array()), "html", null, true);
                echo "</td>
                          <td>
                            ";
                // line 161
                if (($this->getAttribute($this->getAttribute($context["sterilization"], "pet", array()), "species", array()) == "CANINE")) {
                    // line 162
                    echo "                                  
                            <strong>canino</strong>
                                  
                            ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 165
$context["sterilization"], "pet", array()), "species", array()) == "FELINE")) {
                    // line 166
                    echo "                                  
                            <strong>felino</strong>
                          
                            ";
                }
                // line 170
                echo "                          </td>
                          <td>";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "pet", array()), "race", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "pet", array()), "colour", array()), "html", null, true);
                echo "</td>
                          <td class=\"text-center\">";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "pet", array()), "age", array()), "html", null, true);
                echo "</td>
                          <td class=\"text-center\">
                            ";
                // line 175
                if (($this->getAttribute($this->getAttribute($context["sterilization"], "pet", array()), "isSterilized", array()) == "0")) {
                    // line 176
                    echo "                                  
                            <strong>NO</strong>
                                  
                            ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 179
$context["sterilization"], "pet", array()), "isSterilized", array()) == "1")) {
                    // line 180
                    echo "                                  
                            <strong>SI</strong>
                          
                            ";
                }
                // line 184
                echo "                          </td>
                          
                          <td class=\"text-center\"><a href=\"\" data-toggle=\"modal\" data-target=\"#myModa";
                // line 186
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "user", array()), "id", array()), "html", null, true);
                echo "\">&nbsp;<span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></a>
        
                            <div class=\"modal fade bs-example-modal-sm\" id=\"myModa";
                // line 188
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "user", array()), "id", array()), "html", null, true);
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
                                  <label for=\"recipient-name\" class=\"control-label\">Nombre:</label>
                                  <input type=\"text\" class=\"form-control\" id=\"recipient-name\"
                                  value=\"";
                // line 202
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "user", array()), "name", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "user", array()), "lastName", array()), "html", null, true);
                echo "\" disabled>
                                </div>
        
                                <div class=\"form-group\">
                                  <label for=\"recipient-name\" class=\"control-label\">Edad:</label>
                                  <input type=\"text\" class=\"form-control\" id=\"recipient-name\"
                                  value=\"";
                // line 208
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "user", array()), "age", array()), "html", null, true);
                echo "\" disabled>
                                </div>
                                <div class=\"form-group\">
                                  <label for=\"recipient-name\" class=\"control-label\">Dirección:</label>
                                  <input type=\"text\" class=\"form-control\" id=\"recipient-name\"
                                  value=\"";
                // line 213
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "user", array()), "address", array()), "html", null, true);
                echo "\" disabled>
                                </div>
        
                                <div class=\"form-group\">
                                  <label for=\"recipient-name\" class=\"control-label\">Telefono:</label>
                                  <input type=\"text\" class=\"form-control\" id=\"recipient-name\"
                                  value=\"";
                // line 219
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "user", array()), "phoneNumber", array()), "html", null, true);
                echo "\" disabled>
                                </div>
                                
                                <div class=\"form-group\">
                                  <label for=\"recipient-name\" class=\"control-label\">Correo:</label>
                                  <input type=\"text\" class=\"form-control\" id=\"recipient-name\"
                                  value=\"";
                // line 225
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "user", array()), "email", array()), "html", null, true);
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
                          <td class=\"text-center\"><a class=\"coloremuve btn btn-default\" href=\"";
                // line 238
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_admin_esterilizacion_update_list", array("petId" => $this->getAttribute($this->getAttribute($context["sterilization"], "pet", array()), "id", array()), "meetingId" => $this->getAttribute((isset($context["meeting"]) ? $context["meeting"] : $this->getContext($context, "meeting")), "id", array()), "controlAt" => (isset($context["controlAt"]) ? $context["controlAt"] : $this->getContext($context, "controlAt")), "amount" => (isset($context["amount"]) ? $context["amount"] : $this->getContext($context, "amount")))), "html", null, true);
                echo "\" ta-toggle=\"tooltip\" data-placement=\"top\" title=\"no se esterilizo\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></a></td>
                        </tr>
                        ";
            }
            // line 241
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sterilization'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "                        
                        
                      </tbody>
                    </table> 
        
                </div><!--panel-body close-->
              </div>
            </div>
  
\t</div><!-- div sectionstile close -->

";
        
        $__internal_adabdbf76d1aadfef7848164048fb044ca740366d45a4b51076d1a60c50c0236->leave($__internal_adabdbf76d1aadfef7848164048fb044ca740366d45a4b51076d1a60c50c0236_prof);

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
        return array (  427 => 242,  421 => 241,  415 => 238,  399 => 225,  390 => 219,  381 => 213,  373 => 208,  362 => 202,  345 => 188,  340 => 186,  336 => 184,  330 => 180,  328 => 179,  323 => 176,  321 => 175,  316 => 173,  312 => 172,  308 => 171,  305 => 170,  299 => 166,  297 => 165,  292 => 162,  290 => 161,  285 => 159,  282 => 158,  279 => 157,  275 => 156,  243 => 126,  237 => 125,  231 => 122,  216 => 110,  207 => 104,  198 => 98,  189 => 92,  178 => 86,  161 => 72,  157 => 71,  154 => 70,  148 => 66,  146 => 65,  141 => 62,  139 => 61,  134 => 59,  130 => 58,  126 => 57,  123 => 56,  117 => 52,  115 => 51,  110 => 48,  108 => 47,  103 => 45,  99 => 43,  96 => 42,  92 => 41,  68 => 20,  62 => 17,  53 => 11,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* */
/* 	<h1 class="coloralert"><a href="{{ path('pc_admin_jornada_esterilizacion')}}" type="button" class="pull-left buttonborder btn btn-default"> <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>&nbsp;regresar</a> &nbsp;Esterilización</h1><hr>*/
/* 	<div class="sectionstile">*/
/* 		<div class="row">*/
/* 			<div class="col-md-1">*/
/* 					<label class="marginlabel">Zona:</label>*/
/* 			</div>*/
/* 			<div class="col-md-3">*/
/* 				<input type="text" class="form-control" value="{{ meeting.address }}" disabled>*/
/* 			</div>*/
/* 			<div class="col-md-1">*/
/* 					<label class="marginlabel">Fecha:</label>*/
/* 			</div>*/
/* 			<div class="col-md-3">*/
/* 				<input type="text" class="form-control" value="{{ controlAt }}" disabled>*/
/* 			</div>*/
/* 			<div class="col-md-1"><label class="marginlabel">Costo:</label></div>*/
/* 			<div class="col-md-3"><input type="text" class="form-control" value="${{ amount }}" disabled>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* 		<hr>*/
/*            <h4 class="podingtitle1">Mascotas en espera</h4>*/
/*            <table class="tabl table-striped">*/
/*               <thead>*/
/*                 <tr class="tdb">*/
/*                   <th>Nombre mascota</th>*/
/*                   <th>Especie</th>*/
/*                   <th>Raza</th>*/
/*                   <th>Color</th>*/
/*                   <th class="tdxs">Edad</th>*/
/*                   <th class="tdxs">¿esterilizada?</th>*/
/*                   <th class="tdxs">responsable</th>*/
/*                   <th class="tdxs">operación</th>*/
/*                   */
/*                 </tr>*/
/*               </thead>*/
/*               <tbody class="tdb">*/
/*                 {% for sterilization in sterilizations %}*/
/*                 {% if sterilization.pet.isSterilized == '0' %}*/
/*                 <tr>*/
/*                  */
/*                   <td>{{ sterilization.pet.name }}</td>*/
/*                   <td>*/
/*                     {% if sterilization.pet.species == 'CANINE' %}*/
/*                                     */
/*                     <strong>canino</strong>*/
/*                           */
/*                     {% elseif sterilization.pet.species == 'FELINE' %}*/
/*                           */
/*                     <strong>felino</strong>*/
/*                   */
/*                     {%endif%}*/
/*                   </td>*/
/*                   <td>{{ sterilization.pet.race }}</td>*/
/*                   <td>{{ sterilization.pet.colour }}</td>*/
/*                   <td class="text-center">{{ sterilization.pet.age }}</td>*/
/*                   <td class="text-center">*/
/*                     {% if sterilization.pet.isSterilized == '0' %}*/
/*                               */
/*                       <strong>NO</strong>*/
/*                               */
/*                       {% elseif sterilization.pet.isSterilized == '1' %}*/
/*                               */
/*                       <strong>SI</strong>*/
/*                       */
/*                     {%endif%}*/
/*                   </td>*/
/*                   <td class="text-center"><a href="" data-toggle="modal" data-target="#myModa{{ sterilization.user.id }}">&nbsp;<span class="glyphicon glyphicon-user" aria-hidden="true"></a>*/
/*                     <div class="modal fade bs-example-modal-sm" id="myModa{{ sterilization.user.id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
/*                       <div class="modal-dialog modal-sm">*/
/*                         <div class="modal-content">*/
/*                   */
/*                           <div class="timod modal-header">*/
/*                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>*/
/*                             <h5 class="modal-title" id="exampleModalLabel">Información de responsable<span class="btn-lg glyphicon glyphicon-user" aria-hidden="true"></span></h5>*/
/*                           </div>*/
/* */
/*                           <div class="modal-body">*/
/*                             <form>*/
/*                               <div class="form-group">*/
/*                                 <label for="recipient-name" class="control-label">Nombre:</label>*/
/*                                 <input type="text" class="form-control" id="recipient-name"*/
/*                                 value="{{ sterilization.user.name }}&nbsp;{{ sterilization.user.lastName }}" disabled>*/
/*                               </div>*/
/*       */
/*                               <div class="form-group">*/
/*                                 <label for="recipient-name" class="control-label">Edad:</label>*/
/*                                 <input type="text" class="form-control" id="recipient-name"*/
/*                                 value="{{ sterilization.user.age }}" disabled>*/
/*                               </div>*/
/*                               */
/*                               <div class="form-group">*/
/*                                 <label for="recipient-name" class="control-label">Dirección:</label>*/
/*                                 <input type="text" class="form-control" id="recipient-name"*/
/*                                 value="{{ sterilization.user.address }}" disabled>*/
/*                               </div>*/
/*       */
/*                               <div class="form-group">*/
/*                                 <label for="recipient-name" class="control-label">Telefono:</label>*/
/*                                 <input type="text" class="form-control" id="recipient-name"*/
/*                                 value="{{ sterilization.user.phoneNumber }}" disabled>*/
/*                               </div>*/
/*                               */
/*                               <div class="form-group">*/
/*                                 <label for="recipient-name" class="control-label">Correo:</label>*/
/*                                 <input type="text" class="form-control" id="recipient-name"*/
/*                                 value="{{ sterilization.user.email }}" disabled>*/
/*                               </div>*/
/*                             </form>*/
/*                           </div>*/
/* */
/*                           <div class="modal-footer">*/
/*                             <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   </td>*/
/*                   <td class="text-center"><a class="colorok btn btn-default" ta-toggle="tooltip" href="{{ path('pc_admin_esterilizacion_update_list',{'petId':sterilization.pet.id,'meetingId' : meeting.id, 'controlAt' : controlAt, 'amount' : amount} ) }}" data-placement="top" title="se esterilizo"><span class="glyphicon glyphicon-ok" aria-hidden="true"></a></td>*/
/*                 </tr>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*               </tbody>*/
/*             </table>*/
/*             <br>*/
/*             <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">*/
/*           <div class="margnone panel panel-default">*/
/*             <div class="paddinnot panel-heading" role="tab" id="headingOne">*/
/*               <h4 class="panel-title">*/
/*                 <a role="button" data-toggle="collapse" data-parent="#accordion" href="#controlOne" aria-expanded="false" aria-controls="collapseOne">*/
/*                     <h4 class="podingtitle1">Mascotas esterilizadas</h4>*/
/*                 </a>*/
/*               </h4>*/
/*             </div>*/
/*             <div id="controlOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">*/
/*               <div class="panel-body">*/
/*               <table class="tabl table-striped">*/
/*                      <thead>*/
/*                         <tr class="tdb">*/
/*                           <th>Nombre mascota</th>*/
/*                           <th>Especie</th>*/
/*                           <th>Raza</th>*/
/*                           <th>Color</th>*/
/*                           <th class="tdxs">Edad</th>*/
/*                           <th class="tdxs">¿esterilizada?</th>*/
/*                           <th class="tdxs">responsable</th>*/
/*                           <th class="tdxs">operación</th>*/
/*                           */
/*                         </tr>*/
/*                       </thead>*/
/*                       <tbody class="tdb">*/
/*                         */
/*                         {% for sterilization in sterilizations %}*/
/*                         {% if sterilization.pet.isSterilized == "1" %}*/
/*                         <tr>*/
/*                           <td>{{ sterilization.pet.name }}</td>*/
/*                           <td>*/
/*                             {% if sterilization.pet.species == 'CANINE' %}*/
/*                                   */
/*                             <strong>canino</strong>*/
/*                                   */
/*                             {% elseif sterilization.pet.species == 'FELINE' %}*/
/*                                   */
/*                             <strong>felino</strong>*/
/*                           */
/*                             {%endif%}*/
/*                           </td>*/
/*                           <td>{{ sterilization.pet.race }}</td>*/
/*                           <td>{{ sterilization.pet.colour }}</td>*/
/*                           <td class="text-center">{{ sterilization.pet.age }}</td>*/
/*                           <td class="text-center">*/
/*                             {% if sterilization.pet.isSterilized == '0' %}*/
/*                                   */
/*                             <strong>NO</strong>*/
/*                                   */
/*                             {% elseif sterilization.pet.isSterilized == '1' %}*/
/*                                   */
/*                             <strong>SI</strong>*/
/*                           */
/*                             {%endif%}*/
/*                           </td>*/
/*                           */
/*                           <td class="text-center"><a href="" data-toggle="modal" data-target="#myModa{{ sterilization.user.id }}">&nbsp;<span class="glyphicon glyphicon-user" aria-hidden="true"></a>*/
/*         */
/*                             <div class="modal fade bs-example-modal-sm" id="myModa{{ sterilization.user.id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
/*                       <div class="modal-dialog modal-sm">*/
/*                         <div class="modal-content">*/
/*                           */
/*                           <div class="timod modal-header">*/
/*                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>*/
/*                             <h5 class="modal-title" id="exampleModalLabel">Información de responsable<span class="btn-lg glyphicon glyphicon-user" aria-hidden="true"></span></h5>*/
/*                           </div>*/
/*         */
/*                            <div class="modal-body">*/
/*                               <form>*/
/*                                 <div class="form-group">*/
/*                                   <label for="recipient-name" class="control-label">Nombre:</label>*/
/*                                   <input type="text" class="form-control" id="recipient-name"*/
/*                                   value="{{ sterilization.user.name }}&nbsp;{{ sterilization.user.lastName }}" disabled>*/
/*                                 </div>*/
/*         */
/*                                 <div class="form-group">*/
/*                                   <label for="recipient-name" class="control-label">Edad:</label>*/
/*                                   <input type="text" class="form-control" id="recipient-name"*/
/*                                   value="{{ sterilization.user.age }}" disabled>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                   <label for="recipient-name" class="control-label">Dirección:</label>*/
/*                                   <input type="text" class="form-control" id="recipient-name"*/
/*                                   value="{{ sterilization.user.address }}" disabled>*/
/*                                 </div>*/
/*         */
/*                                 <div class="form-group">*/
/*                                   <label for="recipient-name" class="control-label">Telefono:</label>*/
/*                                   <input type="text" class="form-control" id="recipient-name"*/
/*                                   value="{{ sterilization.user.phoneNumber }}" disabled>*/
/*                                 </div>*/
/*                                 */
/*                                 <div class="form-group">*/
/*                                   <label for="recipient-name" class="control-label">Correo:</label>*/
/*                                   <input type="text" class="form-control" id="recipient-name"*/
/*                                   value="{{ sterilization.user.email }}" disabled>*/
/*                                 </div>*/
/*                               </form>*/
/*                             </div>*/
/*         */
/*                             <div class="modal-footer">*/
/*                               <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>*/
/*                             </div>*/
/*                       </div>*/
/*                       </div>*/
/*                     </div>*/
/*         */
/*                           </td>*/
/*                           <td class="text-center"><a class="coloremuve btn btn-default" href="{{ path('pc_admin_esterilizacion_update_list',{'petId':sterilization.pet.id, 'meetingId' : meeting.id, 'controlAt' : controlAt, 'amount' : amount} ) }}" ta-toggle="tooltip" data-placement="top" title="no se esterilizo"><span class="glyphicon glyphicon-remove" aria-hidden="true"></a></td>*/
/*                         </tr>*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                         */
/*                         */
/*                       </tbody>*/
/*                     </table> */
/*         */
/*                 </div><!--panel-body close-->*/
/*               </div>*/
/*             </div>*/
/*   */
/* 	</div><!-- div sectionstile close -->*/
/* */
/* {% endblock %}*/
