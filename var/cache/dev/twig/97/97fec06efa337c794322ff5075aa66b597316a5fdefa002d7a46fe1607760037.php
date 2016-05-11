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
        $__internal_1f8ea7c570435577fc2117f734bf08cecb3acd4a10276aad15e353f619ad589c = $this->env->getExtension("native_profiler");
        $__internal_1f8ea7c570435577fc2117f734bf08cecb3acd4a10276aad15e353f619ad589c->enter($__internal_1f8ea7c570435577fc2117f734bf08cecb3acd4a10276aad15e353f619ad589c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_1f8ea7c570435577fc2117f734bf08cecb3acd4a10276aad15e353f619ad589c->leave($__internal_1f8ea7c570435577fc2117f734bf08cecb3acd4a10276aad15e353f619ad589c_prof);

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
