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
        $__internal_d7b99495fd8224bf7cfd56b89cb3ddb402342509bbeaf9b2a6e0558f228655dc = $this->env->getExtension("native_profiler");
        $__internal_d7b99495fd8224bf7cfd56b89cb3ddb402342509bbeaf9b2a6e0558f228655dc->enter($__internal_d7b99495fd8224bf7cfd56b89cb3ddb402342509bbeaf9b2a6e0558f228655dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:adopcion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7b99495fd8224bf7cfd56b89cb3ddb402342509bbeaf9b2a6e0558f228655dc->leave($__internal_d7b99495fd8224bf7cfd56b89cb3ddb402342509bbeaf9b2a6e0558f228655dc_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_7f52490ecd6699098a5c2c8bfe540dc854a11aadbeb20ee89cb37f4dee44e611 = $this->env->getExtension("native_profiler");
        $__internal_7f52490ecd6699098a5c2c8bfe540dc854a11aadbeb20ee89cb37f4dee44e611->enter($__internal_7f52490ecd6699098a5c2c8bfe540dc854a11aadbeb20ee89cb37f4dee44e611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_7f52490ecd6699098a5c2c8bfe540dc854a11aadbeb20ee89cb37f4dee44e611->leave($__internal_7f52490ecd6699098a5c2c8bfe540dc854a11aadbeb20ee89cb37f4dee44e611_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_52bec878c3ad166f5ebde6ed50fbe6c1b25ef3abc834219cdac215f0d2c306f6 = $this->env->getExtension("native_profiler");
        $__internal_52bec878c3ad166f5ebde6ed50fbe6c1b25ef3abc834219cdac215f0d2c306f6->enter($__internal_52bec878c3ad166f5ebde6ed50fbe6c1b25ef3abc834219cdac215f0d2c306f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
         <h3 class=\"titulosection\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/mn.png"), "html", null, true);
        echo "\" alt=\"\"><b>&nbsp;PROCESO DE ADOPCIÓN&nbsp;</b><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/m.png"), "html", null, true);
        echo "\" alt=\"\"></h3><hr class=\"margnone\">
        <p class=\"h1estle textjusti\">La fundación patitas callejeras en función de asegurar la integridad de los animales y el compromiso de las personas que quieren adoptar, establece una serie de actividades para definir si el adoptante cumplen con las condiciones estipuladas por la institución. </p>
        <p class=\"h1estle\">Debe tener en cuenta los cuatro puntos que se muestran a continuación.</p>
       <div class=\"continer\">
        <div class=\"textjusti alert alert-info\">Es muy importante que leas los requisitos de adopción</div>

\t<button class=\"butglass glass butposadop\" data-toggle=\"modal\" data-target=\"#miVentana\">Ver requisitos</button>

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
      <img  src=\"";
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
          <hr>
          </div>

        
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
        <div class=\"tab-content\">
          <!-- Tab panel 1 perritos contentet-->
        <div role=\"tabpanel\" class=\"fonadop conmargin tab-pane fade in active\" id=\"home\">
          
      <div class=\"row\">
           ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pets"]) ? $context["pets"] : $this->getContext($context, "pets")));
        foreach ($context['_seq'] as $context["_key"] => $context["pet"]) {
            // line 121
            echo "           
           ";
            // line 122
            if ((($this->getAttribute($context["pet"], "species", array()) == "CANINE") && ($this->getAttribute($context["pet"], "status", array()) != "ADOPTED"))) {
                // line 123
                echo "          <div class=\"col-md-4\">
            <div class=\"conteneter\">
              <a  class=\"links2\"  data-toggle=\"modal\" data-target=\"#ventanaadoptardog";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "id", array()), "html", null, true);
                echo "\" href=\"\"> 
              <div class=\"banername back1\">
                      
                  <img src=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/pnot.png"), "html", null, true);
                echo "\" class=\"imgadop img-circle\" alt=\"\">
                              
                  <h3 class=\"namemasct\"><b>";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "name", array()), "html", null, true);
                echo "</b></h3>
                
            </div>
            <div class=\"estileinfo\">
            <ul>
              <li><label>Edad:</label>
              <span>";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "age", array()), "html", null, true);
                echo "&nbsp;años.</span></li>

              <li><label>Sexo:</label>
              ";
                // line 139
                if (($this->getAttribute($context["pet"], "gender", array()) == "MALE")) {
                    // line 140
                    echo "                              
              <span>macho</span></li>
              
              ";
                } elseif (($this->getAttribute(                // line 143
$context["pet"], "gender", array()) == "FEMALE")) {
                    // line 144
                    echo "              
              <span>hembra</span></li>
                              
              ";
                }
                // line 148
                echo "              
            </ul>
          </div></a>
          
          \t<div class=\"modal fade\" id=\"ventanaadoptardog";
                // line 152
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
                // line 162
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/pnot.png"), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"\">
\t\t\t  \t\t    </div>
\t\t\t  \t\t     <div class=\"col-md-6\">
\t\t\t  \t\t       <br>
\t\t\t  \t\t       <table class=\"table table-striped textjusti\">
                    <tr>
                      <th class=\"tdd\">Nombre:</th>
                      <td>";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "name", array()), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                      <th>raza:</th>
                      <td>";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "race", array()), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                      <th>Edad:</th>
                      <td>";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "age", array()), "html", null, true);
                echo "&nbsp;años.</td>
                    </tr>
                    <tr>
                      <th>Color:</th>
                      <td>";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "colour", array()), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                      <th>sexo:</th>
                      <td>
                        ";
                // line 186
                if (($this->getAttribute($context["pet"], "gender", array()) == "MALE")) {
                    // line 187
                    echo "                       macho
                     ";
                } elseif (($this->getAttribute(                // line 188
$context["pet"], "gender", array()) == "FEMALE")) {
                    // line 189
                    echo "                       hembra
                     ";
                }
                // line 191
                echo "                     </td>
                    </tr>
                  </table>
