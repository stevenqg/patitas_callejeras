<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a86c4ce7def51d98b557d3b5baea0f49f6e05c2f0a63183f2d491d6060b6a68d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23f313fce4cb188b67765a1dd11f288177a71edd6fa07771acaf6eddfa924f18 = $this->env->getExtension("native_profiler");
        $__internal_23f313fce4cb188b67765a1dd11f288177a71edd6fa07771acaf6eddfa924f18->enter($__internal_23f313fce4cb188b67765a1dd11f288177a71edd6fa07771acaf6eddfa924f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_23f313fce4cb188b67765a1dd11f288177a71edd6fa07771acaf6eddfa924f18->leave($__internal_23f313fce4cb188b67765a1dd11f288177a71edd6fa07771acaf6eddfa924f18_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca245831c461756aaada664f85b89c836bc1df12499d93518327e5dab8ac3811 = $this->env->getExtension("native_profiler");
        $__internal_ca245831c461756aaada664f85b89c836bc1df12499d93518327e5dab8ac3811->enter($__internal_ca245831c461756aaada664f85b89c836bc1df12499d93518327e5dab8ac3811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ca245831c461756aaada664f85b89c836bc1df12499d93518327e5dab8ac3811->leave($__internal_ca245831c461756aaada664f85b89c836bc1df12499d93518327e5dab8ac3811_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
