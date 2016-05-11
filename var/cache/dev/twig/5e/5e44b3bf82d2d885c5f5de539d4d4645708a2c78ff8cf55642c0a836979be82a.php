<?php

/* footer.html.twig */
class __TwigTemplate_d2d193a960002541817facd2de55bee84dc21e11bc36175e48db532428488502 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e806c25c689588cc6f07d01f595dae830d3bb0d7714f524ff7a5ae12f461f6ff = $this->env->getExtension("native_profiler");
        $__internal_e806c25c689588cc6f07d01f595dae830d3bb0d7714f524ff7a5ae12f461f6ff->enter($__internal_e806c25c689588cc6f07d01f595dae830d3bb0d7714f524ff7a5ae12f461f6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<footer class=\" backfooter margin\">
\t\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-1\"></div>
\t\t\t<div class=\"col-md-10\">
\t\t\t\t<div class=\"text-cente\">
\t\t\t<a href=\"https://www.facebook.com/\"  type=\"button\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/r11.png"), "html", null, true);
        echo "\" class=\"footwo\" alt=\"facebook\"></a>
\t         <a href=\"https://twitter.com/?lang=es\"  type=\"button\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/r21.png"), "html", null, true);
        echo "\" class=\"footwo\" alt=\"twiter\"></a>
\t         <a href=\"https://www.instagram.com/\" type=\"button\" ><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/r31.png"), "html", null, true);
        echo "\" class=\"footwo\" alt=\"instagram\"></a><br>
\t         <div class=\"pagin\">
\t         \t<ul class=\"list-inline\">
\t         \t\t<li>
\t         \t\t\t<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("pc_fundation_index");
        echo "\"  type=\"button\">Inicio &nbsp;</a><b>|</b>\t
\t         \t\t</li>
\t         \t\t<li>
\t         \t\t\t<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("pc_fundation_adoptar");
        echo "\"  type=\"button\">Adoptar &nbsp;</a><b>|</b>\t
\t         \t\t</li>
\t         \t\t<li>
\t         \t\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("pc_fundation_eventos");
        echo "\" type=\"button\">Eventos &nbsp;</a><b>|</b>
\t         \t\t</li>
\t         \t\t<li>
\t         \t\t\t<a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("pc_fundation_nosotros");
        echo "\"   type=\"button\">Nosotros &nbsp;</a>\t
\t         \t\t</li>
\t         \t</ul>
\t         </div>
\t         <p> Fundación Patitas Callejeras, Org.</p>  
\t         <br>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<div class=\"col-md-1\"></div>
\t\t\t</div>
\t\t\t<div class=\" colfotter row\">
\t\t\t\t
\t\t\t\t<div class=\"col-md-1\"></div>
\t\t\t\t<div class=\" positin col-md-10\">
\t\t\t\t\t  <p><font><font> copyright © 2016. Template: Hainower & Steven </font></font></p>\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1\"></div>
\t\t\t\t
\t\t\t</div>
</footer>";
        
        $__internal_e806c25c689588cc6f07d01f595dae830d3bb0d7714f524ff7a5ae12f461f6ff->leave($__internal_e806c25c689588cc6f07d01f595dae830d3bb0d7714f524ff7a5ae12f461f6ff_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 21,  56 => 18,  50 => 15,  44 => 12,  37 => 8,  33 => 7,  29 => 6,  22 => 1,);
    }
}
/* <footer class=" backfooter margin">*/
/* 			<div class="row">*/
/* 			<div class="col-md-1"></div>*/
/* 			<div class="col-md-10">*/
/* 				<div class="text-cente">*/
/* 			<a href="https://www.facebook.com/"  type="button"><img src="{{asset('public/img/r11.png')}}" class="footwo" alt="facebook"></a>*/
/* 	         <a href="https://twitter.com/?lang=es"  type="button"><img src="{{asset('public/img/r21.png')}}" class="footwo" alt="twiter"></a>*/
/* 	         <a href="https://www.instagram.com/" type="button" ><img src="{{asset('public/img/r31.png')}}" class="footwo" alt="instagram"></a><br>*/
/* 	         <div class="pagin">*/
/* 	         	<ul class="list-inline">*/
/* 	         		<li>*/
/* 	         			<a href="{{ path('pc_fundation_index')}}"  type="button">Inicio &nbsp;</a><b>|</b>	*/
/* 	         		</li>*/
/* 	         		<li>*/
/* 	         			<a href="{{ path('pc_fundation_adoptar')}}"  type="button">Adoptar &nbsp;</a><b>|</b>	*/
/* 	         		</li>*/
/* 	         		<li>*/
/* 	         			<a href="{{path('pc_fundation_eventos')}}" type="button">Eventos &nbsp;</a><b>|</b>*/
/* 	         		</li>*/
/* 	         		<li>*/
/* 	         			<a href="{{ path('pc_fundation_nosotros')}}"   type="button">Nosotros &nbsp;</a>	*/
/* 	         		</li>*/
/* 	         	</ul>*/
/* 	         </div>*/
/* 	         <p> Fundación Patitas Callejeras, Org.</p>  */
/* 	         <br>*/
/* 				</div>*/
/* 				</div>*/
/* 			<div class="col-md-1"></div>*/
/* 			</div>*/
/* 			<div class=" colfotter row">*/
/* 				*/
/* 				<div class="col-md-1"></div>*/
/* 				<div class=" positin col-md-10">*/
/* 					  <p><font><font> copyright © 2016. Template: Hainower & Steven </font></font></p>	*/
/* 				</div>*/
/* 				<div class="col-md-1"></div>*/
/* 				*/
/* 			</div>*/
/* </footer>*/