\t\t\t  \t\t    </div>
\t\t\t  \t\t  </div>
\t\t\t\t      </div>
\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t <p><a class=\"buttonborder  btn btn-primary\" href=\"";
                // line 198
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_user_encuesta", array("petId" => $this->getAttribute($context["pet"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\" role=\"button\">Adoptar mascota</a></p>
\t\t\t  \t</div>
\t\t  \t</div>
\t  \t</div>
  \t</div>
  </div>
      </div>
      ";
            }
            // line 206
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "  </div>
        </div>



        <!-- tab panel 2 gaticos contenet-->
        <div role=\"tabpanel\" class=\"fonadop conmargin tab-pane fade\" id=\"profile\">

          <div class=\"row\">
            
            ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pets"]) ? $context["pets"] : $this->getContext($context, "pets")));
        foreach ($context['_seq'] as $context["_key"] => $context["pet"]) {
            // line 218
            echo "           ";
            if ((($this->getAttribute($context["pet"], "species", array()) == "FELINE") && ($this->getAttribute($context["pet"], "status", array()) != "ADOPTED"))) {
                // line 219
                echo "          <div class=\"col-md-4\">
            <div class=\"conteneter\">
              <a  class=\"links2\"  data-toggle=\"modal\" data-target=\"#ventanaadoptarcat";
                // line 221
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "id", array()), "html", null, true);
                echo "\" href=\"\"> 
              <div class=\"banername back1\">
                      
                  <img src=\"";
                // line 224
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/gnot.png"), "html", null, true);
                echo "\" class=\"imgadop img-circle\" alt=\"\">
                              
                  <h3 class=\"namemasct\"><b>";
                // line 226
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "name", array()), "html", null, true);
                echo "</b></h3>
                
            </div>
            <div class=\"estileinfo\">
            <ul>
              <li><label>Edad:</label>
              <span>";
                // line 232
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "age", array()), "html", null, true);
                echo "&nbsp;años.</span></li>

              <li><label>Sexo:</label>
              ";
                // line 235
                if (($this->getAttribute($context["pet"], "gender", array()) == "MALE")) {
                    // line 236
                    echo "                              
              <span>macho</span></li>
              
              ";
                } elseif (($this->getAttribute(                // line 239
$context["pet"], "gender", array()) == "FEMALE")) {
                    // line 240
                    echo "              
              <span>hembra</span></li>
                              
              ";
                }
                // line 244
                echo "              
            </ul>
          </div></a>
          
          \t \t<div class=\"modal fade\" id=\"ventanaadoptarcat";
                // line 248
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
                // line 258
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/gnot.png"), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"\">
\t\t\t  \t\t    </div>
\t\t\t  \t\t     <div class=\"col-md-6\">
\t\t\t  \t\t       <br>
\t\t\t  \t\t       <table class=\"table table-striped textjusti\">
                    <tr>
                      <th class=\"tdd\">Nombre:</th>
                      <td>";
                // line 265
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "name", array()), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                      <th>raza:</th>
                      <td>";
                // line 269
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "race", array()), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                      <th>Edad:</th>
                      <td>";
                // line 273
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "age", array()), "html", null, true);
                echo "&nbsp;años.</td>
                    </tr>
                    <tr>
                      <th>Color:</th>
                      <td>";
                // line 277
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "colour", array()), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                      <th>sexo:</th>
                      <td>
                        ";
                // line 282
                if (($this->getAttribute($context["pet"], "gender", array()) == "MALE")) {
                    // line 283
                    echo "                       macho
                     ";
                } elseif (($this->getAttribute(                // line 284
$context["pet"], "gender", array()) == "FEMALE")) {
                    // line 285
                    echo "                       hembra
                     ";
                }
                // line 287
                echo "                     </td>
                    </tr>
                  </table>
