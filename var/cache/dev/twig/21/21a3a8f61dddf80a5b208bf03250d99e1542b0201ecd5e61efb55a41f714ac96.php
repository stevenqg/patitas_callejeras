<?php

/* PCFundationBundle:fundation:adopcion.html.twig */
class __TwigTemplate_22c214655212373e64823206b90ae906763853a1c9dc84a16dd5d32e7647c22c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PCFundationBundle:fundation:adopcion.html.twig", 1);
        $this->blocks = array(
            'scroll_nav' => array($this, 'block_scroll_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f23971119ded049d38e8387832d13f402f3a58702530c53a3831ff1677e61a2c = $this->env->getExtension("native_profiler");
        $__internal_f23971119ded049d38e8387832d13f402f3a58702530c53a3831ff1677e61a2c->enter($__internal_f23971119ded049d38e8387832d13f402f3a58702530c53a3831ff1677e61a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:adopcion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f23971119ded049d38e8387832d13f402f3a58702530c53a3831ff1677e61a2c->leave($__internal_f23971119ded049d38e8387832d13f402f3a58702530c53a3831ff1677e61a2c_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_bcb7e2d63e52bc4735bb4448c169221460b4486495a893b0cbfb236b9ac9d238 = $this->env->getExtension("native_profiler");
        $__internal_bcb7e2d63e52bc4735bb4448c169221460b4486495a893b0cbfb236b9ac9d238->enter($__internal_bcb7e2d63e52bc4735bb4448c169221460b4486495a893b0cbfb236b9ac9d238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_bcb7e2d63e52bc4735bb4448c169221460b4486495a893b0cbfb236b9ac9d238->leave($__internal_bcb7e2d63e52bc4735bb4448c169221460b4486495a893b0cbfb236b9ac9d238_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0e4f5a5073655bb8fae499617590749bead3c6a165ed5864122df289c2db913 = $this->env->getExtension("native_profiler");
        $__internal_b0e4f5a5073655bb8fae499617590749bead3c6a165ed5864122df289c2db913->enter($__internal_b0e4f5a5073655bb8fae499617590749bead3c6a165ed5864122df289c2db913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"liner\"></div>
<section>

<div class=\"row\">
  <div class=\"backfonttree\">
  <div class=\"col-md-1\"></div>
  <div class=\"col-md-10\">
      <div class=\"wor\">
        <div class=\"col-md-6\">
         <h3 class=\"titulosection\"><img class=\"ve\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/mn.png"), "html", null, true);
        echo "\" alt=\"\"><b>&nbsp;PROCESO DE ADOPCIÓN&nbsp;</b><img class=\"ve\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/m.png"), "html", null, true);
        echo "\" alt=\"\"></h3><hr class=\"margnone\">
        <p class=\"h1estle textjusti\">La fundación patitas callejeras en función de asegurar la integridad de los animales y el compromiso de las personas que quieren adoptar, establece una serie de actividades para definir si el adoptante cumplen con las condiciones estipuladas por la institución. </p>
        <p class=\"h1estle\">Debe tener en cuenta los cuatro puntos que se muestran a continuación.</p>
       <div class=\"continer\">
        <div class=\"textjusti alert alert-info\">Es muy importante que leas los requisitos de adopción</div>

\t<button class=\"s butglass glass butposadop\" data-toggle=\"modal\" data-target=\"#miVentana\">Ver requisitos</button>

\t<div class=\"modal fade\" id=\"miVentana\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" area-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"pull-left\"> Requisitos de Adopción</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t
\t\t\t\t\t<dl class=\"textjusti dl-horizontal\">
\t\t\t\t\t\t<dt>mayor de edad</dt>
\t\t\t\t\t\t<dd>la persona que realise la solicitud de adopcion debe ser mayor de edad o bajo el amparo de un adulto responsable.</dd>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<dt>aceptación familiar</dt>
\t\t\t\t\t\t<dd>todo el nucleo familiar que convive con la persona que realiza el proceso de adopción debe estar de acuerdo con el la solicitud que esta realiza.</dd>
\t\t\t\t\t</dl>
\t\t\t\t</div>
    
    \t\t\t</div>
    \t\t</div>
    \t</div>
      </div>
    </div>
    <div class=\"col-md-6\">
      <img class=\"ve\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/adopt.png"), "html", null, true);
        echo "\"class=\"img-responsive\"></img>
    </div>
      
     </div>    

  </div>
  <div class=\"col-md-1\"></div>
  </div>
  </div>
  <br>
  <div class=\"row\">
    <div class=\"col-md-1\"></div>
     <div class=\"col-md-10\">
       <br>
       <hr>
       <div class=\"ue\"></div>
        <div class=\"col-lg-3\">
          <img class=\"img-circle iconadop\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/a1.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
          <div class=\"backtwo comenterytwo\">
\t\t\t\t\t<h4>1.  mascotas</h4>
\t\t\t\t\t</div>
          <p class=\"textjusti\">seleciona la mascota que deseas adoptar del  catalogo de mscotas de la fundacion Patitas Callejeras.</p>
          
       </div>
        <div class=\"col-lg-3\">
          <img class=\"img-circle iconadop\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/a2.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
          <div class=\"backtwo comenterytwo\">
\t\t\t\t\t<h4>2.  encuesta de adopción</h4>
\t\t\t\t\t</div>
          <p class=\"textjusti\">Ingresa la información solicitada (datos personales) y responde la encuesta de perfil del adoptante para enviar la solicitud de adopción.</p>
         </div>
        <div class=\"col-lg-3\">
          
          <img class=\"img-circle iconadop\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/a3.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
           <div class=\"backtwo comenterytwo\">
\t\t\t\t\t<h4>3.  Visita domiciliaria</h4>
\t\t\t\t\t</div>
           <p class=\"textjusti\">Después de verificar la solicitud de adopción la Fundación se pondrá en contacto para programas la visita residencial. </p>
         
          </div>
          
          <div class=\"col-lg-3\">
          <img class=\"img-circle iconadop\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/a4.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
          <div class=\"backtwo comenterytwo\">
\t\t\t\t\t<h4>4.  Seguimiento de adopcion</h4>
\t\t\t\t\t</div>
          <p class=\"textjusti\">La fundación programara con el adoptante visitas para verificar la adaptación de la mascota en su nuevo hogar. </p>
          </div><hr>
        
        
      </div>
      <div class=\"col-md-1\"></div>
    </div>

<br>
<div class=\"row\">
  <div class=\"col-md-1\"></div>
  <div class=\"col-md-10\">

        <!-- Nav tabs -->
        <ul class=\"contmasc nav nav-tabs\" role=\"tablist\">
          <li role=\"presentation\" class=\"active\"><a href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">PERRITOS</a></li>
          <li role=\"presentation\"><a href=\"#profile\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\">GATICOS</a></li>
         
        </ul>
        <!-- Tab panes -->
        <div class=\" overflofanimal tab-content\">
          <!-- Tab panel 1 perritos contentet-->
        <div role=\"tabpanel\" class=\"fonadop conmargin tab-pane fade in active\" id=\"home\">
          
      <div class=\"row\">
           ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pets"]) ? $context["pets"] : $this->getContext($context, "pets")));
        foreach ($context['_seq'] as $context["_key"] => $context["pet"]) {
            // line 120
            echo "           
           ";
            // line 121
            if (((($this->getAttribute($context["pet"], "species", array()) == "CANINE") && ($this->getAttribute($context["pet"], "status", array()) != "ADOPTED")) && ($this->getAttribute($context["pet"], "status", array()) != "EXTERNAL"))) {
                // line 122
                echo "          <div class=\"col-md-4\">
            <div class=\"conteneter\">
              <a  class=\"links2\"  data-toggle=\"modal\" data-target=\"#ventanaadoptardog";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "id", array()), "html", null, true);
                echo "\" href=\"\"> 
              <div class=\"banername back1\">
                      
                  <img src=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/pnot.png"), "html", null, true);
                echo "\" class=\"imgadop img-circle\" alt=\"\">
                              
                  <h3 class=\"namemasct\"><b>";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "name", array()), "html", null, true);
                echo "</b></h3>
                
            </div>
            <div class=\"estileinfo\">
            <ul>
              <li><label>Edad:</label>
              <span>";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "age", array()), "html", null, true);
                echo "&nbsp;años.</span></li>

              <li><label>Sexo:</label>
              ";
                // line 138
                if (($this->getAttribute($context["pet"], "gender", array()) == "MALE")) {
                    // line 139
                    echo "                              
              <span>macho</span></li>
              
              ";
                } elseif (($this->getAttribute(                // line 142
$context["pet"], "gender", array()) == "FEMALE")) {
                    // line 143
                    echo "              
              <span>hembra</span></li>
                              
              ";
                }
                // line 147
                echo "              
            </ul>
          </div></a>
          
          \t<div class=\"modal fade\" id=\"ventanaadoptardog";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
          \t\t<div class=\"modal-dialog\">
