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
        $__internal_fef49f691b6ff480589ada11e85ce8d0c68ef036e8a2b5c8b2f7d1a8be95e2d3 = $this->env->getExtension("native_profiler");
        $__internal_fef49f691b6ff480589ada11e85ce8d0c68ef036e8a2b5c8b2f7d1a8be95e2d3->enter($__internal_fef49f691b6ff480589ada11e85ce8d0c68ef036e8a2b5c8b2f7d1a8be95e2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fef49f691b6ff480589ada11e85ce8d0c68ef036e8a2b5c8b2f7d1a8be95e2d3->leave($__internal_fef49f691b6ff480589ada11e85ce8d0c68ef036e8a2b5c8b2f7d1a8be95e2d3_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_2bcccbd166781877897f6aa30c8159055901d8160b5d018ebffaf0b14abaf1fe = $this->env->getExtension("native_profiler");
        $__internal_2bcccbd166781877897f6aa30c8159055901d8160b5d018ebffaf0b14abaf1fe->enter($__internal_2bcccbd166781877897f6aa30c8159055901d8160b5d018ebffaf0b14abaf1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_2bcccbd166781877897f6aa30c8159055901d8160b5d018ebffaf0b14abaf1fe->leave($__internal_2bcccbd166781877897f6aa30c8159055901d8160b5d018ebffaf0b14abaf1fe_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_af88d62542dad28196a1206e016c62e203b3f5cad4534e67244e449a7c997edc = $this->env->getExtension("native_profiler");
        $__internal_af88d62542dad28196a1206e016c62e203b3f5cad4534e67244e449a7c997edc->enter($__internal_af88d62542dad28196a1206e016c62e203b3f5cad4534e67244e449a7c997edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_af88d62542dad28196a1206e016c62e203b3f5cad4534e67244e449a7c997edc->leave($__internal_af88d62542dad28196a1206e016c62e203b3f5cad4534e67244e449a7c997edc_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d04cb87e6911d553ba2a0f6f521fcf8a4da7ab116a6f93960b9cd67a26bd5cc8 = $this->env->getExtension("native_profiler");
        $__internal_d04cb87e6911d553ba2a0f6f521fcf8a4da7ab116a6f93960b9cd67a26bd5cc8->enter($__internal_d04cb87e6911d553ba2a0f6f521fcf8a4da7ab116a6f93960b9cd67a26bd5cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d04cb87e6911d553ba2a0f6f521fcf8a4da7ab116a6f93960b9cd67a26bd5cc8->leave($__internal_d04cb87e6911d553ba2a0f6f521fcf8a4da7ab116a6f93960b9cd67a26bd5cc8_prof);

    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        $__internal_488b13050576df1a84ecda7af3f2342227e3c8d1df0ae12ef0a7be869d996737 = $this->env->getExtension("native_profiler");
        $__internal_488b13050576df1a84ecda7af3f2342227e3c8d1df0ae12ef0a7be869d996737->enter($__internal_488b13050576df1a84ecda7af3f2342227e3c8d1df0ae12ef0a7be869d996737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_488b13050576df1a84ecda7af3f2342227e3c8d1df0ae12ef0a7be869d996737->leave($__internal_488b13050576df1a84ecda7af3f2342227e3c8d1df0ae12ef0a7be869d996737_prof);

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
