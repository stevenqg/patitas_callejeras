<?php

/* PCFundationBundle:Admin:eventos.html.twig */
class __TwigTemplate_bb0b06b3267f6f485c522babbc22209d935b5c4f7a2debd1acdfddf7be12a444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:eventos.html.twig", 1);
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
        $__internal_6a1668cea499a66e0eb1dcedba99bb0770c08e8c8e95b53f38ce63661b6dc9ef = $this->env->getExtension("native_profiler");
        $__internal_6a1668cea499a66e0eb1dcedba99bb0770c08e8c8e95b53f38ce63661b6dc9ef->enter($__internal_6a1668cea499a66e0eb1dcedba99bb0770c08e8c8e95b53f38ce63661b6dc9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:eventos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a1668cea499a66e0eb1dcedba99bb0770c08e8c8e95b53f38ce63661b6dc9ef->leave($__internal_6a1668cea499a66e0eb1dcedba99bb0770c08e8c8e95b53f38ce63661b6dc9ef_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_78424b46249dd957b7a07e9a0740557a85381c58e34d5ed079a6c547a4b5bc10 = $this->env->getExtension("native_profiler");
        $__internal_78424b46249dd957b7a07e9a0740557a85381c58e34d5ed079a6c547a4b5bc10->enter($__internal_78424b46249dd957b7a07e9a0740557a85381c58e34d5ed079a6c547a4b5bc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "\t<h1 class=\"coloralert\">Eventos</h1>
              <div class=\"sectionstile\">
              <div class=\"row\">
              <div class=\"textjusti col-xs-4 col-md-8 col-lg-8\">
                <a  type=\"button\" class=\"btn btn-primary buttonborder\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("pc_administrator_eventos_add");
        echo "\" id=\"ventevento\">Crear nuevo evento</a>
              </div>
              <div class=\"col-xs-8 col-md-4 col-lg-4\"></div> <!-- div div responsive -->
            </div> <!-- div row-->
            <br>
           <table class=\"table table-hover\">
              <thead>
                <tr>
                  <th>Nombre del Evento</th>
                  <th>Fecha de realización</th>
                  <th>Lugar de realización</th>
                  <th>Descripción</th>
                  <th class=\"tdxs\">Editar</th>
                  <th class=\"tdxs\">Remover</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Concienciatizacion animal</td>
                  <td>09/09/2012</td>
                  <td>Universiad del Quindio</td>
                  <td>...</td>
                  <td><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("pc_administrator_evento_edit");
        echo "\" id=\"ventevento1\" class=\"btn btn-default \"><span class=\"colordanger  glyphicon glyphicon-minus-sign\"data-toggle=\"tooltip\" data-placement=\"right\" title=\"editar\" aria-hidden=\"true\"></a></td>
                  <td><a href=\"\"class=\"btn btn-default\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\"><span class=\"colorer  glyphicon glyphicon-remove-sign\"data-toggle=\"tooltip\" data-placement=\"right\" title=\"Eliminar evento\" aria-hidden=\"true\"></a>
                  
                  \t<div class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
        \t\t\t\t\t\t  <div class=\"modal-dialog modal-sm\">
        \t\t\t\t\t\t    <div class=\"modal-content\">
        \t\t\t\t\t\t    \t<div class=\"modal-body\">
        \t\t\t\t\t\t    \t\t<p ><span class=\"coloralert btn-lg glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>&nbsp; Esta seguro de efectuar cambios </p>
        \t\t\t\t\t\t    \t</div>
        \t\t\t\t\t\t    \t<div class=\"modal-footer\">
                           <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\" onclick=\"window.close();\">Aceptar</button>
                          </div>
        \t\t\t\t\t\t    </div>
\t\t\t\t\t\t    \t\t\t  </div>
          \t\t\t\t\t\t</div>
                  </td>
                  
                </tr>
              </tbody>
            </table>
          </div><!--div close sectionstile-->
";
        
        $__internal_78424b46249dd957b7a07e9a0740557a85381c58e34d5ed079a6c547a4b5bc10->leave($__internal_78424b46249dd957b7a07e9a0740557a85381c58e34d5ed079a6c547a4b5bc10_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:eventos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 29,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* 	<h1 class="coloralert">Eventos</h1>*/
/*               <div class="sectionstile">*/
/*               <div class="row">*/
/*               <div class="textjusti col-xs-4 col-md-8 col-lg-8">*/
/*                 <a  type="button" class="btn btn-primary buttonborder" href="{{path('pc_administrator_eventos_add')}}" id="ventevento">Crear nuevo evento</a>*/
/*               </div>*/
/*               <div class="col-xs-8 col-md-4 col-lg-4"></div> <!-- div div responsive -->*/
/*             </div> <!-- div row-->*/
/*             <br>*/
/*            <table class="table table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <th>Nombre del Evento</th>*/
/*                   <th>Fecha de realización</th>*/
/*                   <th>Lugar de realización</th>*/
/*                   <th>Descripción</th>*/
/*                   <th class="tdxs">Editar</th>*/
/*                   <th class="tdxs">Remover</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 <tr>*/
/*                   <td>Concienciatizacion animal</td>*/
/*                   <td>09/09/2012</td>*/
/*                   <td>Universiad del Quindio</td>*/
/*                   <td>...</td>*/
/*                   <td><a href="{{path('pc_administrator_evento_edit')}}" id="ventevento1" class="btn btn-default "><span class="colordanger  glyphicon glyphicon-minus-sign"data-toggle="tooltip" data-placement="right" title="editar" aria-hidden="true"></a></td>*/
/*                   <td><a href=""class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-sm"><span class="colorer  glyphicon glyphicon-remove-sign"data-toggle="tooltip" data-placement="right" title="Eliminar evento" aria-hidden="true"></a>*/
/*                   */
/*                   	<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
/*         						  <div class="modal-dialog modal-sm">*/
/*         						    <div class="modal-content">*/
/*         						    	<div class="modal-body">*/
/*         						    		<p ><span class="coloralert btn-lg glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp; Esta seguro de efectuar cambios </p>*/
/*         						    	</div>*/
/*         						    	<div class="modal-footer">*/
/*                            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="window.close();">Aceptar</button>*/
/*                           </div>*/
/*         						    </div>*/
/* 						    			  </div>*/
/*           						</div>*/
/*                   </td>*/
/*                   */
/*                 </tr>*/
/*               </tbody>*/
/*             </table>*/
/*           </div><!--div close sectionstile-->*/
/* {% endblock %}*/
