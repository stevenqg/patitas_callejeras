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
        $__internal_0d8ccbd530ce5ca95e776a490574c02e21f0154f115621ef0d6eee064022fe41 = $this->env->getExtension("native_profiler");
        $__internal_0d8ccbd530ce5ca95e776a490574c02e21f0154f115621ef0d6eee064022fe41->enter($__internal_0d8ccbd530ce5ca95e776a490574c02e21f0154f115621ef0d6eee064022fe41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_0d8ccbd530ce5ca95e776a490574c02e21f0154f115621ef0d6eee064022fe41->leave($__internal_0d8ccbd530ce5ca95e776a490574c02e21f0154f115621ef0d6eee064022fe41_prof);

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
