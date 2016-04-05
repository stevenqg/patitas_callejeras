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
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23d9b6dfc7294af7c6f49a357794b43a22d3ff7dd40bfbc7fe484dd035db1242 = $this->env->getExtension("native_profiler");
        $__internal_23d9b6dfc7294af7c6f49a357794b43a22d3ff7dd40bfbc7fe484dd035db1242->enter($__internal_23d9b6dfc7294af7c6f49a357794b43a22d3ff7dd40bfbc7fe484dd035db1242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:adopcion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23d9b6dfc7294af7c6f49a357794b43a22d3ff7dd40bfbc7fe484dd035db1242->leave($__internal_23d9b6dfc7294af7c6f49a357794b43a22d3ff7dd40bfbc7fe484dd035db1242_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_522f2ade5f57e60a48d03ccd9f46c71cfce0d86c6b7be846ccc2ff6bed42edff = $this->env->getExtension("native_profiler");
        $__internal_522f2ade5f57e60a48d03ccd9f46c71cfce0d86c6b7be846ccc2ff6bed42edff->enter($__internal_522f2ade5f57e60a48d03ccd9f46c71cfce0d86c6b7be846ccc2ff6bed42edff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_522f2ade5f57e60a48d03ccd9f46c71cfce0d86c6b7be846ccc2ff6bed42edff->leave($__internal_522f2ade5f57e60a48d03ccd9f46c71cfce0d86c6b7be846ccc2ff6bed42edff_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f47f8801fb4d1ac01a344549cbf1eebe071869269570500d454560c014e40f2 = $this->env->getExtension("native_profiler");
        $__internal_6f47f8801fb4d1ac01a344549cbf1eebe071869269570500d454560c014e40f2->enter($__internal_6f47f8801fb4d1ac01a344549cbf1eebe071869269570500d454560c014e40f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<header>
    <div class=\"row margin\">
      <div class=\"col-md-1 \"></div>

      <div class=\"col-md-10\">
        
      
      <nav class=\"navbar navbar-default\"> 
  <div class=\"container-fluid\"> 
    <div class=\"navbar-header\"> 
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-5\" aria-expanded=\"false\"> 
        <span class=\"sr-only\">Toggle navigation</span> 
        <span class=\"icon-bar\"></span> 
        <span class=\"icon-bar\"></span> 
        <span class=\"icon-bar\"></span> 
      </button> 
      <a><img class=\"dimen\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/nombre.png"), "html", null, true);
        echo "\"></a> 
    </div> 
    <div class=\"navbar-collapse collapse\" id=\"bs-example-navbar-collapse-5\" aria-expanded=\"false\" style=\"height: 1px;\"> 
       <ul class=\"nav navbar-nav\">
              <li ><a class=\"links\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("pc_fundation_index");
        echo "\" >Inicio <span class=\"sr-only\"></span></a></li>
              <li><a class=\"links\" href=\"##\" >Eventos</a></li>
              <li><a class=\"links\" href=\"##\" >Donaciones</a></li>
              <li><a class=\"links\" href=\"##\" >Adoptar</a></li>
           </ul>
    </div> </div> </nav>
      </div>
      <div class=\"mn colx-md-1\"></div>
    </div>
  </header>
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
        <div class=\"h1estle \">
          <!-- Large modal -->
          <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".bs-example-modal-lg\">Requisitos de adopción</button>

          <div class=\"modal fade bs-example-modal-lg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
            <div class=\"modal-dialog modal-lg\">
              <div class=\"modal-content\">
                ...
              </div>
            </div>
          </div>
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
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/ENC.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
          <h4> encuesta de adopción</h4>
          <p>En el cuestionario trataremos los temas más importantes sobre la adopción y tendremos una visión general de la persona o familia que quiere adoptar el anima.</p>
          
       </div>
        <div class=\"col-lg-4\">
          <img class=\"img-circle\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/CAS.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
          <h4>Visita domiciliaria</h4>
          <p>Después de analizar las respuestas del cuestionario, se procederá a programar una visita domiciliaria donde se analizará el ambiente y el espacio en el que vivirá la mascota.</p>
         </div>
        <div class=\"col-lg-4\">
          <img class=\"img-circle\" src=\"";
        // line 82
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
        <div role=\"tabpanel\" class=\"conmargin tab-pane fade in active\" id=\"home\">
          <div class=\"col-md-6\">
            <div class=\"col-md-6\"><img class=\"img-thumbnail\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/p1.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
            <div class=\"col-md-6\">
              <table class=\"bordtab table\">
                <tr class=\"estiletab\">
                  <td><label><b>Nombre:</b></label></td>
                  <td> ............... </td>
                </tr>
                <tr>
                  <td><label><b>Sexo:</b></label></td>
                  <td> ..............</td>
                </tr>

                <tr>
                  <td><label><b>Edad:</b></label></td>
                  <td> ..............</td>
                </tr>
                
              </table>
            </div>           
          </div> 
          
          <div class=\"col-md-6\">
            <div class=\"col-md-6\"><img class=\"img-thumbnail\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/p1.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
            <div class=\"col-md-6\">
              <table class=\"bordtab table\">
                <tr class=\"estiletab\">
                  <td><label><b>Nombre:</b></label></td>
                  <td> ............... </td>
                </tr>
                <tr>
                  <td><label><b>Sexo:</b></label></td>
                  <td> ..............</td>
                </tr>

                <tr>
                  <td><label><b>Edad:</b></label></td>
                  <td> ..............</td>
                </tr>
                
              </table>
            </div>           
          </div>

               

        </div>


        <div role=\"tabpanel\" class=\"conmargin tab-pane fade\" id=\"profile\">.2sdsds..</div>
       
      </div>

    
  </div>
  
</div>
<div class=\"col-md-1\"> </div>

</section>

";
        
        $__internal_6f47f8801fb4d1ac01a344549cbf1eebe071869269570500d454560c014e40f2->leave($__internal_6f47f8801fb4d1ac01a344549cbf1eebe071869269570500d454560c014e40f2_prof);

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
        return array (  194 => 127,  169 => 105,  143 => 82,  135 => 77,  126 => 71,  80 => 28,  73 => 24,  52 => 6,  46 => 5,  35 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block scroll_nav %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {{ parent() }}*/
/* */
/* <header>*/
/*     <div class="row margin">*/
/*       <div class="col-md-1 "></div>*/
/* */
/*       <div class="col-md-10">*/
/*         */
/*       */
/*       <nav class="navbar navbar-default"> */
/*   <div class="container-fluid"> */
/*     <div class="navbar-header"> */
/*       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-5" aria-expanded="false"> */
/*         <span class="sr-only">Toggle navigation</span> */
/*         <span class="icon-bar"></span> */
/*         <span class="icon-bar"></span> */
/*         <span class="icon-bar"></span> */
/*       </button> */
/*       <a><img class="dimen" src="{{ asset('public/img/nombre.png') }}"></a> */
/*     </div> */
/*     <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-5" aria-expanded="false" style="height: 1px;"> */
/*        <ul class="nav navbar-nav">*/
/*               <li ><a class="links" href="{{ path('pc_fundation_index')}}" >Inicio <span class="sr-only"></span></a></li>*/
/*               <li><a class="links" href="##" >Eventos</a></li>*/
/*               <li><a class="links" href="##" >Donaciones</a></li>*/
/*               <li><a class="links" href="##" >Adoptar</a></li>*/
/*            </ul>*/
/*     </div> </div> </nav>*/
/*       </div>*/
/*       <div class="mn colx-md-1"></div>*/
/*     </div>*/
/*   </header>*/
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
/*         <div class="h1estle ">*/
/*           <!-- Large modal -->*/
/*           <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Requisitos de adopción</button>*/
/* */
/*           <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">*/
/*             <div class="modal-dialog modal-lg">*/
/*               <div class="modal-content">*/
/*                 ...*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
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
/*           <img class="img-circle" src="{{ asset('public/img/CAS.png') }}" alt="Generic placeholder image" width="140" height="140">*/
/*           <h4>Visita domiciliaria</h4>*/
/*           <p>Después de analizar las respuestas del cuestionario, se procederá a programar una visita domiciliaria donde se analizará el ambiente y el espacio en el que vivirá la mascota.</p>*/
/*          </div>*/
/*         <div class="col-lg-4">*/
/*           <img class="img-circle" src="{{ asset('public/img/REL.png') }}" alt="Generic placeholder image" width="140" height="140">*/
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
/* */
/*         <!-- Tab panes -->*/
/*         <div class="tab-content">*/
/*         <div role="tabpanel" class="conmargin tab-pane fade in active" id="home">*/
/*           <div class="col-md-6">*/
/*             <div class="col-md-6"><img class="img-thumbnail" src="{{ asset('public/img/p1.jpg') }}" alt=""></div>*/
/*             <div class="col-md-6">*/
/*               <table class="bordtab table">*/
/*                 <tr class="estiletab">*/
/*                   <td><label><b>Nombre:</b></label></td>*/
/*                   <td> ............... </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                   <td><label><b>Sexo:</b></label></td>*/
/*                   <td> ..............</td>*/
/*                 </tr>*/
/* */
/*                 <tr>*/
/*                   <td><label><b>Edad:</b></label></td>*/
/*                   <td> ..............</td>*/
/*                 </tr>*/
/*                 */
/*               </table>*/
/*             </div>           */
/*           </div> */
/*           */
/*           <div class="col-md-6">*/
/*             <div class="col-md-6"><img class="img-thumbnail" src="{{ asset('public/img/p1.jpg') }}" alt=""></div>*/
/*             <div class="col-md-6">*/
/*               <table class="bordtab table">*/
/*                 <tr class="estiletab">*/
/*                   <td><label><b>Nombre:</b></label></td>*/
/*                   <td> ............... </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                   <td><label><b>Sexo:</b></label></td>*/
/*                   <td> ..............</td>*/
/*                 </tr>*/
/* */
/*                 <tr>*/
/*                   <td><label><b>Edad:</b></label></td>*/
/*                   <td> ..............</td>*/
/*                 </tr>*/
/*                 */
/*               </table>*/
/*             </div>           */
/*           </div>*/
/* */
/*                */
/* */
/*         </div>*/
/* */
/* */
/*         <div role="tabpanel" class="conmargin tab-pane fade" id="profile">.2sdsds..</div>*/
/*        */
/*       </div>*/
/* */
/*     */
/*   </div>*/
/*   */
/* </div>*/
/* <div class="col-md-1"> </div>*/
/* */
/* </section>*/
/* */
/* {% endblock %}*/
/* */
