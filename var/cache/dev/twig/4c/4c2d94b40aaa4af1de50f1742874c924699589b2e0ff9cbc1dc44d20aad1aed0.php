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
        $__internal_9431d2d146dc7cfa4d28fef3424a27a18aaffab8e1a6a0475da08ecb6e478a1f = $this->env->getExtension("native_profiler");
        $__internal_9431d2d146dc7cfa4d28fef3424a27a18aaffab8e1a6a0475da08ecb6e478a1f->enter($__internal_9431d2d146dc7cfa4d28fef3424a27a18aaffab8e1a6a0475da08ecb6e478a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:admin.html.twig"));

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
        // line 176
        echo "      ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 182
        echo "</body>
</html>";
        
        $__internal_9431d2d146dc7cfa4d28fef3424a27a18aaffab8e1a6a0475da08ecb6e478a1f->leave($__internal_9431d2d146dc7cfa4d28fef3424a27a18aaffab8e1a6a0475da08ecb6e478a1f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_8705b80399a4a43c07c2ff10b31d55f3b1b820b6d0103ddade658b810a9348a5 = $this->env->getExtension("native_profiler");
        $__internal_8705b80399a4a43c07c2ff10b31d55f3b1b820b6d0103ddade658b810a9348a5->enter($__internal_8705b80399a4a43c07c2ff10b31d55f3b1b820b6d0103ddade658b810a9348a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "administrador";
        
        $__internal_8705b80399a4a43c07c2ff10b31d55f3b1b820b6d0103ddade658b810a9348a5->leave($__internal_8705b80399a4a43c07c2ff10b31d55f3b1b820b6d0103ddade658b810a9348a5_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b3f66a566d9178840b4aadeeae46e805223340388c09f6cfb0aee71e0062b1f0 = $this->env->getExtension("native_profiler");
        $__internal_b3f66a566d9178840b4aadeeae46e805223340388c09f6cfb0aee71e0062b1f0->enter($__internal_b3f66a566d9178840b4aadeeae46e805223340388c09f6cfb0aee71e0062b1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "  <link rel=\"stylesheet\"  type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel = \"stylesheet\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/estile.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_b3f66a566d9178840b4aadeeae46e805223340388c09f6cfb0aee71e0062b1f0->leave($__internal_b3f66a566d9178840b4aadeeae46e805223340388c09f6cfb0aee71e0062b1f0_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_53acb31ddab38d92fe1c5778b14ac13e61261bba65c5ba02cf41652a12179d39 = $this->env->getExtension("native_profiler");
        $__internal_53acb31ddab38d92fe1c5778b14ac13e61261bba65c5ba02cf41652a12179d39->enter($__internal_53acb31ddab38d92fe1c5778b14ac13e61261bba65c5ba02cf41652a12179d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 167
        echo "        <!-- sección de trabajo -->
        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\" id=\"capa\">
          ";
        // line 169
        $this->displayBlock('capa', $context, $blocks);
        // line 172
        echo "         </div> <!--div sección de trabajo-->
        </div> <!--div row del body-->
      </div> <!--div container-fluyd  del body-->
";
        
        $__internal_53acb31ddab38d92fe1c5778b14ac13e61261bba65c5ba02cf41652a12179d39->leave($__internal_53acb31ddab38d92fe1c5778b14ac13e61261bba65c5ba02cf41652a12179d39_prof);

    }

    // line 18
    public function block_navsup($context, array $blocks = array())
    {
        $__internal_27a4ea3a0c1042ce6bea7ce318e8f85098be93697cf6043364266e61a42be624 = $this->env->getExtension("native_profiler");
        $__internal_27a4ea3a0c1042ce6bea7ce318e8f85098be93697cf6043364266e61a42be624->enter($__internal_27a4ea3a0c1042ce6bea7ce318e8f85098be93697cf6043364266e61a42be624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navsup"));

        echo " 
<header>
<nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
           <a><img class=\"img-responsive dimen\"src=\"";
        // line 29
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
        echo $this->env->getExtension('routing')->getPath("pc_administrator_edit");
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
        
        $__internal_27a4ea3a0c1042ce6bea7ce318e8f85098be93697cf6043364266e61a42be624->leave($__internal_27a4ea3a0c1042ce6bea7ce318e8f85098be93697cf6043364266e61a42be624_prof);

    }

    // line 63
    public function block_navlat($context, array $blocks = array())
    {
        $__internal_63ae83c03b8b2401b6a03eb8acb8335563e2c69b1bcc61a12584ae72cd5159e7 = $this->env->getExtension("native_profiler");
        $__internal_63ae83c03b8b2401b6a03eb8acb8335563e2c69b1bcc61a12584ae72cd5159e7->enter($__internal_63ae83c03b8b2401b6a03eb8acb8335563e2c69b1bcc61a12584ae72cd5159e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navlat"));

        echo "   
        <div class=\"col-sm-3 col-md-2 sidebar\">
          <ul class=\"nav nav-sidebar\">
            <li class=\"textjusti active\"><a href=\"#\">Control pos-Op &nbsp;<span class=\"pull-right contarnum badge\">42</span><span class=\"sr-only\">(current)</span></a></li>
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
              <li class=\"textjusti\"><a href=\"#\">Visitas de adopcion<span class=\"pull-right contarnum badge\">08</span></a></li>
            <hr class=\"margnone\">
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
                        <a href=\"#\"><p class=\"padp\">Sitio de recepción</p></a>
                      </div>
                      <hr class=\"margnone\">
                       <div class=\"contlat\">
                        <a href=\"#\"><p class=\"padp\">registro de donativo</p></a>
                      </div>

                    </div>
                </div>      
               </div>
             </div>

             <hr class=\"margnone\">
            </li>
            <li class=\"textjusti\"><a href=\"\">credito de Emergencia</a></li>
            <hr class=\"margnone\">
          </ul>
        </div>
        
        ";
        
        $__internal_63ae83c03b8b2401b6a03eb8acb8335563e2c69b1bcc61a12584ae72cd5159e7->leave($__internal_63ae83c03b8b2401b6a03eb8acb8335563e2c69b1bcc61a12584ae72cd5159e7_prof);

    }

    // line 169
    public function block_capa($context, array $blocks = array())
    {
        $__internal_9900da7dfb43aa61235f3adae92467333f3c634ba9b1e9e84be1da46df007aa6 = $this->env->getExtension("native_profiler");
        $__internal_9900da7dfb43aa61235f3adae92467333f3c634ba9b1e9e84be1da46df007aa6->enter($__internal_9900da7dfb43aa61235f3adae92467333f3c634ba9b1e9e84be1da46df007aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 170
        echo "            
          ";
        
        $__internal_9900da7dfb43aa61235f3adae92467333f3c634ba9b1e9e84be1da46df007aa6->leave($__internal_9900da7dfb43aa61235f3adae92467333f3c634ba9b1e9e84be1da46df007aa6_prof);

    }

    // line 176
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_f6d819383e485ec72841b21622f745340e8f6628afceab3d889e508820e33a45 = $this->env->getExtension("native_profiler");
        $__internal_f6d819383e485ec72841b21622f745340e8f6628afceab3d889e508820e33a45->enter($__internal_f6d819383e485ec72841b21622f745340e8f6628afceab3d889e508820e33a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 177
        echo "      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://code.jquery.com/jquery-latest.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
      <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
      <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/functJquery.js"), "html", null, true);
        echo "\" ></script>
      ";
        
        $__internal_f6d819383e485ec72841b21622f745340e8f6628afceab3d889e508820e33a45->leave($__internal_f6d819383e485ec72841b21622f745340e8f6628afceab3d889e508820e33a45_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:admin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  360 => 180,  356 => 179,  352 => 178,  349 => 177,  343 => 176,  335 => 170,  329 => 169,  272 => 117,  265 => 113,  258 => 109,  240 => 94,  228 => 85,  221 => 81,  196 => 63,  174 => 42,  168 => 39,  164 => 38,  157 => 34,  149 => 29,  131 => 18,  121 => 172,  119 => 169,  115 => 167,  113 => 63,  105 => 57,  103 => 18,  100 => 17,  94 => 16,  85 => 11,  80 => 10,  74 => 9,  62 => 8,  54 => 182,  51 => 176,  49 => 16,  44 => 13,  42 => 9,  38 => 8,  29 => 1,);
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
/* <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*       <div class="container-fluid">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*            <a><img class="img-responsive dimen"src="{{ asset('public/img/nombre.png') }}"></a> */
/*           */
/*         </div>*/
/*         <div id="navbar" class="navbar-collapse collapse">*/
/*           <ul class="bagnone nav navbar-nav navbar-right">*/
/*             <li><a id="nombreUsuario">{{ app.session.get('name') }}</a></li>*/
/*             <li class="link3 btn-group dropdown">*/
/*                 <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="caret"></span></a>*/
/*                   <ul class="drop dropdown-menu" role="menu">*/
/*                   <li><a href="{{ path('pc_administrator_add') }}" id="ventemerg" ><p class="ctext">Nuevo administrador</p></a></li>*/
/*                   <li><a href="{{ path('pc_administrator_edit') }}" id="ventemerg1"><p class="ctext">Editar Información</p></a></li>*/
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
/*             <li class="textjusti active"><a href="#">Control pos-Op &nbsp;<span class="pull-right contarnum badge">42</span><span class="sr-only">(current)</span></a></li>*/
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
/*               <li class="textjusti"><a href="#">Visitas de adopcion<span class="pull-right contarnum badge">08</span></a></li>*/
/*             <hr class="margnone">*/
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
/*                         <a href="#"><p class="padp">Sitio de recepción</p></a>*/
/*                       </div>*/
/*                       <hr class="margnone">*/
/*                        <div class="contlat">*/
/*                         <a href="#"><p class="padp">registro de donativo</p></a>*/
/*                       </div>*/
/* */
/*                     </div>*/
/*                 </div>      */
/*                </div>*/
/*              </div>*/
/* */
/*              <hr class="margnone">*/
/*             </li>*/
/*             <li class="textjusti"><a href="">credito de Emergencia</a></li>*/
/*             <hr class="margnone">*/
/*           </ul>*/
/*         </div>*/
/*         */
/*         {% endblock %}*/
/*         <!-- sección de trabajo -->*/
/*         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="capa">*/
/*           {% block capa%}*/
/*             */
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
