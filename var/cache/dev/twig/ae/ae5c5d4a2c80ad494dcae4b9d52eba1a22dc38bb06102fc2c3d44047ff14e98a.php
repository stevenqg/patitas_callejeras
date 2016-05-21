<?php

/* PCFundationBundle:Admin:cotrol.html.twig */
class __TwigTemplate_ab2832efb79db36721796d8eb8895e46793efa35c242be3bc58af3e20bbb8944 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:cotrol.html.twig", 1);
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
        $__internal_1a5c35293dc7403c9b664215ade88c03c49e9f1cc840f42e7da16d76dd2a21d8 = $this->env->getExtension("native_profiler");
        $__internal_1a5c35293dc7403c9b664215ade88c03c49e9f1cc840f42e7da16d76dd2a21d8->enter($__internal_1a5c35293dc7403c9b664215ade88c03c49e9f1cc840f42e7da16d76dd2a21d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:cotrol.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a5c35293dc7403c9b664215ade88c03c49e9f1cc840f42e7da16d76dd2a21d8->leave($__internal_1a5c35293dc7403c9b664215ade88c03c49e9f1cc840f42e7da16d76dd2a21d8_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_939695f25f5ea52b05a6848cc93fe08a2cdd58e35e155750e57ba89ed71af7b4 = $this->env->getExtension("native_profiler");
        $__internal_939695f25f5ea52b05a6848cc93fe08a2cdd58e35e155750e57ba89ed71af7b4->enter($__internal_939695f25f5ea52b05a6848cc93fe08a2cdd58e35e155750e57ba89ed71af7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "
\t<h1 class=\"titulosection\">Control Pos_ Operatorio</h1>
\t<div class=\"sectionstile\">
  \t<table class=\"podingtitle1 table table-hover\">
      <thead>
        <tr>
          <th class=\"tddm text-center\">Zona</th>
          <th class=\"tddm text-center\">FEcha de realización</th>
          <th class=\"tddm text-center\"> \$ costo total</th>
          <th class=\"tdmd text-center\">mas</th>
        </tr>
      </thead>
  \t</table>
  \t<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
      ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meetings"]) ? $context["meetings"] : $this->getContext($context, "meetings")));
        foreach ($context['_seq'] as $context["_key"] => $context["meeting"]) {
            // line 18
            echo "      <div class=\"margnone panel panel-default\">
        <div class=\"paddinnot panel-heading\" role=\"tab\" id=\"headingOne\">
          <h4 class=\"panel-title\">
            <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#controlOne";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["meeting"], "meeting", array()), "id", array()), "html", null, true);
            echo "\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
               <table class=\" margnone table table-hover\">
                  <tbody>
                    <tr>
                      <td class=\"tddm\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["meeting"], "meeting", array()), "address", array()), "html", null, true);
            echo "</td>
                      <td class=\"tddm text-center\">";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["meeting"], "control_at", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                      <td class=\"tddm text-center\">\$";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["meeting"], "totalAmount", array()), "html", null, true);
            echo "</td>
                      <td class=\"tdmd text-center\"><a href=\"censo.html\">&nbsp;<span class=\"glyphicon glyphicon-arrow-down\" aria-hidden=\"true\"></a></td>
                    </tr>
                   </tbody>
                </table>
            </a>
          </h4>
        </div>
        <div id=\"controlOne";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["meeting"], "meeting", array()), "id", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
          <div class=\"panel-body\">
            <table class=\"tabl table-striped\">
             \t<caption>Administrador: </caption>
             \t<thead>
             \t\t<tr><td class=\"pestree text-center\" colspan=\"3\">datos del Animal</td>
                      <td  class=\"pestree text-center\" colspan=\"3\">datos responsable</td>
                      <td  class=\"pestree text-center\" colspan=\"3\">control</td>
                    </tr>
             \t\t<tr>
             \t\t\t<th>nombre</th>
             \t\t\t<th>specie</th>
             \t\t\t<th>genero</th>
             \t\t\t<th>nombre</th>
             \t\t\t<th>teléfono</th>
             \t\t\t<th>dirección</th>
             \t\t\t<th>estado</th>
             \t\t\t<th>comentario</th>
             \t\t\t<th></th>
             \t\t</tr>
             \t</thead>
             \t<tbody>
             \t  ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sterilizations"]) ? $context["sterilizations"] : $this->getContext($context, "sterilizations")));
            foreach ($context['_seq'] as $context["_key"] => $context["sterilization"]) {
                // line 58
                echo "             \t\t";
                if ((($this->getAttribute($this->getAttribute($context["sterilization"], "meeting", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["meeting"], "meeting", array()), "id", array())) && ($this->getAttribute($this->getAttribute($context["sterilization"], "pet", array()), "isSterilized", array()) == 1))) {
                    // line 59
                    echo "             \t\t<tr>
             \t\t\t<td>";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "pet", array()), "name", array()), "html", null, true);
                    echo "</td>
             \t\t\t<td>
             \t\t\t  ";
                    // line 62
                    if (($this->getAttribute($this->getAttribute($context["sterilization"], "pet", array()), "species", array()) == "CANINE")) {
                        // line 63
                        echo "                                    
                    <strong>canino</strong>
                          
                    ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 66
$context["sterilization"], "pet", array()), "species", array()) == "FELINE")) {
                        // line 67
                        echo "                          
                    <strong>felino</strong>
                  
                    ";
                    }
                    // line 71
                    echo "             \t\t\t</td>
             \t\t\t<td>
             \t\t\t  ";
                    // line 73
                    if (($this->getAttribute($this->getAttribute($context["sterilization"], "pet", array()), "gender", array()) == "MALE")) {
                        // line 74
                        echo "                                    
                    <strong>macho</strong>
                          
                    ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 77
$context["sterilization"], "pet", array()), "gender", array()) == "FEMALE")) {
                        // line 78
                        echo "                          
                    <strong>hembra</strong>
                  
                    ";
                    }
                    // line 82
                    echo "             \t\t\t</td>
             \t\t\t<td>";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "user", array()), "name", array()), "html", null, true);
                    echo "</td>
             \t\t\t<td>";
                    // line 84
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "user", array()), "phoneNumber", array()), "html", null, true);
                    echo "</td>
             \t\t\t<td>";
                    // line 85
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sterilization"], "user", array()), "address", array()), "html", null, true);
                    echo "</td>
             \t\t\t";
                    // line 86
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["controls"]) ? $context["controls"] : $this->getContext($context, "controls")));
                    foreach ($context['_seq'] as $context["_key"] => $context["control"]) {
                        // line 87
                        echo "               \t\t\t";
                        if (($this->getAttribute($this->getAttribute($context["control"], "sterilization", array()), "id", array()) == $this->getAttribute($context["sterilization"], "id", array()))) {
                            // line 88
                            echo "                 \t\t\t  ";
                            if (($this->getAttribute($context["control"], "isSatisfactory", array()) == 0)) {
                                // line 89
                                echo "                          <td> insatisfactorio </td>
                        ";
                            } elseif (($this->getAttribute(                            // line 90
$context["control"], "isSatisfactory", array()) == 1)) {
                                echo " 
                          <td> satisfactorio </td>
                 \t\t\t  ";
                            }
                            // line 93
                            echo "                 \t\t\t<td>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["control"], "comment", array()), "html", null, true);
                            echo "</td>
               \t\t\t";
                        }
                        // line 95
                        echo "             \t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['control'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 96
                    echo "
             \t\t\t<td class=\"tdxs\"><a href=\"";
                    // line 97
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_administrator_control_add", array("sterilizationId" => $this->getAttribute($context["sterilization"], "id", array()))), "html", null, true);
                    echo "\" onclick=\"window.open(this.href, this.target,'width=360,height=500'); return false\" class=\"btn btn-default \"><span class=\"coloralert   glyphicon glyphicon-plus-sign\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" aria-hidden=\"true\" data-original-title=\"agregar control\"></span></a></td>
             \t\t</tr>
             \t\t";
                }
                // line 100
                echo "             \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sterilization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "             \t</tbody>
             </table> 
    
            </div><!--panel-body close-->
          </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meeting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "   </div>
