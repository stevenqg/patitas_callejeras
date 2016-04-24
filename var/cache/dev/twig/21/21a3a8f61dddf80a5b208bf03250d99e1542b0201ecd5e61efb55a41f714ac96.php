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
        $__internal_fcee9985a912b3c2b172475043b318aec9edcea94fe4ef94288106f229e7a7c3 = $this->env->getExtension("native_profiler");
        $__internal_fcee9985a912b3c2b172475043b318aec9edcea94fe4ef94288106f229e7a7c3->enter($__internal_fcee9985a912b3c2b172475043b318aec9edcea94fe4ef94288106f229e7a7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:adopcion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcee9985a912b3c2b172475043b318aec9edcea94fe4ef94288106f229e7a7c3->leave($__internal_fcee9985a912b3c2b172475043b318aec9edcea94fe4ef94288106f229e7a7c3_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_cf848b63cc62b0e350c4256ca9a6151950bee3353860df5a6e0b4a73efe13cb9 = $this->env->getExtension("native_profiler");
        $__internal_cf848b63cc62b0e350c4256ca9a6151950bee3353860df5a6e0b4a73efe13cb9->enter($__internal_cf848b63cc62b0e350c4256ca9a6151950bee3353860df5a6e0b4a73efe13cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_cf848b63cc62b0e350c4256ca9a6151950bee3353860df5a6e0b4a73efe13cb9->leave($__internal_cf848b63cc62b0e350c4256ca9a6151950bee3353860df5a6e0b4a73efe13cb9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0453faa25a79b9070881367342295615b1bff68ecaa14b949c7bec5226979487 = $this->env->getExtension("native_profiler");
        $__internal_0453faa25a79b9070881367342295615b1bff68ecaa14b949c7bec5226979487->enter($__internal_0453faa25a79b9070881367342295615b1bff68ecaa14b949c7bec5226979487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"liner\"></div>
<section>

<div class=\"row\">
  <div class=\"col-md-1\"></div>
  <div class=\"col-md-10\">
    <div class=\"jumbotron\">
        <h1>Proceso de adopción </h1>
        <p class=\"h1estle\">La fundación patitas callejeras en función de asegurar la integridad de los animales y el compromiso de las personas que quieren adoptar, establece una serie de actividades para definir si se cumplen con las condiciones estipuladas por la institución. </p>
        <p class=\"h1estle\">Debe tener en cuenta los tres puntos que se muestran a continuación.</p>
        <div class=\"alert alert-warning\">Es muy importante que leas los requisitos de adopción</div>

  <div class=\"continer\">
\t
\t<button class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#miVentana\">Ver requisitos</button>

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

  </div>
  <div class=\"col-md-1\"></div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-1\"></div>
     <div class=\"col-md-10\">
        <div class=\"col-lg-4\">
          <img class=\"img-circle\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/ENC.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
          <h4> encuesta de adopción</h4>
          <p>En el cuestionario trataremos los temas más importantes sobre la adopción y tendremos una visión general de la persona o familia que quiere adoptar el anima.</p>
          
       </div>
        <div class=\"col-lg-4\">
          <img class=\"img-circle\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/CAS.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
          <h4>Visita domiciliaria</h4>
          <p>Después de analizar las respuestas del cuestionario, se procederá a programar una visita domiciliaria donde se analizará el ambiente y el espacio en el que vivirá la mascota.</p>
         </div>
        <div class=\"col-lg-4\">
          <img class=\"img-circle\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/REL.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
          <h4>Seguimiento de adaptación</h4>
          <p>La fundación realizará un contacto posterior a la entrega de la mascota con el fin de verificar el estado de esta y las condiciones en que es mantenida, dicho contacto pueden ser visitas domiciliarias, llamadas telefónicas y/u otros medios que la fundación en su momento disponga.</p>
          </div>
        <div class=\"col-md-1\"></div>
      </div>
    </div>
</div>
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
        <div role=\"tabpanel\" class=\"conmargin tab-pane fade in active\" id=\"home\">
          
      <div class=\"row\">
           ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pets"]) ? $context["pets"] : $this->getContext($context, "pets")));
        foreach ($context['_seq'] as $context["_key"] => $context["pet"]) {
            // line 91
            echo "           ";
            if (($this->getAttribute($context["pet"], "species", array()) == "CANINE")) {
                // line 92
                echo "          <div class=\"col-md-4\">
            <div class=\"conteneter\">
              <a  class=\"links2\"  data-toggle=\"modal\" data-target=\"#ventanaadoptardog";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "id", array()), "html", null, true);
                echo "\" href=\"\"> 
              <div class=\"banername back1\">
                      
                  <img src=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/pnot.png"), "html", null, true);
                echo "\" class=\"imgadop img-circle\" alt=\"\">
                              
                  <h3 class=\"namemasct\"><b>";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "name", array()), "html", null, true);
                echo "</b></h3>
                
            </div>
            <div class=\"estileinfo\">
            <ul>
              <li><label>Edad:</label>
              <span>";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "age", array()), "html", null, true);
                echo "&nbsp;años.</span></li>

              <li><label>Sexo:</label>
              ";
                // line 108
                if (($this->getAttribute($context["pet"], "gender", array()) == "MALE")) {
                    // line 109
                    echo "                              
              <span>macho</span></li>
              
              ";
                } elseif (($this->getAttribute(                // line 112
$context["pet"], "gender", array()) == "FEMALE")) {
                    // line 113
                    echo "              
              <span>hembra</span></li>
                              
              ";
                }
                // line 117
                echo "              
            </ul>
          </div></a>
          
          \t<div class=\"modal fade\" id=\"ventanaadoptardog";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
          \t\t<div class=\"modal-dialog\">
\t\t        \t<div class=\"modal-content\">
\t\t      \t\t<div class=\"alert alert-info modal-header\">
\t\t    \t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" area-hidden=\"true\"></button>
\t\t\t    \t<h4 class=\"pull-left\"><b>Adoptar</b></h4>
\t\t\t    \t</div>
\t\t\t    \t<div class=\"modal-body\">
\t\t\t\t\t
\t\t\t  \t\t<dl class=\"textjusti dl-horizontal\">
\t\t\t\t  \t\t<dt><img src=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/pnot.png"), "html", null, true);
                echo "\" class=\"imgadop img-thumbnail img-responsive\" alt=\"\"></dt>
\t\t\t\t        <dd>
\t\t\t\t          <table class=\"table\">
                   <tr><td><b>Nombre:</b></td><td>";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "name", array()), "html", null, true);
                echo "</td></tr>
                   <tr><td><b>Edad:</b></td><td>";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "age", array()), "html", null, true);
                echo "&nbsp;años.</td></tr>
                   <tr><td><b>sexo:</b></td><td>
                     ";
                // line 137
                if (($this->getAttribute($context["pet"], "gender", array()) == "MALE")) {
                    // line 138
                    echo "                       macho
                     ";
                } elseif (($this->getAttribute(                // line 139
$context["pet"], "gender", array()) == "FEMALE")) {
                    // line 140
                    echo "                       hembra
                     ";
                }
                // line 142
                echo "                     </td></tr>
                   <tr><td><b>Color:</b></td><td>";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "colour", array()), "html", null, true);
                echo "</td></tr>
                   <tr><td><b>raza:</b></td><td>";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "race", array()), "html", null, true);
                echo "</td></tr>
                  </table>
\t\t\t\t        </dd>
\t\t\t\t      \t</dl>
\t\t\t\t      </div>
\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t <p><a class=\"btn btn-info\" href=\"";
                // line 150
                echo $this->env->getExtension('routing')->getPath("pc_user_encuesta");
                echo "\" target=\"_blank\" role=\"button\" id=\"ventemerg\">Adoptar mascota</a></p>
\t\t\t  \t</div>
\t\t  \t</div>
\t  \t</div>
  \t</div>
  </div>
      </div>
      ";
            }
            // line 158
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "  </div>
        </div>



        <!-- tab panel 2 gaticos contenet-->
        <div role=\"tabpanel\" class=\"conmargin tab-pane fade\" id=\"profile\">

          <div class=\"row\">
            
            ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pets"]) ? $context["pets"] : $this->getContext($context, "pets")));
        foreach ($context['_seq'] as $context["_key"] => $context["pet"]) {
            // line 170
            echo "           ";
            if (($this->getAttribute($context["pet"], "species", array()) == "FELINE")) {
                // line 171
                echo "          <div class=\"col-md-4\">
            <div class=\"conteneter\">
              <a  class=\"links2\"  data-toggle=\"modal\" data-target=\"#ventanaadoptarcat";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "id", array()), "html", null, true);
                echo "\" href=\"\"> 
              <div class=\"banername back1\">
                      
                  <img src=\"";
                // line 176
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/gnot.png"), "html", null, true);
                echo "\" class=\"imgadop img-circle\" alt=\"\">
                              
                  <h3 class=\"namemasct\"><b>";
                // line 178
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "name", array()), "html", null, true);
                echo "</b></h3>
                
            </div>
            <div class=\"estileinfo\">
            <ul>
              <li><label>Edad:</label>
              <span>";
                // line 184
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "age", array()), "html", null, true);
                echo "&nbsp;años.</span></li>

              <li><label>Sexo:</label>
              ";
                // line 187
                if (($this->getAttribute($context["pet"], "gender", array()) == "MALE")) {
                    // line 188
                    echo "                              
              <span>macho</span></li>
              
              ";
                } elseif (($this->getAttribute(                // line 191
$context["pet"], "gender", array()) == "FEMALE")) {
                    // line 192
                    echo "              
              <span>hembra</span></li>
                              
              ";
                }
                // line 196
                echo "              
            </ul>
          </div></a>
          
          \t<div class=\"modal fade\" id=\"ventanaadoptarcat";
                // line 200
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
          \t\t<div class=\"modal-dialog\">
