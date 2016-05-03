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
        $__internal_54b032bf57c52320861f4fcc4a7e02421a2e6a7f834c8c7ff17266a70274279e = $this->env->getExtension("native_profiler");
        $__internal_54b032bf57c52320861f4fcc4a7e02421a2e6a7f834c8c7ff17266a70274279e->enter($__internal_54b032bf57c52320861f4fcc4a7e02421a2e6a7f834c8c7ff17266a70274279e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:jornada_esteriliza.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54b032bf57c52320861f4fcc4a7e02421a2e6a7f834c8c7ff17266a70274279e->leave($__internal_54b032bf57c52320861f4fcc4a7e02421a2e6a7f834c8c7ff17266a70274279e_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_3305f9110650ef3f1727d09deda4358c48bf9fa9484c3511ee4552e79a05d6f0 = $this->env->getExtension("native_profiler");
        $__internal_3305f9110650ef3f1727d09deda4358c48bf9fa9484c3511ee4552e79a05d6f0->enter($__internal_3305f9110650ef3f1727d09deda4358c48bf9fa9484c3511ee4552e79a05d6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "
\t<h1 class=\"coloralert\"> jornadas esterilizaciones</h1><hr>

\t\t\t<div class=\"sectionstile\">
             <br>
           <table class=\"table table-hover\">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Zona</th>
                  <th>FEcha de realización</th>
                  <th>\$ costo total</th>
                  <th class=\"tdxs\">mas</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>comuna 2 distrito</td>
                  <td>09/09/2012</td>
                  <td>\$ 450.000</td>
                  <td><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("pc_admin_esterilizacion");
        echo "\" class=\"btn btn-default\"><span class=\"coloralert  glyphicon glyphicon-share\" aria-hidden=\"true\"></a></td>
                </tr>
               </tbody>
            </table>
          </div>
";
        
        $__internal_3305f9110650ef3f1727d09deda4358c48bf9fa9484c3511ee4552e79a05d6f0->leave($__internal_3305f9110650ef3f1727d09deda4358c48bf9fa9484c3511ee4552e79a05d6f0_prof);

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
        return array (  63 => 24,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* */
/* 	<h1 class="coloralert"> jornadas esterilizaciones</h1><hr>*/
/* */
/* 			<div class="sectionstile">*/
/*              <br>*/
/*            <table class="table table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <th>#</th>*/
/*                   <th>Zona</th>*/
/*                   <th>FEcha de realización</th>*/
/*                   <th>$ costo total</th>*/
/*                   <th class="tdxs">mas</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 <tr>*/
/*                   <td>1</td>*/
/*                   <td>comuna 2 distrito</td>*/
/*                   <td>09/09/2012</td>*/
/*                   <td>$ 450.000</td>*/
/*                   <td><a href="{{ path('pc_admin_esterilizacion')}}" class="btn btn-default"><span class="coloralert  glyphicon glyphicon-share" aria-hidden="true"></a></td>*/
/*                 </tr>*/
/*                </tbody>*/
/*             </table>*/
/*           </div>*/
/* {% endblock %}*/
