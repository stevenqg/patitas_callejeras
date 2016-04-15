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
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee0660bde7da8c826e27e15a599931bddf175af657946b165a3ad0fb3bf5eca3 = $this->env->getExtension("native_profiler");
        $__internal_ee0660bde7da8c826e27e15a599931bddf175af657946b165a3ad0fb3bf5eca3->enter($__internal_ee0660bde7da8c826e27e15a599931bddf175af657946b165a3ad0fb3bf5eca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee0660bde7da8c826e27e15a599931bddf175af657946b165a3ad0fb3bf5eca3->leave($__internal_ee0660bde7da8c826e27e15a599931bddf175af657946b165a3ad0fb3bf5eca3_prof);

    }

    // line 2
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_e929097a70e7347564b098178e5311a8ae9af9985e018d21bcf713b28fad3537 = $this->env->getExtension("native_profiler");
        $__internal_e929097a70e7347564b098178e5311a8ae9af9985e018d21bcf713b28fad3537->enter($__internal_e929097a70e7347564b098178e5311a8ae9af9985e018d21bcf713b28fad3537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_e929097a70e7347564b098178e5311a8ae9af9985e018d21bcf713b28fad3537->leave($__internal_e929097a70e7347564b098178e5311a8ae9af9985e018d21bcf713b28fad3537_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b59cd7809bcda5f74574a0420c4300bac45b7aeb7190e1beb6c9616c73c70db = $this->env->getExtension("native_profiler");
        $__internal_0b59cd7809bcda5f74574a0420c4300bac45b7aeb7190e1beb6c9616c73c70db->enter($__internal_0b59cd7809bcda5f74574a0420c4300bac45b7aeb7190e1beb6c9616c73c70db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<body class=\"backfont\">
\t<div class=\"wor\">
\t\t<div class=\"col-sm-1 col-md-4\"></div>
\t\t<div class=\"col-sm-10 col-md-4\">
\t\t\t<div class=\"sectionstile contengroup\">
\t\t\t\t<h2><b>INICIAR SESIÓN</b></h2><br>
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"botpd input-group-addon\" id=\"basic-addon1\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/adm.png"), "html", null, true);
        echo "\" alt=\"\"></span>
\t\t\t\t\t<input id=\"username\" type=\"text\" class=\"form-control\" placeholder=\"Usuario\" >
\t\t\t\t</div>
\t\t\t\t <div  class=\"logaler alert-danger\" id=\"username-error\"></div>
\t\t\t\t<br>
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"botpd input-group-addon\" id=\"basic-addon1\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/ps.png"), "html", null, true);
        echo "\" alt=\"\"></span>
\t\t\t\t\t<input type=\"password\" id=\"password\" class=\"form-control\" placeholder=\"Contaraseña\">
\t\t\t\t</div>
\t\t\t\t<div  class=\"logaler alert-danger\" id=\"password-error\"></div>
\t\t\t\t<br>
\t\t\t\t<button class=\"butonstile btn btn-lg btn-primary btn-block\" onclick=\"\" id=\"controlcamp\" type=\"submit\">Registrarse</button>
\t\t\t</div> \t
\t\t</div>
\t</div>
";
        
        $__internal_0b59cd7809bcda5f74574a0420c4300bac45b7aeb7190e1beb6c9616c73c70db->leave($__internal_0b59cd7809bcda5f74574a0420c4300bac45b7aeb7190e1beb6c9616c73c70db_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5953d74718cd0783de8d2171c0caf64a96d22ec6d7ae0da2f5cac071483bfd4 = $this->env->getExtension("native_profiler");
        $__internal_e5953d74718cd0783de8d2171c0caf64a96d22ec6d7ae0da2f5cac071483bfd4->enter($__internal_e5953d74718cd0783de8d2171c0caf64a96d22ec6d7ae0da2f5cac071483bfd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://code.jquery.com/jquery.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/functJquery.js"), "html", null, true);
        echo "\" ></script>
";
        
        $__internal_e5953d74718cd0783de8d2171c0caf64a96d22ec6d7ae0da2f5cac071483bfd4->leave($__internal_e5953d74718cd0783de8d2171c0caf64a96d22ec6d7ae0da2f5cac071483bfd4_prof);

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
        return array (  102 => 32,  98 => 31,  94 => 30,  88 => 29,  71 => 18,  62 => 12,  53 => 5,  47 => 4,  36 => 2,  11 => 1,);
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
/* 				<div class="input-group">*/
/* 					<span class="botpd input-group-addon" id="basic-addon1"><img src="{{ asset('public/img/adm.png') }}" alt=""></span>*/
/* 					<input id="username" type="text" class="form-control" placeholder="Usuario" >*/
/* 				</div>*/
/* 				 <div  class="logaler alert-danger" id="username-error"></div>*/
/* 				<br>*/
/* 				<div class="input-group">*/
/* 					<span class="botpd input-group-addon" id="basic-addon1"><img src="{{ asset('public/img/ps.png') }}" alt=""></span>*/
/* 					<input type="password" id="password" class="form-control" placeholder="Contaraseña">*/
/* 				</div>*/
/* 				<div  class="logaler alert-danger" id="password-error"></div>*/
/* 				<br>*/
/* 				<button class="butonstile btn btn-lg btn-primary btn-block" onclick="" id="controlcamp" type="submit">Registrarse</button>*/
/* 			</div> 	*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* 	<script src="{{ asset('http://code.jquery.com/jquery.js') }}"></script>*/
/* 	<script src="{{ asset('public/js/functJquery.js') }}" ></script>*/
/* {% endblock %}*/
