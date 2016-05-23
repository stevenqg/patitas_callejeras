<?php

/* PCFundationBundle:Admin:destino_donativo.html.twig */
class __TwigTemplate_1ccf9fada341612a19e746a85f528242a54da8a68d754e6004c6f80b12747580 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:destino_donativo.html.twig", 1);
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
        $__internal_e383db8610e7ed01f5ed7c344988135f7426dc0d5e6bc2b61609d663793df81d = $this->env->getExtension("native_profiler");
        $__internal_e383db8610e7ed01f5ed7c344988135f7426dc0d5e6bc2b61609d663793df81d->enter($__internal_e383db8610e7ed01f5ed7c344988135f7426dc0d5e6bc2b61609d663793df81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:destino_donativo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e383db8610e7ed01f5ed7c344988135f7426dc0d5e6bc2b61609d663793df81d->leave($__internal_e383db8610e7ed01f5ed7c344988135f7426dc0d5e6bc2b61609d663793df81d_prof);

    }

    // line 2
    public function block_capa($context, array $blocks = array())
    {
        $__internal_b8d3003ac9a2aecf0465b5f6ce3c28ef819e16c9ce1eae0bad6b1d9e09debb03 = $this->env->getExtension("native_profiler");
        $__internal_b8d3003ac9a2aecf0465b5f6ce3c28ef819e16c9ce1eae0bad6b1d9e09debb03->enter($__internal_b8d3003ac9a2aecf0465b5f6ce3c28ef819e16c9ce1eae0bad6b1d9e09debb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 3
        echo "
\t\t<h1 class=\"titulosection\">Destino de donativos</h1>
\t<div class=\"sectionstile\">
\t   <div class=\"row\">
\t   ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
      <div class=\"col-md-6\">
        <div class=\"row\">
          
          <div class=\"col-md-3\"><label>Tipo:</label></div>
          <div class=\"col-md-9\"> 
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "que tipo de donativo es?")));
        echo "
          </div>
          </div>
          <br>
          <div class=\"row\">
          <div class=\"col-md-3 text-left\"><label>Fecha:</label></div>
          <div class=\"col-md-9\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "authorizedAt", array()), 'widget');
        echo "<br>
          </div>
          </div><br>
           <div class=\"row\">
          <div class=\"col-md-3\"><label>Descripción:</label></div>
          <div class=\"col-md-9\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "descripción del destino del donativo.")));
        echo "
          </div> 
         </div>
      </div> 
      <div class=\"col-md-6\">
        <div class=\"row\">
          <div class=\"col-md-3\"><label>Monto:</label></div>
          <div class=\"col-md-9\"> 
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "amount", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "si es dinero el monto y si es de otro tipo la cantidad recibida.")));
        echo "
          </div>
          </div>
          <br>
          <div class=\"row\">
          <div class=\"col-md-3\"><label>Autorizado por:</label></div>
          <div class=\"col-md-9\">
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "authorizedBy", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nombre de quien autoriza(ó)")));
        echo "
            </div> 
          </div>
          <br>
      ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Agregar destino", "attr" => array("class" => "btn btn-success")));
        echo "
      </div>
    ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
     </div> 
     <hr>
     
     <table class=\"tabl table-striped\">
       <caption><h3 class=\" margnone titulosection\">Cuantia de activos Actuales</h3></caption>
       <thead>
         <tr>
           <th class=\"tdd cuantostyle\">Monetarios:</th>
           <th class=\"valorstyle\">\$";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["monetaryFounds"]) ? $context["monetaryFounds"] : $this->getContext($context, "monetaryFounds")), "html", null, true);
        echo ".00</th>
           <th class=\"tdd cuantostyle\">Alimentos:</th>
           <th class=\"valorstyle\">";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["foodFounds"]) ? $context["foodFounds"] : $this->getContext($context, "foodFounds")), "html", null, true);
        echo "&nbsp;Kg.</th>
         </tr>
       </thead>
     </table> <br>
     <table class=\"tabl table-striped\">
        <thead>
            <tr class=\"podingtitle1 \">
              <th class=\"tdd\">Tipo:</th>
              <th class=\"tdd\">Monto:</th>
              <th class=\"tdd\">Fecha:</th>
              <th class=\"tdd\">Autorizado por</th>
              <th class=\"tdd\">descripción</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["destinations"]) ? $context["destinations"] : $this->getContext($context, "destinations")));
        foreach ($context['_seq'] as $context["_key"] => $context["destination"]) {
            // line 74
            echo "            <tr>
              <td>
                ";
            // line 76
            if (($this->getAttribute($context["destination"], "type", array()) == "MONETARY")) {
                // line 77
                echo "                monetario
                ";
            } elseif (($this->getAttribute(            // line 78
$context["destination"], "type", array()) == "FOOD")) {
                // line 79
                echo "                alimento
                ";
            } elseif (($this->getAttribute(            // line 80
$context["destination"], "type", array()) == "OTHERS")) {
                // line 81
                echo "                otros
                ";
            }
            // line 83
            echo "              </td>
              <td>
                ";
            // line 85
            if (($this->getAttribute($context["destination"], "type", array()) == "MONETARY")) {
                // line 86
                echo "                \$";
                echo twig_escape_filter($this->env, $this->getAttribute($context["destination"], "amount", array()), "html", null, true);
                echo "
                ";
            } elseif (($this->getAttribute(            // line 87
$context["destination"], "type", array()) == "FOOD")) {
                // line 88
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["destination"], "amount", array()), "html", null, true);
                echo "&nbsp;Kg.
                ";
            } elseif (($this->getAttribute(            // line 89
$context["destination"], "type", array()) == "OTHERS")) {
                // line 90
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["destination"], "amount", array()), "html", null, true);
                echo "
                ";
            }
            // line 92
            echo "              </td>
              <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["destination"], "authorizedAt", array()), "m-d-Y"), "html", null, true);
            echo "</td>
              <td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["destination"], "authorizedBy", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["destination"], "description", array()), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "          </tbody>
         </table> 
