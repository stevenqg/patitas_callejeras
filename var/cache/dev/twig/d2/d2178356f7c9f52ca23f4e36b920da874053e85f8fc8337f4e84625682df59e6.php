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
        $__internal_01aa6722dca68c64157341a10eafc6de23bfcce7c7eafe71563ffde3e86d32d1 = $this->env->getExtension("native_profiler");
        $__internal_01aa6722dca68c64157341a10eafc6de23bfcce7c7eafe71563ffde3e86d32d1->enter($__internal_01aa6722dca68c64157341a10eafc6de23bfcce7c7eafe71563ffde3e86d32d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_01aa6722dca68c64157341a10eafc6de23bfcce7c7eafe71563ffde3e86d32d1->leave($__internal_01aa6722dca68c64157341a10eafc6de23bfcce7c7eafe71563ffde3e86d32d1_prof);

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
