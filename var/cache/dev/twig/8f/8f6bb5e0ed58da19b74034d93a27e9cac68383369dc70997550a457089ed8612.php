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
        $__internal_92ab7a003fc93cbea3a85d1254e2fde550170f43c8b752fc026f801cd40f2d6c = $this->env->getExtension("native_profiler");
        $__internal_92ab7a003fc93cbea3a85d1254e2fde550170f43c8b752fc026f801cd40f2d6c->enter($__internal_92ab7a003fc93cbea3a85d1254e2fde550170f43c8b752fc026f801cd40f2d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:Masct_adopcion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92ab7a003fc93cbea3a85d1254e2fde550170f43c8b752fc026f801cd40f2d6c->leave($__internal_92ab7a003fc93cbea3a85d1254e2fde550170f43c8b752fc026f801cd40f2d6c_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_89ac2fcd5b53e81054734f14355d8df34327e4c4a0e122c57c221c7e11cb5694 = $this->env->getExtension("native_profiler");
        $__internal_89ac2fcd5b53e81054734f14355d8df34327e4c4a0e122c57c221c7e11cb5694->enter($__internal_89ac2fcd5b53e81054734f14355d8df34327e4c4a0e122c57c221c7e11cb5694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "\t<div>
\t\t
\t\t\t<h1 class=\"coloralert\">Mascotas para adopción</h1>
\t\t\t<div class=\"sectionstile\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div><img class=\"mion img-responsive img-thumbnail\" alt=\"\" name=\"imgmascota\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-1\"><label class=\"marginlabel\">Nombre:</label></div>\t
\t\t\t<div class=\"col-md-5\"><input type=\"text\" class=\"form-control\" name=\"Nomascota\" disabled></div>
\t\t\t<div class=\"textjusti col-md-1\"><label class=\"marginlabel\">Edad:</label></div>\t
\t\t\t<div class=\"col-md-5\"><input type=\"text\" class=\"form-control\" name=\"EDmascota\" disabled></div>
\t\t\t</div><br><!-- div close row form -->
\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-1\"><label class=\"marginlabel\">Color:</label></div>\t
\t\t\t<div class=\"col-md-5\"><input type=\"text\" class=\"form-control\" name=\"Colmascota\" disabled></div>
\t\t\t<div class=\"textjusti col-md-2\"><label class=\"marginlabel\">Sexo:</label></div>\t
\t\t\t<div class=\"col-md-4\"><select class=\"form-control\" disabled>
\t\t\t\t\t\t  <option>Macho</option>
\t\t\t\t\t\t  <option>hembra</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t</div><br><!-- div close row form -->\t
\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-1\"><label class=\"marginlabel\">Rasgo:</label></div>\t
\t\t\t<div class=\"col-md-5\"><input type=\"text\" name=\"Colmascota\" class=\"form-control\" disabled></div>
\t\t\t<div class=\"textjusti col-md-2\"><label class=\"marginlabel\">Vacunado:</label></div>\t
\t\t\t<div class=\"col-md-4\"><select class=\"form-control\" disabled>
\t\t\t\t\t\t  <option>Si</option>
\t\t\t\t\t\t  <option>No</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t</div><br><!-- div close row form -->\t
\t\t\t<div class=\"row\">
\t\t\t<div class=\"textjusti col-md-2\"><label class=\"marginlabel\">Esterilizado:</label></div>\t
\t\t\t<div class=\"col-md-4\"><select class=\"form-control\" disabled>
\t\t\t\t\t\t  <option>Si</option>
\t\t\t\t\t\t  <option>No</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t\t\t<div class=\"col-md-4\"><button type=\"button\" class=\"btn btn-success\">Editar datos &nbsp;<span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></button></div>
\t\t\t</div><br>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t</div><!--div sectionsitile-->
\t\t<br>
\t\t<div class=\"sectionsile\">
\t\t\t     
\t\t\t<div>

\t\t\t  <!-- Nav tabs -->
\t\t\t  <ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t    <li role=\"presentation\" class=\"active\"><a href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">Perros</a></li>
\t\t\t    <li role=\"presentation\"><a href=\"#profile\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\">gatos</a></li>
\t\t\t    <li><a href=\"add_mascota.html\" type=\"button\" class=\"btn btn-primary\">Agregar mascota</a></li>
\t\t\t  </ul>

\t\t\t  <!-- Tab panes -->
\t\t\t  <div class=\"tab-content\">
\t\t\t    <div role=\"tabpanel\" class=\"conmargin tab-pane active\" id=\"home\"><br>
\t\t\t      \t<table class=\"table table-striped \">
              <thead>
                <tr>
                  <th class=\"tdxs\">#</th>
                  <th>Nombre</th>
                  <th>Edadn</th>
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
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pets"]) ? $context["pets"] : $this->getContext($context, "pets")));
        foreach ($context['_seq'] as $context["_key"] => $context["pet"]) {
            // line 85
            echo "                      ";
            if (($this->getAttribute($context["pet"], "species", array()) == "CANINE")) {
                // line 86
                echo "                      <tr>
                          <td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "name", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "age", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "colour", array()), "html", null, true);
                echo "</td>
                          <td>
                            ";
                // line 91
                if (($this->getAttribute($context["pet"], "gender", array()) == "MALE")) {
                    // line 92
                    echo "                              
                              <strong>macho</strong>
                              
                              ";
                } elseif (($this->getAttribute(                // line 95
$context["pet"], "gender", array()) == "FEMALE")) {
                    // line 96
                    echo "                              
                              <strong>hembra</strong>
                              
                            ";
                }
                // line 100
                echo "                          </td>
                          <td>";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "race", array()), "html", null, true);
                echo "</td>
                          <td>
                            ";
                // line 103
                if (($this->getAttribute($context["pet"], "isSterilized", array()) == 1)) {
                    // line 104
                    echo "                              
                              <strong>si</strong>
                              
                              ";
                } elseif (($this->getAttribute(                // line 107
$context["pet"], "isSterilized", array()) == 0)) {
                    // line 108
                    echo "                              
                              <strong>no</strong>
                              
                            ";
                }
                // line 112
                echo "                          </td>
                          <td>
                            ";
                // line 114
                if (($this->getAttribute($context["pet"], "isVacunated", array()) == 1)) {
                    // line 115
                    echo "                              
                              <strong>si</strong>
                              
                              ";
                } elseif (($this->getAttribute(                // line 118
$context["pet"], "isVacunated", array()) == 0)) {
                    // line 119
                    echo "                              
                              <strong>no</strong>
                              
                            ";
                }
                // line 123
                echo "                          </td>
                          <td><a href=\"\" id=\"vermas\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"ver datos\"><span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span></a></td>
                      </tr>        
                      ";
            }
            // line 127
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
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
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pets"]) ? $context["pets"] : $this->getContext($context, "pets")));
        foreach ($context['_seq'] as $context["_key"] => $context["pet"]) {
            // line 149
            echo "                      ";
            if (($this->getAttribute($context["pet"], "species", array()) == "FELINE")) {
                // line 150
                echo "                      <tr>
                          <td>";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "name", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "age", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "colour", array()), "html", null, true);
                echo "</td>
                          <td>
                            ";
                // line 155
                if (($this->getAttribute($context["pet"], "gender", array()) == "MALE")) {
                    // line 156
                    echo "                              
                              <strong>macho</strong>
                              
                              ";
                } elseif (($this->getAttribute(                // line 159
$context["pet"], "gender", array()) == "FEMALE")) {
                    // line 160
                    echo "                              
                              <strong>hembra</strong>
                              
                            ";
                }
                // line 164
                echo "                          </td>
                          <td>";
                // line 165
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "race", array()), "html", null, true);
                echo "</td>
                          <td>
                            ";
                // line 167
                if (($this->getAttribute($context["pet"], "isSterilized", array()) == 1)) {
                    // line 168
                    echo "                              
                              <strong>si</strong>
                              
                              ";
                } elseif (($this->getAttribute(                // line 171
$context["pet"], "isSterilized", array()) == 0)) {
                    // line 172
                    echo "                              
                              <strong>no</strong>
                              
                            ";
                }
                // line 176
                echo "                          </td>
                          <td>
                            ";
                // line 178
                if (($this->getAttribute($context["pet"], "isVacunated", array()) == 1)) {
                    // line 179
                    echo "                              
                              <strong>si</strong>
                              
                              ";
                } elseif (($this->getAttribute(                // line 182
$context["pet"], "isVacunated", array()) == 0)) {
                    // line 183
                    echo "                              
                              <strong>no</strong>
                              
                            ";
                }
                // line 187
                echo "                          </td>
                          <td><a href=\"\" id=\"vermas\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"ver datos\"><span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span></a></td>
                      </tr>        
                      ";
            }
            // line 191
            echo "                      
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "              </tbody>
            </table>
\t\t\t    </div>
\t\t\t  </div>

\t\t\t</div><!-- div close panel tab-->
\t\t</div><!--div close sectionstile 2 -->
\t</div>
";
        
        $__internal_89ac2fcd5b53e81054734f14355d8df34327e4c4a0e122c57c221c7e11cb5694->leave($__internal_89ac2fcd5b53e81054734f14355d8df34327e4c4a0e122c57c221c7e11cb5694_prof);

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
        return array (  330 => 193,  323 => 191,  317 => 187,  311 => 183,  309 => 182,  304 => 179,  302 => 178,  298 => 176,  292 => 172,  290 => 171,  285 => 168,  283 => 167,  278 => 165,  275 => 164,  269 => 160,  267 => 159,  262 => 156,  260 => 155,  255 => 153,  251 => 152,  247 => 151,  244 => 150,  241 => 149,  237 => 148,  215 => 128,  209 => 127,  203 => 123,  197 => 119,  195 => 118,  190 => 115,  188 => 114,  184 => 112,  178 => 108,  176 => 107,  171 => 104,  169 => 103,  164 => 101,  161 => 100,  155 => 96,  153 => 95,  148 => 92,  146 => 91,  141 => 89,  137 => 88,  133 => 87,  130 => 86,  127 => 85,  123 => 84,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* 	<div>*/
/* 		*/
/* 			<h1 class="coloralert">Mascotas para adopción</h1>*/
/* 			<div class="sectionstile">*/
/* 				<div class="row">*/
/* 					<div class="col-md-3">*/
/* 					<div><img class="mion img-responsive img-thumbnail" alt="" name="imgmascota"></div>*/
/* 					</div>*/
/* 					<div class="col-md-9">*/
/* 						<div class="row">*/
/* 			<div class="textjusti col-md-1"><label class="marginlabel">Nombre:</label></div>	*/
/* 			<div class="col-md-5"><input type="text" class="form-control" name="Nomascota" disabled></div>*/
/* 			<div class="textjusti col-md-1"><label class="marginlabel">Edad:</label></div>	*/
/* 			<div class="col-md-5"><input type="text" class="form-control" name="EDmascota" disabled></div>*/
/* 			</div><br><!-- div close row form -->*/
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-1"><label class="marginlabel">Color:</label></div>	*/
/* 			<div class="col-md-5"><input type="text" class="form-control" name="Colmascota" disabled></div>*/
/* 			<div class="textjusti col-md-2"><label class="marginlabel">Sexo:</label></div>	*/
/* 			<div class="col-md-4"><select class="form-control" disabled>*/
/* 						  <option>Macho</option>*/
/* 						  <option>hembra</option>*/
/* 						</select>*/
/* 					</div>*/
/* 			</div><br><!-- div close row form -->	*/
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-1"><label class="marginlabel">Rasgo:</label></div>	*/
/* 			<div class="col-md-5"><input type="text" name="Colmascota" class="form-control" disabled></div>*/
/* 			<div class="textjusti col-md-2"><label class="marginlabel">Vacunado:</label></div>	*/
/* 			<div class="col-md-4"><select class="form-control" disabled>*/
/* 						  <option>Si</option>*/
/* 						  <option>No</option>*/
/* 						</select>*/
/* 					</div>*/
/* 			</div><br><!-- div close row form -->	*/
/* 			<div class="row">*/
/* 			<div class="textjusti col-md-2"><label class="marginlabel">Esterilizado:</label></div>	*/
/* 			<div class="col-md-4"><select class="form-control" disabled>*/
/* 						  <option>Si</option>*/
/* 						  <option>No</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-md-2"></div>*/
/* 					<div class="col-md-4"><button type="button" class="btn btn-success">Editar datos &nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></div>*/
/* 			</div><br>*/
/* 					</div>*/
/* 				</div>*/
/* 			*/
/* 		</div><!--div sectionsitile-->*/
/* 		<br>*/
/* 		<div class="sectionsile">*/
/* 			     */
/* 			<div>*/
/* */
/* 			  <!-- Nav tabs -->*/
/* 			  <ul class="nav nav-tabs" role="tablist">*/
/* 			    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Perros</a></li>*/
/* 			    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">gatos</a></li>*/
/* 			    <li><a href="add_mascota.html" type="button" class="btn btn-primary">Agregar mascota</a></li>*/
/* 			  </ul>*/
/* */
/* 			  <!-- Tab panes -->*/
/* 			  <div class="tab-content">*/
/* 			    <div role="tabpanel" class="conmargin tab-pane active" id="home"><br>*/
/* 			      	<table class="table table-striped ">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <th class="tdxs">#</th>*/
/*                   <th>Nombre</th>*/
/*                   <th>Edadn</th>*/
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
/*                       {% if pet.species == 'CANINE' %}*/
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
/*                           <td><a href="" id="vermas" data-toggle="tooltip" data-placement="right" title="ver datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>*/
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
/*                       {% if pet.species == 'FELINE'%}*/
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
/*                           <td><a href="" id="vermas" data-toggle="tooltip" data-placement="right" title="ver datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>*/
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
