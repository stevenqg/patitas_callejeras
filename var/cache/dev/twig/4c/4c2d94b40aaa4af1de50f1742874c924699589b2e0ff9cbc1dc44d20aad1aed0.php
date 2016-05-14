<?php

/* PCFundationBundle:Admin:admin.html.twig */
class __TwigTemplate_e3e698ab05c50a468c013f87ec40177bbce56fbf9508ce7d411d61821c4ae111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'navsup' => array($this, 'block_navsup'),
            'navlat' => array($this, 'block_navlat'),
            'capa' => array($this, 'block_capa'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea5a4fde4e131f2e649b9ad04f307e286b22e17fed6bc4935dc8d963c383320c = $this->env->getExtension("native_profiler");
        $__internal_ea5a4fde4e131f2e649b9ad04f307e286b22e17fed6bc4935dc8d963c383320c->enter($__internal_ea5a4fde4e131f2e649b9ad04f307e286b22e17fed6bc4935dc8d963c383320c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
  <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo " </head>


";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 217
        echo "      ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 223
        echo "</body>
</html>";
        
        $__internal_ea5a4fde4e131f2e649b9ad04f307e286b22e17fed6bc4935dc8d963c383320c->leave($__internal_ea5a4fde4e131f2e649b9ad04f307e286b22e17fed6bc4935dc8d963c383320c_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa94cd07cc81334e352f42e51e1a1e9be8b91d4e4a41acf6df44ccbf6c50fcb9 = $this->env->getExtension("native_profiler");
        $__internal_aa94cd07cc81334e352f42e51e1a1e9be8b91d4e4a41acf6df44ccbf6c50fcb9->enter($__internal_aa94cd07cc81334e352f42e51e1a1e9be8b91d4e4a41acf6df44ccbf6c50fcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "administrador";
        
        $__internal_aa94cd07cc81334e352f42e51e1a1e9be8b91d4e4a41acf6df44ccbf6c50fcb9->leave($__internal_aa94cd07cc81334e352f42e51e1a1e9be8b91d4e4a41acf6df44ccbf6c50fcb9_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_520e51635773c3f6d05675787f6cb811801a5aeb376221b29f108fb70a957909 = $this->env->getExtension("native_profiler");
        $__internal_520e51635773c3f6d05675787f6cb811801a5aeb376221b29f108fb70a957909->enter($__internal_520e51635773c3f6d05675787f6cb811801a5aeb376221b29f108fb70a957909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "  <link rel=\"stylesheet\"  type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel = \"stylesheet\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/estile.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_520e51635773c3f6d05675787f6cb811801a5aeb376221b29f108fb70a957909->leave($__internal_520e51635773c3f6d05675787f6cb811801a5aeb376221b29f108fb70a957909_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9ed326ed9cf430ac336109fb0f041974ecaefb41d91a05d6dde067ab713b545 = $this->env->getExtension("native_profiler");
        $__internal_c9ed326ed9cf430ac336109fb0f041974ecaefb41d91a05d6dde067ab713b545->enter($__internal_c9ed326ed9cf430ac336109fb0f041974ecaefb41d91a05d6dde067ab713b545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<body>
";
        // line 18
        $this->displayBlock('navsup', $context, $blocks);
        // line 57
        echo "  
    <div class=\"liner posliner\"></div>
    <!-- este es el navegador vertical -->
    <div class=\"container-fluid\">
      <div class=\"row\">
        
        ";
        // line 63
        $this->displayBlock('navlat', $context, $blocks);
        // line 194
        echo "        <!-- sección de trabajo -->
        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\" id=\"capa\">
          ";
        // line 196
        $this->displayBlock('capa', $context, $blocks);
        // line 213
        echo "         </div> <!--div sección de trabajo-->
        </div> <!--div row del body-->
      </div> <!--div container-fluyd  del body-->
";
        
        $__internal_c9ed326ed9cf430ac336109fb0f041974ecaefb41d91a05d6dde067ab713b545->leave($__internal_c9ed326ed9cf430ac336109fb0f041974ecaefb41d91a05d6dde067ab713b545_prof);

    }

    // line 18
    public function block_navsup($context, array $blocks = array())
    {
        $__internal_8a56aa4f103c379469972af0a2822cc44ece40d2db5528074fbd4774d4a72239 = $this->env->getExtension("native_profiler");
        $__internal_8a56aa4f103c379469972af0a2822cc44ece40d2db5528074fbd4774d4a72239->enter($__internal_8a56aa4f103c379469972af0a2822cc44ece40d2db5528074fbd4774d4a72239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navsup"));

        echo " 
<header>
<nav class=\"colnav navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
           <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("pc_administrator_index");
        echo "\"><img class=\"img-responsive dimen\"src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/nombre.png"), "html", null, true);
        echo "\"></a> 
          
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <ul class=\"bagnone nav navbar-nav navbar-right\">
            <li><a id=\"nombreUsuario\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "name"), "method"), "html", null, true);
        echo "</a></li>
            <li class=\"link3 btn-group dropdown\">
                <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span><span class=\"caret\"></span></a>
                  <ul class=\"drop dropdown-menu\" role=\"menu\">
                  <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("pc_administrator_add");
        echo "\" id=\"ventemerg\" ><p class=\"ctext\">Nuevo administrador</p></a></li>
                  <li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_administrator_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "id"), "method"))), "html", null, true);
        echo "\" id=\"ventemerg1\"><p class=\"ctext\">Editar Información</p></a></li>
                </ul>
          </li>
            <li class=\"link3\"><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("pc_administrator_logout");
        echo "\">Salir <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span></a></li>
          </ul>
          <form class=\"navbar-form navbar-right\">
             <div class=\"input-group\">
      <input type=\"text\" class=\"form-control\" placeholder=\"Buscar...\">
      <span class=\"input-group-btn\">
        <button class=\"btn btn-default\" type=\"button\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span></button>
      </span>
    </div>
          </form>
        </div>
      </div>
    </nav>
  </header>
  ";
        
        $__internal_8a56aa4f103c379469972af0a2822cc44ece40d2db5528074fbd4774d4a72239->leave($__internal_8a56aa4f103c379469972af0a2822cc44ece40d2db5528074fbd4774d4a72239_prof);

    }

    // line 63
    public function block_navlat($context, array $blocks = array())
    {
        $__internal_530b50e19a2179ef7b8910f65cfb22b9eebcde2dda62a5be05fc45a894fbfcf0 = $this->env->getExtension("native_profiler");
        $__internal_530b50e19a2179ef7b8910f65cfb22b9eebcde2dda62a5be05fc45a894fbfcf0->enter($__internal_530b50e19a2179ef7b8910f65cfb22b9eebcde2dda62a5be05fc45a894fbfcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navlat"));

        echo "   
        <div class=\"col-sm-3 col-md-2 sidebar\">
          <ul class=\"nav nav-sidebar\">
            <li class=\"textjusti active\"><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("pc_administrator_control");
        echo "\">Control pos-Op</a></li>
            <hr class=\"margnone\">
            <li>
              <div class=\"butstil margnone spanel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
              <div class=\"margnone boderno panel panel-default\">
                <div class=\"boderno paddinnot panel-heading\" role=\"tab\" id=\"headingOne\">
                  <h4 class=\"textjusti contlat panel-title\">
                    <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
                      <h5 class=\"padp\">&nbsp;Jornadas<span class=\"pull pull-right caret\"></span></h5>
                    </a>
                  </h4>
                </div>
                <div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                  <div class=\"padinone panel-body\">
                     <div class=\"contlat\">
                        <a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("pc_admin_jornada_esterilizacion");
        echo "\"><p class=\"padp\">Jornada de esterilización</p></a>
                      </div> 
                      <hr class=\"margnone\">
                       <div class=\"contlat\">
                        <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("pc_admin_jornada_censo");
        echo "\" name=\"llamarcenso\" id=\"boton\"><p class=\"padp\">Jornada de censo</p></a>
                      </div> 
                    </div>
                  </div>
                </div>      
               </div>

            </li>
            <hr class=\"margnone\">
            <li class=\"textjusti\"><a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("pc_admin_pet_solicitudes");
        echo "\">solicitudes adopción<span class=\"pull-right contarnum badge\">02</span></a></li>
            <hr class=\"margnone\">
            <li>
              <div class=\"butstil margnone spanel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
              <div class=\"margnone boderno panel panel-default\">
                <div class=\"boderno paddinnot panel-heading\" role=\"tab\" id=\"headingOne\">
                  <h4 class=\"textjusti contlat panel-title\">
                    <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
                     <h5 class=\"padp\">&nbsp;Catalogo de Adopción<span class=\"pull pull-right caret\"></span></h5>
                    </a>
                  </h4>
                </div>
                <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                  <div class=\"padinone panel-body\">
                     <div class=\"contlat\">
                        <a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("pc_administrator_pet_add");
        echo "\"><p class=\"padp\">agregar mascota</p></a>
                      </div> 
                      <hr class=\"margnone\">
                       <div class=\"contlat\">
                        <a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("pc_admin_adoptada_pet");
        echo "\"><p class=\"padp\">mascotas Adoptadas</p></a>
                      </div>
                      <hr class=\"margnone\">
                       <div class=\"contlat\">
                        <a href=\"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("pc_admin_adopt_pet");
        echo "\"><p class=\"padp\">mascotas en adopción</p></a>
                      </div>
                    </div>
                </div>      
               </div>
             </div>
            </li>
            </ul>
          <ul class=\"nav nav-sidebar\">
            <hr class=\"margnone\">
            <li>
              
            <li>
                 <div class=\"butstil margnone spanel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
              <div class=\"margnone boderno panel panel-default\">
                <div class=\"boderno paddinnot panel-heading\" role=\"tab\" id=\"headingOne\">
                  <h4 class=\"textjusti contlat panel-title\">
                    <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTree\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
                     <h5 class=\"padp\">&nbsp;Donaciones<span class=\"pull pull-right caret\"></span></h5>
                    </a>
                  </h4>
                </div>
                <div id=\"collapseTree\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                  <div class=\"padinone panel-body\">
                     <div class=\"contlat\">
                        <a href=\"#\"><p class=\"padp\">Destino de Donaciones</p></a>
                      </div> 
                      <hr class=\"margnone\">
                       <div class=\"contlat\">
                        <a href=\"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("pc_admin_donativ_recepcion");
        echo "\"><p class=\"padp\">Sitio de recepción</p></a>
                      </div>
                      <hr class=\"margnone\">
                       <div class=\"contlat\">
                        <a href=\"";
        // line 150
        echo $this->env->getExtension('routing')->getPath("pc_admin_donativ");
        echo "\"><p class=\"padp\">registro de donativo</p></a>
                      </div>

                    </div>
                </div>      
               </div>
             </div>
             <hr class=\"margnone\">
            </li>
            <li class=\"textjusti\"><a href=\"";
        // line 159
        echo $this->env->getExtension('routing')->getPath("pc_administrator_eventos");
        echo "\">Eventos</a></li>
            <hr class=\"margnone\">
                     <li>
              <div class=\"butstil margnone spanel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
              <div class=\"margnone boderno panel panel-default\">
                <div class=\"boderno paddinnot panel-heading\" role=\"tab\" id=\"headingOne\">
                  <h4 class=\"textjusti contlat panel-title\">
                    <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#creditos\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
                     <h5 class=\"padp\">&nbsp;Creditos de emergencia<span class=\"pull pull-right caret\"></span></h5>
                    </a>
                  </h4>
                </div>
                <div id=\"creditos\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                  <div class=\"padinone panel-body\">
                     <div class=\"contlat\">
                        <a href=\"";
        // line 174
        echo $this->env->getExtension('routing')->getPath("pc_administrator_credito_add");
        echo "\"><p class=\"padp\">Registrar credito</p></a>
                      </div> 
                      <hr class=\"margnone\">
                       <div class=\"contlat\">
                        <a href=\"";
        // line 178
        echo $this->env->getExtension('routing')->getPath("pc_administrator_creditos");
        echo "\"><p class=\"padp\">Historial de creditos</p></a>
                      </div>
                      <hr class=\"margnone\">
                       <div class=\"contlat\">
                        <a href=\"";
        // line 182
        echo $this->env->getExtension('routing')->getPath("pc_administrator_credito_fin");
        echo "\"><p class=\"padp\">Creditos cancelados</p></a>
                      </div>
                    </div>
                </div>      
               </div>
             </div>
            </li>
            <hr class=\"margnone\">
          </ul>
        </div>
        
        ";
        
        $__internal_530b50e19a2179ef7b8910f65cfb22b9eebcde2dda62a5be05fc45a894fbfcf0->leave($__internal_530b50e19a2179ef7b8910f65cfb22b9eebcde2dda62a5be05fc45a894fbfcf0_prof);

    }

    // line 196
    public function block_capa($context, array $blocks = array())
    {
        $__internal_387c9cfe57ba5662933fca0e48ce1c04c57341809f14e47e29891529cbaa9b76 = $this->env->getExtension("native_profiler");
        $__internal_387c9cfe57ba5662933fca0e48ce1c04c57341809f14e47e29891529cbaa9b76->enter($__internal_387c9cfe57ba5662933fca0e48ce1c04c57341809f14e47e29891529cbaa9b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 197
        echo "           <div class=\"row\">
             <div class=\"col-md-3\">
               <img class=\"img-responsive margindistan nove\"src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/adm.png"), "html", null, true);
        echo "\">
             </div>
             <div class=\"col-md-6\">
             <div class=\"msj\">
               <h3>Plataforma de Administrador</h3><hr>
               <p>Bienvenido a la plataforma de administración de la <b>fundación Patitas Callejeras</b>.</p>
               <p >";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "name"), "method"), "html", null, true);
        echo "</p>
             </div>
             </div>
             <div class=\"col-md-3\">
               <img class=\"img-responsive exafon nove\"src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/ad1.png"), "html", null, true);
        echo "\">
             </div>
           </div> 
          ";
        
        $__internal_387c9cfe57ba5662933fca0e48ce1c04c57341809f14e47e29891529cbaa9b76->leave($__internal_387c9cfe57ba5662933fca0e48ce1c04c57341809f14e47e29891529cbaa9b76_prof);

    }

    // line 217
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_28ffc950d70a2c2ba821b0e8bea40d71442501dab1a3376337108de069f519bf = $this->env->getExtension("native_profiler");
        $__internal_28ffc950d70a2c2ba821b0e8bea40d71442501dab1a3376337108de069f519bf->enter($__internal_28ffc950d70a2c2ba821b0e8bea40d71442501dab1a3376337108de069f519bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 218
        echo "      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://code.jquery.com/jquery-latest.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
      <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
      <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/functJquery.js"), "html", null, true);
        echo "\" ></script>
      ";
        
        $__internal_28ffc950d70a2c2ba821b0e8bea40d71442501dab1a3376337108de069f519bf->leave($__internal_28ffc950d70a2c2ba821b0e8bea40d71442501dab1a3376337108de069f519bf_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:admin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  433 => 221,  429 => 220,  425 => 219,  422 => 218,  416 => 217,  405 => 209,  398 => 205,  389 => 199,  385 => 197,  379 => 196,  360 => 182,  353 => 178,  346 => 174,  328 => 159,  316 => 150,  309 => 146,  277 => 117,  270 => 113,  263 => 109,  245 => 94,  233 => 85,  226 => 81,  208 => 66,  198 => 63,  176 => 42,  170 => 39,  166 => 38,  159 => 34,  149 => 29,  131 => 18,  121 => 213,  119 => 196,  115 => 194,  113 => 63,  105 => 57,  103 => 18,  100 => 17,  94 => 16,  85 => 11,  80 => 10,  74 => 9,  62 => 8,  54 => 223,  51 => 217,  49 => 16,  44 => 13,  42 => 9,  38 => 8,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   */
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*   <title>{%block title %}administrador{% endblock %}</title>*/
/*   {% block stylesheets %}*/
/*   <link rel="stylesheet"  type="text/css" href="{{ asset('public/css/bootstrap.min.css') }}" rel = "stylesheet">*/
/*   <link rel="stylesheet" type="text/css" href="{{ asset('public/css/estile.css') }}">*/
/*   {% endblock %}*/
/*  </head>*/
/* */
/* */
/* {% block body %}*/
/* <body>*/
/* {% block navsup %} */
/* <header>*/
/* <nav class="colnav navbar navbar-inverse navbar-fixed-top">*/
/*       <div class="container-fluid">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*            <a href="{{path('pc_administrator_index')}}"><img class="img-responsive dimen"src="{{ asset('public/img/nombre.png') }}"></a> */
/*           */
/*         </div>*/
/*         <div id="navbar" class="navbar-collapse collapse">*/
/*           <ul class="bagnone nav navbar-nav navbar-right">*/
/*             <li><a id="nombreUsuario">{{ app.session.get('name') }}</a></li>*/
/*             <li class="link3 btn-group dropdown">*/
/*                 <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="caret"></span></a>*/
/*                   <ul class="drop dropdown-menu" role="menu">*/
/*                   <li><a href="{{ path('pc_administrator_add') }}" id="ventemerg" ><p class="ctext">Nuevo administrador</p></a></li>*/
/*                   <li><a href="{{ path('pc_administrator_edit', {'id' : app.session.get('id')}) }}" id="ventemerg1"><p class="ctext">Editar Información</p></a></li>*/
/*                 </ul>*/
/*           </li>*/
/*             <li class="link3"><a href="{{ path('pc_administrator_logout')}}">Salir <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></li>*/
/*           </ul>*/
/*           <form class="navbar-form navbar-right">*/
/*              <div class="input-group">*/
/*       <input type="text" class="form-control" placeholder="Buscar...">*/
/*       <span class="input-group-btn">*/
/*         <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>*/
/*       </span>*/
/*     </div>*/
/*           </form>*/
/*         </div>*/
/*       </div>*/
/*     </nav>*/
/*   </header>*/
/*   {% endblock %}*/
/*   */
/*     <div class="liner posliner"></div>*/
/*     <!-- este es el navegador vertical -->*/
/*     <div class="container-fluid">*/
/*       <div class="row">*/
/*         */
/*         {% block navlat %}   */
/*         <div class="col-sm-3 col-md-2 sidebar">*/
/*           <ul class="nav nav-sidebar">*/
/*             <li class="textjusti active"><a href="{{path('pc_administrator_control')}}">Control pos-Op</a></li>*/
/*             <hr class="margnone">*/
/*             <li>*/
/*               <div class="butstil margnone spanel-group" id="accordion" role="tablist" aria-multiselectable="true">*/
/*               <div class="margnone boderno panel panel-default">*/
/*                 <div class="boderno paddinnot panel-heading" role="tab" id="headingOne">*/
/*                   <h4 class="textjusti contlat panel-title">*/
/*                     <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">*/
/*                       <h5 class="padp">&nbsp;Jornadas<span class="pull pull-right caret"></span></h5>*/
/*                     </a>*/
/*                   </h4>*/
/*                 </div>*/
/*                 <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">*/
/*                   <div class="padinone panel-body">*/
/*                      <div class="contlat">*/
/*                         <a href="{{ path('pc_admin_jornada_esterilizacion')}}"><p class="padp">Jornada de esterilización</p></a>*/
/*                       </div> */
/*                       <hr class="margnone">*/
/*                        <div class="contlat">*/
/*                         <a href="{{ path('pc_admin_jornada_censo')}}" name="llamarcenso" id="boton"><p class="padp">Jornada de censo</p></a>*/
/*                       </div> */
/*                     </div>*/
/*                   </div>*/
/*                 </div>      */
/*                </div>*/
/* */
/*             </li>*/
/*             <hr class="margnone">*/
/*             <li class="textjusti"><a href="{{path('pc_admin_pet_solicitudes')}}">solicitudes adopción<span class="pull-right contarnum badge">02</span></a></li>*/
/*             <hr class="margnone">*/
/*             <li>*/
/*               <div class="butstil margnone spanel-group" id="accordion" role="tablist" aria-multiselectable="true">*/
/*               <div class="margnone boderno panel panel-default">*/
/*                 <div class="boderno paddinnot panel-heading" role="tab" id="headingOne">*/
/*                   <h4 class="textjusti contlat panel-title">*/
/*                     <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">*/
/*                      <h5 class="padp">&nbsp;Catalogo de Adopción<span class="pull pull-right caret"></span></h5>*/
/*                     </a>*/
/*                   </h4>*/
/*                 </div>*/
/*                 <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">*/
/*                   <div class="padinone panel-body">*/
/*                      <div class="contlat">*/
/*                         <a href="{{ path('pc_administrator_pet_add') }}"><p class="padp">agregar mascota</p></a>*/
/*                       </div> */
/*                       <hr class="margnone">*/
/*                        <div class="contlat">*/
/*                         <a href="{{path('pc_admin_adoptada_pet')}}"><p class="padp">mascotas Adoptadas</p></a>*/
/*                       </div>*/
/*                       <hr class="margnone">*/
/*                        <div class="contlat">*/
/*                         <a href="{{ path('pc_admin_adopt_pet')}}"><p class="padp">mascotas en adopción</p></a>*/
/*                       </div>*/
/*                     </div>*/
/*                 </div>      */
/*                </div>*/
/*              </div>*/
/*             </li>*/
/*             </ul>*/
/*           <ul class="nav nav-sidebar">*/
/*             <hr class="margnone">*/
/*             <li>*/
/*               */
/*             <li>*/
/*                  <div class="butstil margnone spanel-group" id="accordion" role="tablist" aria-multiselectable="true">*/
/*               <div class="margnone boderno panel panel-default">*/
/*                 <div class="boderno paddinnot panel-heading" role="tab" id="headingOne">*/
/*                   <h4 class="textjusti contlat panel-title">*/
/*                     <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTree" aria-expanded="false" aria-controls="collapseOne">*/
/*                      <h5 class="padp">&nbsp;Donaciones<span class="pull pull-right caret"></span></h5>*/
/*                     </a>*/
/*                   </h4>*/
/*                 </div>*/
/*                 <div id="collapseTree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">*/
/*                   <div class="padinone panel-body">*/
/*                      <div class="contlat">*/
/*                         <a href="#"><p class="padp">Destino de Donaciones</p></a>*/
/*                       </div> */
/*                       <hr class="margnone">*/
/*                        <div class="contlat">*/
/*                         <a href="{{path('pc_admin_donativ_recepcion')}}"><p class="padp">Sitio de recepción</p></a>*/
/*                       </div>*/
/*                       <hr class="margnone">*/
/*                        <div class="contlat">*/
/*                         <a href="{{path('pc_admin_donativ')}}"><p class="padp">registro de donativo</p></a>*/
/*                       </div>*/
/* */
/*                     </div>*/
/*                 </div>      */
/*                </div>*/
/*              </div>*/
/*              <hr class="margnone">*/
/*             </li>*/
/*             <li class="textjusti"><a href="{{path('pc_administrator_eventos')}}">Eventos</a></li>*/
/*             <hr class="margnone">*/
/*                      <li>*/
/*               <div class="butstil margnone spanel-group" id="accordion" role="tablist" aria-multiselectable="true">*/
/*               <div class="margnone boderno panel panel-default">*/
/*                 <div class="boderno paddinnot panel-heading" role="tab" id="headingOne">*/
/*                   <h4 class="textjusti contlat panel-title">*/
/*                     <a role="button" data-toggle="collapse" data-parent="#accordion" href="#creditos" aria-expanded="false" aria-controls="collapseOne">*/
/*                      <h5 class="padp">&nbsp;Creditos de emergencia<span class="pull pull-right caret"></span></h5>*/
/*                     </a>*/
/*                   </h4>*/
/*                 </div>*/
/*                 <div id="creditos" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">*/
/*                   <div class="padinone panel-body">*/
/*                      <div class="contlat">*/
/*                         <a href="{{ path('pc_administrator_credito_add') }}"><p class="padp">Registrar credito</p></a>*/
/*                       </div> */
/*                       <hr class="margnone">*/
/*                        <div class="contlat">*/
/*                         <a href="{{path('pc_administrator_creditos')}}"><p class="padp">Historial de creditos</p></a>*/
/*                       </div>*/
/*                       <hr class="margnone">*/
/*                        <div class="contlat">*/
/*                         <a href="{{ path('pc_administrator_credito_fin')}}"><p class="padp">Creditos cancelados</p></a>*/
/*                       </div>*/
/*                     </div>*/
/*                 </div>      */
/*                </div>*/
/*              </div>*/
/*             </li>*/
/*             <hr class="margnone">*/
/*           </ul>*/
/*         </div>*/
/*         */
/*         {% endblock %}*/
/*         <!-- sección de trabajo -->*/
/*         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="capa">*/
/*           {% block capa%}*/
/*            <div class="row">*/
/*              <div class="col-md-3">*/
/*                <img class="img-responsive margindistan nove"src="{{ asset('public/img/adm.png') }}">*/
/*              </div>*/
/*              <div class="col-md-6">*/
/*              <div class="msj">*/
/*                <h3>Plataforma de Administrador</h3><hr>*/
/*                <p>Bienvenido a la plataforma de administración de la <b>fundación Patitas Callejeras</b>.</p>*/
/*                <p >{{ app.session.get('name') }}</p>*/
/*              </div>*/
/*              </div>*/
/*              <div class="col-md-3">*/
/*                <img class="img-responsive exafon nove"src="{{ asset('public/img/ad1.png') }}">*/
/*              </div>*/
/*            </div> */
/*           {% endblock %}*/
/*          </div> <!--div sección de trabajo-->*/
/*         </div> <!--div row del body-->*/
/*       </div> <!--div container-fluyd  del body-->*/
/* {% endblock %}*/
/*       {% block javascript %}*/
/*       <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/*       <script src="{{ asset('https://code.jquery.com/jquery-latest.js') }}" type="text/javascript"></script>*/
/*       <script src="{{ asset('public/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*       <script src="{{ asset('public/js/functJquery.js') }}" ></script>*/
/*       {% endblock %}*/
/* </body>*/
/* </html>*/
