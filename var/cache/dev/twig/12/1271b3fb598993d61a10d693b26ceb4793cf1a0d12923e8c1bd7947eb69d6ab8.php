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
        $__internal_3bfc32f1458039e9043ffcc3c1715f00d356cae6128f9d16ecbd0d33a7961524 = $this->env->getExtension("native_profiler");
        $__internal_3bfc32f1458039e9043ffcc3c1715f00d356cae6128f9d16ecbd0d33a7961524->enter($__internal_3bfc32f1458039e9043ffcc3c1715f00d356cae6128f9d16ecbd0d33a7961524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:jornadascenso.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bfc32f1458039e9043ffcc3c1715f00d356cae6128f9d16ecbd0d33a7961524->leave($__internal_3bfc32f1458039e9043ffcc3c1715f00d356cae6128f9d16ecbd0d33a7961524_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_7f26425f454c49ef55fd0a43235fef1bf3c92e4584c42a49dff01606cf8134aa = $this->env->getExtension("native_profiler");
        $__internal_7f26425f454c49ef55fd0a43235fef1bf3c92e4584c42a49dff01606cf8134aa->enter($__internal_7f26425f454c49ef55fd0a43235fef1bf3c92e4584c42a49dff01606cf8134aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "  <div>
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
                  <th>Fecha de realización</th>
                  <th>Colaboradores</th>
                  <th>mas</th>
                </tr>
              </thead>
              <tbody>
                  ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meetings"]) ? $context["meetings"] : $this->getContext($context, "meetings")));
        foreach ($context['_seq'] as $context["_key"] => $context["meeting"]) {
            // line 42
            echo "                      <tr>
                          <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["meeting"], "id", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["meeting"], "address", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["meeting"], "createdAt", array()), "d-m-Y h:i"), "html", null, true);
            echo "</td>
                          <td>
                            ";
            // line 47
            if (($this->getAttribute($context["meeting"], "meetingType", array()) == "CENSUS")) {
                // line 48
                echo "                              
                              <strong>censo</strong>
                              
                              ";
            } elseif (($this->getAttribute(            // line 51
$context["meeting"], "meetingType", array()) == "STERILIZATION")) {
                // line 52
                echo "                              
                              <strong>esterilización</strong>
                              
                            ";
            }
            // line 56
            echo "                          </td>
                          <td><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_admin_jornada_censo_mas", array("meetingId" => $this->getAttribute($context["meeting"], "id", array()))), "html", null, true);
            echo "\" id=\"censomas\">&nbsp;<span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></a></td>
                      </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meeting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "              
              </tbody>
            </table>
          </div><!--div close sectionstile-->
          </div><!--div container-->
";
        
        $__internal_7f26425f454c49ef55fd0a43235fef1bf3c92e4584c42a49dff01606cf8134aa->leave($__internal_7f26425f454c49ef55fd0a43235fef1bf3c92e4584c42a49dff01606cf8134aa_prof);

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
        return array (  130 => 59,  121 => 57,  118 => 56,  112 => 52,  110 => 51,  105 => 48,  103 => 47,  98 => 45,  94 => 44,  90 => 43,  87 => 42,  83 => 41,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/*   <div>*/
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
/*                   <th>Fecha de realización</th>*/
/*                   <th>Colaboradores</th>*/
/*                   <th>mas</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                   {% for meeting in meetings %}*/
/*                       <tr>*/
/*                           <td>{{ meeting.id }}</td>*/
/*                           <td>{{ meeting.address }}</td>*/
/*                           <td>{{ meeting.createdAt | date('d-m-Y h:i')  }}</td>*/
/*                           <td>*/
/*                             {% if meeting.meetingType == 'CENSUS'%}*/
/*                               */
/*                               <strong>censo</strong>*/
/*                               */
/*                               {% elseif meeting.meetingType == 'STERILIZATION'%}*/
/*                               */
/*                               <strong>esterilización</strong>*/
/*                               */
/*                             {%endif%}*/
/*                           </td>*/
/*                           <td><a href="{{ path('pc_admin_jornada_censo_mas', {'meetingId' : meeting.id })}}" id="censomas">&nbsp;<span class="glyphicon glyphicon-plus" aria-hidden="true"></a></td>*/
/*                       </tr>*/
/*                   {% endfor %}              */
/*               </tbody>*/
/*             </table>*/
/*           </div><!--div close sectionstile-->*/
/*           </div><!--div container-->*/
/* {% endblock %}*/
/* */
