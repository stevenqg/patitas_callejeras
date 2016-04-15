<?php

/* PCFundationBundle:fundation:comedogs.html.twig */
class __TwigTemplate_615beea4958deea148cb827d8ca752a4bb317e4c6d7dc6b78da7ab3e4fc2149f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PCFundationBundle:fundation:comedogs.html.twig", 1);
        $this->blocks = array(
            'scroll_nav' => array($this, 'block_scroll_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d6dd6ac15451e2ece57f5cc118f59378e900af1f4da6493a30cc62036976863 = $this->env->getExtension("native_profiler");
        $__internal_1d6dd6ac15451e2ece57f5cc118f59378e900af1f4da6493a30cc62036976863->enter($__internal_1d6dd6ac15451e2ece57f5cc118f59378e900af1f4da6493a30cc62036976863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:comedogs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d6dd6ac15451e2ece57f5cc118f59378e900af1f4da6493a30cc62036976863->leave($__internal_1d6dd6ac15451e2ece57f5cc118f59378e900af1f4da6493a30cc62036976863_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_7196a072c7c06c63e7d269344ef3347027a5890f62636aed4f238118ff755a95 = $this->env->getExtension("native_profiler");
        $__internal_7196a072c7c06c63e7d269344ef3347027a5890f62636aed4f238118ff755a95->enter($__internal_7196a072c7c06c63e7d269344ef3347027a5890f62636aed4f238118ff755a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_7196a072c7c06c63e7d269344ef3347027a5890f62636aed4f238118ff755a95->leave($__internal_7196a072c7c06c63e7d269344ef3347027a5890f62636aed4f238118ff755a95_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bd952c679f9ac555eafe179df307f678d03e1749a88f1414dde61b1de22be0b = $this->env->getExtension("native_profiler");
        $__internal_0bd952c679f9ac555eafe179df307f678d03e1749a88f1414dde61b1de22be0b->enter($__internal_0bd952c679f9ac555eafe179df307f678d03e1749a88f1414dde61b1de22be0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-md-1\"></div>
\t\t<div class=\"col-md-10\">
\t\t\t<img class=\"posrigth\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\">
\t\t\t<img  class=\"logocomedog\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/comedog.png"), "html", null, true);
        echo "\"><img class=\"titlecome\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/titcome.png"), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"col-md-1\"></div>
\t</div>
\t<div class=\"liner\"></div>
\t
\t\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr>
\t\t\t\t  \t\t<td><label>Nombre:</label></td>
\t\t\t\t  \t\t<td><span> Cristian Arbelaez Duque. </span></td>
\t\t\t\t\t\t</tr>
\t\t\t\t 
\t\t\t\t\t\t<tr>
\t\t\t\t  \t\t<td><label>Email:</label></td>
\t\t\t\t  \t\t<td><span> <a \"email me\">cristinaarbelaezcsp@hotmail.com</a></span></td>
\t\t\t\t\t\t</tr>
\t\t\t\t 
\t\t\t\t\t\t<tr>
\t\t\t\t  \t\t<td><label>Tel:</label></td>
\t\t\t\t\t  \t<td><span> 314 883 6159.</span></td>
\t\t\t\t\t\t</tr>
\t\t\t  \t\t</table>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr>
\t\t\t\t  \t\t<td><label>Nombre:</label></td>
\t\t\t\t  \t\t<td><span> Katheryn Tatiana Patiño. </span></td>
\t\t\t\t\t\t</tr>
\t\t\t\t 
\t\t\t\t\t\t<tr>
\t\t\t\t  \t\t<td><label>Email:</label></td>
\t\t\t\t  \t\t<td><span> <a \"email me\">katheryn_tatiana@hotmail.com</a></span></td>
\t\t\t\t\t\t</tr>
\t\t\t\t 
\t\t\t\t\t\t<tr>
\t\t\t\t  \t\t<td><label>Tel:</label></td>
\t\t\t\t\t  \t<td><span> 316 787 3734.</span></td>
\t\t\t\t\t\t</tr>
\t\t\t  \t\t</table>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr>
\t\t\t\t  \t\t<td><label>Nombre:</label></td>
\t\t\t\t  \t\t<td><span> Juliana Andrea Bedoya. </span></td>
\t\t\t\t\t\t</tr>
\t\t\t\t 
\t\t\t\t\t\t<tr>
\t\t\t\t  \t\t<td><label>Email:</label></td>
\t\t\t\t  \t\t<td><span> <a \"email me\">Julisbedoya0612@gmail.com</a></span></td>
\t\t\t\t\t\t</tr>
\t\t\t\t 
\t\t\t\t\t\t<tr>
\t\t\t\t  \t\t<td><label>Tel:</label></td>
\t\t\t\t\t  \t<td><span>320 775 6822</span></td>
\t\t\t\t\t\t</tr>
\t\t\t  \t\t</table>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr>
\t\t\t\t  \t\t<td><label>Nombre:</label></td>
\t\t\t\t  \t\t<td><span>Carlos José Ángel</span></td>
\t\t\t\t\t\t</tr>
\t\t\t\t 
\t\t\t\t\t\t<tr>
\t\t\t\t  \t\t<td><label>Email:</label></td>
\t\t\t\t  \t\t<td><span> <a \"email me\">xicodeliacj@hotmal.com</a></span></td>
\t\t\t\t\t\t</tr>
\t\t\t\t 
\t\t\t\t\t\t<tr>
\t\t\t\t  \t\t<td><label>Tel:</label></td>
\t\t\t\t\t  \t<td><span>310 441 6976</span></td>
\t\t\t\t\t\t</tr>
\t\t\t  \t\t</table>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr>
\t\t\t\t  \t\t<td><label>Nombre:</label></td>
\t\t\t\t  \t\t<td><span>Gloria Cristina Valencia Isaza</span></td>
\t\t\t\t\t\t</tr>
\t\t\t\t 
\t\t\t\t\t\t<tr>
\t\t\t\t  \t\t<td><label>Email:</label></td>
\t\t\t\t  \t\t<td><span> <a \"email me\">soporte@systemlife.com.co</a></span></td>
\t\t\t\t\t\t</tr>
\t\t\t\t 
\t\t\t\t\t\t<tr>
\t\t\t\t  \t\t<td><label>Tel:</label></td>
\t\t\t\t\t  \t<td><span>310 519 3887</span></td>
\t\t\t\t\t\t</tr>
\t\t\t  \t\t</table>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr>
\t\t\t\t  \t\t<td><label>Nombre:</label></td>
\t\t\t\t  \t\t<td><span>Leonela Serna Beltran</span></td>
\t\t\t\t\t\t</tr>
\t\t\t\t 
\t\t\t\t\t\t<tr>
\t\t\t\t  \t\t<td><label>Email:</label></td>
\t\t\t\t  \t\t<td><span> <a \"email me\">leonelaserna@gmail.com</a></span></td>
\t\t\t\t\t\t</tr>
\t\t\t\t 
\t\t\t\t\t\t<tr>
\t\t\t\t  \t\t<td><label>Tel:</label></td>
\t\t\t\t\t  \t<td><span> 314 883 6159.</span></td>
\t\t\t\t\t\t</tr>
\t\t\t  \t\t</table>
\t\t\t\t</div>
     \t</div>
\t\t<div class=\"col-md-6\">
\t\t\t  <div class=\"contenmap\" id=\"mymap\"></div>
     \t</div>
\t</div>
";
        
        $__internal_0bd952c679f9ac555eafe179df307f678d03e1749a88f1414dde61b1de22be0b->leave($__internal_0bd952c679f9ac555eafe179df307f678d03e1749a88f1414dde61b1de22be0b_prof);

    }

    // line 132
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86d18e02f50cd839868d8e082baf094ac03b16b35c4e401035da87e67ae550ff = $this->env->getExtension("native_profiler");
        $__internal_86d18e02f50cd839868d8e082baf094ac03b16b35c4e401035da87e67ae550ff->enter($__internal_86d18e02f50cd839868d8e082baf094ac03b16b35c4e401035da87e67ae550ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 133
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script async defer
      src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyARyp3ONt4Ax4J7JBBC8bFggOp4zntwd-s&callback=initMap"), "html", null, true);
        echo "\">
    </script>
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jsgoogle.js"), "html", null, true);
        echo "\"  ></script>
";
        
        $__internal_86d18e02f50cd839868d8e082baf094ac03b16b35c4e401035da87e67ae550ff->leave($__internal_86d18e02f50cd839868d8e082baf094ac03b16b35c4e401035da87e67ae550ff_prof);

    }

    // line 139
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a431fbf2d628e030def12b051d741c3dcc0ece7eff0b4cc1e26e6ef9ffeffca3 = $this->env->getExtension("native_profiler");
        $__internal_a431fbf2d628e030def12b051d741c3dcc0ece7eff0b4cc1e26e6ef9ffeffca3->enter($__internal_a431fbf2d628e030def12b051d741c3dcc0ece7eff0b4cc1e26e6ef9ffeffca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_a431fbf2d628e030def12b051d741c3dcc0ece7eff0b4cc1e26e6ef9ffeffca3->leave($__internal_a431fbf2d628e030def12b051d741c3dcc0ece7eff0b4cc1e26e6ef9ffeffca3_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:fundation:comedogs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 139,  211 => 137,  206 => 135,  201 => 133,  195 => 132,  64 => 10,  60 => 9,  54 => 5,  48 => 4,  37 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block scroll_nav %}*/
/* {% endblock %}*/
/* {% block body %}*/
/* */
/* 	<div class="row">*/
/* 		<div class="col-md-1"></div>*/
/* 		<div class="col-md-10">*/
/* 			<img class="posrigth" src="{{ asset('public/img/logo.png') }}" alt="logo">*/
/* 			<img  class="logocomedog" src="{{ asset('public/img/comedog.png') }}"><img class="titlecome" src="{{ asset('public/img/titcome.png') }}">*/
/* 		</div>*/
/* 		<div class="col-md-1"></div>*/
/* 	</div>*/
/* 	<div class="liner"></div>*/
/* 	*/
/* 		<div class="row">*/
/* 		<div class="col-md-6">*/
/* 				<div class="col-md-6">*/
/* 					<table>*/
/* 						<tr>*/
/* 				  		<td><label>Nombre:</label></td>*/
/* 				  		<td><span> Cristian Arbelaez Duque. </span></td>*/
/* 						</tr>*/
/* 				 */
/* 						<tr>*/
/* 				  		<td><label>Email:</label></td>*/
/* 				  		<td><span> <a "email me">cristinaarbelaezcsp@hotmail.com</a></span></td>*/
/* 						</tr>*/
/* 				 */
/* 						<tr>*/
/* 				  		<td><label>Tel:</label></td>*/
/* 					  	<td><span> 314 883 6159.</span></td>*/
/* 						</tr>*/
/* 			  		</table>*/
/* 				</div>*/
/* 				<div class="col-md-6">*/
/* 					<table>*/
/* 						<tr>*/
/* 				  		<td><label>Nombre:</label></td>*/
/* 				  		<td><span> Katheryn Tatiana Patiño. </span></td>*/
/* 						</tr>*/
/* 				 */
/* 						<tr>*/
/* 				  		<td><label>Email:</label></td>*/
/* 				  		<td><span> <a "email me">katheryn_tatiana@hotmail.com</a></span></td>*/
/* 						</tr>*/
/* 				 */
/* 						<tr>*/
/* 				  		<td><label>Tel:</label></td>*/
/* 					  	<td><span> 316 787 3734.</span></td>*/
/* 						</tr>*/
/* 			  		</table>*/
/* 				</div>*/
/* 				<div class="col-md-6">*/
/* 					<table>*/
/* 						<tr>*/
/* 				  		<td><label>Nombre:</label></td>*/
/* 				  		<td><span> Juliana Andrea Bedoya. </span></td>*/
/* 						</tr>*/
/* 				 */
/* 						<tr>*/
/* 				  		<td><label>Email:</label></td>*/
/* 				  		<td><span> <a "email me">Julisbedoya0612@gmail.com</a></span></td>*/
/* 						</tr>*/
/* 				 */
/* 						<tr>*/
/* 				  		<td><label>Tel:</label></td>*/
/* 					  	<td><span>320 775 6822</span></td>*/
/* 						</tr>*/
/* 			  		</table>*/
/* 				</div>*/
/* 				<div class="col-md-6">*/
/* 					<table>*/
/* 						<tr>*/
/* 				  		<td><label>Nombre:</label></td>*/
/* 				  		<td><span>Carlos José Ángel</span></td>*/
/* 						</tr>*/
/* 				 */
/* 						<tr>*/
/* 				  		<td><label>Email:</label></td>*/
/* 				  		<td><span> <a "email me">xicodeliacj@hotmal.com</a></span></td>*/
/* 						</tr>*/
/* 				 */
/* 						<tr>*/
/* 				  		<td><label>Tel:</label></td>*/
/* 					  	<td><span>310 441 6976</span></td>*/
/* 						</tr>*/
/* 			  		</table>*/
/* 				</div>*/
/* 				<div class="col-md-6">*/
/* 					<table>*/
/* 						<tr>*/
/* 				  		<td><label>Nombre:</label></td>*/
/* 				  		<td><span>Gloria Cristina Valencia Isaza</span></td>*/
/* 						</tr>*/
/* 				 */
/* 						<tr>*/
/* 				  		<td><label>Email:</label></td>*/
/* 				  		<td><span> <a "email me">soporte@systemlife.com.co</a></span></td>*/
/* 						</tr>*/
/* 				 */
/* 						<tr>*/
/* 				  		<td><label>Tel:</label></td>*/
/* 					  	<td><span>310 519 3887</span></td>*/
/* 						</tr>*/
/* 			  		</table>*/
/* 				</div>*/
/* 				<div class="col-md-6">*/
/* 					<table>*/
/* 						<tr>*/
/* 				  		<td><label>Nombre:</label></td>*/
/* 				  		<td><span>Leonela Serna Beltran</span></td>*/
/* 						</tr>*/
/* 				 */
/* 						<tr>*/
/* 				  		<td><label>Email:</label></td>*/
/* 				  		<td><span> <a "email me">leonelaserna@gmail.com</a></span></td>*/
/* 						</tr>*/
/* 				 */
/* 						<tr>*/
/* 				  		<td><label>Tel:</label></td>*/
/* 					  	<td><span> 314 883 6159.</span></td>*/
/* 						</tr>*/
/* 			  		</table>*/
/* 				</div>*/
/*      	</div>*/
/* 		<div class="col-md-6">*/
/* 			  <div class="contenmap" id="mymap"></div>*/
/*      	</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* 	<script async defer*/
/*       src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyARyp3ONt4Ax4J7JBBC8bFggOp4zntwd-s&callback=initMap') }}">*/
/*     </script>*/
/*     <script src="{{ asset('public/js/jsgoogle.js') }}"  ></script>*/
/* {% endblock %}*/
/* {% block footer %}*/
/* {% endblock %}*/
