<?php

/* PCFundationBundle:Admin:masc_adopatada.html.twig */
class __TwigTemplate_a03dbfd67b093b6191fd602c6fd73773ada6caa3e7a8e95c1b062017c8b10e6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:masc_adopatada.html.twig", 1);
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
        $__internal_f36c453559deb3f869c7ee51b55cdd63f6b8452115406684c314423bc9b0d6c0 = $this->env->getExtension("native_profiler");
        $__internal_f36c453559deb3f869c7ee51b55cdd63f6b8452115406684c314423bc9b0d6c0->enter($__internal_f36c453559deb3f869c7ee51b55cdd63f6b8452115406684c314423bc9b0d6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:masc_adopatada.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f36c453559deb3f869c7ee51b55cdd63f6b8452115406684c314423bc9b0d6c0->leave($__internal_f36c453559deb3f869c7ee51b55cdd63f6b8452115406684c314423bc9b0d6c0_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_01e3d13f1efa15c3458154819b7a706f74185f3d1f0d4116ccfb43c4c076147c = $this->env->getExtension("native_profiler");
        $__internal_01e3d13f1efa15c3458154819b7a706f74185f3d1f0d4116ccfb43c4c076147c->enter($__internal_01e3d13f1efa15c3458154819b7a706f74185f3d1f0d4116ccfb43c4c076147c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "\t\t
\t\t\t<h1 class=\"coloralert\">Mascotas Adoptadas</h1><hr>
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
                  <th>Telefono</th>
                  <th>Dirección</th>
                  <th>Correo</th>
                  <th class=\"bdleft\">Mascota</th>
                  <th>Edad</th>
                  <th class=\"tdxs\">visita</th>
                </tr>
              </thead>
              <tbody class=\"tdb\">
              <tr>
                  <td>1</td>
                  <td>Steven</td>
                  <td>quintero</td>
                  <td>12</td>
                  <td>724354</td>
                  <td> B/ villa sasa</td>
                  <td>qunte@hotm...</td>
                  <td class=\"bdleft\">steven</td>
                  <td class=\"tdxs\">5</td>
                  
                  <td><a href=\"\" id=\"vermas\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"ver datos\"><span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span></a></td>
                </tr>
              </tbody>
            </table>

\t\t\t
\t\t</div><!--div close sectionstile 2 -->
\t</div>
\t";
        
        $__internal_01e3d13f1efa15c3458154819b7a706f74185f3d1f0d4116ccfb43c4c076147c->leave($__internal_01e3d13f1efa15c3458154819b7a706f74185f3d1f0d4116ccfb43c4c076147c_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:masc_adopatada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* 		*/
/* 			<h1 class="coloralert">Mascotas Adoptadas</h1><hr>*/
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
/*                   <th>Telefono</th>*/
/*                   <th>Dirección</th>*/
/*                   <th>Correo</th>*/
/*                   <th class="bdleft">Mascota</th>*/
/*                   <th>Edad</th>*/
/*                   <th class="tdxs">visita</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody class="tdb">*/
/*               <tr>*/
/*                   <td>1</td>*/
/*                   <td>Steven</td>*/
/*                   <td>quintero</td>*/
/*                   <td>12</td>*/
/*                   <td>724354</td>*/
/*                   <td> B/ villa sasa</td>*/
/*                   <td>qunte@hotm...</td>*/
/*                   <td class="bdleft">steven</td>*/
/*                   <td class="tdxs">5</td>*/
/*                   */
/*                   <td><a href="" id="vermas" data-toggle="tooltip" data-placement="right" title="ver datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>*/
/*                 </tr>*/
/*               </tbody>*/
/*             </table>*/
/* */
/* 			*/
/* 		</div><!--div close sectionstile 2 -->*/
/* 	</div>*/
/* 	{% endblock %}*/
