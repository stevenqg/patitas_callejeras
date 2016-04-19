<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0a16629f25521703f316af498cf562816b115516a2e2a7746ee72f4b850de7f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55ff76cda4d438e850bf3e2571aee047743bd0ca2b46f1bc7e37c174136eab70 = $this->env->getExtension("native_profiler");
        $__internal_55ff76cda4d438e850bf3e2571aee047743bd0ca2b46f1bc7e37c174136eab70->enter($__internal_55ff76cda4d438e850bf3e2571aee047743bd0ca2b46f1bc7e37c174136eab70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55ff76cda4d438e850bf3e2571aee047743bd0ca2b46f1bc7e37c174136eab70->leave($__internal_55ff76cda4d438e850bf3e2571aee047743bd0ca2b46f1bc7e37c174136eab70_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_08660a761bb048c3d1471dab320a5ca3b6c6d558c1fc38e97d0255c7c545bfba = $this->env->getExtension("native_profiler");
        $__internal_08660a761bb048c3d1471dab320a5ca3b6c6d558c1fc38e97d0255c7c545bfba->enter($__internal_08660a761bb048c3d1471dab320a5ca3b6c6d558c1fc38e97d0255c7c545bfba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_08660a761bb048c3d1471dab320a5ca3b6c6d558c1fc38e97d0255c7c545bfba->leave($__internal_08660a761bb048c3d1471dab320a5ca3b6c6d558c1fc38e97d0255c7c545bfba_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_412dbf8e2bf7473eaa80b118220b6e2de3d4547571e0a8063003344e40a73cef = $this->env->getExtension("native_profiler");
        $__internal_412dbf8e2bf7473eaa80b118220b6e2de3d4547571e0a8063003344e40a73cef->enter($__internal_412dbf8e2bf7473eaa80b118220b6e2de3d4547571e0a8063003344e40a73cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_412dbf8e2bf7473eaa80b118220b6e2de3d4547571e0a8063003344e40a73cef->leave($__internal_412dbf8e2bf7473eaa80b118220b6e2de3d4547571e0a8063003344e40a73cef_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d08df2bf18ec08ed9a3c6ce9c51374884a825beb3839d6fd36020dccddc500bb = $this->env->getExtension("native_profiler");
        $__internal_d08df2bf18ec08ed9a3c6ce9c51374884a825beb3839d6fd36020dccddc500bb->enter($__internal_d08df2bf18ec08ed9a3c6ce9c51374884a825beb3839d6fd36020dccddc500bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d08df2bf18ec08ed9a3c6ce9c51374884a825beb3839d6fd36020dccddc500bb->leave($__internal_d08df2bf18ec08ed9a3c6ce9c51374884a825beb3839d6fd36020dccddc500bb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
