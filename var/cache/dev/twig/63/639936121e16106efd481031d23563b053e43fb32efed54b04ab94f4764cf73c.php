<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_0052bb6d7c52cda4a299cd64b403593293dbf3b487486a179b3240faea31ecf4 extends Twig_Template
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
        $__internal_2e36b6d2dd34fb2b759c0211eb4297c2d129fd6ae93ede4c2ce647bd1a1ca818 = $this->env->getExtension("native_profiler");
        $__internal_2e36b6d2dd34fb2b759c0211eb4297c2d129fd6ae93ede4c2ce647bd1a1ca818->enter($__internal_2e36b6d2dd34fb2b759c0211eb4297c2d129fd6ae93ede4c2ce647bd1a1ca818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2e36b6d2dd34fb2b759c0211eb4297c2d129fd6ae93ede4c2ce647bd1a1ca818->leave($__internal_2e36b6d2dd34fb2b759c0211eb4297c2d129fd6ae93ede4c2ce647bd1a1ca818_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
