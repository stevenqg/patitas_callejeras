<?php

/* PCFundationBundle:Admin:masc_adoptada.html.twig */
class __TwigTemplate_f8133f562bb31e20f522c24d57401c3e640eead4bea4d0f5b7be39e1b4401615 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:masc_adoptada.html.twig", 1);
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
        $__internal_b16d820619e60043090d637dfed7bfba46b2563ba34f0d2b843ea72eb36fd0d4 = $this->env->getExtension("native_profiler");
        $__internal_b16d820619e60043090d637dfed7bfba46b2563ba34f0d2b843ea72eb36fd0d4->enter($__internal_b16d820619e60043090d637dfed7bfba46b2563ba34f0d2b843ea72eb36fd0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:masc_adoptada.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b16d820619e60043090d637dfed7bfba46b2563ba34f0d2b843ea72eb36fd0d4->leave($__internal_b16d820619e60043090d637dfed7bfba46b2563ba34f0d2b843ea72eb36fd0d4_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_e25b2f58cf4c5d1a9254559ad8b620fa316666a6768444ee6f8f08f24f4eca55 = $this->env->getExtension("native_profiler");
        $__internal_e25b2f58cf4c5d1a9254559ad8b620fa316666a6768444ee6f8f08f24f4eca55->enter($__internal_e25b2f58cf4c5d1a9254559ad8b620fa316666a6768444ee6f8f08f24f4eca55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "\t\t
\t\t\t<h1 class=\"coloralert\">Mascotas Adoptadas</h1><hr>
\t\t\t<br>
\t\t<div class=\"sectionsile\">
\t\t\t
\t\t\t <table class=\"tabl table-striped\">
              <thead>
                <tr>
                  <td class=\"pest\" colspan=\"6\">Adoptante</td>
                  <td class=\"pest\" colspan=\"4\">Mascota</td>
                </tr>
                <tr class=\"tdb\">
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th class=\"tdxs\">Edad</th>
                  <th>Teléfono</th>
                  <th>Dirección</th>
                  <th>Correo</th>
                  <th class=\"bdleft\">Mascota</th>
                  <th>Edad</th>
                  <th>Estado solicitud</th>
                  <th class=\"tdxs\">ver</th>
                </tr>
              </thead>
              <tbody class=\"tdb\">
              ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adoptions"]) ? $context["adoptions"] : $this->getContext($context, "adoptions")));
        foreach ($context['_seq'] as $context["_key"] => $context["adoption"]) {
            // line 29
            echo "              <tr>
                  <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "user", array()), "name", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "user", array()), "lastName", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "user", array()), "age", array()), "html", null, true);
            echo " años</td>
                  <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "user", array()), "phone_number", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "user", array()), "address", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "user", array()), "email", array()), "html", null, true);
            echo "</td>
                  <td class=\"bdleft\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "pet", array()), "name", array()), "html", null, true);
            echo "</td>
                  <td class=\"tdxs\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "pet", array()), "age", array()), "html", null, true);
            echo " años</td>
                  <td>
                    ";
            // line 39
            if (($this->getAttribute($context["adoption"], "status", array()) == "APPROVED")) {
                // line 40
                echo "                    <strong> aprobada </strong>
                    ";
            } elseif (($this->getAttribute(            // line 41
$context["adoption"], "status", array()) == "DISAPPROVED")) {
                // line 42
                echo "                    <strong> denegada </strong>
                    ";
            } elseif (($this->getAttribute(            // line 43
$context["adoption"], "status", array()) == "PENDING")) {
                // line 44
                echo "                    <strong> pendiente </strong>
                    ";
            }
            // line 46
            echo "                  </td>
                    
                  
                  
                  
                  <td><a href=\"\"  data-toggle=\"modal\" data-target=\"#myModaladopt";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "pet", array()), "id", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span></a>
                  
                  <div class=\"modal fade bs-example-modal-sm\" id=\"myModaladopt";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "pet", array()), "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
                    <div class=\"modal-dialog modal-sm\">
                      <div class=\"modal-content\">
                  
                        <div class=\"timod modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"></button>
                          <h5 class=\"modal-title\" id=\"exampleModalLabel\">Información de la mascota </h5>
                        </div>

                        <div class=\"modal-body\">
                          <form>
                            <div class=\"form-group\">
                              <label for=\"recipient-name\" class=\"textjusti control-label\">Nombre:</label>
                              <input type=\"text\" value=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "pet", array()), "name", array()), "html", null, true);
            echo "\" class=\"form-control\" id=\"recipient-name\" disabled>
                            </div>
                            <div class=\"form-group\">
                              <label for=\"recipient-name\" class=\"textjusti control-label\">Edad:</label>
                              <input type=\"text\" value=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "pet", array()), "age", array()), "html", null, true);
            echo "\" class=\"form-control\" id=\"recipient-name\" disabled>
                            </div>
                            <div class=\"form-group\">
                              <label for=\"recipient-name\" class=\"textjusti control-label\">especie:</label>
                              <input type=\"text\" value=\"";
            // line 74
            if (($this->getAttribute($this->getAttribute($context["adoption"], "pet", array()), "species", array()) == "CANINE")) {
                echo "canino";
            } elseif (($this->getAttribute($this->getAttribute($context["adoption"], "pet", array()), "species", array()) == "FELINE")) {
                echo "felino";
            }
            echo "\" class=\"form-control\" id=\"recipient-name\" disabled>
                            </div>
                            <div class=\"form-group\">
                              <label for=\"recipient-name\" class=\"textjusti control-label\">genero:</label>
                              <input type=\"text\" value=\"";
            // line 78
            if (($this->getAttribute($this->getAttribute($context["adoption"], "pet", array()), "gender", array()) == "MALE")) {
                echo "macho";
            } elseif (($this->getAttribute($this->getAttribute($context["adoption"], "pet", array()), "gender", array()) == "FEMALE")) {
                echo "hembra";
            }
            echo "\" class=\"form-control\" id=\"recipient-name\" disabled>
                            </div>
                            <div class=\"form-group\">
                              <label for=\"recipient-name\" class=\"textjusti control-label\">raza:</label>
                              <input type=\"text\" value=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "pet", array()), "race", array()), "html", null, true);
            echo "\" class=\"form-control\" id=\"recipient-name\" disabled>
                            </div>
                            <div class=\"form-group\">
                              <label for=\"recipient-name\" class=\"textjusti control-label\">color:</label>
                              <input type=\"text\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "pet", array()), "colour", array()), "html", null, true);
            echo "\" class=\"form-control\" id=\"recipient-name\" disabled>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adoption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "              </tbody>
            </table>

