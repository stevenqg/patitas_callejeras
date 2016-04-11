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
        $__internal_f82e9a39dd3fe92fa643dd54ad37c5b85c9a760dee88dbe8efd6b74ac2b2886f = $this->env->getExtension("native_profiler");
        $__internal_f82e9a39dd3fe92fa643dd54ad37c5b85c9a760dee88dbe8efd6b74ac2b2886f->enter($__internal_f82e9a39dd3fe92fa643dd54ad37c5b85c9a760dee88dbe8efd6b74ac2b2886f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:encuesta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f82e9a39dd3fe92fa643dd54ad37c5b85c9a760dee88dbe8efd6b74ac2b2886f->leave($__internal_f82e9a39dd3fe92fa643dd54ad37c5b85c9a760dee88dbe8efd6b74ac2b2886f_prof);

    }

    // line 3
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_7fd90be288d585797b4bd6156866f5bd70f184b5ac797cffba57bca7a5b3b29e = $this->env->getExtension("native_profiler");
        $__internal_7fd90be288d585797b4bd6156866f5bd70f184b5ac797cffba57bca7a5b3b29e->enter($__internal_7fd90be288d585797b4bd6156866f5bd70f184b5ac797cffba57bca7a5b3b29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_7fd90be288d585797b4bd6156866f5bd70f184b5ac797cffba57bca7a5b3b29e->leave($__internal_7fd90be288d585797b4bd6156866f5bd70f184b5ac797cffba57bca7a5b3b29e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f11ca5ff9d523e841e18829665d961d3f0b1e7744b84de2c1a08f7227b5b47f = $this->env->getExtension("native_profiler");
        $__internal_8f11ca5ff9d523e841e18829665d961d3f0b1e7744b84de2c1a08f7227b5b47f->enter($__internal_8f11ca5ff9d523e841e18829665d961d3f0b1e7744b84de2c1a08f7227b5b47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
</html>
";
        
        $__internal_8f11ca5ff9d523e841e18829665d961d3f0b1e7744b84de2c1a08f7227b5b47f->leave($__internal_8f11ca5ff9d523e841e18829665d961d3f0b1e7744b84de2c1a08f7227b5b47f_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2a0c46180f3ba9fa5b59f02226141ec82adf3f23c383c9940eb52c8196161030 = $this->env->getExtension("native_profiler");
        $__internal_2a0c46180f3ba9fa5b59f02226141ec82adf3f23c383c9940eb52c8196161030->enter($__internal_2a0c46180f3ba9fa5b59f02226141ec82adf3f23c383c9940eb52c8196161030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_2a0c46180f3ba9fa5b59f02226141ec82adf3f23c383c9940eb52c8196161030->leave($__internal_2a0c46180f3ba9fa5b59f02226141ec82adf3f23c383c9940eb52c8196161030_prof);

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
/* </html>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* {% endblock %}*/
