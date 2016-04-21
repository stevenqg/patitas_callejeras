<?php

/* PCFundationBundle:Admin:login.html.twig */
class __TwigTemplate_06e36385fc61f53868e113d1cde23ebb79abe185a92c2a2b6d601a0652589a43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PCFundationBundle:Admin:login.html.twig", 1);
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
        $__internal_dcb0cda0dc0330cfbd9f558467a047d1b85462c3a74001481e0facda70543b28 = $this->env->getExtension("native_profiler");
        $__internal_dcb0cda0dc0330cfbd9f558467a047d1b85462c3a74001481e0facda70543b28->enter($__internal_dcb0cda0dc0330cfbd9f558467a047d1b85462c3a74001481e0facda70543b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcb0cda0dc0330cfbd9f558467a047d1b85462c3a74001481e0facda70543b28->leave($__internal_dcb0cda0dc0330cfbd9f558467a047d1b85462c3a74001481e0facda70543b28_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_74c5baf3ef9e1ed37d954db3e350cc4f33d3ce950f9ca02af84a4ef98eb86b53 = $this->env->getExtension("native_profiler");
        $__internal_74c5baf3ef9e1ed37d954db3e350cc4f33d3ce950f9ca02af84a4ef98eb86b53->enter($__internal_74c5baf3ef9e1ed37d954db3e350cc4f33d3ce950f9ca02af84a4ef98eb86b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_74c5baf3ef9e1ed37d954db3e350cc4f33d3ce950f9ca02af84a4ef98eb86b53->leave($__internal_74c5baf3ef9e1ed37d954db3e350cc4f33d3ce950f9ca02af84a4ef98eb86b53_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2e0296d0983265c1287d3b53c31f0408cdb9b54b38870beae2c32b0c648a53d = $this->env->getExtension("native_profiler");
        $__internal_d2e0296d0983265c1287d3b53c31f0408cdb9b54b38870beae2c32b0c648a53d->enter($__internal_d2e0296d0983265c1287d3b53c31f0408cdb9b54b38870beae2c32b0c648a53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<body class=\"backfont\">
\t<div class=\"wor\">
\t\t<div class=\"col-sm-1 col-md-4\"></div>
\t\t<div class=\"col-sm-10 col-md-4\">
\t\t\t<div class=\"sectionstile contengroup\">
\t\t\t\t<h2><b>INICIAR SESIÓN</b></h2><br>
\t\t\t\t<form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("pc_administrator_login");
        echo "\" style:\"display: block;\">
\t\t\t\t\t<div class=\"input-group\"> 
\t\t\t\t\t\t<span class=\"botpd input-group-addon\" id=\"basic-addon1\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/adm.png"), "html", null, true);
        echo "\" alt=\"\"></span>
\t\t\t\t\t\t<input id=\"email\" name=\"email\" type=\"text\" class=\"form-control\" placeholder=\"email\" />
\t\t\t\t\t</div>
\t\t\t\t\t <div  class=\"logaler alert-danger\" id=\"username-error\"></div>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"botpd input-group-addon\" id=\"basic-addon1\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/ps.png"), "html", null, true);
        echo "\" alt=\"\"></span>
\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" placeholder=\"Contraseña\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div  class=\"logaler alert-danger\" id=\"password-error\"></div>
\t\t\t\t\t<br>
\t\t\t\t\t<button class=\"butonstile btn btn-lg btn-primary btn-block\" onClick=\"\" id=\"controlcamp\" type=\"submit\">Registrarse</button>
\t\t\t\t</form>
\t\t\t</div> \t
\t\t</div>
\t\t<div id=\"response\"></div>
\t</div>
";
        
        $__internal_d2e0296d0983265c1287d3b53c31f0408cdb9b54b38870beae2c32b0c648a53d->leave($__internal_d2e0296d0983265c1287d3b53c31f0408cdb9b54b38870beae2c32b0c648a53d_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ab317360f15ea5166e907f413018037192c83b581a070aacc5d9e94961ad109f = $this->env->getExtension("native_profiler");
        $__internal_ab317360f15ea5166e907f413018037192c83b581a070aacc5d9e94961ad109f->enter($__internal_ab317360f15ea5166e907f413018037192c83b581a070aacc5d9e94961ad109f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://code.jquery.com/jquery.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/functJquery.js"), "html", null, true);
        echo "\" ></script>
";
        
        $__internal_ab317360f15ea5166e907f413018037192c83b581a070aacc5d9e94961ad109f->leave($__internal_ab317360f15ea5166e907f413018037192c83b581a070aacc5d9e94961ad109f_prof);

    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c2910ef90e2cd17fbdba287d1e2de2e379c967b805658a8c033e6df8ea8c1a79 = $this->env->getExtension("native_profiler");
        $__internal_c2910ef90e2cd17fbdba287d1e2de2e379c967b805658a8c033e6df8ea8c1a79->enter($__internal_c2910ef90e2cd17fbdba287d1e2de2e379c967b805658a8c033e6df8ea8c1a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_c2910ef90e2cd17fbdba287d1e2de2e379c967b805658a8c033e6df8ea8c1a79->leave($__internal_c2910ef90e2cd17fbdba287d1e2de2e379c967b805658a8c033e6df8ea8c1a79_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 38,  109 => 35,  105 => 34,  101 => 33,  95 => 32,  76 => 19,  67 => 13,  62 => 11,  54 => 5,  48 => 4,  37 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block scroll_nav %}*/
/* {% endblock %}*/
/* {% block body %}*/
/* <body class="backfont">*/
/* 	<div class="wor">*/
/* 		<div class="col-sm-1 col-md-4"></div>*/
/* 		<div class="col-sm-10 col-md-4">*/
/* 			<div class="sectionstile contengroup">*/
/* 				<h2><b>INICIAR SESIÓN</b></h2><br>*/
/* 				<form class="form-horizontal" role="form" method="post" action="{{ path('pc_administrator_login') }}" style:"display: block;">*/
/* 					<div class="input-group"> */
/* 						<span class="botpd input-group-addon" id="basic-addon1"><img src="{{ asset('public/img/adm.png') }}" alt=""></span>*/
/* 						<input id="email" name="email" type="text" class="form-control" placeholder="email" />*/
/* 					</div>*/
/* 					 <div  class="logaler alert-danger" id="username-error"></div>*/
/* 					<br>*/
/* 					<div class="input-group">*/
/* 						<span class="botpd input-group-addon" id="basic-addon1"><img src="{{ asset('public/img/ps.png') }}" alt=""></span>*/
/* 						<input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" />*/
/* 					</div>*/
/* 					<div  class="logaler alert-danger" id="password-error"></div>*/
/* 					<br>*/
/* 					<button class="butonstile btn btn-lg btn-primary btn-block" onClick="" id="controlcamp" type="submit">Registrarse</button>*/
/* 				</form>*/
/* 			</div> 	*/
/* 		</div>*/
/* 		<div id="response"></div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* 	<script src="{{ asset('http://code.jquery.com/jquery.js') }}"></script>*/
/* 	<script src="{{ asset('public/js/functJquery.js') }}" ></script>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* {% endblock %}*/
