<?php

/* PCFundationBundle:Admin:credito_fin.html.twig */
class __TwigTemplate_70d3ed1b50f6d7b97b7e83130f9624f12c7f7a1aeced12d0cb9d1d2fad1e4ab3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:credito_fin.html.twig", 1);
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
        $__internal_5bd77017c44e5473eccc37d80eba7f620ec5eea60b0d569880dd98b0a383e264 = $this->env->getExtension("native_profiler");
        $__internal_5bd77017c44e5473eccc37d80eba7f620ec5eea60b0d569880dd98b0a383e264->enter($__internal_5bd77017c44e5473eccc37d80eba7f620ec5eea60b0d569880dd98b0a383e264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:credito_fin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bd77017c44e5473eccc37d80eba7f620ec5eea60b0d569880dd98b0a383e264->leave($__internal_5bd77017c44e5473eccc37d80eba7f620ec5eea60b0d569880dd98b0a383e264_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_10660c451641b54e69fe7f23bb47cb575f4b86c9de59a8b16519c00360b631ec = $this->env->getExtension("native_profiler");
        $__internal_10660c451641b54e69fe7f23bb47cb575f4b86c9de59a8b16519c00360b631ec->enter($__internal_10660c451641b54e69fe7f23bb47cb575f4b86c9de59a8b16519c00360b631ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "
    <h1 class=\"titulosection\">Creditos Cancelados </h1>
\t<div class=\"sectionstile\">
    <table class=\"tabl table-striped\">
         \t
         <thead>
         \t\t
         \t\t<tr class=\"podingtitle1 text-center\">
         \t\t\t<th>Nombre</th>
         \t\t\t<th>Dirección</th>
         \t\t\t<th>teléfono</th>
         \t\t\t<th>mascota</th>
         \t\t\t<th>Responsable</th>
         \t\t\t<th>referencia</th>
         \t\t\t<th>Monto</th>
         \t\t
         \t\t\t
         \t\t</tr>
         \t</thead>
         \t<tbody>
         \t    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["credits"]) ? $context["credits"] : $this->getContext($context, "credits")));
        foreach ($context['_seq'] as $context["_key"] => $context["credit"]) {
            // line 24
            echo "         \t\t<tr>
         \t\t    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["credit"], "user", array()), "name", array()), "html", null, true);
            echo "</td>
         \t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["credit"], "user", array()), "address", array()), "html", null, true);
            echo "</td>
         \t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["credit"], "user", array()), "phoneNumber", array()), "html", null, true);
            echo "</td>
         \t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["credit"], "pet", array()), "name", array()), "html", null, true);
            echo "</td>
         \t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["credit"], "responsible", array()), "html", null, true);
            echo "</td>
         \t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["credit"], "reference", array()), "html", null, true);
            echo "</td>
         \t\t\t<td>\$";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["credit"], "amount", array()), "html", null, true);
            echo "</td>
         \t\t</tr>
         \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "         \t</tbody>
         </table>
         </div>
         
";
        
        $__internal_10660c451641b54e69fe7f23bb47cb575f4b86c9de59a8b16519c00360b631ec->leave($__internal_10660c451641b54e69fe7f23bb47cb575f4b86c9de59a8b16519c00360b631ec_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:credito_fin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  93 => 31,  89 => 30,  85 => 29,  81 => 28,  77 => 27,  73 => 26,  69 => 25,  66 => 24,  62 => 23,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* */
/*     <h1 class="titulosection">Creditos Cancelados </h1>*/
/* 	<div class="sectionstile">*/
/*     <table class="tabl table-striped">*/
/*          	*/
/*          <thead>*/
/*          		*/
/*          		<tr class="podingtitle1 text-center">*/
/*          			<th>Nombre</th>*/
/*          			<th>Dirección</th>*/
/*          			<th>teléfono</th>*/
/*          			<th>mascota</th>*/
/*          			<th>Responsable</th>*/
/*          			<th>referencia</th>*/
/*          			<th>Monto</th>*/
/*          		*/
/*          			*/
/*          		</tr>*/
/*          	</thead>*/
/*          	<tbody>*/
/*          	    {% for credit in credits %}*/
/*          		<tr>*/
/*          		    <td>{{ credit.user.name }}</td>*/
/*          			<td>{{ credit.user.address }}</td>*/
/*          			<td>{{ credit.user.phoneNumber }}</td>*/
/*          			<td>{{ credit.pet.name  }}</td>*/
/*          			<td>{{ credit.responsible }}</td>*/
/*          			<td>{{ credit.reference }}</td>*/
/*          			<td>${{ credit.amount  }}</td>*/
/*          		</tr>*/
/*          		{% endfor %}*/
/*          	</tbody>*/
/*          </table>*/
/*          </div>*/
/*          */
/* {% endblock %}*/