\t\t</div>\t
\t

";
        
        $__internal_b8d3003ac9a2aecf0465b5f6ce3c28ef819e16c9ce1eae0bad6b1d9e09debb03->leave($__internal_b8d3003ac9a2aecf0465b5f6ce3c28ef819e16c9ce1eae0bad6b1d9e09debb03_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:destino_donativo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 98,  203 => 95,  199 => 94,  195 => 93,  192 => 92,  186 => 90,  184 => 89,  179 => 88,  177 => 87,  172 => 86,  170 => 85,  166 => 83,  162 => 81,  160 => 80,  157 => 79,  155 => 78,  152 => 77,  150 => 76,  146 => 74,  142 => 73,  124 => 58,  119 => 56,  107 => 47,  102 => 45,  95 => 41,  85 => 34,  74 => 26,  65 => 20,  55 => 13,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block capa %}*/
/* */
/* 		<h1 class="titulosection">Destino de donativos</h1>*/
/* 	<div class="sectionstile">*/
/* 	   <div class="row">*/
/* 	   {{ form_start(form, {'attr' : {'role' : 'form'} }) }}*/
/*       <div class="col-md-6">*/
/*         <div class="row">*/
/*           */
/*           <div class="col-md-3"><label>Tipo:</label></div>*/
/*           <div class="col-md-9"> */
/*             {{form_widget(form.type, {'attr' : {'class' : 'form-control', 'placeholder' : 'que tipo de donativo es?' } })}}*/
/*           </div>*/
/*           </div>*/
/*           <br>*/
/*           <div class="row">*/
/*           <div class="col-md-3 text-left"><label>Fecha:</label></div>*/
/*           <div class="col-md-9">*/
/*             {{ form_widget(form.authorizedAt) }}<br>*/
/*           </div>*/
/*           </div><br>*/
/*            <div class="row">*/
/*           <div class="col-md-3"><label>Descripción:</label></div>*/
/*           <div class="col-md-9">*/
/*             {{form_widget(form.description, {'attr' : {'class' : 'form-control', 'placeholder' : 'descripción del destino del donativo.' } })}}*/
/*           </div> */
/*          </div>*/
/*       </div> */
/*       <div class="col-md-6">*/
/*         <div class="row">*/
/*           <div class="col-md-3"><label>Monto:</label></div>*/
/*           <div class="col-md-9"> */
/*             {{form_widget(form.amount, {'attr' : {'class' : 'form-control', 'placeholder' : 'si es dinero el monto y si es de otro tipo la cantidad recibida.' } })}}*/
/*           </div>*/
/*           </div>*/
/*           <br>*/
/*           <div class="row">*/
/*           <div class="col-md-3"><label>Autorizado por:</label></div>*/
/*           <div class="col-md-9">*/
/*             {{form_widget(form.authorizedBy, {'attr' : {'class' : 'form-control', 'placeholder' : 'nombre de quien autoriza(ó)' } })}}*/
/*             </div> */
/*           </div>*/
/*           <br>*/
/*       {{ form_widget(form.save, {'label' : 'Agregar destino', 'attr' : {'class' : 'btn btn-success'} }) }}*/
/*       </div>*/
/*     {{ form_end(form) }}*/
/*      </div> */
/*      <hr>*/
/*      */
/*      <table class="tabl table-striped">*/
/*        <caption><h3 class=" margnone titulosection">Cuantia de activos Actuales</h3></caption>*/
/*        <thead>*/
/*          <tr>*/
/*            <th class="tdd cuantostyle">Monetarios:</th>*/
/*            <th class="valorstyle">${{monetaryFounds}}.00</th>*/
/*            <th class="tdd cuantostyle">Alimentos:</th>*/
/*            <th class="valorstyle">{{foodFounds}}&nbsp;Kg.</th>*/
/*          </tr>*/
/*        </thead>*/
/*      </table> <br>*/
/*      <table class="tabl table-striped">*/
/*         <thead>*/
/*             <tr class="podingtitle1 ">*/
/*               <th class="tdd">Tipo:</th>*/
/*               <th class="tdd">Monto:</th>*/
/*               <th class="tdd">Fecha:</th>*/
/*               <th class="tdd">Autorizado por</th>*/
/*               <th class="tdd">descripción</th>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             {% for destination in destinations %}*/
/*             <tr>*/
/*               <td>*/
/*                 {% if destination.type == "MONETARY" %}*/
/*                 monetario*/
/*                 {% elseif destination.type == "FOOD" %}*/
/*                 alimento*/
/*                 {% elseif destination.type == "OTHERS" %}*/
/*                 otros*/
/*                 {% endif %}*/
/*               </td>*/
/*               <td>*/
/*                 {% if destination.type == "MONETARY" %}*/
/*                 ${{ destination.amount }}*/
/*                 {% elseif destination.type == "FOOD" %}*/
/*                 {{ destination.amount }}&nbsp;Kg.*/
/*                 {% elseif destination.type == "OTHERS" %}*/
/*                 {{ destination.amount }}*/
/*                 {% endif %}*/
/*               </td>*/
/*               <td>{{ destination.authorizedAt | date('m-d-Y')  }}</td>*/
/*               <td>{{ destination.authorizedBy }}</td>*/
/*               <td>{{ destination.description }}</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*           </tbody>*/
/*          </table> */
/* 		</div>	*/
/* 	*/
/* */
/* {% endblock %}*/
