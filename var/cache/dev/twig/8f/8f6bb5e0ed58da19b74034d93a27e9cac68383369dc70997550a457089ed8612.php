<?php

/* PCFundationBundle:Admin:Masct_adopcion.html.twig */
class __TwigTemplate_ad4b0d62f5f159a5a2be23c233de94eb976199a40a5abdfe2fa2132427d50264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:Masct_adopcion.html.twig", 1);
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
        $__internal_2d41bf4872b9895ca5d94415f1121dea2cafa040732a9bee8b9565490842f8bc = $this->env->getExtension("native_profiler");
        $__internal_2d41bf4872b9895ca5d94415f1121dea2cafa040732a9bee8b9565490842f8bc->enter($__internal_2d41bf4872b9895ca5d94415f1121dea2cafa040732a9bee8b9565490842f8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:Masct_adopcion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d41bf4872b9895ca5d94415f1121dea2cafa040732a9bee8b9565490842f8bc->leave($__internal_2d41bf4872b9895ca5d94415f1121dea2cafa040732a9bee8b9565490842f8bc_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_d88a43827ae899e29fe80546a3c607a92362b71799a7c74d0263fadb94c62b29 = $this->env->getExtension("native_profiler");
        $__internal_d88a43827ae899e29fe80546a3c607a92362b71799a7c74d0263fadb94c62b29->enter($__internal_d88a43827ae899e29fe80546a3c607a92362b71799a7c74d0263fadb94c62b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "\t<div>
\t\t
\t\t\t<h1 class=\"coloralert\">Mascotas para adopción</h1>

\t\t<hr><br>
\t\t<div class=\"sectionsile\">
\t\t\t     
\t\t\t<div>

\t\t\t  <!-- Nav tabs -->
\t\t\t  <ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t    <li role=\"presentation\" class=\"active\"><a href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">Perros</a></li>
\t\t\t    <li role=\"presentation\"><a href=\"#profile\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\">gatos</a></li>
\t\t\t    <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("pc_administrator_pet_add");
        echo "\" type=\"button\" class=\"btn btn-primary\">Agregar mascota</a></li>
\t\t\t  </ul>

\t\t\t  <!-- Tab panes -->
\t\t\t  <div class=\"tab-content\">
\t\t\t    <div role=\"tabpanel\" class=\"conmargin tab-pane active\" id=\"home\"><br>
\t\t\t      \t<table class=\"table table-striped \">
              <thead>
                <tr>
                  
                  <th>Nombre</th>
                  <th>Edad</th>
                  <th>Color</th>
                  <th>Sexo</th>
                  <th>Rasgo</th>
                  <th class=\"tdmd\">esteril</th>
                  <th class=\"tdmd\">Vacunas</th>
                  <th class=\"tdxs\">ver</th>


                </tr>
              </thead>
              <tbody>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pets"]) ? $context["pets"] : $this->getContext($context, "pets")));
        foreach ($context['_seq'] as $context["_key"] => $context["pet"]) {
            // line 40
            echo "                      ";
            if (((($this->getAttribute($context["pet"], "species", array()) == "CANINE") && ($this->getAttribute($context["pet"], "status", array()) != "ADOPTED")) && ($this->getAttribute($context["pet"], "status", array()) != "EXTERNAL"))) {
                // line 41
                echo "                      <tr>
                          <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "name", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "age", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "colour", array()), "html", null, true);
                echo "</td>
                          <td>
                            ";
                // line 46
                if (($this->getAttribute($context["pet"], "gender", array()) == "MALE")) {
                    // line 47
                    echo "                              
                              <strong>macho</strong>
                              
                              ";
                } elseif (($this->getAttribute(                // line 50
$context["pet"], "gender", array()) == "FEMALE")) {
                    // line 51
                    echo "                              
                              <strong>hembra</strong>
                              
                            ";
                }
                // line 55
                echo "                          </td>
                          <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "race", array()), "html", null, true);
                echo "</td>
                          <td>
                            ";
                // line 58
                if (($this->getAttribute($context["pet"], "isSterilized", array()) == 1)) {
                    // line 59
                    echo "                              
                              <strong>si</strong>
                              
                              ";
                } elseif (($this->getAttribute(                // line 62
$context["pet"], "isSterilized", array()) == 0)) {
                    // line 63
                    echo "                              
                              <strong>no</strong>
                              
                            ";
                }
                // line 67
                echo "                          </td>
                          <td>
                            ";
                // line 69
                if (($this->getAttribute($context["pet"], "isVacunated", array()) == 1)) {
                    // line 70
                    echo "                              
                              <strong>si</strong>
                              
                              ";
                } elseif (($this->getAttribute(                // line 73
$context["pet"], "isVacunated", array()) == 0)) {
                    // line 74
                    echo "                              
                              <strong>no</strong>
                              
                            ";
                }
                // line 78
                echo "                          </td>
                          <td><a href=\"";
                // line 79
                echo $this->env->getExtension('routing')->getPath("pc_admin_adopt_pet_info");
                echo "\" id=\"vermas\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"ver datos\"><span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span></a></td>
                      </tr>        
                      ";
            }
            // line 82
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "              </tbody>
            </table>