\t\t        \t<div class=\"modal-content\">
\t\t      \t\t<div class=\"timod modal-header\">
\t\t    \t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" area-hidden=\"true\"></button>
\t\t\t    \t<h4 class=\"modal-title\"><b>Adoptar</b></h4>
\t\t\t    \t</div>
\t\t\t    \t<div class=\"modal-body\">
\t\t\t    \t \t  <div class=\"row\">
\t\t\t  \t\t    <div class=\"col-md-6\">
\t\t\t  \t\t      <img src=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/pnot.png"), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"\">
\t\t\t  \t\t    </div>
\t\t\t  \t\t     <div class=\"col-md-6\">
\t\t\t  \t\t       <br>
\t\t\t  \t\t       <table class=\"table table-striped textjusti\">
                    <tr>
                      <th class=\"tdd\">Nombre:</th>
                      <td>";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "name", array()), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                      <th>raza:</th>
                      <td>";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "race", array()), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                      <th>Edad:</th>
                      <td>";
                // line 176
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "age", array()), "html", null, true);
                echo "&nbsp;años.</td>
                    </tr>
                    <tr>
                      <th>Color:</th>
                      <td>";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "colour", array()), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                      <th>sexo:</th>
                      <td>
                        ";
                // line 185
                if (($this->getAttribute($context["pet"], "gender", array()) == "MALE")) {
                    // line 186
                    echo "                       macho
                     ";
                } elseif (($this->getAttribute(                // line 187
$context["pet"], "gender", array()) == "FEMALE")) {
                    // line 188
                    echo "                       hembra
                     ";
                }
                // line 190
                echo "                     </td>
                    </tr>
                  </table>