\t\t\t
\t\t</div><!--div close sectionstile 2 -->
\t</div>
\t";
        
        $__internal_e25b2f58cf4c5d1a9254559ad8b620fa316666a6768444ee6f8f08f24f4eca55->leave($__internal_e25b2f58cf4c5d1a9254559ad8b620fa316666a6768444ee6f8f08f24f4eca55_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:masc_adoptada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 100,  194 => 86,  187 => 82,  176 => 78,  165 => 74,  158 => 70,  151 => 66,  135 => 53,  130 => 51,  123 => 46,  119 => 44,  117 => 43,  114 => 42,  112 => 41,  109 => 40,  107 => 39,  102 => 37,  98 => 36,  94 => 35,  90 => 34,  86 => 33,  82 => 32,  78 => 31,  74 => 30,  71 => 29,  67 => 28,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* 		*/
/* 			<h1 class="coloralert">Mascotas Adoptadas</h1><hr>*/
/* 			<br>*/
/* 		<div class="sectionsile">*/
/* 			*/
/* 			 <table class="tabl table-striped">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td class="pest" colspan="6">Adoptante</td>*/
/*                   <td class="pest" colspan="4">Mascota</td>*/
/*                 </tr>*/
/*                 <tr class="tdb">*/
/*                   <th>Nombre</th>*/
/*                   <th>Apellido</th>*/
/*                   <th class="tdxs">Edad</th>*/
/*                   <th>Teléfono</th>*/
/*                   <th>Dirección</th>*/
/*                   <th>Correo</th>*/
/*                   <th class="bdleft">Mascota</th>*/
/*                   <th>Edad</th>*/
/*                   <th>Estado solicitud</th>*/
/*                   <th class="tdxs">ver</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody class="tdb">*/
/*               {% for adoption in adoptions %}*/
/*               <tr>*/
/*                   <td>{{ adoption.user.name }}</td>*/
/*                   <td>{{ adoption.user.lastName }}</td>*/
/*                   <td>{{ adoption.user.age }} años</td>*/
/*                   <td>{{ adoption.user.phone_number }}</td>*/
/*                   <td>{{ adoption.user.address }}</td>*/
/*                   <td>{{ adoption.user.email }}</td>*/
/*                   <td class="bdleft">{{ adoption.pet.name }}</td>*/
/*                   <td class="tdxs">{{ adoption.pet.age }} años</td>*/
/*                   <td>*/
/*                     {% if adoption.status == "APPROVED" %}*/
/*                     <strong> aprobada </strong>*/
/*                     {% elseif adoption.status == "DISAPPROVED"%}*/
/*                     <strong> denegada </strong>*/
/*                     {% elseif adoption.status == "PENDING"%}*/
/*                     <strong> pendiente </strong>*/
/*                     {% endif %}*/
/*                   </td>*/
/*                     */
/*                   */
/*                   */
/*                   */
/*                   <td><a href=""  data-toggle="modal" data-target="#myModaladopt{{adoption.pet.id}}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>*/
/*                   */
/*                   <div class="modal fade bs-example-modal-sm" id="myModaladopt{{adoption.pet.id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
/*                     <div class="modal-dialog modal-sm">*/
/*                       <div class="modal-content">*/
/*                   */
/*                         <div class="timod modal-header">*/
/*                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>*/
/*                           <h5 class="modal-title" id="exampleModalLabel">Información de la mascota </h5>*/
/*                         </div>*/
/* */
/*                         <div class="modal-body">*/
/*                           <form>*/
/*                             <div class="form-group">*/
/*                               <label for="recipient-name" class="textjusti control-label">Nombre:</label>*/
/*                               <input type="text" value="{{adoption.pet.name}}" class="form-control" id="recipient-name" disabled>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                               <label for="recipient-name" class="textjusti control-label">Edad:</label>*/
/*                               <input type="text" value="{{adoption.pet.age}}" class="form-control" id="recipient-name" disabled>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                               <label for="recipient-name" class="textjusti control-label">especie:</label>*/
/*                               <input type="text" value="{% if adoption.pet.species=="CANINE" %}canino{% elseif adoption.pet.species=="FELINE" %}felino{% endif %}" class="form-control" id="recipient-name" disabled>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                               <label for="recipient-name" class="textjusti control-label">genero:</label>*/
/*                               <input type="text" value="{% if adoption.pet.gender=="MALE" %}macho{% elseif adoption.pet.gender=="FEMALE" %}hembra{% endif %}" class="form-control" id="recipient-name" disabled>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                               <label for="recipient-name" class="textjusti control-label">raza:</label>*/
/*                               <input type="text" value="{{adoption.pet.race}}" class="form-control" id="recipient-name" disabled>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                               <label for="recipient-name" class="textjusti control-label">color:</label>*/
/*                               <input type="text" value="{{adoption.pet.colour}}" class="form-control" id="recipient-name" disabled>*/
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
/*                 {% endfor%}*/
/*               </tbody>*/
/*             </table>*/
/* */
/* 			*/
/* 		</div><!--div close sectionstile 2 -->*/
/* 	</div>*/
/* 	{% endblock %}*/