\t\t\t    </div>
\t\t\t    <div role=\"tabpanel\" class=\"conmargin tab-pane\" id=\"profile\">
\t\t\t    \t<br>
\t\t\t      \t<table class=\"table table-striped \">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Edad</th>
                  <th>Color</th>
                  <th>Sexo</th>
                  <th>Raza</th>
                  <th class=\"tdmd\">esterilizada</th>
                  <th class=\"tdmd\">Vacunada</th>
                  <th class=\"tdxs\">ver</th>

                </tr>
              </thead>
              <tbody>
                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pets"]) ? $context["pets"] : $this->getContext($context, "pets")));
        foreach ($context['_seq'] as $context["_key"] => $context["pet"]) {
            // line 104
            echo "                      ";
            if (((($this->getAttribute($context["pet"], "species", array()) == "FELINE") && ($this->getAttribute($context["pet"], "status", array()) != "ADOPTED")) && ($this->getAttribute($context["pet"], "status", array()) != "EXTERNAL"))) {
                // line 105
                echo "                      <tr>
                          <td>";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "name", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "age", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "colour", array()), "html", null, true);
                echo "</td>
                          <td>
                            ";
                // line 110
                if (($this->getAttribute($context["pet"], "gender", array()) == "MALE")) {
                    // line 111
                    echo "                              
                              <strong>macho</strong>
                              
                              ";
                } elseif (($this->getAttribute(                // line 114
$context["pet"], "gender", array()) == "FEMALE")) {
                    // line 115
                    echo "                              
                              <strong>hembra</strong>
                              
                            ";
                }
                // line 119
                echo "                          </td>
                          <td>";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "race", array()), "html", null, true);
                echo "</td>
                          <td>
                            ";
                // line 122
                if (($this->getAttribute($context["pet"], "isSterilized", array()) == 1)) {
                    // line 123
                    echo "                              
                              <strong>si</strong>
                              
                              ";
                } elseif (($this->getAttribute(                // line 126
$context["pet"], "isSterilized", array()) == 0)) {
                    // line 127
                    echo "                              
                              <strong>no</strong>
                              
                            ";
                }
                // line 131
                echo "                          </td>
                          <td>
                            ";
                // line 133
                if (($this->getAttribute($context["pet"], "isVacunated", array()) == 1)) {
                    // line 134
                    echo "                              
                              <strong>si</strong>
                              
                              ";
                } elseif (($this->getAttribute(                // line 137
$context["pet"], "isVacunated", array()) == 0)) {
                    // line 138
                    echo "                              
                              <strong>no</strong>
                              
                            ";
                }
                // line 142
                echo "                          </td>
                          <td><a href=\"";
                // line 143
                echo $this->env->getExtension('routing')->getPath("pc_admin_adopt_pet_info");
                echo "\" id=\"vermas\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"ver datos\"><span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span></a></td>
                      </tr>        
                      ";
            }
            // line 146
            echo "                      
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "              </tbody>
            </table>
\t\t\t    </div>
\t\t\t  </div>

\t\t\t</div><!-- div close panel tab-->
\t\t</div><!--div close sectionstile 2 -->
\t</div>
";
        
        $__internal_d88a43827ae899e29fe80546a3c607a92362b71799a7c74d0263fadb94c62b29->leave($__internal_d88a43827ae899e29fe80546a3c607a92362b71799a7c74d0263fadb94c62b29_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:Masct_adopcion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 148,  287 => 146,  281 => 143,  278 => 142,  272 => 138,  270 => 137,  265 => 134,  263 => 133,  259 => 131,  253 => 127,  251 => 126,  246 => 123,  244 => 122,  239 => 120,  236 => 119,  230 => 115,  228 => 114,  223 => 111,  221 => 110,  216 => 108,  212 => 107,  208 => 106,  205 => 105,  202 => 104,  198 => 103,  176 => 83,  170 => 82,  164 => 79,  161 => 78,  155 => 74,  153 => 73,  148 => 70,  146 => 69,  142 => 67,  136 => 63,  134 => 62,  129 => 59,  127 => 58,  122 => 56,  119 => 55,  113 => 51,  111 => 50,  106 => 47,  104 => 46,  99 => 44,  95 => 43,  91 => 42,  88 => 41,  85 => 40,  81 => 39,  55 => 16,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* 	<div>*/
/* 		*/
/* 			<h1 class="coloralert">Mascotas para adopción</h1>*/
/* */
/* 		<hr><br>*/
/* 		<div class="sectionsile">*/
/* 			     */
/* 			<div>*/
/* */
/* 			  <!-- Nav tabs -->*/
/* 			  <ul class="nav nav-tabs" role="tablist">*/
/* 			    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Perros</a></li>*/
/* 			    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">gatos</a></li>*/
/* 			    <li><a href="{{ path('pc_administrator_pet_add') }}" type="button" class="btn btn-primary">Agregar mascota</a></li>*/
/* 			  </ul>*/
/* */
/* 			  <!-- Tab panes -->*/
/* 			  <div class="tab-content">*/
/* 			    <div role="tabpanel" class="conmargin tab-pane active" id="home"><br>*/
/* 			      	<table class="table table-striped ">*/
/*               <thead>*/
/*                 <tr>*/
/*                   */
/*                   <th>Nombre</th>*/
/*                   <th>Edad</th>*/
/*                   <th>Color</th>*/
/*                   <th>Sexo</th>*/
/*                   <th>Rasgo</th>*/
/*                   <th class="tdmd">esteril</th>*/
/*                   <th class="tdmd">Vacunas</th>*/
/*                   <th class="tdxs">ver</th>*/
/* */
/* */
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% for pet in pets %}*/
/*                       {% if pet.species == 'CANINE' and pet.status !='ADOPTED' and pet.status != 'EXTERNAL' %}*/
/*                       <tr>*/
/*                           <td>{{ pet.name }}</td>*/
/*                           <td>{{ pet.age }}</td>*/
/*                           <td>{{ pet.colour }}</td>*/
/*                           <td>*/
/*                             {% if pet.gender == 'MALE'%}*/
/*                               */
/*                               <strong>macho</strong>*/
/*                               */
/*                               {% elseif pet.gender == 'FEMALE'%}*/
/*                               */
/*                               <strong>hembra</strong>*/
/*                               */
/*                             {%endif%}*/
/*                           </td>*/
/*                           <td>{{ pet.race }}</td>*/
/*                           <td>*/
/*                             {% if pet.isSterilized == 1 %}*/
/*                               */
/*                               <strong>si</strong>*/
/*                               */
/*                               {% elseif pet.isSterilized == 0 %}*/
/*                               */
/*                               <strong>no</strong>*/
/*                               */
/*                             {%endif%}*/
/*                           </td>*/
/*                           <td>*/
/*                             {% if pet.isVacunated == 1 %}*/
/*                               */
/*                               <strong>si</strong>*/
/*                               */
/*                               {% elseif pet.isVacunated == 0 %}*/
/*                               */
/*                               <strong>no</strong>*/
/*                               */
/*                             {%endif%}*/
/*                           </td>*/
/*                           <td><a href="{{path('pc_admin_adopt_pet_info')}}" id="vermas" data-toggle="tooltip" data-placement="right" title="ver datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>*/
/*                       </tr>        */
/*                       {%endif%}*/
/*                 {% endfor %}*/
/*               </tbody>*/
/*             </table>*/
/* 			    </div>*/
/* 			    <div role="tabpanel" class="conmargin tab-pane" id="profile">*/
/* 			    	<br>*/
/* 			      	<table class="table table-striped ">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <th>Nombre</th>*/
/*                   <th>Edad</th>*/
/*                   <th>Color</th>*/
/*                   <th>Sexo</th>*/
/*                   <th>Raza</th>*/
/*                   <th class="tdmd">esterilizada</th>*/
/*                   <th class="tdmd">Vacunada</th>*/
/*                   <th class="tdxs">ver</th>*/
/* */
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% for pet in pets %}*/
/*                       {% if pet.species == 'FELINE' and pet.status !='ADOPTED' and pet.status != 'EXTERNAL' %}*/
/*                       <tr>*/
/*                           <td>{{ pet.name }}</td>*/
/*                           <td>{{ pet.age }}</td>*/
/*                           <td>{{ pet.colour }}</td>*/
/*                           <td>*/
/*                             {% if pet.gender == 'MALE'%}*/
/*                               */
/*                               <strong>macho</strong>*/
/*                               */
/*                               {% elseif pet.gender == 'FEMALE'%}*/
/*                               */
/*                               <strong>hembra</strong>*/
/*                               */
/*                             {%endif%}*/
/*                           </td>*/
/*                           <td>{{ pet.race }}</td>*/
/*                           <td>*/
/*                             {% if pet.isSterilized == 1 %}*/
/*                               */
/*                               <strong>si</strong>*/
/*                               */
/*                               {% elseif pet.isSterilized == 0 %}*/
/*                               */
/*                               <strong>no</strong>*/
/*                               */
/*                             {%endif%}*/
/*                           </td>*/
/*                           <td>*/
/*                             {% if pet.isVacunated == 1 %}*/
/*                               */
/*                               <strong>si</strong>*/
/*                               */
/*                               {% elseif pet.isVacunated == 0 %}*/
/*                               */
/*                               <strong>no</strong>*/
/*                               */
/*                             {%endif%}*/
/*                           </td>*/
/*                           <td><a href="{{path('pc_admin_adopt_pet_info')}}" id="vermas" data-toggle="tooltip" data-placement="right" title="ver datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>*/
/*                       </tr>        */
/*                       {%endif%}*/
/*                       */
/*                   {% endfor %}*/
/*               </tbody>*/
/*             </table>*/
/* 			    </div>*/
/* 			  </div>*/
/* */
/* 			</div><!-- div close panel tab-->*/
/* 		</div><!--div close sectionstile 2 -->*/
/* 	</div>*/
/* {% endblock %}*/
