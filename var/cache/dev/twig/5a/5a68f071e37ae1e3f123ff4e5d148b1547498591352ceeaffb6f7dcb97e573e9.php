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
        $__internal_c1eebf488e275eb1979920b060022888f3418cf916de572223c47b274a12a6cd = $this->env->getExtension("native_profiler");
        $__internal_c1eebf488e275eb1979920b060022888f3418cf916de572223c47b274a12a6cd->enter($__internal_c1eebf488e275eb1979920b060022888f3418cf916de572223c47b274a12a6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:encuesta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1eebf488e275eb1979920b060022888f3418cf916de572223c47b274a12a6cd->leave($__internal_c1eebf488e275eb1979920b060022888f3418cf916de572223c47b274a12a6cd_prof);

    }

    // line 3
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_1c7477e4568d0b70db51f7e6621415afaa8f3e25d135771b34da64ac2bcfaa87 = $this->env->getExtension("native_profiler");
        $__internal_1c7477e4568d0b70db51f7e6621415afaa8f3e25d135771b34da64ac2bcfaa87->enter($__internal_1c7477e4568d0b70db51f7e6621415afaa8f3e25d135771b34da64ac2bcfaa87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_1c7477e4568d0b70db51f7e6621415afaa8f3e25d135771b34da64ac2bcfaa87->leave($__internal_1c7477e4568d0b70db51f7e6621415afaa8f3e25d135771b34da64ac2bcfaa87_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_51922c3ebdb01e8f2d4135644e17680047dd151f46078dedc5df250baeafe850 = $this->env->getExtension("native_profiler");
        $__internal_51922c3ebdb01e8f2d4135644e17680047dd151f46078dedc5df250baeafe850->enter($__internal_51922c3ebdb01e8f2d4135644e17680047dd151f46078dedc5df250baeafe850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_51922c3ebdb01e8f2d4135644e17680047dd151f46078dedc5df250baeafe850->leave($__internal_51922c3ebdb01e8f2d4135644e17680047dd151f46078dedc5df250baeafe850_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1884f48f9ab82b24ac78af0561bae2dca4df63b531d40092214d83ca17c837dd = $this->env->getExtension("native_profiler");
        $__internal_1884f48f9ab82b24ac78af0561bae2dca4df63b531d40092214d83ca17c837dd->enter($__internal_1884f48f9ab82b24ac78af0561bae2dca4df63b531d40092214d83ca17c837dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_1884f48f9ab82b24ac78af0561bae2dca4df63b531d40092214d83ca17c837dd->leave($__internal_1884f48f9ab82b24ac78af0561bae2dca4df63b531d40092214d83ca17c837dd_prof);

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
