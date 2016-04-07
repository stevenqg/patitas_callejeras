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
        $__internal_6c53a904c7f7c70b6489e80437d74cf33831d4635bf51d4c5205d208761fa7d1 = $this->env->getExtension("native_profiler");
        $__internal_6c53a904c7f7c70b6489e80437d74cf33831d4635bf51d4c5205d208761fa7d1->enter($__internal_6c53a904c7f7c70b6489e80437d74cf33831d4635bf51d4c5205d208761fa7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:adopcion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c53a904c7f7c70b6489e80437d74cf33831d4635bf51d4c5205d208761fa7d1->leave($__internal_6c53a904c7f7c70b6489e80437d74cf33831d4635bf51d4c5205d208761fa7d1_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_8e7eb2c4a5150c4f693cbc8f6b2d8fd099414c1671b81039cec8dd5b3ebbf73b = $this->env->getExtension("native_profiler");
        $__internal_8e7eb2c4a5150c4f693cbc8f6b2d8fd099414c1671b81039cec8dd5b3ebbf73b->enter($__internal_8e7eb2c4a5150c4f693cbc8f6b2d8fd099414c1671b81039cec8dd5b3ebbf73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_8e7eb2c4a5150c4f693cbc8f6b2d8fd099414c1671b81039cec8dd5b3ebbf73b->leave($__internal_8e7eb2c4a5150c4f693cbc8f6b2d8fd099414c1671b81039cec8dd5b3ebbf73b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b353822aafe2319b3c9fee4cf6179378de405c2fd1b16ae37e056988d1f6d423 = $this->env->getExtension("native_profiler");
        $__internal_b353822aafe2319b3c9fee4cf6179378de405c2fd1b16ae37e056988d1f6d423->enter($__internal_b353822aafe2319b3c9fee4cf6179378de405c2fd1b16ae37e056988d1f6d423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"liner\"></div>
  <p>

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
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/ENC.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
          <h4> encuesta de adopción</h4>
          <p>En el cuestionario trataremos los temas más importantes sobre la adopción y tendremos una visión general de la persona o familia que quiere adoptar el anima.</p>
          
       </div>
        <div class=\"col-lg-4\">
          <img class=\"img-circle\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/CAS.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
          <h4>Visita domiciliaria</h4>
          <p>Después de analizar las respuestas del cuestionario, se procederá a programar una visita domiciliaria donde se analizará el ambiente y el espacio en el que vivirá la mascota.</p>
         </div>
        <div class=\"col-lg-4\">
          <img class=\"img-circle\" src=\"";
        // line 68
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
        // line 98
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
        // line 120
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
        // line 142
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
        // line 169
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
        // line 191
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
        // line 213
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
        // line 246
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
        // line 268
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
        // line 290
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
        // line 316
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
        // line 338
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
        // line 360
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
        
        $__internal_b353822aafe2319b3c9fee4cf6179378de405c2fd1b16ae37e056988d1f6d423->leave($__internal_b353822aafe2319b3c9fee4cf6179378de405c2fd1b16ae37e056988d1f6d423_prof);

    }

    // line 392
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a5926754cab980e6295e273bd7497a7e5f8883816d957377e8bded9ceaa3f7ff = $this->env->getExtension("native_profiler");
        $__internal_a5926754cab980e6295e273bd7497a7e5f8883816d957377e8bded9ceaa3f7ff->enter($__internal_a5926754cab980e6295e273bd7497a7e5f8883816d957377e8bded9ceaa3f7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 393
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 <script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://code.jquery.com/jquery-latest.js"), "html", null, true);
        echo "\"></script>
 ";
        
        $__internal_a5926754cab980e6295e273bd7497a7e5f8883816d957377e8bded9ceaa3f7ff->leave($__internal_a5926754cab980e6295e273bd7497a7e5f8883816d957377e8bded9ceaa3f7ff_prof);

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
        return array (  502 => 394,  497 => 393,  491 => 392,  452 => 360,  427 => 338,  402 => 316,  373 => 290,  348 => 268,  323 => 246,  287 => 213,  262 => 191,  237 => 169,  207 => 142,  182 => 120,  157 => 98,  124 => 68,  116 => 63,  107 => 57,  53 => 6,  47 => 5,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block scroll_nav %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {{ parent() }}*/
/* <div class="liner"></div>*/
/*   <p>*/
/* */
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