\t</div>\t
";
        
        $__internal_939695f25f5ea52b05a6848cc93fe08a2cdd58e35e155750e57ba89ed71af7b4->leave($__internal_939695f25f5ea52b05a6848cc93fe08a2cdd58e35e155750e57ba89ed71af7b4_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:cotrol.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 108,  226 => 101,  220 => 100,  214 => 97,  211 => 96,  205 => 95,  199 => 93,  193 => 90,  190 => 89,  187 => 88,  184 => 87,  180 => 86,  176 => 85,  172 => 84,  168 => 83,  165 => 82,  159 => 78,  157 => 77,  152 => 74,  150 => 73,  146 => 71,  140 => 67,  138 => 66,  133 => 63,  131 => 62,  126 => 60,  123 => 59,  120 => 58,  116 => 57,  91 => 35,  80 => 27,  76 => 26,  72 => 25,  65 => 21,  60 => 18,  56 => 17,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* */
/* 	<h1 class="titulosection">Control Pos_ Operatorio</h1>*/
/* 	<div class="sectionstile">*/
/*   	<table class="podingtitle1 table table-hover">*/
/*       <thead>*/
/*         <tr>*/
/*           <th class="tddm text-center">Zona</th>*/
/*           <th class="tddm text-center">FEcha de realización</th>*/
/*           <th class="tddm text-center"> $ costo total</th>*/
/*           <th class="tdmd text-center">mas</th>*/
/*         </tr>*/
/*       </thead>*/
/*   	</table>*/
/*   	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">*/
/*       {% for meeting in meetings %}*/
/*       <div class="margnone panel panel-default">*/
/*         <div class="paddinnot panel-heading" role="tab" id="headingOne">*/
/*           <h4 class="panel-title">*/
/*             <a role="button" data-toggle="collapse" data-parent="#accordion" href="#controlOne{{meeting.meeting.id}}" aria-expanded="false" aria-controls="collapseOne">*/
/*                <table class=" margnone table table-hover">*/
/*                   <tbody>*/
/*                     <tr>*/
/*                       <td class="tddm">{{ meeting.meeting.address }}</td>*/
/*                       <td class="tddm text-center">{{ meeting.control_at| date("m/d/Y")}}</td>*/
/*                       <td class="tddm text-center">${{ meeting.totalAmount }}</td>*/
/*                       <td class="tdmd text-center"><a href="censo.html">&nbsp;<span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></a></td>*/
/*                     </tr>*/
/*                    </tbody>*/
/*                 </table>*/
/*             </a>*/
/*           </h4>*/
/*         </div>*/
/*         <div id="controlOne{{meeting.meeting.id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">*/
/*           <div class="panel-body">*/
/*             <table class="tabl table-striped">*/
/*              	<caption>Administrador: </caption>*/
/*              	<thead>*/
/*              		<tr><td class="pestree text-center" colspan="3">datos del Animal</td>*/
/*                       <td  class="pestree text-center" colspan="3">datos responsable</td>*/
/*                       <td  class="pestree text-center" colspan="3">control</td>*/
/*                     </tr>*/
/*              		<tr>*/
/*              			<th>nombre</th>*/
/*              			<th>specie</th>*/
/*              			<th>genero</th>*/
/*              			<th>nombre</th>*/
/*              			<th>teléfono</th>*/
/*              			<th>dirección</th>*/
/*              			<th>estado</th>*/
/*              			<th>comentario</th>*/
/*              			<th></th>*/
/*              		</tr>*/
/*              	</thead>*/
/*              	<tbody>*/
/*              	  {% for sterilization in sterilizations %}*/
/*              		{% if sterilization.meeting.id == meeting.meeting.id and sterilization.pet.isSterilized == 1 %}*/
/*              		<tr>*/
/*              			<td>{{ sterilization.pet.name }}</td>*/
/*              			<td>*/
/*              			  {% if sterilization.pet.species == 'CANINE' %}*/
/*                                     */
/*                     <strong>canino</strong>*/
/*                           */
/*                     {% elseif sterilization.pet.species == 'FELINE' %}*/
/*                           */
/*                     <strong>felino</strong>*/
/*                   */
/*                     {%endif%}*/
/*              			</td>*/
/*              			<td>*/
/*              			  {% if sterilization.pet.gender == 'MALE' %}*/
/*                                     */
/*                     <strong>macho</strong>*/
/*                           */
/*                     {% elseif sterilization.pet.gender == 'FEMALE' %}*/
/*                           */
/*                     <strong>hembra</strong>*/
/*                   */
/*                     {%endif%}*/
/*              			</td>*/
/*              			<td>{{ sterilization.user.name }}</td>*/
/*              			<td>{{ sterilization.user.phoneNumber }}</td>*/
/*              			<td>{{ sterilization.user.address }}</td>*/
/*              			{% for control in controls %}*/
/*                			{% if control.sterilization.id == sterilization.id %}*/
/*                  			  {% if control.isSatisfactory == 0 %}*/
/*                           <td> insatisfactorio </td>*/
/*                         {% elseif control.isSatisfactory == 1%} */
/*                           <td> satisfactorio </td>*/
/*                  			  {% endif %}*/
/*                  			<td>{{ control.comment }}</td>*/
/*                			{% endif %}*/
/*              			{% endfor %}*/
/* */
/*              			<td class="tdxs"><a href="{{path('pc_administrator_control_add', {'sterilizationId' : sterilization.id })}}" onclick="window.open(this.href, this.target,'width=360,height=500'); return false" class="btn btn-default "><span class="coloralert   glyphicon glyphicon-plus-sign" data-toggle="tooltip" data-placement="top" title="" aria-hidden="true" data-original-title="agregar control"></span></a></td>*/
/*              		</tr>*/
/*              		{% endif %}*/
/*              		{% endfor %}*/
/*              	</tbody>*/
/*              </table> */
/*     */
/*             </div><!--panel-body close-->*/
/*           </div>*/
/*         </div>*/
/*       {% endfor %}*/
/*    </div>*/
/* 	</div>	*/
/* {% endblock %}*/
