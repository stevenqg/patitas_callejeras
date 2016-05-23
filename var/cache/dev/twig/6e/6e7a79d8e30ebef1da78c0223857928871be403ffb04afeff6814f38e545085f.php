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
        $__internal_47da183a6bf25db18e45c20d76cf8f0c2d915c9de82fe30073b228e723a51843 = $this->env->getExtension("native_profiler");
        $__internal_47da183a6bf25db18e45c20d76cf8f0c2d915c9de82fe30073b228e723a51843->enter($__internal_47da183a6bf25db18e45c20d76cf8f0c2d915c9de82fe30073b228e723a51843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47da183a6bf25db18e45c20d76cf8f0c2d915c9de82fe30073b228e723a51843->leave($__internal_47da183a6bf25db18e45c20d76cf8f0c2d915c9de82fe30073b228e723a51843_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_2ef9a011daf3e02eb0b7d6956459bc6ea58c80f73cad27d20d0358092739da53 = $this->env->getExtension("native_profiler");
        $__internal_2ef9a011daf3e02eb0b7d6956459bc6ea58c80f73cad27d20d0358092739da53->enter($__internal_2ef9a011daf3e02eb0b7d6956459bc6ea58c80f73cad27d20d0358092739da53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_2ef9a011daf3e02eb0b7d6956459bc6ea58c80f73cad27d20d0358092739da53->leave($__internal_2ef9a011daf3e02eb0b7d6956459bc6ea58c80f73cad27d20d0358092739da53_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8738dbf4e83c766d5be87bf7592951b9f521d63e5fedc4169065371dbb4c67b = $this->env->getExtension("native_profiler");
        $__internal_d8738dbf4e83c766d5be87bf7592951b9f521d63e5fedc4169065371dbb4c67b->enter($__internal_d8738dbf4e83c766d5be87bf7592951b9f521d63e5fedc4169065371dbb4c67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d8738dbf4e83c766d5be87bf7592951b9f521d63e5fedc4169065371dbb4c67b->leave($__internal_d8738dbf4e83c766d5be87bf7592951b9f521d63e5fedc4169065371dbb4c67b_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ae38bd8c1c1a6657fa8ae43463d4fbfaed878e7b5459f6ea40e1c3417fc324b4 = $this->env->getExtension("native_profiler");
        $__internal_ae38bd8c1c1a6657fa8ae43463d4fbfaed878e7b5459f6ea40e1c3417fc324b4->enter($__internal_ae38bd8c1c1a6657fa8ae43463d4fbfaed878e7b5459f6ea40e1c3417fc324b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ae38bd8c1c1a6657fa8ae43463d4fbfaed878e7b5459f6ea40e1c3417fc324b4->leave($__internal_ae38bd8c1c1a6657fa8ae43463d4fbfaed878e7b5459f6ea40e1c3417fc324b4_prof);

    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        $__internal_fe31ff280f9d8c59129369374dd6ab6ef12106c864b6de8c8779c28af33eb5fb = $this->env->getExtension("native_profiler");
        $__internal_fe31ff280f9d8c59129369374dd6ab6ef12106c864b6de8c8779c28af33eb5fb->enter($__internal_fe31ff280f9d8c59129369374dd6ab6ef12106c864b6de8c8779c28af33eb5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_fe31ff280f9d8c59129369374dd6ab6ef12106c864b6de8c8779c28af33eb5fb->leave($__internal_fe31ff280f9d8c59129369374dd6ab6ef12106c864b6de8c8779c28af33eb5fb_prof);

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
/* {{ parent() }}*/
/* 	<script src="{{ asset('http://code.jquery.com/jquery.js') }}"></script>*/
/* 	<script src="{{ asset('public/js/functJquery.js') }}" ></script>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* {% endblock %}*/
