<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_bc2da5ee924bf6c1d7228f5ea65c69c81cb3513423a7aec3562c68e4259784e4 extends Twig_Template
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
        $__internal_7371fef555600ca3d6012c162ddaedc70e86fc77ef5afbb1101a5a70b0678e06 = $this->env->getExtension("native_profiler");
        $__internal_7371fef555600ca3d6012c162ddaedc70e86fc77ef5afbb1101a5a70b0678e06->enter($__internal_7371fef555600ca3d6012c162ddaedc70e86fc77ef5afbb1101a5a70b0678e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7371fef555600ca3d6012c162ddaedc70e86fc77ef5afbb1101a5a70b0678e06->leave($__internal_7371fef555600ca3d6012c162ddaedc70e86fc77ef5afbb1101a5a70b0678e06_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */