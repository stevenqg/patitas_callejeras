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
        $__internal_a6db39dcbd8aa6d4d0c3f947ab7122b626facdcfe79a1fe786a6cb4b1bd750c4 = $this->env->getExtension("native_profiler");
        $__internal_a6db39dcbd8aa6d4d0c3f947ab7122b626facdcfe79a1fe786a6cb4b1bd750c4->enter($__internal_a6db39dcbd8aa6d4d0c3f947ab7122b626facdcfe79a1fe786a6cb4b1bd750c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:encuesta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6db39dcbd8aa6d4d0c3f947ab7122b626facdcfe79a1fe786a6cb4b1bd750c4->leave($__internal_a6db39dcbd8aa6d4d0c3f947ab7122b626facdcfe79a1fe786a6cb4b1bd750c4_prof);

    }

    // line 3
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_43d2148454ba0836aa97d13f9a5ad7b9c73aa0a6534842af09de684765c6b09c = $this->env->getExtension("native_profiler");
        $__internal_43d2148454ba0836aa97d13f9a5ad7b9c73aa0a6534842af09de684765c6b09c->enter($__internal_43d2148454ba0836aa97d13f9a5ad7b9c73aa0a6534842af09de684765c6b09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_43d2148454ba0836aa97d13f9a5ad7b9c73aa0a6534842af09de684765c6b09c->leave($__internal_43d2148454ba0836aa97d13f9a5ad7b9c73aa0a6534842af09de684765c6b09c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_02b0d4e8ed43e9ed41a9738524e30bc05431ea23e3a3795f3ea6a488b832de1b = $this->env->getExtension("native_profiler");
        $__internal_02b0d4e8ed43e9ed41a9738524e30bc05431ea23e3a3795f3ea6a488b832de1b->enter($__internal_02b0d4e8ed43e9ed41a9738524e30bc05431ea23e3a3795f3ea6a488b832de1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_02b0d4e8ed43e9ed41a9738524e30bc05431ea23e3a3795f3ea6a488b832de1b->leave($__internal_02b0d4e8ed43e9ed41a9738524e30bc05431ea23e3a3795f3ea6a488b832de1b_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_855cf079e1c325f34e29e6416840e72c125f2661cd880a9bcd799e5a9287ee55 = $this->env->getExtension("native_profiler");
        $__internal_855cf079e1c325f34e29e6416840e72c125f2661cd880a9bcd799e5a9287ee55->enter($__internal_855cf079e1c325f34e29e6416840e72c125f2661cd880a9bcd799e5a9287ee55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_855cf079e1c325f34e29e6416840e72c125f2661cd880a9bcd799e5a9287ee55->leave($__internal_855cf079e1c325f34e29e6416840e72c125f2661cd880a9bcd799e5a9287ee55_prof);

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
