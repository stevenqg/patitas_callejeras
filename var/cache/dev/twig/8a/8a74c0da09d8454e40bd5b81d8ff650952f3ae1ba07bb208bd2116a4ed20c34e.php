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
        $__internal_de2a99353a6b910ad3723f882347e49d5d9b0f0aa1efa2e38172ebb0b00b12da = $this->env->getExtension("native_profiler");
        $__internal_de2a99353a6b910ad3723f882347e49d5d9b0f0aa1efa2e38172ebb0b00b12da->enter($__internal_de2a99353a6b910ad3723f882347e49d5d9b0f0aa1efa2e38172ebb0b00b12da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de2a99353a6b910ad3723f882347e49d5d9b0f0aa1efa2e38172ebb0b00b12da->leave($__internal_de2a99353a6b910ad3723f882347e49d5d9b0f0aa1efa2e38172ebb0b00b12da_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_97db810d2ffa48e86dd2605557e8299c3bd7f4ee4ba9fe2b698ddea68e22bb10 = $this->env->getExtension("native_profiler");
        $__internal_97db810d2ffa48e86dd2605557e8299c3bd7f4ee4ba9fe2b698ddea68e22bb10->enter($__internal_97db810d2ffa48e86dd2605557e8299c3bd7f4ee4ba9fe2b698ddea68e22bb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_97db810d2ffa48e86dd2605557e8299c3bd7f4ee4ba9fe2b698ddea68e22bb10->leave($__internal_97db810d2ffa48e86dd2605557e8299c3bd7f4ee4ba9fe2b698ddea68e22bb10_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_77f482b250b9ea1b29ba375164decd25d80e49a19591733b0ac5d667ec7dbe31 = $this->env->getExtension("native_profiler");
        $__internal_77f482b250b9ea1b29ba375164decd25d80e49a19591733b0ac5d667ec7dbe31->enter($__internal_77f482b250b9ea1b29ba375164decd25d80e49a19591733b0ac5d667ec7dbe31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_77f482b250b9ea1b29ba375164decd25d80e49a19591733b0ac5d667ec7dbe31->leave($__internal_77f482b250b9ea1b29ba375164decd25d80e49a19591733b0ac5d667ec7dbe31_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec0542bcc0cbeb0e7c6a1368d6e5161236b3f8aec8dd53b2537a8fd9ba756150 = $this->env->getExtension("native_profiler");
        $__internal_ec0542bcc0cbeb0e7c6a1368d6e5161236b3f8aec8dd53b2537a8fd9ba756150->enter($__internal_ec0542bcc0cbeb0e7c6a1368d6e5161236b3f8aec8dd53b2537a8fd9ba756150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ec0542bcc0cbeb0e7c6a1368d6e5161236b3f8aec8dd53b2537a8fd9ba756150->leave($__internal_ec0542bcc0cbeb0e7c6a1368d6e5161236b3f8aec8dd53b2537a8fd9ba756150_prof);

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
