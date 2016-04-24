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
        $__internal_5b2a1726604d6622057b508e1eb54feec5d3dfa0ddc12313dba98f3e98c6e1d5 = $this->env->getExtension("native_profiler");
        $__internal_5b2a1726604d6622057b508e1eb54feec5d3dfa0ddc12313dba98f3e98c6e1d5->enter($__internal_5b2a1726604d6622057b508e1eb54feec5d3dfa0ddc12313dba98f3e98c6e1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:Masct_adopcion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b2a1726604d6622057b508e1eb54feec5d3dfa0ddc12313dba98f3e98c6e1d5->leave($__internal_5b2a1726604d6622057b508e1eb54feec5d3dfa0ddc12313dba98f3e98c6e1d5_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_c0badaf5e3aacbfb4c60798e2bbe7eecf1429894d4b95733d30b4adf7e6a4f7b = $this->env->getExtension("native_profiler");
        $__internal_c0badaf5e3aacbfb4c60798e2bbe7eecf1429894d4b95733d30b4adf7e6a4f7b->enter($__internal_c0badaf5e3aacbfb4c60798e2bbe7eecf1429894d4b95733d30b4adf7e6a4f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

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
\t\t\t    <li><a href=\"";
        // line 61
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
        
        $__internal_c0badaf5e3aacbfb4c60798e2bbe7eecf1429894d4b95733d30b4adf7e6a4f7b->leave($__internal_c0badaf5e3aacbfb4c60798e2bbe7eecf1429894d4b95733d30b4adf7e6a4f7b_prof);

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
        return array (  333 => 193,  326 => 191,  320 => 187,  314 => 183,  312 => 182,  307 => 179,  305 => 178,  301 => 176,  295 => 172,  293 => 171,  288 => 168,  286 => 167,  281 => 165,  278 => 164,  272 => 160,  270 => 159,  265 => 156,  263 => 155,  258 => 153,  254 => 152,  250 => 151,  247 => 150,  244 => 149,  240 => 148,  218 => 128,  212 => 127,  206 => 123,  200 => 119,  198 => 118,  193 => 115,  191 => 114,  187 => 112,  181 => 108,  179 => 107,  174 => 104,  172 => 103,  167 => 101,  164 => 100,  158 => 96,  156 => 95,  151 => 92,  149 => 91,  144 => 89,  140 => 88,  136 => 87,  133 => 86,  130 => 85,  126 => 84,  100 => 61,  40 => 3,  34 => 2,  11 => 1,);
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
