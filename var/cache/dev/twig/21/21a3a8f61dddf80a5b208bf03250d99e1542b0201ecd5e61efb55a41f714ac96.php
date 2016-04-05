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
        $__internal_09171c4294d0b3972c4ae2b52c1836a6b489b78d277d68e36d4526a248c52305 = $this->env->getExtension("native_profiler");
        $__internal_09171c4294d0b3972c4ae2b52c1836a6b489b78d277d68e36d4526a248c52305->enter($__internal_09171c4294d0b3972c4ae2b52c1836a6b489b78d277d68e36d4526a248c52305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:adopcion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09171c4294d0b3972c4ae2b52c1836a6b489b78d277d68e36d4526a248c52305->leave($__internal_09171c4294d0b3972c4ae2b52c1836a6b489b78d277d68e36d4526a248c52305_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_10b0629fc1d520f76f54d9e7d46cf16bed48e6e3022bc9db879cd57ddedb21a4 = $this->env->getExtension("native_profiler");
        $__internal_10b0629fc1d520f76f54d9e7d46cf16bed48e6e3022bc9db879cd57ddedb21a4->enter($__internal_10b0629fc1d520f76f54d9e7d46cf16bed48e6e3022bc9db879cd57ddedb21a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_10b0629fc1d520f76f54d9e7d46cf16bed48e6e3022bc9db879cd57ddedb21a4->leave($__internal_10b0629fc1d520f76f54d9e7d46cf16bed48e6e3022bc9db879cd57ddedb21a4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e47ed80f9ebd89bda37595cacb4abd306675d5c882f87084027ba9d2c2525c7 = $this->env->getExtension("native_profiler");
        $__internal_8e47ed80f9ebd89bda37595cacb4abd306675d5c882f87084027ba9d2c2525c7->enter($__internal_8e47ed80f9ebd89bda37595cacb4abd306675d5c882f87084027ba9d2c2525c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/ENC.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
          <h4> encuesta de adopción</h4>
          <p>En el cuestionario trataremos los temas más importantes sobre la adopción y tendremos una visión general de la persona o familia que quiere adoptar el anima.</p>
          
       </div>
        <div class=\"col-lg-4\">
          <img class=\"img-circle\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/CAS.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
          <h4>Visita domiciliaria</h4>
          <p>Después de analizar las respuestas del cuestionario, se procederá a programar una visita domiciliaria donde se analizará el ambiente y el espacio en el que vivirá la mascota.</p>
         </div>
        <div class=\"col-lg-4\">
          <img class=\"img-circle\" src=\"";
        // line 51
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
        // line 74
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
        // line 96
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
        
        $__internal_8e47ed80f9ebd89bda37595cacb4abd306675d5c882f87084027ba9d2c2525c7->leave($__internal_8e47ed80f9ebd89bda37595cacb4abd306675d5c882f87084027ba9d2c2525c7_prof);

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
        return array (  157 => 96,  132 => 74,  106 => 51,  98 => 46,  89 => 40,  52 => 6,  46 => 5,  35 => 2,  11 => 1,);
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
