<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_5e6999438b248ec4b4353926c18006a1e70950ac469e0bc26d3a103ac096fbd6 extends Twig_Template
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
        $__internal_c279bc48410d810acc08d97f8c70456d3990929f826ca45fbcf1d0ae26e2219b = $this->env->getExtension("native_profiler");
        $__internal_c279bc48410d810acc08d97f8c70456d3990929f826ca45fbcf1d0ae26e2219b->enter($__internal_c279bc48410d810acc08d97f8c70456d3990929f826ca45fbcf1d0ae26e2219b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c279bc48410d810acc08d97f8c70456d3990929f826ca45fbcf1d0ae26e2219b->leave($__internal_c279bc48410d810acc08d97f8c70456d3990929f826ca45fbcf1d0ae26e2219b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