\t\t\t  \t\t    </div>
\t\t\t  \t\t  </div>
\t\t\t\t      </div>
\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t <p><a class=\"buttonborder  btn btn-primary\" href=\"";
                // line 197
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_user_encuesta", array("petId" => $this->getAttribute($context["pet"], "id", array()))), "html", null, true);
                echo "\" onclick=\"window.open(this.href, this.target,'width=600,height=700'); return false\" role=\"button\">Adoptar mascota</a></p>
\t\t\t  \t</div>
\t\t  \t</div>
\t  \t</div>
  \t</div>
  </div>
      </div>
      ";
            }
            // line 205
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "  </div>
        </div>



        <!-- tab panel 2 gaticos contenet-->
        <div role=\"tabpanel\" class=\"fonadop conmargin tab-pane fade\" id=\"profile\">

          <div class=\"row\">
            
            ";
        // line 216
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pets"]) ? $context["pets"] : $this->getContext($context, "pets")));
        foreach ($context['_seq'] as $context["_key"] => $context["pet"]) {
            // line 217
            echo "           ";
            if (((($this->getAttribute($context["pet"], "species", array()) == "FELINE") && ($this->getAttribute($context["pet"], "status", array()) != "ADOPTED")) && ($this->getAttribute($context["pet"], "status", array()) != "EXTERNAL"))) {
                // line 218
                echo "          <div class=\"col-md-4\">
            <div class=\"conteneter\">
              <a  class=\"links2\"  data-toggle=\"modal\" data-target=\"#ventanaadoptarcat";
                // line 220
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "id", array()), "html", null, true);
                echo "\" href=\"\"> 
              <div class=\"banername back1\">
                      
                  <img src=\"";
                // line 223
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/gnot.png"), "html", null, true);
                echo "\" class=\"imgadop img-circle\" alt=\"\">
                              
                  <h3 class=\"namemasct\"><b>";
                // line 225
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "name", array()), "html", null, true);
                echo "</b></h3>
                
            </div>
            <div class=\"estileinfo\">
            <ul>
              <li><label>Edad:</label>
              <span>";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "age", array()), "html", null, true);
                echo "&nbsp;años.</span></li>

              <li><label>Sexo:</label>
              ";
                // line 234
                if (($this->getAttribute($context["pet"], "gender", array()) == "MALE")) {
                    // line 235
                    echo "                              
              <span>macho</span></li>
              
              ";
                } elseif (($this->getAttribute(                // line 238
$context["pet"], "gender", array()) == "FEMALE")) {
                    // line 239
                    echo "              
              <span>hembra</span></li>
                              
              ";
                }
                // line 243
                echo "              
            </ul>
          </div></a>
          
          \t \t<div class=\"modal fade\" id=\"ventanaadoptarcat";
                // line 247
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
          \t\t<div class=\"modal-dialog\">
