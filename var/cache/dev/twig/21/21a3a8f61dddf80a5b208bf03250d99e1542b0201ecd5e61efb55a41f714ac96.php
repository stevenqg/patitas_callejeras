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
        $__internal_d6dd5ba562a1336b6413596dd423fe1fe623c676651f219f92f03e3066dacaf8 = $this->env->getExtension("native_profiler");
        $__internal_d6dd5ba562a1336b6413596dd423fe1fe623c676651f219f92f03e3066dacaf8->enter($__internal_d6dd5ba562a1336b6413596dd423fe1fe623c676651f219f92f03e3066dacaf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:adopcion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6dd5ba562a1336b6413596dd423fe1fe623c676651f219f92f03e3066dacaf8->leave($__internal_d6dd5ba562a1336b6413596dd423fe1fe623c676651f219f92f03e3066dacaf8_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_2dbfcb7b07f598f0f88bb2cbcd0e7df96f292db9c54fc329f5dc6dff279b4cdb = $this->env->getExtension("native_profiler");
        $__internal_2dbfcb7b07f598f0f88bb2cbcd0e7df96f292db9c54fc329f5dc6dff279b4cdb->enter($__internal_2dbfcb7b07f598f0f88bb2cbcd0e7df96f292db9c54fc329f5dc6dff279b4cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_2dbfcb7b07f598f0f88bb2cbcd0e7df96f292db9c54fc329f5dc6dff279b4cdb->leave($__internal_2dbfcb7b07f598f0f88bb2cbcd0e7df96f292db9c54fc329f5dc6dff279b4cdb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca6876dbd650bc815ad7c2b8812f2abfee7e829435e382082773fd203ef6b1f3 = $this->env->getExtension("native_profiler");
        $__internal_ca6876dbd650bc815ad7c2b8812f2abfee7e829435e382082773fd203ef6b1f3->enter($__internal_ca6876dbd650bc815ad7c2b8812f2abfee7e829435e382082773fd203ef6b1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t\t<dd>la persona que realise la solicitud de adopcion debe ser mayor de edad o bajo acto de un adulto responsable</dd>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<dt>aceptación familiar</dt>
\t\t\t\t\t\t<dd>todo el nucleo familiar que convive con la persona que realiza el proceso de adocpión debe de estar de acuerdo con el nuevo integrante</dd>
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
          <h4>Seguimineto de adaptación</h4>
          <p>cDonec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
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
     
          <div class=\"col-md-4\">
            <div class=\"conteneter\">
              <a  class=\"links2\"  data-toggle=\"modal\" data-target=\"#ventanaadoptar\" href=\"\"> 
              <div class=\"banername back1\">
                      
                  <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/pnot.png"), "html", null, true);
        echo "\" class=\"imgadop img-circle\" alt=\"\">
                              
                  <h3 class=\"namemasct\"><b>NOMBRE</b></h3>
                
            </div>
            <div class=\"estileinfo\">
            <ul>
              <li><label>Edad:</label>
              <span>......</span></li>

              <li><label>Sexo:</label>
              <span>......</span></li>
            </ul>
          </div></a>
          
          \t<div class=\"modal fade\" id=\"ventanaadoptar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
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
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/pnot.png"), "html", null, true);
        echo "\" class=\"imgadop img-thumbnail img-responsive\" alt=\"\"></dt>
\t\t\t\t        <dd>
\t\t\t\t          <table class=\"table\">
                   <tr><td><b>Nombre:</b></td><td>............</td></tr>
                   <tr><td><b>Edad:</b></td><td>............</td></tr>
                   <tr><td><b>sexo:</b></td><td>............</td></tr>
                   <tr><td rowspan=2 colspan=2>Descripciom: </tr>
                  </table>
\t\t\t\t        </dd>
\t\t\t\t      \t</dl>
\t\t\t\t      </div>
\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t <p><a class=\"btn btn-info\" href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("pc_user_encuesta");
        echo "\" target=\"_blank\" role=\"button\" id=\"ventemerg\">Adoptar mascota</a></p>
\t\t\t  \t</div>
\t\t  \t</div>
\t  \t</div>
  \t</div>
  </div>
      </div>

    <div class=\"col-md-4\">
            <div class=\"conteneter\">
              <a  class=\"links2\"  data-toggle=\"modal\" data-target=\"#ventanaadoptar\" href=\"\"> 
              <div class=\"banername back1\">
                      
                  <img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/pnot.png"), "html", null, true);
        echo "\" class=\"imgadop img-circle\" alt=\"\">
                              
                  <h3 class=\"namemasct\"><b>NOMBRE</b></h3>
                
            </div>
            <div class=\"estileinfo\">
            <ul>
              <li><label>Edad:</label>
              <span>......</span></li>

              <li><label>Sexo:</label>
              <span>......</span></li>
            </ul>
          </div></a>
          
          \t<div class=\"modal fade\" id=\"ventanaadoptar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
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
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/pnot.png"), "html", null, true);
        echo "\" class=\"imgadop img-thumbnail img-responsive\" alt=\"\"></dt>
\t\t\t\t        <dd>
\t\t\t\t          <table class=\"table\">
                   <tr><td><b>Nombre:</b></td><td>............</td></tr>
                   <tr><td><b>Edad:</b></td><td>............</td></tr>
                   <tr><td><b>sexo:</b></td><td>............</td></tr>
                   <tr><td rowspan=2 colspan=2>Descripciom: </tr>
                  </table>
\t\t\t\t        </dd>
\t\t\t\t      \t</dl>
\t\t\t\t      </div>
\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t <button type=\"button\" class=\"btn btn-info\" href=\"";
        // line 183
        echo $this->env->getExtension('routing')->getPath("pc_fundation_encuesta");
        echo "\" target=\"_blank\" role=\"button\" id=\"ventemerg\" data-dismiss=\"modal\">Adoptar mascota</button>
\t\t\t  \t</div>
\t\t  \t</div>
\t  \t</div>
  \t</div>
  </div>
      </div>
      

    <div class=\"col-md-4\">
            <div class=\"conteneter\">
              <a  class=\"links2\"  data-toggle=\"modal\" data-target=\"#ventanaadoptar\" href=\"\"> 
              <div class=\"banername back1\">
                      
                  <img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/pnot.png"), "html", null, true);
        echo "\" class=\"imgadop img-circle\" alt=\"\">
                              
                  <h3 class=\"namemasct\"><b>NOMBRE</b></h3>
                
            </div>
            <div class=\"estileinfo\">
            <ul>
              <li><label>Edad:</label>
              <span>......</span></li>

              <li><label>Sexo:</label>
              <span>......</span></li>
            </ul>
          </div></a>
          
          \t<div class=\"modal fade\" id=\"ventanaadoptar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
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
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/pnot.png"), "html", null, true);
        echo "\" class=\"imgadop img-thumbnail img-responsive\" alt=\"\"></dt>
\t\t\t\t        <dd>
\t\t\t\t          <table class=\"table\">
                   <tr><td><b>Nombre:</b></td><td>............</td></tr>
                   <tr><td><b>Edad:</b></td><td>............</td></tr>
                   <tr><td><b>sexo:</b></td><td>............</td></tr>
                   <tr><td rowspan=2 colspan=2>Descripciom: </tr>
                  </table>
\t\t\t\t        </dd>
\t\t\t\t      \t</dl>
\t\t\t\t      </div>
\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Adoptar mascota</button>
\t\t\t  \t</div>
\t\t  \t</div>
\t  \t</div>
  \t</div>
  </div>
      </div>

         
  </div>
        </div>



        <!-- tab panel 2 gaticos contenet-->
        <div role=\"tabpanel\" class=\"conmargin tab-pane fade\" id=\"profile\">

          <div class=\"row\">
     
          <div class=\"col-md-4\">
            <div class=\"conteneter\">
              <a  class=\"links2\" href=\"##\"> 
              <div class=\"banername back1\">
                      
                   <img src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/gnot.png"), "html", null, true);
        echo "\" class=\"imgadop img-circle\" alt=\"\">
                              
                  <h3 class=\"namemasct\"><b>NOMBRE</b></h3>
                
            </div>
            <div class=\"estileinfo\">
            <ul>
              <li><label>Edad:</label>
              <span>......</span></li>

              <li><label>Sexo:</label>
              <span>......</span></li>
            </ul>
          </div></a>
            </div>
          </div>

        <div class=\"col-md-4\">
            <div class=\"conteneter\">
              <a  class=\"links2\" href=\"##\"> 
              <div class=\"banername back1\">
                      
                   <img src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/gnot.png"), "html", null, true);
        echo "\" class=\"imgadop img-circle\" alt=\"\">
                              
                  <h3 class=\"namemasct\"><b>NOMBRE</b></h3>
                
            </div>
            <div class=\"estileinfo\">
            <ul>
              <li><label>Edad:</label>
              <span>......</span></li>

              <li><label>Sexo:</label>
              <span>......</span></li>
            </ul>
          </div></a>
            </div>
          </div>

        <div class=\"col-md-4\">
            <div class=\"conteneter\">
              <a  class=\"links2\" href=\"##\"> 
              <div class=\"banername back1\">
                      
                  <img src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/gnot.png"), "html", null, true);
        echo "\" class=\"imgadop img-circle\" alt=\"\">
                              
                  <h3 class=\"namemasct\"><b>NOMBRE</b></h3>
                
            </div>
            <div class=\"estileinfo\">
            <ul>
              <li><label>Edad:</label>
              <span>......</span></li>

              <li><label>Sexo:</label>
              <span>......</span></li>
            </ul>
          </div></a>
            </div>
          </div>

         
  </div>
 

        </div>
       
      </div>

    
  </div>
  

<div class=\"col-md-1\"> </div>
</div>
</section>
";
        
        $__internal_ca6876dbd650bc815ad7c2b8812f2abfee7e829435e382082773fd203ef6b1f3->leave($__internal_ca6876dbd650bc815ad7c2b8812f2abfee7e829435e382082773fd203ef6b1f3_prof);

    }

    // line 335
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2a406c0a331c08396d10b2a0379b731f0faa848520e5ad22da3a1ab5c3470a29 = $this->env->getExtension("native_profiler");
        $__internal_2a406c0a331c08396d10b2a0379b731f0faa848520e5ad22da3a1ab5c3470a29->enter($__internal_2a406c0a331c08396d10b2a0379b731f0faa848520e5ad22da3a1ab5c3470a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 336
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://code.jquery.com/jquery-latest.js"), "html", null, true);
        echo "\"></script>
 ";
        
        $__internal_2a406c0a331c08396d10b2a0379b731f0faa848520e5ad22da3a1ab5c3470a29->leave($__internal_2a406c0a331c08396d10b2a0379b731f0faa848520e5ad22da3a1ab5c3470a29_prof);

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
        return array (  442 => 337,  437 => 336,  431 => 335,  391 => 302,  366 => 280,  341 => 258,  302 => 222,  274 => 197,  257 => 183,  242 => 171,  214 => 146,  198 => 133,  183 => 121,  155 => 96,  122 => 66,  114 => 61,  105 => 55,  53 => 6,  47 => 5,  36 => 2,  11 => 1,);
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
/* 						<dd>la persona que realise la solicitud de adopcion debe ser mayor de edad o bajo acto de un adulto responsable</dd>*/
/* 						<br>*/
/* 						<dt>aceptación familiar</dt>*/
/* 						<dd>todo el nucleo familiar que convive con la persona que realiza el proceso de adocpión debe de estar de acuerdo con el nuevo integrante</dd>*/
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
/*           <h4>Seguimineto de adaptación</h4>*/
/*           <p>cDonec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>*/
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
/*      */
/*           <div class="col-md-4">*/
/*             <div class="conteneter">*/
/*               <a  class="links2"  data-toggle="modal" data-target="#ventanaadoptar" href=""> */
/*               <div class="banername back1">*/
/*                       */
/*                   <img src="{{asset('public/img/pnot.png')}}" class="imgadop img-circle" alt="">*/
/*                               */
/*                   <h3 class="namemasct"><b>NOMBRE</b></h3>*/
/*                 */
/*             </div>*/
/*             <div class="estileinfo">*/
/*             <ul>*/
/*               <li><label>Edad:</label>*/
/*               <span>......</span></li>*/
/* */
/*               <li><label>Sexo:</label>*/
/*               <span>......</span></li>*/
/*             </ul>*/
/*           </div></a>*/
/*           */
/*           	<div class="modal fade" id="ventanaadoptar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
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
/*                    <tr><td><b>Nombre:</b></td><td>............</td></tr>*/
/*                    <tr><td><b>Edad:</b></td><td>............</td></tr>*/
/*                    <tr><td><b>sexo:</b></td><td>............</td></tr>*/
/*                    <tr><td rowspan=2 colspan=2>Descripciom: </tr>*/
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
/* */
/*     <div class="col-md-4">*/
/*             <div class="conteneter">*/
/*               <a  class="links2"  data-toggle="modal" data-target="#ventanaadoptar" href=""> */
/*               <div class="banername back1">*/
/*                       */
/*                   <img src="{{asset('public/img/pnot.png')}}" class="imgadop img-circle" alt="">*/
/*                               */
/*                   <h3 class="namemasct"><b>NOMBRE</b></h3>*/
/*                 */
/*             </div>*/
/*             <div class="estileinfo">*/
/*             <ul>*/
/*               <li><label>Edad:</label>*/
/*               <span>......</span></li>*/
/* */
/*               <li><label>Sexo:</label>*/
/*               <span>......</span></li>*/
/*             </ul>*/
/*           </div></a>*/
/*           */
/*           	<div class="modal fade" id="ventanaadoptar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
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
/*                    <tr><td><b>Nombre:</b></td><td>............</td></tr>*/
/*                    <tr><td><b>Edad:</b></td><td>............</td></tr>*/
/*                    <tr><td><b>sexo:</b></td><td>............</td></tr>*/
/*                    <tr><td rowspan=2 colspan=2>Descripciom: </tr>*/
/*                   </table>*/
/* 				        </dd>*/
/* 				      	</dl>*/
/* 				      </div>*/
/* 				  <div class="modal-footer">*/
/* 				 <button type="button" class="btn btn-info" href="{{ path('pc_fundation_encuesta') }}" target="_blank" role="button" id="ventemerg" data-dismiss="modal">Adoptar mascota</button>*/
/* 			  	</div>*/
/* 		  	</div>*/
/* 	  	</div>*/
/*   	</div>*/
/*   </div>*/
/*       </div>*/
/*       */
/* */
/*     <div class="col-md-4">*/
/*             <div class="conteneter">*/
/*               <a  class="links2"  data-toggle="modal" data-target="#ventanaadoptar" href=""> */
/*               <div class="banername back1">*/
/*                       */
/*                   <img src="{{asset('public/img/pnot.png')}}" class="imgadop img-circle" alt="">*/
/*                               */
/*                   <h3 class="namemasct"><b>NOMBRE</b></h3>*/
/*                 */
/*             </div>*/
/*             <div class="estileinfo">*/
/*             <ul>*/
/*               <li><label>Edad:</label>*/
/*               <span>......</span></li>*/
/* */
/*               <li><label>Sexo:</label>*/
/*               <span>......</span></li>*/
/*             </ul>*/
/*           </div></a>*/
/*           */
/*           	<div class="modal fade" id="ventanaadoptar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
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
/*                    <tr><td><b>Nombre:</b></td><td>............</td></tr>*/
/*                    <tr><td><b>Edad:</b></td><td>............</td></tr>*/
/*                    <tr><td><b>sexo:</b></td><td>............</td></tr>*/
/*                    <tr><td rowspan=2 colspan=2>Descripciom: </tr>*/
/*                   </table>*/
/* 				        </dd>*/
/* 				      	</dl>*/
/* 				      </div>*/
/* 				  <div class="modal-footer">*/
/* 				 <button type="button" class="btn btn-primary" data-dismiss="modal">Adoptar mascota</button>*/
/* 			  	</div>*/
/* 		  	</div>*/
/* 	  	</div>*/
/*   	</div>*/
/*   </div>*/
/*       </div>*/
/* */
/*          */
/*   </div>*/
/*         </div>*/
/* */
/* */
/* */
/*         <!-- tab panel 2 gaticos contenet-->*/
/*         <div role="tabpanel" class="conmargin tab-pane fade" id="profile">*/
/* */
/*           <div class="row">*/
/*      */
/*           <div class="col-md-4">*/
/*             <div class="conteneter">*/
/*               <a  class="links2" href="##"> */
/*               <div class="banername back1">*/
/*                       */
/*                    <img src="{{asset('public/img/gnot.png')}}" class="imgadop img-circle" alt="">*/
/*                               */
/*                   <h3 class="namemasct"><b>NOMBRE</b></h3>*/
/*                 */
/*             </div>*/
/*             <div class="estileinfo">*/
/*             <ul>*/
/*               <li><label>Edad:</label>*/
/*               <span>......</span></li>*/
/* */
/*               <li><label>Sexo:</label>*/
/*               <span>......</span></li>*/
/*             </ul>*/
/*           </div></a>*/
/*             </div>*/
/*           </div>*/
/* */
/*         <div class="col-md-4">*/
/*             <div class="conteneter">*/
/*               <a  class="links2" href="##"> */
/*               <div class="banername back1">*/
/*                       */
/*                    <img src="{{asset('public/img/gnot.png')}}" class="imgadop img-circle" alt="">*/
/*                               */
/*                   <h3 class="namemasct"><b>NOMBRE</b></h3>*/
/*                 */
/*             </div>*/
/*             <div class="estileinfo">*/
/*             <ul>*/
/*               <li><label>Edad:</label>*/
/*               <span>......</span></li>*/
/* */
/*               <li><label>Sexo:</label>*/
/*               <span>......</span></li>*/
/*             </ul>*/
/*           </div></a>*/
/*             </div>*/
/*           </div>*/
/* */
/*         <div class="col-md-4">*/
/*             <div class="conteneter">*/
/*               <a  class="links2" href="##"> */
/*               <div class="banername back1">*/
/*                       */
/*                   <img src="{{asset('public/img/gnot.png')}}" class="imgadop img-circle" alt="">*/
/*                               */
/*                   <h3 class="namemasct"><b>NOMBRE</b></h3>*/
/*                 */
/*             </div>*/
/*             <div class="estileinfo">*/
/*             <ul>*/
/*               <li><label>Edad:</label>*/
/*               <span>......</span></li>*/
/* */
/*               <li><label>Sexo:</label>*/
/*               <span>......</span></li>*/
/*             </ul>*/
/*           </div></a>*/
/*             </div>*/
/*           </div>*/
/* */
/*          */
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
