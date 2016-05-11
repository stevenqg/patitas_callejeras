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
        $__internal_9c176c0382d63738b7175d075492518f6f7874821e5e5c0c42cf6890472624d0 = $this->env->getExtension("native_profiler");
        $__internal_9c176c0382d63738b7175d075492518f6f7874821e5e5c0c42cf6890472624d0->enter($__internal_9c176c0382d63738b7175d075492518f6f7874821e5e5c0c42cf6890472624d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:masc_adoptada.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c176c0382d63738b7175d075492518f6f7874821e5e5c0c42cf6890472624d0->leave($__internal_9c176c0382d63738b7175d075492518f6f7874821e5e5c0c42cf6890472624d0_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_39fa8b958a1434c6a4cce921c72d1a31f640ebb9288846b8b0455773ba84fe42 = $this->env->getExtension("native_profiler");
        $__internal_39fa8b958a1434c6a4cce921c72d1a31f640ebb9288846b8b0455773ba84fe42->enter($__internal_39fa8b958a1434c6a4cce921c72d1a31f640ebb9288846b8b0455773ba84fe42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "\t\t
\t\t\t<h1 class=\"coloralert\">Mascotas Adoptadas</h1><hr>
\t\t\t<br>
\t\t<div class=\"sectionsile\">
\t\t\t
\t\t\t <table class=\"tabl table-striped\">
              <thead>
                <tr><td class=\"pest\" colspan=\"3\">Adoptante</td>
                </tr>
                <tr class=\"tdb\">
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th class=\"tdxs\">Edad</th>
                  <th>Teléfono</th>
                  <th>Dirección</th>
                  <th>Correo</th>
                  <th class=\"bdleft\">Mascota</th>
                  <th>Edad mascota</th>
                  <th>Estado solicitud</th>
                  <th class=\"tdxs\">ver</th>
                </tr>
              </thead>
              <tbody class=\"tdb\">
              ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adoptions"]) ? $context["adoptions"] : $this->getContext($context, "adoptions")));
        foreach ($context['_seq'] as $context["_key"] => $context["adoption"]) {
            // line 27
            echo "              <tr>
                  <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "user", array()), "name", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "user", array()), "lastName", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "user", array()), "age", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "user", array()), "phone_number", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "user", array()), "address", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "user", array()), "email", array()), "html", null, true);
            echo "</td>
                  <td class=\"bdleft\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "pet", array()), "name", array()), "html", null, true);
            echo "</td>
                  <td class=\"tdxs\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "pet", array()), "age", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["adoption"], "status", array()), "html", null, true);
            echo "</td>
                  
                  <td><a href=\"\"  data-toggle=\"modal\" data-target=\"#myModaladopt\"><span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span></a>
                  
                  <div class=\"modal fade bs-example-modal-sm\" id=\"myModaladopt\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
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
                              <input type=\"text\" class=\"form-control\" id=\"recipient-name\" disabled>
                            </div>
    
                            <div class=\"form-group\">
                              <label for=\"recipient-name\" class=\"textjusti control-label\">Edad:</label>
                              <input type=\"text\" class=\"form-control\" id=\"recipient-name\" disabled>
                            </div>
                            
                            <div class=\"form-group\">
                              <label for=\"recipient-name\" class=\"textjusti control-label\">especie:</label>
                              <input type=\"text\" class=\"form-control\" id=\"recipient-name\" disabled>
                            </div>
                            
                            <div class=\"form-group\">
                              <label for=\"recipient-name\" class=\"textjusti control-label\">genero:</label>
                              <input type=\"text\" class=\"form-control\" id=\"recipient-name\" disabled>
                            </div>
    
                            <div class=\"form-group\">
                              <label for=\"recipient-name\" class=\"textjusti control-label\">raza:</label>
                              <input type=\"text\" class=\"form-control\" id=\"recipient-name\" disabled>
                            </div>
                            
                            <div class=\"form-group\">
                              <label for=\"recipient-name\" class=\"textjusti control-label\">color:</label>
                              <input type=\"text\" class=\"form-control\" id=\"recipient-name\" disabled>
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
        // line 92
        echo "              </tbody>
            </table>

\t\t\t
\t\t</div><!--div close sectionstile 2 -->
\t</div>
\t";
        
        $__internal_39fa8b958a1434c6a4cce921c72d1a31f640ebb9288846b8b0455773ba84fe42->leave($__internal_39fa8b958a1434c6a4cce921c72d1a31f640ebb9288846b8b0455773ba84fe42_prof);

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
        return array (  166 => 92,  104 => 36,  100 => 35,  96 => 34,  92 => 33,  88 => 32,  84 => 31,  80 => 30,  76 => 29,  72 => 28,  69 => 27,  65 => 26,  40 => 3,  34 => 2,  11 => 1,);
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
/*                 <tr><td class="pest" colspan="3">Adoptante</td>*/
/*                 </tr>*/
/*                 <tr class="tdb">*/
/*                   <th>Nombre</th>*/
/*                   <th>Apellido</th>*/
/*                   <th class="tdxs">Edad</th>*/
/*                   <th>Teléfono</th>*/
/*                   <th>Dirección</th>*/
/*                   <th>Correo</th>*/
/*                   <th class="bdleft">Mascota</th>*/
/*                   <th>Edad mascota</th>*/
/*                   <th>Estado solicitud</th>*/
/*                   <th class="tdxs">ver</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody class="tdb">*/
/*               {% for adoption in adoptions %}*/
/*               <tr>*/
/*                   <td>{{ adoption.user.name }}</td>*/
/*                   <td>{{ adoption.user.lastName }}</td>*/
/*                   <td>{{ adoption.user.age }}</td>*/
/*                   <td>{{ adoption.user.phone_number }}</td>*/
/*                   <td>{{ adoption.user.address }}</td>*/
/*                   <td>{{ adoption.user.email }}</td>*/
/*                   <td class="bdleft">{{ adoption.pet.name }}</td>*/
/*                   <td class="tdxs">{{ adoption.pet.age }}</td>*/
/*                   <td>{{ adoption.status }}</td>*/
/*                   */
/*                   <td><a href=""  data-toggle="modal" data-target="#myModaladopt"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>*/
/*                   */
/*                   <div class="modal fade bs-example-modal-sm" id="myModaladopt" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
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
/*                               <input type="text" class="form-control" id="recipient-name" disabled>*/
/*                             </div>*/
/*     */
/*                             <div class="form-group">*/
/*                               <label for="recipient-name" class="textjusti control-label">Edad:</label>*/
/*                               <input type="text" class="form-control" id="recipient-name" disabled>*/
/*                             </div>*/
/*                             */
/*                             <div class="form-group">*/
/*                               <label for="recipient-name" class="textjusti control-label">especie:</label>*/
/*                               <input type="text" class="form-control" id="recipient-name" disabled>*/
/*                             </div>*/
/*                             */
/*                             <div class="form-group">*/
/*                               <label for="recipient-name" class="textjusti control-label">genero:</label>*/
/*                               <input type="text" class="form-control" id="recipient-name" disabled>*/
/*                             </div>*/
/*     */
/*                             <div class="form-group">*/
/*                               <label for="recipient-name" class="textjusti control-label">raza:</label>*/
/*                               <input type="text" class="form-control" id="recipient-name" disabled>*/
/*                             </div>*/
/*                             */
/*                             <div class="form-group">*/
/*                               <label for="recipient-name" class="textjusti control-label">color:</label>*/
/*                               <input type="text" class="form-control" id="recipient-name" disabled>*/
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
