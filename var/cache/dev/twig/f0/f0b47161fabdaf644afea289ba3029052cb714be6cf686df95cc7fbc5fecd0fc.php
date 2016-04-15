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
        $__internal_c2816c80273ebd8cbbba4dde7b217dfef3806eadbebc10f69fa75aa315f6b536 = $this->env->getExtension("native_profiler");
        $__internal_c2816c80273ebd8cbbba4dde7b217dfef3806eadbebc10f69fa75aa315f6b536->enter($__internal_c2816c80273ebd8cbbba4dde7b217dfef3806eadbebc10f69fa75aa315f6b536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c2816c80273ebd8cbbba4dde7b217dfef3806eadbebc10f69fa75aa315f6b536->leave($__internal_c2816c80273ebd8cbbba4dde7b217dfef3806eadbebc10f69fa75aa315f6b536_prof);

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
