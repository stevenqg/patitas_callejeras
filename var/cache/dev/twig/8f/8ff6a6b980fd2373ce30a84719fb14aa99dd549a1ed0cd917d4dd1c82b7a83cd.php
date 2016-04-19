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
        $__internal_79b8bf3599e3bc171e3eb56cf6c6120927727c763e9bf51839e21e0225628be1 = $this->env->getExtension("native_profiler");
        $__internal_79b8bf3599e3bc171e3eb56cf6c6120927727c763e9bf51839e21e0225628be1->enter($__internal_79b8bf3599e3bc171e3eb56cf6c6120927727c763e9bf51839e21e0225628be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_79b8bf3599e3bc171e3eb56cf6c6120927727c763e9bf51839e21e0225628be1->leave($__internal_79b8bf3599e3bc171e3eb56cf6c6120927727c763e9bf51839e21e0225628be1_prof);

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