\t\t        \t<div class=\"modal-content\">
\t\t      \t\t<div class=\"timod modal-header\">
\t\t    \t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" area-hidden=\"true\"></button>
\t\t\t    \t<h4 class=\"modal-title\"><b>Adoptar</b></h4>
\t\t\t    \t</div>
\t\t\t    \t<div class=\"modal-body\">
\t\t\t    \t \t  <div class=\"row\">
\t\t\t  \t\t    <div class=\"col-md-6\">
\t\t\t  \t\t      <img src=\"";
                // line 257
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/gnot.png"), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"\">
\t\t\t  \t\t    </div>
\t\t\t  \t\t     <div class=\"col-md-6\">
\t\t\t  \t\t       <br>
\t\t\t  \t\t       <table class=\"table table-striped textjusti\">
                    <tr>
                      <th class=\"tdd\">Nombre:</th>
                      <td>";
                // line 264
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "name", array()), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                      <th>raza:</th>
                      <td>";
                // line 268
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "race", array()), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                      <th>Edad:</th>
                      <td>";
                // line 272
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "age", array()), "html", null, true);
                echo "&nbsp;años.</td>
                    </tr>
                    <tr>
                      <th>Color:</th>
                      <td>";
                // line 276
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "colour", array()), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                      <th>sexo:</th>
                      <td>
                        ";
                // line 281
                if (($this->getAttribute($context["pet"], "gender", array()) == "MALE")) {
                    // line 282
                    echo "                       macho
                     ";
                } elseif (($this->getAttribute(                // line 283
$context["pet"], "gender", array()) == "FEMALE")) {
                    // line 284
                    echo "                       hembra
                     ";
                }
                // line 286
                echo "                     </td>
                    </tr>
                  </table>
\t\t\t  \t\t    </div>
\t\t\t  \t\t  </div>
\t\t\t\t      </div>
\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t <p><a class=\"buttonborder  btn btn-primary\" href=\"";
                // line 293
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_user_encuesta", array("petId" => $this->getAttribute($context["pet"], "id", array()))), "html", null, true);
                echo "\" onclick=\"window.open(this.href, this.target,'width=600,height=700'); return false\" role=\"button\">Adoptar mascota</a></p>
\t\t\t  \t</div>
\t\t  \t</div>
\t  \t</div>
  \t</div>
  </div>
      </div>
      ";
            }
            // line 301
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        echo "          
  </div>
 

        </div>
       
      </div>

    
  </div>
  

