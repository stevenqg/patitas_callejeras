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
        $__internal_7fe38de65d3d4e4df264e418f4564dac2443ecca1da2a37e7d5bebecb200eb1a = $this->env->getExtension("native_profiler");
        $__internal_7fe38de65d3d4e4df264e418f4564dac2443ecca1da2a37e7d5bebecb200eb1a->enter($__internal_7fe38de65d3d4e4df264e418f4564dac2443ecca1da2a37e7d5bebecb200eb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:encuesta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fe38de65d3d4e4df264e418f4564dac2443ecca1da2a37e7d5bebecb200eb1a->leave($__internal_7fe38de65d3d4e4df264e418f4564dac2443ecca1da2a37e7d5bebecb200eb1a_prof);

    }

    // line 3
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_d18862c502165c72f8759ec69a5a7a0a05054fac1f718ac6894a04d79be3ff58 = $this->env->getExtension("native_profiler");
        $__internal_d18862c502165c72f8759ec69a5a7a0a05054fac1f718ac6894a04d79be3ff58->enter($__internal_d18862c502165c72f8759ec69a5a7a0a05054fac1f718ac6894a04d79be3ff58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_d18862c502165c72f8759ec69a5a7a0a05054fac1f718ac6894a04d79be3ff58->leave($__internal_d18862c502165c72f8759ec69a5a7a0a05054fac1f718ac6894a04d79be3ff58_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9f86d6d55e75e4536a34bb99af0021e75568db4041cc4ac0c433b208da2712f = $this->env->getExtension("native_profiler");
        $__internal_c9f86d6d55e75e4536a34bb99af0021e75568db4041cc4ac0c433b208da2712f->enter($__internal_c9f86d6d55e75e4536a34bb99af0021e75568db4041cc4ac0c433b208da2712f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c9f86d6d55e75e4536a34bb99af0021e75568db4041cc4ac0c433b208da2712f->leave($__internal_c9f86d6d55e75e4536a34bb99af0021e75568db4041cc4ac0c433b208da2712f_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_63d8d088c85436a29cdfffd9d9c072fb57f7253a9a2b3d4e2fb5631c92d275e2 = $this->env->getExtension("native_profiler");
        $__internal_63d8d088c85436a29cdfffd9d9c072fb57f7253a9a2b3d4e2fb5631c92d275e2->enter($__internal_63d8d088c85436a29cdfffd9d9c072fb57f7253a9a2b3d4e2fb5631c92d275e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_63d8d088c85436a29cdfffd9d9c072fb57f7253a9a2b3d4e2fb5631c92d275e2->leave($__internal_63d8d088c85436a29cdfffd9d9c072fb57f7253a9a2b3d4e2fb5631c92d275e2_prof);

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
