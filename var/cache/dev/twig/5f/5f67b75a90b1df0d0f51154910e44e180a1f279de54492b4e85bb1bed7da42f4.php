<?php

/* nav.html.twig */
class __TwigTemplate_c881504104584c80c8af809ebfdf4489f109c48b3b5d41c51afd40f9153c85f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_080361cb433b731ea1c271ac2547f5bfdf25da248ffb5a23dfc01387cec91d65 = $this->env->getExtension("native_profiler");
        $__internal_080361cb433b731ea1c271ac2547f5bfdf25da248ffb5a23dfc01387cec91d65->enter($__internal_080361cb433b731ea1c271ac2547f5bfdf25da248ffb5a23dfc01387cec91d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nav.html.twig"));

        // line 1
        echo "<header>
\t\t<div class=\"row margin\">
  \t\t<div class=\"col-md-1 \"></div>
  \t\t<div class=\"col-md-10\">
  \t\t\t  \t\t
    <nav class=\"navbar navbar-default\"> 
        <div class=\"container-fluid\"> 
            <div class=\"navbar-header\"> 
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-5\" aria-expanded=\"false\"> 
                <span class=\"sr-only\">Toggle navigation</span> 
                <span class=\"icon-bar\"></span> 
                <span class=\"icon-bar\"></span> 
                <span class=\"icon-bar\"></span> 
              </button> 
              <a><img class=\"dimen\"src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/nombre.png"), "html", null, true);
        echo "\"></a> 
            </div> 
            <div class=\"navbar-collapse collapse\" id=\"bs-example-navbar-collapse-5\" aria-expanded=\"false\" style=\"height: 1px;\"> 
               <ul class=\"nav navbar-nav\">
                      <li ><a class=\"links\" href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("pc_fundation_index");
        echo "\" ><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span>&nbsp; Inicio <span class=\"sr-only\"></span></a></li>
                      <li><a class=\"links\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("pc_fundation_adoptar");
        echo "\" ><span class=\"glyphicon glyphicon-heart-empty\" aria-hidden=\"true\"></span>&nbsp; Adoptar</a></li>
                      <li><a class=\"links\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("pc_fundation_eventos");
        echo "\" ><span class=\"glyphicon glyphicon-blackboard\" aria-hidden=\"true\"></span>&nbsp;Eventos</a></li>
                      <li><a class=\"links\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("pc_fundation_nosotros");
        echo "\" ><span class=\"glyphicon glyphicon-certificate\" aria-hidden=\"true\"></span>&nbsp;Nosotros</a></li>
                      <li><a class=\"links\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("pc_administrator_login");
        echo "\" >admin login</a></li>
                </ul>
            </div> 
        </div> 
    </nav>
    \t</div>
  \t\t<div class=\"mn colx-md-1\"></div>
\t\t</div>
</header>";
        
        $__internal_080361cb433b731ea1c271ac2547f5bfdf25da248ffb5a23dfc01387cec91d65->leave($__internal_080361cb433b731ea1c271ac2547f5bfdf25da248ffb5a23dfc01387cec91d65_prof);

    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 23,  57 => 22,  53 => 21,  49 => 20,  45 => 19,  38 => 15,  22 => 1,);
    }
}
/* <header>*/
/* 		<div class="row margin">*/
/*   		<div class="col-md-1 "></div>*/
/*   		<div class="col-md-10">*/
/*   			  		*/
/*     <nav class="navbar navbar-default"> */
/*         <div class="container-fluid"> */
/*             <div class="navbar-header"> */
/*               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-5" aria-expanded="false"> */
/*                 <span class="sr-only">Toggle navigation</span> */
/*                 <span class="icon-bar"></span> */
/*                 <span class="icon-bar"></span> */
/*                 <span class="icon-bar"></span> */
/*               </button> */
/*               <a><img class="dimen"src="{{ asset('public/img/nombre.png') }}"></a> */
/*             </div> */
/*             <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-5" aria-expanded="false" style="height: 1px;"> */
/*                <ul class="nav navbar-nav">*/
/*                       <li ><a class="links" href="{{ path('pc_fundation_index')}}" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp; Inicio <span class="sr-only"></span></a></li>*/
/*                       <li><a class="links" href="{{ path('pc_fundation_adoptar')}}" ><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>&nbsp; Adoptar</a></li>*/
/*                       <li><a class="links" href="{{path('pc_fundation_eventos')}}" ><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>&nbsp;Eventos</a></li>*/
/*                       <li><a class="links" href="{{ path('pc_fundation_nosotros')}}" ><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>&nbsp;Nosotros</a></li>*/
/*                       <li><a class="links" href="{{ path('pc_administrator_login')}}" >admin login</a></li>*/
/*                 </ul>*/
/*             </div> */
/*         </div> */
/*     </nav>*/
/*     	</div>*/
/*   		<div class="mn colx-md-1"></div>*/
/* 		</div>*/
/* </header>*/
