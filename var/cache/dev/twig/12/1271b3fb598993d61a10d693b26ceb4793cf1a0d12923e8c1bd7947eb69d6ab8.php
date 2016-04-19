<?php

/* PCFundationBundle:Admin:jornadascenso.html.twig */
class __TwigTemplate_cf9315d2f56ddc17e1be860ad77c629036fff360e679cc904a065da0aa735cce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:jornadascenso.html.twig", 1);
        $this->blocks = array(
            'capa' => array($this, 'block_capa'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCFundationBundle:Admin:admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f62aada421f09d2fde98b6e64c2c90222fce6c0e99a660721d0fb690089eaaa = $this->env->getExtension("native_profiler");
        $__internal_4f62aada421f09d2fde98b6e64c2c90222fce6c0e99a660721d0fb690089eaaa->enter($__internal_4f62aada421f09d2fde98b6e64c2c90222fce6c0e99a660721d0fb690089eaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:jornadascenso.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f62aada421f09d2fde98b6e64c2c90222fce6c0e99a660721d0fb690089eaaa->leave($__internal_4f62aada421f09d2fde98b6e64c2c90222fce6c0e99a660721d0fb690089eaaa_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_758f352d8dc09cc7660bf0924e0c591f0a7631670a9acdb7cab80f9decd64d16 = $this->env->getExtension("native_profiler");
        $__internal_758f352d8dc09cc7660bf0924e0c591f0a7631670a9acdb7cab80f9decd64d16->enter($__internal_758f352d8dc09cc7660bf0924e0c591f0a7631670a9acdb7cab80f9decd64d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "  <div class=\"container\">
\t<h1 class=\"coloralert\">Jornadas censo</h1>
              <div class=\"sectionstile\">
              <div class=\"row\">
              <div class=\"textjusti col-xs-4 col-md-8 col-lg-8\">
                <a  type=\"button\" class=\"btn btn-info\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("pc_admin_jornada_censo_add");
        echo "\" id=\"nuevajornadacenso\" >Crear nueva Jornada</a>
              </div>
              <div class=\"col-xs-8 col-md-4 col-lg-4\">
                <div class=\"input-group\">
                  <input type=\"text\" class=\"form-control\" aria-label=\"Text input with segmented button dropdown\" placeholder=\"Zona:\" id=\"searchtipe\">
                  <div class=\"input-group-btn\"> 
                    <button type=\"button\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span></button> 
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> 
                      <span class=\"caret\"></span> 
                      <span class=\"sr-only\">Toggle Dropdown</span> 
                    </button> 
                    <ul class=\"dropdown-menu dropdown-menu-right\">
                      <li><a href=\"\" name=\"z\">Zona</a></li> 
                      <li><a href=\"\" name=\"f\">Fecha</a></li> 
                      <li><a href=\"\"name=\"c\" >Colaborador</a></li> 
                      
                    </ul> 
                  </div> <!-- div btn-input-group -->
                </div> <!-- div input-group -->
              </div> <!-- div div responsive -->
            </div> <!-- div row-->
            <br>
           <table class=\"table table-hover\">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Zona</th>
                  <th>FEcha de realización</th>
                  <th>Colaboradores</th>
                  <th>mas</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>comuna 2 distrito</td>
                  <td>09/09/2012</td>
                  <td>juan,pedro,carlos</td>
                  <td><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("pc_admin_jornada_censo_mas");
        echo "\" id=\"censomas\">&nbsp;<span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>comuna 2 distrito</td>
                  <td>09/09/2012</td>
                  <td>juan,pedro,carlos</td>
                  <td><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("pc_admin_jornada_censo_mas");
        echo "\" id=\"censomas\">&nbsp;<span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></a></td>
                </tr>
              </tbody>
            </table>
          </div><!--div close sectionstile-->
          </div><!--div container-->
";
        
        $__internal_758f352d8dc09cc7660bf0924e0c591f0a7631670a9acdb7cab80f9decd64d16->leave($__internal_758f352d8dc09cc7660bf0924e0c591f0a7631670a9acdb7cab80f9decd64d16_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:jornadascenso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 53,  88 => 46,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/*   <div class="container">*/
/* 	<h1 class="coloralert">Jornadas censo</h1>*/
/*               <div class="sectionstile">*/
/*               <div class="row">*/
/*               <div class="textjusti col-xs-4 col-md-8 col-lg-8">*/
/*                 <a  type="button" class="btn btn-info" href="{{ path('pc_admin_jornada_censo_add')}}" id="nuevajornadacenso" >Crear nueva Jornada</a>*/
/*               </div>*/
/*               <div class="col-xs-8 col-md-4 col-lg-4">*/
/*                 <div class="input-group">*/
/*                   <input type="text" class="form-control" aria-label="Text input with segmented button dropdown" placeholder="Zona:" id="searchtipe">*/
/*                   <div class="input-group-btn"> */
/*                     <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button> */
/*                     <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> */
/*                       <span class="caret"></span> */
/*                       <span class="sr-only">Toggle Dropdown</span> */
/*                     </button> */
/*                     <ul class="dropdown-menu dropdown-menu-right">*/
/*                       <li><a href="" name="z">Zona</a></li> */
/*                       <li><a href="" name="f">Fecha</a></li> */
/*                       <li><a href=""name="c" >Colaborador</a></li> */
/*                       */
/*                     </ul> */
/*                   </div> <!-- div btn-input-group -->*/
/*                 </div> <!-- div input-group -->*/
/*               </div> <!-- div div responsive -->*/
/*             </div> <!-- div row-->*/
/*             <br>*/
/*            <table class="table table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <th>#</th>*/
/*                   <th>Zona</th>*/
/*                   <th>FEcha de realización</th>*/
/*                   <th>Colaboradores</th>*/
/*                   <th>mas</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 <tr>*/
/*                   <td>1</td>*/
/*                   <td>comuna 2 distrito</td>*/
/*                   <td>09/09/2012</td>*/
/*                   <td>juan,pedro,carlos</td>*/
/*                   <td><a href="{{ path('pc_admin_jornada_censo_mas')}}" id="censomas">&nbsp;<span class="glyphicon glyphicon-plus" aria-hidden="true"></a></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                   <td>2</td>*/
/*                   <td>comuna 2 distrito</td>*/
/*                   <td>09/09/2012</td>*/
/*                   <td>juan,pedro,carlos</td>*/
/*                   <td><a href="{{ path('pc_admin_jornada_censo_mas')}}" id="censomas">&nbsp;<span class="glyphicon glyphicon-plus" aria-hidden="true"></a></td>*/
/*                 </tr>*/
/*               </tbody>*/
/*             </table>*/
/*           </div><!--div close sectionstile-->*/
/*           </div><!--div container-->*/
/* {% endblock %}*/
/* */
