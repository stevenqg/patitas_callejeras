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
        $__internal_399bd48852011d83a6b96ceaec206781a69239511039c2e41feb90f2c0119cf8 = $this->env->getExtension("native_profiler");
        $__internal_399bd48852011d83a6b96ceaec206781a69239511039c2e41feb90f2c0119cf8->enter($__internal_399bd48852011d83a6b96ceaec206781a69239511039c2e41feb90f2c0119cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_399bd48852011d83a6b96ceaec206781a69239511039c2e41feb90f2c0119cf8->leave($__internal_399bd48852011d83a6b96ceaec206781a69239511039c2e41feb90f2c0119cf8_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_f555c01c8d0e93a3d50e1a369c0806824ed1c37067a4db102a3b399241650b55 = $this->env->getExtension("native_profiler");
        $__internal_f555c01c8d0e93a3d50e1a369c0806824ed1c37067a4db102a3b399241650b55->enter($__internal_f555c01c8d0e93a3d50e1a369c0806824ed1c37067a4db102a3b399241650b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_f555c01c8d0e93a3d50e1a369c0806824ed1c37067a4db102a3b399241650b55->leave($__internal_f555c01c8d0e93a3d50e1a369c0806824ed1c37067a4db102a3b399241650b55_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f017c202bdc8f0227b541e0f79217a220326b5aea060901de5d93c842fb21f76 = $this->env->getExtension("native_profiler");
        $__internal_f017c202bdc8f0227b541e0f79217a220326b5aea060901de5d93c842fb21f76->enter($__internal_f017c202bdc8f0227b541e0f79217a220326b5aea060901de5d93c842fb21f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t\t<span class=\"botpd input-group-addon grupglass\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-user ntb-lg\" aria-hidden=\"true\" ></span></span>
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
        
        $__internal_f017c202bdc8f0227b541e0f79217a220326b5aea060901de5d93c842fb21f76->leave($__internal_f017c202bdc8f0227b541e0f79217a220326b5aea060901de5d93c842fb21f76_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4008dff92bdcac236f2b8a4cd9dc0b9e4e6c78c3ff3f9e446651a77cb6a31b37 = $this->env->getExtension("native_profiler");
        $__internal_4008dff92bdcac236f2b8a4cd9dc0b9e4e6c78c3ff3f9e446651a77cb6a31b37->enter($__internal_4008dff92bdcac236f2b8a4cd9dc0b9e4e6c78c3ff3f9e446651a77cb6a31b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
\t\t\t<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://code.jquery.com/jquery-latest.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://code.jquery.com/jquery.js"), "html", null, true);
        echo "\"></script>
\t
";
        
        $__internal_4008dff92bdcac236f2b8a4cd9dc0b9e4e6c78c3ff3f9e446651a77cb6a31b37->leave($__internal_4008dff92bdcac236f2b8a4cd9dc0b9e4e6c78c3ff3f9e446651a77cb6a31b37_prof);

    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7ef0eabe03334aecaa754db3f750c0f16a46c2e130f4688c96d3edbd35119a76 = $this->env->getExtension("native_profiler");
        $__internal_7ef0eabe03334aecaa754db3f750c0f16a46c2e130f4688c96d3edbd35119a76->enter($__internal_7ef0eabe03334aecaa754db3f750c0f16a46c2e130f4688c96d3edbd35119a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_7ef0eabe03334aecaa754db3f750c0f16a46c2e130f4688c96d3edbd35119a76->leave($__internal_7ef0eabe03334aecaa754db3f750c0f16a46c2e130f4688c96d3edbd35119a76_prof);

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
        return array (  124 => 42,  114 => 38,  110 => 37,  106 => 36,  103 => 35,  97 => 34,  70 => 13,  65 => 11,  61 => 10,  54 => 5,  48 => 4,  37 => 2,  11 => 1,);
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
/* 						<span class="botpd input-group-addon grupglass" id="basic-addon1"><span class="glyphicon glyphicon-user ntb-lg" aria-hidden="true" ></span></span>*/
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
/* 			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* 			<script src="{{ asset('public/js/bootstrap.min.js') }}" ></script>*/
/* 			<script src="{{ asset('https://code.jquery.com/jquery-latest.js') }}"></script>*/
/* 			<script src="{{ asset('http://code.jquery.com/jquery.js') }}"></script>*/
/* 	*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* {% endblock %}*/
