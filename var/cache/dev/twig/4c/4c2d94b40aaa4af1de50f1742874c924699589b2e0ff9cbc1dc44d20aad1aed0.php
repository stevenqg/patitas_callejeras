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
        $__internal_e995117cf8c53e932f391e409318fa2081d1a4d44d6e3995bd29ae726608223b = $this->env->getExtension("native_profiler");
        $__internal_e995117cf8c53e932f391e409318fa2081d1a4d44d6e3995bd29ae726608223b->enter($__internal_e995117cf8c53e932f391e409318fa2081d1a4d44d6e3995bd29ae726608223b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:admin.html.twig"));

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
        
        $__internal_e995117cf8c53e932f391e409318fa2081d1a4d44d6e3995bd29ae726608223b->leave($__internal_e995117cf8c53e932f391e409318fa2081d1a4d44d6e3995bd29ae726608223b_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb9033761417a5b7e884a78e00c453c9e583eb493bcb1402fa746e202fcf072e = $this->env->getExtension("native_profiler");
        $__internal_eb9033761417a5b7e884a78e00c453c9e583eb493bcb1402fa746e202fcf072e->enter($__internal_eb9033761417a5b7e884a78e00c453c9e583eb493bcb1402fa746e202fcf072e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "administrador";
        
        $__internal_eb9033761417a5b7e884a78e00c453c9e583eb493bcb1402fa746e202fcf072e->leave($__internal_eb9033761417a5b7e884a78e00c453c9e583eb493bcb1402fa746e202fcf072e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6cb47fe5d5598452b24ed0f02197cb9e44cf7837f875b12c54b81ce58abeceeb = $this->env->getExtension("native_profiler");
        $__internal_6cb47fe5d5598452b24ed0f02197cb9e44cf7837f875b12c54b81ce58abeceeb->enter($__internal_6cb47fe5d5598452b24ed0f02197cb9e44cf7837f875b12c54b81ce58abeceeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "  <link rel=\"stylesheet\"  type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel = \"stylesheet\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/estile.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_6cb47fe5d5598452b24ed0f02197cb9e44cf7837f875b12c54b81ce58abeceeb->leave($__internal_6cb47fe5d5598452b24ed0f02197cb9e44cf7837f875b12c54b81ce58abeceeb_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_328ab9bf72624855603c223618a9040c9ac9390943d06b119ae67660d14d83c8 = $this->env->getExtension("native_profiler");
        $__internal_328ab9bf72624855603c223618a9040c9ac9390943d06b119ae67660d14d83c8->enter($__internal_328ab9bf72624855603c223618a9040c9ac9390943d06b119ae67660d14d83c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_328ab9bf72624855603c223618a9040c9ac9390943d06b119ae67660d14d83c8->leave($__internal_328ab9bf72624855603c223618a9040c9ac9390943d06b119ae67660d14d83c8_prof);

    }

    // line 18
    public function block_navsup($context, array $blocks = array())
    {
        $__internal_8da10c4c8dcb555ed4036188e7217e51c7013caf2e3f3c788dc98cca7e7baa48 = $this->env->getExtension("native_profiler");
        $__internal_8da10c4c8dcb555ed4036188e7217e51c7013caf2e3f3c788dc98cca7e7baa48->enter($__internal_8da10c4c8dcb555ed4036188e7217e51c7013caf2e3f3c788dc98cca7e7baa48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navsup"));

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
        echo "\" onclick=\"window.open(this.href, this.target,'width=650,height=600'); return false\"><p class=\"ctext\">Nuevo administrador</p></a></li>
                  <li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_administrator_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "id"), "method"))), "html", null, true);
        echo "\" onclick=\"window.open(this.href, this.target,'width=650,height=600'); return false\"><p class=\"ctext\">Editar Información</p></a></li>
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
        
        $__internal_8da10c4c8dcb555ed4036188e7217e51c7013caf2e3f3c788dc98cca7e7baa48->leave($__internal_8da10c4c8dcb555ed4036188e7217e51c7013caf2e3f3c788dc98cca7e7baa48_prof);

    }

    // line 63
    public function block_navlat($context, array $blocks = array())
    {
        $__internal_57d779730a2e27b0c31a9554073e1e5ea35aa7dc2ed7391b35ad2b02146b07f7 = $this->env->getExtension("native_profiler");
        $__internal_57d779730a2e27b0c31a9554073e1e5ea35aa7dc2ed7391b35ad2b02146b07f7->enter($__internal_57d779730a2e27b0c31a9554073e1e5ea35aa7dc2ed7391b35ad2b02146b07f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navlat"));

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
        echo "\">Solicitudes adopción<span class=\"pull-right contarnum badge\">02</span></a></li>
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
                        <a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("pc_admin_donativ_destinate");
        echo "\"><p class=\"padp\">Destino de Donaciones</p></a>
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
        
        $__internal_57d779730a2e27b0c31a9554073e1e5ea35aa7dc2ed7391b35ad2b02146b07f7->leave($__internal_57d779730a2e27b0c31a9554073e1e5ea35aa7dc2ed7391b35ad2b02146b07f7_prof);

    }

    // line 196
    public function block_capa($context, array $blocks = array())
    {
        $__internal_d72eea9d8e2c4d042d3f41fd49b47196f05f18db92f0de8c24b81ef5a806c283 = $this->env->getExtension("native_profiler");
        $__internal_d72eea9d8e2c4d042d3f41fd49b47196f05f18db92f0de8c24b81ef5a806c283->enter($__internal_d72eea9d8e2c4d042d3f41fd49b47196f05f18db92f0de8c24b81ef5a806c283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

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
        
        $__internal_d72eea9d8e2c4d042d3f41fd49b47196f05f18db92f0de8c24b81ef5a806c283->leave($__internal_d72eea9d8e2c4d042d3f41fd49b47196f05f18db92f0de8c24b81ef5a806c283_prof);

    }

    // line 217
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_a19394551f325a12255796485876c88fec84413d8bea51e479c897155cbce903 = $this->env->getExtension("native_profiler");
        $__internal_a19394551f325a12255796485876c88fec84413d8bea51e479c897155cbce903->enter($__internal_a19394551f325a12255796485876c88fec84413d8bea51e479c897155cbce903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_a19394551f325a12255796485876c88fec84413d8bea51e479c897155cbce903->leave($__internal_a19394551f325a12255796485876c88fec84413d8bea51e479c897155cbce903_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:admin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  436 => 221,  432 => 220,  428 => 219,  425 => 218,  419 => 217,  408 => 209,  401 => 205,  392 => 199,  388 => 197,  382 => 196,  363 => 182,  356 => 178,  349 => 174,  331 => 159,  319 => 150,  312 => 146,  305 => 142,  277 => 117,  270 => 113,  263 => 109,  245 => 94,  233 => 85,  226 => 81,  208 => 66,  198 => 63,  176 => 42,  170 => 39,  166 => 38,  159 => 34,  149 => 29,  131 => 18,  121 => 213,  119 => 196,  115 => 194,  113 => 63,  105 => 57,  103 => 18,  100 => 17,  94 => 16,  85 => 11,  80 => 10,  74 => 9,  62 => 8,  54 => 223,  51 => 217,  49 => 16,  44 => 13,  42 => 9,  38 => 8,  29 => 1,);
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
/*                   <li><a href="{{ path('pc_administrator_add') }}" onclick="window.open(this.href, this.target,'width=650,height=600'); return false"><p class="ctext">Nuevo administrador</p></a></li>*/
/*                   <li><a href="{{ path('pc_administrator_edit', {'id' : app.session.get('id')}) }}" onclick="window.open(this.href, this.target,'width=650,height=600'); return false"><p class="ctext">Editar Información</p></a></li>*/
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
/*             <li class="textjusti"><a href="{{path('pc_admin_pet_solicitudes')}}">Solicitudes adopción<span class="pull-right contarnum badge">02</span></a></li>*/
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
/*                         <a href="{{path('pc_admin_donativ_destinate')}}"><p class="padp">Destino de Donaciones</p></a>*/
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
