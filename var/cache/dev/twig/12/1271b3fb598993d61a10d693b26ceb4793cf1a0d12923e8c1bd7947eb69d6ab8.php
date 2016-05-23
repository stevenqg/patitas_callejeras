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
        $__internal_e63420b862e982e874c0f4d2def663ada3fde736a8ef362dc47f3f475bdfd07f = $this->env->getExtension("native_profiler");
        $__internal_e63420b862e982e874c0f4d2def663ada3fde736a8ef362dc47f3f475bdfd07f->enter($__internal_e63420b862e982e874c0f4d2def663ada3fde736a8ef362dc47f3f475bdfd07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:jornadascenso.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e63420b862e982e874c0f4d2def663ada3fde736a8ef362dc47f3f475bdfd07f->leave($__internal_e63420b862e982e874c0f4d2def663ada3fde736a8ef362dc47f3f475bdfd07f_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_7229150338e4b207cc9abe391e378ea8b0f81f281181bed3a1dc93ca3f8dabb9 = $this->env->getExtension("native_profiler");
        $__internal_7229150338e4b207cc9abe391e378ea8b0f81f281181bed3a1dc93ca3f8dabb9->enter($__internal_7229150338e4b207cc9abe391e378ea8b0f81f281181bed3a1dc93ca3f8dabb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "  <div>
\t<h1 class=\"coloralert\">Jornadas censo</h1>
              <div class=\"sectionstile\">
              <div class=\"row\">
              <div class=\"textjusti col-xs-4 col-md-8 col-lg-8\">
                <a  type=\"button\" class=\"buttonborder btn btn-info\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("pc_admin_jornada_censo_add");
        echo "\" id=\"nuevajornadacenso\" onclick=\"window.open(this.href, this.target,'width=360,height=500'); return false\">Crear nueva Jornada</a>
              </div>
              <div class=\"col-xs-8 col-md-4 col-lg-4\"></div> <!-- div div responsive -->
            </div> <!-- div row-->
            <br>
           <table class=\"table table-hover\">
              <thead>
                <tr class=\"timod \">
                  <th>#</th>
                  <th>Zona</th>
                  <th>Fecha de realización</th>
                  <th class=\"tdxs\">ver a fondo</th>
                </tr>
              </thead>
              <tbody>
                  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meetings"]) ? $context["meetings"] : $this->getContext($context, "meetings")));
        foreach ($context['_seq'] as $context["_key"] => $context["meeting"]) {
            // line 24
            echo "                      <tr>
                          <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["meeting"], "id", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["meeting"], "address", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["meeting"], "createdAt", array()), "d-m-Y h:i"), "html", null, true);
            echo "</td>
                  
                          <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_admin_jornada_censo_mas", array("meetingId" => $this->getAttribute($context["meeting"], "id", array()))), "html", null, true);
            echo "\" id=\"censomas\">&nbsp;<span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></a></td>
                      </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meeting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "              
              </tbody>
            </table>
          </div><!--div close sectionstile-->
          </div><!--div container-->
";
        
        $__internal_7229150338e4b207cc9abe391e378ea8b0f81f281181bed3a1dc93ca3f8dabb9->leave($__internal_7229150338e4b207cc9abe391e378ea8b0f81f281181bed3a1dc93ca3f8dabb9_prof);

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
        return array (  94 => 31,  85 => 29,  80 => 27,  76 => 26,  72 => 25,  69 => 24,  65 => 23,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/*   <div>*/
/* 	<h1 class="coloralert">Jornadas censo</h1>*/
/*               <div class="sectionstile">*/
/*               <div class="row">*/
/*               <div class="textjusti col-xs-4 col-md-8 col-lg-8">*/
/*                 <a  type="button" class="buttonborder btn btn-info" href="{{ path('pc_admin_jornada_censo_add')}}" id="nuevajornadacenso" onclick="window.open(this.href, this.target,'width=360,height=500'); return false">Crear nueva Jornada</a>*/
/*               </div>*/
/*               <div class="col-xs-8 col-md-4 col-lg-4"></div> <!-- div div responsive -->*/
/*             </div> <!-- div row-->*/
/*             <br>*/
/*            <table class="table table-hover">*/
/*               <thead>*/
/*                 <tr class="timod ">*/
/*                   <th>#</th>*/
/*                   <th>Zona</th>*/
/*                   <th>Fecha de realización</th>*/
/*                   <th class="tdxs">ver a fondo</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                   {% for meeting in meetings %}*/
/*                       <tr>*/
/*                           <td>{{ meeting.id }}</td>*/
/*                           <td>{{ meeting.address }}</td>*/
/*                           <td>{{ meeting.createdAt | date('d-m-Y h:i')  }}</td>*/
/*                   */
/*                           <td><a href="{{ path('pc_admin_jornada_censo_mas', {'meetingId' : meeting.id })}}" id="censomas">&nbsp;<span class="glyphicon glyphicon-plus" aria-hidden="true"></a></td>*/
/*                       </tr>*/
/*                   {% endfor %}              */
/*               </tbody>*/
/*             </table>*/
/*           </div><!--div close sectionstile-->*/
/*           </div><!--div container-->*/
/* {% endblock %}*/
/* */
