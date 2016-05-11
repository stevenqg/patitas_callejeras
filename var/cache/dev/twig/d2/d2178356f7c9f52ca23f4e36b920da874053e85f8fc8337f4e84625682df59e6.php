<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f2dbd89b8e7e466f319929337d067639b7e1847b0d70f307ab0fe8558f598290 extends Twig_Template
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
        $__internal_250259c8c71f9b885280fbd079c4accf6c1897bd7614caa157fda1a7ae9e4cda = $this->env->getExtension("native_profiler");
        $__internal_250259c8c71f9b885280fbd079c4accf6c1897bd7614caa157fda1a7ae9e4cda->enter($__internal_250259c8c71f9b885280fbd079c4accf6c1897bd7614caa157fda1a7ae9e4cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_250259c8c71f9b885280fbd079c4accf6c1897bd7614caa157fda1a7ae9e4cda->leave($__internal_250259c8c71f9b885280fbd079c4accf6c1897bd7614caa157fda1a7ae9e4cda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