\t\t        \t<div class=\"modal-content\">
\t\t      \t\t<div class=\"alert alert-info modal-header\">
\t\t    \t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" area-hidden=\"true\"></button>
\t\t\t    \t<h4 class=\"pull-left\"><b>Adoptar</b></h4>
\t\t\t    \t</div>
\t\t\t    \t<div class=\"modal-body\">
\t\t\t\t\t
\t\t\t  \t\t<dl class=\"textjusti dl-horizontal\">
\t\t\t\t  \t\t<dt><img src=\"";
                // line 210
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/gnot.png"), "html", null, true);
                echo "\" class=\"imgadop img-thumbnail img-responsive\" alt=\"\"></dt>
\t\t\t\t        <dd>
\t\t\t\t          <table class=\"table\">
                   <tr><td><b>Nombre:</b></td><td>";
                // line 213
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "name", array()), "html", null, true);
                echo "</td></tr>
                   <tr><td><b>Edad:</b></td><td>";
                // line 214
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "age", array()), "html", null, true);
                echo "&nbsp;años.</td></tr>
                   <tr><td><b>sexo:</b></td><td>
                     ";
                // line 216
                if (($this->getAttribute($context["pet"], "gender", array()) == "MALE")) {
                    // line 217
                    echo "                       macho
                     ";
                } elseif (($this->getAttribute(                // line 218
$context["pet"], "gender", array()) == "FEMALE")) {
                    // line 219
                    echo "                       hembra
                     ";
                }
                // line 221
                echo "                     </td></tr>
                   <tr><td><b>Color:</b></td><td>";
                // line 222
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "colour", array()), "html", null, true);
                echo "</td></tr>
                   <tr><td><b>raza:</b></td><td>";
                // line 223
                echo twig_escape_filter($this->env, $this->getAttribute($context["pet"], "race", array()), "html", null, true);
                echo "</td></tr>
                  </table>
