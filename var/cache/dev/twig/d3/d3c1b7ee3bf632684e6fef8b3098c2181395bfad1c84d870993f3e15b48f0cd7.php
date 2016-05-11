<?php

/* PCFundationBundle:Admin:creditos.html.twig */
class __TwigTemplate_d759147c2b20be16486c51607ef3baaaa23f5e965b0ae0a8563d51d614e22ed6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:creditos.html.twig", 1);
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
        $__internal_e1104bede5f0411c1cb0ef7a1ee52c5baa532e1addde661f41a6373916aeaf3a = $this->env->getExtension("native_profiler");
        $__internal_e1104bede5f0411c1cb0ef7a1ee52c5baa532e1addde661f41a6373916aeaf3a->enter($__internal_e1104bede5f0411c1cb0ef7a1ee52c5baa532e1addde661f41a6373916aeaf3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:creditos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1104bede5f0411c1cb0ef7a1ee52c5baa532e1addde661f41a6373916aeaf3a->leave($__internal_e1104bede5f0411c1cb0ef7a1ee52c5baa532e1addde661f41a6373916aeaf3a_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_bdfcaf951cabc6997c8c9db9e21fbcf1d7469d72277f79eda806454dcf415474 = $this->env->getExtension("native_profiler");
        $__internal_bdfcaf951cabc6997c8c9db9e21fbcf1d7469d72277f79eda806454dcf415474->enter($__internal_bdfcaf951cabc6997c8c9db9e21fbcf1d7469d72277f79eda806454dcf415474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "
    <h1 class=\"titulosection\">Creditos de emergencia </h1>
\t<div class=\"sectionstile\">
    <table class=\"tabl table-striped\">
         \t
         <thead>
         \t\t
         \t\t<tr class=\"podingtitle1 text-center\">
         \t\t\t<th>Nombre</th>
         \t\t\t<th>Dirección</th>
         \t\t\t<th>telefono</th>
         \t\t\t<th>Responsable</th>
         \t\t\t<th>referencia</th>
         \t\t\t<th>Monto</th>
         \t\t\t<th>cancelar</th>
         \t\t\t
         \t\t</tr>
         \t</thead>
         \t<tbody>
         \t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["credits"]) ? $context["credits"] : $this->getContext($context, "credits")));
        foreach ($context['_seq'] as $context["_key"] => $context["credit"]) {
            // line 23
            echo "         \t\t<tr>
         \t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["credit"], "user", array()), "name", array()), "html", null, true);
            echo "</td>
         \t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["credit"], "user", array()), "address", array()), "html", null, true);
            echo "</td>
         \t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["credit"], "user", array()), "phoneNumber", array()), "html", null, true);
            echo "</td>
         \t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["credit"], "responsible", array()), "html", null, true);
            echo "</td>
         \t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["credit"], "reference", array()), "html", null, true);
            echo "</td>
         \t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["credit"], "amount", array()), "html", null, true);
            echo "</td>
         \t\t\t<td class=\"tdxs\"><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_administrator_creditos_cancelar", array("creditId" => $this->getAttribute($context["credit"], "id", array()))), "html", null, true);
            echo "\" onclick=\"window.open(this.href, this.target,'width=360,height=500'); return false\" class=\"btn btn-default \"><span class=\"coloralert   glyphicon glyphicon-usd\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" aria-hidden=\"true\" data-original-title=\"pagar credito\"></span></a></td>
         \t\t</tr>
         \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "         \t</tbody>
         </table>
         </div>
         
";
        
        $__internal_bdfcaf951cabc6997c8c9db9e21fbcf1d7469d72277f79eda806454dcf415474->leave($__internal_bdfcaf951cabc6997c8c9db9e21fbcf1d7469d72277f79eda806454dcf415474_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:creditos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 33,  92 => 30,  88 => 29,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  68 => 24,  65 => 23,  61 => 22,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* */
/*     <h1 class="titulosection">Creditos de emergencia </h1>*/
/* 	<div class="sectionstile">*/
/*     <table class="tabl table-striped">*/
/*          	*/
/*          <thead>*/
/*          		*/
/*          		<tr class="podingtitle1 text-center">*/
/*          			<th>Nombre</th>*/
/*          			<th>Dirección</th>*/
/*          			<th>telefono</th>*/
/*          			<th>Responsable</th>*/
/*          			<th>referencia</th>*/
/*          			<th>Monto</th>*/
/*          			<th>cancelar</th>*/
/*          			*/
/*          		</tr>*/
/*          	</thead>*/
/*          	<tbody>*/
/*          		{% for credit in credits %}*/
/*          		<tr>*/
/*          			<td>{{ credit.user.name }}</td>*/
/*          			<td>{{ credit.user.address }}</td>*/
/*          			<td>{{ credit.user.phoneNumber }}</td>*/
/*          			<td>{{ credit.responsible  }}</td>*/
/*          			<td>{{ credit.reference }}</td>*/
/*          			<td>{{ credit.amount  }}</td>*/
/*          			<td class="tdxs"><a href="{{ path('pc_administrator_creditos_cancelar', {'creditId' : credit.id}) }}" onclick="window.open(this.href, this.target,'width=360,height=500'); return false" class="btn btn-default "><span class="coloralert   glyphicon glyphicon-usd" data-toggle="tooltip" data-placement="top" title="" aria-hidden="true" data-original-title="pagar credito"></span></a></td>*/
/*          		</tr>*/
/*          		{% endfor %}*/
/*          	</tbody>*/
/*          </table>*/
/*          </div>*/
/*          */
/* {% endblock %}*/
