<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e0ade4d94dd73f9b97d8d74142b0ec38b6b95948f5d2cf35e83739128b249bb0 extends Twig_Template
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
        $__internal_471ff3ca6ab6df2963e8209e28d3da67f80a137041b8b5c2e9737be5f2a9b2ae = $this->env->getExtension("native_profiler");
        $__internal_471ff3ca6ab6df2963e8209e28d3da67f80a137041b8b5c2e9737be5f2a9b2ae->enter($__internal_471ff3ca6ab6df2963e8209e28d3da67f80a137041b8b5c2e9737be5f2a9b2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_471ff3ca6ab6df2963e8209e28d3da67f80a137041b8b5c2e9737be5f2a9b2ae->leave($__internal_471ff3ca6ab6df2963e8209e28d3da67f80a137041b8b5c2e9737be5f2a9b2ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
