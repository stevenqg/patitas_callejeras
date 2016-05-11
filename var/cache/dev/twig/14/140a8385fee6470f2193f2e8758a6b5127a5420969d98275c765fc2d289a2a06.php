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
        $__internal_97aeb7ed29cf1c19c1a46081e206c7339aaac3bdbf8509b85ef123f9079a19a1 = $this->env->getExtension("native_profiler");
        $__internal_97aeb7ed29cf1c19c1a46081e206c7339aaac3bdbf8509b85ef123f9079a19a1->enter($__internal_97aeb7ed29cf1c19c1a46081e206c7339aaac3bdbf8509b85ef123f9079a19a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:eventos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97aeb7ed29cf1c19c1a46081e206c7339aaac3bdbf8509b85ef123f9079a19a1->leave($__internal_97aeb7ed29cf1c19c1a46081e206c7339aaac3bdbf8509b85ef123f9079a19a1_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_da7b57a5e70c4e1674df2b23dd3b2e6e66702d64d951971e10dc6475f8fa621b = $this->env->getExtension("native_profiler");
        $__internal_da7b57a5e70c4e1674df2b23dd3b2e6e66702d64d951971e10dc6475f8fa621b->enter($__internal_da7b57a5e70c4e1674df2b23dd3b2e6e66702d64d951971e10dc6475f8fa621b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "\t<h1 class=\"coloralert\">Eventos</h1>
              <div class=\"sectionstile\">
              <div class=\"row\">
              <div class=\"textjusti col-xs-4 col-md-8 col-lg-8\">
                <a  type=\"button\" class=\"btn btn-primary buttonborder\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("pc_administrator_eventos_add");
        echo "\" onclick=\"window.open(this.href, this.target,'width=360,height=500'); return false\">Crear nuevo evento</a>
              </div>
              <div class=\"col-xs-8 col-md-4 col-lg-4\"></div> <!-- div div responsive -->
            </div> <!-- div row-->
            <br>
           <table class=\"table table-hover\">
              <thead>
                <tr class=\"podingtitle1\">
                  <th class=\"tdd\">Nombre del Evento</th>
                  <th class=\"tdd\">Fecha de realización</th>
                  <th class=\"tdd\">Lugar de realización</th>
                  <th class=\"tdxs\">Editar</th>
                  <th class=\"tdxs\">Remover</th>
                </tr>
              </the ad>
              <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 24
            echo "                <tr>
                  <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateAt", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                  <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "address", array()), "html", null, true);
            echo "</td>
                  
                  <td ><a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("pc_administrator_evento_edit");
            echo "\" onclick=\"window.open(this.href, this.target,'width=360,height=500'); return false\" class=\"btn btn-default \"><span class=\"colordanger  glyphicon glyphicon-minus-sign\"data-toggle=\"tooltip\" data-placement=\"right\" title=\"editar\" aria-hidden=\"true\"></a></td>
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
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "              </tbody>
            </table>
          </div><!--div close sectionstile-->
";
        
        $__internal_da7b57a5e70c4e1674df2b23dd3b2e6e66702d64d951971e10dc6475f8fa621b->leave($__internal_da7b57a5e70c4e1674df2b23dd3b2e6e66702d64d951971e10dc6475f8fa621b_prof);

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
        return array (  109 => 47,  85 => 29,  80 => 27,  76 => 26,  72 => 25,  69 => 24,  65 => 23,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* 	<h1 class="coloralert">Eventos</h1>*/
/*               <div class="sectionstile">*/
/*               <div class="row">*/
/*               <div class="textjusti col-xs-4 col-md-8 col-lg-8">*/
/*                 <a  type="button" class="btn btn-primary buttonborder" href="{{path('pc_administrator_eventos_add')}}" onclick="window.open(this.href, this.target,'width=360,height=500'); return false">Crear nuevo evento</a>*/
/*               </div>*/
/*               <div class="col-xs-8 col-md-4 col-lg-4"></div> <!-- div div responsive -->*/
/*             </div> <!-- div row-->*/
/*             <br>*/
/*            <table class="table table-hover">*/
/*               <thead>*/
/*                 <tr class="podingtitle1">*/
/*                   <th class="tdd">Nombre del Evento</th>*/
/*                   <th class="tdd">Fecha de realización</th>*/
/*                   <th class="tdd">Lugar de realización</th>*/
/*                   <th class="tdxs">Editar</th>*/
/*                   <th class="tdxs">Remover</th>*/
/*                 </tr>*/
/*               </the ad>*/
/*               <tbody>*/
/*                 {% for event in events %}*/
/*                 <tr>*/
/*                   <td>{{ event.name }}</td>*/
/*                   <td>{{ event.dateAt | date("m/d/Y") }}</td>*/
/*                   <td>{{ event.address  }}</td>*/
/*                   */
/*                   <td ><a href="{{path('pc_administrator_evento_edit')}}" onclick="window.open(this.href, this.target,'width=360,height=500'); return false" class="btn btn-default "><span class="colordanger  glyphicon glyphicon-minus-sign"data-toggle="tooltip" data-placement="right" title="editar" aria-hidden="true"></a></td>*/
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
/*                 </tr>*/
/*                 {% endfor %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div><!--div close sectionstile-->*/
/* {% endblock %}*/
