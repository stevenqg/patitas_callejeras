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
        $__internal_7cd954ceafba0573ad05cd441d68efc8737ed3911753e04f0d571ad8d66e4504 = $this->env->getExtension("native_profiler");
        $__internal_7cd954ceafba0573ad05cd441d68efc8737ed3911753e04f0d571ad8d66e4504->enter($__internal_7cd954ceafba0573ad05cd441d68efc8737ed3911753e04f0d571ad8d66e4504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7cd954ceafba0573ad05cd441d68efc8737ed3911753e04f0d571ad8d66e4504->leave($__internal_7cd954ceafba0573ad05cd441d68efc8737ed3911753e04f0d571ad8d66e4504_prof);

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
