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
        $__internal_ffcc6695eb88ccb637b21d0cf56e4b47e26799a57a3908c717650a49040b4810 = $this->env->getExtension("native_profiler");
        $__internal_ffcc6695eb88ccb637b21d0cf56e4b47e26799a57a3908c717650a49040b4810->enter($__internal_ffcc6695eb88ccb637b21d0cf56e4b47e26799a57a3908c717650a49040b4810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:solicitudes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffcc6695eb88ccb637b21d0cf56e4b47e26799a57a3908c717650a49040b4810->leave($__internal_ffcc6695eb88ccb637b21d0cf56e4b47e26799a57a3908c717650a49040b4810_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_fa9a7f42750a91761a8938b30c09515aee06139fd0e94cecf00b1d928f0be8b7 = $this->env->getExtension("native_profiler");
        $__internal_fa9a7f42750a91761a8938b30c09515aee06139fd0e94cecf00b1d928f0be8b7->enter($__internal_fa9a7f42750a91761a8938b30c09515aee06139fd0e94cecf00b1d928f0be8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

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
              ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "              <tr>
                  <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "age", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "identificationNumber", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "phone_number", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "address", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>                  
                  <td class=\"bdlef\"><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_admin_pet_solicitudes_date", array("userId" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" id=\"vermas\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"ver datos\"><span class=\"glyphicon glyphicon-new-window\" aria-hidden=\"true\"></span></a></td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "              </tbody>
            </table>

\t\t\t
\t\t</div><!--div close sectionstile 2 -->
\t</div>
\t
";
        
        $__internal_fa9a7f42750a91761a8938b30c09515aee06139fd0e94cecf00b1d928f0be8b7->leave($__internal_fa9a7f42750a91761a8938b30c09515aee06139fd0e94cecf00b1d928f0be8b7_prof);

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
        return array (  108 => 37,  99 => 34,  95 => 33,  91 => 32,  87 => 31,  83 => 30,  79 => 29,  75 => 28,  71 => 27,  68 => 26,  64 => 25,  40 => 3,  34 => 2,  11 => 1,);
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
/*               {% for user in users %}*/
/*               <tr>*/
/*                   <td>{{ user.name }}</td>*/
/*                   <td>{{ user.lastName }}</td>*/
/*                   <td>{{ user.age }}</td>*/
/*                   <td>{{ user.identificationNumber }}</td>*/
/*                   <td>{{ user.phone_number }}</td>*/
/*                   <td>{{ user.address }}</td>*/
/*                   <td>{{ user.email }}</td>                  */
/*                   <td class="bdlef"><a href="{{path('pc_admin_pet_solicitudes_date', {'userId' : user.id })}}" id="vermas" data-toggle="tooltip" data-placement="right" title="ver datos"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span></a></td>*/
/*               </tr>*/
/*               {% endfor%}*/
/*               </tbody>*/
/*             </table>*/
/* */
/* 			*/
/* 		</div><!--div close sectionstile 2 -->*/
/* 	</div>*/
/* 	*/
/* {% endblock %}*/
