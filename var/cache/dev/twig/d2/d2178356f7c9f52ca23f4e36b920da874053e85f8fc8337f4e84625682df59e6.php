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
        $__internal_74b371764ddf124fc8870df6da7ece4cbde895a60283a58961109a05e15c4ced = $this->env->getExtension("native_profiler");
        $__internal_74b371764ddf124fc8870df6da7ece4cbde895a60283a58961109a05e15c4ced->enter($__internal_74b371764ddf124fc8870df6da7ece4cbde895a60283a58961109a05e15c4ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_74b371764ddf124fc8870df6da7ece4cbde895a60283a58961109a05e15c4ced->leave($__internal_74b371764ddf124fc8870df6da7ece4cbde895a60283a58961109a05e15c4ced_prof);

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
