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
        $__internal_bfd803a0151c16f539a6ac1b5e458920344131449679d0c877fc82a6fe1b8809 = $this->env->getExtension("native_profiler");
        $__internal_bfd803a0151c16f539a6ac1b5e458920344131449679d0c877fc82a6fe1b8809->enter($__internal_bfd803a0151c16f539a6ac1b5e458920344131449679d0c877fc82a6fe1b8809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:adopcion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfd803a0151c16f539a6ac1b5e458920344131449679d0c877fc82a6fe1b8809->leave($__internal_bfd803a0151c16f539a6ac1b5e458920344131449679d0c877fc82a6fe1b8809_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_639d7c151191d8977ecaabbc802e1e643a09b1a02279bdc0153a491080637979 = $this->env->getExtension("native_profiler");
        $__internal_639d7c151191d8977ecaabbc802e1e643a09b1a02279bdc0153a491080637979->enter($__internal_639d7c151191d8977ecaabbc802e1e643a09b1a02279bdc0153a491080637979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_639d7c151191d8977ecaabbc802e1e643a09b1a02279bdc0153a491080637979->leave($__internal_639d7c151191d8977ecaabbc802e1e643a09b1a02279bdc0153a491080637979_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d453faf812d757af6a018e9df7b849d8c03689c33ee2fc263d6479ee7da5777 = $this->env->getExtension("native_profiler");
        $__internal_2d453faf812d757af6a018e9df7b849d8c03689c33ee2fc263d6479ee7da5777->enter($__internal_2d453faf812d757af6a018e9df7b849d8c03689c33ee2fc263d6479ee7da5777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t<button class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#miVentana\">requisitos</button>

\t<div class=\"modal fade\" id=\"miVentana\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" area-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"pull-left\"> Requisitos de Adopción</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t
\t\t\t\t\t<dl class=\"dl-horizontal\">
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
              <a  class=\"links2\" href=\"##\"> 
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
            </div>
          </div>

        <div class=\"col-md-4\">
            <div class=\"conteneter\">
              <a  class=\"links2\" href=\"##\"> 
              <div class=\"banername back1\">
                      
                  <img src=\"";
        // line 118
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
            </div>
          </div>

        <div class=\"col-md-4\">
            <div class=\"conteneter\">
              <a  class=\"links2\" href=\"##\"> 
              <div class=\"banername back1\">
                      
                   <img src=\"";
        // line 140
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
            </div>
          </div>

         
  </div>

   <div class=\"row\">
     
          <div class=\"col-md-4\">
            <div class=\"conteneter\">
              <a  class=\"links2\" href=\"##\"> 
              <div class=\"banername back1\">
                      
                   <img src=\"";
        // line 167
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
            </div>
          </div>

        <div class=\"col-md-4\">
            <div class=\"conteneter\">
              <a  class=\"links2\" href=\"##\"> 
              <div class=\"banername back1\">
                      
                   <img src=\"";
        // line 189
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
            </div>
          </div>

        <div class=\"col-md-4\">
            <div class=\"conteneter\">
              <a  class=\"links2\" href=\"##\"> 
              <div class=\"banername back1\">
                      
                   <img src=\"";
        // line 211
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
        // line 244
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
        // line 266
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
        // line 288
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
  <div class=\"row\">
     
          <div class=\"col-md-4\">
            <div class=\"conteneter\">
              <a  class=\"links2\" href=\"##\"> 
              <div class=\"banername back1\">
                      
                  <img src=\"";
        // line 314
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
        // line 336
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
        // line 358
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
        
        $__internal_2d453faf812d757af6a018e9df7b849d8c03689c33ee2fc263d6479ee7da5777->leave($__internal_2d453faf812d757af6a018e9df7b849d8c03689c33ee2fc263d6479ee7da5777_prof);

    }

    // line 390
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1e69f92d8b596d5fcc0d8468bff2b71f0c4e92b23eb36e5abe52496097e2ac33 = $this->env->getExtension("native_profiler");
        $__internal_1e69f92d8b596d5fcc0d8468bff2b71f0c4e92b23eb36e5abe52496097e2ac33->enter($__internal_1e69f92d8b596d5fcc0d8468bff2b71f0c4e92b23eb36e5abe52496097e2ac33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 391
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 <script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://code.jquery.com/jquery-latest.js"), "html", null, true);
        echo "\"></script>
 ";
        
        $__internal_1e69f92d8b596d5fcc0d8468bff2b71f0c4e92b23eb36e5abe52496097e2ac33->leave($__internal_1e69f92d8b596d5fcc0d8468bff2b71f0c4e92b23eb36e5abe52496097e2ac33_prof);

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
        return array (  500 => 392,  495 => 391,  489 => 390,  450 => 358,  425 => 336,  400 => 314,  371 => 288,  346 => 266,  321 => 244,  285 => 211,  260 => 189,  235 => 167,  205 => 140,  180 => 118,  155 => 96,  122 => 66,  114 => 61,  105 => 55,  53 => 6,  47 => 5,  36 => 2,  11 => 1,);
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
/* 	<button class="btn btn-warning" data-toggle="modal" data-target="#miVentana">requisitos</button>*/
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
/* 					<dl class="dl-horizontal">*/
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
/*               <a  class="links2" href="##"> */
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
/*             </div>*/
/*           </div>*/
/* */
/*         <div class="col-md-4">*/
/*             <div class="conteneter">*/
/*               <a  class="links2" href="##"> */
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
/*             </div>*/
/*           </div>*/
/* */
/*         <div class="col-md-4">*/
/*             <div class="conteneter">*/
/*               <a  class="links2" href="##"> */
/*               <div class="banername back1">*/
/*                       */
/*                    <img src="{{asset('public/img/pnot.png')}}" class="imgadop img-circle" alt="">*/
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
/* */
/*    <div class="row">*/
/*      */
/*           <div class="col-md-4">*/
/*             <div class="conteneter">*/
/*               <a  class="links2" href="##"> */
/*               <div class="banername back1">*/
/*                       */
/*                    <img src="{{asset('public/img/pnot.png')}}" class="imgadop img-circle" alt="">*/
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
/*                    <img src="{{asset('public/img/pnot.png')}}" class="imgadop img-circle" alt="">*/
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
/*                    <img src="{{asset('public/img/pnot.png')}}" class="imgadop img-circle" alt="">*/
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
/*   <div class="row">*/
/*      */
/*           <div class="col-md-4">*/
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
/*          */
/*   </div> */
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
