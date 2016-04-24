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
        $__internal_79098570a95677f405d9fd61076481e42e444d542f6c4bccf1bf2aa6be23c50c = $this->env->getExtension("native_profiler");
        $__internal_79098570a95677f405d9fd61076481e42e444d542f6c4bccf1bf2aa6be23c50c->enter($__internal_79098570a95677f405d9fd61076481e42e444d542f6c4bccf1bf2aa6be23c50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:encuesta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79098570a95677f405d9fd61076481e42e444d542f6c4bccf1bf2aa6be23c50c->leave($__internal_79098570a95677f405d9fd61076481e42e444d542f6c4bccf1bf2aa6be23c50c_prof);

    }

    // line 3
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_1907096140bceaa68c960d3e7b0c12aad9e653a76040a4c4095c628361e3bee2 = $this->env->getExtension("native_profiler");
        $__internal_1907096140bceaa68c960d3e7b0c12aad9e653a76040a4c4095c628361e3bee2->enter($__internal_1907096140bceaa68c960d3e7b0c12aad9e653a76040a4c4095c628361e3bee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_1907096140bceaa68c960d3e7b0c12aad9e653a76040a4c4095c628361e3bee2->leave($__internal_1907096140bceaa68c960d3e7b0c12aad9e653a76040a4c4095c628361e3bee2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a774b118b6488b27dec41c9a7edb04b7a1b393f6e1057c38995aa87e70a75baa = $this->env->getExtension("native_profiler");
        $__internal_a774b118b6488b27dec41c9a7edb04b7a1b393f6e1057c38995aa87e70a75baa->enter($__internal_a774b118b6488b27dec41c9a7edb04b7a1b393f6e1057c38995aa87e70a75baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a774b118b6488b27dec41c9a7edb04b7a1b393f6e1057c38995aa87e70a75baa->leave($__internal_a774b118b6488b27dec41c9a7edb04b7a1b393f6e1057c38995aa87e70a75baa_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2cd4101bb4e9f6da1de026bf77fa9e545bafd318ba7e5f35db7707f829e203ca = $this->env->getExtension("native_profiler");
        $__internal_2cd4101bb4e9f6da1de026bf77fa9e545bafd318ba7e5f35db7707f829e203ca->enter($__internal_2cd4101bb4e9f6da1de026bf77fa9e545bafd318ba7e5f35db7707f829e203ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_2cd4101bb4e9f6da1de026bf77fa9e545bafd318ba7e5f35db7707f829e203ca->leave($__internal_2cd4101bb4e9f6da1de026bf77fa9e545bafd318ba7e5f35db7707f829e203ca_prof);

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
