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
        $__internal_6ef2a002e0df1b068bc823618968740ee64d654b5cebc12907167586873d93c9 = $this->env->getExtension("native_profiler");
        $__internal_6ef2a002e0df1b068bc823618968740ee64d654b5cebc12907167586873d93c9->enter($__internal_6ef2a002e0df1b068bc823618968740ee64d654b5cebc12907167586873d93c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:adopcion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ef2a002e0df1b068bc823618968740ee64d654b5cebc12907167586873d93c9->leave($__internal_6ef2a002e0df1b068bc823618968740ee64d654b5cebc12907167586873d93c9_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_70db39a7e828cdb8969c0aafbd78de4bbed32989ada3197ad3e125063b537f1c = $this->env->getExtension("native_profiler");
        $__internal_70db39a7e828cdb8969c0aafbd78de4bbed32989ada3197ad3e125063b537f1c->enter($__internal_70db39a7e828cdb8969c0aafbd78de4bbed32989ada3197ad3e125063b537f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_70db39a7e828cdb8969c0aafbd78de4bbed32989ada3197ad3e125063b537f1c->leave($__internal_70db39a7e828cdb8969c0aafbd78de4bbed32989ada3197ad3e125063b537f1c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7eb56aa495f6dedd1d665f8df070034c5ee42a55dc3b5457dfcd7bc4a3d235c0 = $this->env->getExtension("native_profiler");
        $__internal_7eb56aa495f6dedd1d665f8df070034c5ee42a55dc3b5457dfcd7bc4a3d235c0->enter($__internal_7eb56aa495f6dedd1d665f8df070034c5ee42a55dc3b5457dfcd7bc4a3d235c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Adoptar mascota</button>
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
\t\t\t\t <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Adoptar mascota</button>
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
        
        $__internal_7eb56aa495f6dedd1d665f8df070034c5ee42a55dc3b5457dfcd7bc4a3d235c0->leave($__internal_7eb56aa495f6dedd1d665f8df070034c5ee42a55dc3b5457dfcd7bc4a3d235c0_prof);

    }

    // line 335
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9839031b82eaba2f5898518ae4aec2ee48c85aa8caf4c9489c4c73e049914114 = $this->env->getExtension("native_profiler");
        $__internal_9839031b82eaba2f5898518ae4aec2ee48c85aa8caf4c9489c4c73e049914114->enter($__internal_9839031b82eaba2f5898518ae4aec2ee48c85aa8caf4c9489c4c73e049914114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 336
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://code.jquery.com/jquery-latest.js"), "html", null, true);
        echo "\"></script>
 ";
        
        $__internal_9839031b82eaba2f5898518ae4aec2ee48c85aa8caf4c9489c4c73e049914114->leave($__internal_9839031b82eaba2f5898518ae4aec2ee48c85aa8caf4c9489c4c73e049914114_prof);

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
        return array (  436 => 337,  431 => 336,  425 => 335,  385 => 302,  360 => 280,  335 => 258,  296 => 222,  268 => 197,  239 => 171,  211 => 146,  183 => 121,  155 => 96,  122 => 66,  114 => 61,  105 => 55,  53 => 6,  47 => 5,  36 => 2,  11 => 1,);
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
/* 				 <button type="button" class="btn btn-primary" data-dismiss="modal">Adoptar mascota</button>*/
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
/* 				 <button type="button" class="btn btn-primary" data-dismiss="modal">Adoptar mascota</button>*/
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
