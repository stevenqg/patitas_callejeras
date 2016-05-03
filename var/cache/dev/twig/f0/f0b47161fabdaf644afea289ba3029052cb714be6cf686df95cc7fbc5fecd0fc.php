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
        $__internal_799886180d86a08ba224463e35fbd95ba8695212d73119e686b5e2e9d4880e66 = $this->env->getExtension("native_profiler");
        $__internal_799886180d86a08ba224463e35fbd95ba8695212d73119e686b5e2e9d4880e66->enter($__internal_799886180d86a08ba224463e35fbd95ba8695212d73119e686b5e2e9d4880e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_799886180d86a08ba224463e35fbd95ba8695212d73119e686b5e2e9d4880e66->leave($__internal_799886180d86a08ba224463e35fbd95ba8695212d73119e686b5e2e9d4880e66_prof);

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