\t\t\t  \t\t    </div>
\t\t\t  \t\t  </div>
\t\t\t\t      </div>
\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t <p><a class=\"buttonborder  btn btn-primary\" href=\"";
                // line 294
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_user_encuesta", array("petId" => $this->getAttribute($context["pet"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\" role=\"button\">Adoptar mascota</a></p>
\t\t\t  \t</div>
\t\t  \t</div>
\t  \t</div>
  \t</div>
  </div>
      </div>
      ";
            }
            // line 302
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 303
        echo "          
  </div>
 

        </div>
       
      </div>

    
  </div>
  

<div class=\"col-md-1\"> </div>
</div>
</section>
";
        
        $__internal_52bec878c3ad166f5ebde6ed50fbe6c1b25ef3abc834219cdac215f0d2c306f6->leave($__internal_52bec878c3ad166f5ebde6ed50fbe6c1b25ef3abc834219cdac215f0d2c306f6_prof);

    }

    // line 319
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8a3a6239e4907216af7949ba8104badf4abc3d76ced0db024a455bc7d72c8f7d = $this->env->getExtension("native_profiler");
        $__internal_8a3a6239e4907216af7949ba8104badf4abc3d76ced0db024a455bc7d72c8f7d->enter($__internal_8a3a6239e4907216af7949ba8104badf4abc3d76ced0db024a455bc7d72c8f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 320
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 <script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://code.jquery.com/jquery-latest.js"), "html", null, true);
        echo "\"></script>
 ";
        
        $__internal_8a3a6239e4907216af7949ba8104badf4abc3d76ced0db024a455bc7d72c8f7d->leave($__internal_8a3a6239e4907216af7949ba8104badf4abc3d76ced0db024a455bc7d72c8f7d_prof);

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
        return array (  531 => 321,  526 => 320,  520 => 319,  498 => 303,  492 => 302,  481 => 294,  472 => 287,  468 => 285,  466 => 284,  463 => 283,  461 => 282,  453 => 277,  446 => 273,  439 => 269,  432 => 265,  422 => 258,  409 => 248,  403 => 244,  397 => 240,  395 => 239,  390 => 236,  388 => 235,  382 => 232,  373 => 226,  368 => 224,  362 => 221,  358 => 219,  355 => 218,  351 => 217,  339 => 207,  333 => 206,  322 => 198,  313 => 191,  309 => 189,  307 => 188,  304 => 187,  302 => 186,  294 => 181,  287 => 177,  280 => 173,  273 => 169,  263 => 162,  250 => 152,  244 => 148,  238 => 144,  236 => 143,  231 => 140,  229 => 139,  223 => 136,  214 => 130,  209 => 128,  203 => 125,  199 => 123,  197 => 122,  194 => 121,  190 => 120,  157 => 90,  145 => 81,  134 => 73,  123 => 65,  103 => 48,  66 => 16,  53 => 6,  47 => 5,  36 => 2,  11 => 1,);
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
/*          <h3 class="titulosection"><img src="{{ asset('public/img/mn.png')}}" alt=""><b>&nbsp;PROCESO DE ADOPCIÓN&nbsp;</b><img src="{{ asset('public/img/m.png')}}" alt=""></h3><hr class="margnone">*/
/*         <p class="h1estle textjusti">La fundación patitas callejeras en función de asegurar la integridad de los animales y el compromiso de las personas que quieren adoptar, establece una serie de actividades para definir si el adoptante cumplen con las condiciones estipuladas por la institución. </p>*/
/*         <p class="h1estle">Debe tener en cuenta los cuatro puntos que se muestran a continuación.</p>*/
/*        <div class="continer">*/
/*         <div class="textjusti alert alert-info">Es muy importante que leas los requisitos de adopción</div>*/
/* */
/* 	<button class="butglass glass butposadop" data-toggle="modal" data-target="#miVentana">Ver requisitos</button>*/
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
/*       <img  src="{{ asset('public/img/adopt.png')}}"class="img-responsive"></img>*/
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
/*           <hr>*/
/*           </div>*/
/* */
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
/*         <div class="tab-content">*/
/*           <!-- Tab panel 1 perritos contentet-->*/
/*         <div role="tabpanel" class="fonadop conmargin tab-pane fade in active" id="home">*/
/*           */
/*       <div class="row">*/
/*            {% for pet in pets %}*/
/*            */
/*            {% if pet.species == 'CANINE' and pet.status != 'ADOPTED' %}*/
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
/* 				 <p><a class="buttonborder  btn btn-primary" href="{{ path('pc_user_encuesta',{'petId' : pet.id }) }}" target="_blank" role="button">Adoptar mascota</a></p>*/
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
/*            {% if pet.species == 'FELINE' and pet.status != 'ADOPTED'  %}*/
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
/* 				 <p><a class="buttonborder  btn btn-primary" href="{{ path('pc_user_encuesta', {'petId' : pet.id }) }}" target="_blank" role="button">Adoptar mascota</a></p>*/
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
