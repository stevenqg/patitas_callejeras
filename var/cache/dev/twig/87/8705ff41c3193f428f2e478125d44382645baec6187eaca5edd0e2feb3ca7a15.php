<?php

/* PCFundationBundle:Admin:masc_adoptada.html.twig */
class __TwigTemplate_f8133f562bb31e20f522c24d57401c3e640eead4bea4d0f5b7be39e1b4401615 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:masc_adoptada.html.twig", 1);
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
        $__internal_60e943757dd6b83c03a856af1f1467d39df1ec4d82d6faf7b854c889aff33e00 = $this->env->getExtension("native_profiler");
        $__internal_60e943757dd6b83c03a856af1f1467d39df1ec4d82d6faf7b854c889aff33e00->enter($__internal_60e943757dd6b83c03a856af1f1467d39df1ec4d82d6faf7b854c889aff33e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:masc_adoptada.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60e943757dd6b83c03a856af1f1467d39df1ec4d82d6faf7b854c889aff33e00->leave($__internal_60e943757dd6b83c03a856af1f1467d39df1ec4d82d6faf7b854c889aff33e00_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_d5a835c6e2eb45eaaacb45a5bfe9e8fdf3424ab31a139bb33853f4915c5d5208 = $this->env->getExtension("native_profiler");
        $__internal_d5a835c6e2eb45eaaacb45a5bfe9e8fdf3424ab31a139bb33853f4915c5d5208->enter($__internal_d5a835c6e2eb45eaaacb45a5bfe9e8fdf3424ab31a139bb33853f4915c5d5208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

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
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th class=\"tdxs\">Edad</th>
                  <th>Teléfono</th>
                  <th>Dirección</th>
                  <th>Correo</th>
                  <th class=\"bdleft\">Mascota</th>
                  <th>Edad mascota</th>
                  <th>Estado solicitud</th>
                  <th class=\"tdxs\">visita</th>
                </tr>
              </thead>
              <tbody class=\"tdb\">
              ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adoptions"]) ? $context["adoptions"] : $this->getContext($context, "adoptions")));
        foreach ($context['_seq'] as $context["_key"] => $context["adoption"]) {
            // line 27
            echo "              <tr>
                  <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "user", array()), "name", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "user", array()), "lastName", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "user", array()), "age", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "user", array()), "phone_number", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "user", array()), "address", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "user", array()), "email", array()), "html", null, true);
            echo "</td>
                  <td class=\"bdleft\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "pet", array()), "name", array()), "html", null, true);
            echo "</td>
                  <td class=\"tdxs\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["adoption"], "pet", array()), "age", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["adoption"], "status", array()), "html", null, true);
            echo "</td>
                  
                  <td><a href=\"\" id=\"vermas\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"ver datos\"><span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span></a></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adoption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "              </tbody>
            </table>

\t\t\t
\t\t</div><!--div close sectionstile 2 -->
\t</div>
\t";
        
        $__internal_d5a835c6e2eb45eaaacb45a5bfe9e8fdf3424ab31a139bb33853f4915c5d5208->leave($__internal_d5a835c6e2eb45eaaacb45a5bfe9e8fdf3424ab31a139bb33853f4915c5d5208_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:masc_adoptada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 41,  104 => 36,  100 => 35,  96 => 34,  92 => 33,  88 => 32,  84 => 31,  80 => 30,  76 => 29,  72 => 28,  69 => 27,  65 => 26,  40 => 3,  34 => 2,  11 => 1,);
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
/*                   <th>Nombre</th>*/
/*                   <th>Apellido</th>*/
/*                   <th class="tdxs">Edad</th>*/
/*                   <th>Teléfono</th>*/
/*                   <th>Dirección</th>*/
/*                   <th>Correo</th>*/
/*                   <th class="bdleft">Mascota</th>*/
/*                   <th>Edad mascota</th>*/
/*                   <th>Estado solicitud</th>*/
/*                   <th class="tdxs">visita</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody class="tdb">*/
/*               {% for adoption in adoptions %}*/
/*               <tr>*/
/*                   <td>{{ adoption.user.name }}</td>*/
/*                   <td>{{ adoption.user.lastName }}</td>*/
/*                   <td>{{ adoption.user.age }}</td>*/
/*                   <td>{{ adoption.user.phone_number }}</td>*/
/*                   <td>{{ adoption.user.address }}</td>*/
/*                   <td>{{ adoption.user.email }}</td>*/
/*                   <td class="bdleft">{{ adoption.pet.name }}</td>*/
/*                   <td class="tdxs">{{ adoption.pet.age }}</td>*/
/*                   <td>{{ adoption.status }}</td>*/
/*                   */
/*                   <td><a href="" id="vermas" data-toggle="tooltip" data-placement="right" title="ver datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>*/
/*                 </tr>*/
/*                 {% endfor%}*/
/*               </tbody>*/
/*             </table>*/
/* */
/* 			*/
/* 		</div><!--div close sectionstile 2 -->*/
/* 	</div>*/
/* 	{% endblock %}*/
