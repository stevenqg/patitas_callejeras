<?php

/* PCFundationBundle:Admin:jornada_esteriliza.html.twig */
class __TwigTemplate_cfc821d8f98312c066035711315690b5f931efc82d8f7b6e151d75a2e5fb95ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:jornada_esteriliza.html.twig", 1);
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
        $__internal_c49fa15e6992dfcb756d6992e45e4ba0e6bc3ff464f3d3bf39175b81a0353f55 = $this->env->getExtension("native_profiler");
        $__internal_c49fa15e6992dfcb756d6992e45e4ba0e6bc3ff464f3d3bf39175b81a0353f55->enter($__internal_c49fa15e6992dfcb756d6992e45e4ba0e6bc3ff464f3d3bf39175b81a0353f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:jornada_esteriliza.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c49fa15e6992dfcb756d6992e45e4ba0e6bc3ff464f3d3bf39175b81a0353f55->leave($__internal_c49fa15e6992dfcb756d6992e45e4ba0e6bc3ff464f3d3bf39175b81a0353f55_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_6fb1506d76c982f618bdfb01beea344eaae805c0d0038c9ec02053b86d32eb97 = $this->env->getExtension("native_profiler");
        $__internal_6fb1506d76c982f618bdfb01beea344eaae805c0d0038c9ec02053b86d32eb97->enter($__internal_6fb1506d76c982f618bdfb01beea344eaae805c0d0038c9ec02053b86d32eb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "
\t<h1 class=\"coloralert\"> jornadas esterilizaciones</h1><hr>

\t\t\t<div class=\"sectionstile\">
              <table class=\"table table-hover\">
              <thead>
                <tr class=\"podingtitle1\">
                  <th>Zona</th>
                  <th>Fecha de realización</th>
                  <th>Costo total</th>
                  <th class=\"tdxs\">mas</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meetings"]) ? $context["meetings"] : $this->getContext($context, "meetings")));
        foreach ($context['_seq'] as $context["_key"] => $context["meeting"]) {
            // line 18
            echo "                <tr>
                  <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["meeting"], "meeting", array()), "address", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["meeting"], "control_at", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                  <td>\$";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["meeting"], "totalAmount", array()), "html", null, true);
            echo "</td>
                  <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_admin_esterilizacion", array("meetingId" => $this->getAttribute($this->getAttribute($context["meeting"], "meeting", array()), "id", array()), "controlAt" => twig_date_format_filter($this->env, $this->getAttribute($context["meeting"], "control_at", array()), "m-d-Y"), "amount" => $this->getAttribute($context["meeting"], "totalAmount", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\"><span class=\"coloralert  glyphicon glyphicon-share\" aria-hidden=\"true\"></a></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meeting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "               </tbody>
            </table>
          </div>
";
        
        $__internal_6fb1506d76c982f618bdfb01beea344eaae805c0d0038c9ec02053b86d32eb97->leave($__internal_6fb1506d76c982f618bdfb01beea344eaae805c0d0038c9ec02053b86d32eb97_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:jornada_esteriliza.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  60 => 18,  56 => 17,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* */
/* 	<h1 class="coloralert"> jornadas esterilizaciones</h1><hr>*/
/* */
/* 			<div class="sectionstile">*/
/*               <table class="table table-hover">*/
/*               <thead>*/
/*                 <tr class="podingtitle1">*/
/*                   <th>Zona</th>*/
/*                   <th>Fecha de realización</th>*/
/*                   <th>Costo total</th>*/
/*                   <th class="tdxs">mas</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% for meeting in meetings %}*/
/*                 <tr>*/
/*                   <td>{{ meeting.meeting.address }}</td>*/
/*                   <td>{{ meeting.control_at | date("m/d/Y") }}</td>*/
/*                   <td>${{ meeting.totalAmount }}</td>*/
/*                   <td><a href="{{ path('pc_admin_esterilizacion', {'meetingId' : meeting.meeting.id, 'controlAt' : meeting.control_at | date ("m-d-Y"), 'amount' : meeting.totalAmount} )}}" class="btn btn-default"><span class="coloralert  glyphicon glyphicon-share" aria-hidden="true"></a></td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                </tbody>*/
/*             </table>*/
/*           </div>*/
/* {% endblock %}*/
