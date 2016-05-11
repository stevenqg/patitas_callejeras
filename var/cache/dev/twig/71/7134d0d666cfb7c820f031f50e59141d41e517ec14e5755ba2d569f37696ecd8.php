<?php

/* PCFundationBundle:Admin:recepcion.html.twig */
class __TwigTemplate_1c37f541f2421fb5b192c6eb9cd3e327007f94afca17037767f30757096180a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:recepcion.html.twig", 1);
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
        $__internal_8faae145a9cde158e882097df9931430c166963b16dbfdd4e459b7656f0a4c5c = $this->env->getExtension("native_profiler");
        $__internal_8faae145a9cde158e882097df9931430c166963b16dbfdd4e459b7656f0a4c5c->enter($__internal_8faae145a9cde158e882097df9931430c166963b16dbfdd4e459b7656f0a4c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:recepcion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8faae145a9cde158e882097df9931430c166963b16dbfdd4e459b7656f0a4c5c->leave($__internal_8faae145a9cde158e882097df9931430c166963b16dbfdd4e459b7656f0a4c5c_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_4893e83506fee15142709baf4842b8666499c7fd3f36b5d1d2569429743cab9d = $this->env->getExtension("native_profiler");
        $__internal_4893e83506fee15142709baf4842b8666499c7fd3f36b5d1d2569429743cab9d->enter($__internal_4893e83506fee15142709baf4842b8666499c7fd3f36b5d1d2569429743cab9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "
\t<h1 class=\"titulosection\">Recepción de donativos &nbsp;<a  type=\"button\" class=\"pull-right btn btn-primary buttonborder\" href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("pc_admin_donativ_recepcion_add");
        echo "\" onclick=\"window.open(this.href, this.target,'width=360,height=500'); return false\">nuevo sitios de recepción</a></h1>
\t<hr>
\t <br>
\t<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
  <div class=\"margnone panel panel-default\">
    <div class=\"paddinnot panel-heading\" role=\"tab\" id=\"headingOne\">
      <h4 class=\"panel-title\">
        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#controlOne\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
           <table class=\" margnone table table-hover\">
              <tbody>
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["donativeMeetings"]) ? $context["donativeMeetings"] : $this->getContext($context, "donativeMeetings")));
        foreach ($context['_seq'] as $context["_key"] => $context["donativeMeeting"]) {
            // line 15
            echo "                <tr>
                  <td><b class=\"titulosection\">Lugar:&nbsp;</b>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["donativeMeeting"], "address", array()), "html", null, true);
            echo "</td>
                  <td><b class=\"titulosection\">Fecha de realización: &nbsp;</b>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["donativeMeeting"], "dateAt", array()), "m-d-Y"), "html", null, true);
            echo "</td>
                   
                  <td class=\"tdxs\"><a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("pc_admin_donativ_recepcion_add");
            echo " \" onclick=\"window.open(this.href, this.target,'width=360,height=500'); return false\" ><span class=\"colordanger  glyphicon glyphicon-minus-sign\"data-toggle=\"tooltip\" data-placement=\"right\" title=\"editar\" aria-hidden=\"true\"></a></td>
                  <td td=\"tdxs\"><a href=\"\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\"><span class=\"colorer  glyphicon glyphicon-remove-sign\"data-toggle=\"tooltip\" data-placement=\"right\" title=\"Eliminar evento\" aria-hidden=\"true\"></a>
                  
                  \t<div class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
        \t\t\t\t\t\t  <div class=\"modal-dialog modal-sm\">
        \t\t\t\t\t\t    <div class=\"modal-content\">
        \t\t\t\t\t\t    \t<div class=\"modal-body\">
        \t\t\t\t\t\t    \t\t<p ><span class=\"coloralert btn-lg glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>&nbsp; Esta seguro de eliminar este evento </p>
        \t\t\t\t\t\t    \t</div>
        \t\t\t\t\t\t    \t<div class=\"modal-footer\">
                           <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\" onclick=\"window.close();\">Aceptar</button>
                          </div>
        \t\t\t\t\t\t    </div>
\t\t\t\t\t\t    \t\t\t  </div>
          \t\t\t\t\t\t</div>
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['donativeMeeting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                
               </tbody>
            </table>
        </a>
      </h4>
    </div>
    <div id=\"controlOne\" class=\"panel-collapse collapse \" role=\"tabpanel\" aria-labelledby=\"headingOne\">
      <div class=\"panel-body\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h4 class=\"textjusti\"> Descripción: </h4>
          </div>
          <div class=\"col-md-9\">
            <table class=\"tabdescr\"><tr><td></td></tr></table>
          </div>
        </div><br>
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h4 class=\"textjusti\">Colaboradores &nbsp;<a href=\" \" onclick=\"window.open(this.href, this.target,'width=360,height=500'); return false\" class=\" btn btn-default \"><span class=\"coloralert   glyphicon glyphicon-plus-sign\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" aria-hidden=\"true\" data-original-title=\"agregar colaborador\"></span></a>  </h4>
          </div>
          
          <div class=\"col-md-9\">
            <table class=\"table-bordered tabl table-striped\">
         \t<thead>
         \t\t\t<th>Nombre</th>
         \t\t\t<th>telefono</th>
         \t\t\t<th>dirección</th>
         \t\t\t
         \t\t</tr>
         \t</thead>
         \t<tbody>
         \t\t<tr>
         \t\t\t<td>data</td>
         \t\t\t<td>data</td>
         \t\t\t<td>data</td>
         \t\t\t</tr>
         \t</tbody>
         </table> 
         
          </div>
        </div>
      </div><!--panel-body close-->
      </div>
    </div>
<!------------------------------------------------------------------------>

 </div>
\t
";
        
        $__internal_4893e83506fee15142709baf4842b8666499c7fd3f36b5d1d2569429743cab9d->leave($__internal_4893e83506fee15142709baf4842b8666499c7fd3f36b5d1d2569429743cab9d_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:recepcion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  72 => 19,  67 => 17,  63 => 16,  60 => 15,  56 => 14,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* */
/* 	<h1 class="titulosection">Recepción de donativos &nbsp;<a  type="button" class="pull-right btn btn-primary buttonborder" href="{{path('pc_admin_donativ_recepcion_add')}}" onclick="window.open(this.href, this.target,'width=360,height=500'); return false">nuevo sitios de recepción</a></h1>*/
/* 	<hr>*/
/* 	 <br>*/
/* 	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">*/
/*   <div class="margnone panel panel-default">*/
/*     <div class="paddinnot panel-heading" role="tab" id="headingOne">*/
/*       <h4 class="panel-title">*/
/*         <a role="button" data-toggle="collapse" data-parent="#accordion" href="#controlOne" aria-expanded="false" aria-controls="collapseOne">*/
/*            <table class=" margnone table table-hover">*/
/*               <tbody>*/
/*                 {% for donativeMeeting in donativeMeetings %}*/
/*                 <tr>*/
/*                   <td><b class="titulosection">Lugar:&nbsp;</b>{{ donativeMeeting.address}}</td>*/
/*                   <td><b class="titulosection">Fecha de realización: &nbsp;</b>{{ donativeMeeting.dateAt | date('m-d-Y')}}</td>*/
/*                    */
/*                   <td class="tdxs"><a href="{{path('pc_admin_donativ_recepcion_add')}} " onclick="window.open(this.href, this.target,'width=360,height=500'); return false" ><span class="colordanger  glyphicon glyphicon-minus-sign"data-toggle="tooltip" data-placement="right" title="editar" aria-hidden="true"></a></td>*/
/*                   <td td="tdxs"><a href="" data-toggle="modal" data-target=".bs-example-modal-sm"><span class="colorer  glyphicon glyphicon-remove-sign"data-toggle="tooltip" data-placement="right" title="Eliminar evento" aria-hidden="true"></a>*/
/*                   */
/*                   	<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
/*         						  <div class="modal-dialog modal-sm">*/
/*         						    <div class="modal-content">*/
/*         						    	<div class="modal-body">*/
/*         						    		<p ><span class="coloralert btn-lg glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp; Esta seguro de eliminar este evento </p>*/
/*         						    	</div>*/
/*         						    	<div class="modal-footer">*/
/*                            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="window.close();">Aceptar</button>*/
/*                           </div>*/
/*         						    </div>*/
/* 						    			  </div>*/
/*           						</div>*/
/*                   </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 */
/*                </tbody>*/
/*             </table>*/
/*         </a>*/
/*       </h4>*/
/*     </div>*/
/*     <div id="controlOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">*/
/*       <div class="panel-body">*/
/*         <div class="row">*/
/*           <div class="col-md-3">*/
/*             <h4 class="textjusti"> Descripción: </h4>*/
/*           </div>*/
/*           <div class="col-md-9">*/
/*             <table class="tabdescr"><tr><td></td></tr></table>*/
/*           </div>*/
/*         </div><br>*/
/*         <div class="row">*/
/*           <div class="col-md-3">*/
/*             <h4 class="textjusti">Colaboradores &nbsp;<a href=" " onclick="window.open(this.href, this.target,'width=360,height=500'); return false" class=" btn btn-default "><span class="coloralert   glyphicon glyphicon-plus-sign" data-toggle="tooltip" data-placement="top" title="" aria-hidden="true" data-original-title="agregar colaborador"></span></a>  </h4>*/
/*           </div>*/
/*           */
/*           <div class="col-md-9">*/
/*             <table class="table-bordered tabl table-striped">*/
/*          	<thead>*/
/*          			<th>Nombre</th>*/
/*          			<th>telefono</th>*/
/*          			<th>dirección</th>*/
/*          			*/
/*          		</tr>*/
/*          	</thead>*/
/*          	<tbody>*/
/*          		<tr>*/
/*          			<td>data</td>*/
/*          			<td>data</td>*/
/*          			<td>data</td>*/
/*          			</tr>*/
/*          	</tbody>*/
/*          </table> */
/*          */
/*           </div>*/
/*         </div>*/
/*       </div><!--panel-body close-->*/
/*       </div>*/
/*     </div>*/
/* <!------------------------------------------------------------------------>*/
/* */
/*  </div>*/
/* 	*/
/* {% endblock %}*/
