<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8cb961074c595cfb5300650d989fc0502c88fc20f7dadf42bc60360d977475be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7163f9664fe79d96e1719a000fb749d6961807c3272524d7ef960812fe7bdb8 = $this->env->getExtension("native_profiler");
        $__internal_d7163f9664fe79d96e1719a000fb749d6961807c3272524d7ef960812fe7bdb8->enter($__internal_d7163f9664fe79d96e1719a000fb749d6961807c3272524d7ef960812fe7bdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d7163f9664fe79d96e1719a000fb749d6961807c3272524d7ef960812fe7bdb8->leave($__internal_d7163f9664fe79d96e1719a000fb749d6961807c3272524d7ef960812fe7bdb8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
