<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_7161c117149ac7974b930586ceb7d51c05f43d50fdf4fe10b53525edb8e7d28f extends Twig_Template
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
        $__internal_3df5c38f0e27623405e59f25c8c652fc3bda6eda9075895163fee29d13ed5a20 = $this->env->getExtension("native_profiler");
        $__internal_3df5c38f0e27623405e59f25c8c652fc3bda6eda9075895163fee29d13ed5a20->enter($__internal_3df5c38f0e27623405e59f25c8c652fc3bda6eda9075895163fee29d13ed5a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3df5c38f0e27623405e59f25c8c652fc3bda6eda9075895163fee29d13ed5a20->leave($__internal_3df5c38f0e27623405e59f25c8c652fc3bda6eda9075895163fee29d13ed5a20_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
