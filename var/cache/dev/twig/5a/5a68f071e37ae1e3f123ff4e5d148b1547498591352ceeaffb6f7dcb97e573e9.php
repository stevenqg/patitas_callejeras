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
        $__internal_65fc07c235c755f58b96e2690367b4e15e9f9b903d4c8baed95fa653599aef40 = $this->env->getExtension("native_profiler");
        $__internal_65fc07c235c755f58b96e2690367b4e15e9f9b903d4c8baed95fa653599aef40->enter($__internal_65fc07c235c755f58b96e2690367b4e15e9f9b903d4c8baed95fa653599aef40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:encuesta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65fc07c235c755f58b96e2690367b4e15e9f9b903d4c8baed95fa653599aef40->leave($__internal_65fc07c235c755f58b96e2690367b4e15e9f9b903d4c8baed95fa653599aef40_prof);

    }

    // line 3
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_a7f0f7877b5a294c96361297172b2d86579ed30aa256ee47707122fa73f807e4 = $this->env->getExtension("native_profiler");
        $__internal_a7f0f7877b5a294c96361297172b2d86579ed30aa256ee47707122fa73f807e4->enter($__internal_a7f0f7877b5a294c96361297172b2d86579ed30aa256ee47707122fa73f807e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_a7f0f7877b5a294c96361297172b2d86579ed30aa256ee47707122fa73f807e4->leave($__internal_a7f0f7877b5a294c96361297172b2d86579ed30aa256ee47707122fa73f807e4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c46a06157939cb4b236a6994d53baed5a7b388a832417a42e53389f1dd72e09f = $this->env->getExtension("native_profiler");
        $__internal_c46a06157939cb4b236a6994d53baed5a7b388a832417a42e53389f1dd72e09f->enter($__internal_c46a06157939cb4b236a6994d53baed5a7b388a832417a42e53389f1dd72e09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c46a06157939cb4b236a6994d53baed5a7b388a832417a42e53389f1dd72e09f->leave($__internal_c46a06157939cb4b236a6994d53baed5a7b388a832417a42e53389f1dd72e09f_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2db69e48e0b2294996f7e9b4aec1f4231c92f450639c7d9cc58878b76fe1f96b = $this->env->getExtension("native_profiler");
        $__internal_2db69e48e0b2294996f7e9b4aec1f4231c92f450639c7d9cc58878b76fe1f96b->enter($__internal_2db69e48e0b2294996f7e9b4aec1f4231c92f450639c7d9cc58878b76fe1f96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_2db69e48e0b2294996f7e9b4aec1f4231c92f450639c7d9cc58878b76fe1f96b->leave($__internal_2db69e48e0b2294996f7e9b4aec1f4231c92f450639c7d9cc58878b76fe1f96b_prof);

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
