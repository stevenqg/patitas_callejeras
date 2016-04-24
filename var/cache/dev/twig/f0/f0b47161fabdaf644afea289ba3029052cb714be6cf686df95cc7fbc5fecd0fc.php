<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c31ff79b23c37c7506fec0ebf32672f0327a7f064c8eeaee6c8f85b259e37608 extends Twig_Template
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
        $__internal_57f6a48b8d21c7a88ecd493c8b00d96eec1358ca5b7d9af701c8ba2d42511a11 = $this->env->getExtension("native_profiler");
        $__internal_57f6a48b8d21c7a88ecd493c8b00d96eec1358ca5b7d9af701c8ba2d42511a11->enter($__internal_57f6a48b8d21c7a88ecd493c8b00d96eec1358ca5b7d9af701c8ba2d42511a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_57f6a48b8d21c7a88ecd493c8b00d96eec1358ca5b7d9af701c8ba2d42511a11->leave($__internal_57f6a48b8d21c7a88ecd493c8b00d96eec1358ca5b7d9af701c8ba2d42511a11_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