\t\t\t\t        </dd>
\t\t\t\t      \t</dl>
\t\t\t\t      </div>
\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t <p><a class=\"btn btn-info\" href=\"";
                // line 229
                echo $this->env->getExtension('routing')->getPath("pc_user_encuesta");
                echo "\" target=\"_blank\" role=\"button\" id=\"ventemerg\">Adoptar mascota</a></p>
\t\t\t  \t</div>
\t\t  \t</div>
\t  \t</div>
  \t</div>
  </div>
      </div>
      ";
            }
            // line 237
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "          
  </div>
 

        </div>
       
      </div>

    
  </div>
  

<div class=\"col-md-1\"> </div>
</div>
</section>
";
        
        $__internal_0453faa25a79b9070881367342295615b1bff68ecaa14b949c7bec5226979487->leave($__internal_0453faa25a79b9070881367342295615b1bff68ecaa14b949c7bec5226979487_prof);

    }

    // line 254
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a40c0e86abe66e10f918cf5b42e17397db27f7d0ed669a64a8e8fb3b0ecbce2 = $this->env->getExtension("native_profiler");
        $__internal_9a40c0e86abe66e10f918cf5b42e17397db27f7d0ed669a64a8e8fb3b0ecbce2->enter($__internal_9a40c0e86abe66e10f918cf5b42e17397db27f7d0ed669a64a8e8fb3b0ecbce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 255
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://code.jquery.com/jquery-latest.js"), "html", null, true);
        echo "\"></script>
 ";
        
        $__internal_9a40c0e86abe66e10f918cf5b42e17397db27f7d0ed669a64a8e8fb3b0ecbce2->leave($__internal_9a40c0e86abe66e10f918cf5b42e17397db27f7d0ed669a64a8e8fb3b0ecbce2_prof);

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
        return array (  454 => 256,  449 => 255,  443 => 254,  421 => 238,  415 => 237,  404 => 229,  395 => 223,  391 => 222,  388 => 221,  384 => 219,  382 => 218,  379 => 217,  377 => 216,  372 => 214,  368 => 213,  362 => 210,  349 => 200,  343 => 196,  337 => 192,  335 => 191,  330 => 188,  328 => 187,  322 => 184,  313 => 178,  308 => 176,  302 => 173,  298 => 171,  295 => 170,  291 => 169,  279 => 159,  273 => 158,  262 => 150,  253 => 144,  249 => 143,  246 => 142,  242 => 140,  240 => 139,  237 => 138,  235 => 137,  230 => 135,  226 => 134,  220 => 131,  207 => 121,  201 => 117,  195 => 113,  193 => 112,  188 => 109,  186 => 108,  180 => 105,  171 => 99,  166 => 97,  160 => 94,  156 => 92,  153 => 91,  149 => 90,  122 => 66,  114 => 61,  105 => 55,  53 => 6,  47 => 5,  36 => 2,  11 => 1,);
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
/*   <div class="col-md-1"></div>*/
/*   <div class="col-md-10">*/
/*     <div class="jumbotron">*/
/*         <h1>Proceso de adopción </h1>*/
/*         <p class="h1estle">La fundación patitas callejeras en función de asegurar la integridad de los animales y el compromiso de las personas que quieren adoptar, establece una serie de actividades para definir si se cumplen con las condiciones estipuladas por la institución. </p>*/
/*         <p class="h1estle">Debe tener en cuenta los tres puntos que se muestran a continuación.</p>*/
/*         <div class="alert alert-warning">Es muy importante que leas los requisitos de adopción</div>*/
/* */
/*   <div class="continer">*/
/* 	*/
/* 	<button class="btn btn-warning" data-toggle="modal" data-target="#miVentana">Ver requisitos</button>*/
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
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/*      </div>    */
/* */
/*   </div>*/
/*   <div class="col-md-1"></div>*/
/*   </div>*/
/*   <div class="row">*/
/*     <div class="col-md-1"></div>*/
/*      <div class="col-md-10">*/
/*         <div class="col-lg-4">*/
/*           <img class="img-circle" src="{{ asset('public/img/ENC.png') }}" alt="Generic placeholder image" width="140" height="140">*/
/*           <h4> encuesta de adopción</h4>*/
/*           <p>En el cuestionario trataremos los temas más importantes sobre la adopción y tendremos una visión general de la persona o familia que quiere adoptar el anima.</p>*/
/*           */
/*        </div>*/
/*         <div class="col-lg-4">*/
/*           <img class="img-circle" src="{{asset('public/img/CAS.png')}}" alt="Generic placeholder image" width="140" height="140">*/
/*           <h4>Visita domiciliaria</h4>*/
/*           <p>Después de analizar las respuestas del cuestionario, se procederá a programar una visita domiciliaria donde se analizará el ambiente y el espacio en el que vivirá la mascota.</p>*/
/*          </div>*/
/*         <div class="col-lg-4">*/
/*           <img class="img-circle" src="{{asset('public/img/REL.png')}}" alt="Generic placeholder image" width="140" height="140">*/
/*           <h4>Seguimiento de adaptación</h4>*/
/*           <p>La fundación realizará un contacto posterior a la entrega de la mascota con el fin de verificar el estado de esta y las condiciones en que es mantenida, dicho contacto pueden ser visitas domiciliarias, llamadas telefónicas y/u otros medios que la fundación en su momento disponga.</p>*/
/*           </div>*/
/*         <div class="col-md-1"></div>*/
/*       </div>*/
/*     </div>*/
/* </div>*/
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
/*         <div role="tabpanel" class="conmargin tab-pane fade in active" id="home">*/
/*           */
/*       <div class="row">*/
/*            {% for pet in pets %}*/
/*            {% if pet.species == 'CANINE' %}*/
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
/* 		      		<div class="alert alert-info modal-header">*/
/* 		    		<button type="button" class="close" data-dismiss="modal" area-hidden="true"></button>*/
/* 			    	<h4 class="pull-left"><b>Adoptar</b></h4>*/
/* 			    	</div>*/
/* 			    	<div class="modal-body">*/
/* 					*/
/* 			  		<dl class="textjusti dl-horizontal">*/
/* 				  		<dt><img src="{{asset('public/img/pnot.png')}}" class="imgadop img-thumbnail img-responsive" alt=""></dt>*/
/* 				        <dd>*/
/* 				          <table class="table">*/
/*                    <tr><td><b>Nombre:</b></td><td>{{ pet.name }}</td></tr>*/
/*                    <tr><td><b>Edad:</b></td><td>{{ pet.age }}&nbsp;años.</td></tr>*/
/*                    <tr><td><b>sexo:</b></td><td>*/
/*                      {% if pet.gender == 'MALE'%}*/
/*                        macho*/
/*                      {% elseif pet.gender == 'FEMALE'%}*/
/*                        hembra*/
/*                      {%endif%}*/
/*                      </td></tr>*/
/*                    <tr><td><b>Color:</b></td><td>{{ pet.colour }}</td></tr>*/
/*                    <tr><td><b>raza:</b></td><td>{{ pet.race }}</td></tr>*/
/*                   </table>*/
/* 				        </dd>*/
/* 				      	</dl>*/
/* 				      </div>*/
/* 				  <div class="modal-footer">*/
/* 				 <p><a class="btn btn-info" href="{{ path('pc_user_encuesta') }}" target="_blank" role="button" id="ventemerg">Adoptar mascota</a></p>*/
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
/*         <div role="tabpanel" class="conmargin tab-pane fade" id="profile">*/
/* */
/*           <div class="row">*/
/*             */
/*             {% for pet in pets %}*/
/*            {% if pet.species == 'FELINE' %}*/
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
/*           	<div class="modal fade" id="ventanaadoptarcat{{pet.id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*           		<div class="modal-dialog">*/
/* 		        	<div class="modal-content">*/
/* 		      		<div class="alert alert-info modal-header">*/
/* 		    		<button type="button" class="close" data-dismiss="modal" area-hidden="true"></button>*/
/* 			    	<h4 class="pull-left"><b>Adoptar</b></h4>*/
/* 			    	</div>*/
/* 			    	<div class="modal-body">*/
/* 					*/
/* 			  		<dl class="textjusti dl-horizontal">*/
/* 				  		<dt><img src="{{asset('public/img/gnot.png')}}" class="imgadop img-thumbnail img-responsive" alt=""></dt>*/
/* 				        <dd>*/
/* 				          <table class="table">*/
/*                    <tr><td><b>Nombre:</b></td><td>{{ pet.name }}</td></tr>*/
/*                    <tr><td><b>Edad:</b></td><td>{{ pet.age }}&nbsp;años.</td></tr>*/
/*                    <tr><td><b>sexo:</b></td><td>*/
/*                      {% if pet.gender == 'MALE'%}*/
/*                        macho*/
/*                      {% elseif pet.gender == 'FEMALE'%}*/
/*                        hembra*/
/*                      {%endif%}*/
/*                      </td></tr>*/
/*                    <tr><td><b>Color:</b></td><td>{{ pet.colour }}</td></tr>*/
/*                    <tr><td><b>raza:</b></td><td>{{ pet.race }}</td></tr>*/
/*                   </table>*/
/* 				        </dd>*/
/* 				      	</dl>*/
/* 				      </div>*/
/* 				  <div class="modal-footer">*/
/* 				 <p><a class="btn btn-info" href="{{ path('pc_user_encuesta')}}" target="_blank" role="button" id="ventemerg">Adoptar mascota</a></p>*/
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
