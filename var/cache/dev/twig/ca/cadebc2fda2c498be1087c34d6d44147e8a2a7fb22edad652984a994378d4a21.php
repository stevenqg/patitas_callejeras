<?php

/* PCFundationBundle:Admin:donativ_info.html.twig */
class __TwigTemplate_50cc5224b156dc1cfe57d33e581dccd4bcb1fda334bd57fbf830b57a620731ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:donativ_info.html.twig", 1);
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
        $__internal_44a328702164587321af5327081b345052367aa91e96953a7c4d2fd164810ab3 = $this->env->getExtension("native_profiler");
        $__internal_44a328702164587321af5327081b345052367aa91e96953a7c4d2fd164810ab3->enter($__internal_44a328702164587321af5327081b345052367aa91e96953a7c4d2fd164810ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:donativ_info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44a328702164587321af5327081b345052367aa91e96953a7c4d2fd164810ab3->leave($__internal_44a328702164587321af5327081b345052367aa91e96953a7c4d2fd164810ab3_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_a17a42a24c14162a501e86fa106398147271c21253aa5a54d467cb069c3354d2 = $this->env->getExtension("native_profiler");
        $__internal_a17a42a24c14162a501e86fa106398147271c21253aa5a54d467cb069c3354d2->enter($__internal_a17a42a24c14162a501e86fa106398147271c21253aa5a54d467cb069c3354d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "
\t<h2 class=\"coloralert\"> &nbsp;informacion de donaciones<a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("pc_admin_donativ_add");
        echo "\" type=\"button\" class=\"pull-right buttonborder btn btn-primary\"> <span class=\"glyphicon glyphicon-hand-left\" aria-hidden=\"true\"></span>&nbsp;nueva donación</a></h2>
\t<h4 class=\"podingtitle1\">Donaciones monetareas</h4>
\t<div class=\"sectionstile notborad\">
\t<table class=\"tabl table-striped\">
              <thead>
                <tr>
                  <th>cuantia</th>
                  <th>donante</th>
                  <th>recibído en</th>
                  <th class=\"tdxs\">descripción</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["donatives"]) ? $context["donatives"] : $this->getContext($context, "donatives")));
        foreach ($context['_seq'] as $context["_key"] => $context["donative"]) {
            // line 18
            echo "                ";
            if (($this->getAttribute($context["donative"], "type", array()) == "MONETARY")) {
                // line 19
                echo "                <tr>
                  <td>\$";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["donative"], "quantity", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["donative"], "donor", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["donative"], "receivedAt", array()), "m-d-Y"), "html", null, true);
                echo "</td>
                  <td><a data-toggle=\"modal\" data-target=\"#myModal";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["donative"], "id", array()), "html", null, true);
                echo "\" >&nbsp;<span class=\"glyphicon glyphicon-share\" aria-hidden=\"true\"></a>

                  <div class=\"modal fade\" id=\"myModal";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["donative"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                  <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                      <div class=\"timod  modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">Descripcion del donativo</h4>
                      </div>
                      <div class=\"modal-body\">
                        ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["donative"], "description", array()), "html", null, true);
                echo "
                      </div>
                      
                    </div>
                  </div>
                </div>

                  </td>
                </tr>
                ";
            }
            // line 43
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['donative'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "               </tbody>
            </table>
\t</div>
\t
\t<h4 class=\"podingtitle1\">Donaciones de productos</h4>
\t<div class=\"sectionstile notborad\">
\t<table class=\"tabl table-striped\">
              <thead>
                <tr>
                  <th>tipo</th>
                  <th>cantidad</th>
                  <th>donante</th>
                  <th>recibído en</th>
                  <th class=\"tdxs\">descripción</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["donatives"]) ? $context["donatives"] : $this->getContext($context, "donatives")));
        foreach ($context['_seq'] as $context["_key"] => $context["donative"]) {
            // line 62
            echo "                ";
            if (($this->getAttribute($context["donative"], "type", array()) != "MONETARY")) {
                // line 63
                echo "                <tr>
                  <td>
                    ";
                // line 65
                if (($this->getAttribute($context["donative"], "type", array()) == "FOOD")) {
                    // line 66
                    echo "                    <strong>alimento</strong>
                    ";
                } elseif (($this->getAttribute(                // line 67
$context["donative"], "type", array()) == "OTHERS")) {
                    // line 68
                    echo "                    <strong>otros</strong>
                    ";
                }
                // line 70
                echo "                  </td>
                  <td>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["donative"], "quantity", array()), "html", null, true);
                echo " &nbsp; unidades</td>
                  <td>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["donative"], "donor", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["donative"], "receivedAt", array()), "m-d-Y"), "html", null, true);
                echo "</td>
                  <td><a data-toggle=\"modal\" data-target=\"#myModal";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["donative"], "id", array()), "html", null, true);
                echo "\" >&nbsp;<span class=\"glyphicon glyphicon-share\" aria-hidden=\"true\"></a>

                  <div class=\"modal fade\" id=\"myModal";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["donative"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                  <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                      <div class=\"timod  modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">Descripcion del donativo</h4>
                      </div>
                      <div class=\"modal-body\">
                        ";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["donative"], "description", array()), "html", null, true);
                echo "
                      </div>
                      
                    </div>
                  </div>
                </div>

                  </td>
                </tr>
                ";
            }
            // line 94
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['donative'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "               </tbody>
            </table>
\t</div>
";
        
        $__internal_a17a42a24c14162a501e86fa106398147271c21253aa5a54d467cb069c3354d2->leave($__internal_a17a42a24c14162a501e86fa106398147271c21253aa5a54d467cb069c3354d2_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:donativ_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 95,  201 => 94,  188 => 84,  177 => 76,  172 => 74,  168 => 73,  164 => 72,  160 => 71,  157 => 70,  153 => 68,  151 => 67,  148 => 66,  146 => 65,  142 => 63,  139 => 62,  135 => 61,  116 => 44,  110 => 43,  97 => 33,  86 => 25,  81 => 23,  77 => 22,  73 => 21,  69 => 20,  66 => 19,  63 => 18,  59 => 17,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* */
/* 	<h2 class="coloralert"> &nbsp;informacion de donaciones<a href="{{path('pc_admin_donativ_add')}}" type="button" class="pull-right buttonborder btn btn-primary"> <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>&nbsp;nueva donación</a></h2>*/
/* 	<h4 class="podingtitle1">Donaciones monetareas</h4>*/
/* 	<div class="sectionstile notborad">*/
/* 	<table class="tabl table-striped">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <th>cuantia</th>*/
/*                   <th>donante</th>*/
/*                   <th>recibído en</th>*/
/*                   <th class="tdxs">descripción</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% for donative in donatives %}*/
/*                 {% if donative.type == 'MONETARY' %}*/
/*                 <tr>*/
/*                   <td>${{ donative.quantity }}</td>*/
/*                   <td>{{ donative.donor }}</td>*/
/*                   <td>{{ donative.receivedAt | date ('m-d-Y')}}</td>*/
/*                   <td><a data-toggle="modal" data-target="#myModal{{ donative.id }}" >&nbsp;<span class="glyphicon glyphicon-share" aria-hidden="true"></a>*/
/* */
/*                   <div class="modal fade" id="myModal{{ donative.id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*                   <div class="modal-dialog" role="document">*/
/*                     <div class="modal-content">*/
/*                       <div class="timod  modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                         <h4 class="modal-title" id="myModalLabel">Descripcion del donativo</h4>*/
/*                       </div>*/
/*                       <div class="modal-body">*/
/*                         {{ donative.description }}*/
/*                       </div>*/
/*                       */
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                   </td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*                </tbody>*/
/*             </table>*/
/* 	</div>*/
/* 	*/
/* 	<h4 class="podingtitle1">Donaciones de productos</h4>*/
/* 	<div class="sectionstile notborad">*/
/* 	<table class="tabl table-striped">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <th>tipo</th>*/
/*                   <th>cantidad</th>*/
/*                   <th>donante</th>*/
/*                   <th>recibído en</th>*/
/*                   <th class="tdxs">descripción</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% for donative in donatives %}*/
/*                 {% if donative.type != 'MONETARY' %}*/
/*                 <tr>*/
/*                   <td>*/
/*                     {% if donative.type == 'FOOD' %}*/
/*                     <strong>alimento</strong>*/
/*                     {% elseif donative.type == 'OTHERS' %}*/
/*                     <strong>otros</strong>*/
/*                     {% endif %}*/
/*                   </td>*/
/*                   <td>{{ donative.quantity }} &nbsp; unidades</td>*/
/*                   <td>{{ donative.donor }}</td>*/
/*                   <td>{{ donative.receivedAt | date ('m-d-Y')}}</td>*/
/*                   <td><a data-toggle="modal" data-target="#myModal{{ donative.id }}" >&nbsp;<span class="glyphicon glyphicon-share" aria-hidden="true"></a>*/
/* */
/*                   <div class="modal fade" id="myModal{{ donative.id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*                   <div class="modal-dialog" role="document">*/
/*                     <div class="modal-content">*/
/*                       <div class="timod  modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                         <h4 class="modal-title" id="myModalLabel">Descripcion del donativo</h4>*/
/*                       </div>*/
/*                       <div class="modal-body">*/
/*                         {{ donative.description }}*/
/*                       </div>*/
/*                       */
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                   </td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*                </tbody>*/
/*             </table>*/
/* 	</div>*/
/* {% endblock %}*/
