<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cd781d3b98682bdb25e4b4d532ca45a48efbc4932c19cd964ee38fa19ae23a18 extends Twig_Template
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
        $__internal_980b64e92d18bf559f674f7940a8e4cc5a08c704eea694bf2de3e3e268a81a8b = $this->env->getExtension("native_profiler");
        $__internal_980b64e92d18bf559f674f7940a8e4cc5a08c704eea694bf2de3e3e268a81a8b->enter($__internal_980b64e92d18bf559f674f7940a8e4cc5a08c704eea694bf2de3e3e268a81a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_980b64e92d18bf559f674f7940a8e4cc5a08c704eea694bf2de3e3e268a81a8b->leave($__internal_980b64e92d18bf559f674f7940a8e4cc5a08c704eea694bf2de3e3e268a81a8b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
