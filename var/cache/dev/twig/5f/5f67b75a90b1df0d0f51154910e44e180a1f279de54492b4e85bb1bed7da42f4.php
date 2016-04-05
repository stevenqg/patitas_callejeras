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
        $__internal_0099962f679a0a28acf72ecc5cebc4086bb44d86ae2cc2edf641b0f140f305b2 = $this->env->getExtension("native_profiler");
        $__internal_0099962f679a0a28acf72ecc5cebc4086bb44d86ae2cc2edf641b0f140f305b2->enter($__internal_0099962f679a0a28acf72ecc5cebc4086bb44d86ae2cc2edf641b0f140f305b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nav.html.twig"));

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
        echo "\" >Inicio <span class=\"sr-only\"></span></a></li>
                      <li><a class=\"links\" href=\"\" >Eventos</a></li>
                      <li><a class=\"links\" href=\"\" >Donaciones</a></li>
                      <li><a class=\"links\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("pc_fundation_adoptar");
        echo "\" >Adoptar</a></li>
                </ul>
            </div> 
        </div> 
    </nav>
    \t</div>
  \t\t<div class=\"mn colx-md-1\"></div>
\t\t</div>
</header>";
        
        $__internal_0099962f679a0a28acf72ecc5cebc4086bb44d86ae2cc2edf641b0f140f305b2->leave($__internal_0099962f679a0a28acf72ecc5cebc4086bb44d86ae2cc2edf641b0f140f305b2_prof);

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
        return array (  51 => 22,  45 => 19,  38 => 15,  22 => 1,);
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
/*                       <li ><a class="links" href="{{ path('pc_fundation_index')}}" >Inicio <span class="sr-only"></span></a></li>*/
/*                       <li><a class="links" href="" >Eventos</a></li>*/
/*                       <li><a class="links" href="" >Donaciones</a></li>*/
/*                       <li><a class="links" href="{{ path('pc_fundation_adoptar')}}" >Adoptar</a></li>*/
/*                 </ul>*/
/*             </div> */
/*         </div> */
/*     </nav>*/
/*     	</div>*/
/*   		<div class="mn colx-md-1"></div>*/
/* 		</div>*/
/* </header>*/
