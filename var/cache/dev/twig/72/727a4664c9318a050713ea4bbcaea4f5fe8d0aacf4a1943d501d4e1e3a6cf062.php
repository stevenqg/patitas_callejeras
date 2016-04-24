<?php

/* PCFundationBundle:Admin:solicitudes.html.twig */
class __TwigTemplate_5ae6b21a029059da32b667813c26e0a99c4373f765080850d04f367713210b19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:solicitudes.html.twig", 1);
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
        $__internal_f45b95a528c99fcc5aaae2dfbee06bdd5de159e2b21b52936059e71ffc91074f = $this->env->getExtension("native_profiler");
        $__internal_f45b95a528c99fcc5aaae2dfbee06bdd5de159e2b21b52936059e71ffc91074f->enter($__internal_f45b95a528c99fcc5aaae2dfbee06bdd5de159e2b21b52936059e71ffc91074f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:solicitudes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f45b95a528c99fcc5aaae2dfbee06bdd5de159e2b21b52936059e71ffc91074f->leave($__internal_f45b95a528c99fcc5aaae2dfbee06bdd5de159e2b21b52936059e71ffc91074f_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_38c2a99621a70797003f42399065c70b58fbddeb587974e55d5829a8c76e58a8 = $this->env->getExtension("native_profiler");
        $__internal_38c2a99621a70797003f42399065c70b58fbddeb587974e55d5829a8c76e58a8->enter($__internal_38c2a99621a70797003f42399065c70b58fbddeb587974e55d5829a8c76e58a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "\t<div>
\t\t
\t\t\t<h1 class=\"coloralert\">Solicitudes de Adopción</h1><hr>
\t\t\t<br>
\t\t<div class=\"sectionsile\">
\t\t\t
\t\t\t <table class=\"tabl table-striped\">
              <thead>
                <tr><td class=\"pest\" colspan=\"3\">Adoptante</td>
                </tr>
                <tr class=\"tdb\">
                  <th class=\"tdxs\">#</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th class=\"tdxs\">Edad</th>
                  <th>Cedula</th>
                  <th>Telefono</th>
                  <th>Dirección</th>
                  <th>Correo</th>
                  <th class=\"bdleft tdxs\">responder</th>
                </tr>
              </thead>
              <tbody class=\"tdb\">
              <tr>
                  <td>1</td>
                  <td>Steven</td>
                  <td>quintero</td>
                  <td>12</td>
                  <td>1223534</td>
                  <td>724354</td>
                  <td> B/ villa sasa</td>
                  <td>qunte@hotm...</td>                  
                  <td class=\"bdlef\"><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("pc_admin_pet_solicitudes_date");
        echo "\" id=\"vermas\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"ver datos\"><span class=\"glyphicon glyphicon-new-window\" aria-hidden=\"true\"></span></a></td>
                </tr>
              </tbody>
            </table>

\t\t\t
\t\t</div><!--div close sectionstile 2 -->
\t</div>
\t
";
        
        $__internal_38c2a99621a70797003f42399065c70b58fbddeb587974e55d5829a8c76e58a8->leave($__internal_38c2a99621a70797003f42399065c70b58fbddeb587974e55d5829a8c76e58a8_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:solicitudes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 35,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* 	<div>*/
/* 		*/
/* 			<h1 class="coloralert">Solicitudes de Adopción</h1><hr>*/
/* 			<br>*/
/* 		<div class="sectionsile">*/
/* 			*/
/* 			 <table class="tabl table-striped">*/
/*               <thead>*/
/*                 <tr><td class="pest" colspan="3">Adoptante</td>*/
/*                 </tr>*/
/*                 <tr class="tdb">*/
/*                   <th class="tdxs">#</th>*/
/*                   <th>Nombre</th>*/
/*                   <th>Apellido</th>*/
/*                   <th class="tdxs">Edad</th>*/
/*                   <th>Cedula</th>*/
/*                   <th>Telefono</th>*/
/*                   <th>Dirección</th>*/
/*                   <th>Correo</th>*/
/*                   <th class="bdleft tdxs">responder</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody class="tdb">*/
/*               <tr>*/
/*                   <td>1</td>*/
/*                   <td>Steven</td>*/
/*                   <td>quintero</td>*/
/*                   <td>12</td>*/
/*                   <td>1223534</td>*/
/*                   <td>724354</td>*/
/*                   <td> B/ villa sasa</td>*/
/*                   <td>qunte@hotm...</td>                  */
/*                   <td class="bdlef"><a href="{{path('pc_admin_pet_solicitudes_date')}}" id="vermas" data-toggle="tooltip" data-placement="right" title="ver datos"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span></a></td>*/
/*                 </tr>*/
/*               </tbody>*/
/*             </table>*/
/* */
/* 			*/
/* 		</div><!--div close sectionstile 2 -->*/
/* 	</div>*/
/* 	*/
/* {% endblock %}*/
