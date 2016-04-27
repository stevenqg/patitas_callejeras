<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_33f62ea091d0ee0c8a5e8b1053783eeca809804897bf54792aab5c45afbd4a64 extends Twig_Template
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
        $__internal_c77c9c97c103d2995864b62dd0317f7adecee643d58b634e521711fe50a0a4d2 = $this->env->getExtension("native_profiler");
        $__internal_c77c9c97c103d2995864b62dd0317f7adecee643d58b634e521711fe50a0a4d2->enter($__internal_c77c9c97c103d2995864b62dd0317f7adecee643d58b634e521711fe50a0a4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c77c9c97c103d2995864b62dd0317f7adecee643d58b634e521711fe50a0a4d2->leave($__internal_c77c9c97c103d2995864b62dd0317f7adecee643d58b634e521711fe50a0a4d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
