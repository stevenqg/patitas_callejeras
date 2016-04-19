<?php

/* PCFundationBundle:fundation:encuesta.html.twig */
class __TwigTemplate_664a44c8d4bea6799e517a6594624204eb44784a46a9eeeb01155750471e95c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html.twig", "PCFundationBundle:fundation:encuesta.html.twig", 2);
        $this->blocks = array(
            'scroll_nav' => array($this, 'block_scroll_nav'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be701b0948b761fc4268a3ad78be847047e04437debbd3b398da553daf5ff349 = $this->env->getExtension("native_profiler");
        $__internal_be701b0948b761fc4268a3ad78be847047e04437debbd3b398da553daf5ff349->enter($__internal_be701b0948b761fc4268a3ad78be847047e04437debbd3b398da553daf5ff349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:encuesta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be701b0948b761fc4268a3ad78be847047e04437debbd3b398da553daf5ff349->leave($__internal_be701b0948b761fc4268a3ad78be847047e04437debbd3b398da553daf5ff349_prof);

    }

    // line 3
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_8918b4f9b84250810a130595c713151fd790a27161ab2af2f6cfe482ee354ad9 = $this->env->getExtension("native_profiler");
        $__internal_8918b4f9b84250810a130595c713151fd790a27161ab2af2f6cfe482ee354ad9->enter($__internal_8918b4f9b84250810a130595c713151fd790a27161ab2af2f6cfe482ee354ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_8918b4f9b84250810a130595c713151fd790a27161ab2af2f6cfe482ee354ad9->leave($__internal_8918b4f9b84250810a130595c713151fd790a27161ab2af2f6cfe482ee354ad9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_466400949a40d18f02d7413671b1a2bc720db6d3481c7a655402599f47d6c75b = $this->env->getExtension("native_profiler");
        $__internal_466400949a40d18f02d7413671b1a2bc720db6d3481c7a655402599f47d6c75b->enter($__internal_466400949a40d18f02d7413671b1a2bc720db6d3481c7a655402599f47d6c75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div class=\"row\">
\t\t<div class=\"col-md-1\"></div>
\t\t<div class=\"col-md-10\">
\t\t\t<img class=\"posrigth\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/logo.png"), "html", null, true);
        echo "\"  alt=\"logo\">
\t\t</div>
\t\t<div class=\"col-md-1\"></div>
\t</div>
\t\t<div class=\"liner\"></div>
<body>
\t<iframe class=\"encuestaestile\" src=\"https://docs.google.com/forms/d/1h7QP6Zq4FdxyWfApP34ptDkIqG2UyhEun5WMKQ3Zqcc/viewform?embedded=true\"></iframe>
</body>

";
        
        $__internal_466400949a40d18f02d7413671b1a2bc720db6d3481c7a655402599f47d6c75b->leave($__internal_466400949a40d18f02d7413671b1a2bc720db6d3481c7a655402599f47d6c75b_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ed35e5ef1e5291bf7dd261ae57815a75d17ed74d7660bb41812aa35ec91a1227 = $this->env->getExtension("native_profiler");
        $__internal_ed35e5ef1e5291bf7dd261ae57815a75d17ed74d7660bb41812aa35ec91a1227->enter($__internal_ed35e5ef1e5291bf7dd261ae57815a75d17ed74d7660bb41812aa35ec91a1227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_ed35e5ef1e5291bf7dd261ae57815a75d17ed74d7660bb41812aa35ec91a1227->leave($__internal_ed35e5ef1e5291bf7dd261ae57815a75d17ed74d7660bb41812aa35ec91a1227_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:fundation:encuesta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  58 => 9,  53 => 6,  47 => 5,  36 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "layout.html.twig" %}*/
/* {% block scroll_nav %}*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div class="row">*/
/* 		<div class="col-md-1"></div>*/
/* 		<div class="col-md-10">*/
/* 			<img class="posrigth" src="{{ asset('public/img/logo.png') }}"  alt="logo">*/
/* 		</div>*/
/* 		<div class="col-md-1"></div>*/
/* 	</div>*/
/* 		<div class="liner"></div>*/
/* <body>*/
/* 	<iframe class="encuestaestile" src="https://docs.google.com/forms/d/1h7QP6Zq4FdxyWfApP34ptDkIqG2UyhEun5WMKQ3Zqcc/viewform?embedded=true"></iframe>*/
/* </body>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* {% endblock %}*/
