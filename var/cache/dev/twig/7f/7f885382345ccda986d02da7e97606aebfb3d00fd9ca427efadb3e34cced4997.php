<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_8f750c747af8561084de2b03668a881df0183ee122e2087bb22f7ce250d41c4c extends Twig_Template
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
        $__internal_373b0a2d21944e41631e29cbf0d06de8f5f698599a355ebf572c9202663fe7aa = $this->env->getExtension("native_profiler");
        $__internal_373b0a2d21944e41631e29cbf0d06de8f5f698599a355ebf572c9202663fe7aa->enter($__internal_373b0a2d21944e41631e29cbf0d06de8f5f698599a355ebf572c9202663fe7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_373b0a2d21944e41631e29cbf0d06de8f5f698599a355ebf572c9202663fe7aa->leave($__internal_373b0a2d21944e41631e29cbf0d06de8f5f698599a355ebf572c9202663fe7aa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
