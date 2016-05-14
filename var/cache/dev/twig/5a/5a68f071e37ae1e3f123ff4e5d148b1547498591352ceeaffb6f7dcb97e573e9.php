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
        $__internal_e4ce643f544d2f34588d9ec1f4830a38396fae098526b0decf1fee2e82451280 = $this->env->getExtension("native_profiler");
        $__internal_e4ce643f544d2f34588d9ec1f4830a38396fae098526b0decf1fee2e82451280->enter($__internal_e4ce643f544d2f34588d9ec1f4830a38396fae098526b0decf1fee2e82451280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:encuesta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4ce643f544d2f34588d9ec1f4830a38396fae098526b0decf1fee2e82451280->leave($__internal_e4ce643f544d2f34588d9ec1f4830a38396fae098526b0decf1fee2e82451280_prof);

    }

    // line 3
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_75904180481d80a9e4085ff6f9435f3487095007871d48287b77d6811f101023 = $this->env->getExtension("native_profiler");
        $__internal_75904180481d80a9e4085ff6f9435f3487095007871d48287b77d6811f101023->enter($__internal_75904180481d80a9e4085ff6f9435f3487095007871d48287b77d6811f101023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_75904180481d80a9e4085ff6f9435f3487095007871d48287b77d6811f101023->leave($__internal_75904180481d80a9e4085ff6f9435f3487095007871d48287b77d6811f101023_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_79c6bc3b9f54f1cf590cd5b652cf7b6cfabd3f47ee0a1e7e14591d972d4d043a = $this->env->getExtension("native_profiler");
        $__internal_79c6bc3b9f54f1cf590cd5b652cf7b6cfabd3f47ee0a1e7e14591d972d4d043a->enter($__internal_79c6bc3b9f54f1cf590cd5b652cf7b6cfabd3f47ee0a1e7e14591d972d4d043a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_79c6bc3b9f54f1cf590cd5b652cf7b6cfabd3f47ee0a1e7e14591d972d4d043a->leave($__internal_79c6bc3b9f54f1cf590cd5b652cf7b6cfabd3f47ee0a1e7e14591d972d4d043a_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_baf42073c1be854f6a64a7b7b39fca0dd2247a37322208fc28a6d5d0e87efd28 = $this->env->getExtension("native_profiler");
        $__internal_baf42073c1be854f6a64a7b7b39fca0dd2247a37322208fc28a6d5d0e87efd28->enter($__internal_baf42073c1be854f6a64a7b7b39fca0dd2247a37322208fc28a6d5d0e87efd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_baf42073c1be854f6a64a7b7b39fca0dd2247a37322208fc28a6d5d0e87efd28->leave($__internal_baf42073c1be854f6a64a7b7b39fca0dd2247a37322208fc28a6d5d0e87efd28_prof);

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
