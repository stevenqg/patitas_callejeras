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
        $__internal_a114e1efd45bc3d372f53790204b328204365371876d41d072f5c4a67cd23f53 = $this->env->getExtension("native_profiler");
        $__internal_a114e1efd45bc3d372f53790204b328204365371876d41d072f5c4a67cd23f53->enter($__internal_a114e1efd45bc3d372f53790204b328204365371876d41d072f5c4a67cd23f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a114e1efd45bc3d372f53790204b328204365371876d41d072f5c4a67cd23f53->leave($__internal_a114e1efd45bc3d372f53790204b328204365371876d41d072f5c4a67cd23f53_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_d9eff6b538daa62d7ecbfd713b766b9a249b295fae4749450dd9d1bcf3143269 = $this->env->getExtension("native_profiler");
        $__internal_d9eff6b538daa62d7ecbfd713b766b9a249b295fae4749450dd9d1bcf3143269->enter($__internal_d9eff6b538daa62d7ecbfd713b766b9a249b295fae4749450dd9d1bcf3143269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_d9eff6b538daa62d7ecbfd713b766b9a249b295fae4749450dd9d1bcf3143269->leave($__internal_d9eff6b538daa62d7ecbfd713b766b9a249b295fae4749450dd9d1bcf3143269_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc3954f6e86ccd987dc0d45e2ee02804e7d018eb003b79c31e1acf240ba33c1e = $this->env->getExtension("native_profiler");
        $__internal_bc3954f6e86ccd987dc0d45e2ee02804e7d018eb003b79c31e1acf240ba33c1e->enter($__internal_bc3954f6e86ccd987dc0d45e2ee02804e7d018eb003b79c31e1acf240ba33c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<body class=\"fondlogin\">
\t<div class=\"wor\">
\t\t<div class=\"col-sm-3 col-md-4\"></div>
\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t<div class=\"sectionstile contengroup\">
\t\t\t\t<img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/pun.png"), "html", null, true);
        echo "\"  class=\" tdmd pull-left img-responsive\" alt=\"\">
\t\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/pun.png"), "html", null, true);
        echo "\"  class=\" tdmd pull-right img-responsive\" alt=\"\">
\t\t\t\t<h2><b>INICIAR SESIÓN</b></h2><br>
\t\t\t\t<form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("pc_administrator_login");
        echo "\" style:\"display: block;\">
\t\t\t\t\t<div class=\"input-group\"> 
\t\t\t\t\t\t<span class=\"botpd input-group-addon grupglass\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-user ntb-lg\" aria-hidden=\"true\"></span></span>
\t\t\t\t\t\t<input id=\"email\" name=\"email\" type=\"text\" class=\"imputglass form-control\" placeholder=\"email\" />
\t\t\t\t\t</div>
\t\t\t\t\t <div  class=\"logaler alert-danger\" id=\"username-error\"></div>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"botpd input-group-addon grupglass\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-asterisk ntb-lg\" aria-hidden=\"true\"></span></span>
\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"password\" class=\"imputglass form-control\" placeholder=\"Contraseña\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div  class=\"logaler alert-danger\" id=\"password-error\"></div>
\t\t\t\t\t<br>
\t\t\t\t\t<button class=\"butglass gls\" onClick=\"\" id=\"controlcamp\" type=\"submit\">Registrarse</button>
\t\t\t\t</form>
\t\t\t</div> \t
\t\t</div>
\t\t<div id=\"response\"></div>
\t</div>
";
        
        $__internal_bc3954f6e86ccd987dc0d45e2ee02804e7d018eb003b79c31e1acf240ba33c1e->leave($__internal_bc3954f6e86ccd987dc0d45e2ee02804e7d018eb003b79c31e1acf240ba33c1e_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3ac0df4eaf2d075ee576b60216500facad50679266419d49ed64dbdc5a16b06d = $this->env->getExtension("native_profiler");
        $__internal_3ac0df4eaf2d075ee576b60216500facad50679266419d49ed64dbdc5a16b06d->enter($__internal_3ac0df4eaf2d075ee576b60216500facad50679266419d49ed64dbdc5a16b06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://code.jquery.com/jquery.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/functJquery.js"), "html", null, true);
        echo "\" ></script>
";
        
        $__internal_3ac0df4eaf2d075ee576b60216500facad50679266419d49ed64dbdc5a16b06d->leave($__internal_3ac0df4eaf2d075ee576b60216500facad50679266419d49ed64dbdc5a16b06d_prof);

    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        $__internal_91351780d0d9f7f724b062deca02419ab2223e4fa6a6a985060656672f7839fe = $this->env->getExtension("native_profiler");
        $__internal_91351780d0d9f7f724b062deca02419ab2223e4fa6a6a985060656672f7839fe->enter($__internal_91351780d0d9f7f724b062deca02419ab2223e4fa6a6a985060656672f7839fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_91351780d0d9f7f724b062deca02419ab2223e4fa6a6a985060656672f7839fe->leave($__internal_91351780d0d9f7f724b062deca02419ab2223e4fa6a6a985060656672f7839fe_prof);

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
        return array (  120 => 40,  111 => 37,  107 => 36,  103 => 35,  97 => 34,  70 => 13,  65 => 11,  61 => 10,  54 => 5,  48 => 4,  37 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block scroll_nav %}*/
/* {% endblock %}*/
/* {% block body %}*/
/* <body class="fondlogin">*/
/* 	<div class="wor">*/
/* 		<div class="col-sm-3 col-md-4"></div>*/
/* 		<div class="col-sm-6 col-md-4">*/
/* 			<div class="sectionstile contengroup">*/
/* 				<img src="{{ asset('public/img/pun.png') }}"  class=" tdmd pull-left img-responsive" alt="">*/
/* 				<img src="{{ asset('public/img/pun.png') }}"  class=" tdmd pull-right img-responsive" alt="">*/
/* 				<h2><b>INICIAR SESIÓN</b></h2><br>*/
/* 				<form class="form-horizontal" role="form" method="post" action="{{ path('pc_administrator_login') }}" style:"display: block;">*/
/* 					<div class="input-group"> */
/* 						<span class="botpd input-group-addon grupglass" id="basic-addon1"><span class="glyphicon glyphicon-user ntb-lg" aria-hidden="true"></span></span>*/
/* 						<input id="email" name="email" type="text" class="imputglass form-control" placeholder="email" />*/
/* 					</div>*/
/* 					 <div  class="logaler alert-danger" id="username-error"></div>*/
/* 					<br>*/
/* 					<div class="input-group">*/
/* 						<span class="botpd input-group-addon grupglass" id="basic-addon1"><span class="glyphicon glyphicon-asterisk ntb-lg" aria-hidden="true"></span></span>*/
/* 						<input type="password" name="password" id="password" class="imputglass form-control" placeholder="Contraseña" />*/
/* 					</div>*/
/* 					<div  class="logaler alert-danger" id="password-error"></div>*/
/* 					<br>*/
/* 					<button class="butglass gls" onClick="" id="controlcamp" type="submit">Registrarse</button>*/
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