<div class=\"col-md-1\"> </div>
</div>
</section>
";
        
        $__internal_b0e4f5a5073655bb8fae499617590749bead3c6a165ed5864122df289c2db913->leave($__internal_b0e4f5a5073655bb8fae499617590749bead3c6a165ed5864122df289c2db913_prof);

    }

    // line 318
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_66e6c58654d445d31e63dbbec7e52b89e092cdee2524a8b22df06fcb01f3d483 = $this->env->getExtension("native_profiler");
        $__internal_66e6c58654d445d31e63dbbec7e52b89e092cdee2524a8b22df06fcb01f3d483->enter($__internal_66e6c58654d445d31e63dbbec7e52b89e092cdee2524a8b22df06fcb01f3d483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 319
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://code.jquery.com/jquery-latest.js"), "html", null, true);
        echo "\"></script>
 ";
        
        $__internal_66e6c58654d445d31e63dbbec7e52b89e092cdee2524a8b22df06fcb01f3d483->leave($__internal_66e6c58654d445d31e63dbbec7e52b89e092cdee2524a8b22df06fcb01f3d483_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:fundation:adopcion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  530 => 320,  525 => 319,  519 => 318,  497 => 302,  491 => 301,  480 => 293,  471 => 286,  467 => 284,  465 => 283,  462 => 282,  460 => 281,  452 => 276,  445 => 272,  438 => 268,  431 => 264,  421 => 257,  408 => 247,  402 => 243,  396 => 239,  394 => 238,  389 => 235,  387 => 234,  381 => 231,  372 => 225,  367 => 223,  361 => 220,  357 => 218,  354 => 217,  350 => 216,  338 => 206,  332 => 205,  321 => 197,  312 => 190,  308 => 188,  306 => 187,  303 => 186,  301 => 185,  293 => 180,  286 => 176,  279 => 172,  272 => 168,  262 => 161,  249 => 151,  243 => 147,  237 => 143,  235 => 142,  230 => 139,  228 => 138,  222 => 135,  213 => 129,  208 => 127,  202 => 124,  198 => 122,  196 => 121,  193 => 120,  189 => 119,  157 => 90,  145 => 81,  134 => 73,  123 => 65,  103 => 48,  66 => 16,  53 => 6,  47 => 5,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block scroll_nav %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {{ parent() }}*/
/* <div class="liner"></div>*/
/* <section>*/
/* */
/* <div class="row">*/
/*   <div class="backfonttree">*/
/*   <div class="col-md-1"></div>*/
/*   <div class="col-md-10">*/
/*       <div class="wor">*/
/*         <div class="col-md-6">*/
/*          <h3 class="titulosection"><img class="ve" src="{{ asset('public/img/mn.png')}}" alt=""><b>&nbsp;PROCESO DE ADOPCIÓN&nbsp;</b><img class="ve" src="{{ asset('public/img/m.png')}}" alt=""></h3><hr class="margnone">*/
/*         <p class="h1estle textjusti">La fundación patitas callejeras en función de asegurar la integridad de los animales y el compromiso de las personas que quieren adoptar, establece una serie de actividades para definir si el adoptante cumplen con las condiciones estipuladas por la institución. </p>*/
/*         <p class="h1estle">Debe tener en cuenta los cuatro puntos que se muestran a continuación.</p>*/
/*        <div class="continer">*/
/*         <div class="textjusti alert alert-info">Es muy importante que leas los requisitos de adopción</div>*/
/* */
/* 	<button class="s butglass glass butposadop" data-toggle="modal" data-target="#miVentana">Ver requisitos</button>*/
/* */
/* 	<div class="modal fade" id="miVentana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/* 		<div class="modal-dialog">*/
/* 			<div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal" area-hidden="true">&times;</button>*/
/* 				<h4 class="pull-left"> Requisitos de Adopción</h4>*/
/* 				</div>*/
/* 				<div class="modal-body">*/
/* 					*/
/* 					<dl class="textjusti dl-horizontal">*/
/* 						<dt>mayor de edad</dt>*/
/* 						<dd>la persona que realise la solicitud de adopcion debe ser mayor de edad o bajo el amparo de un adulto responsable.</dd>*/
/* 						<br>*/
/* 						<dt>aceptación familiar</dt>*/
/* 						<dd>todo el nucleo familiar que convive con la persona que realiza el proceso de adopción debe estar de acuerdo con el la solicitud que esta realiza.</dd>*/
/* 					</dl>*/
/* 				</div>*/
/*     */
/*     			</div>*/
/*     		</div>*/
/*     	</div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-md-6">*/
/*       <img class="ve" src="{{ asset('public/img/adopt.png')}}"class="img-responsive"></img>*/
/*     </div>*/
/*       */
/*      </div>    */
/* */
/*   </div>*/
/*   <div class="col-md-1"></div>*/
/*   </div>*/
/*   </div>*/
/*   <br>*/
/*   <div class="row">*/
/*     <div class="col-md-1"></div>*/
/*      <div class="col-md-10">*/
/*        <br>*/
/*        <hr>*/
/*        <div class="ue"></div>*/
/*         <div class="col-lg-3">*/
/*           <img class="img-circle iconadop" src="{{ asset('public/img/a1.png') }}" alt="Generic placeholder image" width="140" height="140">*/
/*           <div class="backtwo comenterytwo">*/
/* 					<h4>1.  mascotas</h4>*/
/* 					</div>*/
/*           <p class="textjusti">seleciona la mascota que deseas adoptar del  catalogo de mscotas de la fundacion Patitas Callejeras.</p>*/
/*           */
/*        </div>*/
/*         <div class="col-lg-3">*/
/*           <img class="img-circle iconadop" src="{{asset('public/img/a2.png')}}" alt="Generic placeholder image" width="140" height="140">*/
/*           <div class="backtwo comenterytwo">*/
/* 					<h4>2.  encuesta de adopción</h4>*/
/* 					</div>*/
/*           <p class="textjusti">Ingresa la información solicitada (datos personales) y responde la encuesta de perfil del adoptante para enviar la solicitud de adopción.</p>*/
/*          </div>*/
/*         <div class="col-lg-3">*/
/*           */
/*           <img class="img-circle iconadop" src="{{asset('public/img/a3.png')}}" alt="Generic placeholder image" width="140" height="140">*/
/*            <div class="backtwo comenterytwo">*/
/* 					<h4>3.  Visita domiciliaria</h4>*/
/* 					</div>*/
/*            <p class="textjusti">Después de verificar la solicitud de adopción la Fundación se pondrá en contacto para programas la visita residencial. </p>*/
/*          */
/*           </div>*/
/*           */
/*           <div class="col-lg-3">*/
/*           <img class="img-circle iconadop" src="{{asset('public/img/a4.png')}}" alt="Generic placeholder image" width="140" height="140">*/
/*           <div class="backtwo comenterytwo">*/
/* 					<h4>4.  Seguimiento de adopcion</h4>*/
/* 					</div>*/
/*           <p class="textjusti">La fundación programara con el adoptante visitas para verificar la adaptación de la mascota en su nuevo hogar. </p>*/
/*           </div><hr>*/
/*         */
/*         */
/*       </div>*/
/*       <div class="col-md-1"></div>*/
/*     </div>*/
/* */
/* <br>*/
/* <div class="row">*/
/*   <div class="col-md-1"></div>*/
/*   <div class="col-md-10">*/
/* */
/*         <!-- Nav tabs -->*/
/*         <ul class="contmasc nav nav-tabs" role="tablist">*/
/*           <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">PERRITOS</a></li>*/
/*           <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">GATICOS</a></li>*/
/*          */
/*         </ul>*/
/*         <!-- Tab panes -->*/
/*         <div class=" overflofanimal tab-content">*/
/*           <!-- Tab panel 1 perritos contentet-->*/
/*         <div role="tabpanel" class="fonadop conmargin tab-pane fade in active" id="home">*/
/*           */
/*       <div class="row">*/
/*            {% for pet in pets %}*/
/*            */
/*            {% if pet.species == 'CANINE' and pet.status != 'ADOPTED' and pet.status != 'EXTERNAL'%}*/
/*           <div class="col-md-4">*/
/*             <div class="conteneter">*/
/*               <a  class="links2"  data-toggle="modal" data-target="#ventanaadoptardog{{pet.id}}" href=""> */
/*               <div class="banername back1">*/
/*                       */
/*                   <img src="{{asset('public/img/pnot.png')}}" class="imgadop img-circle" alt="">*/
/*                               */
/*                   <h3 class="namemasct"><b>{{ pet.name }}</b></h3>*/
/*                 */
/*             </div>*/
/*             <div class="estileinfo">*/
/*             <ul>*/
/*               <li><label>Edad:</label>*/
/*               <span>{{ pet.age }}&nbsp;años.</span></li>*/
/* */
/*               <li><label>Sexo:</label>*/
/*               {% if pet.gender == 'MALE'%}*/
/*                               */
/*               <span>macho</span></li>*/
/*               */
/*               {% elseif pet.gender == 'FEMALE'%}*/
/*               */
/*               <span>hembra</span></li>*/
/*                               */
/*               {%endif%}*/
/*               */
/*             </ul>*/
/*           </div></a>*/
/*           */
/*           	<div class="modal fade" id="ventanaadoptardog{{pet.id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*           		<div class="modal-dialog">*/
/* 		        	<div class="modal-content">*/
/* 		      		<div class="timod modal-header">*/
/* 		    		<button type="button" class="close" data-dismiss="modal" area-hidden="true"></button>*/
/* 			    	<h4 class="modal-title"><b>Adoptar</b></h4>*/
/* 			    	</div>*/
/* 			    	<div class="modal-body">*/
/* 			    	 	  <div class="row">*/
/* 			  		    <div class="col-md-6">*/
/* 			  		      <img src="{{asset('public/img/pnot.png')}}" class="img-responsive" alt="">*/
/* 			  		    </div>*/
/* 			  		     <div class="col-md-6">*/
/* 			  		       <br>*/
/* 			  		       <table class="table table-striped textjusti">*/
/*                     <tr>*/
/*                       <th class="tdd">Nombre:</th>*/
/*                       <td>{{ pet.name }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                       <th>raza:</th>*/
/*                       <td>{{ pet.race }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                       <th>Edad:</th>*/
/*                       <td>{{ pet.age }}&nbsp;años.</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                       <th>Color:</th>*/
/*                       <td>{{ pet.colour }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                       <th>sexo:</th>*/
/*                       <td>*/
/*                         {% if pet.gender == 'MALE'%}*/
/*                        macho*/
/*                      {% elseif pet.gender == 'FEMALE'%}*/
/*                        hembra*/
/*                      {%endif%}*/
/*                      </td>*/
/*                     </tr>*/
/*                   </table>*/
/* 			  		    </div>*/
/* 			  		  </div>*/
/* 				      </div>*/
/* 				  <div class="modal-footer">*/
/* 				 <p><a class="buttonborder  btn btn-primary" href="{{ path('pc_user_encuesta',{'petId' : pet.id }) }}" onclick="window.open(this.href, this.target,'width=600,height=700'); return false" role="button">Adoptar mascota</a></p>*/
/* 			  	</div>*/
/* 		  	</div>*/
/* 	  	</div>*/
/*   	</div>*/
/*   </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% endfor %}*/
/*   </div>*/
/*         </div>*/
/* */
/* */
/* */
/*         <!-- tab panel 2 gaticos contenet-->*/
/*         <div role="tabpanel" class="fonadop conmargin tab-pane fade" id="profile">*/
/* */
/*           <div class="row">*/
/*             */
/*             {% for pet in pets %}*/
/*            {% if pet.species == 'FELINE' and pet.status != 'ADOPTED' and pet.status != 'EXTERNAL' %}*/
/*           <div class="col-md-4">*/
/*             <div class="conteneter">*/
/*               <a  class="links2"  data-toggle="modal" data-target="#ventanaadoptarcat{{pet.id}}" href=""> */
/*               <div class="banername back1">*/
/*                       */
/*                   <img src="{{asset('public/img/gnot.png')}}" class="imgadop img-circle" alt="">*/
/*                               */
/*                   <h3 class="namemasct"><b>{{ pet.name }}</b></h3>*/
/*                 */
/*             </div>*/
/*             <div class="estileinfo">*/
/*             <ul>*/
/*               <li><label>Edad:</label>*/
/*               <span>{{ pet.age }}&nbsp;años.</span></li>*/
/* */
/*               <li><label>Sexo:</label>*/
/*               {% if pet.gender == 'MALE'%}*/
/*                               */
/*               <span>macho</span></li>*/
/*               */
/*               {% elseif pet.gender == 'FEMALE'%}*/
/*               */
/*               <span>hembra</span></li>*/
/*                               */
/*               {%endif%}*/
/*               */
/*             </ul>*/
/*           </div></a>*/
/*           */
/*           	 	<div class="modal fade" id="ventanaadoptarcat{{pet.id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*           		<div class="modal-dialog">*/
/* 		        	<div class="modal-content">*/
/* 		      		<div class="timod modal-header">*/
/* 		    		<button type="button" class="close" data-dismiss="modal" area-hidden="true"></button>*/
/* 			    	<h4 class="modal-title"><b>Adoptar</b></h4>*/
/* 			    	</div>*/
/* 			    	<div class="modal-body">*/
/* 			    	 	  <div class="row">*/
/* 			  		    <div class="col-md-6">*/
/* 			  		      <img src="{{asset('public/img/gnot.png')}}" class="img-responsive" alt="">*/
/* 			  		    </div>*/
/* 			  		     <div class="col-md-6">*/
/* 			  		       <br>*/
/* 			  		       <table class="table table-striped textjusti">*/
/*                     <tr>*/
/*                       <th class="tdd">Nombre:</th>*/
/*                       <td>{{ pet.name }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                       <th>raza:</th>*/
/*                       <td>{{ pet.race }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                       <th>Edad:</th>*/
/*                       <td>{{ pet.age }}&nbsp;años.</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                       <th>Color:</th>*/
/*                       <td>{{ pet.colour }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                       <th>sexo:</th>*/
/*                       <td>*/
/*                         {% if pet.gender == 'MALE'%}*/
/*                        macho*/
/*                      {% elseif pet.gender == 'FEMALE'%}*/
/*                        hembra*/
/*                      {%endif%}*/
/*                      </td>*/
/*                     </tr>*/
/*                   </table>*/
/* 			  		    </div>*/
/* 			  		  </div>*/
/* 				      </div>*/
/* 				  <div class="modal-footer">*/
/* 				 <p><a class="buttonborder  btn btn-primary" href="{{ path('pc_user_encuesta', {'petId' : pet.id }) }}" onclick="window.open(this.href, this.target,'width=600,height=700'); return false" role="button">Adoptar mascota</a></p>*/
/* 			  	</div>*/
/* 		  	</div>*/
/* 	  	</div>*/
/*   	</div>*/
/*   </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% endfor %}*/
/*           */
/*   </div>*/
/*  */
/* */
/*         </div>*/
/*        */
/*       </div>*/
/* */
/*     */
/*   </div>*/
/*   */
/* */
/* <div class="col-md-1"> </div>*/
/* </div>*/
/* </section>*/
/* {% endblock %}*/
/*  {% block javascripts %}*/
/*  {{ parent() }}*/
/*  <script src="{{ asset('https://code.jquery.com/jquery-latest.js') }}"></script>*/
/*  {% endblock %}*/
/* */
